# marketcheck\api\sdk\DealerApi

All URIs are relative to *https://marketcheck-prod.apigee.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dealerSearch**](DealerApi.md#dealerSearch) | **GET** /dealers | Find car dealers around
[**getDealer**](DealerApi.md#getDealer) | **GET** /dealer/{dealer_id} | Dealer by id


# **dealerSearch**
> \marketcheck\api\sdk\Model\DealersResponse dealerSearch($latitude, $longitude, $radius, $api_key, $rows, $start)

Find car dealers around

The dealers API returns a list of dealers around a given point and radius. Max radius of only 50 miles is supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\DealerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$latitude = 1.2; // double | Latitude component of location
$longitude = 1.2; // double | Longitude component of location
$radius = 56; // int | Radius around the search location
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.
$rows = 8.14; // float | Number of results to return. Default is 10. Max is 50
$start = 8.14; // float | Offset for the search results. Default is 1.

try {
    $result = $apiInstance->dealerSearch($latitude, $longitude, $radius, $api_key, $rows, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealerApi->dealerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**| Latitude component of location |
 **longitude** | **double**| Longitude component of location |
 **radius** | **int**| Radius around the search location |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]
 **rows** | **float**| Number of results to return. Default is 10. Max is 50 | [optional]
 **start** | **float**| Offset for the search results. Default is 1. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\DealersResponse**](../Model/DealersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDealer**
> \marketcheck\api\sdk\Model\Dealer getDealer($dealer_id, $api_key)

Dealer by id

Get a particular dealer's information by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\DealerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dealer_id = "dealer_id_example"; // string | Dealer id to get all the dealer info attributes
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.

try {
    $result = $apiInstance->getDealer($dealer_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealerApi->getDealer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dealer_id** | **string**| Dealer id to get all the dealer info attributes |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\Dealer**](../Model/Dealer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

