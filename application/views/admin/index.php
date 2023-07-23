<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center justify-start mx-auto bg-gradient-to-r from-slate-50 to-slate-100 h-5/6">
        <div class="container grid grid-cols-1">
            <div class="container px-10 mx-auto mt-10 mb-5 bg-white border rounded-lg shadow-md py-7">
                <h2 class="text-3xl font-medium uppercase"><?= $title ?></h2>
            </div>
        </div>
        <div class="container grid grid-cols-3 gap-5">
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $kelas ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Jumlah Kelas</h3>
                <a href="<?php echo base_url('webadmin/kelas') ?>" class="py-1 font-medium text-center uppercase rounded-lg shadow-md px-14 text-gray-50 bg-slate-500 hover:opacity-80">Detail</a>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $jabatan ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Jumlah Jabatan</h3>
                <a href="<?php echo base_url('webadmin/jabatan') ?>" class="py-1 font-medium text-center uppercase rounded-lg shadow-md px-14 text-gray-50 bg-slate-500 hover:opacity-80">Detail</a>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $mapel ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Jumlah Mata Pelajaran</h3>
                <a href="<?php echo base_url('webadmin/mapel') ?>" class="py-1 font-medium text-center uppercase rounded-lg shadow-md px-14 text-gray-50 bg-slate-500 hover:opacity-80">Detail</a>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $siswa ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Jumlah Siswa</h3>
                <a href="<?php echo base_url('webadmin/siswa') ?>" class="py-1 font-medium text-center uppercase rounded-lg shadow-md px-14 text-gray-50 bg-slate-500 hover:opacity-80">Detail</a>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $guru ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Jumlah Guru</h3>
                <a href="<?php echo base_url('webadmin/guru') ?>" class="py-1 font-medium text-center uppercase rounded-lg shadow-md px-14 text-gray-50 bg-slate-500 hover:opacity-80">Detail</a>
            </div>
            <div class="flex flex-col items-center justify-center h-48 p-10 bg-white border rounded-lg shadow-md">
                <h1 class="mb-3 font-serif text-3xl font-medium text-center text-gray-700 capitalize"><?= $staff ?></h1>
                <h3 class="mb-5 font-serif text-2xl font-medium text-center text-gray-700 capitalize">Jumlah Staff</h3>
                <a href="<?php echo base_url('webadmin/staff') ?>" class="py-1 font-medium text-center uppercase rounded-lg shadow-md px-14 text-gray-50 bg-slate-500 hover:opacity-80">Detail</a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>

</html>