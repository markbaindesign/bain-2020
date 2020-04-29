<?php

/**
 * Overrule existing theme functions here. 
 * 
 * Example: 
 * 
 *  add_action( 'baindesign324_pre_header', 'my_custom_preheader', 50 );
 * 
 * function my_custom_preheader() {
 *	    echo 'My custom preheader!';
 * }
 * 
 */

 /**
 * Related Posts Section Header
 */

function bd324_related_posts_section_header()
{
   $header = 'Similar, but also very different';
   return $header;
}


/**
 * Bain 2020 Article Header
 */
function bd324_show_article_header()
{
   echo '<header class="post__header">';
   echo baindesign324_post_title();
   echo baindesign324_post_author();
   echo bd324_get_post_date();
   echo bd324_get_project_client();
   echo bd324_get_project_date();
   echo bd324_custom_tax_terms( 'skill' );
   echo '</header>';
}
