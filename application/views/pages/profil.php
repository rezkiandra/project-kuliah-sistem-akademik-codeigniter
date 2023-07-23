<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center justify-center mx-auto bg-gradient-to-r from-slate-200 to-slate-300 h-3/4">
        <div class="container grid grid-cols-3 gap-7 mb-7">
            <div class="py-10 border rounded-lg shadow-md px-7 bg-slate-100 h-72">
                <h1 class="mb-10 font-serif text-3xl font-medium text-center text-gray-700">Akreditasi A</h1>
                <h3 class="font-serif text-xl text-center text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nostrum similique voluptatum voluptate repellat. Cupiditate delectus iure sunt ad sint!</h3>
            </div>
            <div class="py-10 border rounded-lg shadow-md px-7 bg-slate-100 h-72">
                <h1 class="mb-10 font-serif text-3xl font-medium text-center text-gray-700">Fasilitas Memadai</h1>
                <h3 class="font-serif text-xl text-center text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nostrum similique voluptatum voluptate repellat. Cupiditate delectus iure sunt ad sint!</h3>
            </div>
            <div class="py-10 border rounded-lg shadow-md px-7 bg-slate-100 h-72">
                <h1 class="mb-10 font-serif text-3xl font-medium text-center text-gray-700">Sekolah Sehat Tingkat Nasional</h1>
                <h3 class="font-serif text-xl text-center text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nostrum similique voluptatum voluptate repellat. Cupiditate delectus iure sunt ad sint!</h3>
            </div>
        </div>

        <div class="container grid grid-cols-4 gap-5">
            <div class="flex flex-col items-center justify-center h-48 py-10 border rounded-lg shadow-md px-7 bg-slate-100">
                <h1 class="mb-2 font-serif text-3xl font-medium text-center text-gray-700"><?= $guru ?></h1>
                <h1 class="font-serif text-3xl font-medium text-center text-gray-700">Tenaga Guru</h1>
            </div>
            <div class="flex flex-col items-center justify-center h-48 py-10 border rounded-lg shadow-md px-7 bg-slate-100">
                <h1 class="mb-2 font-serif text-3xl font-medium text-center text-gray-700"><?= $staff ?></h1>
                <h1 class="font-serif text-3xl font-medium text-center text-gray-700">Tenaga Staff</h1>
            </div>
            <div class="flex flex-col items-center justify-center h-48 py-10 border rounded-lg shadow-md px-7 bg-slate-100">
                <h1 class="mb-2 font-serif text-3xl font-medium text-center text-gray-700"><?= $kelas ?></h1>
                <h1 class="font-serif text-3xl font-medium text-center text-gray-700">Ruang Kelas</h1>
            </div>
            <div class="flex flex-col items-center justify-center h-48 py-10 border rounded-lg shadow-md px-7 bg-slate-100">
                <h1 class="mb-2 font-serif text-3xl font-medium text-center text-gray-700"><?= $siswa ?></h1>
                <h1 class="font-serif text-3xl font-medium text-center text-gray-700">Siswa</h1>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>

</html>