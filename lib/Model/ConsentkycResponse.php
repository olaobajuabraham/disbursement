<?php
/**
 * ConsentkycResponse
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
 * ConsentkycResponse Class Doc Comment
 *
 * @category Class
 * @package  Mtn\Momo\Disbursement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConsentkycResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'consentkycResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sub' => 'string',
        'name' => 'string',
        'given_name' => 'string',
        'family_name' => 'string',
        'middle_name' => 'string',
        'email' => 'string',
        'email_verified' => 'bool',
        'gender' => 'string',
        'locale' => 'string',
        'phone_number' => 'string',
        'phone_number_verified' => 'bool',
        'address' => 'string',
        'updated_at' => 'float',
        'status' => 'string',
        'birthdate' => 'string',
        'credit_score' => 'string',
        'active' => 'bool',
        'country_of_birth' => 'string',
        'region_of_birth' => 'string',
        'city_of_birth' => 'string',
        'occupation' => 'string',
        'employer_name' => 'string',
        'identification_type' => 'string',
        'identification_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sub' => null,
        'name' => null,
        'given_name' => null,
        'family_name' => null,
        'middle_name' => null,
        'email' => null,
        'email_verified' => null,
        'gender' => null,
        'locale' => null,
        'phone_number' => null,
        'phone_number_verified' => null,
        'address' => null,
        'updated_at' => null,
        'status' => null,
        'birthdate' => null,
        'credit_score' => null,
        'active' => null,
        'country_of_birth' => null,
        'region_of_birth' => null,
        'city_of_birth' => null,
        'occupation' => null,
        'employer_name' => null,
        'identification_type' => null,
        'identification_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sub' => false,
        'name' => false,
        'given_name' => false,
        'family_name' => false,
        'middle_name' => false,
        'email' => false,
        'email_verified' => false,
        'gender' => false,
        'locale' => false,
        'phone_number' => false,
        'phone_number_verified' => false,
        'address' => false,
        'updated_at' => false,
        'status' => false,
        'birthdate' => false,
        'credit_score' => false,
        'active' => false,
        'country_of_birth' => false,
        'region_of_birth' => false,
        'city_of_birth' => false,
        'occupation' => false,
        'employer_name' => false,
        'identification_type' => false,
        'identification_value' => false
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
        'sub' => 'sub',
        'name' => 'name',
        'given_name' => 'given_name',
        'family_name' => 'family_name',
        'middle_name' => 'middle_name',
        'email' => 'email',
        'email_verified' => 'email_verified',
        'gender' => 'gender',
        'locale' => 'locale',
        'phone_number' => 'phone_number',
        'phone_number_verified' => 'phone_number_verified',
        'address' => 'address',
        'updated_at' => 'updated_at',
        'status' => 'status',
        'birthdate' => 'birthdate',
        'credit_score' => 'credit_score',
        'active' => 'active',
        'country_of_birth' => 'country_of_birth',
        'region_of_birth' => 'region_of_birth',
        'city_of_birth' => 'city_of_birth',
        'occupation' => 'occupation',
        'employer_name' => 'employer_name',
        'identification_type' => 'identification_type',
        'identification_value' => 'identification_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sub' => 'setSub',
        'name' => 'setName',
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'middle_name' => 'setMiddleName',
        'email' => 'setEmail',
        'email_verified' => 'setEmailVerified',
        'gender' => 'setGender',
        'locale' => 'setLocale',
        'phone_number' => 'setPhoneNumber',
        'phone_number_verified' => 'setPhoneNumberVerified',
        'address' => 'setAddress',
        'updated_at' => 'setUpdatedAt',
        'status' => 'setStatus',
        'birthdate' => 'setBirthdate',
        'credit_score' => 'setCreditScore',
        'active' => 'setActive',
        'country_of_birth' => 'setCountryOfBirth',
        'region_of_birth' => 'setRegionOfBirth',
        'city_of_birth' => 'setCityOfBirth',
        'occupation' => 'setOccupation',
        'employer_name' => 'setEmployerName',
        'identification_type' => 'setIdentificationType',
        'identification_value' => 'setIdentificationValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sub' => 'getSub',
        'name' => 'getName',
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'middle_name' => 'getMiddleName',
        'email' => 'getEmail',
        'email_verified' => 'getEmailVerified',
        'gender' => 'getGender',
        'locale' => 'getLocale',
        'phone_number' => 'getPhoneNumber',
        'phone_number_verified' => 'getPhoneNumberVerified',
        'address' => 'getAddress',
        'updated_at' => 'getUpdatedAt',
        'status' => 'getStatus',
        'birthdate' => 'getBirthdate',
        'credit_score' => 'getCreditScore',
        'active' => 'getActive',
        'country_of_birth' => 'getCountryOfBirth',
        'region_of_birth' => 'getRegionOfBirth',
        'city_of_birth' => 'getCityOfBirth',
        'occupation' => 'getOccupation',
        'employer_name' => 'getEmployerName',
        'identification_type' => 'getIdentificationType',
        'identification_value' => 'getIdentificationValue'
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
        $this->setIfExists('sub', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('family_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('email_verified', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('phone_number_verified', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('birthdate', $data ?? [], null);
        $this->setIfExists('credit_score', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('country_of_birth', $data ?? [], null);
        $this->setIfExists('region_of_birth', $data ?? [], null);
        $this->setIfExists('city_of_birth', $data ?? [], null);
        $this->setIfExists('occupation', $data ?? [], null);
        $this->setIfExists('employer_name', $data ?? [], null);
        $this->setIfExists('identification_type', $data ?? [], null);
        $this->setIfExists('identification_value', $data ?? [], null);
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
     * Gets sub
     *
     * @return string|null
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     *
     * @param string|null $sub Subject - Identifier for the End-User at the Issuer.
     *
     * @return self
     */
    public function setSub($sub)
    {
        if (is_null($sub)) {
            throw new \InvalidArgumentException('non-nullable sub cannot be null');
        }
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name End-User's full name in displayable form including all name parts.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name Given name(s) or first name(s) of the End-User.
     *
     * @return self
     */
    public function setGivenName($given_name)
    {
        if (is_null($given_name)) {
            throw new \InvalidArgumentException('non-nullable given_name cannot be null');
        }
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string|null $family_name Surname(s) or last name(s) of the End-User.
     *
     * @return self
     */
    public function setFamilyName($family_name)
    {
        if (is_null($family_name)) {
            throw new \InvalidArgumentException('non-nullable family_name cannot be null');
        }
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name Middle name(s) of the End-User.
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email End-User's preferred e-mail address. Its value MUST conform to the  RFC 5322 [RFC5322] address specification syntax.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_verified
     *
     * @return bool|null
     */
    public function getEmailVerified()
    {
        return $this->container['email_verified'];
    }

    /**
     * Sets email_verified
     *
     * @param bool|null $email_verified The response value is True if the End-User's e-mail address has been verified;otherwise false.
     *
     * @return self
     */
    public function setEmailVerified($email_verified)
    {
        if (is_null($email_verified)) {
            throw new \InvalidArgumentException('non-nullable email_verified cannot be null');
        }
        $this->container['email_verified'] = $email_verified;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender End-User's gender.
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale Preffered language.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number End-User's preferred telephone number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_number_verified
     *
     * @return bool|null
     */
    public function getPhoneNumberVerified()
    {
        return $this->container['phone_number_verified'];
    }

    /**
     * Sets phone_number_verified
     *
     * @param bool|null $phone_number_verified The response value is True if the End-User's phone number has been verified; otherwise false.
     *
     * @return self
     */
    public function setPhoneNumberVerified($phone_number_verified)
    {
        if (is_null($phone_number_verified)) {
            throw new \InvalidArgumentException('non-nullable phone_number_verified cannot be null');
        }
        $this->container['phone_number_verified'] = $phone_number_verified;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address User Address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return float|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param float|null $updated_at The time the End-User's information was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Account holder status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return string|null
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param string|null $birthdate The birth date of the account holder.
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        if (is_null($birthdate)) {
            throw new \InvalidArgumentException('non-nullable birthdate cannot be null');
        }
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets credit_score
     *
     * @return string|null
     */
    public function getCreditScore()
    {
        return $this->container['credit_score'];
    }

    /**
     * Sets credit_score
     *
     * @param string|null $credit_score The credit score of the account holder.
     *
     * @return self
     */
    public function setCreditScore($credit_score)
    {
        if (is_null($credit_score)) {
            throw new \InvalidArgumentException('non-nullable credit_score cannot be null');
        }
        $this->container['credit_score'] = $credit_score;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active The status of the account holder.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets country_of_birth
     *
     * @return string|null
     */
    public function getCountryOfBirth()
    {
        return $this->container['country_of_birth'];
    }

    /**
     * Sets country_of_birth
     *
     * @param string|null $country_of_birth Account holder country of birth.
     *
     * @return self
     */
    public function setCountryOfBirth($country_of_birth)
    {
        if (is_null($country_of_birth)) {
            throw new \InvalidArgumentException('non-nullable country_of_birth cannot be null');
        }
        $this->container['country_of_birth'] = $country_of_birth;

        return $this;
    }

    /**
     * Gets region_of_birth
     *
     * @return string|null
     */
    public function getRegionOfBirth()
    {
        return $this->container['region_of_birth'];
    }

    /**
     * Sets region_of_birth
     *
     * @param string|null $region_of_birth The birth region of the account holder.
     *
     * @return self
     */
    public function setRegionOfBirth($region_of_birth)
    {
        if (is_null($region_of_birth)) {
            throw new \InvalidArgumentException('non-nullable region_of_birth cannot be null');
        }
        $this->container['region_of_birth'] = $region_of_birth;

        return $this;
    }

    /**
     * Gets city_of_birth
     *
     * @return string|null
     */
    public function getCityOfBirth()
    {
        return $this->container['city_of_birth'];
    }

    /**
     * Sets city_of_birth
     *
     * @param string|null $city_of_birth The city of birth for the account holder.
     *
     * @return self
     */
    public function setCityOfBirth($city_of_birth)
    {
        if (is_null($city_of_birth)) {
            throw new \InvalidArgumentException('non-nullable city_of_birth cannot be null');
        }
        $this->container['city_of_birth'] = $city_of_birth;

        return $this;
    }

    /**
     * Gets occupation
     *
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     *
     * @param string|null $occupation Occupation of the account holder.
     *
     * @return self
     */
    public function setOccupation($occupation)
    {
        if (is_null($occupation)) {
            throw new \InvalidArgumentException('non-nullable occupation cannot be null');
        }
        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets employer_name
     *
     * @return string|null
     */
    public function getEmployerName()
    {
        return $this->container['employer_name'];
    }

    /**
     * Sets employer_name
     *
     * @param string|null $employer_name The name of the employer.
     *
     * @return self
     */
    public function setEmployerName($employer_name)
    {
        if (is_null($employer_name)) {
            throw new \InvalidArgumentException('non-nullable employer_name cannot be null');
        }
        $this->container['employer_name'] = $employer_name;

        return $this;
    }

    /**
     * Gets identification_type
     *
     * @return string|null
     */
    public function getIdentificationType()
    {
        return $this->container['identification_type'];
    }

    /**
     * Sets identification_type
     *
     * @param string|null $identification_type Type of identification.The first non-expired identification is always chosen.
     *
     * @return self
     */
    public function setIdentificationType($identification_type)
    {
        if (is_null($identification_type)) {
            throw new \InvalidArgumentException('non-nullable identification_type cannot be null');
        }
        $this->container['identification_type'] = $identification_type;

        return $this;
    }

    /**
     * Gets identification_value
     *
     * @return string|null
     */
    public function getIdentificationValue()
    {
        return $this->container['identification_value'];
    }

    /**
     * Sets identification_value
     *
     * @param string|null $identification_value The value of the identification.
     *
     * @return self
     */
    public function setIdentificationValue($identification_value)
    {
        if (is_null($identification_value)) {
            throw new \InvalidArgumentException('non-nullable identification_value cannot be null');
        }
        $this->container['identification_value'] = $identification_value;

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


