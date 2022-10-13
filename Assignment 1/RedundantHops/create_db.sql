CREATE DATABASE data_mahasiswa;

CREATE TABLE mahasiswa(
	nomor_induk_mhs VARCHAR (248),
    nama_mhs VARCHAR (248),
    nomor_telp VARCHAR (248),
    alamat_mhs VARCHAR (248)
);

-- data dummy
INSERT INTO mahasiswa (nomor_induk_mhs, nama_mhs, nomor_telp, alamat_mhs)
VALUES ('2440057893', 'Luki Luki', '0852 7434 3991', 'Jl. Tj. Duren Timur'),
('2440056767', 'Andi', '0852 7678 9876', 'Jl. Bintang'),
('2440054323', 'Vegapunk', '0812 5647 8899', 'Jl. Egg Head');