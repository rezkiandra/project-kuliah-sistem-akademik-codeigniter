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
            <h2 class="text-2xl text-center border-b pb-3">Tambah Siswa Baru</h2>
            <div class="my-3 w-96">
                <form action="<?php echo base_url('siswa/tambahSiswa') ?>" method="POST">
                    <div class="mb-3 flex flex-col">
                        <label for="nisn" class="text-lg font-medium mb-3">NISN</label>
                        <input type="text" id="nisn" name="nisn" class="border rounded py-3 px-2" required autocomplete="off" placeholder="32021020xx">
                    </div>
                    <div class="mb-3 flex flex-col">
                        <label for="nama_siswa" class="text-lg font-medium mb-3">Nama Siswa</label>
                        <input type="text" id="nama_siswa" name="nama_siswa" class="border rounded py-3 px-2" required placeholder="Budi">
                    </div>
                    <div class="mb-3 flex flex-col">
                        <label for="alamat" class="text-lg font-medium mb-3">Alamat Siswa</label>
                        <input type="text" id="alamat" name="alamat" class="border rounded py-3 px-2" required placeholder="Dalam Kaum, Sambas">
                    </div>
                    <div class="mb-3 flex flex-col">
                        <label for="jenkel" class="text-lg font-medium mb-3">Jenis Kelamin</label>
                        <select name="jenkel" id="jenkel" class="border rounded py-3 px-2" required>
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 flex flex-col">
                        <label for="id_kelas" class="text-lg font-medium mb-3">Kelas</label>
                        <select name="id_kelas" id="id_kelas" class="border rounded py-3 px-2" required>
                            <option selected disabled>Pilih Kelas</option>
                            <?php foreach ($kelas as $key => $data) : ?>
                                <option value="<?= $data->id_kelas ?>"><?= $data->nama_kelas ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="submit" value="Tambah" class="w-full uppercase bg-blue-500 text-gray-700 font-medium rounded py-2 hover:opacity-80">
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>

</html>