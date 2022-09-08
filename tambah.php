<?php
require 'function.php';

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>alert('Ujian berhasil ditambah'); document.location.href = 'index.php';</script>";
    }
    else{
        echo "<script>alert('Ujian gagal ditambah'); document.location.href = 'index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ujian</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama_namep">Mapel: </label>
                <input type="text" name="nama_mapel" id="nama_mapel" required>
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="kelas">Kelas: </label>
                <input type="text" name="kelas" id="kelas">
            </li>
            <li>
                <label for="tanggal_ujian">Tanggal: </label>
                <input type="text" name="tanggal_ujian" id="tanggal_ujian">
            </li>
            <li>
                <label for="durasi_ujian">Durasi: </label>
                <input type="text" name="durasi_ujian" id="durasi_ujian">
            </li>
            <button type="submit" name="submit">Tambah Ujian</button>
        </ul>
    </form>
</body>
</html>