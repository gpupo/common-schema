<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Console\Command;

use Gpupo\Common\Traits\OptionsTrait;
use Gpupo\CommonSdk\Console\Command\AbstractCommand as Core;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RaiseCommand extends Core
{
    use OptionsTrait;

    protected $originNamespace = 'Gpupo\\CommonSchema\\Build';
    protected $originPath = 'build';

    public function getDefaultOptions()
    {
        return [
            'rootPath' => '.',
            'libPath' => false,
            'namespace' => getenv('CS_RAISE_NAMESPACE'),
            'path' => getenv('CS_RAISE_PATH'),
        ];
    }

    protected function configure()
    {
        $this->setName('raise:build')->setDescription('Raise a namespace');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Check source file at <info>%sbuild</>', $this->getOptions()->get('libPath')));
        $this->buildSuperclasses($output);

        $output->writeln('Done');

        return 0;
    }

    protected function buildSuperclasses(OutputInterface $output): void
    {
        $command = './'.$this->getOptions()->get('libPath').'bin/build.sh '.$this->getDestPath().' '.$this->getOptions()->get('namespace');
        $output->writeln(sprintf('Excecuting [%s]', $command));
        shell_exec($command);
    }

    protected function getDestPath(): string
    {
        return $this->getOptions()->get('rootPath').'/'.$this->getOptions()->get('path');
    }
}
