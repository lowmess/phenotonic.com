<?php

  $form = uniform(
      'contact-form',
      array(
          'required' => array(
              'name'  => '',
              '_from' => 'email'
          ),
          'actions' => array(
              array(
                  '_action' => 'email',
                  'to'      => 'hi@phenotonic.com',
                  'sender'  => 'info@phenotonic.com'
              )
          )
      )
  );

?>
