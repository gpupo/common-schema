<?php

namespace Gpupo\CommonSchema\Sphinx;

/**
 * @inheritDoc
 */
class GoogleExtendedSchema extends GoogleSchema
{
    public $extra_field = array(
        //'availability'              => array('attr' => 'string'),
    );

    public $extra_attr = array(
        'sale_price_discount'         => array('type' => 'float'),
        'sale_price_percentage'       => array('type' => 'float'),

    );

    public function __construct()
    {
        $this->field = array_merge($this->field, $this->extra_field);
        $this->attr = array_merge($this->attr, $this->extra_attr);

        parent::__construct();
    }
}
