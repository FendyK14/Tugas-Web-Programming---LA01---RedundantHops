<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>BANATON | Kelola</title>
</head>
<body>
    <div class="header">
        <a href="home.php"><p id="logo">RedundantHops</p></a>
    </div>
    

    <table class="design_table">
        <tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Nomor Telepon</th>
            <th>Alamat Mahasiswa</th>
            <th>Aksi</th>
        </tr>


            <?php

                require('connect.php');
                $my_query = "SELECT * FROM mahasiswa";
                $records = mysqli_query($connection, $my_query);
            
                if($records){
                    while($row = mysqli_fetch_array($records)){
                        echo "<tr>";
                        echo "<td scope='col'>{$row['nomor_induk_mhs']}</th>";   
                        echo "<td scope='col'>{$row['nama_mhs']}</th>";
                        echo "<td scope='col'>{$row['nomor_telp']}</th>";
                        echo "<td scope='col'>{$row['alamat_mhs']}</th>";
                        echo "<td scope='col'><a href='form_update.php?request_update_by_nim=$row[nomor_induk_mhs]'>Ubah</a>  
                                <a href='delete.php?request_delete_by_nim=$row[nomor_induk_mhs]'>Hapus</a></th>";
                        echo "</tr>";
                    }
                }else{
                    echo "Tidak ada data!";
                }
            ?>

    </table>

    <div class="tambah_hal">
        <a href="form_insert.php"><button>Tambah</button></a>
    </div>
    <br><br>

    <div class="footer">
        <div class="logo_footer">
           <a href="home.php"><p id="logo">RedundantHops</p></a>
        </div>
        <div class="info_kontak">
            <p id="no"><b>WhatsApp: </b>+6285278956743</p>
            <p id="ig"><b>IG: </b>@redundant_hops</p>
            <p id="line"><b>Line: </b>redundant_hops</p>
            <p id="gmail"><b>Gmail: </b>redun21@gmail.com</p>
        </div>
    </div>
    
</body>
</html>