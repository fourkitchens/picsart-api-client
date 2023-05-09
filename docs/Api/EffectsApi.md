# Swagger\Client\EffectsApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**effectsGet**](EffectsApi.md#effectsget) | **GET** /effects | Effects
[**effectsPost**](EffectsApi.md#effectspost) | **POST** /effects | 
[**effectsPreviewsPost**](EffectsApi.md#effectspreviewspost) | **POST** /effects/previews | Effect Previews
[**masksPost**](EffectsApi.md#maskspost) | **POST** /masks | 
[**masksPreviewsPost**](EffectsApi.md#maskspreviewspost) | **POST** /masks/previews | 

# **effectsGet**
> \Swagger\Client\Model\InlineResponse2001 effectsGet()

Effects

**Service Description:**   This service retrieves a list of supported effects.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:** Use this file [GetEffects.sh](https://picsart.io/files/api-samples-curl-GetEffects.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EffectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->effectsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EffectsApi->effectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **effectsPost**
> \Swagger\Client\Model\InlineResponse200 effectsPost()



**Service Description:**   With the *effects* service you can apply up to 24 different effects to an image.  **Limitations:** Works best with color-rich photos. Supported source image formats are JPG, PNG, TIFF and WEBP.   **Examples:**   Examples of where effects can be used include the following:   * Works with all photo types   * Makes any photo stand out   * Helps with branding   * Great with look up tables (LUT)  **Options:** Choose the effect to apply  **Source Image:**   If you plan to apply effects to an image several times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [PostEffects.sh](https://picsart.io/files/api-samples-curl-PostEffects.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EffectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->effectsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EffectsApi->effectsPost: ', $e->getMessage(), PHP_EOL;
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

# **effectsPreviewsPost**
> \Swagger\Client\Model\InlineResponse200 effectsPreviewsPost()

Effect Previews

**Service Description:**   The *effects previews* service applies an effect to a given input image and returns a preview (i.e., thumbnail) of the effect.  **Limitations:** Can apply up to 10 effects to an image in one call. To minimize the networking and processing loads, use the same input image size as the desired preview size. Supported source image formats are JPG, PNG, TIFF and WEBP.   **Minimums/Maximums:**   * Maximum height or width of preview image is 240px  **Options:**   * You can set the size of the preview image   * There are 24 different effects to choose from  **Source Image:**   If you want to preview more than 10 effects, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [EffectsPreviews.sh](https://picsart.io/files/api-samples-curl-EffectsPreviews.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EffectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->effectsPreviewsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EffectsApi->effectsPreviewsPost: ', $e->getMessage(), PHP_EOL;
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

# **masksPost**
> \Swagger\Client\Model\InlineResponse200 masksPost()



**Service Description:**   The *masks* service applies a mask to an image.  **Limitations:** Supported source image formats are JPG, PNG, TIFF and WEBP.   **Options:** Each mask application offers five options:  * Blend: determines the appearance of the mask (7 choices)  * Mask type: determines the mask type (11 choices)  * Opacity: determines the opaqueness of the mask (0 to 100)  * Hue: determines the hue of the mask (-180 to 180)  * Mask flip: gives options to flip the mask (5 choices)  **Source Image:**   If you plan to apply a mask to an image multiple times, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [Masks.sh](https://picsart.io/files/api-samples-curl-Masks.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EffectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->masksPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EffectsApi->masksPost: ', $e->getMessage(), PHP_EOL;
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

# **masksPreviewsPost**
> \Swagger\Client\Model\InlineResponse200 masksPreviewsPost()



**Description:**   The *masks previews* service applies mask effects to a given input image and returns a preview (i.e., thumbnail) of the effect.  **Limitations:** To minimize the networking and processing loads, use the same input image size as the desired preview size. Supported source image formats are JPG, PNG, TIFF and WEBP.   **Minimums/Maximums:**   * Maximum height or width of preview image is 240px  **Options:**   * You can set the size of the preview image   * You can choose blend which determines the appearance of the mask   * You can choose mask type   * You can set the mask's opacity   * You can set the mask's hue   * You can choose a mask flip  **Source Image:**   If you want to preview multiple effects of the same image, we recommend you first upload the source image using the *Upload* method and then use the reference image ID. Otherwise, you can source the image by providing a file or a URL to an online image.  **Authorization:**     Requires an API key to be provided in the **X-Picsart-API-Key** request header.  **cURL:**    Use this file [MasksPreview.sh](https://picsart.io/files/api-samples-curl-MasksPreview.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\EffectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->masksPreviewsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EffectsApi->masksPreviewsPost: ', $e->getMessage(), PHP_EOL;
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

