# marketcheck\api\sdk\VINDecoderApi

All URIs are relative to *https://marketcheck-prod.apigee.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**decode**](VINDecoderApi.md#decode) | **GET** /vin/{vin}/specs | VIN Decoder


# **decode**
> \marketcheck\api\sdk\Model\Build decode($vin, $api_key)

VIN Decoder

Get the basic information on specifications for a car identified by a valid VIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\VINDecoderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vin = "vin_example"; // string | VIN to decode
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.

try {
    $result = $apiInstance->decode($vin, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VINDecoderApi->decode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| VIN to decode |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

