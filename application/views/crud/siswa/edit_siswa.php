<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRADAR - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center justify-center mx-auto bg-slate-50 h-5/6">
        <div class="p-5 bg-white border rounded-lg shadow-md">
            <h2 class="pb-3 text-2xl text-center border-b">Edit Data Siswa</h2>

            <div class="my-3 w-96">
                <?php echo form_open('siswa/updateSiswa'); ?>
                <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa; ?>">
                <div class="flex flex-col mb-3">
                    <label for="nisn" class="mb-3 text-lg font-medium">NISN</label>
                    <input type="text" id="nisn" name="nisn" class="px-1 py-2 border rounded" value="<?php echo $siswa->nisn; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="nama_siswa" class="mb-3 text-lg font-medium">Nama Siswa</label>
                    <input type="text" id="nama_siswa" name="nama_siswa" class="px-1 py-2 border rounded" value="<?php echo $siswa->nama_siswa; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="alamat" class="mb-3 text-lg font-medium">Alamat Siswa</label>
                    <input type="text" id="alamat" name="alamat" class="px-1 py-2 border rounded" value="<?php echo $siswa->alamat; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="jenkel" class="mb-3 text-lg font-medium">Jenis Kelamin</label>
                    <select name="jenkel" id="jenkel" class="px-2 py-3 border rounded" required>
                        <option value="<?= $siswa->jenkel ?>"><?= $siswa->jenkel ?></option>
                        <?php if ($siswa->jenkel == 'Laki-laki') : ?>
                            <option value="Perempuan">Perempuan</option>
                        <?php endif; ?>
                        <?php if ($siswa->jenkel == 'Perempuan') : ?>
                            <option value="Laki-laki">Laki-laki</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="flex flex-col mb-3">
                    <label for="id_kelas" class="mb-3 text-lg font-medium">Nama Kelas</label>
                    <select name="id_kelas" id="id_kelas" class="px-2 py-3 border rounded" required>
                        <option disabled value="<?= $siswa->id_kelas ?>"><?= $siswa->nama_kelas ?></option>
                        <?php foreach ($kelas as $key => $data) : ?>
                            <option value="<?= $data->id_kelas ?>"><?= $data->nama_kelas ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <input type="submit" value="Update" class="w-full py-2 font-medium text-gray-700 uppercase bg-yellow-500 rounded hover:opacity-80">
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>

</html>