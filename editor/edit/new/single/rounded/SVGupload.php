<?php
    // session_start();
    // if (isset($_POST['id']) && isset($_POST['content'])) {
    //     $id = $_POST['id'];
    //     // $shape = $_POST['shape'];
    //     $qty = $_POST['qty'];
    //     $size = $_POST['size'];
    //     $content = $_POST['content'];
    //     $price = $_POST['price'];

    //     $setStamp = date_timestamp_get(date_create());
    //     $filename = $setStamp."_".guidv4()."_".$size.$qty;
    //     $pathtoUpload = "../../../../../stickerUpload/".$setStamp."/".$filename.".svg";
    //     $dirname = dirname($pathtoUpload);
        
    //     if(!is_dir($dir)){
    //         mkdir($dirname, 0777, true);
    //     }

    //     if(!file_exists($pathtoUpload))
    //     {
    //         $fp = fopen($pathtoUpload,"w+");
    //         fwrite($fp,$content);
    //         fclose($fp);
    //         $array = array(
    //             'id'=> $id,
    //             'size' => $size,
    //             'quantity' => $qty,
    //             'path' => $content,
    //             'price' => $price
    //         );

    //         $_SESSION['rect'][] = $array;
    //     }

        
    //     echo json_encode($array);
    // }else {
    //     echo 'error';
    // }


    // function guidv4($data = null) {
    //     // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    //     $data = $data ??  openssl_random_pseudo_bytes(16);
    //     assert(strlen($data) == 16);
    
    //     // Set version to 0100
    //     $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    //     // Set bits 6-7 to 10
    //     $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
    //     // Output the 36 character UUID.
    //     return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    // }
    
?>