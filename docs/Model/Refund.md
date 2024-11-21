# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Amount that will be debited from the payer account. | [optional]
**currency** | **string** | ISO4217 Currency | [optional]
**external_id** | **string** | External id is used as a reference to the transaction. External id is used for reconciliation. The external id will be included in transaction history report. &lt;br&gt;External id is not required to be unique. | [optional]
**payer_message** | **string** | Message that will be written in the payer transaction history message field. | [optional]
**payee_note** | **string** | Message that will be written in the payee transaction history note field. | [optional]
**reference_id_to_refund** | **string** | Format - UUID. Recource ID of the created refund transaction. This ID is used, for example, validating the status of the‘ ’transaction generated using UUID version 4. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
