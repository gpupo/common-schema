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

namespace Gpupo\CommonSchema\Tests\ArrayCollection\Banking\Report;

use Gpupo\CommonSchema\ArrayCollection\Banking\Report\Record;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ArrayCollection\Banking\Report\Record
 */
class RecordTest extends AbstractTestCase
{
    /**
     * @return \Gpupo\CommonSchema\ArrayCollection\Banking\Report\Record
     */
    public function dataProviderRecord()
    {
        $data = [
          'date' => '2017-02-09T17:08:21.000-04:00',
          'source_id' => '3628220487',
          'external_id' => '1684847823',
          'record_type' => 'release',
          'description' => 'mediation',
          'net_credit_amount' => '0.00',
          'net_debit_amount' => '188.50',
          'gross_amount' => '-211.80',
          'fee_amount' => '23.30',
          'financing_fee_amount' => '0.00',
          'shipping_fee_amount' => '0.00',
          'taxes_amount' => '0.00',
          'coupon_amount' => '0.00',
          'installments' => '1',
          'payment_method' => 'account_money',
        ];

        return [[new Record($data), $data]];
    }

    /**
     * @dataProvider dataProviderRecord
     *
     * @param mixed $expected
     */
    public function testGetRecordNumber(Record $record, $expected)
    {
        $this->assertSame((int) $expected['source_id'], $record->getSourceId());
    }

    /**
     * @dataProvider dataProviderRecord
     *
     * @param mixed $expected
     */
    public function testGetGrossAmount(Record $record, $expected)
    {
        $this->assertSame((float) $expected['gross_amount'], $record->getGrossAmount());
    }
}
