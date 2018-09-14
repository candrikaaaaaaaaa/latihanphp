<?php
$day = date ("D");
switch ($day) {
    case 'Sun' : $hari = "Minngu"; break;
    case 'Mon' : $hari = "Senin"; break;
    case 'Tue' : $hari = "Selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fri' : $hari = "Jum'at"; break;
    case 'Sat' : $hari = "sabtu"; break;
       default : $hari = "kiamat";
}
echo "Hari ini hari <b>$hari</b>";
?>