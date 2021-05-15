<?php // Agrega el botón de whatsapp [boton-cotizar number="+573000000000"]

function shortcode_cotizar($atts, $content = null){ 	
	$a = shortcode_atts( array(
        'number' => ''
    ), $atts );
	
	global $product; // Api para mobile ?>
    <div class="shortcode_cotizar-whatsapp">
        <?php if ( wp_is_mobile() ) { ?>            
            <a href="https://api.whatsapp.com/send?phone='<?php echo esc_attr($a['number']) ?>'&text=Hola%21%21%21%20Estoy%20interesado%20en%20el%20producto:%20*<?php echo $product->get_name(); ?>*" target="_blank">
               <i aria-hidden="true" class="fab fa-whatsapp"></i><span class="label">Contact us</span>        
            </a>
        <?php // Api para desktop
        } else { ?>
            <a href="https://web.whatsapp.com/send?phone='<?php echo esc_attr($a['number']) ?>'&text=Hola%21%21%21%20Estoy%20interesado%20en%20el%20producto:%20*<?php echo $product->get_name(); ?>*" target="_blank">
                 <i aria-hidden="true" class="fab fa-whatsapp"></i><span class="label">Contact us</span>           
            </a>
        <?php
        }
        ?>
    </div>
    <?php
}
add_shortcode( 'boton-cotizar', 'shortcode_cotizar' ); 