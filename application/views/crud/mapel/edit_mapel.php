<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center justify-center mx-auto bg-slate-50 h-5/6">
        <div class="p-5 bg-white border rounded-lg shadow-md">
            <h2 class="pb-3 text-2xl text-center border-b">Edit Data Mapel</h2>
            <div class="my-3 w-96">
                <?php echo form_open('mapel/updateMapel'); ?>
                <input type="hidden" name="id_mapel" value="<?php echo $mapel->id_mapel; ?>">
                <div class="flex flex-col mb-3">
                    <label for="kd_mapel" class="mb-3 text-lg font-medium">Kode Mapel</label>
                    <input type="text" name="kd_mapel" class="px-1 py-2 border rounded" value="<?php echo $mapel->kd_mapel; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="nama_mapel" class="mb-3 text-lg font-medium">Nama Mapel</label>
                    <input type="text" id="nama_mapel" name="nama_mapel" class="px-1 py-2 border rounded" value="<?php echo $mapel->nama_mapel; ?>">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="id_kelas" class="mb-3 text-lg font-medium">Nama Kelas</label>
                    <select name="id_kelas" id="id_kelas" class="px-2 py-3 border rounded" required>
                        <?php foreach ($kelas as $key => $data) : ?>
                            <option value="<?= $data->id_kelas ?>"><?= $data->nama_kelas ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="flex flex-col mb-3">
                    <label for="id_guru" class="mb-3 text-lg font-medium">Nama Guru</label>
                    <select name="id_guru" id="id_guru" class="px-2 py-3 border rounded" required>
                        <?php foreach ($guru as $key => $data) : ?>
                            <option value="<?= $data->id_guru ?>"><?= $data->nama_guru ?></option>
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