<?php

class Guru extends DataBase {
    public function index() {
        $dataGuru =  mysqli_query($this->koneksi, "SELECT * FROM guru");
        return $dataGuru;
    }

    public function create($nip, $nama, $alamat) {
        mysqli_query($this->koneksi, "INSERT INTO guru VALUES (null, '$nip', '$nama', '$alamat')");
        
        return mysqli_affected_rows($this->koneksi);
    }

    public function edit($no) {
        $dataGuru =  mysqli_query($this->koneksi, "SELECT * FROM guru WHERE no= '$no'");
        return $dataGuru;
    }

    public function update($no, $nip, $nama, $alamat) {
        mysqli_query($this->koneksi, "UPDATE guru SET 
        nip = '$nip',
        nama = '$nama', 
        alamat = '$alamat' 
        WHERE no = '$no'");

        return mysqli_affected_rows($this->koneksi);
    }

    public function show($no) {
        $dataGuru =  mysqli_query($this->koneksi, "SELECT * FROM guru  WHERE no= '$no'");
        return $dataGuru;
    }

    public function delete($no) {
        mysqli_query($this->koneksi, "DELETE FROM guru WHERE no='$no'");

        return mysqli_affected_rows($this->koneksi);
    }
}