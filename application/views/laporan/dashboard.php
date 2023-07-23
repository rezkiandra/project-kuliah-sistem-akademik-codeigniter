<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center justify-start h-screen mx-auto bg-gradient-to-r from-slate-50 to-slate-100">
        <div class="container grid grid-cols-1">
            <div class="container px-10 py-5 mx-auto mt-10 mb-5 bg-white border rounded-lg shadow-md">
                <h2 class="text-3xl font-medium text-center uppercase"><?= $title ?></h2>
            </div>
        </div>
        <div class="container grid grid-cols-5 gap-5">
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $kelas ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Kelas</h3>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $jabatan ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Jabatan</h3>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $siswa ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Siswa</h3>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $guru ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Guru</h3>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $staff ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Staff</h3>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>