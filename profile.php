<?php

include("connection.php");

$id = $_GET["id"];
$query = mysqli_query($connection,"SELECT * FROM pegawai WHERE id = $id");
$result = mysqli_fetch_assoc($query);

?>

<html>
    <body>
        <h3><?=$result["nama"]?></h3>
        <a href="list.php">Kembali</a>
        <br><br>

        <label>Tempat Lahir : </label>
        <label><?=$result["tempat_lahir"]?></label>
        <br>

        <label>Tanggal Lahir : </label>
        <label><?=date("d/m/Y",strtotime($result["tanggal_lahir"]))?></label>
        <br>

        <label>Jenis Kelamin : </label>
        <label><?=$result["jenis_kelamin"]?></label>
        <br>

        <label>Alamat : </label>
        <label><?=$result["alamat"]?></label>
        <br>

        <label>No.Handphone : </label>
        <label><?=$result["no_handphone"]?></label>
        <br>

        <label>Status Pernikahan : </label>
        <label><?=$result["status_pernikahan"]?></label>
        <br>
    </body>
</html>