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

namespace Gpupo\CommonSchema;

use Gpupo\Common\Entity\CollectionAbstract;

abstract class AbstractSchema extends CollectionAbstract
{
    const VERSION = '2.0';
    protected $type;
    protected $properties = [];

    public function loadSchemaFromFile($file)
    {
        return array_merge(['version' => self::VERSION, 'expands' => []], require $file);
    }

    public function getTemplate()
    {
        $s = "[\n";
        foreach ($this->getRawSchema() as $k => $v) {
            $s .= $this->recursiveToTemplate($k, $v);
        }

        $s .= "\n];";

        return $s;
    }

    public function validate(array $array)
    {
        $d = array_diff_key($this->getSchema(), $array);

        if (!empty($d)) {
            throw new \Exception('Invalid '.implode(',', array_keys($d)));
        }

        return true;
    }

    public function saveJson($dest)
    {
        $json = json_encode($this->getSchema(), JSON_PRETTY_PRINT);

        return file_put_contents($dest, $json);
    }

    protected function load(array $array)
    {
        $this->type = $array['@type'];

        return $this->node($array, 'main');
    }

    protected function node(array $array, $main = false)
    {
        $list = [];

        foreach ($array as $k => $v) {
            if (false !== strpos((string) $k, '@')) {
                if (@empty($main)) {
                    $this->properties[$k] = $v;
                }

                continue;
            }

            if (is_array($v)) {
                $list[$k] = $this->node($v);

                continue;
            }

            $list[$k] = 'string';
        }

        return $list;
    }

    protected function recursiveToTemplate($k, $v)
    {
        if (is_array($v)) {
            $s = "\n";

            if (!empty($k)) {
                $s .= "'".$k."' => ";
            }
            $s .= '[';
            foreach ($v as $y => $z) {
                $s .= '    '.$this->recursiveToTemplate($y, $z);
            }

            return  $s."\n],";
        }

        return "\n'".$k."' => '".$v."',";
    }
}
