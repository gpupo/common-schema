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

namespace Gpupo\CommonSchema;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Gpupo\Common\Entity\ArrayCollection;

abstract class AbstractORMRepository extends EntityRepository
{
    public function exists(ORMEntityInterface $entity): bool
    {
        return (null !== $this->findOneByObject($entity)) ? true : false;
    }

    public function findOneByObject(ORMEntityInterface $entity): ?ORMEntityInterface
    {
        return $this->findOneBy($this->defaultFindByParameters($entity));
    }

    public function findByObject(ORMEntityInterface $entity): ?ArrayCollection
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

    protected function defaultFindByParameters(ORMEntityInterface $entity): array
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
