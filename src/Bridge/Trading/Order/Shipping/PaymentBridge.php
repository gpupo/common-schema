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
            ->leftJoin(Payment::class, 'p', 'WITH', 'p.payment_number = u.source_id')
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
            $payment = $this->convertRecordIntoPayment($record);
            $em->persist($payment);
            $collection->add($payment);
        }

        $em->flush();

        return $collection;
    }

    public function convertRecordIntoPayment(Record $record)
    {
        $payment = new Payment();
        $payment->setPaymentNumber($record->getSourceId())
            ->setCurrencyId('BRL')
            ->setStatus($record->getDescription())
            ->setTransactionAmount($record->getGrossAmount())
            ->setTransactionNetAmount($record->getGrossAmount())
                 //->setExpands($record);
                 ;

        return $payment;
    }
}
//
// 'collector' => 'string',
// 'status' => 'string',
// 'status_code' => 'string',
// 'status_detail' => 'string',
// 'transaction_amount' => 'number',
// 'transaction_net_amount' => 'number',
// 'shipping_cost' => 'number',
// 'overpaid_amount' => 'number',
// 'total_paid_amount' => 'number',
// 'marketplace_fee' => 'number',
// 'coupon_amount' => 'number',
// 'date_created' => 'datetime',
// 'date_last_modified' => 'datetime',
// 'card_id' => 'string',
// 'reason' => 'string',
// 'activation_uri' => 'string',
// 'payment_method_id' => 'string',
// 'installments' => 'integer',
// 'issuer_id' => 'integer',
// 'atm_transfer_reference' => 'oneToOneBidirectional',
// 'coupon_id' => 'string',
// 'operation_type' => 'string',
// 'payment_type' => 'string',
// 'available_actions' => 'array',
// 'installment_amount' => 'number',
// 'deferred_period' => 'string',
// 'date_approved' => 'datetime',
// 'authorization_code' => 'string',
// 'transaction_order_id' => 'string',
// 'tags' => 'array',
// 'expands' => 'array',

//date: "2017-02-09T17:08:21.000-04:00"
   //date_created: null
   //date_last_modified: null
   //description: "mediation"
   //external_id: 1684847823
   //fee_amount: 23.3
   //financing_fee_amount: 0.0
   //gross_amount: -211.8
   //installments: 1
   //net_credit_amount: 0.0
   //net_debit_amount: 188.5
   //payment_method: "account_money"
   //record_type: "release"
   //shipping_fee_amount: 0.0
   //source_id: 73628220487
   //taxes_amount: 0.0
   //report: DoctrineProxies\__CG__\Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report {#806 …2}
   //id: 7
