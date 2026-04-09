<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Pegawai</h1>

    <form method="POST" action="insert.php">

        <label>Nama</label><br>
        <input type="text" name="nama" />
        <br><br>

        <label>Tempat Lahir</label><br>
        <input type="text" name="tempat_lahir" />
        <br><br>

        <label>Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir" />
        <br><br>

        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin">
            <option value="laki-laki">Laki - Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat"></textarea>
        <br><br>

        <label>No Handphone</label><br>
        <input type="text" name="no_hp" />
        <br><br>

        <label>Status Pernikahan</label><br>
        <select name="status_pernikahan">
            <option value="menikah">Menikah</option>
            <option value="lajang">Lajang</option>
            <option value="cerai">Cerai</option>
        </select>
        <br><br>

        <button type="submit">Tambah Data</button>
        <button><a href="list.php">Kembali</a></button>
    </form>
</body>
</html>