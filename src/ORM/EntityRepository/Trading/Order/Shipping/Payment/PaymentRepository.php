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

namespace Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\Shipping\Payment;

use Gpupo\CommonSchema\ORM\Entity\EntityInterface;
use Gpupo\CommonSchema\ORM\EntityRepository\AbstractEntityRepository;

/**
 *  PaymentRepository..
 *
 * Here's custom repository methods, persistent after rebuild
 */
class PaymentRepository extends AbstractEntityRepository
{
    public function findByPaymentNumber(int $payment_number)
    {
        return $this->findOneBy(['payment_number' => $payment_number]);
    }

    protected function defaultFindByParameters(EntityInterface $entity): array
    {
        return ['payment_number' => $entity->getPaymentNumber()];
    }
}
