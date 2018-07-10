# marketcheck\api\sdk\HistoryApi

All URIs are relative to *https://marketcheck-prod.apigee.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**history**](HistoryApi.md#history) | **GET** /history/{vin} | Get a cars online listing history


# **history**
> \marketcheck\api\sdk\Model\HistoricalListing[] history($vin, $api_key, $fields, $page)

Get a cars online listing history

The history API returns online listing history for a car identified by its VIN. History listings are sorted in the descending order of the listing date / last seen date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vin = "vin_example"; // string | The VIN to identify the car to fetch the listing history. Must be a valid 17 char VIN
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.
$fields = "fields_example"; // string | List of fields to fetch, in case the default fields list in the response is to be trimmed down
$page = 8.14; // float | Page number to fetch the results for the given criteria. Default is 1.

try {
    $result = $apiInstance->history($vin, $api_key, $fields, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->history: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| The VIN to identify the car to fetch the listing history. Must be a valid 17 char VIN |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]
 **fields** | **string**| List of fields to fetch, in case the default fields list in the response is to be trimmed down | [optional]
 **page** | **float**| Page number to fetch the results for the given criteria. Default is 1. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\HistoricalListing[]**](../Model/HistoricalListing.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

