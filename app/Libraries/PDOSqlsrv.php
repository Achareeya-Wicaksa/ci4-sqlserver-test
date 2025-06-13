<?php
namespace App\Libraries;

use PDO;
use PDOException;

class PDOSqlsrv {
    protected $pdo;

    public function __construct() {
        $dsn = "sqlsrv:Server=localhost\\SQLEXPRESS01;Database=TokoDB";
        $user = "sa";
        $pass = "sayakeren";

        try {
            $this->pdo = new PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Koneksi PDO gagal: " . $e->getMessage());
        }
    }

    public function getPDO() {
        return $this->pdo;
    }
}
