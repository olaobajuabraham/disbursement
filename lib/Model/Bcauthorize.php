<?php
/**
 * Bcauthorize
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Mtn\Momo\Disbursement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Disbursements
 *
 * Automatically deposit funds to multiple users
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Mtn\Momo\Disbursement\Model;

use \ArrayAccess;
use \Mtn\Momo\Disbursement\ObjectSerializer;

/**
 * Bcauthorize Class Doc Comment
 *
 * @category Class
 * @package  Mtn\Momo\Disbursement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Bcauthorize implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'bcauthorize';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scope' => 'string',
        'login_hint' => 'string',
        'access_type' => 'string',
        'consent_valid_in' => 'int',
        'client_notification_token' => 'string',
        'scope_instruction' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'scope' => null,
        'login_hint' => null,
        'access_type' => null,
        'consent_valid_in' => null,
        'client_notification_token' => null,
        'scope_instruction' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'scope' => false,
        'login_hint' => false,
        'access_type' => false,
        'consent_valid_in' => false,
        'client_notification_token' => false,
        'scope_instruction' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'scope' => 'scope',
        'login_hint' => 'login_hint',
        'access_type' => 'access_type',
        'consent_valid_in' => 'consent_valid_in',
        'client_notification_token' => 'client_notification_token',
        'scope_instruction' => 'scope_instruction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scope' => 'setScope',
        'login_hint' => 'setLoginHint',
        'access_type' => 'setAccessType',
        'consent_valid_in' => 'setConsentValidIn',
        'client_notification_token' => 'setClientNotificationToken',
        'scope_instruction' => 'setScopeInstruction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scope' => 'getScope',
        'login_hint' => 'getLoginHint',
        'access_type' => 'getAccessType',
        'consent_valid_in' => 'getConsentValidIn',
        'client_notification_token' => 'getClientNotificationToken',
        'scope_instruction' => 'getScopeInstruction'
    ];

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
        return self::$openAPIModelName;
    }

    public const ACCESS_TYPE_ONLINE = 'online';
    public const ACCESS_TYPE_OFFLINE = 'offline';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessTypeAllowableValues()
    {
        return [
            self::ACCESS_TYPE_ONLINE,
            self::ACCESS_TYPE_OFFLINE,
        ];
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
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('login_hint', $data ?? [], null);
        $this->setIfExists('access_type', $data ?? [], null);
        $this->setIfExists('consent_valid_in', $data ?? [], null);
        $this->setIfExists('client_notification_token', $data ?? [], null);
        $this->setIfExists('scope_instruction', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!is_null($this->container['access_type']) && !in_array($this->container['access_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'access_type', must be one of '%s'",
                $this->container['access_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope Space separated list of scopes.
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets login_hint
     *
     * @return string|null
     */
    public function getLoginHint()
    {
        return $this->container['login_hint'];
    }

    /**
     * Sets login_hint
     *
     * @param string|null $login_hint The identity of the account holder.
     *
     * @return self
     */
    public function setLoginHint($login_hint)
    {
        if (is_null($login_hint)) {
            throw new \InvalidArgumentException('non-nullable login_hint cannot be null');
        }
        $this->container['login_hint'] = $login_hint;

        return $this;
    }

    /**
     * Gets access_type
     *
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->container['access_type'];
    }

    /**
     * Sets access_type
     *
     * @param string|null $access_type Value either online, or offline.
     *
     * @return self
     */
    public function setAccessType($access_type)
    {
        if (is_null($access_type)) {
            throw new \InvalidArgumentException('non-nullable access_type cannot be null');
        }
        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!in_array($access_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'access_type', must be one of '%s'",
                    $access_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access_type'] = $access_type;

        return $this;
    }

    /**
     * Gets consent_valid_in
     *
     * @return int|null
     */
    public function getConsentValidIn()
    {
        return $this->container['consent_valid_in'];
    }

    /**
     * Sets consent_valid_in
     *
     * @param int|null $consent_valid_in The validity time of the consent in secondsThis parameter can only be used together with access type offline.
     *
     * @return self
     */
    public function setConsentValidIn($consent_valid_in)
    {
        if (is_null($consent_valid_in)) {
            throw new \InvalidArgumentException('non-nullable consent_valid_in cannot be null');
        }
        $this->container['consent_valid_in'] = $consent_valid_in;

        return $this;
    }

    /**
     * Gets client_notification_token
     *
     * @return string|null
     */
    public function getClientNotificationToken()
    {
        return $this->container['client_notification_token'];
    }

    /**
     * Sets client_notification_token
     *
     * @param string|null $client_notification_token This token is required when the client is using Ping or Push mode.
     *
     * @return self
     */
    public function setClientNotificationToken($client_notification_token)
    {
        if (is_null($client_notification_token)) {
            throw new \InvalidArgumentException('non-nullable client_notification_token cannot be null');
        }
        $this->container['client_notification_token'] = $client_notification_token;

        return $this;
    }

    /**
     * Gets scope_instruction
     *
     * @return string|null
     */
    public function getScopeInstruction()
    {
        return $this->container['scope_instruction'];
    }

    /**
     * Sets scope_instruction
     *
     * @param string|null $scope_instruction Base64 encoded Instrcution of the financial transaction.
     *
     * @return self
     */
    public function setScopeInstruction($scope_instruction)
    {
        if (is_null($scope_instruction)) {
            throw new \InvalidArgumentException('non-nullable scope_instruction cannot be null');
        }
        $this->container['scope_instruction'] = $scope_instruction;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

