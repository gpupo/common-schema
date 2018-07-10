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

namespace Gpupo\CommonSchema\ORM\Entity\Application\Scheduler\Job;

use Doctrine\ORM\Mapping as ORM;

/**
 * Execution.
 *
 * @ORM\Table(name="cs_application_scheduler_job_execution")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Application\Scheduler\Job\ExecutionRepository")
 */
class Execution extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|array
     *
     * @ORM\Column(name="errors", type="array", nullable=true)
     */
    protected $errors;

    /**
     * @var null|string
     *
     * @ORM\Column(name="name", type="string", nullable=true, unique=false)
     */
    protected $name;

    /**
     * @var null|string
     *
     * @ORM\Column(name="output", type="string", nullable=true, unique=false)
     */
    protected $output;

    /**
     * @var null|string
     *
     * @ORM\Column(name="script", type="string", nullable=true, unique=false)
     */
    protected $script;

    /**
     * @var null|int
     *
     * @ORM\Column(name="status", type="bigint", nullable=true)
     */
    protected $status;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set errors.
     *
     * @param null|array $errors
     *
     * @return Execution
     */
    public function setErrors($errors = null)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * Get errors.
     *
     * @return null|array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set name.
     *
     * @param null|string $name
     *
     * @return Execution
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set output.
     *
     * @param null|string $output
     *
     * @return Execution
     */
    public function setOutput($output = null)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Get output.
     *
     * @return null|string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Set script.
     *
     * @param null|string $script
     *
     * @return Execution
     */
    public function setScript($script = null)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script.
     *
     * @return null|string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set status.
     *
     * @param null|int $status
     *
     * @return Execution
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return null|int
     */
    public function getStatus()
    {
        return $this->status;
    }
}
