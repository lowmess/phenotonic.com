<?php if(!defined('KIRBY')) exit ?>

title: Home
pages:
  max: 2
  limit: 2
  template:
    - testimonials
    - value-props
files:
  hide: true
deletable: false
fields:
  title:
    label: Title
    type: text
  landing:
    label: Landing
    type: headline
    help: This section represents the landing of phenotonic.com - the very first thing you see when the site is loaded.
  tagline:
    label: Tagline
    type: text
    default: We want to help you grow your best garden.
    required: true
  copy:
    label: Landing Copy
    type: textarea
    size: large
  landingButton:
    label: Landing Button
    type: text
    default: Let&rsquo;s Grow
    required: true
  contact:
    label: Contact
    type: headline
    help: This section represents the contact area of the phenotonic.com homepage.
  contactHeadline:
    label: Contact Headline
    type: text
    default: Schedule an appointment now
    reqired: true
  contactText:
    label: Contact Text
    type: textarea
  contactButton:
    label: Contact Button
    type: text
    default: Get in Touch
    required: true
  pageSettings:
    type: headline
    label: Page Settings
  valueProps:
    label: Value Props
    type: toggle
    text: on/off
    width: 1/2
  howToVP:
    label: How to Create a Value Prop
    type: info
    text: >
      1. Make sure that 'Value Props' setting is turned on.

      2. Click on 'value-props' under 'pages' in the sidebar.

      3. Follow the unstructions in the value-props panel.
    width: 1/2
  testimonials:
    label: Testimonials
    type: toggle
    text: on/off
    width: 1/2
  howToT:
    label: How to Create a Testimonial
    type: info
    text: >
      1. Make sure that 'Testimonials' setting is turned on.

      2. Click on 'testimonials' under 'pages' in the sidebar.

      3. Follow the unstructions in the testimonials panel.
    width: 1/2
