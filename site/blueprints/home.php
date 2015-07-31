<?php if(!defined('KIRBY')) exit ?>

title: Home
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
  howToVP:
    label: How to Create a Value Prop
    type: info
    text: >
      1. Make sure that 'Value Props' setting is turned on below.

      2. Create a new page (on the left).

      3. Choose to make a new 'Value Prop' page.

      4. Name the page "VP-[title]", where [title] is the name of the prop. [title] is only used for our reference, it is not visible to anyone externally.

      5. Fill out the fields on the 'Value Prop' subpage.
    width: 1/2
  howToT:
    label: How to Create a Testimonial
    type: info
    text: >
      1. Make sure that 'Testimonials' setting is turned on below.

      2. Create a new page (on the left).

      3. Choose to make a new 'Testimonial' page.

      4. Name the page "T-[person]", where [person] is the name of the person who wrote the testimonial. [person] is only used for our reference, it is not visible to anyone externally.

      5. Fill out the fields on the 'Testimonial' subpage.
    width: 1/2
  valueProps:
    label: Value Props
    type: toggle
    text: on/off
    width: 1/2
  testimonials:
    label: Testimonials
    type: toggle
    text: on/off
    width: 1/2
pages:
  max: 2
  limit: 2
files:
  hide: true
deletable: false
