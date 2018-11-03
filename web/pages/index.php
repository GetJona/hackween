<?php

header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido!</title>
        <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../css/general.css" type="text/css" />
    </head>
    <body>
        <div>

        </div>
        <div id="container">

            <div>
                <h3>Digitaliza tu factura</h3>
            </div>
            <div id="uploadInvoice">
                <div class="backgroundFileUpload">
                    <img src="#"/>
                </div>
                <div class="overLayer">
                    <input id="fullFileUpload" type="file" />
                </div>
            </div>
        </div>

        <script src="../js/jquery/jquery.js"></script>
        <script src="../css/bootstrap/js/bootstrap.min.js"></script>
        <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/pages/index.js"></script>
    </body>
</html>