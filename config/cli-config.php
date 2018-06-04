<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require 'vendor/autoload.php';

$isDevMode = true;
$command = explode(':', $argv[1])[1];
$evm = new Doctrine\Common\EventManager();

if (in_array($command, ['schema-tool', 'info'], true)) {
    $cache = new Doctrine\Common\Cache\ArrayCache;
    $annotationReader = new Doctrine\Common\Annotations\AnnotationReader;
    $cachedAnnotationReader = new Doctrine\Common\Annotations\CachedReader($annotationReader, $cache);
    $driverChain = new Doctrine\ORM\Mapping\Driver\DriverChain();
    Gedmo\DoctrineExtensions::registerAbstractMappingIntoDriverChainORM($driverChain, $cachedAnnotationReader);
    $annotationDriver = new Doctrine\ORM\Mapping\Driver\AnnotationDriver($cachedAnnotationReader, array(__DIR__."/../src/ORM"));
    $driverChain->addDriver($annotationDriver, 'Entity');

    // general ORM configuration
    $config = new Doctrine\ORM\Configuration;
    $config->setProxyDir(sys_get_temp_dir());
    $config->setProxyNamespace('Proxy');
    $config->setAutoGenerateProxyClasses(false); // this can be based on production config.
    // register metadata driver
    $config->setMetadataDriverImpl($driverChain);
    // use our already initialized cache driver
    $config->setMetadataCacheImpl($cache);
    $config->setQueryCacheImpl($cache);

    // sluggable
    // $sluggableListener = new Gedmo\Sluggable\SluggableListener;
    // // you should set the used annotation reader to listener, to avoid creating new one for mapping drivers
    // $sluggableListener->setAnnotationReader($cachedAnnotationReader);
    // $evm->addEventSubscriber($sluggableListener);

    // // tree
    // $treeListener = new Gedmo\Tree\TreeListener;
    // $treeListener->setAnnotationReader($cachedAnnotationReader);
    // $evm->addEventSubscriber($treeListener);

    // loggable, not used in example
    $loggableListener = new Gedmo\Loggable\LoggableListener;
    $loggableListener->setAnnotationReader($cachedAnnotationReader);
    $evm->addEventSubscriber($loggableListener);

    // timestampable
    $timestampableListener = new Gedmo\Timestampable\TimestampableListener;
    $timestampableListener->setAnnotationReader($cachedAnnotationReader);
    $evm->addEventSubscriber($timestampableListener);

    // // translatable
    // $translatableListener = new Gedmo\Translatable\TranslatableListener;
    // // current translation locale should be set from session or hook later into the listener
    // // most important, before entity manager is flushed
    // $translatableListener->setTranslatableLocale('en');
    // $translatableListener->setDefaultLocale('en');
    // $translatableListener->setAnnotationReader($cachedAnnotationReader);
    // $evm->addEventSubscriber($translatableListener);

    // // sortable, not used in example
    // $sortableListener = new Gedmo\Sortable\SortableListener;
    // $sortableListener->setAnnotationReader($cachedAnnotationReader);
    // $evm->addEventSubscriber($sortableListener);
    $config = Setup::createAnnotationMetadataConfiguration([__DIR__."/../src/ORM/Entity"], $isDevMode, null, null, false);


} else {
    $config = Setup::createYAMLMetadataConfiguration([__DIR__."/yaml"], $isDevMode);
}

$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../var/db.sqlite',
);

$entityManager = EntityManager::create($conn, $config, $evm);

return ConsoleRunner::createHelperSet($entityManager);
