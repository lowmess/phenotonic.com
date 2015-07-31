<?php if(!defined('KIRBY')) exit ?>

title: Testimonial
pages: false
files:
  type: image
  max: 1
preview: false
fields:
  title:
    label: Title
    type: text
  instructions:
    label: Instructions
    type: info
    text: >
      #### Visibility

      Please ensure that the page is 'visible'. You can do this by clicking the option in the sidebar. If the page is set to 'invisible', the value prop will not be displayed. On account of it being invisible.

      #### Avatars

      This page can handle 1 (one) image upload. If an image is provided, it will be used as the avatar for the testimonial. No image means no avatar.
  text:
    label: Text
    type: textarea
    required: true
    size: large
  author:
    label: Author
    type: text
    required: true
    width: 1/2
    placeholder: Kareem Abdul-Jabbar
  bio:
    label: Bio
    type: text
    width: 1/2
    help: Any qualifications or associations, e.g.: Founder of BallSoHard
  handle:
    label: Twitter Handle
    type: text
    width: 1/2
    help: Omit the '@' symbol.
    placeholder: ballsohard
  website:
    label: Website
    type: text
    width: 1/2
    help: Do *not* include 'http://'.
    placeholder: ballsohard.com
