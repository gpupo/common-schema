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

namespace Gpupo\CommonSchema;

use Gpupo\Common\Entity\CollectionAbstract;
use Gpupo\CommonSchema\Converters\ConverterContainerTrait;

abstract class AbstractTranslator extends CollectionAbstract
{
    use ConverterContainerTrait;

    public function setNative(CollectionAbstract $collection)
    {
        $this->set('native', $collection);

        return $this;
    }

    public function getNative()
    {
        return $this->get('native');
    }

    public function setForeign(TranslatorDataCollection $collection)
    {
        $this->set('foreign', $collection);

        return $this;
    }

    public function getForeign()
    {
        $data = $this->get('foreign');

        if (!$data instanceof TranslatorDataCollection) {
            throw new TranslatorException('Foreign object missed!');
        }

        return $data;
    }

    public function doExport()
    {
        $object = $this->export();

        return $this->decorateByConversionType($object);
    }

    public function doImport()
    {
        $object = $this->import();

        return $object;
    }

    abstract public function export();

    abstract public function import();

    protected function factoryOutputCollection(array $array)
    {
        return new TranslatorDataCollection($array);
    }
}
