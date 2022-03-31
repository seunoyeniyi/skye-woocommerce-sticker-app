var svgCon = document.getElementById("svg_1647248524_partGroup");
var allimage = svgCon.querySelectorAll("Image");
getSession();
$(document).ready(function() {
   
    
    // document.getElementsByClassName("summary-width")[0].setAttribute("min", document.getElementById("getWidth").value * 1);
    // document.getElementsByClassName("summary-width")[0].setAttribute("max", document.getElementById("getWidth").value * 1 + 1);

    // document.getElementsByClassName("summary-height")[0].setAttribute("min", document.getElementById("getHeight").value * 1);
    // document.getElementsByClassName("summary-height")[0].setAttribute("max", document.getElementById("getHeight").value * 1 + 1);
    // document.getElementsByClassName

    $('#btnSave, .save-mobile').on('click', function(){

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        
      
        let svgViewBox = document.getElementById("editor-1-svgroot").getAttribute("viewBox");


        let svgContainer = '<svg viewBox="'+svgViewBox+'" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">';
        svgContainer += '<defs>'+document.getElementsByTagName("clipPath")[0].outerHTML;
        svgContainer += document.getElementById("drop_shadow").outerHTML + "</defs>";
        svgContainer += document.getElementById("svg_1647248524PartBackground").outerHTML + document.getElementById("svg_1647248524_partGroup").outerHTML +'</svg>';

        // let shape = "";
        let size = document.getElementsByClassName("summary-width")[0].getAttribute("old")+"x"+document.getElementsByClassName("summary-height")[0].getAttribute("old");
        let qty = 1; //$($(".content .summary-quantity")[0]).val(); //custom quantity
        let id = document.getElementsByTagName("clipPath")[0].getAttribute("id");
        let price = document.getElementsByClassName("sticker_amount")[0].textContent;
        let width = document.getElementsByClassName("summary-width")[0].getAttribute("old");
        let height = document.getElementsByClassName("summary-height")[0].getAttribute("old");
        let message = $("textarea#comment").val();
        // alert(svgContainer.toString());

        //svg json
        let svgElement = $("#editor-1-svgroot");
        var svg = "<defs dataWidth=\"" + get_sticker_board_width(width) + "\"></defs><defs dataHeight=\"" + get_sticker_board_height(height) + "\"></defs>";
        //get texts
        var gs = svgElement.find("text:not(.svgPartSizeText)");
        gs.each(function () {
            svg += $(this).prop('outerHTML');
        });
        //get images
        var images = svgElement.find("image:not(#selectNWIconIconImage):not(#selectNEIconIconImage):not(#selectSEIconIconImag):not(#selectSEIconIconImage):not(#selectSWIconIconImage):not(#selectRotateIconIconImage):not(#selectCenterHorIconIconImage):not(#selectCenterVerIconIconImage):not(#selectDeleteIconIconImage):not(#selectDownIconIconImage)");
        images.each(function () {
            var firstGParent = $(this).closest("g");
            var secondGParent = firstGParent.parent();
            svg += secondGParent.prop("outerHTML");
        });
        
        svg = textToUnicode(svg);

        var edit_type = "new";
        if (urlParams.has("edit_type")) {
            edit_type = urlParams.get("edit_type");
        }
        var cart_key = "";
        if (urlParams.has("cart_key")) {
            cart_key = urlParams.get("cart_key");
        }

        var cutLine = "";
        cutLine = svgElement.find("path:not(.svgSheet)").first().attr("d");
        
        uploadSVG(svgContainer,id,size,qty, width, height, price, message, svg, edit_type, cart_key, cutLine);
        
    });

    function textToUnicode(text) {
        text = text.replaceAll("<", "\\u003C");
        text = text.replaceAll(">", "\\u003E");
        text = text.replaceAll("/", "\\/");
        text = text.replaceAll("\"", "\\\"");
        text = text.replaceAll("\n", " ");
        return text;
    }

    
    $('#btnB').on('click', function(){
        clickFile();
    });
    
    $('#file2').change(function(e) {
        console.log(e.target.files.length + " file2");
        var geekss = e.target.files[0].name;
        console.log(geekss + ' is the selected file from file2.');
        if (e.target.files.length > 0) {
            uploadFile(e);
        }
    });
    $('#file1').change(function(e) {
        console.log(e.target.files.length + " file1");
        var geekss = e.target.files[0].name;
        console.log(geekss + ' is the selected file from file1.');
        if (e.target.files.length > 0) {
            uploadFile(e);
        }
    });
    $('#makeNewSticker').on('click', function(){
        window.onbeforeunload = null;
        window.location.replace("/customize-sticker/");
    });
    $('#goToCheckout').on('click', function(){
        window.onbeforeunload = null;
        window.location.replace("/cart/");
    });

    $(".shapes .cta").click(function () {
        var type = $(this).attr("data-type");
        if (typeof type !== 'undefined' && type !== false) {
            $("#shape-type").val(type);
        }
    });

    // if ($("#sk-content").val().length > 10) {
    //     loadToEditor();
    // }
    
});


