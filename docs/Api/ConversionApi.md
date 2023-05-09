# Swagger\Client\ConversionApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vectorizerPost**](ConversionApi.md#vectorizerpost) | **POST** /vectorizer | Image Vectorizer

# **vectorizerPost**
> \Swagger\Client\Model\InlineResponse200 vectorizerPost()

Image Vectorizer

**Service Description:**   With the *vectorizer* tool you can instantly turn your raster image into high quality vector graphic as it converts a PNG image to a SVG image.   Using geometric figures, like curves and lines, the vectorizer converts the pixel information of raster input into vector image, which can be enlarged and edited without quality loss.  **Limitations:** We recommend keeping files up to 2048 on each side. Supported source image formats are JPG, PNG, TIFF and WEBP. Output is always SVG.  **Examples:** Examples of where the vectorizer can be used include:   * Icons   * Logos   * Illustrations   * Graphics   * Shapes  **Options:** If the original does not meet the recommended file size, you can downscale with downscale_to parameter.  **Minimums/Maximums:**   * Images up to 8K  **Source Image:**   You can source the image by providing a file, a URL to an online image, or a reference_id from a previously uploaded image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [Vectorizer.sh](https://picsart.io/files/api-samples-curl-Vectorizer.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vectorizerPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionApi->vectorizerPost: ', $e->getMessage(), PHP_EOL;
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

