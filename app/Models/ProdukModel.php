<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'Produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk', 'harga', 'id_kategori'];

    // JOIN ke tabel Kategori
    public function getProdukJoin()
    {
        return $this->select('Produk.*, Kategori.nama_kategori')
                    ->join('Kategori', 'Kategori.id_kategori = Produk.id_kategori')
                    ->findAll();
    }
}
