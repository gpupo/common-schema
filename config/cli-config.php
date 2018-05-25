<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require 'vendor/autoload.php';

$isDevMode = true;

$config = Setup::createYAMLMetadataConfiguration([__DIR__."/yaml"], $isDevMode);

//
// $namespaces = array(
//     __DIR__."/yaml" => 'Gpupo\CommonSchema\Entity',
// );
// $driver = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver($namespaces);
// $driver->setGlobalBasename('global');
// $config->setMetadataDriverImpl($driver);
//


$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../var/db.sqlite',
);

$entityManager = EntityManager::create($conn, $config);

return ConsoleRunner::createHelperSet($entityManager);
