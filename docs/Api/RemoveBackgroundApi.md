# Swagger\Client\RemoveBackgroundApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**removebgPost**](RemoveBackgroundApi.md#removebgpost) | **POST** /removebg | Remove &amp; Change Background

# **removebgPost**
> \Swagger\Client\Model\InlineResponse200 removebgPost()

Remove & Change Background

**Service Description:**  The *removebg* service removes the background of an image. Utilizing high-end AI technology, our background remover detects the foreground object and automatically separates it from the background. Our algorithm is capable of handling the most diverse use cases, like small jewelry details, human hair, furry segments or any other complex edge types. Whether it's a product for sale, graphical materials for your best campaign or just personal images for fun editing, you will get clear edges with awesome detail preservation.  **Limitations:**    The recommended composition of an Image, in order to be optimally processed using the \"removebg\" service, is:   * less busy background   * high contrast (background/foreground)   * background/foreground is distinguishable by naked eye        The foreground should be visually clear, high contrast with relatively sharp edges. The foreground should also be comparably big in the photo. Supported source image formats are JPG, PNG, TIFF and WEBP.   **Examples:**    Examples of where the remove background service can be utilized include the following:   * Animals   * Products   * Apparel   * Person   * Cars   * Furniture  **Options:**   * You have two options for removing the background, either \"cutout\" or \"mask\"   * You can control background color   * You can control background blur   * You can control background height and width   * You have two scaling options, either \"fit\" or \"fill\"  **Source Image:**     If you plan to remove the background several times using different parameters from the list below, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**     Use this file [RemoveBackground.sh](https://picsart.io/files/api-samples-curl-RemoveBackground.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\RemoveBackgroundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->removebgPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoveBackgroundApi->removebgPost: ', $e->getMessage(), PHP_EOL;
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

