<?php
include '../database.php';
$jurusan1 = new Jurusan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $kode_jurusan = htmlspecialchars($_POST['kode_jurusan']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    if ($aksi == "create") {
        $jurusan1->create($kode_jurusan, $jurusan);
        header("location:index.php");
    } else if ($aksi == "update") {
        $jurusan1->update($id, $kode_jurusan, $jurusan);
        header("location:index.php");
    } else if ($aksi == "delete") {
        $jurusan1->delete($id);
        header("location:index.php");
    }
}
