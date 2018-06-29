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

use Gpupo\Common\Tools\StringTool;

abstract class AbstractDecorator implements DecoratorInterface
{
    public function getElementsValuesByKey($key)
    {
        if (1 > $this->count()) {
            throw new DecoratorException('Required at least one element!');
        }

        $getter = sprintf('get%s', StringTool::snakeCaseToCamelCase($key, true));

        return $this->sliceValuesBy($getter);
    }

    protected function sliceValuesBy($getter)
    {
        $list = [];
        foreach ($this->toArray() as $record) {
            $list[] = $record->{$getter}();
        }

        return $list;
    }
}
