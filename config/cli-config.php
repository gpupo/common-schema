<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Gpupo\CommonSchema\Tests\Bootstrap;

require __DIR__.'/bootstrap.php';

$command = isset($argv[1]) ? explode(':', $argv[1])[1] : null;

if (in_array($command, ['generate-entities', 'generate-repositories'], true)) {
    echo " - Using YAML/NO Connection config\n";
    $isDevMode = true;
    $evm = new Doctrine\Common\EventManager();
    $config = Setup::createYAMLMetadataConfiguration([__DIR__.'/../Resources/metadata/'], $isDevMode);
    $entityManager = EntityManager::create([
      'driver' => 'pdo_sqlite',
    ], $config, $evm);
} else {
    echo " - Using main config\n";
    $entityManager = Bootstrap::factoryDoctrineEntityManager();
}

return ConsoleRunner::createHelperSet($entityManager);
