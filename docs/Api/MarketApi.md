# marketcheck\api\sdk\MarketApi

All URIs are relative to *https://marketcheck-prod.apigee.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMDS**](MarketApi.md#getMDS) | **GET** /mds | Market Days Supply
[**getPopularity**](MarketApi.md#getPopularity) | **GET** /popularity | Popularity


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
$exact = "exact_example"; // string | Exact parameter
$latitude = 1.2; // double | Latitude component of location
$longitude = 1.2; // double | Longitude component of location
$radius = 56; // int | Radius around the search location
$debug = "debug_example"; // string | Debug parameter
$include_sold = "include_sold_example"; // string | To fetch sold vins

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
 **exact** | **string**| Exact parameter | [optional]
 **latitude** | **double**| Latitude component of location | [optional]
 **longitude** | **double**| Longitude component of location | [optional]
 **radius** | **int**| Radius around the search location | [optional]
 **debug** | **string**| Debug parameter | [optional]
 **include_sold** | **string**| To fetch sold vins | [optional]

### Return type

[**\marketcheck\api\sdk\Model\Mds**](../Model/Mds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPopularity**
> \marketcheck\api\sdk\Model\PopularityItem[] getPopularity($year, $make, $model, $trim, $body_type, $api_key, $stats)

Popularity

[MOCK] [Merged with the /search API - Please check the 'popularity' parameter to the Search API above] Get the Popularity for the given simple filter criteria (by given Year, Make, Model, Trim criteria)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$year = "year_example"; // string | Year of the car
$make = "make_example"; // string | Make of the car
$model = "model_example"; // string | Model of the Car
$trim = "trim_example"; // string | Trim of the Car
$body_type = "body_type_example"; // string | Body type to filter the cars on. Valid values are the ones returned by body_type facets API call
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.
$stats = "stats_example"; // string | The list of fields for which stats need to be generated based on the matching listings for the search criteria. Allowed fields are - price, miles, msrp, dom The stats consists of mean, max, average and count of listings based on which the stats are calculated for the field. Stats could be requested in addition to the listings for the search. Please note - The API calls with the stats fields may take longer to respond.

try {
    $result = $apiInstance->getPopularity($year, $make, $model, $trim, $body_type, $api_key, $stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getPopularity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **string**| Year of the car |
 **make** | **string**| Make of the car |
 **model** | **string**| Model of the Car |
 **trim** | **string**| Trim of the Car |
 **body_type** | **string**| Body type to filter the cars on. Valid values are the ones returned by body_type facets API call |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]
 **stats** | **string**| The list of fields for which stats need to be generated based on the matching listings for the search criteria. Allowed fields are - price, miles, msrp, dom The stats consists of mean, max, average and count of listings based on which the stats are calculated for the field. Stats could be requested in addition to the listings for the search. Please note - The API calls with the stats fields may take longer to respond. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\PopularityItem[]**](../Model/PopularityItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

