<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .relative-container {
        position: relative;
        width: fit-content;
        margin: auto;
      }
    </style>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">

  <div class="relative-container">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-gray-100 rounded-xl shadow-lg z-0"></div>

    <div class="flex gap-10 relative z-10">

      <a href="/produk" 
         class="w-48 h-48 bg-white border border-gray-300 rounded-lg shadow-sm flex items-center justify-center text-gray-800 text-xl font-semibold hover:shadow-md hover:border-blue-500 transition duration-300">
        Manage Produk
      </a>

      <a href="/kategori" 
         class="w-48 h-48 bg-white border border-gray-300 rounded-lg shadow-sm flex items-center justify-center text-gray-800 text-xl font-semibold hover:shadow-md hover:border-green-500 transition duration-300">
        Manage Kategori
      </a>

    </div>
  </div>

</body>
</html>
