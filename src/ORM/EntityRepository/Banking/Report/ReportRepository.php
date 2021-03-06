<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\EntityRepository\Banking\Report;

use Gpupo\CommonSchema\ORM\Entity\EntityInterface;
use Gpupo\CommonSchema\ORM\EntityRepository\AbstractEntityRepository;

/**
 * ReportRepository.
 * Here's custom repository methods, persistent after rebuild.
 */
class ReportRepository extends AbstractEntityRepository
{
    public function findByFileName($file_name)
    {
        return $this->findOneBy(['file_name' => $file_name]);
    }

    protected function defaultFindByParameters(EntityInterface $entity): array
    {
        return ['file_name' => $entity->getFileName()];
    }
}
