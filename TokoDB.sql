CREATE DATABASE TokoDB;
GO

USE TokoDB;
GO

CREATE TABLE Kategori (
    id_kategori INT PRIMARY KEY IDENTITY,
    nama_kategori VARCHAR(100)
);

CREATE TABLE Produk (
    id_produk INT PRIMARY KEY IDENTITY,
    nama_produk VARCHAR(100),
    harga INT,
    id_kategori INT,
    FOREIGN KEY (id_kategori) REFERENCES Kategori(id_kategori)
);
