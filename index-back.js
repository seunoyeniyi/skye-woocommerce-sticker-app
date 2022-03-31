var shapeContainer = document.getElementById("box-shape");
var sizeContainer = document.getElementById("box-size");
var qtyContainer = document.getElementById("box-quantity");

var allShapes = shapeContainer.getElementsByClassName("shape");
var allSizes = sizeContainer.getElementsByClassName("size");
var allQtys = qtyContainer.getElementsByClassName("quantity");

var currentSize = document.getElementById("getSize");
var currentQty = document.getElementById("getQty");
var currentPrice = document.getElementById("getPrice");

currentPrice.value="";
currentQty.value = "";
currentSize.value = "";
document.getElementById("getShape").value="";

var shapename="";
var sizename="";
var qtyname="";

setShape();

setCurQty();


for (var sIndex = 0; sIndex < allSizes.length; sIndex++) {
    allSizes[sIndex].addEventListener("click", function () {
       var current = document.getElementsByClassName("active");
       current[1].className = current[1].className.replace(" active", ""); 
       this.className += " active";
       var width = this.getAttribute('data-width-mm');
       var height = this.getAttribute('data-height-mm');
    //    console.log(width, height, sIndex);
        currentQty.value="";
        currentPrice.value="";
       if (width == "51" && height == "25") {
            currentSize.value = "2x1";
            currentSize.setAttribute("data-width","2");
            currentSize.setAttribute("data-height","1");
           getPcs("2x1");
       }else if (width == "51" && height == "51") {
            currentSize.value = "2x2";
            currentSize.setAttribute("data-width","2");
            currentSize.setAttribute("data-height","2");
           getPcs("2x2");
       }else if (width == "76" && height == "51") {
            currentSize.value = "3x2";
            currentSize.setAttribute("data-width","3");
            currentSize.setAttribute("data-height","2");
            getPcs("3x2");
        }else if (width == "76" && height == "76") {
            currentSize.value = "3x3";
            currentSize.setAttribute("data-width","3");
            currentSize.setAttribute("data-height","3");
            getPcs("3x3");
        }
        else if (width == "102" && height == "76") {
            currentSize.value = "4x3";
            currentSize.setAttribute("data-width","4");
            currentSize.setAttribute("data-height","3");
            getPcs("4x3");
        }
        else if (width == "102" && height == "102") {
            currentSize.value = "4x4";
            currentSize.setAttribute("data-width","4");
            currentSize.setAttribute("data-height","4");
            getPcs("4x4");
        }else if (width == "127" && height == "51") {
            currentSize.value = "5x2";
            currentSize.setAttribute("data-width","5");
            currentSize.setAttribute("data-height","2");
            getPcs("5x2");
        }else if (width == "127" && height == "76") {
            currentSize.value = "5x3";
            currentSize.setAttribute("data-width","5");
            currentSize.setAttribute("data-height","3");
            getPcs("5x3");
        }else if (width == "203" && height == "102") {
            currentSize.value = "8x4";
            currentSize.setAttribute("data-width","8");
            currentSize.setAttribute("data-height","4");
            getPcs("8x4");
        }
    });
}

document.getElementById("btnNext").addEventListener("click", function(){
    var current = document.getElementById("getShape").value;

    if (currentQty.value == "" || currentSize.value=="") {
        alert("Please choose size and quantity");
    }else {
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
    }
    
});


function setShape() {
    for (var index = 0; index < allShapes.length; index++) {
        allShapes[index].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
            shapename = this.getAttribute("data-template-name");
            document.getElementById("getShape").value = shapename;
        });
    }
}

function setCurQty() {
    
    for (var qIndex = 0; qIndex < allQtys.length; qIndex++) {
        allQtys[qIndex].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[2].className = current[2].className.replace(" active", "");
            this.className += " active";
            currentQty.value = this.getAttribute("data-quantity");
            currentPrice.value = this.getAttribute("data-price");
        });
    }
}

function getPcs(size) {
    var data = 'size='+size;
        data += '&getPcs=getPcs';

    var pcsContainer = document.getElementById("getpcs");

    var xhr = new XMLHttpRequest();
    xhr.open("GET","price.php?"+data,true);
    // xhr.setRequestHeader("Content-Type","application/json");
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = xhr.response;
                pcsContainer.innerHTML = response;
                setCurQty();
            }
        }
    }
    xhr.send();
}

function setSession(url) {
    var data = 'store=setSess';
        data += '&shape='+document.getElementById("getShape").value;
        data += '&size='+currentSize.value;
        data += '&quantity='+currentQty.value;
        data += '&price='+currentPrice.value;
        data += '&width='+currentSize.getAttribute("data-width");
        data += '&height='+currentSize.getAttribute("data-height");

        window.location.replace(url + "?" + data)

    // var xhr = new XMLHttpRequest();
    // xhr.open("GET","price.php?"+data,true);
    // xhr.onload = () => {
    //     if (xhr.readyState === XMLHttpRequest.DONE) {
    //         if (xhr.status === 200) {
    //             var response = xhr.response;
    //             console.log(response);
    //             window.location.replace(url);
    //         }
    //     }
    // }
    // xhr.send();
}