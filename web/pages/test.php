<?php

use thiagoalessio\TesseractOCR\TesseractOCR;

include('../../vendor/autoload.php');

$obj = new TesseractOCR();
$obj->image('escanear0031.jpg');
$obj->whitelist('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,$:/_-');

?>

<pre>
<?php echo($obj->run()); ?>
</pre>