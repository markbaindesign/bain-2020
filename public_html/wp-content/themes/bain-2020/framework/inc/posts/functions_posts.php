<?php

require get_template_directory() . '/framework/inc/posts/archive-intro.php';
require get_template_directory() . '/framework/inc/posts/content/content.php';
require get_template_directory() . '/framework/inc/posts/custom-post-date.php';
require get_template_directory() . '/framework/inc/posts/post-featured-image.php';
require get_template_directory() . '/framework/inc/posts/posts-archive-nav.php';
require get_template_directory() . '/framework/inc/posts/posts-archive-title.php';
require get_template_directory() . '/framework/inc/posts/posts-article-header.php';
require get_template_directory() . '/framework/inc/posts/posts-comments-form.php';
require get_template_directory() . '/framework/inc/posts/posts-comments-list.php';
require get_template_directory() . '/framework/inc/posts/posts-comments.php';
require get_template_directory() . '/framework/inc/posts/posts-content-flexible.php';
require get_template_directory() . '/framework/inc/posts/posts-content-none.php';
require get_template_directory() . '/framework/inc/posts/posts-content.php';
require get_template_directory() . '/framework/inc/posts/posts-cover.php';
require get_template_directory() . '/framework/inc/posts/posts-custom-date.php';
require get_template_directory() . '/framework/inc/posts/posts-external-links.php';
require get_template_directory() . '/framework/inc/posts/posts-featured-post.php';
require get_template_directory() . '/framework/inc/posts/posts-intro.php';
require get_template_directory() . '/framework/inc/posts/posts-related.php';
require get_template_directory() . '/framework/inc/posts/posts-remove-more-link.php';
require get_template_directory() . '/framework/inc/posts/posts-subheader.php';
require get_template_directory() . '/framework/inc/posts/posts-testimonials-meta.php';
require get_template_directory() . '/framework/inc/posts/posts-title.php';
require get_template_directory() . '/framework/inc/posts/search-functions.php';
require get_template_directory() . '/framework/inc/posts/loops/loops.php';
require get_template_directory() . '/framework/inc/posts/meta.php';
require get_template_directory() . '/framework/inc/posts/section-header.php';

// Helpers

if ( ! function_exists( 'baindesign324_get_post_labels' ) ) :
   function baindesign324_get_post_labels( $post_type ) {	
      global $wp_post_types;
      $labels = &$wp_post_types[$post_type]->labels;
      return $labels;
   }
endif;