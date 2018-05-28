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

namespace Gpupo\CommonSchema\ArrayCollection\Thing;

use Gpupo\CommonSdk\Entity\CollectionAbstract;
use Gpupo\CommonSdk\Entity\CollectionContainerInterface;

abstract class AbstractCollection extends CollectionAbstract implements CollectionInterface, CollectionContainerInterface
{
    protected $type;

    public function getAssociationMappingType()
    {
        if (empty($this->type)) {
            throw new \InvalidArgumentException(sprintf('Collection Type missing on %s', get_class($this)));
        }

        return $this->type;
    }

    public function factoryElement($data)
    {
        throw new \InvalidArgumentException('factoryElement() must be implemented!');
    }
}
