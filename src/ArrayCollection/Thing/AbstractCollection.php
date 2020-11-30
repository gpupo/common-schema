<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Thing;

use Gpupo\CommonSdk\Entity\CollectionAbstract;
use Gpupo\CommonSdk\Entity\CollectionContainerInterface;

abstract class AbstractCollection extends CollectionAbstract implements CollectionInterface, CollectionContainerInterface
{
    protected $type;

    public function getAssociationMappingType()
    {
        if (empty($this->type)) {
            throw new \InvalidArgumentException(sprintf('Collection Type missing on %s', static::class));
        }

        return $this->type;
    }

    public function factoryElement($data)
    {
        throw new \InvalidArgumentException('factoryElement() must be implemented!');
    }
}
