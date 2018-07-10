# marketcheck\api\sdk\MarketApi

All URIs are relative to *https://marketcheck-prod.apigee.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMDS**](MarketApi.md#getMDS) | **GET** /mds | Market Days Supply
[**getSalesCount**](MarketApi.md#getSalesCount) | **GET** /sales | Get sales count by make, model, year, trim or taxonomy vin


# **getMDS**
> \marketcheck\api\sdk\Model\Mds getMDS($vin, $api_key, $exact, $latitude, $longitude, $radius, $debug, $include_sold)

Market Days Supply

Get the basic information on specifications for a car identified by a valid VIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vin = "vin_example"; // string | VIN to decode
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.
$exact = false; // bool | Exact parameter
$latitude = 1.2; // double | Latitude component of location
$longitude = 1.2; // double | Longitude component of location
$radius = 56; // int | Radius around the search location
$debug = 0; // int | Debug parameter
$include_sold = false; // bool | To fetch sold vins

try {
    $result = $apiInstance->getMDS($vin, $api_key, $exact, $latitude, $longitude, $radius, $debug, $include_sold);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMDS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| VIN to decode |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]
 **exact** | **bool**| Exact parameter | [optional] [default to false]
 **latitude** | **double**| Latitude component of location | [optional]
 **longitude** | **double**| Longitude component of location | [optional]
 **radius** | **int**| Radius around the search location | [optional]
 **debug** | **int**| Debug parameter | [optional] [default to 0]
 **include_sold** | **bool**| To fetch sold vins | [optional] [default to false]

### Return type

[**\marketcheck\api\sdk\Model\Mds**](../Model/Mds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesCount**
> \marketcheck\api\sdk\Model\Sales getSalesCount($api_key, $car_type, $make, $mm, $ymm, $ymmt, $taxonomy_vin, $state, $city_state, $stats)

Get sales count by make, model, year, trim or taxonomy vin

Get a sales count for city, state or national level by make, model, year, trim or taxonomy vin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.
$car_type = "used"; // string | Inventory type for which sales count is to be searched, default is used
$make = "make_example"; // string | Make for which sales count is to be searched
$mm = "mm_example"; // string | Make-Model for which sales count is to be searched, pipe seperated like mm=ford|f-150
$ymm = "ymm_example"; // string | Year-Make-Model for which sales count is to be searched, pipe seperated like ymm=2015|ford|f-150
$ymmt = "ymmt_example"; // string | Year-Make-Model-Trim for which sales count is to be searched, pipe seperated like ymmt=2015|ford|f-150|platinum
$taxonomy_vin = "taxonomy_vin_example"; // string | taxonomy_vin for which sales count is to be searched
$state = "state_example"; // string | State level sales count
$city_state = "city_state_example"; // string | City level sales count, pipe seperated like city_state=jacksonville|FL
$stats = "stats_example"; // string | Comma separated list of fields to generate stats for. Allowed fields in the list are - price, miles, dom (days on market) OR all

try {
    $result = $apiInstance->getSalesCount($api_key, $car_type, $make, $mm, $ymm, $ymmt, $taxonomy_vin, $state, $city_state, $stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getSalesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]
 **car_type** | **string**| Inventory type for which sales count is to be searched, default is used | [optional] [default to used]
 **make** | **string**| Make for which sales count is to be searched | [optional]
 **mm** | **string**| Make-Model for which sales count is to be searched, pipe seperated like mm&#x3D;ford|f-150 | [optional]
 **ymm** | **string**| Year-Make-Model for which sales count is to be searched, pipe seperated like ymm&#x3D;2015|ford|f-150 | [optional]
 **ymmt** | **string**| Year-Make-Model-Trim for which sales count is to be searched, pipe seperated like ymmt&#x3D;2015|ford|f-150|platinum | [optional]
 **taxonomy_vin** | **string**| taxonomy_vin for which sales count is to be searched | [optional]
 **state** | **string**| State level sales count | [optional]
 **city_state** | **string**| City level sales count, pipe seperated like city_state&#x3D;jacksonville|FL | [optional]
 **stats** | **string**| Comma separated list of fields to generate stats for. Allowed fields in the list are - price, miles, dom (days on market) OR all | [optional]

### Return type

[**\marketcheck\api\sdk\Model\Sales**](../Model/Sales.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

