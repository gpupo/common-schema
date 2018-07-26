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

namespace Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shipping;

use Doctrine\ORM\Query\Expr\Join;
use Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Conciliation\Conciliation;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Invoice\Invoice;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment;
use Gpupo\CommonSchema\ORMEntityInterface;

/**
 * ShippingRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ShippingRepository extends \Gpupo\CommonSchema\AbstractORMRepository
{
    public function findAllReadyForConciliation()
    {
        $queryBuilder = $this->createQueryBuilder('entity');
        $queryBuilder = $this->findAllReadyForConciliationQueryBuilder($queryBuilder);

        return $queryBuilder->getQuery()->execute();
    }

    public function findAllReadyForConciliationQueryBuilder($queryBuilder)
    {
        $queryBuilder
            ->join(Payment::class, 'payment', Join::WITH, 'entity.id = payment.shipping')
            ->join(Record::class, 'record', Join::WITH, 'payment.payment_number = record.source_id')
            ->join(Invoice::class, 'invoice', Join::WITH, 'entity.id = invoice.shipping')
            ->leftJoin(Conciliation::class, 'conciliation', Join::WITH, 'entity.id = conciliation.shipping');

        $subQuery = $this->getEntityManager()->createQueryBuilder();
        $subQuery->select($subQuery->expr()->max('co.id'))
            ->from(Conciliation::class, 'co')
            ->where($subQuery->expr()->eq('co.shipping', 'entity'));

        $queryBuilder->andWhere(
            $queryBuilder->expr()->orX(
                $queryBuilder->expr()->isNull('conciliation'),
                $queryBuilder->expr()->andX(
                    $queryBuilder->expr()->isNotNull('conciliation'),
                    $queryBuilder->expr()->orX(
                        $queryBuilder->expr()->neq('entity.total_payments_amount', 'conciliation.amount'),
                        $queryBuilder->expr()->neq('entity.total_payments_net_amount', 'conciliation.net_amount')
                    ),
                    $queryBuilder->expr()->eq('conciliation.id', sprintf('(%s)', $subQuery->getDql()))
                )
            )
        );

        return $queryBuilder;
    }

    public function findAllReadyForConciliationButWithoutInvoice()
    {
        $queryBuilder = $this->createQueryBuilder('entity');
        $queryBuilder = $this->findAllReadyForConciliationButWithoutInvoiceQueryBuilder($queryBuilder);

        return $queryBuilder->getQuery()->execute();
    }

    public function findAllReadyForConciliationButWithoutInvoiceQueryBuilder($queryBuilder)
    {
        $queryBuilder
            ->join('entity.payments', 'payment')
            ->join(Record::class, 'record', Join::WITH, 'payment.payment_number = record.source_id')
            ->leftJoin(Invoice::class, 'invoice', Join::WITH, 'entity.id = invoice.shipping')
            ->leftJoin(Conciliation::class, 'conciliation', Join::WITH, 'entity.id = conciliation.shipping')
            ->where('conciliation.id IS NULL')
            ->andWhere('invoice.id IS NULL');

        return $queryBuilder;
    }

    protected function defaultFindByParameters(ORMEntityInterface $entity): array
    {
        return ['shipping_number' => $entity->getShippingNumber()];
    }
}
