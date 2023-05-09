# Swagger\Client\UploadApi

All URIs are relative to *https://api.picsart.io/tools/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadPost**](UploadApi.md#uploadpost) | **POST** /upload | 

# **uploadPost**
> \Swagger\Client\Model\InlineResponse200 uploadPost($image, $image_url)



**Service Description**   The *upload* service is used to upload an image when you want to apply several transformations to it.   By uploading an image first, you'll receive a transaction_id which you can use repeatedly for transformations and thereby avoid having to upload an image for each and every one.   If you're sure you only want to do a single transformation to an image, there's no benefit to using this service. Just jump right to that service.   **Limitations:** Supported source image formats are JPG, PNG, TIFF and WEBP.     **Source Image:**    You can source the image by providing a file or a URL to an online image.   **Authorization:**      Requires an API key to be provided in the **X-Picsart-API-Key** request header.   **cURL:**     Use this file [Upload.sh](https://picsart.io/files/api-samples-curl-Upload.sh) for cURL samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Picsart-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Picsart-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "image_example"; // string | 
$image_url = "image_url_example"; // string | 

try {
    $result = $apiInstance->uploadPost($image, $image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **string****string**|  | [optional]
 **image_url** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

