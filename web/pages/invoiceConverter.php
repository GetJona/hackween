<?php

header('Content-Type: text/html; charset=utf-8');

use thiagoalessio\TesseractOCR\TesseractOCR;
include('../../vendor/autoload.php');




//$obj = new TesseractOCR();

var_dump($_POST['data']);
die();

$data = sendOCR($_POST['data']);
var_dump($data);
die();

/*
$imgPath = generateImage($_POST['data']);
$obj->image($imgPath);
$obj->lang('spa', 'eng');

$obj->whitelist('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,$:/_-');
$out_text = $obj->run();
$out_text = preg_replace("/(\n\n | \n\n)/","",$out_text);
echo(trim($out_text));
*/

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

function sendOCR($base64){

    $generic = new stdClass();


    $generic->apikey = 'da6139703888957';
    $generic->base64Image = $base64;
    $generic->language = 'spa';

    $options = [
        'http' => [
            'method'  => 'POST',
            'content' => json_encode($generic),
            'header'=>  "Content-Type: application/json\r\n"."Accept: application/json\r\n"
        ]
    ];

    $context  = stream_context_create( $options );
    $result = file_get_contents( 'https://api.ocr.space/parse/image', false, $context );
    return json_decode( $result );
}
