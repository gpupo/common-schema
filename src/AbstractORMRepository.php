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

    protected function defaultFindByParameters(ORMEntityInterface $entity): array
    {
        return ['id' => $entity->getId()];
    }

    protected function decorateResultCollection($result): ?ArrayCollection
    {
        if (empty($result)) {
            return null;
        }

        return new ArrayCollection($result);
    }
}
