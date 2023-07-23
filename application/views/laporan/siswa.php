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
        <h2 class="text-2xl font-medium text-center uppercase"><?= $title ?></h2>
    </div>
    <div class="container p-10 mx-auto bg-white border rounded-lg shadow-md">
        <table id="myTable" class="w-screen display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($siswa as $data) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->nisn ?></td>
                        <td><?php echo $data->nama_siswa ?></td>
                        <td><?php echo $data->alamat ?></td>
                        <td><?php echo $data->jenkel ?></td>
                        <td><?php echo $data->nama_kelas ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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

        window.print();
    </script>
</body>

</html>