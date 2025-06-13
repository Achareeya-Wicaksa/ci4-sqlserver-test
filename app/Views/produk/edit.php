<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow rounded p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit Produk</h1>
        
        <form action="/produk/update/<?= $produk['id_produk'] ?>" method="post" class="space-y-4">
            
            <div>
                <label class="block mb-1 font-medium">Nama Produk</label>
                <input type="text" name="nama_produk" value="<?= $produk['nama_produk'] ?>" required 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label class="block mb-1 font-medium">Harga</label>
                <input type="number" name="harga" value="<?= $produk['harga'] ?>" required
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label class="block mb-1 font-medium">Kategori</label>
                <select name="id_kategori" required 
                        class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php foreach ($kategori as $kat): ?>
                        <option value="<?= $kat['id_kategori'] ?>" 
                            <?= $kat['id_kategori'] == $produk['id_kategori'] ? 'selected' : '' ?>>
                            <?= $kat['nama_kategori'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                    Update
                </button>
                <a href="/produk" class="text-blue-600 hover:underline">Kembali ke Data Produk</a>
            </div>
        </form>
    </div>

</body>
</html>
