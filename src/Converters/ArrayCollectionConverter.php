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

class ArrayCollectionConverter
{
    public function convertToOrm(CollectionInterface $arrayCollection)
    {
        $target = '\\'.str_replace('ArrayCollection', 'ORM\Entity', get_class($arrayCollection));
        $orm = new $target();

        foreach($arrayCollection->getSchema() as $key => $type) {
            $sufix = StringTool::snakeCaseToCamelCase($key, true);
            $singular = StringTool::normalizeToSingular($sufix);
            $value = $arrayCollection->{sprintf('get%s', $sufix)}();

            if (empty($value)) {
                continue;
            }

            if ('object' === $type) {
                if (method_exists($orm, sprintf('add%s', $singular))) {
                    foreach($value as $item) {
                        $orm->{sprintf('add%s', $singular)}($this->convertToOrm($item));
                    }
                } else {
                  $orm->{sprintf('set%s', $sufix)}($this->convertToOrm($value));
                }
            } else {
              $orm->{sprintf('set%s', $sufix)}($value);
            }
        }

        return $orm;
    }
}
