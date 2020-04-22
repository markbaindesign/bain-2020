<?php

/**
 * Some buttons
 *
 */
function mbdmaster324_buttons_shortcode($atts)
{

  extract(shortcode_atts(array(
    'label'     => 'Read More',
    'link'      => '',
    'title'     => 'Read More',

    /**
     * Size
     * ====
     * Options:
     * "button--pico"
     * "button--nano"
     * "button--micro"
     * "button--kilo"
     * "button--mega"
     * "button--giga"
     * "button--peta"
     * 
     */
    'size'      => 'button--default',

    /**
     * Style
     * =====
     * Options: 
     * "button--secondary"
     * "button--ghost"
     */
    'style'     => 'button--primary',

  ), $atts));

  // Classes
  $classes          = array('button');
  $classes[]        = $size;
  $classes[]        = $style;
  $button_classes   = trim( implode(" ",$classes));

  ob_start();
    $output  = '<a href="';
    $output .= $link;
    $output .= '" title="';
    $output .= $title;
    $output .= '" class="' . $button_classes . '">';
    $output .= $label;
    $output .= '</a>';

    return $output;

    $content =  ob_get_contents();
  ob_clean();

  return $content;
}

add_shortcode('button', 'mbdmaster324_buttons_shortcode');
