<?php
$serverName = "localhost\\SQLEXPRESS01"; // Sesuaikan dengan instance SQL Server kamu
$database = "TokoDB";
$username = "sa";
$password = "sayakeren";

try {
    $dsn = "sqlsrv:Server=$serverName;Database=$database";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Koneksi ke SQL Server berhasil! 🎉";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
