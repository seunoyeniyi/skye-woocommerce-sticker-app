<?php
    session_start();


    if (isset($_GET['action']) && ($_GET['action'] == 'del_prod')) {
        $id = intval(trim($_GET['id']));
        // remove the product from cart
        unset($_SESSION['rect'][$id]);

        echo "done";
    }
?>