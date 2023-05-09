# StyleTransferParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**level** | **string** | Select a level from the dropdown menu. Smaller numbers preserve more from the original image, bigger numbers make the original image look closer to the reference image. The level options are as follows.   * l1   * l2   * l3   * l4   * l5 | [optional] [default to 'l1']
**format** | **string** | Optionally select one of the image formats (JPG is chosen if left blank). Options are as follows:   * JPG   * PNG   * WEBP | [optional] [default to 'JPG']
**reference_image** | **string** | Source image file (binary). (If this parameter is present, the other image source parameters must be empty.) | [optional] 
**reference_image_id** | **string** | Enter the Picsart image ID if you previously uploaded the image. | [optional] 
**reference_image_url** | **string** | Source image URL. (If this parameter is present, the other image source parameters must be empty.) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

