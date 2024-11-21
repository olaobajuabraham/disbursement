# Mtn\Momo\Disbursement\DefaultApi

All URIs are relative to https://sandbox.momodeveloper.mtn.com/disbursement, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bcAuthorize()**](DefaultApi.md#bcAuthorize) | **POST** /v1_0/bc-authorize | bc-authorize |
| [**createAccessToken()**](DefaultApi.md#createAccessToken) | **POST** /token/ | CreateAccessToken |
| [**createOauth2Token()**](DefaultApi.md#createOauth2Token) | **POST** /oauth2/token/ | CreateOauth2Token |
| [**depositV1()**](DefaultApi.md#depositV1) | **POST** /v1_0/deposit | Deposit-V1 |
| [**depositV2()**](DefaultApi.md#depositV2) | **POST** /v2_0/deposit | Deposit-V2 |
| [**getAccountBalance()**](DefaultApi.md#getAccountBalance) | **GET** /v1_0/account/balance | GetAccountBalance |
| [**getAccountBalanceInSpecificCurrency()**](DefaultApi.md#getAccountBalanceInSpecificCurrency) | **GET** /v1_0/account/balance/{currency} | GetAccountBalanceInSpecificCurrency |
| [**getBasicUserinfo()**](DefaultApi.md#getBasicUserinfo) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/basicuserinfo | GetBasicUserinfo |
| [**getDepositStatus()**](DefaultApi.md#getDepositStatus) | **GET** /v1_0/deposit/{referenceId} | GetDepositStatus |
| [**getRefundStatus()**](DefaultApi.md#getRefundStatus) | **GET** /v1_0/refund/{referenceId} | GetRefundStatus |
| [**getTransferStatus()**](DefaultApi.md#getTransferStatus) | **GET** /v1_0/transfer/{referenceId} | GetTransferStatus |
| [**getUserInfoWithConsent()**](DefaultApi.md#getUserInfoWithConsent) | **GET** /oauth2/v1_0/userinfo | GetUserInfoWithConsent |
| [**refundV1()**](DefaultApi.md#refundV1) | **POST** /v1_0/refund | Refund-V1 |
| [**refundV2()**](DefaultApi.md#refundV2) | **POST** /v2_0/refund | Refund-V2 |
| [**transfer()**](DefaultApi.md#transfer) | **POST** /v1_0/transfer | Transfer |
| [**validateAccountHolderStatus()**](DefaultApi.md#validateAccountHolderStatus) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/active | ValidateAccountHolderStatus |


## `bcAuthorize()`

```php
bcAuthorize($authorization, $x_target_environment, $x_callback_url, $scope, $login_hint, $access_type, $consent_valid_in, $client_notification_token, $scope_instruction): \Mtn\Momo\Disbursement\Model\BcauthorizeResponse
```

bc-authorize

This operation is used to claim a consent by the account holder for the requested scopes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | URL to the server where the callback should be sent.
$scope = 'scope_example'; // string
$login_hint = 'login_hint_example'; // string
$access_type = 'access_type_example'; // string
$consent_valid_in = 56; // int
$client_notification_token = 'client_notification_token_example'; // string
$scope_instruction = 'scope_instruction_example'; // string

try {
    $result = $apiInstance->bcAuthorize($authorization, $x_target_environment, $x_callback_url, $scope, $login_hint, $access_type, $consent_valid_in, $client_notification_token, $scope_instruction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bcAuthorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| URL to the server where the callback should be sent. | [optional] |
| **scope** | **string**|  | [optional] |
| **login_hint** | **string**|  | [optional] |
| **access_type** | **string**|  | [optional] |
| **consent_valid_in** | **int**|  | [optional] |
| **client_notification_token** | **string**|  | [optional] |
| **scope_instruction** | **string**|  | [optional] |

### Return type

[**\Mtn\Momo\Disbursement\Model\BcauthorizeResponse**](../Model/BcauthorizeResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccessToken()`

```php
createAccessToken($authorization): \Mtn\Momo\Disbursement\Model\TokenPost200ApplicationJsonResponse
```

CreateAccessToken

This operation is used to create an access token which can then be used to authorize and authenticate towards the other end-points of the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded.

try {
    $result = $apiInstance->createAccessToken($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\TokenPost200ApplicationJsonResponse**](../Model/TokenPost200ApplicationJsonResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOauth2Token()`

```php
createOauth2Token($authorization, $x_target_environment, $grant_type, $auth_req_id, $refresh_token): \Mtn\Momo\Disbursement\Model\Oauth2TokenResponse
```

CreateOauth2Token

This operation is used to claim a consent by the account holder for the requested scopes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$grant_type = 'grant_type_example'; // string
$auth_req_id = 'auth_req_id_example'; // string
$refresh_token = 'refresh_token_example'; // string

try {
    $result = $apiInstance->createOauth2Token($authorization, $x_target_environment, $grant_type, $auth_req_id, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOauth2Token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Basic authentication header containing API user ID and API key. Should be sent in as B64 encoded. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **grant_type** | **string**|  | [optional] |
| **auth_req_id** | **string**|  | [optional] |
| **refresh_token** | **string**|  | [optional] |

### Return type

[**\Mtn\Momo\Disbursement\Model\Oauth2TokenResponse**](../Model/Oauth2TokenResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositV1()`

```php
depositV1($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $transfer)
```

Deposit-V1

deposit operation is used to deposit an amount from the owner’s account to a payee account.<br> Status of the transaction can be validated by using the GET /deposit/\\{referenceId\\}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. Recource ID of the created ‘request-to-pay’ transaction. This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | (POST Method)URL to the server where the callback should be sent.
$transfer = {"amount":"string","currency":"string","externalId":"string","payee":{"partyIdType":"MSISDN","partyId":"string"},"payerMessage":"string","payeeNote":"string"}; // \Mtn\Momo\Disbursement\Model\Transfer

try {
    $apiInstance->depositV1($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $transfer);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->depositV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. Recource ID of the created ‘request-to-pay’ transaction. This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| (POST Method)URL to the server where the callback should be sent. | [optional] |
| **transfer** | [**\Mtn\Momo\Disbursement\Model\Transfer**](../Model/Transfer.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Incorrect currency for target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositV2()`

```php
depositV2($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $transfer)
```

Deposit-V2

deposit operation is used to deposit an amount from the owner’s account to a payee account.<br> Status of the transaction can be validated by using the GET /deposit/\\{referenceId\\}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. Recource ID of the created ‘request-to-pay’ transaction. This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | (PUT Method)URL to the server where the callback should be sent.
$transfer = {"amount":"string","currency":"string","externalId":"string","payee":{"partyIdType":"MSISDN","partyId":"string"},"payerMessage":"string","payeeNote":"string"}; // \Mtn\Momo\Disbursement\Model\Transfer

try {
    $apiInstance->depositV2($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $transfer);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->depositV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. Recource ID of the created ‘request-to-pay’ transaction. This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| (PUT Method)URL to the server where the callback should be sent. | [optional] |
| **transfer** | [**\Mtn\Momo\Disbursement\Model\Transfer**](../Model/Transfer.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Incorrect currency for target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountBalance()`

```php
getAccountBalance($authorization, $x_target_environment): \Mtn\Momo\Disbursement\Model\Balance
```

GetAccountBalance

Get the balance of own account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getAccountBalance($authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAccountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\Balance**](../Model/Balance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Incorrect target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountBalanceInSpecificCurrency()`

```php
getAccountBalanceInSpecificCurrency($currency, $authorization, $x_target_environment): \Mtn\Momo\Disbursement\Model\Balance
```

GetAccountBalanceInSpecificCurrency

Get the balance of own account. Currency parameter passed in GET

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'currency_example'; // string | Should be in ISO4217 Currency
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getAccountBalanceInSpecificCurrency($currency, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAccountBalanceInSpecificCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| Should be in ISO4217 Currency | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\Balance**](../Model/Balance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `Incorrect target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicUserinfo()`

```php
getBasicUserinfo($account_holder_id_type, $account_holder_id, $authorization, $x_target_environment): \Mtn\Momo\Disbursement\Model\BasicUserInfoJsonResponse
```

GetBasicUserinfo

This operation returns personal information of the account holder. The operation does not need any consent by the account holder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_holder_id_type = 'MSISDN'; // string | Type of account holder identity passed in accountHolderId path param.Possible values:MSISDN Email AliasID (account ID)
$account_holder_id = 'account_holder_id_example'; // string | string
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getBasicUserinfo($account_holder_id_type, $account_holder_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBasicUserinfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_holder_id_type** | **string**| Type of account holder identity passed in accountHolderId path param.Possible values:MSISDN Email AliasID (account ID) | [default to &#39;MSISDN&#39;] |
| **account_holder_id** | **string**| string | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\BasicUserInfoJsonResponse**](../Model/BasicUserInfoJsonResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepositStatus()`

```php
getDepositStatus($reference_id, $authorization, $x_target_environment): \Mtn\Momo\Disbursement\Model\TransferResult
```

GetDepositStatus

This operation is used to get the status of a deposit. X-Reference-Id that was passed in the post is used as reference to the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the Deposit.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getDepositStatus($reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDepositStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the Deposit. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\TransferResult**](../Model/TransferResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful transfer`, `Payer limit breached`, `API user insufficient balance`, `application/json`, `Transfer not found`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefundStatus()`

```php
getRefundStatus($reference_id, $authorization, $x_target_environment): \Mtn\Momo\Disbursement\Model\RefundResult
```

GetRefundStatus

This operation is used to get the status of a refund. X-Reference-Id that was passed in the post is used as reference to the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the Refund.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getRefundStatus($reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRefundStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the Refund. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\RefundResult**](../Model/RefundResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful transfer`, `Payer limit breached`, `API user insufficient balance`, `application/json`, `Transfer not found`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransferStatus()`

```php
getTransferStatus($reference_id, $authorization, $x_target_environment): \Mtn\Momo\Disbursement\Model\TransferResult
```

GetTransferStatus

This operation is used to get the status of a transfer. X-Reference-Id that was passed in the post is used as reference to the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_id = 'reference_id_example'; // string | UUID of transaction to get result. Reference id  used when creating the Transfer.
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getTransferStatus($reference_id, $authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTransferStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| UUID of transaction to get result. Reference id  used when creating the Transfer. | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\TransferResult**](../Model/TransferResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Successful transfer`, `Payer limit breached`, `API user insufficient balance`, `application/json`, `Transfer not found`, `Unspecified internal error`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserInfoWithConsent()`

```php
getUserInfoWithConsent($authorization, $x_target_environment): \Mtn\Momo\Disbursement\Model\ConsentkycResponse
```

GetUserInfoWithConsent

This operation is used to claim a consent by the account holder for the requested scopes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Token. Replace with a valid oauth2 token received from oauth2 token endpoint in Wallet Platform.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $result = $apiInstance->getUserInfoWithConsent($authorization, $x_target_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserInfoWithConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Token. Replace with a valid oauth2 token received from oauth2 token endpoint in Wallet Platform. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

[**\Mtn\Momo\Disbursement\Model\ConsentkycResponse**](../Model/ConsentkycResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundV1()`

```php
refundV1($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $refund)
```

Refund-V1

refund operation is used to refund an amount from the owner’s account to a payee account.<br> Status of the transaction can be validated by using the GET /refund/\\{referenceId\\}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID.  This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | (POST Method)URL to the server where the callback should be sent.
$refund = {"amount":"string","currency":"string","externalId":"string","payerMessage":"string","payeeNote":"string","referenceIdToRefund":"UUID-REQUEST-TO-PAY"}; // \Mtn\Momo\Disbursement\Model\Refund

try {
    $apiInstance->refundV1($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $refund);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID.  This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| (POST Method)URL to the server where the callback should be sent. | [optional] |
| **refund** | [**\Mtn\Momo\Disbursement\Model\Refund**](../Model/Refund.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Incorrect currency for target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundV2()`

```php
refundV2($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $refund)
```

Refund-V2

refund operation is used to refund an amount from the owner’s account to a payee account.<br> Status of the transaction can be validated by using the GET /refund/\\{referenceId\\}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID.  This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | (PUT Method)URL to the server where the callback should be sent.
$refund = {"amount":"string","currency":"string","externalId":"string","payerMessage":"string","payeeNote":"string","referenceIdToRefund":"UUID-REQUEST-TO-PAY"}; // \Mtn\Momo\Disbursement\Model\Refund

try {
    $apiInstance->refundV2($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $refund);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID.  This ID is used for e.g. validating the status of the request. Universal Unique ID for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| (PUT Method)URL to the server where the callback should be sent. | [optional] |
| **refund** | [**\Mtn\Momo\Disbursement\Model\Refund**](../Model/Refund.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Incorrect currency for target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfer()`

```php
transfer($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $transfer)
```

Transfer

Transfer operation is used to transfer an amount from the own account to a payee account.<br> Status of the transaction can validated by using the GET /transfer/\\{referenceId\\}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_reference_id = 'x_reference_id_example'; // string | Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4.
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.
$x_callback_url = 'x_callback_url_example'; // string | URL to the server where the callback should be sent.
$transfer = {"amount":"string","currency":"string","externalId":"string","payee":{"partyIdType":"MSISDN","partyId":"string"},"payerMessage":"string","payeeNote":"string"}; // \Mtn\Momo\Disbursement\Model\Transfer

try {
    $apiInstance->transfer($authorization, $x_reference_id, $x_target_environment, $x_callback_url, $transfer);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_reference_id** | **string**| Format - UUID. Recource ID of the created request to pay transaction. This ID is used, for example validating the status of the request. ‘Universal Unique ID’ for the transaction generated using UUID version 4. | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |
| **x_callback_url** | **string**| URL to the server where the callback should be sent. | [optional] |
| **transfer** | [**\Mtn\Momo\Disbursement\Model\Transfer**](../Model/Transfer.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `ReferenceId already in use`, `Incorrect currency for target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAccountHolderStatus()`

```php
validateAccountHolderStatus($account_holder_id, $account_holder_id_type, $authorization, $x_target_environment)
```

ValidateAccountHolderStatus

Operation is used  to check if an account holder is registered and active in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mtn\Momo\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new Mtn\Momo\Disbursement\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_holder_id = 'account_holder_id_example'; // string | The AccountHolder number. Validated according to the AccountHolderID type. <br> MSISDN - Mobile Number validated according to ITU-T E.164. Validated with IsMSISDN<br> EMAIL - Validated to be a valid e-mail format. Validated with IsEmail
$account_holder_id_type = 'account_holder_id_type_example'; // string | Specifies the type of the AccountHolderID. Allowed values [msisdn, email]
$authorization = 'authorization_example'; // string | Bearer Authentication Token generated using CreateAccessToken API Call
$x_target_environment = 'x_target_environment_example'; // string | The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction.

try {
    $apiInstance->validateAccountHolderStatus($account_holder_id, $account_holder_id_type, $authorization, $x_target_environment);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->validateAccountHolderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_holder_id** | **string**| The AccountHolder number. Validated according to the AccountHolderID type. &lt;br&gt; MSISDN - Mobile Number validated according to ITU-T E.164. Validated with IsMSISDN&lt;br&gt; EMAIL - Validated to be a valid e-mail format. Validated with IsEmail | |
| **account_holder_id_type** | **string**| Specifies the type of the AccountHolderID. Allowed values [msisdn, email] | |
| **authorization** | **string**| Bearer Authentication Token generated using CreateAccessToken API Call | |
| **x_target_environment** | **string**| The identifier of the Wallet Platform system where the transaction shall be processed. This parameter is used to route the request to the Wallet Platform system that will initiate the transaction. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `Incorrect target environment`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
