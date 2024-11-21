# # BasicUserInfoJsonResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**given_name** | **string** | Given name(s) or first name(s) of the End-User. Note that in some cultures, people can have multiple given names; all can be present, with the names being separated by space characters. | [optional]
**family_name** | **string** | Surname(s) or last name(s) of the End-User. Note that in some cultures, people can have multiple family names or no family name; all can be present, with the names being separated by space characters. | [optional]
**birthdate** | **string** | Account holder birth date. | [optional]
**locale** | **string** | End-User&#39;s locale, represented as a  BCP47 [RFC5646] language tag. This is typically an  ISO 639-1 Alpha-2 [ISO639�|�1] language code in lowercase and an  ISO 3166-1 Alpha-2 [ISO3166�|�1] country code in uppercase, separated by a dash. For example,  en-US or  fr-CA. As a compatibility note, some implementations have used an underscore as the separator rather than a dash, for example,  en_US; Relying Parties may choose to accept this locale syntax as well. | [optional]
**gender** | **string** | End-User&#39;s gender. Values defined by this specification are female and male. Other values may be used when neither of the defined values are applicable. | [optional]
**status** | **string** | Accountholder status. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
