<?php
function Segitiga ($a , $t){
    return 1/2 * $a *$t;
}
//pemanggilan fungsi
$a = 10;
$t = 5;
echo " Alas : $a <br> Tinggi : $t <br> <b>Luas segitiga : ";
echo Segitiga ($a , $t);
?>