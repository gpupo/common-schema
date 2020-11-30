<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Converters;

trait ConverterContainerTrait
{
    private $conversionType = false;

    public function setConversionType($string)
    {
        $this->conversionType = mb_strtoupper($string);

        return $this;
    }

    public function getConversionType()
    {
        return $this->conversionType;
    }

    protected function decorateByConversionType($object)
    {
        if ('ORM' === $this->getConversionType()) {
            $converter = new ArrayCollectionConverter();

            return $converter->convertToOrm($object);
        }

        return $object;
    }
}
