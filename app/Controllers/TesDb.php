<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TesDB extends Controller
{
    public function index()
    {
        try {
            $db = Database::connect();
            $query = $db->query("SELECT GETDATE() AS waktu");
            $row = $query->getRow();
            echo "Koneksi berhasil. Waktu di SQL Server: " . $row->waktu;
        } catch (\Exception $e) {
            echo "Koneksi gagal: " . $e->getMessage();
        }
    }
}
