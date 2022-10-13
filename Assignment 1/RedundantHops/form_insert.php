<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Tambah | Create</title>
</head>
<body>
    <div class="header">
        <a href="home.php"><p id="logo">RedundantHops</p></a>
    </div>
    
    <div class="sub_form_title">
        Penambahan Jadwal
    </div>

    <form action="insert.php" method="post">
        <div class="form_style">
            <div class="nim">
                <div class="label_nim">
                    <label>NIM</label>
                </div>
                <input placeholder="Masukkan NIM Anda" type="text" name="nim_insert" required>
            </div>

            <div class="nama">
                <div class="label_nama">
                    <label>Nama Mahasiswa</label>
                </div>
                <input placeholder="Masukkan nama Anda" type="text" name="nama_insert" required>
            </div>


            <div class="nomor">
                <div class="label_nomor">
                    <label>Nomor Telepon</label>
                </div>
                <input placeholder="Masukkan nomor telepon Anda" type="text" name="nomor_insert" required>
            </div>

            <div class="alamat">
                <div class="label_alamat">
                    <label>Alamat Mahasiswa</label>
                </div>
                <input placeholder="Masukkan alamat Anda" type="text" name="alamat_insert" required>
            </div>

            <input type="submit" value="Tambah" id="form_button">
        </div>
    </form>

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