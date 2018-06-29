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

namespace Gpupo\CommonSchema\ORM\Decorator;

use Doctrine\ORM\PersistentCollection;
use  Gpupo\Common\Tools\Absorbed\AbsorbedAware;

abstract class AbstractCollectionDecorator extends AbstractDecorator implements CollectionDecoratorInterface
{
    use AbsorbedAware;

    public function __call($method, $args)
    {
        return $this->accessAbsorbed()->{$method}();
    }

    public function getTotalOf($key, $convertToPositiveValue = false)
    {
        $list = $this->getElementsValuesByKey($key);

        $value = (float) array_sum($list);

        if (true === $convertToPositiveValue && 0 > $value) {
            return -$value;
        }

        return $value;
    }

    public function setPersistentCollection(PersistentCollection $persistentCollection)
    {
        dump($persistentCollection->count());
        $this->absorb($persistentCollection);
    }

    protected function sliceValuesBy($getter)
    {
        $list = [];

        foreach ($this->accessAbsorbed() as $record) {
            $list[] = $record->{$getter}();
        }

        return $list;
    }
}