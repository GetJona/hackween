<?php


if($_SERVER['REQUEST_METHOD']=='GET'){
    ?>
    <form method="POST">
    <span>ingrese el primer numero</span><input type="text" name="n1" />
    <span>ingrese el segundo numero</span><input type="text" name="n2" />
    <input type="submit" value="enviar" />
    </form>
    <?php
}else{
    $sum=0;
   $n1= $_POST['n1'];
   $n2= $_POST['n2'];
    while($n1 != $n2 ){

        if($n1<$n2){
            $n1++;
        }else{
            $n1--;
        }

        if($n1 % 2 == 0){
            $sum += $n1;
        }
    }
}

echo($sum);
