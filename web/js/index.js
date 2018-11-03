window.url={};
window.url.sendInvoice = 'pages/invoiceConverter.php';

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
        dataType: "json",
        data:{
            'name':'invoice',
            'data':$base64
        },
        success:function(data){
            console.log(data);

            var image = new Image();
            image.src = data;

            document.body.appendChild(image);

            div = document.getElementById('second');
            div.style.display = '';

            div = document.getElementById('first');
            div.style.display = 'none';

            div = document.getElementById('footer');
            div.style.display = 'none';

            x = data;
            var s='';
            div =document.getElementById("factura");
            for(var j=0;j<x.length;j++) {
                console.log(x[j])
                if (x[j].type==1) {
                    s = s + "<br>" + x[j].name+" "+x[j].value
                }else{
                    if (x[j].value == '') {
                        s = s + "<br>" + "-----------------------------------------"
                    }else{
                        s = s + "<br>" + x[j].value
                    }
                }
            }
            div.innerHTML ="<pre>" +s+"</pre>";
        }
    });

}
