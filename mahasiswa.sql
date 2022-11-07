CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- insert jurusan--
insert into jurusan (kode,nama) values ("SI", "Sistem Informasi");

insert into jurusan (kode,nama) values ("IF", "Informatika");

-- insert mahasiswa--
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
values (1, "20241061", "Aulia S", "Perempuan", "Surabaya", "21 November 2002", "Jalan gsi");

insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
values (1, "202410101", "putri", "Perempuan", "Surabaya", "15 April 2002", "Jalan wiyung");

-- update mahasiswa--
update mahasiswa set tanggal_lahir = "2002-05-02" where id=2;

update mahasiswa set tanggal_lahir = "2002-11-21" where id=1;

--delete mahasiswa--
delete from mahasiswa shere id=2;