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

namespace Gpupo\CommonSchema\Tests\DataProvider;

use Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\ORMEntityInterface;
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

    public function persistIfNotExist(ORMEntityInterface $report)
    {
        $em = $this->getDoctrineEntityManager();
        $repository = $em->getRepository(get_class($report));

        if (!$repository->exists($report)) {
            $em->persist($report);
            $em->flush();

            return true;
        }

        return false;
    }
}
