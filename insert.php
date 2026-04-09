<?php

include("connection.php");

//menangkap data yang dikrim form-insert dari method post
$nama = $_POST["nama"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$status_pernikahan = $_POST["status_pernikahan"];

try{
    mysqli_query(
        $connection,
        "INSERT INTO pegawai (nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,no_handphone,status_pernikahan)
        VALUES ('$nama','$jenis_kelamin','$alamat','$tempat_lahir','$tanggal_lahir','$no_hp','$status_pernikahan')"
    );
    header("Location:list.php");
}catch(Exception $e){
    echo "Gagal Inset ke database " . $e->getMessage();
}


?>