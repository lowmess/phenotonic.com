<?php if(!defined('KIRBY')) exit ?>

title: Testimonials
pages:
  template: testimonial
  max: 7
files: false
preview: parent
deletable: false
fields:
  title:
    label: Title
    type: text
  instructions:
    title: Instructions
    type: info
    text: >
      #### How to Create a Testimonial

      1. Add a page by clicking on the 'Add' button of the 'Pages' section in the sidebar.

      2. Name the page after the author of the testimonial. Choose the 'testimonial' template (it should be the only one available).

      3. Click on the name of the page you just created in the 'Pages' section in the sidebar.

      4. Follow the instructions on that page.

      5. If you can't add any more testimonials, it's likely you've added the maximum 7 allowed.


      #### How to Re-order Testimonials

      Testimonials are shown one at a time on the home page. To change the order in which they are shown, simply rearrange them in the 'Pages' section of the sidebar.

      #### Important!

      This page *must* be set to visible for the testimonials page to work.
