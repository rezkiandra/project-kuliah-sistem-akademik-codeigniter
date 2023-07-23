<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-slate-50">
    <div class="container px-10 py-3 mx-auto mt-10 mb-3 bg-white border rounded-lg shadow-md">
        <h2 class="text-2xl font-medium text-center uppercase"><?= $title ?></h2>
    </div>
    <div class="container p-10 mx-auto bg-white border rounded-lg shadow-md">
        <table id="myTable" class="table display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Staff</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($staff as $data) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->nip ?></td>
                        <td><?php echo $data->nama_staff ?></td>
                        <td><?php echo $data->alamat ?></td>
                        <td><?php echo $data->jenkel ?></td>
                        <td><?php echo $data->nama_jabatan ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>