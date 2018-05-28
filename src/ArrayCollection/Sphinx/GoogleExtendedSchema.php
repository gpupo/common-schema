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

namespace Gpupo\CommonSchema\ArrayCollection\Sphinx;

/**
 * {@inheritdoc}
 */
class GoogleExtendedSchema extends GoogleSchema
{
    public $extra_field = [
        'document_slug' => ['attr' => 'string'],
    ];

    public $extra_attr = [
        'sale_price_discount' => ['type' => 'float'],
        'sale_price_percentage' => ['type' => 'float'],
    ];

    public function __construct()
    {
        $this->field = array_merge($this->field, $this->extra_field);
        $this->attr = array_merge($this->attr, $this->extra_attr);

        parent::__construct();
    }
}
