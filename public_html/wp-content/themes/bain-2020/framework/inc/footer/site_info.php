<?php

if (!function_exists('baindesign324_site_info_copyright')) :
   function baindesign324_site_info_copyright()
   { 
      // Check for a custom copyright notice
      // via Theme Settings
      $cta = get_field( 'copyright_notice', 'option' );

      $content = '<div class="copyright site-info site-info__copyright">';
      if ( $cta ) {
         $content .= $cta;
      } else {
         $content .= do_action('bd324_copyright_symbol');
         $content .= '<span class="copyright__symbol">&copy;</span>';
         $content .= '<span>' . date("Y") . '</span>';
         $content .= '<span class="copyright__sitename">';
         $content .= ' ';
         $content .= get_bloginfo('name');
         $content .= '</span>';
      }
      $content .= '</div>';
      echo $content;
   }
endif;

if (!function_exists('baindesign324_site_info_design_credit')) :
   function baindesign324_site_info_design_credit()
   { ?>
      <div class="site-info site-info__design-credit">
         <?php /* translators: Design Credit, linking to bain.design */ _e('Site made by', '_baindesign'); ?> <a href="//bain.design" title="<?php _e('Go to bain.design', '_baindesign'); ?>"><?php _e('bain.design', '_baindesign'); ?></a>
      </div>
<?php }
endif;
