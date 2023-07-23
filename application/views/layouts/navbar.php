<header class="py-5 flex justify-center items-center flex-col <?php if ($title == 'Beranda') echo 'bg-gradient-to-r from-blue-200 to-blue-400';
                                                                elseif ($title == 'Latar Belakang') echo 'bg-gradient-to-r from-sky-200 to-sky-400';
                                                                elseif ($title == 'Tujuan') echo 'bg-gradient-to-r from-slate-200 to-slate-400';
                                                                elseif ($title == 'Profil') echo 'bg-gradient-to-r from-emerald-200 to-emerald-400';
                                                                elseif ($title == 'Login') echo 'bg-gradient-to-r from-orange-200 to-orange-400'; ?>">
    <h1 class="text-5xl text-gray-800 mb-3 font-semibold">SMPN 1 SAMBAS</h1>
    <h5 class="text-xl text-gray-800 font-medium">Jl. Pendidikan, Tumuk Manggis, Kec. Sambas, Kabupaten Sambas, Kalimantan Barat 79463</h5>
</header>
<div class="bg-gradient-to-r from-gray-600 to-gray-700 py-4 shadow-md flex flex-row uppercase">
    <div class="mx-auto container flex justify-between items-center">
        <div class="navbar-brand">
            <a href="<?php echo base_url() ?>" class="text-2xl hover:text-gray-400 text-gray-50 font-medium">SIRADAR</a>
        </div>
        <div class="navbar-items flex justify-center items-center gap-12">
            <a href="<?php echo base_url() ?>" class="text-md hover:text-gray-400 text-gray-50 font-medium">Beranda</a>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-50 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-gray-400 md:p-0 font-medium flex items-center justify-between w-full md:w-auto uppercase">
                Laporan
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="<?php echo base_url('web/masalah') ?>" class="text-md hover:bg-gray-100 text-gray-700 block px-4 py-2">Latar Belakang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('web/tujuan') ?>" class="text-md hover:bg-gray-100 text-gray-700 block px-4 py-2">Tujuan</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo base_url('web/profil') ?>" class="text-md hover:text-gray-400 text-gray-50 font-medium">Profil</a>
            <a href="<?php echo base_url('web/login') ?>" class="text-md hover:text-gray-400 text-gray-50 font-medium">Login</a>
        </div>
    </div>
</div>