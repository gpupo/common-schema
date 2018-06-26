<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Gpupo\CommonSchema\Tests\Bootstrap;

require 'vendor/autoload.php';

$command = isset($argv[1]) ? explode(':', $argv[1])[1] : null;

if (in_array($command, ['generate-entities', 'generate-repositories'], true)) {
    echo "\nUsing YAML/NO Connection config\n";
    $isDevMode = true;
    $evm = new Doctrine\Common\EventManager();
    $config = Setup::createYAMLMetadataConfiguration([__DIR__."/../Resources/metadata/"], $isDevMode);
    $entityManager = EntityManager::create([
      'driver'  => 'pdo_sqlite',
    ], $config, $evm);
} else {
  $entityManager = Bootstrap::factoryDoctrineEntityManager();
}

return ConsoleRunner::createHelperSet($entityManager);
