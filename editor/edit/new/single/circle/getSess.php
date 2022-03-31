<?php

    session_start();

    if(isset($_POST['session'])) {
        $reply= array(
            'width'=> $_SESSION["width"],
            'height'=> $_SESSION["height"],
            'quantity'=> $_SESSION["quantity"],
            'price'=> $_SESSION["price"]
        );

        echo json_encode($reply);
    } else {
        print_r($_SESSION);
    }

?>