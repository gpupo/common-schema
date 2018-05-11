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

$sku = [
     'itemOffered' => [
         'name' => 'string',
         'sku' => 'string',
         'gtin' => 'string',
         'brand' => 'string',
     ],
     'price' => 'string',
     'price' => 'string',
     'discount' => 'string',
     'quantity' => 'string',
     'freight' => 'string',
     'total' => 'string',
 ];

 return [
    'merchant' => [
        'name' => 'string',
        'marketplace' => 'string',
        'originNumber' => 'string',
    ],
    'orderNumber' => 'string',
    'currency' => 'string',
    'price' => 'string',
    'quantity' => 'string',
    'total' => 'string',
    'freight' => 'string',
    'acceptedOffer' => [
        $sku,
    ],
    'url' => 'string',
    'orderStatus' => 'string',
    'paymentMethod' => 'string',
    'paymentMethodId' => 'string',
    'orderDate' => 'string',
    'isGift' => 'string',
    'discount' => 'string',
    'customer' => [
        'name' => 'string',
        'document' => 'string',
        'birthDate' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'telephone' => 'string',
        'cellphone' => 'string',
    ],
    'billingAddress' => [
        'name' => 'string',
        'streetAddress' => 'string',
        'addressLocality' => 'string',
        'addressRegion' => 'string',
        'addressCountry' => 'string',
        'postalCode' => 'string',
        'postOfficeBoxNumber' => 'string',
        'addressComplement' => 'string',
        'addressNumber' => 'string',
        'addressNeighborhood' => 'string',
        'addressReference' => 'string',
    ],
    'invoice' => [
        'number' => 'string',
        'line' => 'string',
        'accessKey' => 'string',
        'issueDate' => 'string',
        'shipDate' => 'string',
        'url' => 'string',
    ],
    'tracking' => [
        'carrier' => 'string',
        'deliveryDate' => 'string',
        'estimatedDeliveryDate' => 'string',
        'deliveryService' => 'string',
        'shipDate' => 'string',
        'trackingLink' => 'string',
        'trackingNumber' => 'string',
        'trackingShipDate' => 'string',
    ],
 ];
