<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Thing;

use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\ORM\Entity\EntityInterface as ORMInterface;
use Gpupo\CommonSdk\Entity\EntityAbstract;

abstract class AbstractEntity extends EntityAbstract implements EntityInterface
{
    protected $tablePrefix = 'cs_';

    protected $tableName;

    protected $uniqueConstraints;

    public function getTableName()
    {
        if (empty($this->tableName)) {
            throw new \InvalidArgumentException(sprintf('Table name missing on %s', static::class));
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

    public function getSchema(): array
    {
        return array_merge(
            $this->schema(),
            [
                'expands' => 'array',
                'created_at' => 'datetime',
                'updated_at' => 'datetime',
                'deleted_at' => 'datetime',
            ]
        );
    }

    public function toOrm(string $class = null): ORMInterface
    {
        $converter = new ArrayCollectionConverter();
        $entity = $converter->convertToOrm($this, $class);

        return $entity;
    }

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
        ];
    }
}
