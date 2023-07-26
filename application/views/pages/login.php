<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-y-hidden">
    <div class="flex items-center justify-center mx-auto bg-gradient-to-r from-slate-200 to-slate-300 h-3/4">
        <div class="container grid w-6/12 grid-cols-2">
            <div class="flex flex-col items-center justify-center shadow-md p-7 bg-slate-100 h-96 bg-gradient-to-r from-gray-400 to-gray-600 ">
                <h1 class="mb-5 font-serif text-3xl font-medium text-center text-gray-100 uppercase">Login Akun</h1>
                <h1 class="font-serif text-2xl font-medium text-center text-gray-100">Masukkan Username dan Password</h1>
            </div>
            <div class="shadow-md p-7 bg-slate-100 h-96">
                <form action="<?php echo base_url('login/aksi_login') ?>" method="POST">
                    <div class="flex flex-col items-start justify-center mb-10">
                        <label for="username" class="mb-3 text-xl font-medium text-gray-500">Username</label>
                        <input type="text" name="username" id="username" placeholder="example" class="w-full px-2 py-3 text-xl rounded-lg" required>
                    </div>
                    <div class="flex flex-col items-start justify-center mb-10">
                        <label for="password" class="mb-3 text-xl font-medium text-gray-500">Password</label>
                        <input type="password" name="password" id="password" placeholder="******" class="w-full px-2 py-3 text-xl rounded-lg" required>
                    </div>
                    <div class="flex flex-col items-start justify-center mb-10">
                        <input type="submit" class="w-full px-2 py-3 text-xl font-medium text-gray-100 uppercase bg-blue-800 rounded hover:text-gray-700 hover:bg-blue-600" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>