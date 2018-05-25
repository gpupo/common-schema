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

namespace Gpupo\Tests\CommonSchema\Trading\Payment;

use Gpupo\Tests\CommonSchema\AbstractTestCase;

use Gpupo\CommonSchema\Trading\Order\Order;
use Gpupo\CommonSchema\Trading\Payment\Payment;
use Gpupo\CommonSchema\Trading\Order\Customer\Customer;
use Gpupo\CommonSchema\Trading\Order\Shippings\Seller;
use Gpupo\CommonSchema\Trading\Payment\Transaction;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\Trading\Payment\Transaction
 */
class TransactionTest extends AbstractTestCase
{
    /**
     * @return \Gpupo\CommonSchema\Trading\Payment\Transaction
     */
    public function dataProviderTransaction()
    {
        $data = [
          'transaction_number' => 99,
          'description'=> 'string',
          'amount' => 10.0,
          'financial_institution' => 'string',
          'order' => new Order(),
          'payment'=> new Payment(),
          'customer' => new Customer(),
          'seller'=> new Seller(),
          'date_created' =>  new \Datetime,
          'date_last_modified' => new \Datetime,
        ];

        return [[new Transaction($data), $data]];
    }

    /**
     * @dataProvider dataProviderTransaction
     *
     * @param mixed $expected
     */
    public function testGetTransactionNumber(Transaction $transaction, $expected)
    {
        $this->assertSame($expected['transaction_number'], $transaction->getTransactionNumber());
    }
}
