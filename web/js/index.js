window.url={};
window.url.sendInvoice = 'invoiceConverter.php';

$(document).ready(function(){
    $("#fullFileUpload").on('change',function(ev){
        if(this.files && this.files[0]){
            getBase64(this.files[0]);
        }
    });
});


function getBase64(file) {
    var reader = new FileReader();
    reader.readAsDataURL(file);

    reader.onerror = function (error) {
        alert('No fue posible leer su factura');
    };

    reader.onload = function () {
        sendInvoice(reader.result);
    };
}

function sendInvoice($base64) {

    $.ajax({
        url:window.url.sendInvoice,
        method:'POST',
        data:{
            'name':'invoice',
            'data':$base64
        },
        success:function(data){
            console.log(data);
            return;

            var image = new Image();
            image.src = data;

            document.body.appendChild(image);
        }
    });

}