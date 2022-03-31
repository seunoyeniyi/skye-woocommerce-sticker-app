<?php session_start();

    // print_r($_SESSION['rect']);

    for ($i=0; $i < sizeof($_SESSION['rect']); $i++) { 
        echo '<div id="sheet' . $i + 1 . '" class="row item single">';
        
        echo '<div class="col-xs-12 col-sm-3 preview text-center">';
        echo    '<div class="center-vertical prev-container">';
        echo        '<a href="#!" data-toggle="editor" data-sheet-preview-component="#sheet-preview-' . $i + 1 . '" >';
        echo            '<div class="sheet-preview f-row" id="sheet-preview-' . $i + 1 . '">';
                            
        echo                $_SESSION['rect'][$i]['path'];
        echo            '</div>';
        echo        '</a>';
        echo    '</div>';
        echo '</div>';
        echo '<div class="col-xs-12 col-sm-3 description">';
            
        echo    '<p class="center-vertical">';
        echo        '<span class="description-text">Custom Vinyl Stickers<br>' . $_SESSION['rect'][$i]['size'] . '</span>';
        echo        '<br>';
        echo        '<small class="note nodisplay">';
        echo            '<span class="glyphicon glyphicon-comment"></span>';
        echo        '</small>';
        echo        '<br>';
        echo    '</p>';
        
        echo '</div>';
        echo    '<div class="col-xs-4 col-sm-2 quantity">';

        echo    '<div class="title ">Quantity</div>';
        echo    '<p class="center-vertical">';
        echo        '<input type="text" name="" class="  form-control input-sm" style="max-width:80px;" min="4" data-id="1" value="' .$_SESSION['rect'][$i]['quantity'] . '" step="1" data-placement="auto bottom" data-title="Lowest value is $1" data-original-title="Quantity" data-sheet_type="single" data-sheet_name="circle" data-design_id="0" data-width="279" data-height="137" data-material="clear_label" data-laminate="gloss" data-lang="us" data-inc_vat="1" data-backprint_modified="false" data-container="body" autocomplete="nope" disabled>';
        echo    '</p>';
        echo    '</div>';
        echo    '<div class="col-xs-4 col-sm-2 ppc">';
        echo    '<div class="title  ">Price / piece</div>';
        echo    '<p class="center-vertical price piece-price">' . intval(substr($_SESSION['rect'][$i]['price'],1,strlen($_SESSION['rect'][$i]['price']))) / intval($_SESSION['rect'][$i]['quantity']) . '</p>';
        echo    '</div>';
        echo    '<div class="col-xs-4 col-sm-2 total">';
        echo    '<div class="title ">Total amount</div>';
        echo    '<p class="center-vertical total">'. $_SESSION['rect'][$i]['price'] . '</p>';

        
        echo '</div>';
        echo    '<a href="#!" data-id="1" title="Remove" class="item-btn  btn ">';
        echo        '<span class="glyphicon glyphicon-remove"></span>';
        echo    '</a>';
        echo    '</div>';
    }
    
        
        

        

?>