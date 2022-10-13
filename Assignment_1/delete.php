<?php
    require ("connect.php");
    $nim_to_del = $_GET['request_delete_by_nim'];
    $my_query = "DELETE FROM mahasiswa WhERE nomor_induk_mhs = '$nim_to_del'";

    mysqli_query($connection, $my_query);
    header("Location: manage.php");
?>