# Swagger\Client\AdjustApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustPost**](AdjustApi.md#adjustpost) | **POST** /adjust | Adjust
[**editPost**](AdjustApi.md#editpost) | **POST** /edit | Basic Editing

# **adjustPost**
> \Swagger\Client\Model\InlineResponse200 adjustPost()

Adjust

**Service Description:**   The *adjust* service applies adjustments to an input image. There are 11 different adjustments in all available. The adjust service can be used with all photo types.  **Limitations:** Supported source image formats are JPG, PNG, TIFF and WEBP.  **Options:** Adjustment options include the following:   * Adjust brightness and/or contrast   * Adjust clarity and/or saturation   * Adjust hue and/or shadows   * Adjust highlights and/or temperature   * Adjust noise or sharpen the image  **Rules:**   * At least one adjustment setting must be chosen   * If you choose an adjustment setting value out of the allowed range, the default value of 0 is used instead.  **Source Image:**   If you plan to apply adjustments multiple times to an image, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [Adjust.sh](https://picsart.io/files/api-samples-curl-Adjust.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AdjustApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adjustPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustApi->adjustPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPost**
> \Swagger\Client\Model\InlineResponse200 editPost()

Basic Editing

**Service Description:**   The *Edit* service applies basic image editing to an input image.   The basic editing operations are resize, crop, flip, rotate and perspective manipulation.   **Limitations:** Supported image formats are JPG, PNG, TIFF and WEBP. The resultant image cannot be bigger than the original source image. To get greater resolution, see the Upscale services.   **Options:**    * Define the crop dimensions: width and height    * Define the area of the cutout      * If the area is not defined, the cut out will be done with center-crop.    * Rotate the image      * By degrees (+180 to -180)      * The original image, after rotation, may be zoomed to fill in the area    * Flip the image: horizontally or vertically    * Choose the perspective view of the image: horizontal or vertical   **Rules:**    * If you choose an Edit setting value out of the allowed range, the default value of the field will be used instead (see documentation below).   **Source Image:**    If you plan to apply a mask to an image multiple times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.   **Authorization:**      Requires an API key to be provided in the **X-Picsart-API-Key** request header.   **cURL:**     Use this file [Edit.sh](https://picsart.io/files/api-samples-curl-Edit.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AdjustApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->editPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustApi->editPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

