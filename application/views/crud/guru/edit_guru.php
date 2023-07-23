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
            <h2 class="pb-3 text-2xl text-center border-b">Edit Data Guru</h2>
            <div class="my-3 w-96">
                <?php echo form_open('guru/updateGuru'); ?>
                <input type="hidden" name="id_guru" value="<?php echo $guru->id_guru; ?>">
                <div class="flex flex-col mb-3">
                    <label for="nip" class="mb-3 text-lg font-medium">Nomor Induk Pegawai (NIP)</label>
                    <input type="text" name="nip" class="px-1 py-2 border rounded" value="<?php echo $guru->nip; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="nama_guru" class="mb-3 text-lg font-medium">Nama Guru</label>
                    <input type="text" id="nama_guru" name="nama_guru" class="px-1 py-2 border rounded" value="<?php echo $guru->nama_guru; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="alamat" class="mb-3 text-lg font-medium">Alamat Guru</label>
                    <input type="text" id="alamat" name="alamat" class="px-1 py-2 border rounded" value="<?php echo $guru->alamat; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="jenkel" class="mb-3 text-lg font-medium">Jenis Kelamin</label>
                    <select name="jenkel" id="jenkel" class="px-2 py-3 border rounded" required>
                        <option value="<?= $guru->jenkel ?>"><?= $guru->jenkel ?></option>
                        <?php if ($guru->jenkel == 'Laki-laki') : ?>
                            <option value="Perempuan">Perempuan</option>
                        <?php endif; ?>
                        <?php if ($guru->jenkel == 'Perempuan') : ?>
                            <option value="Laki-laki">Laki-laki</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="flex flex-col mb-3">
                    <label for="id_jabatan" class="mb-3 text-lg font-medium">Nama Jabatan</label>
                    <select name="id_jabatan" id="id_jabatan" class="px-2 py-3 border rounded" required>
                        <option disabled value="<?= $guru->id_jabatan ?>"><?= $guru->nama_jabatan ?></option>
                        <?php foreach ($jabatan as $key => $data) : ?>
                            <option value="<?= $data->id_jabatan ?>"><?= $data->nama_jabatan ?></option>
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