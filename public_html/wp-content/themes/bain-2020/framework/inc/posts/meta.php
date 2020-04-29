<?php 

/**
 * Post Meta Functions
 */

 /**
  * Get the project client
  */
if ( ! function_exists( 'bd324_get_project_client' ) ) :
   function bd324_get_project_client($post_id = NULL)
   {
      $client = get_field('project_client', $post_id);
      if ($client){
         $content = '<div class="project__meta project__meta--client">';
         $content .= '<span class="project__meta__label project__meta--client__label">Client</span>';
         $content .= '<span class="project__meta__divider project__meta--client__divider">: </span>';
         $content .= '<span class="project__meta__content project__meta--client__content">'.$client.'</span>';
         $content .= '</div>';
         return $content;
      }
   }
endif;

 /**
  * Get the project date
  */
  if ( ! function_exists( 'bd324_get_project_date' ) ) :
   function bd324_get_project_date($post_id = NULL)
   {
      $date = get_field('project_date', $post_id);

      if ($date){
         $content = '<div class="project__meta project__meta--date">';
         $content .= '<span class="project__meta__label project__meta--date__label">Completed</span>';
         $content .= '<span class="project__meta__divider project__meta--date__divider">: </span>';
         $content .= '<span class="project__meta__content project__meta--date__content">'.$date.'</span>';
         $content .= '</div>';
         return $content;
      }
   }
endif;
