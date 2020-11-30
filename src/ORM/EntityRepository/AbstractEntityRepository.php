<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\EntityRepository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Gpupo\Common\Entity\ArrayCollection;
use Gpupo\CommonSchema\ORM\Entity\EntityInterface;

abstract class AbstractEntityRepository extends EntityRepository
{
    public function exists(EntityInterface $entity): bool
    {
        return (null !== $this->findOneByObject($entity)) ? true : false;
    }

    public function findOneByObject(EntityInterface $entity): ?EntityInterface
    {
        return $this->findOneBy($this->defaultFindByParameters($entity));
    }

    public function findByObject(EntityInterface $entity): ?ArrayCollection
    {
        return $this->decorateResultCollection($this->findBy($this->defaultFindByParameters($entity)));
    }

    public function applyToQueryBuilderCollection(QueryBuilder $queryBuilder)
    {
        return $queryBuilder;
    }

    public function getCollectionFromQueryBuilder(QueryBuilder $queryBuilder)
    {
        $decorated = $this->applyToQueryBuilderCollection($queryBuilder);
        $query = $decorated->getQuery();

        return $this->decorateResultCollection($query->getResult());
    }

    protected function defaultFindByParameters(EntityInterface $entity): array
    {
        return ['id' => $entity->getId()];
    }

    protected function factoryCollection($result)
    {
        return new ArrayCollection($result);
    }

    protected function decorateResultCollection($result)
    {
        if (empty($result)) {
            return null;
        }

        return $this->factoryCollection($result);
    }
}
