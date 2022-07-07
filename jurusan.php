<?php
class Jurusan extends Database
{
    //menampilkan data jurusan ke index.php
    public function index()
    {
        $datajurusan = mysqli_query($this->koneksi, "select * from jurusan");

        return $datajurusan;
    }

    public function create($kode_jurusan, $jurusan)
    {
        mysqli_query($this->koneksi,
            "insert into jurusan values (null,'$kode_jurusan','$jurusan')"
        );

    }
    // memilih data jurusan yang akan diubah
    public function edit($id)
    {
        $datajurusan = mysqli_query($this->koneksi,
            "select * from jurusan  where id='$id'"
        );

        return $datajurusan;
    }
    // merubah data jurusan
    public function update($id, $kode_jurusan, $jurusan)
    {
        mysqli_query(
            $this->koneksi,
            "update jurusan set kode_jurusan='$kode_jurusan', jurusan='$jurusan' where id='$id'"
        );
    }
    // menampilkan data jurusan berdasarkan id
    public function show($id)
    {
        $datajurusan = mysqli_query($this->koneksi,
            "select * from jurusan where id='$id'"
        );

        return $datajurusan;
    }

    // menghapus data jurusan
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from jurusan where id='$id'"
        );

    }
}
