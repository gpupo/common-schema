<?php

namespace Gpupo\CommonSchema\Sphinx;

use Gpupo\CommonSchema\SchemaAbstract;
use Gpupo\CommonSchema\SchemaInterface;


/**
 * Products Feed Specification https://support.google.com/merchants/answer/188494?hl=pt-BR
 */
class GoogleSchema extends SchemaAbstract implements SchemaInterface
{
    public $field = array(
        'channel'                   => array('attr' => 'string'),
        'title'                     => array('attr' => 'string'),
        'description'               => array('attr' => 'string'),
        'sku'                       => array('attr' => 'string'),
        'category'                  => array('attr' => 'string'),
        'type'                      => array('attr' => 'string'),
        'brand'                     => array('attr' => 'string'),
        'size'                      => array('attr' => 'string'),
        'color'                     => array('attr' => 'string'),
        'gender'                    => array('attr' => 'string'),
        'availability'              => array('attr' => 'string'),
    );

    public $attr = array(
        'link'                      => array('type' => 'string'),
        'id'                        => array('type' => 'int', 'bits' => 20),
        'price'                     => array('type' => 'float'),
        'sale_price'                => array('type' => 'float'),
        'sale_price_effective_date' => array('type' => 'string'),
        'mpn'                       => array('type' => 'string'),
        'image_link'                => array('type' => 'string'),
        'condition'                 => array('type' => 'string'),
        'age_group'                 => array('type' => 'string'),
        'shipping_weight'           => array('type' => 'string'),
        'online_only'               => array('type' => 'string'),
        'installment_months'        => array('type' => 'int', 'bits' => 5),
        'installment_amount'        => array('type' => 'float'),
        'review_count'              => array('type' => 'int', 'bits' => 5),
        'review_average'            => array('type' => 'int', 'bits' => 5),
    );

    public $key_conversion = array(
        'g:'                        => '',
        'gtin'                      => 'sku',
        'product_type'              => 'type',
        'google_product_category'   => 'category',
        'product_review_count'      => 'review_count',
        'product_review_average'    => 'review_average',
    );

    public function normalizeFieldName($name)
    {
        $tag = str_replace(array_keys($this->key_conversion), $this->key_conversion, $name);

        if (in_array($tag, array('months', 'amount'))) {
            $tag = 'installment_' . $tag;
        }

        return $tag;
    }

    public function getSluggables()
    {
        return  array (
            'title',
            'category',
            'brand',
            'size',
            'color',
            'availability',
        );
    }
}
