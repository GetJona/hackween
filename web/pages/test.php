<?php

use thiagoalessio\TesseractOCR\TesseractOCR;
include('../../vendor/autoload.php');



die();


$obj = new TesseractOCR();
$obj->image('escanear0031.jpg');
$obj->lang('spa', 'eng');
/*$obj->userWords()*/
$obj->whitelist('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,$:/_-');
$out_text = $obj->run();

//$out_text = preg_replace("/(\n\n | \n\n)/","",$out_text);

/*
$characters=str_split($out_text);
foreach ($characters as $index=>$character){
    var_dump(ord($character).' '.' - '.$character);
}
*/

?>

<pre>
<?php echo($out_text); ?>
</pre>