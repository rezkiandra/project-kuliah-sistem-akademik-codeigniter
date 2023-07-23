<header class="py-5 flex justify-center items-center flex-col <?php if ($title == 'Beranda') echo 'bg-gradient-to-r from-blue-200 to-blue-400';
                                                                elseif ($title == 'Latar Belakang') echo 'bg-gradient-to-r from-sky-200 to-sky-400';
                                                                elseif ($title == 'Tujuan') echo 'bg-gradient-to-r from-slate-200 to-slate-400';
                                                                elseif ($title == 'Profil') echo 'bg-gradient-to-r from-emerald-200 to-emerald-400';
                                                                elseif ($title == 'Login') echo 'bg-gradient-to-r from-orange-200 to-orange-400'; ?>">
    <h1 class="mb-3 text-5xl font-semibold text-gray-800">SMPN 1 SAMBAS</h1>
    <h5 class="text-xl font-medium text-gray-800">Jl. Pendidikan, Tumuk Manggis, Kec. Sambas, Kabupaten Sambas, Kalimantan Barat 79463</h5>
</header>
<div class="flex flex-row py-4 uppercase shadow-md bg-gradient-to-r from-gray-600 to-gray-700">
    <div class="container flex items-center justify-between mx-auto">
        <div class="navbar-brand">
            <a href="<?php echo base_url() ?>" class="text-2xl font-medium hover:text-gray-400 text-gray-50">SIAKAD</a>
        </div>
        <div class="flex items-center justify-center gap-12 navbar-items">
            <a href="<?php echo base_url() ?>" class="font-medium text-md hover:text-gray-400 text-gray-50">Beranda</a>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium uppercase border-b border-gray-100 text-gray-50 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 md:w-auto">
                Laporan
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="dropdownNavbar" class="z-10 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="<?php echo base_url('web/masalah') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Latar Belakang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('web/tujuan') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Tujuan</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo base_url('web/profil') ?>" class="font-medium text-md hover:text-gray-400 text-gray-50">Profil</a>
            <a href="<?php echo base_url('web/login') ?>" class="font-medium text-md hover:text-gray-400 text-gray-50">Login</a>
        </div>
    </div>
</div>