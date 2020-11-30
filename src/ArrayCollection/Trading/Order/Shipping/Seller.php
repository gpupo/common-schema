<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping;

use Gpupo\CommonSchema\ArrayCollection\Organization\AbstractCompany;

class Seller extends AbstractCompany
{
    protected $tableName = 'trading_order_shipping_seller';
}
