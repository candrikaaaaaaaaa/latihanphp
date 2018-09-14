<?php
$nim = "0411500400";
$nama = 'Candrika dwi kastari';
$umur = 16;
$nilai = 82.25;
$status = true;
echo "Nim : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur;
print "<br>"; 
printf("Nilai : %.3f<br>", $nilai);
if ($status) {
    echo "status : Aktif";
} else {
    echo "status : Tidak Aktif";
}
