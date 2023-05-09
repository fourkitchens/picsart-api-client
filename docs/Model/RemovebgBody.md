# RemovebgBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**output_type** | **string** | Select one of the two output options. If you submit a photo of a person, **cutout** returns the person as a sticker while **mask** returns a mask photo of the person. | [optional] [default to 'cutout']
**bg_image** | **string** | Source image file (binary). (If this parameter is present, the other image source parameters must be empty.) This only has an effect when output&#x3D;cutout. | [optional] 
**bg_image_url** | **string** | Source image URL. (If this parameter is present, the other image source parameters must be empty.) If this has a value, the output value is dismissed. | [optional] 
**bg_image_id** | **string** | Source image ID of an image previously uploaded to Picsart or result image ID from a different API. (If this parameter is present, the other image source parameters must be empty.) See /upload method. If this has a value, the output value is dismissed. | [optional] 
**bg_color** | **string** | Can be a hexcolor code (e.g., #82d5fa, #fff) or a color name (e.g., blue). For semi-transparency, 4-/8-digit hexcodes are also supported (e.g., #18d4ff87). (If this parameter is present, the other bg_ parameters must be empty). | [optional] 
**bg_blur** | **int** | Enter an integer value from 0 to +100. | [optional] [default to 0]
**bg_width** | **int** | Size, in pixels, for the width. If left blank, the background is left at its original width. | [optional] 
**bg_height** | **int** | Size, in pixels, for the height. If left blank, the background is left at its original height. | [optional] 
**scale** | **string** | Fit is where the longer side (width/height) fits the background. Fill is where the shorter side fits the background. Fit is the default. | [optional] [default to 'fit']
**format** | **string** | Optionally select one of the image formats (PNG is chosen if left blank). Options are as follows:   * JPG   * PNG   * WEBP | [optional] [default to 'PNG']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

