<?php if(!defined('KIRBY')) exit ?>

title: Value Prop
pages: false
files: false
preview: parent
visible: true
fields:
  instructions:
    label: Instructions
    type: info
    text: >
      #### Visibility

      Please ensure that the page is 'visible'. You can do this by clicking the option in the sidebar. If the page is set to 'invisible', the value prop will not be displayed. On account of it being invisible.

      #### Icons

      Available icons can be found on (link:ionicons.com text: Ionicons). Simply click the icon you which to use, and get the name minus the ```'ion-'``` prefix. e.g., the very first icon on (link:ionicons.com text: Ionicons) would be 'ionic'.
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
