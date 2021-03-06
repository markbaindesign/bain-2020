<?php do_action('baindesign324_article_before'); ?>
<?php do_action('baindesign324_content_before'); ?>
<?php // Posts/page flex content
if (have_rows('posts_page_flexible_content_sections')) :
   while (have_rows('posts_page_flexible_content_sections')) : the_row();

      if (bd324_flex_content_text_block()) :
         $larger = get_sub_field('text_size');
         $columns = get_sub_field('columns');
         $aside =     get_sub_field('aside');
         $aside_content =       $aside['aside_content'];
         $aside_position =        $aside['aside_position'];

         // Classes
         $classes = array(
            'section--text-block',
            'section--flex'
         );
         if ( $larger ){
            $classes[] = 'section--text-block--larger';
         }
         if ( $columns == 2 || $columns == 3){
            $classes[] = 'section--text-block--columns';
            $classes[] = 'section--text-block--columns--' . $columns;
         }
         if ( $aside ){
            $classes[] = 'section--text-block--aside';
         }
         if ( $aside_content == 'image' ){
            $classes[] = 'section--text-block--aside--image';
         } else {
            $classes[] = 'section--text-block--aside--text';
         }
         if ( $aside_position == 'left' ){
            $classes[] = 'section--text-block--aside--left';
         } else {
            $classes[] = 'section--text-block--aside--right';
         }
         
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_text_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_image_gallery()) :
         $classes = array('section--gallery', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_image_gallery();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_blockquote()) :
         $classes = array('section--blockquote', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_blockquote();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_single_testimonial()) :
         $classes = array('section--testimonial', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_single_testimonial();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_group_testimonial()) :
         $classes = array('section--testimonials', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_group_testimonial();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      /* elseif (baindesign324_display_twitter_feed()) :
         $classes = array('section--twitter', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_display_twitter_feed('front');
         baindesign324_generic_wrapper(NULL, NULL, 'close');*/

      elseif (get_row_layout() == 'latest_posts_layout') :
         // Vars
         $number_of_posts =   get_sub_field('number_of_posts');
         $post_type =         get_sub_field('post_type');
         $header =            get_sub_field('section_header');
         $subheader =         get_sub_field('section_sub-header');

         bd324_show_latest_posts_section($post_type, $number_of_posts, $header, $subheader);

      elseif (get_row_layout() == 'mailchimp_signup_form_layout') :
         $classes = array(
            'section--flex',
            'section--mailchimp'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_mailchimp_form();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_media_block()) :
         // Check orientation
         $orientation = bd324_flex_content_check_media_block_orientation();

         // Set classes
         $classes = array(
            'section--media-block',
            'section--flex',
            'section--media-block--image-' . $orientation
         );

         // Output
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_media_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');
?>

      <?php endif; ?>
   <?php endwhile; ?>
<?php else :
   $classes = array(
      'section--text-block',
      'section--not-flex'
   );
   baindesign324_generic_wrapper(NULL, $classes, NULL); ?>
   <div class="text-block">
      <?php the_content(); ?>
   </div>
<?php baindesign324_generic_wrapper(NULL, NULL, 'close');
endif;
do_action('baindesign324_content_after');
