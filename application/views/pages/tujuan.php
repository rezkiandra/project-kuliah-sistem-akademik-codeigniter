<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-y-hidden">
    <div class="flex flex-col items-center justify-center mx-auto bg-gradient-to-r from-slate-200 to-slate-300 h-3/4">
        <div class="container grid grid-cols-1 mb-5">
            <div class="h-32 p-10 border rounded-lg shadow-md bg-slate-100">
                <h1 class="mb-10 font-serif text-5xl font-medium text-center text-gray-700">Tujuan Aplikasi Dibuat</h1>
            </div>
        </div>
        <div class="container grid grid-cols-3 gap-5">
            <div class="flex flex-col items-center justify-center h-56 p-10 border rounded-lg shadow-md bg-slate-100">
                <h1 class="mb-5 font-serif text-3xl font-medium text-center text-gray-700 capitalize">Mengolah Data</h1>
                <h3 class="font-serif text-xl font-medium text-center text-gray-700">Untuk mengolah data akademis yang lama kemudian menggantinya dengan data akademis yang terbaru</h3>
            </div>
            <div class="flex flex-col items-center justify-center h-56 p-10 border rounded-lg shadow-md bg-slate-100">
                <h1 class="mb-5 font-serif text-3xl font-medium text-center text-gray-700 capitalize">Manajemen Data</h1>
                <h3 class="font-serif text-xl font-medium text-center text-gray-700">Untuk memanajemen data akademis yang sudah diolah kemudian memilahnya sesuai kurikulum yang terbaru</h3>
            </div>
            <div class="flex flex-col items-center justify-center h-56 p-10 border rounded-lg shadow-md bg-slate-100">
                <h1 class="mb-5 font-serif text-3xl font-medium text-center text-gray-700 capitalize">Mengintegrasikan Data</h1>
                <h3 class="font-serif text-xl font-medium text-center text-gray-700">Untuk mengintegrasikan data akademis yang sudah dipilah kemudian di simpan ke database agar mudah di maintenance</h3>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>

</html>