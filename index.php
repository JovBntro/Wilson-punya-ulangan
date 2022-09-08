<?php
require 'function.php';
$ujian = query("SELECT * FROM tb_ujian");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian</title>
</head>
<body>
    <a href="tambah.php">Tambah Ujian</a>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Nomor</th>
            <th>Aksi</th>
            <th>Mapel</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th>Durasi</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($ujian as $rows):?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="ubah.php?id_ujian=<?= $rows["id_ujian"];?>">Ubah Data</a> |
                    <a href="hapus.php?id_ujian=<?= $rows["id_ujian"];?>" >Hapus Data</a>
                </td>
                <td><?= $rows["nama_mapel"];?></td>
                <td><?= $rows["jurusan"]?></td>
                <td><?= $rows["kelas"];?></td>
                <td><?= $rows["tanggal_ujian"];?></td>
                <td><?= $rows["durasi_ujian"];?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</body>
</html>