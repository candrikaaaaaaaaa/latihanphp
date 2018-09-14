<?php
$uang = 50000;
$makanan = 25000;
$minuman = 10000;
$total = $makanan+$minuman;
$sisa_uang = $uang - ($makanan+$minuman);

echo "Uang hari = Rp. $uang <br>";
echo "Makan = Rp. $makanan <br>";
echo "hari menghabiskan uang sebanyak = Rp. $total <br>";
echo "sisa uang hari = Rp. $sisa_uang <br>";

if ($sisa_uang == 0){
    echo "hari <b> BOROS </b>";
} else {
    echo "hari <b> HEMAT </b>";
}

?>