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

namespace Gpupo\CommonSchema\Console\Command;

use Gpupo\CommonSchema\ArrayCollection\Application\API\OAuth\Provider;
use Gpupo\CommonSchema\ArrayCollection\Application\Scheduler\Job\Execution;
use Gpupo\CommonSchema\ArrayCollection\Banking\Movement\Movement;
use Gpupo\CommonSchema\ArrayCollection\Banking\Report\Report;
use Gpupo\CommonSchema\ArrayCollection\Organization\Company;
use Gpupo\CommonSchema\ArrayCollection\People\Person;
use Gpupo\CommonSchema\ArrayCollection\Trading\Trading;
use Gpupo\CommonSdk\Console\DoctrineOrmEntityGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MetadataCommand extends Command
{
    protected function configure()
    {
        $this->setName('metadata:build')->setDescription('Buil doctrine metadata files');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $generator = new DoctrineOrmEntityGenerator(new ArgvInput(), $output);

        try {
            foreach ([new Trading(), new Person(), new Company(), new Report(), new Provider(), new Execution(), new Movement()] as $object) {
                $generator->recursiveSave($object);
            }
        } catch (\Exception $exception) {
            $output->writeln(sprintf('<error>%s</>', $exception->getMessage()));
        }
        $generator->debug();
    }
}
