<?php
if(isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $Nis = $_POST['nis'];
    $Alamat = $_POST['alamat'];
    $Jenis_kelamin = $_POST['jenis_kelamin'];
    $Agama = $_POST['Agama'];
    $Asal_sekolah = $_POST['asal_sekolah'];
    $Namaortu = $_POST['nama_ortu'];
    $matapel = $_POST['mapel'];
    $Email = $_POST['email'];
    $Nilaisd = $_POST['total'];

    echo "Nama Lengkap : <b>$nama</b> <br>";
    echo "Nomor Induk Siswa : <b>$Nis</b> <br>";
    echo "Alamat : <b>$Alamat</b> <br>";
    echo "Jenis Kelamin : <b>$Jenis_kelamin</b> <br>";
    echo "Agama : <b>$Agama</b>";
    echo "Asal sekolah : <b> $Asal_sekolah</b> <br>";
    echo "Nama Orang Tua/Wali : <b>$Namaortu</b> <br>";
    echo "Mata pelajaran yang disukai : <b>$matapel</b> <br>";
    echo "Email : <b>$Email</b> <br>";
    echo "Nilai ijasah sd : <b>$Nilaisd</b> <br>";

if($Nilaisd >=23){
    echo "Selamat anda diterima";
}else{
    echo "Maap Anda Tidak Diterima";
}
} 
?>