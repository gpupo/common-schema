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

namespace Gpupo\CommonSchema\Tests\Bridge\Trading\Order\Shipping;

use Gpupo\CommonSchema\Bridge\Trading\Order\Shipping\PaymentBridge;
use Gpupo\CommonSchema\ORM\Decorator\Banking\Report\Records;
use Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment;
use Gpupo\CommonSchema\Tests\AbstractTestCase;
use Gpupo\CommonSchema\Tests\DataProvider\DataProviderBankingTrait;

/**
 * @coversNothing
 */
class PaymentBridgeTest extends AbstractTestCase
{
    use DataProviderBankingTrait;

    /**
     * @dataProvider dataProviderReport
     */
    public function testAccessNewBankingRecords(Report $report, array $expected)
    {
        $this->truncate(Payment::class);
        $this->persistIfNotExist($report);
        $bridge = new PaymentBridge($this->getDoctrineEntityManager());
        $records = $bridge->getNewReportRecords();

        if (null === $records) {
            $this->truncate(Payment::class);
            $records = $bridge->getNewReportRecords();
        }

        $this->assertInstanceOf(Records::class, $records);

        return $bridge;
    }
}
