# Swagger\Client\ContentGenerationApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**backgroundTexturePost**](ContentGenerationApi.md#backgroundtexturepost) | **POST** /background/texture | Texture Generator

# **backgroundTexturePost**
> \Swagger\Client\Model\InlineResponse200 backgroundTexturePost()

Texture Generator

**Service Description:**   The *texture generator* tool generates a background texture pattern for the input image. You can create unlimited textures from the same texture source image.  **Limitations:** Works best with colorful source images. Supported source image formats are JPG, PNG, TIFF and WEBP.  **Examples:**      Examples of where the texture generator tool can be used include the following:   * Backgrounds   * Patterns   * Tiles  **Options:**   * You can control width and height of the output image   * You can control the x and y offset, from the center, of the pattern   * You can choose from five different patterns   * You can scale and/or rotate the pattern  **Source Image:**   If you want to apply multiple textures to the same image, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [Texture.sh](https://picsart.io/files/api-samples-curl-Texture.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContentGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->backgroundTexturePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentGenerationApi->backgroundTexturePost: ', $e->getMessage(), PHP_EOL;
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

