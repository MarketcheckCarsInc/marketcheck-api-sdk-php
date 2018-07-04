# marketcheck\api\sdk\ListingsApi

All URIs are relative to *https://marketcheck-prod.apigee.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListing**](ListingsApi.md#getListing) | **GET** /listing/{id} | Listing by id
[**getListingExtra**](ListingsApi.md#getListingExtra) | **GET** /listing/{id}/extra | Long text Listings attributes for Listing with the given id
[**getListingMedia**](ListingsApi.md#getListingMedia) | **GET** /listing/{id}/media | Listing media by id
[**search**](ListingsApi.md#search) | **GET** /search | Gets active car listings for the given search criteria


# **getListing**
> \marketcheck\api\sdk\Model\Listing getListing($id, $api_key)

Listing by id

Get a particular listing by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Listing id to get all the listing attributes
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.

try {
    $result = $apiInstance->getListing($id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Listing id to get all the listing attributes |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\Listing**](../Model/Listing.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingExtra**
> \marketcheck\api\sdk\Model\ListingExtraAttributes getListingExtra($id, $api_key)

Long text Listings attributes for Listing with the given id

Get listing options, features, seller comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Listing id to get all the long text listing attributes
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.

try {
    $result = $apiInstance->getListingExtra($id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingExtra: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Listing id to get all the long text listing attributes |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\ListingExtraAttributes**](../Model/ListingExtraAttributes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingMedia**
> \marketcheck\api\sdk\Model\ListingMedia getListingMedia($id, $api_key)

Listing media by id

Get listing media (photo, photos) by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Listing id to get all the listing attributes
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.

try {
    $result = $apiInstance->getListingMedia($id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Listing id to get all the listing attributes |
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]

### Return type

[**\marketcheck\api\sdk\Model\ListingMedia**](../Model/ListingMedia.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \marketcheck\api\sdk\Model\SearchResponse search($api_key, $latitude, $longitude, $radius, $zip, $include_lease, $include_finance, $lease_term, $lease_down_payment, $lease_emp, $finance_loan_term, $finance_loan_apr, $finance_emp, $finance_down_payment, $finance_down_payment_per, $car_type, $seller_type, $carfax_1_owner, $carfax_clean_title, $year, $make, $model, $trim, $dealer_id, $vin, $source, $body_type, $body_subtype, $vehicle_type, $vins, $taxonomy_vins, $ymmt, $match, $cylinders, $transmission, $speeds, $doors, $drivetrain, $exterior_color, $interior_color, $engine, $engine_type, $engine_aspiration, $engine_block, $miles_range, $price_range, $dom_range, $sort_by, $sort_order, $rows, $start, $facets, $stats, $country, $plot, $nodedup, $state, $city, $dealer_name, $trim_o, $trim_r, $dom_active_range, $dom_180_range, $options, $features, $exclude_certified)

Gets active car listings for the given search criteria

This endpoint is the meat of the API and serves many purposes. This API produces a list of currently active cars from the market for the given search criteria. The API results are limited to allow pagination upto 1000 rows.   The search API facilitates the following use cases -  1. Search Cars around a given geo-point within a given radius  2. Search cars for a specific year / make / model or combination of these  3. Search cars matching multiple year, make, model combinatins in the same search request 4. Filter results by most car specification attributes 5. Search for similar cars by VIN or Taxonomy VIN  6. Filter cars within a given price / miles / days on market (dom) range 7. Specify a sort order for the results on price / miles / dom / listed date  8. Search cars for a given City / State combination  9. Get Facets to build the search drill downs  10. Get Market averages for price/miles/dom/msrp for your search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new marketcheck\api\sdk\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | The API Authentication Key. Mandatory with all API calls.
$latitude = 1.2; // double | Latitude component of location
$longitude = 1.2; // double | Longitude component of location
$radius = 56; // int | Radius around the search location
$zip = "zip_example"; // string | car search bases on zipcode
$include_lease = true; // bool | Boolean param to search for listings that include leasing options in them
$include_finance = true; // bool | Boolean param to search for listings that include finance options in them
$lease_term = "lease_term_example"; // string | Search listings with exact lease term, or inside a range with min and max seperated by a dash like lease_term=30-60
$lease_down_payment = "lease_down_payment_example"; // string | Search listings with exact down payment in lease offers, or inside a range with min and max seperated by a dash like lease_down_payment=30-60
$lease_emp = "lease_emp_example"; // string | Search listings with lease offers exactly matching Estimated Monthly Payment(EMI), or inside a range with min and max seperated by a dash like lease_emp=30-60
$finance_loan_term = "finance_loan_term_example"; // string | Search listings with exact finance loan term, or inside a range with min and max seperated by a dash like finance_loan_term=30-60
$finance_loan_apr = "finance_loan_apr_example"; // string | Search listings with finance offers exactly matching loans Annual Percentage Rate, or inside a range with min and max seperated by a dash like finance_loan_apr=30-60
$finance_emp = "finance_emp_example"; // string | Search listings with finance offers exactly matching Estimated Monthly Payment(EMI), or inside a range with min and max seperated by a dash like finance_emp=30-60
$finance_down_payment = "finance_down_payment_example"; // string | Search listings with exact down payment in finance offers, or inside a range with min and max seperated by a dash like finance_down_payment=30-60
$finance_down_payment_per = "finance_down_payment_per_example"; // string | Search listings with exact down payment percentage in finance offers, or inside a range with min and max seperated by a dash like finance_down_payment_per=30-60
$car_type = "car_type_example"; // string | Car type. Allowed values are - new / used / certified
$seller_type = "seller_type_example"; // string | Seller type to filter cars on. Valid filter values are those that our Search facets API returns for unique seller types. You can pass in multiple seller type values comma separated.
$carfax_1_owner = "carfax_1_owner_example"; // string | Indicates whether car has had only one owner or not
$carfax_clean_title = "carfax_clean_title_example"; // string | Indicates whether car has clean ownership records
$year = "year_example"; // string | Car year - 1980 onwards. Valid filter values are those that our Search facets API returns for unique years. You can pass in multiple year values comma separated.
$make = "make_example"; // string | Car Make - should be a standard OEM Make name. Valid filter values are those that our Search facets API returns for unique make. You can pass in multiple make values separated by comma. e.g. ford,audi
$model = "model_example"; // string | Car model to search. Valid filter values are those that our Search facets API returns for unique model. You can pass in multiple model values comma separated for e.g f-150,Mustang.
$trim = "trim_example"; // string | Car trim to search. Valid filter values are those that our Search facets API returns for unique trim. You can pass in multiple trim values comma separated
$dealer_id = "dealer_id_example"; // string | Dealer id to filter the cars.
$vin = "vin_example"; // string | Car vin to search
$source = "source_example"; // string | Source to search cars. Valid filter values are those that our Search facets API returns for unique source. You can pass in multiple source values comma separated
$body_type = "body_type_example"; // string | Body type to filter the cars on. Valid filter values are those that our Search facets API returns for unique body types. You can pass in multiple body types comma separated.
$body_subtype = "body_subtype_example"; // string | Body subtype to filter the cars on. Valid filter values are those that our Search facets API returns for unique body subtypes. You can pass in multiple body subtype values comma separated
$vehicle_type = "vehicle_type_example"; // string | Vehicle type to filter the cars on. Valid filter values are those that our Search facets API returns for unique vehicle types. You can pass in multiple vehicle type values comma separated
$vins = "vins_example"; // string | Comma separated list of 17 digit vins to search the matching cars for. Only 10 VINs allowed per request. If the request contains more than 10 VINs the first 10 VINs will be considered. Could be used as a More Like This or Similar Vehicles search for the given VINs. Ths vins parameter is an alternative to taxonomy_vins or ymmt parameters available with the search API. vins and taxonomy_vins parameters could be used to filter our cars with the exact build represented by the vins or taxonomy_vins whereas ymmt is a top level filter that does not filter cars by the build attributes like doors, drivetrain, cylinders, body type, body subtype, vehicle type etc
$taxonomy_vins = "taxonomy_vins_example"; // string | Comma separated list of 10 letters excert from the 17 letter VIN. The 10 letters to be picked up from the 17 letter VIN are - first 8 letters and the 10th and 11th letter. E.g. For a VIN - 1FTFW1EF3EKE57182 the taxonomy vin would be - 1FTFW1EFEK  A taxonomy VIN identified a build of a car and could be used to filter our cars of a particular build. This is an alternative to the vin or ymmt parameters to the search API.
$ymmt = "ymmt_example"; // string | Comma separated list of Year, Make, Model, Trim combinations. Each combination needs to have the year,make,model, trim values separated by a pipe '|' character in the form year|make|model|trim. e.g. 2010|Audi|A5,2014|Nissan|Sentra|S 6MT,|Honda|City|   You could just provide strings of the form - 'year|make||' or 'year|make|model' or '|make|model|' combinations. Individual year / make / model filters provied with the API calls will take precedence over the Year, Make, Model, Trim combinations. The Make, Model, Trim values must be valid values as per the Marketcheck Vin Decoder. If you are using a separate vin decoder then look at using the 'vins' or 'taxonomy_vins' parameter to the search api instead the year|make|model|trim combinations.
$match = "match_example"; // string | Comma separated list of Year, Make, Model, Trim fields. For example - year,make,model,trim fields for which user wants to do an exact match
$cylinders = "cylinders_example"; // string | Cylinders to filter the cars on. Valid filter values are those that our Search facets API returns for unique cylinder values. You can pass in multiple cylinder values comma separated
$transmission = "transmission_example"; // string | Transmission to filter the cars on. [a = Automatic, m = Manual]. Valid filter values are those that our Search facets API returns for unique transmission. You can pass in multiple transmission values comma separated
$speeds = "speeds_example"; // string | Speeds to filter the cars on. Valid filter values are those that our Search facets API returns for unique speeds. You can pass in multiple speeds values comma separated
$doors = "doors_example"; // string | Doors to filter the cars on. Valid filter values are those that our Search facets API returns for unique doors. You can pass in multiple doors values comma separated
$drivetrain = "drivetrain_example"; // string | Drivetrain to filter the cars on. Valid filter values are those that our Search facets API returns for unique drivetrains. You can pass in multiple drivetrain values comma separated
$exterior_color = "exterior_color_example"; // string | Exterior color to match. Valid filter values are those that our Search facets API returns for unique exterior colors. You can pass in multiple exterior color values comma separated
$interior_color = "interior_color_example"; // string | Interior color to match. Valid filter values are those that our Search facets API returns for unique interior colors. You can pass in multiple interior color values comma separated
$engine = "engine_example"; // string | Filter listings on engine
$engine_type = "engine_type_example"; // string | Engine Type to match. Valid filter values are those that our Search facets API returns for unique engine types. You can pass in multiple engine type values comma separated
$engine_aspiration = "engine_aspiration_example"; // string | Engine Aspiration to match. Valid filter values are those that our Search facets API returns for unique Engine Aspirations. You can pass in multiple Engine aspirations values comma separated
$engine_block = "engine_block_example"; // string | Engine Block to match. Valid filter values are those that our Search facets API returns for unique Engine Block. You can pass in multiple Engine Block values comma separated
$miles_range = "miles_range_example"; // string | Miles range to filter cars with miles in the given range. Range to be given in the format - min-max e.g. 1000-5000
$price_range = "price_range_example"; // string | Price range to filter cars with the price in the range given. Range to be given in the format - min-max e.g. 1000-5000
$dom_range = "dom_range_example"; // string | Days on Market range to filter cars with the DOM within the given range. Range to be given in the format - min-max e.g. 10-50
$sort_by = "sort_by_example"; // string | Sort by field - allowed fields are distance|price|miles|dom|age|posted_at|year. Default sort field is distance from the given point
$sort_order = "sort_order_example"; // string | Sort order - asc or desc. Default sort order is distance from a point.
$rows = "rows_example"; // string | Number of results to return. Default is 10. Max is 50
$start = "start_example"; // string | Page number to fetch the results for the given criteria. Default is 1. Pagination is allowed only till first 1000 results for the search and sort criteria. The page value can be only between 1 to 1000/rows
$facets = "facets_example"; // string | The comma separated list of fields for which facets are requested. Supported fields are - year, make, model, trim, vehicle_type, car_type, body_type, body_subtype, drivetrain, cylinders, transmission, exterior_color, interior_color, doors, engine_type, engine_aspiration, engine_block. Facets could be requested in addition to the listings for the search. Please note - The API calls with lots of facet fields may take longer to respond.
$stats = "stats_example"; // string | The list of fields for which stats need to be generated based on the matching listings for the search criteria. Allowed fields are - price, miles, msrp, dom The stats consists of mean, max, average and count of listings based on which the stats are calculated for the field. Stats could be requested in addition to the listings for the search. Please note - The API calls with the stats fields may take longer to respond.
$country = "country_example"; // string | Filter on Country, by default US. Search available on US (United States) and CA (Canada)
$plot = "plot_example"; // string | If plot has value true results in around 25k coordinates with limited fields to plot respective graph
$nodedup = true; // bool | If nodedup is set to true then will give results without is_searchable i.e multiple listings for single vin
$state = "state_example"; // string | Filter listsings on State
$city = "city_example"; // string | Filter listings on city
$dealer_name = "dealer_name_example"; // string | Filter listings on dealer_name
$trim_o = "trim_o_example"; // string | Filter listings on web scraped trim
$trim_r = "trim_r_example"; // string | Filter trim on custom possible matches
$dom_active_range = "dom_active_range_example"; // string | Active Days on Market range to filter cars with the DOM within the given range. Range to be given in the format - min-max e.g. 10-50
$dom_180_range = "dom_180_range_example"; // string | Last 180 Days on Market range to filter cars with the DOM within the given range. Range to be given in the format - min-max e.g. 10-50
$options = "options_example"; // string | Tokenizer search on options for multiple options use | as seperator
$features = "features_example"; // string | Tokenizer search on features for multiple options use | as seperator
$exclude_certified = true; // bool | Boolean param to exclude certified cars from search results

try {
    $result = $apiInstance->search($api_key, $latitude, $longitude, $radius, $zip, $include_lease, $include_finance, $lease_term, $lease_down_payment, $lease_emp, $finance_loan_term, $finance_loan_apr, $finance_emp, $finance_down_payment, $finance_down_payment_per, $car_type, $seller_type, $carfax_1_owner, $carfax_clean_title, $year, $make, $model, $trim, $dealer_id, $vin, $source, $body_type, $body_subtype, $vehicle_type, $vins, $taxonomy_vins, $ymmt, $match, $cylinders, $transmission, $speeds, $doors, $drivetrain, $exterior_color, $interior_color, $engine, $engine_type, $engine_aspiration, $engine_block, $miles_range, $price_range, $dom_range, $sort_by, $sort_order, $rows, $start, $facets, $stats, $country, $plot, $nodedup, $state, $city, $dealer_name, $trim_o, $trim_r, $dom_active_range, $dom_180_range, $options, $features, $exclude_certified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| The API Authentication Key. Mandatory with all API calls. | [optional]
 **latitude** | **double**| Latitude component of location | [optional]
 **longitude** | **double**| Longitude component of location | [optional]
 **radius** | **int**| Radius around the search location | [optional]
 **zip** | **string**| car search bases on zipcode | [optional]
 **include_lease** | **bool**| Boolean param to search for listings that include leasing options in them | [optional]
 **include_finance** | **bool**| Boolean param to search for listings that include finance options in them | [optional]
 **lease_term** | **string**| Search listings with exact lease term, or inside a range with min and max seperated by a dash like lease_term&#x3D;30-60 | [optional]
 **lease_down_payment** | **string**| Search listings with exact down payment in lease offers, or inside a range with min and max seperated by a dash like lease_down_payment&#x3D;30-60 | [optional]
 **lease_emp** | **string**| Search listings with lease offers exactly matching Estimated Monthly Payment(EMI), or inside a range with min and max seperated by a dash like lease_emp&#x3D;30-60 | [optional]
 **finance_loan_term** | **string**| Search listings with exact finance loan term, or inside a range with min and max seperated by a dash like finance_loan_term&#x3D;30-60 | [optional]
 **finance_loan_apr** | **string**| Search listings with finance offers exactly matching loans Annual Percentage Rate, or inside a range with min and max seperated by a dash like finance_loan_apr&#x3D;30-60 | [optional]
 **finance_emp** | **string**| Search listings with finance offers exactly matching Estimated Monthly Payment(EMI), or inside a range with min and max seperated by a dash like finance_emp&#x3D;30-60 | [optional]
 **finance_down_payment** | **string**| Search listings with exact down payment in finance offers, or inside a range with min and max seperated by a dash like finance_down_payment&#x3D;30-60 | [optional]
 **finance_down_payment_per** | **string**| Search listings with exact down payment percentage in finance offers, or inside a range with min and max seperated by a dash like finance_down_payment_per&#x3D;30-60 | [optional]
 **car_type** | **string**| Car type. Allowed values are - new / used / certified | [optional]
 **seller_type** | **string**| Seller type to filter cars on. Valid filter values are those that our Search facets API returns for unique seller types. You can pass in multiple seller type values comma separated. | [optional]
 **carfax_1_owner** | **string**| Indicates whether car has had only one owner or not | [optional]
 **carfax_clean_title** | **string**| Indicates whether car has clean ownership records | [optional]
 **year** | **string**| Car year - 1980 onwards. Valid filter values are those that our Search facets API returns for unique years. You can pass in multiple year values comma separated. | [optional]
 **make** | **string**| Car Make - should be a standard OEM Make name. Valid filter values are those that our Search facets API returns for unique make. You can pass in multiple make values separated by comma. e.g. ford,audi | [optional]
 **model** | **string**| Car model to search. Valid filter values are those that our Search facets API returns for unique model. You can pass in multiple model values comma separated for e.g f-150,Mustang. | [optional]
 **trim** | **string**| Car trim to search. Valid filter values are those that our Search facets API returns for unique trim. You can pass in multiple trim values comma separated | [optional]
 **dealer_id** | **string**| Dealer id to filter the cars. | [optional]
 **vin** | **string**| Car vin to search | [optional]
 **source** | **string**| Source to search cars. Valid filter values are those that our Search facets API returns for unique source. You can pass in multiple source values comma separated | [optional]
 **body_type** | **string**| Body type to filter the cars on. Valid filter values are those that our Search facets API returns for unique body types. You can pass in multiple body types comma separated. | [optional]
 **body_subtype** | **string**| Body subtype to filter the cars on. Valid filter values are those that our Search facets API returns for unique body subtypes. You can pass in multiple body subtype values comma separated | [optional]
 **vehicle_type** | **string**| Vehicle type to filter the cars on. Valid filter values are those that our Search facets API returns for unique vehicle types. You can pass in multiple vehicle type values comma separated | [optional]
 **vins** | **string**| Comma separated list of 17 digit vins to search the matching cars for. Only 10 VINs allowed per request. If the request contains more than 10 VINs the first 10 VINs will be considered. Could be used as a More Like This or Similar Vehicles search for the given VINs. Ths vins parameter is an alternative to taxonomy_vins or ymmt parameters available with the search API. vins and taxonomy_vins parameters could be used to filter our cars with the exact build represented by the vins or taxonomy_vins whereas ymmt is a top level filter that does not filter cars by the build attributes like doors, drivetrain, cylinders, body type, body subtype, vehicle type etc | [optional]
 **taxonomy_vins** | **string**| Comma separated list of 10 letters excert from the 17 letter VIN. The 10 letters to be picked up from the 17 letter VIN are - first 8 letters and the 10th and 11th letter. E.g. For a VIN - 1FTFW1EF3EKE57182 the taxonomy vin would be - 1FTFW1EFEK  A taxonomy VIN identified a build of a car and could be used to filter our cars of a particular build. This is an alternative to the vin or ymmt parameters to the search API. | [optional]
 **ymmt** | **string**| Comma separated list of Year, Make, Model, Trim combinations. Each combination needs to have the year,make,model, trim values separated by a pipe &#39;|&#39; character in the form year|make|model|trim. e.g. 2010|Audi|A5,2014|Nissan|Sentra|S 6MT,|Honda|City|   You could just provide strings of the form - &#39;year|make||&#39; or &#39;year|make|model&#39; or &#39;|make|model|&#39; combinations. Individual year / make / model filters provied with the API calls will take precedence over the Year, Make, Model, Trim combinations. The Make, Model, Trim values must be valid values as per the Marketcheck Vin Decoder. If you are using a separate vin decoder then look at using the &#39;vins&#39; or &#39;taxonomy_vins&#39; parameter to the search api instead the year|make|model|trim combinations. | [optional]
 **match** | **string**| Comma separated list of Year, Make, Model, Trim fields. For example - year,make,model,trim fields for which user wants to do an exact match | [optional]
 **cylinders** | **string**| Cylinders to filter the cars on. Valid filter values are those that our Search facets API returns for unique cylinder values. You can pass in multiple cylinder values comma separated | [optional]
 **transmission** | **string**| Transmission to filter the cars on. [a &#x3D; Automatic, m &#x3D; Manual]. Valid filter values are those that our Search facets API returns for unique transmission. You can pass in multiple transmission values comma separated | [optional]
 **speeds** | **string**| Speeds to filter the cars on. Valid filter values are those that our Search facets API returns for unique speeds. You can pass in multiple speeds values comma separated | [optional]
 **doors** | **string**| Doors to filter the cars on. Valid filter values are those that our Search facets API returns for unique doors. You can pass in multiple doors values comma separated | [optional]
 **drivetrain** | **string**| Drivetrain to filter the cars on. Valid filter values are those that our Search facets API returns for unique drivetrains. You can pass in multiple drivetrain values comma separated | [optional]
 **exterior_color** | **string**| Exterior color to match. Valid filter values are those that our Search facets API returns for unique exterior colors. You can pass in multiple exterior color values comma separated | [optional]
 **interior_color** | **string**| Interior color to match. Valid filter values are those that our Search facets API returns for unique interior colors. You can pass in multiple interior color values comma separated | [optional]
 **engine** | **string**| Filter listings on engine | [optional]
 **engine_type** | **string**| Engine Type to match. Valid filter values are those that our Search facets API returns for unique engine types. You can pass in multiple engine type values comma separated | [optional]
 **engine_aspiration** | **string**| Engine Aspiration to match. Valid filter values are those that our Search facets API returns for unique Engine Aspirations. You can pass in multiple Engine aspirations values comma separated | [optional]
 **engine_block** | **string**| Engine Block to match. Valid filter values are those that our Search facets API returns for unique Engine Block. You can pass in multiple Engine Block values comma separated | [optional]
 **miles_range** | **string**| Miles range to filter cars with miles in the given range. Range to be given in the format - min-max e.g. 1000-5000 | [optional]
 **price_range** | **string**| Price range to filter cars with the price in the range given. Range to be given in the format - min-max e.g. 1000-5000 | [optional]
 **dom_range** | **string**| Days on Market range to filter cars with the DOM within the given range. Range to be given in the format - min-max e.g. 10-50 | [optional]
 **sort_by** | **string**| Sort by field - allowed fields are distance|price|miles|dom|age|posted_at|year. Default sort field is distance from the given point | [optional]
 **sort_order** | **string**| Sort order - asc or desc. Default sort order is distance from a point. | [optional]
 **rows** | **string**| Number of results to return. Default is 10. Max is 50 | [optional]
 **start** | **string**| Page number to fetch the results for the given criteria. Default is 1. Pagination is allowed only till first 1000 results for the search and sort criteria. The page value can be only between 1 to 1000/rows | [optional]
 **facets** | **string**| The comma separated list of fields for which facets are requested. Supported fields are - year, make, model, trim, vehicle_type, car_type, body_type, body_subtype, drivetrain, cylinders, transmission, exterior_color, interior_color, doors, engine_type, engine_aspiration, engine_block. Facets could be requested in addition to the listings for the search. Please note - The API calls with lots of facet fields may take longer to respond. | [optional]
 **stats** | **string**| The list of fields for which stats need to be generated based on the matching listings for the search criteria. Allowed fields are - price, miles, msrp, dom The stats consists of mean, max, average and count of listings based on which the stats are calculated for the field. Stats could be requested in addition to the listings for the search. Please note - The API calls with the stats fields may take longer to respond. | [optional]
 **country** | **string**| Filter on Country, by default US. Search available on US (United States) and CA (Canada) | [optional]
 **plot** | **string**| If plot has value true results in around 25k coordinates with limited fields to plot respective graph | [optional]
 **nodedup** | **bool**| If nodedup is set to true then will give results without is_searchable i.e multiple listings for single vin | [optional]
 **state** | **string**| Filter listsings on State | [optional]
 **city** | **string**| Filter listings on city | [optional]
 **dealer_name** | **string**| Filter listings on dealer_name | [optional]
 **trim_o** | **string**| Filter listings on web scraped trim | [optional]
 **trim_r** | **string**| Filter trim on custom possible matches | [optional]
 **dom_active_range** | **string**| Active Days on Market range to filter cars with the DOM within the given range. Range to be given in the format - min-max e.g. 10-50 | [optional]
 **dom_180_range** | **string**| Last 180 Days on Market range to filter cars with the DOM within the given range. Range to be given in the format - min-max e.g. 10-50 | [optional]
 **options** | **string**| Tokenizer search on options for multiple options use | as seperator | [optional]
 **features** | **string**| Tokenizer search on features for multiple options use | as seperator | [optional]
 **exclude_certified** | **bool**| Boolean param to exclude certified cars from search results | [optional]

### Return type

[**\marketcheck\api\sdk\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

