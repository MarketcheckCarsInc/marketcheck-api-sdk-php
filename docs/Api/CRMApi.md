# marketcheck\api\sdk\CRMApi

All URIs are relative to *https://marketcheck-prod.apigee.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crmCheck**](CRMApi.md#crmCheck) | **GET** /crm_check/{vin} | CRM check of a particular vin


# **crmCheck**
> \marketcheck\api\sdk\Model\CRMResponse crmCheck($vin, $sale_date, $api_key)

CRM check of a particular vin

Check whether particular vin has had a listing after stipulated date or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\CRMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vin = "vin_example"; // string | vin for which CRM check needs to be done
$sale_date = "sale_date_example"; // string | sale date after which listing has appeared or not
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.

try {
    $result = $apiInstance->crmCheck($vin, $sale_date, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CRMApi->crmCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| vin for which CRM check needs to be done |
 **sale_date** | **string**| sale date after which listing has appeared or not |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\CRMResponse**](../Model/CRMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

