CREATE DATABASE IF NOT EXISTS redlock;

USE redlock;

CREATE TABLE users (
    ID INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nama CHAR(50) NOT NULL,
    Alamat CHAR(50) NOT NULL,
    Jabatan CHAR(50) NOT NULL
);

INSERT INTO users (ID, Nama, Alamat, Jabatan) VALUES
(0001, 'Joko', 'Jalan Anggrek', 'Ketua'),
(0002, 'Jamal', 'Jalan Syahdan', 'Wakil'),
(0003, 'Juki', 'Jalan Kijang', 'Anggota');
