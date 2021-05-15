<?php

// Disable Gutemberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable scripts emoji
require_once(dirname(__FILE__).'/functions/disable_scripts_emoji.php');

// Style - Scripts 
require_once(dirname(__FILE__).'/functions/wp_enqueue_scripts.php');

// Change text add to cart button in archive products
function woo_archive_custom_cart_button( $button, $product  ) {
	$button_text = __("See more", "woocommerce");
    $button = '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
    return $button;
}
add_filter( 'woocommerce_loop_add_to_cart_link', 'woo_archive_custom_cart_button', 10, 2 );


// Table packages
require_once(dirname(__FILE__).'/shortcodes/_table-pricing-packages.php');

// Remove sorting wrapper shop page
remove_action( 'woocommerce_before_shop_loop','storefront_sorting_wrapper',31 );

// Add short description in loop products
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
  	if (count($excerpt)>=$limit) {
 		array_pop($excerpt);
 		 $excerpt = implode(" ",$excerpt).'...';
  	} else {
  		$excerpt = implode(" ",$excerpt);
  	}
  	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  	return $excerpt;
}

function short_description_info_after_title(){
    echo '<div class="short-description">' . excerpt('8') . '</div>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'short_description_info_after_title', 2 );


// Btn cotizar whtsapp
require_once(dirname(__FILE__).'/shortcodes/_cotizar_whatsapp.php');

// Head table packages
require_once(dirname(__FILE__).'/shortcodes/_head-table-packages.php');

// Prod aditionals tour
require_once(dirname(__FILE__).'/shortcodes/_aditionals_tour.php');

// Thumb single package
require_once(dirname(__FILE__).'/shortcodes/_thumb_single-package.php');

