<?php
include("connection.php");

$query = mysqli_query($connection, "SELECT * FROM pegawai");
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);


?>

<html>
    <body>
        <h1>Data Pegawai</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <?php foreach($result as $index => $pegawai) : ?>
                <tr>
                    <td><?php echo $index+ 1?></td>
                    <td><?php echo $pegawai["nama"]?></td>
                    <td><?php echo $pegawai["jenis_kelamin"]?></td>
                    <td><?php echo $pegawai["alamat"] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>