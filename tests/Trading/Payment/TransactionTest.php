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

use Gpupo\CommonSchema\Trading\Payment\Order;
use Gpupo\CommonSchema\Trading\Payment\Payment;
use Gpupo\CommonSchema\Trading\Payment\Customer;
use Gpupo\CommonSchema\Trading\Payment\Seller;
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
          'transaction_number' => 999999,
          'description'=> 'string',
          'amount' => 10.0,
          'financial_institution' => 'string',
          'order' => new Order(),
          'payment' => new Payment(),
          'customer' => new Customer(),
          'seller'=> new Seller(),
          'date_created' =>  new \Datetime,
          'date_last_modified' => new \Datetime,
        ];

        return [[new Transaction($data), $data]];
    }

    /**
     * @testdox ``getSchema()``
     * @cover ::getSchema
     * @dataProvider dataProviderTransaction
     */
    public function testGetSchema(Transaction $transaction)
    {
        $this->assertInternalType('array', $transaction->getSchema());
    }

    /**
     * @cover ::getTransactionNumber
     * @dataProvider dataProviderTransaction
     */
    public function testGetTransactionNumber(Transaction $transaction, $expected)
    {
        $this->assertSame($expected['transaction_number'], $transaction->getTransactionNumber());
    }

    /**
    * @cover ::getDescription
    * @dataProvider dataProviderTransaction
    */
    public function testGetDescription(Transaction $transaction, $expected)
    {
      $this->assertSame($expected['description'], $transaction->getDescription());
    }

    /**
    * @cover ::getAmount
    * @dataProvider dataProviderTransaction
    */
    public function testGetAmount(Transaction $transaction, $expected)
    {
      $this->assertSame($expected['amount'], $transaction->getAmount());
    }

    /**
    * @cover ::getFinancialInstitution
    * @dataProvider dataProviderTransaction
    */
    public function testGetFinancialInstitution(Transaction $transaction, $expected)
    {
      $this->assertSame($expected['financial_institution'], $transaction->getFinancialInstitution());
    }

    /**
    * @cover ::getOrder
    * @dataProvider dataProviderTransaction
    */
    public function testGetOrder(Transaction $transaction)
    {
      $this->assertInstanceOf(Order::class, $transaction->getOrder());
    }

    /**
    * @cover ::getPayment
    * @dataProvider dataProviderTransaction
    */
    public function testGetPayment(Transaction $transaction)
    {
      $this->assertInstanceOf(Payment::class, $transaction->getPayment());
    }

    /**
    * @cover ::getCustomer
    * @dataProvider dataProviderTransaction
    */
    public function testGetCustomer(Transaction $transaction)
    {
      $this->assertInstanceOf(Customer::class, $transaction->getCustomer());
    }

    /**
    * @cover ::getSeller
    * @dataProvider dataProviderTransaction
    */
    public function testGetSeller(Transaction $transaction)
    {
      $this->assertInstanceOf(Seller::class, $transaction->getSeller());
    }

    /**
    * @cover ::getDateCreated
    * @dataProvider dataProviderTransaction
    */
    public function testGetDateCreated(Transaction $transaction, $expected)
    {
      //$this->assertInstanceOf(, $transaction->getDateCreated());
    }


}
