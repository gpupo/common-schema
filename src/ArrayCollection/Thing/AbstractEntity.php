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

namespace Gpupo\CommonSchema\ArrayCollection\Thing;

use Gpupo\Common\Entity\CollectionInterface;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\ORMEntityInterface;
use Gpupo\CommonSdk\Entity\EntityAbstract;

abstract class AbstractEntity extends EntityAbstract implements EntityInterface, CollectionInterface
{
    protected $tablePrefix = 'cs_';

    protected $tableName;

    protected $uniqueConstraints;

    public function getTableName()
    {
        if (empty($this->tableName)) {
            throw new \InvalidArgumentException(sprintf('Table name missing on %s', get_class($this)));
        }

        return $this->tablePrefix.$this->tableName;
    }

    public function getUniqueConstraints()
    {
        $ucs = [];

        if (empty($this->uniqueConstraints)) {
            return $ucs;
        }

        foreach ($this->uniqueConstraints as $array) {
            $name = sprintf('%s_idx', implode('_', $array));
            $ucs[$name] = ['columns' => $array];
        }

        return $ucs;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getSchema()
    {
        return [
        ];
    }

    public function toOrm(): ORMEntityInterface
    {
        $converter = new ArrayCollectionConverter();

        return $converter->convertToOrm($this);
    }
}
