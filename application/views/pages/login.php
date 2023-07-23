<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRADAR - <?php echo $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="mx-auto bg-gradient-to-r from-slate-200 to-slate-300 h-3/4 flex justify-center items-center">
        <div class="container grid grid-cols-2 w-6/12">
            <div class="shadow-md p-7 bg-slate-100 h-96 flex flex-col justify-center items-center bg-gradient-to-r from-gray-400 to-gray-600 ">
                <h1 class="font-serif mb-5 text-center text-gray-100 text-3xl font-medium uppercase">Login Akun</h1>
                <h1 class="font-serif text-center text-gray-100 text-2xl font-medium">Masukkan Username dan Password</h1>
            </div>
            <div class="shadow-md p-7 bg-slate-100 h-96">
                <form action="<?php echo base_url('login/aksi_login') ?>" method="POST">
                    <div class="mb-10 flex flex-col justify-center items-start">
                        <label for="username" class="text-gray-500 text-xl font-medium mb-3">Username</label>
                        <input type="text" name="username" id="username" placeholder="example" class="rounded-lg px-2 py-3 text-xl w-full" required>
                    </div>
                    <div class="mb-10 flex flex-col justify-center items-start">
                        <label for="password" class="text-gray-500 text-xl font-medium mb-3">Password</label>
                        <input type="password" name="password" id="password" placeholder="******" class="rounded-lg px-2 py-3 text-xl w-full" required>
                    </div>
                    <div class="mb-10 flex flex-col justify-center items-start">
                        <input type="submit" class="bg-blue-800 text-gray-100 hover:text-gray-700 hover:bg-blue-600 font-medium rounded px-2 py-3 text-xl w-full uppercase" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>