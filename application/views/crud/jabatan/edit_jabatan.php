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
            <h2 class="pb-3 text-2xl text-center border-b">Edit Data Jabatan</h2>

            <div class="my-3 w-96">
                <?php echo form_open('jabatan/updateJabatan'); ?>
                <input type="hidden" name="id_jabatan" value="<?php echo $jabatan->id_jabatan; ?>">
                <div class="flex flex-col mb-10">
                    <label for="nama_jabatan" class="mb-3 text-lg font-medium">Nama Jabatan</label>
                    <input type="text" id="nama_jabatan" name="nama_jabatan" class="px-1 py-2 border rounded" value="<?php echo $jabatan->nama_jabatan; ?>">
                </div>
                <input type="submit" value="Update" class="w-full py-2 font-medium text-gray-700 uppercase bg-yellow-500 rounded hover:opacity-80">
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>

</html>