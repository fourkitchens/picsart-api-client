# EditParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | Optionally select one of the image formats (JPG is chosen if left blank). Options are as follows:   * JPG   * PNG   * WEBP | [optional] [default to 'JPG']
**mode** | **string** | For *crop* mode, the outcome image will be center-cropped with the given size (width, height). For the *resize* mode, the smallest size will be fitted to preserve the original proportion of the image. When the outcome size is not provided with width and height, no cropping or resizing will be applied (see alternative options such as rotate, flip and perspective). | [optional] 
**size** | **int** | When defined, this parameter overrides and applies the value for both width and height. | [optional] 
**width** | **int** | Width of outcome image. If the provided width is larger than the original width of the file, the original size of the image will be selected. When crop size is defined, but the x,y starting position is not provided, the crop will be a center-crop (i.e., equally cutting from each side). | [optional] 
**height** | **int** | Height of outcome image. If the provided height is larger than the original width of the file, the original size of the image will be selected. When crop size is defined, but the x,y starting position is not provided, the crop will be a center-crop (i.e, equally cutting from each side). | [optional] 
**flip** | **string** | Choose a way to flip the image. | [optional] 
**rotate** | **float** | Enter a float value to rotate the image from -180 to +180. Default is 0. | [optional] [default to 0]
**perspective_horizontal** | **int** | The horizontal perspective after edits. | [optional] [default to 0]
**perspective_vertical** | **int** | The vertical perspective after edits. | [optional] [default to 0]
**quality** | **int** | This refers to the level of accuracy of the image processing. The greater the quality (i.e., the larger the number), the larger the image file size. The default value is 90, which is a good compromise between quality and file size. | [optional] [default to 90]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

