<?php

/**
 * Archive title
 * =============
 *
 * Custom archive titles can be set via the Options page
 *
 */

if ( ! function_exists( 'baindesign324_title_archive' ) ) :
   function baindesign324_title_archive($post_type) {
      $labels = baindesign324_get_post_labels( $post_type );
      // var_dump($labels);
      $cf = $post_type . '_archive_title';
      $archive_title = get_field( $cf, 'option' );

   if ( $archive_title ) {
      $title = $archive_title;
   } else {
      $title = '<h1 class="posts__title page__title archive__title">' . $labels->name . '</h1>';
   }
   return $title;
}
endif;