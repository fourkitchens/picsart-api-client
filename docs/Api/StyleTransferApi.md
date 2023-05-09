# Swagger\Client\StyleTransferApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**styletransferPost**](StyleTransferApi.md#styletransferpost) | **POST** /styletransfer | Style Transfer

# **styletransferPost**
> \Swagger\Client\Model\InlineResponse200 styletransferPost()

Style Transfer

**Service Description:**   The *style transfer* tool transfers a style from a reference image to a content image. The smart algorithm blends the two images together so the output looks like the content image, but \"painted\" in the style of the reference image.   **Limitations:** Works best with graphics reference images. Works best with nature content images. Supported source image formats are JPG, PNG, TIFF and WEBP.  **Examples:**   Examples of where the style transfer tool can be used include the following:   * Magic filters   * To convert an image to a piece of art   * To generate unique results   * To recreate the style of a famous painting  **Options:**   * You can choose from five different levels of transfer  **Source Image:**   If you plan to transfer styles to an image multiple times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [StyleTransfer.sh](https://picsart.io/files/api-samples-curl-StyleTransfer.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\StyleTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->styletransferPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StyleTransferApi->styletransferPost: ', $e->getMessage(), PHP_EOL;
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

