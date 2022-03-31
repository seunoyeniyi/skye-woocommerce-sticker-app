<?php
/**
 * Plugin Name: Wicked Vinyl Sticker App
 * Plugin URI: https://github.com/seunoyeniyi/
 * Description: API to use for your APP development either Mobile, Desktop, or Web APP.
 * Version: 1.0
 * Author: Skye (Seun Oyeniyi)
 * Author URI: https://instagram.com/seun_oyeniyi
 */

 $skye_sticker_global_product_used = 491;

function get_sticker_board_width($val)
{
    return round($val * 25.23809523809523);

    if ($val == 1) {
        return 25;
    } elseif ($val == 2) {
        return 51;
    } elseif ($val == 3) {
        return 76;
    } elseif ($val == 4) {
        return 102;
    } elseif ($val == 5) {
        return 127;
    } elseif ($val == 8) {
        return 203;
    } else {
        return 51;
    }
}
function get_sticker_board_height($val)
{
    return get_sticker_board_width($val);
}

add_filter( 'show_admin_bar', function() {
    return (is_page("editor-square-sticker") || is_page("editor-circle-sticker") || is_page("editor-round-corners-sticker"));
});


add_filter( 'page_template', 'skye_sticker_page_template' );
function skye_sticker_page_template( $page_template )
{
    if ( is_page( 'customize-sticker' ) ) {
        $page_template = dirname( __FILE__ ) . '/design-select-page.php';
    } elseif (is_page( 'editor-square-sticker' )) {
        $page_template = dirname( __FILE__ ) . '/editor/edit/new/single/rect/index.php';
    } elseif (is_page( 'editor-circle-sticker' )) {
        $page_template = dirname( __FILE__ ) . '/editor/edit/new/single/circle/index.php';
    } elseif (is_page( 'editor-round-corners-sticker' )) {
        $page_template = dirname( __FILE__ ) . '/editor/edit/new/single/rounded/index.php';
    }
    return $page_template;
}


//JS ENQUENE
add_action( 'init', 'my_script_enqueuer' );

