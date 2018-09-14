<?php
function tambah_string (&$str) {
    $str = $str . ", Jakarta";
    return $str;
}
//
$str = "Universal Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";
?>