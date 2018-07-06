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

class FactoryDecorator
{
    public static function createCollectionDecorator($class, $value, $key): ?CollectionDecoratorInterface
    {
        $decoratorClassName = sprintf('\%s\%s', str_replace('Entity', 'Decorator', substr($class, 0, strrpos($class, '\\'))), ucfirst($key));
        $decoratorClassName = str_replace('\\Proxies\\__CG__\\', '', $decoratorClassName); //Fix doctrine proxies
        if (!class_exists($decoratorClassName)) {
            throw new DecoratorException(sprintf('Decorator [%s] not found', $decoratorClassName));
        }

        $decorator = new $decoratorClassName();

        if ($value instanceof PersistentCollection) {
            if (1 > $value->count()) {
                throw new DecoratorException(sprintf('PersistentCollection [%s::%s] has empty result', $class, $key));
            }

            $decorator->absorb($value);

            return $decorator;
        }

        return null;
    }
}
