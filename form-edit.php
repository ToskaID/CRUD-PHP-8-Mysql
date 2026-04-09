<?php
include("connection.php");
$id = $_GET["id"];
$query = mysqli_query($connection,"SELECT * FROM pegawai WHERE id = $id");
$result = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data Pegawai</h1>

    <form method="POST" action="edit.php">

        <input type="hidden" name="id" value="<?=$result["id"]?>"/>

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?=$result["nama"]?>"/>
        <br><br>

        <label>Tempat Lahir</label><br>
        <input type="text" name="tempat_lahir" value="<?=$result["tempat_lahir"]?>" />
        <br><br>

        <label>Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir" value="<?=$result["tanggal_lahir"]?>"  />
        <br><br>

        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin">
            <option value="laki-laki" <?php if($result["jenis_kelamin"] == "laki-laki") echo "selected" ?>>Laki - Laki</option>
            <option value="perempuan" <?php if($result["jenis_kelamin"] == "perempuan") echo "selected" ?>>Perempuan</option>
        </select>
        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat"><?=$result["alamat"]?></textarea>
        <br><br>

        <label>No Handphone</label><br>
        <input type="text" name="no_hp" value="<?=$result["no_handphone"]?>" />
        <br><br>

        <label>Status Pernikahan</label><br>
        <select name="status_pernikahan">
            <option value="menikah" <?php if($result["status_pernikahan"] == "menikah") echo "selected" ?>>Menikah</option>
            <option value="lajang" <?php if($result["status_pernikahan"] == "lajang") echo "selected" ?>>Lajang</option>
            <option value="cerai" <?php if($result["status_pernikahan"] == "cerai") echo "selected" ?>>Cerai</option>
        </select>
        <br><br>

        <button type="submit">Edit Data</button>
        <button><a href="list.php">Kembali</a></button>
    </form>
</body>
</html>