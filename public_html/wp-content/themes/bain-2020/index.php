<?php get_header(); ?>
<?php 
   echo '<!-- START HOOK: baindesign324_main_before -->';
   do_action('baindesign324_main_before');
   echo '<!-- END HOOK: baindesign324_main_before -->'; 
?>
<main id="main">
   <?php
      echo '<!-- START HOOK: baindesign324_primary_before -->'; 
      do_action('baindesign324_primary_before');
      echo '<!-- END HOOK: baindesign324_primary_before -->';  
   ?>
   <div id="primary">
      <?php if (have_posts()) : ?>
         <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content'); ?>
         <?php endwhile; ?>
      <?php else : ?>
         <?php get_template_part('content', 'no-content'); ?>
      <?php endif; ?>
   </div>
   <?php
      echo '<!-- START HOOK: baindesign324_primary_after -->';
      do_action('baindesign324_primary_after');
      echo '<!-- END HOOK: baindesign324_primary_after -->';
   ?>
</main>
<?php 
   echo '<!-- START HOOK: baindesign324_main_after -->';
   do_action('baindesign324_main_after');
   echo '<!-- END HOOK: baindesign324_main_after -->'; 
?>
<?php get_footer(); ?>