<?php 

function add_to_tour() { 
	ob_start();

	$args = array(
		'post_type' => 'product',
		'post_status'    => 'publish',
		'order' => 'DESC',
		'tax_query'      => array( array(
			'taxonomy'   => 'product_cat',
			'field'      => 'slug',
			'terms'      => 'additional',
		) )
	);

	$loop = new WP_Query( $args ); ?>

		<?php if ( $loop->have_posts() ) : ?>
		
			<ul class="ASTR_add_tour">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
                    <div class="ASTR_add_tour-prod">
                        <img class="ASTR_add_tour-prod_thumbnail" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">	
                        <h2 class="ASTR_add_tour-prod_title"><?php the_title(); ?> </h2>
                        <p class="ASTR_add_tour-prod_price"><?php echo wc_get_product($loop->post->ID)->get_price_html(); ?></p>
                        <a class="add_to_cart_button ajax_add_to_cart" rel="nofollow" href="/?add-to-cart=<?php echo the_id(); ?>" data-quantity="1" data-product_id="<?php echo the_id(); ?>">Add</a>
                    </div>
				<?php endwhile;  ?>
            </ul>
            
		<?php
		
		endif; wp_reset_query();
	
		$output = ob_get_clean(); return $output; 
}
add_shortcode( 'add-to-tour', 'add_to_tour' );     


