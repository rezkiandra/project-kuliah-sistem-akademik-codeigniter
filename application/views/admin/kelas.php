<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-slate-50">
    <div class="container px-10 py-3 mx-auto mt-10 mb-5 bg-white border rounded-lg shadow-md">
        <h2 class="text-3xl font-medium uppercase"><?= $title ?></h2>
    </div>
    <div class="container p-10 mx-auto bg-white border rounded-lg shadow-md">
        <a href="<?php echo base_url('kelas/inputKelas') ?>" class="px-4 py-2 font-medium uppercase bg-blue-400 rounded">Tambah Kelas</a>
        <a href="<?php echo base_url('cetaktable/guru') ?>" class="px-4 py-2 font-medium uppercase bg-orange-600 rounded">Cetak</a>
        <table id="myTable" class="w-screen display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kelas as $data) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->nama_kelas ?></td>
                        <td>
                            <a href="<?php echo base_url("kelas/editKelas/") . $data->id_kelas ?>" class="px-3 py-1 font-medium uppercase bg-yellow-400 rounded">Edit</a>
                            <a href="<?php echo base_url("kelas/hapusKelas/") . $data->id_kelas ?>" class="px-3 py-1 font-medium uppercase bg-red-500 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'colvis',
                'excel',
                'print'
            ]
        });
    </script>
</body>

</html>