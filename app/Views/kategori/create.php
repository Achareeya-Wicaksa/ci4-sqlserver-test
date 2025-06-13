<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Tambah Kategori</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow rounded p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Tambah Kategori</h1>

        <form action="/kategori/store" method="post" class="space-y-4">
            <div>
                <label class="block mb-1 font-medium">Nama Kategori</label>
                <input type="text" name="nama_kategori" required
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                    Simpan
                </button>
                <a href="/kategori" class="text-blue-600 hover:underline">Kembali</a>
            </div>
        </form>
    </div>

</body>
</html>
