# Swagger\Client\PhotoEnhancementApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enhanceFacePost**](PhotoEnhancementApi.md#enhancefacepost) | **POST** /enhance/face | Face Enhancement
[**upscaleEnhancePost**](PhotoEnhancementApi.md#upscaleenhancepost) | **POST** /upscale/enhance | Ultra Enhance
[**upscalePost**](PhotoEnhancementApi.md#upscalepost) | **POST** /upscale | Upscale
[**upscaleUltraPost**](PhotoEnhancementApi.md#upscaleultrapost) | **POST** /upscale/ultra | Upscale Ultra
[**upscaleUltraTransactionIdGet**](PhotoEnhancementApi.md#upscaleultratransactionidget) | **GET** /upscale/ultra/{transaction_id} | 

# **enhanceFacePost**
> \Swagger\Client\Model\InlineResponse200 enhanceFacePost()

Face Enhancement

**Service Description:**   With our *enhance face* tool, you can turn your old, blurry photos into clear portraits and selfies.   Our AI technology will find faces, perform restoration and do color enhancement simultaneously.   It will improve the skin texture and sharpen details while keeping a good balance of realness and fidelity with much less artifacts.   **Limitations:** Supported image formats are JPG, PNG, TIFF and WEBP.   **Examples:**    Examples of where the face enhancement tool can be utilized include the following:     * Selfies    * Face macros (close up)    * Images with multiple faces    * Images with mid-range faces    * Results of professional photo shoots   **Source Image:**    If you plan to apply a mask to an image multiple times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.   **Authorization:**      Requires an API key to be provided in the **X-Picsart-API-Key** request header.   **cURL:**     Use this file [EnhanceFace.sh](https://picsart.io/files/api-samples-curl-Enhance-Face.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PhotoEnhancementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->enhanceFacePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoEnhancementApi->enhanceFacePost: ', $e->getMessage(), PHP_EOL;
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

# **upscaleEnhancePost**
> \Swagger\Client\Model\InlineResponse200 upscaleEnhancePost()

Ultra Enhance

**Service Description:**   *Ultra enhance* is a new upscaling technique with a generative model which provides high frequency detail. It works well on images without noise and preserves details in a superior way.   **Limitations:** Up to 16 times upscaling on input images. Supported source image formats are JPG, PNG, TIFF and WEBP.    **Minimums/Maximums:**    * Up to 256Mpx output images   **Examples:**    Examples of where ultra enhance can be utilized include the following:    * Low resolution images    * Images that need smoothing and realistic details     * To de-noise an image    * Works best with the Face Enhance service   **Source Image:**    If you plan to upscale enhance an image several times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.   **Authorization:**      Requires an API key to be provided in the **X-Picsart-API-Key** request header.   **cURL:**   Use this file [UpscaleEnhance.sh](https://picsart.io/files/api-samples-curl-Upscale-Enhance.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PhotoEnhancementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->upscaleEnhancePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoEnhancementApi->upscaleEnhancePost: ', $e->getMessage(), PHP_EOL;
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

# **upscalePost**
> \Swagger\Client\Model\InlineResponse200 upscalePost()

Upscale

**Service Description:**    The *upscale* service increases the resolutions of an image by a given upscale factor, without increasing its file size. Upscale increases the quality and resolution of your photos by leveraging predictive and generative AI to add pixels to your image. It works especially well on images without noise.  **Limitations:**    Images can be upscaled up to 8 times. Images can be upscaled with outputs up to 4800x4800 (16 Mpx). Supported source image formats are JPG, PNG, TIFF and WEBP.   **Minimums/Maximums:**    Upscale Factor    | Input Image Maximum Recommended Resolution (width x height)    ------------------| ----------------------------------------    2                 | 2000x2000    4                 | 1024x1024    6                 | 800x800    8                 | 600x600  **Examples:**    Examples of where the upscale service can be utilized include the following:   * High resolution images   **Rules:**    The image should have sharp details.  **Source Image:**    If you plan to upscale an image several times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**    Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [Upscale.sh](https://picsart.io/files/api-samples-curl-Upscale.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PhotoEnhancementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->upscalePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoEnhancementApi->upscalePost: ', $e->getMessage(), PHP_EOL;
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

# **upscaleUltraPost**
> \Swagger\Client\Model\InlineResponse200 upscaleUltraPost()

Upscale Ultra

**Service Description:** *Upscale Ultra* is a new upscaling technique which does upscaling with noise suppression. It works well on images with faces, small resolution images, stickers and objects with geometric shapes and clear edges. Upscale ultra increases the quality and resolution of low quality photos by leveraging predictive and generative AI technology in order to \"complete\" missing pixels for a best in class smoothing and enhancement effect. It works especially good on small resolution images with faces.  **Limitations:**   Images can be upscaled up to 16 times. Supported source image formats are JPG, PNG, TIFF and WEBP.   **Minimums/Maximums:**   * Up to 4Mpx (2048x2048) input images   * Up to 256Mpx output images  **Examples:**   Examples of where the upscale ultra service can be utilized include the following:    * Low resolution images    * Images that need smoothing  **Options:**   This service allows users to choose from *synchronous*, *asynchronous* and *auto-mode* (sync is default) type of processing. The asynchronous service is preferred when processing large final size image files or when using high upscaling factors. When done asynchronously, rather than receiving a URL to the finished image, you will receive a transaction_id to use with the GET method to retrieve the transformed image. Options are detailed below:   * **Sync**: issues a synchronous request, response is given when the result is ready. In case of processes which take too long (>55 seconds), the request returns an error after timeout. Based on the estimated (calculated by the algorithm) final size of an image, there is also an auto-switching mechanism which automatically switches the processing mode to the async mode, if the estimated final size of the respective image is larger than 4Mpx.   * **Async**: forces an asynchronous request, and the response, which is instantaneous, contains a \"transaction_id\" which is used to poll for the result. For async processing, the request runs in async mode either until it returns a result or stops after 24 hours.   * **Auto**: the processing mode decision is made automatically by the service, depending upon image size (estimated final size of an image should exceed 4Mpx to choose async automatically).    **Source Image:**     If you plan to upscale ultra an image several times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.    **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.    **cURL:**     Use this file [Upscale-Ultra.sh](https://picsart.io/files/api-samples-curl-Upscale-Ultra.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PhotoEnhancementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->upscaleUltraPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoEnhancementApi->upscaleUltraPost: ', $e->getMessage(), PHP_EOL;
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

# **upscaleUltraTransactionIdGet**
> \Swagger\Client\Model\InlineResponse200 upscaleUltraTransactionIdGet($transaction_id)



**Service Description:** Use this method, along with transaction_id, to retrieve the upscale ultra finished image if the transformation was done asynchronously. **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:** Use this file [Upscale-Ultra-Id.sh](https://picsart.io/files/api-samples-curl-Upscale-Ultra-Id.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PhotoEnhancementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "transaction_id_example"; // string | The ID returned from the POST method when it's done asynchronously.

try {
    $result = $apiInstance->upscaleUltraTransactionIdGet($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoEnhancementApi->upscaleUltraTransactionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The ID returned from the POST method when it&#x27;s done asynchronously. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

