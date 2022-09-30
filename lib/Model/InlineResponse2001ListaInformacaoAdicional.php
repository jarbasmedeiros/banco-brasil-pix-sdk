<?php
/**
 * InlineResponse2001ListaInformacaoAdicional
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PIX-BB
 *
 * API para gerenciar os serviços referentes ao PIX (Sistema de Pagamentos Instantâneos) no BB.
 *
 * OpenAPI spec version: 1.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse2001ListaInformacaoAdicional Class Doc Comment
 *
 * @category Class
 * @description O campo \&quot;listaInformacaoAdicional\&quot;, se estiver presente, se refere a uma lista.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2001ListaInformacaoAdicional implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_1_listaInformacaoAdicional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'codigo_informacao_adicional' => 'string',
'texto_informacao_adicional' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'codigo_informacao_adicional' => null,
'texto_informacao_adicional' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'codigo_informacao_adicional' => 'codigoInformacaoAdicional',
'texto_informacao_adicional' => 'textoInformacaoAdicional'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo_informacao_adicional' => 'setCodigoInformacaoAdicional',
'texto_informacao_adicional' => 'setTextoInformacaoAdicional'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo_informacao_adicional' => 'getCodigoInformacaoAdicional',
'texto_informacao_adicional' => 'getTextoInformacaoAdicional'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['codigo_informacao_adicional'] = isset($data['codigo_informacao_adicional']) ? $data['codigo_informacao_adicional'] : null;
        $this->container['texto_informacao_adicional'] = isset($data['texto_informacao_adicional']) ? $data['texto_informacao_adicional'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['codigo_informacao_adicional'] === null) {
            $invalidProperties[] = "'codigo_informacao_adicional' can't be null";
        }
        if ($this->container['texto_informacao_adicional'] === null) {
            $invalidProperties[] = "'texto_informacao_adicional' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets codigo_informacao_adicional
     *
     * @return string
     */
    public function getCodigoInformacaoAdicional()
    {
        return $this->container['codigo_informacao_adicional'];
    }

    /**
     * Sets codigo_informacao_adicional
     *
     * @param string $codigo_informacao_adicional Título/Descrição da informação adicional.
     *
     * @return $this
     */
    public function setCodigoInformacaoAdicional($codigo_informacao_adicional)
    {
        $this->container['codigo_informacao_adicional'] = $codigo_informacao_adicional;

        return $this;
    }

    /**
     * Gets texto_informacao_adicional
     *
     * @return string
     */
    public function getTextoInformacaoAdicional()
    {
        return $this->container['texto_informacao_adicional'];
    }

    /**
     * Sets texto_informacao_adicional
     *
     * @param string $texto_informacao_adicional Dados da informação adicional.
     *
     * @return $this
     */
    public function setTextoInformacaoAdicional($texto_informacao_adicional)
    {
        $this->container['texto_informacao_adicional'] = $texto_informacao_adicional;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
