<?php

namespace Gpupo\CommonSchema\Sphinx;

class Google
{
    protected $schema = array(
        'field' => array(
            'title'                     => array('attr' => 'string'),
            'description'               => array('attr' => 'string'),
            'gtin'                      => array('attr' => 'string'),
            'google_product_category'   => array('attr' => 'string'),
            'product_type'              => array('attr' => 'string'),
            'brand'                     => array('attr' => 'string'),
            'size'                      => array('attr' => 'string'),
            'color'                     => array('attr' => 'string'),
        ),
        'attr' => array(
            'link'                      => array('type' => 'string'),
            'id'                        => array('type' => 'int', 'bits' => 20),
            'price'                     => array('type' => 'float'),
            'sale_price'                => array('type' => 'float'),
            'sale_price_effective_date' => array('type' => 'string'),
            'mpn'                       => array('type' => 'string'),
            'image_link'                => array('type' => 'string'),
            'condition'                 => array('type' => 'string'),
            'availability'              => array('type' => 'string'),
            'gender'                    => array('type' => 'string'),
            'age_group'                 => array('type' => 'string'),
            'shipping_weight'           => array('type' => 'string'),
            'adwords_redirect'          => array('type' => 'string'),
            'online_only'               => array('type' => 'string'),
            'installment_months'        => array('type' => 'int', 'bits' => 5),
            'installment_amount'        => array('type' => 'float'),
            'product_review_count'      => array('type' => 'int', 'bits' => 5),
            'product_review_average'    => array('type' => 'int', 'bits' => 5),
        ),
    );

    public function getSchema()
    {
        return $this->schema;
    }
}