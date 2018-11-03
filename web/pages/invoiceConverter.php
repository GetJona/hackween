<?php

header('Content-Type: text/html; charset=utf-8');

use thiagoalessio\TesseractOCR\TesseractOCR;
include('../../vendor/autoload.php');
include('HandleData.php');

$obj = new TesseractOCR();

$imgPath = generateImage($_POST['data']);
$obj->image($imgPath);
$obj->lang('spa', 'eng');

$obj->whitelist('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,$:/_-');
$out_text = $obj->run();
$out_text = preg_replace("/(\n\n | \n\n)/","",$out_text);


$handle = new HandleData();
$handle->handleTypes($out_text);
$handle->public;


echo(trim(json_encode($handle->public)));


function separeBase64($base64){
    $image_parts = explode(";base64,", $base64);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    if($image_type=='jpeg'){
        $image_type='jpg';
    }
    return [$image_parts[1],$image_type];
}

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
