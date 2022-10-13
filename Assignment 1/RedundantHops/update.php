<?php
// include database connection file
    include_once("connect.php");

    if (isset($_POST['request_update'])) {


        $nim =  $_REQUEST['nim_to_update'];
        $nama_mhs = $_REQUEST['nama_baru'];
        $nomor_telp =  $_REQUEST['nomor_baru'];
        $alamat_mhs = $_REQUEST['alamat_baru'];

        mysqli_query($connection, "UPDATE mahasiswa SET nama_mhs='$nama_mhs',nomor_telp='$nomor_telp', alamat_mhs='$alamat_mhs' WHERE nomor_induk_mhs='$nim'");

        header("Location: manage.php");
    }
?>