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

abstract class SchemaAbstract
{
    /**
     * @see http://sphinxsearch.com/docs/current.html#xmlpipe2
     */
    protected $schema;

    /**
     * Declares a full-text field. Known attributes are:
     * "name", specifies the XML element name that will be treated as a full-text field in the subsequent documents.
     *
     * "attr", specifies whether to also index this field as a string. Possible value is "string".
     *
     * @var array
     */
    protected $field;

    /**
     * Known attributes for item:
     * "name", specifies the element name that should be treated as an attribute in the subsequent documents.
     *
     * "type", specifies the attribute type. Possible values are "int", "bigint", "timestamp", "bool", "float", "multi"
     *  and "json".
     *
     * "bits", specifies the bit size for "int" attribute type. Valid values are 1 to 32.
     *
     * "default", specifies the default value for this attribute that should be used if the attribute's element is not
     * present in the document.
     *
     * @var array
     */
    protected $attr;

    public function __construct()
    {
        $this->schema = [
            'field' => $this->field,
            'attr' => $this->attr,
        ];
    }

    public function getSchema(): array
    {
        return $this->schema;
    }

    public function getKeys()
    {
        return array_keys(array_merge($this->schema['field'], $this->schema['attr']));
    }

    public function getSluggables()
    {
        return [];
    }

    public function tagInSchema($tag)
    {
        $array = array_merge($this->schema['field'], $this->schema['attr']);

        if (\in_array($tag, $array, true)) {
            return true;
        }

        if (array_key_exists($tag, $array)) {
            return true;
        }

        return false;
    }
}
