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

function bd324_typekit() { ?>
   <script>
     (function(d) {
       var config = {
         kitId: 'gvm1jly',
         scriptTimeout: 3000,
         async: true
       },
       h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
     })(document);
   </script>
<?php }

 /**
 * Custom cookie popup config
 */
function b324_enqueue_cookie_notice_config()
  {
    if (!is_admin()) {
      wp_enqueue_script('bd324_cookie_notice_config', get_template_directory_uri() . '/assets/js/custom/cookie-notice-config.js', array('b324_cookie_notice'), null, TRUE);
    }
  }
/**
 * Custom mmenu JS config
 */
function baindesign324_enqueue_mmenu_config()
{
   if (!is_admin()) {
      wp_enqueue_script('baindesign324_mmenu_config', get_template_directory_uri() . '/assets/js/custom/mmenu-config-custom.js', array(), null, TRUE);
   }
}

/**
 * Related Posts Section Header
 */

function bd324_get_related_posts_section_header()
{
   $header = 'Similar, but also very different';
   return $header;
}


/**
 * Bain 2020 Article Header
 */
function bd324_show_article_header()
{
   if (is_single() || is_page()) {
      echo '<header class="post__header">';
      echo baindesign324_post_title();
      echo baindesign324_post_author();
      echo bd324_get_post_date();
      echo bd324_get_project_client();
      echo bd324_get_project_date();
      echo bd324_custom_tax_terms('skill');
      echo '</header>';
   }
}
