<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Data Products</h1>
        <div class="mb-4">
            <a href="/produk/create" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                + Add Products
            </a>
        </div>

        <div class="bg-white rounded shadow p-4">
            <table id="produkTable" class="stripe hover w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="text-left py-2 px-3">ID</th>
                        <th class="text-left py-2 px-3">Name</th>
                        <th class="text-left py-2 px-3">Proce</th>
                        <th class="text-left py-2 px-3">Category</th>
                        <th class="text-left py-2 px-3">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#produkTable').DataTable({
                ajax: "http://localhost:8080/produk/ajaxlist",
                columns: [
                    { data: "id_produk" },
                    { data: "nama_produk" },
                    { data: "harga" },
                    { data: "nama_kategori" },
                    { 
                        data: "id_produk",
                        render: function(data) {
                            return `
                                <a href="/produk/edit/${data}" class="text-blue-600 hover:underline">Edit</a> |
                                <a href="/produk/delete/${data}" onclick="return confirm('Hapus?')" class="text-red-600 hover:underline">Delete</a>
                            `;
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html>
