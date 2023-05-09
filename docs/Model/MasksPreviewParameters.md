# MasksPreviewParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | Optionally select one of the image formats (JPG is chosen if left blank). Options are as follows:   * JPG   * PNG   * WEBP | [optional] [default to 'JPG']
**blend** | **string** | Select one of the appearance types from the dropdown list (it will be _screen_ if left blank). The options are as follows.   * normal   * screen   * overlay   * multiply   * darken   * lighten   * add | [optional] [default to 'screen']
**mask** | **string[]** | Select up to 10 mask types from the list by holding down Ctrl. The options are as follows   * lace1   * lace4   * shdw2   * shdw17   * fold5   * fold9   * rpl3   * rpl5   * prsm3   * prsm9   * prsm10 | 
**opacity** | **int** | Enter an integer value from 0 to +100. The larger the number, the greater the opacity. | [optional] [default to 100]
**hue** | **int** | Enter an integer value from -180 to +180. | [optional] [default to 0]
**mask_flip** | **string** | Choose a mask flip option. The choices are as follows.   * left   * right   * mirror horizontal   * mirror vertical   * turnaround | [optional] 
**preview_size** | **int** | Enter the max size for the width or height of the preview image. The max value is 240px. If left blank it&#x27;s 120px. | [optional] [default to 120]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