function my_script_enqueuer() {
   wp_register_script( "sk_sticker_script", WP_PLUGIN_URL.'/skye-sticker-app/ajax-upload.js', array('jquery') );
   wp_localize_script( 'sk_sticker_script', 'skAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'sk_sticker_script' );

}

//AJAX CART
add_action("wp_ajax_sk_sticker_save", "sk_sticker_save");
add_action("wp_ajax_nopriv_sk_sticker_save", "sk_sticker_save");

function sk_sticker_save() {
    include(plugin_dir_path( __FILE__ ) . 'content-upload.php');
}

//ADD TO CART
function sk_sticker_add_engraving_text_to_cart_item( $cart_item_data, $product_id, $variation_id ) {
    if (!isset($_POST['content'])) return $cart_item_data;

	$content = $_POST['content'] ?? '';

	if ( empty( $content ) ) {
		return $cart_item_data;
	}
    

	$cart_item_data['content'] = $content;
	$cart_item_data['st_type'] = $_POST['type'] ?? 'rect';
	$cart_item_data['st_size'] = $_POST['size'] ?? '2x2';
	$cart_item_data['st_width'] = $_POST['width'] ?? 0;
	$cart_item_data['st_height'] = $_POST['height'] ?? 0;
	$cart_item_data['st_price'] = $_POST['price'] ?? 0;
	$cart_item_data['st_message'] = $_POST['message'] ?? 0;
	$cart_item_data['st_svg'] = $_POST['svg'] ?? '';
	$cart_item_data['cutting_line'] = $_POST['cutting_line'] ?? '';

	return $cart_item_data;
}

add_filter( 'woocommerce_add_cart_item_data', 'sk_sticker_add_engraving_text_to_cart_item', 10, 3 );

//DISPLAY DATA IN CART
function sk_sticker_display_engraving_text_cart( $item_data, $cart_item ) {
	if ( empty( $cart_item['content'] ) ) {
		return $item_data;
	}


    // $product_id = $cart_item['product_id'];
    // $qty = $cart_item['quantity'];
    // $cart_key = $cart_item['key'];
    // $cart_hash = $cart_item['data_hash'];
    // $shape = $cart_item['st_type'] ?? 'rect';
    // $size = $cart_item['st_size'] ?? '2x2';
    // $width = $cart_item['st_width'] ?? '2';
    // $height = $cart_item['st_height'] ?? '2';
    // $price = $cart_item['st_price'] ?? '0';
    $comment = $cart_item['st_message'] ?? '';
    // $comment = $cart_item['st_svg'] ?? '';
        
    // $url = "/";
    // if ($shape == "rect")
    //     $url .= "editor-square-sticker";
    // elseif ($shape == "circle")
    //     $url .= "editor-circle-sticker";
    // elseif ($shape == "rounded")
    //     $url .= "editor-round-corners-sticker";

    // $url .= "?store=setSess&shape=$shape&size=$size&quantity=$qty&price=$price&width=$width&height=$height&product_id=$product_id&cart_key=$cart_key&cart_id=$cart_hash&edit_type=show";


	// $item_data[] = array(
	// 	'key'     => __( 'Action', 'iconic' ),
	// 	'value'   => '',
	// 	'display' => '<a class="button btn btn-primary" href="' . $url . '">Edit</a>',
	// );

    if (!empty($comment)) {
        $item_data[] = array(
            'key'     => __( 'Message', 'iconic' ),
            'value'   => '',
            'display' => '<div style="clear: both;"><i>' . $comment . '</i></div>',
        );
    }

	return $item_data;
}

add_filter( 'woocommerce_get_item_data', 'sk_sticker_display_engraving_text_cart', 10, 2 );

//CART ITEM IMAGE
function custom_cart_item_product_image( $_product_img, $cart_item, $cart_item_key ) {
    
    if (!isset($cart_item['content'])) return $_product_img;

    $product_id = $cart_item['product_id'];
    $qty = $cart_item['quantity'];
    $cart_key = $cart_item['key'];
    $cart_hash = $cart_item['data_hash'];
    $shape = $cart_item['st_type'] ?? 'rect';
    $size = $cart_item['st_size'] ?? '2x2';
    $width = $cart_item['st_width'] ?? '2';
    $height = $cart_item['st_height'] ?? '2';
    $price = $cart_item['st_price'] ?? '0';
        
    $url = "/";
    if ($shape == "rect")
        $url .= "editor-square-sticker";
    elseif ($shape == "circle")
        $url .= "editor-circle-sticker";
    elseif ($shape == "rounded")
        $url .= "editor-round-corners-sticker";
    else
        $url .= "editor-square-sticker";


    $url .= "?store=setSess&shape=$shape&size=$size&quantity=$qty&price=$price&width=$width&height=$height&product_id=$product_id&cart_key=$cart_key&cart_id=$cart_hash&edit_type=edit";

    $url = "#!"; //remove later

    $a = '<div class="sheet-preview f-row" id="sheet-preview-' . (1 + 1) . '">';
    $a .= "<a href='" . $url . "'>";
    $a .=  '' . stripslashes($cart_item['content']) . '';
    $a .= "</a>";
    $a .= '</div>';

    
    return $a;
}
add_filter( 'woocommerce_cart_item_thumbnail', 'custom_cart_item_product_image', 10, 3 );

//CART QUANTITY
add_filter( 'woocommerce_cart_item_quantity', 'wc_cart_item_quantity', 10, 3 );
function wc_cart_item_quantity( $product_quantity, $cart_item_key, $cart_item ){
    if( is_cart() && isset($cart_item['content'])){
        $st_quantity = 1;
        $product = wc_get_product($cart_item['variation_id'] ?? 0);
        if ($product->exists()) {
            $attribute = $product->get_attributes();
            $st_quantity = $attribute['pa_quantity'];
        }
        $product_quantity = sprintf( '%2$s <input type="hidden" name="cart[%1$s][qty]" value="%2$s" />', $cart_item_key, $st_quantity );
    }
    return $product_quantity;
}

//CART TITLE
// add_filter( 'woocommerce_cart_item_name', 'st_change_cart_items_names', 10, 2 );
function st_change_cart_items_names($item_name, $cart_item ) {
    $item_name = $item_name . ' "' . $cart_item['st_size'] . '"';
    return $item_name;
}

//FRONT HEAD
add_action("wp_head", function() { ?>
    <style>
        .sk-hidden, textarea.sk-hidden {
            display: none;
        }
        div.sheet-preview  svg {
            width: 100px;
        }
        @media(max-width: 768px) {
            div.sheet-preview  svg {
            width: 50px;
        }
        }
    </style>
    <?php if (is_page("customize-sticker")) { include(plugin_dir_path( __FILE__ ) . 'design-select-page-ext.php'); }  ?>
<?php });

function remove_all_theme_styles() {
    if (is_page("editor-square-sticker") || is_page("editor-circle-sticker") || is_page("editor-round-corners-sticker")) {
        global $wp_styles;
        $wp_styles->queue = array();
    }
}
add_action('wp_print_styles', 'remove_all_theme_styles', 100);


//SAVE TO ORDER
add_action('woocommerce_add_order_item_meta','sk_add_values_to_order_item_meta',1,2);
if(!function_exists('sk_add_values_to_order_item_meta'))
{
  function sk_add_values_to_order_item_meta($item_id, $values)
  {
        global $woocommerce, $wpdb;

        // $product_id = $values['product_id'];
        // $qty = $values['quantity'];
        // $cart_key = $values['key'];
        // $cart_hash = $values['data_hash'];
        $content = $values['content'];
        $shape = $values['st_type'] ?? 'rect';
        $size = $values['st_size'] ?? '2x2';
        $width = $values['st_width'] ?? '2';
        $height = $values['st_height'] ?? '2';
        $price = $values['st_price'] ?? '0';
        $comment = $values['st_message'] ?? '';
        $svg = $values['st_svg'] ?? '';
        $cutting_line = $values['cutting_line'] ?? '';

        wc_add_order_item_meta($item_id,'content', htmlspecialchars($content));
        wc_add_order_item_meta($item_id,'st_type', $shape);
        wc_add_order_item_meta($item_id,'st_size', $size);
        wc_add_order_item_meta($item_id,'st_width', $width);
        wc_add_order_item_meta($item_id,'st_height', $height);
        wc_add_order_item_meta($item_id,'st_price', $price);
        wc_add_order_item_meta($item_id,'st_message', $comment);
        wc_add_order_item_meta($item_id,'st_svg', $svg);
        wc_add_order_item_meta($item_id,'cutting_line', $cutting_line);
  }
}

//ORDER ITEM display
add_filter('woocommerce_order_item_display_meta_key', 'filter_wc_order_item_display_meta_key', 20, 3 );
function filter_wc_order_item_display_meta_key( $display_key, $meta, $item ) {

    // Change displayed label for specific order item meta key
    if($item->get_type() === 'line_item') {
        switch($meta->key) {
            case 'content':
                $display_key = __("Design", "woocommerce" );
                break;
            case 'st_type':
                $display_key = __("Shape", "woocommerce" );
                break;
            case 'st_size':
                $display_key = __("Size", "woocommerce" );
                break;
            case 'st_width':
                $display_key = __("Width", "woocommerce" );
                break;
            case 'st_height':
                $display_key = __("Height", "woocommerce" );
                break;
            case 'st_price':
                $display_key = __("Price", "woocommerce" );
                break;
            case 'st_svg':
                $display_key = __("SVG", "woocommerce" );
                break;
            case 'st_message':
                $display_key = __("Message", "woocommerce" );
                break;
            case 'cutting_line':
                $display_key = __("Cutting Line", "woocommerce" );
                break;
            
            default:
                break;
        }
    }

    return $display_key;
}
add_filter( 'woocommerce_order_item_display_meta_value', 'change_order_item_meta_value', 20, 3 );
function change_order_item_meta_value( $value, $meta, $item ) {
    $display_value = $value;


    
    if( $meta->key === 'content') {
        
        $order_id = $item->get_order_id();
        $item_id = $item->get_id();
        $product_id = $item->get_product_id();
        $qty = $item->get_quantity();
        $content = $item->get_meta('content', true);
        $shape = $item->get_meta('st_type', true);
        $size = $item->get_meta('st_size', true);
        $width = $item->get_meta('st_width', true);
        $height = $item->get_meta('st_height', true);
        $price = $item->get_meta('st_price', true);
        // $comment = $item->get_meta('st_message', true);
        // $svg = $item->get_meta('st_svg', true);


        $url = "/";
        if ($shape == "rect")
            $url .= "editor-square-sticker";
        elseif ($shape == "circle")
            $url .= "editor-circle-sticker";
        elseif ($shape == "rounded")
            $url .= "editor-round-corners-sticker";
        else
            $url .= "editor-square-sticker";

        $url .= "?store=setSess&shape=$shape&size=$size&quantity=$qty&price=$price&width=$width&height=$height&product_id=$product_id&order_id=$order_id&order_item_id=$item_id&edit_type=admin_show";

        $display_value = "<a target='_blank' href='$url' class=''>View</a>";

        $display_value = "YES"; //remove later
        
    } elseif ($meta->key === 'st_svg') {
        $display_value = "Saved";

        // if (is_admin()) {

            $content = $item->get_meta('content', true);

            $display_value = "<a href='#!' class='download-svg'>Download</a>";
            $content = stripslashes($content);
            $content = str_replace("https://", "https:\/\/", $content); //to avoid auto link
            $content = str_replace("http://", "http:\/\/", $content); //to avoid auto link
            $display_value .= "<textarea id='svg-content' class='hidden sk-hidden'>" . ($content) . "</textarea>";
        
        // }
    } elseif ($meta->key === 'cutting_line') {
        if (!empty($item->get_meta('cutting_line', true)) && $item->get_meta('st_type', true) == 'path') {
            return "Applied";
        } else {
            return "None";
        }
    }
    return $display_value;
}


//DOWNLOAD SVG JAVASCRIPT
add_action( "wp_footer", "svg_download_script");
add_action( "admin_footer", "svg_download_script");

function svg_download_script() { ?>
    <script>

        jQuery(document).ready(function ($) {
            $(".download-svg").click(function() {
                var svgContent = $(this).next("#svg-content").val();
                svgContent = svgContent.replaceAll("http:\\/\\/", "http://");
                svgContent = svgContent.replaceAll("https:\\/\\/", "https://");
               
                var html = $.parseHTML(svgContent);

                downloadSVG($(html)[0]);
            });
        });

        function downloadSVG(svg) {
            //get svg element.
            // var svg = document.getElementById("svg");

            //get svg source.
            var serializer = new XMLSerializer();
            var source = serializer.serializeToString(svg);

            //add name spaces.
            if(!source.match(/^<svg[^>]+xmlns="http\:\/\/www\.w3\.org\/2000\/svg"/)){
                source = source.replace(/^<svg/, '<svg xmlns="http://www.w3.org/2000/svg"');
            }
            if(!source.match(/^<svg[^>]+"http\:\/\/www\.w3\.org\/1999\/xlink"/)){
                source = source.replace(/^<svg/, '<svg xmlns:xlink="http://www.w3.org/1999/xlink"');
            }

            //add xml declaration
            source = '<\?xml version="1.0" standalone="no"?>\r\n' + source;

            //convert svg source to URI data scheme.
            var url = "data:image/svg+xml;charset=utf-8,"+encodeURIComponent(source);

            var downloadLink = document.createElement("a");
            downloadLink.href = url;
            downloadLink.download = "order-svg-" + Date.now() + ".svg";
            downloadLink.click();
        }
    </script>
<?php }


//CART PRICING
// Set custom cart item price
// add_action( 'woocommerce_before_calculate_totals', 'st_add_custom_price', 1000, 1);
function st_add_custom_price( $cart ) {
    // This is necessary for WC 3.0+
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    // Avoiding hook repetition (when using price calculations for example | optional)
    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
        return;

    // Loop through cart items
    foreach ( $cart->get_cart() as $cart_item ) {
        if ($cart_item['quantity'] == 111) {
            $cart_item['data']->set_price(26 / 111);
        } elseif ($cart_item['quantity'] == 300) {
            $cart_item['data']->set_price(70 / 500);
        } elseif ($cart_item['quantity'] == 500) {
            $cart_item['data']->set_price(78 / 500);
        } elseif ($cart_item['quantity'] == 600) {
            $cart_item['data']->set_price(94 / 600);
        } elseif ($cart_item['quantity'] == 900) {
            $cart_item['data']->set_price(100 / 900);
        } elseif ($cart_item['quantity'] == 1200) {
            $cart_item['data']->set_price(134 / 1200);
        } elseif ($cart_item['quantity'] == 1500) {
            $cart_item['data']->set_price(167 / 1500);
        } elseif ($cart_item['quantity'] == 2000) {
            $cart_item['data']->set_price(191 / 2000);
        }
        
    }
}

function st_get_product_variationsx($product_id) {
    $product = wc_get_product($product_id);
    $array_return = array();
    if($product->is_type('variable')){
        foreach($product->get_available_variations() as $variation ){
            $attr_collections = array();
            // Variation ID
            $variation_id = $variation['variation_id'];
            $attr_collections["ID"] = $variation_id;

            //set quantity
            $attr_collections["pa_quantity"] = $variation['attributes']['attribute_pa_quantity'];

            // Attributes
            $attr_collections['attributes'] = array();
            foreach( $variation['attributes'] as $key => $value ){
                $taxonomy = str_replace('attribute_', '', $key );
                $attr_collections['attributes'][] = array(
                    "$taxonomy" => $value
                );
            }
            // Price
            $attr_collections['price'] = $variation['display_price'];
            $array_return[] = $attr_collections;
        }
        return $array_return;
    } else {
        return null;
    }
}

function st_get_product_variations($product_id, $with_atrr = true) {
    $product = wc_get_product($product_id);


    //ATTRIBUTES
    $attributes = $product->get_attributes();

    $return_attributes = array();
    if ($product->is_type('variation')) {
        $return_attributes['terms'] = $attributes;
        $return_attributes['selected'] = array();
        foreach($attributes as $key => $value) {
            $return_attributes['selected'][] = array(
                'label' => wc_attribute_label($key),
                'selected' => $product->get_attribute($key),
            );
        }

    } else {
    foreach ($attributes as $attr => $attribute) {
        $data = $attribute->get_data();
        $data['label'] = wc_attribute_label($data['name']);
        $options = $attribute->get_options();
        // $data['print_echo'] = $attribute->get_terms();
        $data['options'] = array(); //clear default array;
        if ($attribute->is_taxonomy()) {
            foreach((array)$attribute->get_terms() as $term) {
                //check if option name exists in available variations before adding
				$in_variation = false;
				foreach(st_get_product_variationsx($product->get_id()) as $variation) {
					foreach ($variation['attributes'] as $attribute) {
                        if (isset($attribute[$data['name']])) {
                            if ($attribute[$data['name']] == $term->slug || $attribute[$data['name']] == $term->name) {
                                $in_variation = true;
                            }
                        }
						
					}
				}
				
				if ($in_variation) {
                    $data['options'][] = array(
                        'name' => $term->slug,
                        'value' => $term->name,
                    );
                }
            }
        } else {
            foreach($options as $opt) {
                $data['options'][] = array(
                    'name' => $opt,
                    'value' => $opt,
                );
            }
        }
        $return_attributes[] = $data;
    }
    }


    //VARIATIONS
    $variations = array();
    if($product->is_type('variable')){
        foreach($product->get_available_variations() as $variation ){
    
            $attr_collections = array();
            // Variation ID
            $variation_id = $variation['variation_id'];
            $attr_collections["ID"] = $variation_id;

            //set the quantity
            $attr_collections["pa_quantity"] = $variation['attributes']['attribute_pa_quantity'];

            // Attributes
            $attr_collections['attributes'] = array();
            foreach( $variation['attributes'] as $key => $value ){
                $taxonomy = str_replace('attribute_', '', $key );
                $attr_collections['attributes'][] = array(
                    "$taxonomy" => $value
                );
            }
            // Price
            $attr_collections['price'] = $variation['display_price'];
            $variations[] = $attr_collections;
        }
    }

    return array(
        'attributes' => $return_attributes,
        'variations' => $variations
    );

}

