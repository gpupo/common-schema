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

namespace Gpupo\CommonSchema\Tests;

use Gpupo\Common\Tools\Reflected;
use Gpupo\CommonSchema\ORM\Entity\EntityInterface;
use Gpupo\CommonSdk\Traits\ResourcesTrait;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

abstract class AbstractTestCase extends TestCase
{
    use ResourcesTrait;

    public function truncate($className)
    {
        $em = $this->getDoctrineEntityManager();
        $cmd = $em->getClassMetadata($className);
        $connection = $em->getConnection();
        $dbPlatform = $connection->getDatabasePlatform();
        $connection->query('SET FOREIGN_KEY_CHECKS=0');
        $q = $dbPlatform->getTruncateTableSql($cmd->getTableName());
        $connection->executeUpdate($q);
        $connection->query('SET FOREIGN_KEY_CHECKS=1');

        return true;
    }

    protected function proxy($object)
    {
        return new Reflected($object);
    }

    protected function getResourcesDirectory()
    {
        return __DIR__.'/../Resources';
    }

    protected function getDoctrineEntityManager()
    {
        return Bootstrap::factoryDoctrineEntityManager();
    }

    protected function getMonologer(): LoggerInterface
    {
        return Bootstrap::factoryMonologer();
    }

    protected function persistIfNotExist(EntityInterface $entity)
    {
        $em = $this->getDoctrineEntityManager();
        $repository = $em->getRepository(\get_class($entity));
        $exist = $repository->exists($entity);
        $this->getMonologer()->addDebug('Persist if not exixt', [
            'class' => \get_class($entity),
            'repository' => \get_class($repository),
            'exist' => $exist,
        ]);

        if (!$exist) {
            $em->persist($entity);
            $em->flush();

            return true;
        }

        return false;
    }
}
