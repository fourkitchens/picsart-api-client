# UpscaleUltraParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upscale_factor** | **int** | Upscale an image with a given upscale factor. The upscale factor increases the image’s resolution without increasing its size. Upscale factor can be between 2 - 16 (default is 2). | [optional] [default to UPSCALE_FACTOR.2]
**format** | **string** | Optionally select one of the image formats (JPG is default). Options are as follows:   * JPG   * PNG   * WEBP | [optional] [default to 'JPG']
**mode** | **string** | Use this query parameter to establish the processing mode. Acceptable values are sync, async and auto (sync is default):   * sync: issues a synchronous request, response is given when the result is ready.   * async: forces an asynchronous request, the response, which is instantaneous, contains a \&quot;transaction_id\&quot; which is used to poll for the result.   * auto: the processing mode decision is made by the service, which depends upon the expected processing time. | [optional] [default to 'sync']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

