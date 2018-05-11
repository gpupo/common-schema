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

namespace Gpupo\CommonSchema\Trading;

trait OrderTrait
{
    protected function getMerchant()
    {
        return ['name' => ''];
    }

    protected function getPriceCurrency()
    {
    }

    protected function getAcceptedOffer()
    {
    }

    protected function getUrl()
    {
    }

    protected function getPaymentMethod()
    {
    }

    protected function getPaymentMethodId()
    {
    }

    protected function getIsGift()
    {
    }

    protected function getDiscountCurrency()
    {
    }

    protected function getCustomer()
    {
    }

    protected function getBillingAddress()
    {
    }

    protected function getPrice()
    {
    }

    protected function getDiscount()
    {
    }

    protected function getOrderNumber()
    {
    }

    protected function getOrderStatus()
    {
    }

    protected function getOrderDate()
    {
    }
}
