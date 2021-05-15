<?php  

if(! defined('ABSPATH')) exit;

// [thumb-package]
function shortcode_thumb_single_package() {  

    global $product;

    ob_start();	?>

    <div class="ASTR_packages">
        <div class="ASTR_packages-price_table">                    
            <div class="ASTR_packages-wrap">
                <div class="ASTR_packages-icon"><img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" /></div>
                <h3 class="ASTR_packages-name"><?php the_title(); ?> <br><span class="ASTR_packages-name--line"> <?php the_field('line'); ?> </span></h3>
            </div> 
            <img class="ASTR_packages-curve" src=" <?php echo get_stylesheet_directory_uri() . '/assets/img/thumb-single-package.png'; ?>">
        </div>
    </div> 
        
    <?php $output_string = ob_get_contents();  ob_end_clean(); return $output_string; 
} 
add_shortcode( 'thumb-package', 'shortcode_thumb_single_package' ); 