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

namespace Gpupo\CommonSchema\Tests\ORM\Entity\Banking\Report;

use Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\ORM\Decorator\Banking\Report\Records;
use Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record;
use Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report as ReportORM;
use Gpupo\CommonSchema\Tests\AbstractTestCase;
use Gpupo\CommonSdk\Traits\ResourcesTrait;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report
 */
class ReportTest extends AbstractTestCase
{
    use ResourcesTrait;

    public function dataProviderReport()
    {
        $data = $this->getResourceYaml('/fixtures/banking/report/report.yaml');
        $arrayCollection = new Report($data);
        $converter = new ArrayCollectionConverter();
        $orm = $converter->convertToOrm($arrayCollection);

        return [[$orm, $data]];
    }

    /**
     * @dataProvider dataProviderReport
     */
    public function testGetReportNumber(ReportORM $report, array $expected)
    {
        $this->assertSame($expected['external_id'], $report->getExternalId());
    }

    /**
     * @dataProvider dataProviderReport
     */
    public function testPersist(ReportORM $report, array $expected)
    {
        $em = $this->getDoctrineEntityManager();
        $repository = $em->getRepository(ReportORM::class);

        if (!$repository->exists($report)) {
            $em->persist($report);
            $em->flush();
        }

        $id = (int) $expected['external_id'];
        $row = $repository->findOneByObject($report);

        $this->assertInstanceOf(ReportORM::class, $row, sprintf('Loaded object #%s', $id));
        $this->assertSame($id, $row->getExternalId(), 'external_id');
    }

    public function testFindTradingRecords()
    {
        $repository = $this->getDoctrineEntityManager()->getRepository(Record::class);
        $list = $repository->findByExternalId(1657955112);
        $this->assertNotNull($list);

        $this->assertSame(2, $list->count());

        foreach ($list as $record) {
            $this->assertInstanceOf(Record::class, $record);
            $this->assertSame(1657955112, $record->getExternalId());
        }

        return $list;
    }

    /**
     * @depends testFindTradingRecords
     */
    public function testSumOfRecordsWithMediation(Records $records)
    {
        $this->assertSame(0.0, $records->getTotalOf('gross_amount'), 'gross');
        $this->assertSame(0.0, $records->getTotalGross(), 'gross with alias');
        $this->assertSame(0.0, $records->getTotalOf('fee_amount'), 'fee');
        $this->assertSame(0.0, $records->getTotalFee(), 'fee with alias');

        $this->assertSame(0.0, $records->getTotalOf('financing_fee_amount'), 'financing_fee');
        $this->assertSame(0.0, $records->getTotalOf('shipping_fee_amount'), 'shipping_fee');
        $this->assertSame(0.0, $records->getTotalOf('taxes_amount'), 'taxes');
        $this->assertSame(0.0, $records->getTotalOf('coupon_amount'), 'coupon');

        $this->assertSame(289.32, $records->getTotalOf('net_credit_amount'), 'credit');
        $this->assertSame(289.32, $records->getTotalOf('net_debit_amount'), 'debit');
    }

    public function testSumOfRecordsWithoutMediation()
    {
        $records = $this->getDoctrineEntityManager()->getRepository(Record::class)
            ->findByExternalId(1698739593);

        $this->assertSame(117.6, $records->getTotalOf('gross_amount'), 'gross');
        $this->assertSame(-18.82, $records->getTotalOf('fee_amount'), 'fee');

        $this->assertSame(0.0, $records->getTotalOf('financing_fee_amount'), 'financing_fee');
        $this->assertSame(0.0, $records->getTotalOf('shipping_fee_amount'), 'shipping_fee');
        $this->assertSame(0.0, $records->getTotalOf('taxes_amount'), 'taxes');
        $this->assertSame(0.0, $records->getTotalOf('coupon_amount'), 'coupon');

        $this->assertSame(98.78, $records->getTotalOf('net_credit_amount'), 'credit');
        $this->assertSame(0.0, $records->getTotalOf('net_debit_amount'), 'debit');

        $sum = ($records->getTotalOf('fee_amount', true) + $records->getTotalOf('net_credit_amount'));

        $this->assertSame($records->getTotalOf('gross_amount'), $sum, 'double check');
    }
}
