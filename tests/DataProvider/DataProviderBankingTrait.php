<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Tests\DataProvider;

use Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSdk\Traits\ResourcesTrait;

trait DataProviderBankingTrait
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

    protected function addFixtureReport()
    {
        $this->persistIfNotExist($this->dataProviderReport()[0][0]);
    }
}
