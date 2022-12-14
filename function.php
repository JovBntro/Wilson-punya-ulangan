<?php 
$conn = mysqli_connect("localhost", "root", "", "db_ujian");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $mapel = htmlspecialchars($data["nama_mapel"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $tanggal = htmlspecialchars($data["tanggal_ujian"]);
    $durasi = htmlspecialchars($data["durasi_ujian"]);
    $query = "INSERT INTO tb_ujian VALUES('', '$mapel', '$jurusan', '$kelas', '$tanggal', '$durasi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id_ujian"];
    $mapel = htmlspecialchars($data["nama_mapel"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $tanggal = htmlspecialchars($data["tanggal_ujian"]);
    $durasi = htmlspecialchars($data["durasi_ujian"]);
    $query = "UPDATE tb_ujian SET nama_mapel = '$mapel', jurusan = '$jurusan', kelas = '$kelas', tanggal_ujian = '$tanggal', durasi_ujian = '$durasi' WHERE id_ujian = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_ujian WHERE id_ujian = $id");
    return mysqli_affected_rows($conn);
}
?>