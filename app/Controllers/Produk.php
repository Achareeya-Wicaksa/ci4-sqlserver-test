<?php
namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;
use CodeIgniter\Controller;

class Produk extends Controller
{
    public function index()
    {
        return view('produk/index');
    }

    public function ajaxlist()
    {
        $model = new ProdukModel();
        return $this->response->setJSON(['data' => $model->getProdukJoin()]);
    }

    public function list()
    {
        $model = new ProdukModel();
        $data = ['produk' => $model->getProdukJoin()];
        return view('produk/list', $data);
    }

 public function create()
{
    $kategoriModel = new \App\Models\KategoriModel();
    $data['kategori'] = $kategoriModel->findAll();
    return view('produk/create', $data);
}


    public function store()
    {
        $model = new ProdukModel();
        $model->insert([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga'       => $this->request->getPost('harga'),
            'id_kategori' => $this->request->getPost('id_kategori')
        ]);
        return redirect()->to('/produk');
    }

    public function edit($id)
{
    $produkModel = new \App\Models\ProdukModel();
    $kategoriModel = new \App\Models\KategoriModel();

    $data['produk'] = $produkModel->find($id);
    $data['kategori'] = $kategoriModel->findAll();

    return view('produk/edit', $data);
}

public function update($id)
{
    $produkModel = new \App\Models\ProdukModel();
    $produkModel->update($id, [
        'nama_produk' => $this->request->getPost('nama_produk'),
        'harga' => $this->request->getPost('harga'),
        'id_kategori' => $this->request->getPost('id_kategori'),
    ]);
    return redirect()->to('/produk');
}


    public function delete($id)
    {
        $model = new ProdukModel();
        $model->delete($id);
        return redirect()->to('/produk');
    }
}
