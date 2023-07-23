<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRADAR - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="mx-auto bg-slate-50 h-5/6 flex flex-col justify-center items-center">
        <div class="shadow-md border rounded-lg p-5 bg-white">
            <h2 class="text-2xl text-center border-b pb-3">Tambah Kelas Baru</h2>
            <div class="my-3 w-96">
                <form action="<?php echo base_url('kelas/tambahKelas') ?>" method="POST">
                    <div class="mb-10 flex flex-col">
                        <label for="nama_kelas" class="text-lg font-medium mb-3">Nama Kelas</label>
                        <input type="text" id="nama_kelas" name="nama_kelas" class="border rounded py-3 px-2" required autocomplete="off" autofocus>
                    </div>
                    <input type="submit" value="Tambah" class="w-full uppercase bg-blue-500 text-gray-700 font-medium rounded py-2 hover:opacity-80">
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>

</html>