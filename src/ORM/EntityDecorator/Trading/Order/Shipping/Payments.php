<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\EntityDecorator\Trading\Order\Shipping;

use Gpupo\CommonSchema\ORM\EntityDecorator\AbstractCollectionDecorator;

class Payments extends AbstractCollectionDecorator
{
    public function getTotalAmount()
    {
        return $this->getTotalOf('transaction_amount');
    }

    public function getTotalNetAmount()
    {
        return $this->getTotalOf('transaction_net_amount');
    }
}
