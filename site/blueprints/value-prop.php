<?php if(!defined('KIRBY')) exit ?>

title: Value Prop
pages: false
files:
  type: image
preview: false
visible: true
fields:
  instructions:
    label: Instructions
    type: info
    text: >
      #### Visibility

      Please ensure that the page is 'visible'. You can do this by clicking the option in the sidebar. If the page is set to 'invisible', the value prop will not be displayed. On account of it being invisible.

      #### Images

      Please upload a related image for use as the background. The bigger, the better. If you don't have a high resolution image, I suggest using (link: //finda.photo text: FindA.Photo) to find a high-quality (and royalty-free!) stock image.


      Please only upload one image. Once in use, it will be renamed to '_background' and resized for responsive purposes. If you wish to replace the image, simply remove the file named '_background' and replace it with one named literally anything else. Please note that any image not named '_background' will be deleted if '_background' already exists.

      #### Icons

      Available icons can be found on (link: //ionicons.com text: Ionicons). Simply click the icon you which to use, and get the name minus the ```'ion-'``` prefix. e.g., the very first icon on (link: //ionicons.com text: Ionicons) would be 'ionic'.
  title:
    label: Title
    type: text
    required: true
    width: 1/2
  icon:
    label: Icon
    type: text
    required: true
    width: 1/2
  text:
    label: Text
    type: textarea
    required: true
    size: large
