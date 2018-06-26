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

namespace Gpupo\CommonSchema\Converters;

use Gpupo\Common\Entity\CollectionInterface;
use Gpupo\Common\Tools\StringTool;
use Gpupo\CommonSdk\Entity\Schema\Tools;

class ArrayCollectionConverter
{
    public function convertToOrm(CollectionInterface $arrayCollection)
    {
        $target = '\\'.str_replace('ArrayCollection', 'ORM\Entity', get_class($arrayCollection));
        $orm = new $target();

        foreach ($arrayCollection->getSchema() as $key => $type) {
            $sufix = StringTool::snakeCaseToCamelCase($key, true);
            $value = $arrayCollection->{sprintf('get%s', $sufix)}();

            if (null === $value) {
                continue;
            }

            $setter = sprintf('set%s', $sufix);
            $adder = sprintf('add%s', StringTool::normalizeToSingular($sufix));

            if ($value instanceof CollectionInterface) {
                if (method_exists($orm, $adder)) {
                    foreach ($value as $item) {
                        if ($item->hasValues()) {
                            $orm->{$adder}($this->convertToOrm($item));
                        }
                    }
                } else {
                    if ($value->hasValues()) {
                        $child = $this->convertToOrm($value);

                        $orm->{$setter}($child);
                    }
                }
            } else {
                $orm->{$setter}($value);
            }
        }

        return $orm;
    }
}
