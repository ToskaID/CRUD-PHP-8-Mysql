<?php

include("connection.php");

//menangkap data yang dikrim form-edit dari method post
$id = $_POST["id"];
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
        "UPDATE pegawai 
        SET nama = '$nama',
        jenis_kelamin = '$jenis_kelamin',
        alamat = '$alamat',
        tempat_lahir = '$tempat_lahir',
        tanggal_lahir = '$tanggal_lahir',
        no_handphone = '$no_hp',
        status_pernikahan = '$status_pernikahan'
        WHERE id = $id"
    );
    header("Location:list.php");
}catch(Exception $e){
    echo "Gagal Update database " . $e->getMessage();
}


?>