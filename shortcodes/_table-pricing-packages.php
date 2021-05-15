<?php  

if(! defined('ABSPATH')) exit;

// [table-packages category="packages"]
function shortcode_table_packages($atts){   

    ob_start();	

    $args = array(
        'post_type' => 'product',
        'post_status' => 'published',
        'posts_per_page' => -1	
    );

	if( isset( $atts['category'] ) && !empty( $atts['category'] ) ) {
	    $args['tax_query'] = array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
                'terms' => $atts['category'],
                'operator' => 'IN'
			)
		);
	}
 
    $packages = new WP_Query($args); ?> 

    <div class="ASTR_packages"> 
    
        <?php if($packages->have_posts()) :
            while($packages->have_posts()) : $packages->the_post(); ?>
                    
                <div class="ASTR_packages-price_table ASTR_packages-price_table--<?php the_title(); ?>">                    
                    <div class="ASTR_packages-wrap">
                        <div class="ASTR_packages-icon"> <img src="<?php echo get_the_post_thumbnail_url($packages->post->ID); ?>"> </div>
                        <h3 class="ASTR_packages-name"><?php the_title(); ?> <br><span class="ASTR_packages-name--line"> <?php the_field('line'); ?> </span></h3>
                    </div> 
                    <img class="ASTR_packages-curve" src=" <?php echo get_stylesheet_directory_uri() . '/assets/img/curve.png'; ?>">
                    <div class="ASTR_packages-wrap ASTR_packages-wrap--info">
                        <div class="ASTR_packages-cost">
                            <div class="ASTR_packages-price"> <?php echo wc_get_product($packages->post->ID)->get_price_html(); ?> </div>
                            <div class="ASTR_packages-rate"> <?php the_field('rate'); ?> </div>
                        </div>
                        <div class="ASTR_packages-aditional_info">
                            <div class="ASTR_packages-aditional_info--row">
                                <img class="ASTR_packages-aditional_info--ico" src=" <?php echo get_stylesheet_directory_uri() . '/assets/img/hours.png'; ?>">
                                <span class="ASTR_packages-aditional_info--value"> <?php the_field('time'); ?> </span>
                            </div>
                            <div class="ASTR_packages-aditional_info--row">
                                <img class="ASTR_packages-aditional_info--ico" src=" <?php echo get_stylesheet_directory_uri() . '/assets/img/guest.png'; ?>">
                                <span class="ASTR_packages-aditional_info--value"> <?php the_field('guests'); ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;

        wp_reset_postdata();
        
        else: 
            echo '<p class="ASTR_packages-not_found"> Sorry, no packages available </p>';
        endif;  ?>

    </div> 
        
    <?php $output_string = ob_get_contents();  ob_end_clean(); return $output_string; 
} 
add_shortcode( 'table-packages', 'shortcode_table_packages' ); 