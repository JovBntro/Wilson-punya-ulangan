<?php
require 'function.php';
$id = $_GET["id_ujian"];
$ujian = query("SELECT * FROM tb_ujian WHERE id_ujian = $id")[0];

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "<script>alert('Data berhasil diubah'); document.location.href = 'index.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah'); document.location.href = 'index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <input type="hidden" name="id_ujian" value="<?= $ujian["id_ujian"];?>">
            <li>
                <label for="nama_namep">Mapel: </label>
                <input type="text" name="nama_mapel" id="nama_mapel" required value="<?= $ujian["nama_mapel"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $ujian["jurusan"];?>">
            </li>
            <li>
                <label for="kelas">Kelas: </label>
                <input type="text" name="kelas" id="kelas" value="<?= $ujian["kelas"];?>">
            </li>
            <li>
                <label for="tanggal_ujian">Tanggal: </label>
                <input type="text" name="tanggal_ujian" id="tanggal_ujian" value="<?= $ujian["tanggal_ujian"];?>">
            </li>
            <li>
                <label for="durasi_ujian">Durasi: </label>
                <input type="text" name="durasi_ujian" id="durasi_ujian" value="<?= $ujian["durasi_ujian"];?>">
            </li>
            <button type="submit" name="submit">Ubah Data</button>
        </ul>
    </form>
</body>
</html>