function clickFile() {
    document.getElementById("file2").click();
}

function uploadFile(e) {
    var form_data = new FormData();

    for (var index = 0; index < e.target.files.length; index++) {
        form_data.append("files[]", e.target.files[index]);
    }

    $.ajax({
        url: 'upload.php',
        type: 'post',
        data: form_data,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
            
        }
    });
}

// upload Svg Content
function uploadSVG(content, id, size, qty, width, height, price, message, svg, editType, cartKey, cutLine) {

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    var type = "rect";

    if ($("#shape-type").val().length > 0) {
        type = $("#shape-type").val();
        if (type == "path-s" || type == "path-m" || type == "path-l") {
            type = "path";
        } else if (type == "round") {
            type = "circle";
        }
    } else if (urlParams.has("shape")) {
        type = urlParams.get("shape");
    }
    
    
    $("#overlay").show();
    $.ajax({
        url: skAjax.ajaxurl,
        type: 'post',
        data: {
            action: 'sk_sticker_save',
            'content': content,
            'type': type,
            'id': id,
            'product_id': (urlParams.has("product_id")) ? urlParams.get("product_id") : null,
            'size': size,
            'qty': qty,
            'price': price,
            'width': width,
            "height": height,
            "message": message,
            "svg": svg,
            "edit_type": editType,
            "cart_key": cartKey,
            "cutting_line": cutLine,
        },
        success: function(response){
            $("#overlay").hide();
            // console.log(response);
            // console.log(response.content);
            if( response.error != 'undefined' && response.error ){
                //some kind of error processing or just redirect to link
                // might be a good idea to link to the single product page in case JS is disabled
                return true;
              } else {
                window.onbeforeunload = null;
                // window.location.href = SO_TEST_AJAX.checkout_url;
                if (editType == "edit") {
                    window.location.replace("/cart/");
                } else {
                    var modalb = document.getElementById("pre-checkout-modal");
                    modalb.classList.remove("hidden");
                }


              }
            
        },
        error: function() {
            $("#overlay").hide();
        }
    });

    

}

function loadToEditor() {
    var content = $("#sk-content").val();
    var html = $.parseHTML(content);
    var viewBox = $(html).attr("viewBox");
    var defs = $(html).find("defs")[0].outerHTML;
    var path = $(html).find("path")[0].outerHTML;
    var g = $(html).find("g")[0].outerHTML;
    //replace
    $("div.editor-container").html(content);
    // $("#editor-1-svgroot").replaceWith(html);
    // editorRoot.attr("viewBox", viewBox);
    // editorRoot.find("defs").first().replaceWith(defs);
    // editorRoot.find("path").first().replaceWith(path);
    // editorRoot.find("g").first().replaceWith(g);
}

function getSession() {
    
    // const queryString = window.location.search;
    // const urlParams = new URLSearchParams(queryString);
    
    // var width = urlParams.get('width');
    // var height = urlParams.get('height');

    // $(".summary-width").val(width);
    // $(".summary-height").val(height);
    // setTimeout(function() {
    //     $(".summary-width").val(width);
    //     $(".summary-height").val(height);
    // }, 2000);

    // $.ajax({
    //     url: 'getSess.php',
    //     type: 'post',
    //     data: {
    //         'session': 'content'
    //     },
    //     success: function(response){
    //         var data = JSON.parse(response);
    //         alert("kindly change the dimension box to "+data["width"]+"x"+data["height"]);
    //     }
    // });

}

