var allrmBtn = document.getElementsByClassName("removeSession");


for (var index = 0; index < allrmBtn.length; index++) {
    allrmBtn[index].addEventListener("click", function () {
        var current = this.getAttribute("data-id");
        removeSticker(current);
    });
}


function removeSticker(id) {
    var data = 'action=del_prod';
        data += '&id='+id;

    var xhr = new XMLHttpRequest();
    xhr.open("GET","remove.php?"+data,true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                window.location.reload();
            }
        }
    }
    xhr.send();
}