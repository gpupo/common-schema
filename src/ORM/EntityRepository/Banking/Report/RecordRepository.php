<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\EntityRepository\Banking\Report;

use Gpupo\Common\Entity\ArrayCollection;
use Gpupo\CommonSchema\ORM\EntityDecorator\Banking\Report\Records;
use Gpupo\CommonSchema\ORM\EntityRepository\AbstractEntityRepository;

/**
 * RecordRepository.
 *
 * Here's custom repository methods, persistent after rebuild
 */
class RecordRepository extends AbstractEntityRepository
{
    public function findCreatedAfter($datetime)
    {
    }

    public function findByExternalId($external_id): ?Records
    {
        $array = $this->findBy(['external_id' => $external_id]);

        if (empty($array)) {
            return null;
        }

        if (\is_array($array)) {
            $array = new ArrayCollection($array);
        }

        return $this->factoryCollection($array);
    }

    protected function factoryCollection($result)
    {
        $decorator = new Records();
        $decorator->absorb($result);

        return $decorator;
    }
}
