<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\EntityDecorator;

trait CollectionContainerTrait
{
    public function getDecorator($key): ?CollectionDecoratorInterface
    {
        $getter = sprintf('get%s', ucfirst($key));

        return FactoryDecorator::createCollectionDecorator(static::class, $this, $getter, $key);
    }
}
