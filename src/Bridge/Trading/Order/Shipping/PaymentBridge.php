<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\CommonSchema\Bridge\Trading\Order\Shipping;

use Doctrine\ORM\EntityManagerInterface;
use Gpupo\Common\Tools\Doctrine\DoctrineManagerAwareTrait;
use Gpupo\CommonSchema\ORM\Decorator\Trading\Order\Shipping\Payments;
use Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment;

class PaymentBridge
{
    use DoctrineManagerAwareTrait;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->setDoctrine($entityManager);
    }

    public function getNewReportRecords()
    {
        $em = $this->getDoctrineEntityManager();
        $repository = $em->getRepository(Record::class);
        $queryBuilder = $repository->createQueryBuilder('u');
        $queryBuilder
            ->leftJoin(Payment::class, 'p', 'WITH', 'p.payment_number = u.source_id AND p.operation_type = u.record_type')
            ->where($queryBuilder->expr()->in('u.description', ['payment', 'mediation']))
            ->andWhere($queryBuilder->expr()->gte('u.createdAt', ':created_at'))
            ->andWhere($queryBuilder->expr()->isNull('p.id'))
            ->setParameter('created_at', '2017-02-09T09:24:00.000-04:00');

        return $repository->getCollectionFromQueryBuilder($queryBuilder);
    }

    public function createNewPayments()
    {
        $em = $this->getDoctrineEntityManager();
        $records = $this->getNewReportRecords();

        $collection = new Payments();
        foreach ($records->toArray() as $record) {
            $payment = $this->convertRecordIntoPayment($record, $em);
            $em->persist($payment);
            $em->flush();
            $collection->add($payment);
        }

        return $collection;
    }

    public function convertRecordIntoPayment(Record $record, EntityManagerInterface $em)
    {
        $payment = new Payment();
        $fee_amount = ($record->getFeeAmount() + $record->getShippingFeeAmount() + $record->getFinancingFeeAmount());
        $total_net_amount = $record->getGrossAmount() + $fee_amount;
        $payment->setPaymentNumber($record->getSourceId())
            ->setCurrencyId('BRL')
            ->setStatus($record->getDescription())
            ->setTransactionAmount($record->getGrossAmount())
            ->setTransactionNetAmount($total_net_amount)
            ->setDateCreated($record->getDate())
            ->setPaymentMethodId($record->getPaymentMethod())
            ->setTransactionOrderId($record->getExternalId())
            ->setPaymentType($record->getRecordType())
            ->setOperationType($record->getDescription())
            ->setInstallments($record->getInstallments())
            ->setShippingCost($record->getShippingFeeAmount())
            ->setMarketplaceFee($fee_amount)
            ->setCollector('mercadopago')
            ->addTag('bridge')
            ;

        return $payment;
    }
}
