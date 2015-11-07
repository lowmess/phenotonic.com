<?php if(!defined('KIRBY')) exit ?>

title: Product
pages: false
files:
  type: image
fields:
  title:
    label: Name
    type:  text
    required: true
  price:
    label: Price
    type: number
    placeholder: 24.99
    required: true
    width: 1/2
  weight:
    label: Weight
    type: number
    placeholder: 4.0
    required: true
    width: 1/2
  text:
    label: Description
    type:  textarea
    required: true
    width: 1/2
  desc:
    label: Short Description
    type: text
    width: 1/2
  categories:
    label: Categories
    type: tags
