<?php
include("connection.php");

$keyword=$_GET["keyword"];
$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE nama LIKE '%$keyword%' ");
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);


?>

<html>
    <body>
        <h1>Search Data Pegawai</h1>
        
        <form method="GET" action="search.php">
            <input type="text" name="keyword" placeholder = "Ketikan Pencarian..." />
            <button type="submit">Cari</button>
        </form>

        <a href="form-insert.php">Tambah Data</a> |
        <a href="list.php">Kembali</a>
        <br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php foreach($result as $index => $pegawai) : ?>
                <tr>
                    <td><?= $index+ 1?></td>
                    <td><a href="profile.php?id=<?=$pegawai["id"]?>"><?=$pegawai["nama"]?></a></td>
                    <td><?php echo $pegawai["jenis_kelamin"]?></td>
                    <td><?php echo $pegawai["alamat"] ?></td>
                    <td>
                        <a href="form-edit.php?id=<?=$pegawai["id"]?>">Edit</a> | 
                        <a href="delete.php?id=<?=$pegawai["id"]?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>