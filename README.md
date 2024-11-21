# MTN Mobile Money Disbursement Client

Automatically deposit funds to multiple users


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```shell
composer require mtnmomo/disbursement
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/mtnmomo/disbursement/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://sandbox.momodeveloper.mtn.com/disbursement*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**bcAuthorize**](docs/Api/DefaultApi.md#bcauthorize) | **POST** /v1_0/bc-authorize | bc-authorize
*DefaultApi* | [**createAccessToken**](docs/Api/DefaultApi.md#createaccesstoken) | **POST** /token/ | CreateAccessToken
*DefaultApi* | [**createOauth2Token**](docs/Api/DefaultApi.md#createoauth2token) | **POST** /oauth2/token/ | CreateOauth2Token
*DefaultApi* | [**depositV1**](docs/Api/DefaultApi.md#depositv1) | **POST** /v1_0/deposit | Deposit-V1
*DefaultApi* | [**depositV2**](docs/Api/DefaultApi.md#depositv2) | **POST** /v2_0/deposit | Deposit-V2
*DefaultApi* | [**getAccountBalance**](docs/Api/DefaultApi.md#getaccountbalance) | **GET** /v1_0/account/balance | GetAccountBalance
*DefaultApi* | [**getAccountBalanceInSpecificCurrency**](docs/Api/DefaultApi.md#getaccountbalanceinspecificcurrency) | **GET** /v1_0/account/balance/{currency} | GetAccountBalanceInSpecificCurrency
*DefaultApi* | [**getBasicUserinfo**](docs/Api/DefaultApi.md#getbasicuserinfo) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/basicuserinfo | GetBasicUserinfo
*DefaultApi* | [**getDepositStatus**](docs/Api/DefaultApi.md#getdepositstatus) | **GET** /v1_0/deposit/{referenceId} | GetDepositStatus
*DefaultApi* | [**getRefundStatus**](docs/Api/DefaultApi.md#getrefundstatus) | **GET** /v1_0/refund/{referenceId} | GetRefundStatus
*DefaultApi* | [**getTransferStatus**](docs/Api/DefaultApi.md#gettransferstatus) | **GET** /v1_0/transfer/{referenceId} | GetTransferStatus
*DefaultApi* | [**getUserInfoWithConsent**](docs/Api/DefaultApi.md#getuserinfowithconsent) | **GET** /oauth2/v1_0/userinfo | GetUserInfoWithConsent
*DefaultApi* | [**refundV1**](docs/Api/DefaultApi.md#refundv1) | **POST** /v1_0/refund | Refund-V1
*DefaultApi* | [**refundV2**](docs/Api/DefaultApi.md#refundv2) | **POST** /v2_0/refund | Refund-V2
*DefaultApi* | [**transfer**](docs/Api/DefaultApi.md#transfer) | **POST** /v1_0/transfer | Transfer
*DefaultApi* | [**validateAccountHolderStatus**](docs/Api/DefaultApi.md#validateaccountholderstatus) | **GET** /v1_0/accountholder/{accountHolderIdType}/{accountHolderId}/active | ValidateAccountHolderStatus

## Models

- [Address](docs/Model/Address.md)
- [Balance](docs/Model/Balance.md)
- [BasicUserInfoJsonResponse](docs/Model/BasicUserInfoJsonResponse.md)
- [Bcauthorize](docs/Model/Bcauthorize.md)
- [BcauthorizeResponse](docs/Model/BcauthorizeResponse.md)
- [BooleanResult](docs/Model/BooleanResult.md)
- [ConsentkycResponse](docs/Model/ConsentkycResponse.md)
- [Deliverynotification](docs/Model/Deliverynotification.md)
- [ErrorReason](docs/Model/ErrorReason.md)
- [Oauth2TokenRequest](docs/Model/Oauth2TokenRequest.md)
- [Oauth2TokenResponse](docs/Model/Oauth2TokenResponse.md)
- [Party](docs/Model/Party.md)
- [PreApproval](docs/Model/PreApproval.md)
- [PreApprovalResult](docs/Model/PreApprovalResult.md)
- [Refund](docs/Model/Refund.md)
- [RefundResult](docs/Model/RefundResult.md)
- [RequestToPay](docs/Model/RequestToPay.md)
- [RequestToPayResult](docs/Model/RequestToPayResult.md)
- [TokenPost200ApplicationJsonResponse](docs/Model/TokenPost200ApplicationJsonResponse.md)
- [TokenPost401ApplicationJsonResponse](docs/Model/TokenPost401ApplicationJsonResponse.md)
- [Transfer](docs/Model/Transfer.md)
- [TransferResult](docs/Model/TransferResult.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyHeader

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header


### apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
