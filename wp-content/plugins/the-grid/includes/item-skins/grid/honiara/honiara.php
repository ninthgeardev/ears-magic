<?php
/**
 * @package   The_Grid
 * @author    Themeone <themeone.master@gmail.com>
 * @copyright 2015 Themeone
 *
 * Skin: Honiara
 *
 */

// Exit if accessed directly
if (!defined('ABSPATH')) { 
	exit;
}

$tg_el = The_Grid_Elements();

$format    = $tg_el->get_item_format();
$permalink = $tg_el->get_the_permalink();
$target    = $tg_el->get_the_permalink_target();

$terms_args = array(
	'color' => 'color',
	'separator' => ', '
);

$output  = $tg_el->get_content_wrapper_start();
	$output .= $tg_el->get_center_wrapper_start();	
		$output .= $tg_el->get_the_title();
		$output .= $tg_el->get_the_terms($terms_args);
	$output .= $tg_el->get_center_wrapper_end();
$output .= $tg_el->get_content_wrapper_end();
$output .= $tg_el->get_media_wrapper_start();
	$output .= $tg_el->get_media();
	$output .= ($permalink && !in_array($format, array('audio', 'video'))) ? '<a class="tg-item-link" href="'.$permalink .'" target="'.$target.'"></a>' : null;
	$output .= ($format != 'standard') ? '<div class="tg-button-holder">' : null;
		$output .= ($format != 'standard') ? $tg_el->get_overlay() : null;	
		$output .= ($format != 'standard') ? $tg_el->get_media_button() : null;
	$output .= ($format != 'standard') ? '</div>' : null;
$output .= $tg_el->get_media_wrapper_end();
		
return $output;