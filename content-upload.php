<?php




ob_start();
        $product_id        = $_POST['product_id'] ?? $skye_sticker_global_product_used;
        // $id          = $_POST['id'];
        $cart_id          = isset($_POST['cart_id']) ? $_POST['cart_id'] : null;
        $type          = $_POST['type'];
        $content          = $_POST['content'];
        $quantity          = $_POST['qty'];
        $size          = $_POST['size'];
        $price          = $_POST['price'];
        $width          = $_POST['width'];
        $height          = $_POST['height'];
        $message          = $_POST['message'];
        $svg          = $_POST['svg'];
        $edit_type          = $_POST['edit_type'];
        $cart_key          = $_POST['cart_key'];
        $cutting_line          = $_POST['cutting_line'] ?? '';


        //check update first
        if ($edit_type == "edit") {

            WC()->cart->cart_contents[$cart_key]['st_width'] = $width;
            WC()->cart->cart_contents[$cart_key]['st_height'] = $height;
            WC()->cart->cart_contents[$cart_key]['st_type'] = $type;
            WC()->cart->cart_contents[$cart_key]['content'] = $content;
            WC()->cart->cart_contents[$cart_key]['st_message'] = $message;
            WC()->cart->cart_contents[$cart_key]['st_svg'] = $svg;
            WC()->cart->cart_contents[$cart_key]['cutting_line'] = $cutting_line;
            WC()->cart->set_session();
            

            die();
            return;
        }




        $passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity );
        $product_status    = get_post_status( $product_id );

        if ( $passed_validation && WC()->cart->add_to_cart( $product_id, $quantity ) && 'publish' === $product_status ) {

            do_action( 'woocommerce_ajax_added_to_cart', $product_id );

            // wc_add_to_cart_message( $product_id );

        } else {

            // If there was an error adding to the cart, redirect to the product page to show any errors
            $data = array(
                'error'       => true,
                'product_url' => apply_filters( 'woocommerce_cart_redirect_after_error', get_permalink( $product_id ), $product_id )
            );

            wp_send_json( $data );

        }

        die();