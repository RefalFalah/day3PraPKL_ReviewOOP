<?php
    include "../database.php";
    $guru = new Guru;

    if (isset($_POST["tambah"])) {
        $nip = $_POST["nip"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];

        if ($guru->create($nip, $nama, $alamat) > 0) {
            echo("<script>
                    alert('Data berhasil ditambah!');
                    document.location.href='index.php';
                </script>");
        }else {
            echo("<script>
                    alert('Data berhasil ditambah!');
                    document.location.href='index.php';
                </script>");
        }
    }

    if (isset($_POST["edit"])) {
        $no = $_POST["no"];
        $nip = $_POST["nip"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        
        if ($guru->update($no, $nip, $nama, $alamat) > 0) {
            echo("<script>
                    alert('Data berhasil diedit!');
                    document.location.href='index.php';
                </script>");
        }else {
            echo("<script>
                    alert('Data berhasil diedit!');
                    document.location.href='index.php';
                </script>");
        }
    }

    $no = $_GET["no"];
    if ($guru->delete($no)) {
        echo("<script>
                alert('Data berhasil dihapus!');
                document.location.href='index.php';
            </script>");
    }else {
        echo("<script>
                alert('Data berhasil dihapus!');
                document.location.href='index.php';
            </script>");
    }
?>