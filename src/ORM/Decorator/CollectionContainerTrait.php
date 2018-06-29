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

trait CollectionContainerTrait
{
    public function getDecorator($key)
    {
        $getter = sprintf('get%s', ucfirst($key));
        $value = $this->{$getter}();
        $decoratorClassName = sprintf('\%s\%s', str_replace('Entity', 'Decorator', substr(get_called_class(), 0, strrpos(get_called_class(), '\\'))), ucfirst($key));

        if (!class_exists($decoratorClassName)) {
            throw new \InvalidArgumentException(sprintf('Decorator [%s] not found', $decoratorClassName));
        }

        $decorator = new $decoratorClassName();

        if ($value instanceof PersistentCollection) {
            $decorator->setPersistentCollection($value);
        }

        return $decorator;
    }
}
