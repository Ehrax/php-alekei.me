<?php

/*
Widget Name: Alekeis Section Contact
Description: add a nice contact fom with a section :)
Author: Alexander Rasputin
Author URI: https://alekei.me
Widget URI: https://alekei.me
*/

class Alekeis_Section_Contact extends SiteOrigin_Widget {
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'alekeis_section_contact',

      // The name of the widget for display purposes.
      'Alekeis Section Contact',

      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
          'description' => 'a cool contact section :)',
      ),

      //The $control_options array, which is passed through to WP_Widget
      array(),

      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array( ),

      //The $base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }

  
  function get_template_name($instance) {
    return 'template';
  }

  function get_template_dir($instance) {
      return 'templates';
  }

}

siteorigin_widget_register('alekeis_section_contact', __FILE__, 'Alekeis_Section_contact');
