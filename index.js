jQuery(document).ready(function($) {
    var shapeContainer = $("#box-shape");
    var sizeContainer = $("#box-size");
    var qtyContainer = $("#box-quantity");

    var allShapes = shapeContainer.find(".shape");
    var allSizes = sizeContainer.find(".size");
    var allQtys = qtyContainer.find(".quantity");

    var currentSize = $("#getSize");
    var currentQty = $("#getQty");
    var currentPrice = $("#getPrice");
    var currentProduct = $("#getProduct");

    currentPrice.val("");
    currentQty.val("");
    currentSize.val("");
    $("#getShape").val("");


    
    var shapename="";
    var sizename="";
    var qtyname="";

    setShape();

    setSizes();

    setCurQty();


    function setSizes() {

        currentSize.val("2x1"); //default size
        currentSize.attr("data-width", "2"); //default width
        currentSize.attr("data-height", "1"); //default height

        for (var sIndex = 0; sIndex < allSizes.length; sIndex++) {
            allSizes[sIndex].addEventListener("click", function () {

            // var current = $(".active");
            // current[1].className = current[1].className.replace(" active", ""); 
            // this.className += " active";
            allSizes.removeClass("active");
            $(this).addClass("active");

            // var width = this.getAttribute('data-width-mm');
            // var height = this.getAttribute('data-height-mm');
            var slug = this.getAttribute('data-slug');

            allQtys.hide(); //hide all quantity
            $(".qty-size-" + slug).show(); //show quantity related
            var firstQty = $(".qty-size-" + slug).first();
            allQtys.removeClass("active");
            firstQty.addClass("active");
            currentQty.val(firstQty.attr("data-quantity"));
            currentPrice.val(firstQty.attr("data-price"));
            currentProduct.val(firstQty.attr("data-product"));
            

            if (slug == "2-x-1") {
                    currentSize.val("2x1");
                    currentSize.attr("data-width","2");
                    currentSize.attr("data-height","1");
                getPcs("2x1");
            }else if (slug == "2-x-2") {
                    currentSize.val("2x2");
                    currentSize.attr("data-width","2");
                    currentSize.attr("data-height","2");
                getPcs("2x2");
            }else if (slug == "3-x-2") {
                    currentSize.val("3x2");
                    currentSize.attr("data-width","3");
                    currentSize.attr("data-height","2");
                    getPcs("3x2");
                }else if (slug == "3-x-3") {
                    currentSize.val("3x3");
                    currentSize.attr("data-width","3");
                    currentSize.attr("data-height","3");
                    getPcs("3x3");
                }
                else if (slug == "4-x-3") {
                    currentSize.val("4x3");
                    currentSize.attr("data-width","4");
                    currentSize.attr("data-height","3");
                    getPcs("4x3");
                }
                else if (slug == "4-x-4") {
                    currentSize.val("4x4");
                    currentSize.attr("data-width","4");
                    currentSize.attr("data-height","4");
                    getPcs("4x4");
                }else if (slug == "5-x-2") {
                    currentSize.val("5x2");
                    currentSize.attr("data-width","5");
                    currentSize.attr("data-height","2");
                    getPcs("5x2");
                }else if (slug == "5-x-3") {
                    currentSize.val("5x3");
                    currentSize.attr("data-width","5");
                    currentSize.attr("data-height","3");
                    getPcs("5x3");
                }else if (slug == "8-x-4") {
                    currentSize.val("8x4");
                    currentSize.attr("data-width","8");
                    currentSize.attr("data-height","4");
                    getPcs("8x4");
                }
                
            });
        }
    }

    //cutline
    function setShape() {

        $("#getShape").val("rect"); //defautl cutline

        for (var index = 0; index < allShapes.length; index++) {
            allShapes[index].addEventListener("click", function () {
                // var current = document.getElementsByClassName("active");
                // current[0].className = current[0].className.replace(" active", "");
                // this.className += " active";
                allShapes.removeClass("active");
                $(this).addClass("active");
                shapename = this.getAttribute("data-template-name");
                document.getElementById("getShape").value = shapename;
            });
        }
    }
    
    function setCurQty() {
        
        allQtys.hide(); //hide all quantity
        $(".qty-size-2-x-1").show(); //show default quantity
        currentQty.val("111"); //default quantity
        currentPrice.val("26"); //default price
        currentProduct.val($(".qty-size-2-x-1").first().attr("data-product")); //default product

        for (var qIndex = 0; qIndex < allQtys.length; qIndex++) {
            allQtys[qIndex].addEventListener("click", function () {
                // var current = document.getElementsByClassName("active");
                // current[2].className = current[2].className.replace(" active", "");
                // this.className += " active";

                allQtys.removeClass("active");
                $(this).addClass("active");

                currentQty.val(this.getAttribute("data-quantity"));
                currentPrice.val(this.getAttribute("data-price"));
                currentProduct.val(this.getAttribute("data-product"));
            });
        }
    }
    
    function getPcs(size) {
        //get prices from attributes and variaitions json
    }
    
    function setSession(url) {
        var data = 'store=setSess';
            data += '&product_id=' + currentProduct.val();
            data += '&shape=' + $("#getShape").val();
            data += '&size=' + currentSize.val();
            data += '&quantity=' + currentQty.val();
            data += '&price=' + currentPrice.val();
            data += '&width=' + currentSize.attr("data-width");
            data += '&height=' + currentSize.attr("data-height");
    
            window.location.href = url + "?" + data;
    
    }

    $("#btnNext").click(function(){
        var current = $("#getShape").val();

        if (current == "") {
            alert("Please select a cutline");
            return;
        }

        if (currentQty.val() == "") {
            alert("Please choose quantity");
            return;
        }
        if (currentSize.val() == "") {
            alert("Please choose size");
            return;
        } 


        // setSession();
        if(current == "rect"){
            setSession("/editor-square-sticker");
            // setSession("/StickerApp/editor/edit/new/single/rect/");
            // window.location.href="/StickerApp/editor/edit/new/single/rect/";
        }else if (current == "circle") {
            setSession("/editor-circle-sticker");
            // setSession("/StickerApp/editor/edit/new/single/circle/");
            // window.location.href="/StickerApp/editor/edit/new/single/circle/";
        }else if(current == "rounded") {
            setSession("/editor-round-corners-sticker");
            // setSession("/StickerApp/editor/edit/new/single/rounded/");
            // window.location.href="/StickerApp/editor/edit/new/single/rounded/";
        }else {
            alert("Please select a cutline");
        }
        
        
    });



});








