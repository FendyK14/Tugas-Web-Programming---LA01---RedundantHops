
<?php

    require ("connect.php");
    $nim = $_POST['nim_insert'];
    $nama = $_POST['nama_insert'];
    $nomor = $_POST['nomor_insert'];
    $alamat = $_POST['alamat_insert'];
    
    $my_query = "INSERT INTO mahasiswa (nomor_induk_mhs, nama_mhs, nomor_telp, alamat_mhs) VALUES 
    ('$nim', '$nama', '$nomor', '$alamat')";
    
    mysqli_query($connection, $my_query);
    header("Location: manage.php");
?>