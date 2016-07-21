<?php

/*
 * This file is part of gpupo/common-schema
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\CommonSchema;

use Gpupo\Common\Entity\CollectionAbstract;

abstract class AbstractTranslator extends CollectionAbstract
{
    public function setNative(CollectionAbstract $collection)
    {
        $this->set('native', $collection);

        return $this;
    }

    public function getNative()
    {
        return $this->get('native');
    }

    public function setForeign(CollectionAbstract $collection)
    {
        $this->set('foreign', $collection);

        return $this;
    }

    public function getForeign()
    {
        return $this->get('foreign');
    }

    abstract public function translateTo();

    abstract public function translateFrom();
}
