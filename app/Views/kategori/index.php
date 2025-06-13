<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Data Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">

    <div class="w-full max-w-4xl bg-white rounded shadow p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Data Category</h1>

        <div class="mb-4 text-left">
            <a href="/kategori/create" 
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
               + Add Category
            </a>
        </div>

        <table class="min-w-full border border-gray-300 rounded overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-4 text-left border-b border-gray-300">ID</th>
                    <th class="py-3 px-4 text-left border-b border-gray-300">Nama</th>
                    <th class="py-3 px-4 text-left border-b border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($kategori as $k): ?>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b border-gray-300"><?= $k['id_kategori'] ?></td>
                    <td class="py-2 px-4 border-b border-gray-300"><?= $k['nama_kategori'] ?></td>
                    <td class="py-2 px-4 border-b border-gray-300">
                        <a href="/kategori/edit/<?= $k['id_kategori'] ?>" 
                           class="text-blue-600 hover:underline mr-2">Edit</a> |
                        <a href="/kategori/delete/<?= $k['id_kategori'] ?>" 
                           onclick="return confirm('Hapus?')" 
                           class="text-red-600 hover:underline ml-2">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-6 text-center">
            <a href="/produk" class="text-blue-600 hover:underline">To Products data</a>
        </div>
    </div>

</body>
</html>
