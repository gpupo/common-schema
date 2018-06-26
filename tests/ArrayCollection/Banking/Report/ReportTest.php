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
use Gpupo\CommonSchema\ArrayCollection\Banking\Report\Records;
use Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report
 */
class ReportTest extends AbstractTestCase
{
    /**
     * @return \Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report
     */
    public function dataProviderReport()
    {
        $data =
         [
           'records' => [[
              'date' => '2017-02-09T17:08:21.000-04:00',
              'source_id' => '3628220487',
              'external_reference' => '1684847823',
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
            ]],
          ];

        return [[new Report($data), $data]];
    }

    /**
     * @dataProvider dataProviderReport
     *
     * @param mixed $expected
     */
    public function testGetRecords(Report $report, $expected)
    {
        $this->assertInstanceOf(Records::class, $report->getRecords());
        $this->assertInstanceOf(Record::class, $report->getRecords()->first());
    }

    /**
     * @dataProvider dataProviderReport
     *
     * @param mixed $expected
     */
    public function testRecordValue(Report $report, $expected)
    {
        $this->assertSame((int) $expected['records'][0]['source_id'], $report->getRecords()->first()->getSourceId());
        $this->assertSame((float) $expected['records'][0]['gross_amount'], $report->getRecords()->first()->getGrossAmount());
    }
}
