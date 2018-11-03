<?php

error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

use thiagoalessio\TesseractOCR\TesseractOCR;
include_once('../../vendor/autoload.php');
include_once('HandleData.php');
include_once('../entities/InvoiceRaw.php');



$imgPath = $_POST['data'];
$validImages=['jpg','jpeg', 'gif', 'bmp', 'png'];

if($imgPath=="" || empty($imgPath) ){
    header($_SERVER['SERVER_PROTOCOL'] . ' Elija una imagen valida', true, 406);
    exit();
}


$falseQuantity=0;
foreach ($validImages as $index => $type){
    if(stripos($imgPath, $type)===false){
        $falseQuantity++;
    }
}



if($falseQuantity >= count($validImages)){
    header($_SERVER['SERVER_PROTOCOL'] . ' Elija una imagen valida', true, 406);
    exit();
}

$fileImage = generateImage($imgPath);

$obj = new TesseractOCR();
$obj->image($fileImage);
$obj->lang('spa', 'eng');
$obj->whitelist('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,$:/_-');
$out_text = $obj->run();

$handle = new HandleData();


/*
//var_dump($out_text);
echo($handle->getNitSeller($out_text));
die();
echo('<pre>');
echo($out_text);
echo('</pre>');
die();

*/

$out_text = preg_replace("/(\n\n | \n\n)/","",$out_text);
$raw = new InvoiceRaw();
$raw->setData( date('Y/m/d h:i:s', time()), $_SERVER['REMOTE_ADDR'], $out_text, $fileImage);
$raw->insertData();


$handle->handleTypes($out_text);


echo(trim(json_encode($handle->public)));


function generateImage($base64){

    $folderPath = "./../tmp/";
    $image_parts = explode(";base64,", $base64);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . uniqid() . '.'.$image_type;
    file_put_contents($file, $image_base64);
    return $file;
}
