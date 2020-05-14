<?php

/**
 * Project CPT
 */

use PostTypes\PostType;
use PostTypes\Taxonomy;

if (!function_exists('baindesign324_register_cpt_project')) :
   function baindesign324_register_cpt_project()
   {
      $names = [
         'name' => 'project',
         'singular' => __('Project'),
         'plural' => __('Projects'),
         'slug' => __('projects'),
      ];
      $options = [
         'supports'    => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
         ),
         'has_archive' => true,
         'hierarchical' => false,
         'capability_type' => 'page',
         'show_in_menu' => true,
      ];
      $content = new PostType($names, $options);
      // Attach the genre taxonomy (which is created below).
      $content->taxonomy( 'skill' );
      $content->icon("dashicons-clipboard");
      $content->columns()->hide(['date']);
      $content->register();

      // Create a genre taxonomy.
      $skills = new Taxonomy('skill');

      // Set options for the taxonomy.
      $skills->options([
         'hierarchical' => false,
      ]);

      // Register the taxonomy to WordPress.
      $skills->register();
   }
endif;
