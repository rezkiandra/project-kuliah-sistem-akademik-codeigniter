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
        <div class="flex flex-row items-center justify-center gap-2 navbar-brand">
            <svg class="text-gray-50 hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            </svg>
            <a href="<?php echo base_url() ?>" class="text-2xl font-medium hover:text-gray-400 text-gray-50">SIAKAD</a>
        </div>
        <div class="flex items-center justify-center gap-12 navbar-items">
            <a href="<?php echo base_url() ?>" class="font-medium text-md hover:text-gray-400 text-gray-50 <?php if ($title == 'Beranda') echo 'text-gray-700 bg-gray-50 px-4 rounded-lg py-1'  ?>">Beranda</a>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium uppercase border-b border-gray-100 text-gray-50 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 md:w-auto <?php if ($title == 'Latar Belakang' || $title == 'Tujuan') echo 'text-gray-700 bg-gray-50 px-4x rounded-lg py-1' ?>">
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
            <button id="dropdownNavbar2Link" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium uppercase border-b border-gray-100 text-gray-50 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 md:w-auto <?php if ($title == 'Profil') echo 'text-gray-700 bg-gray-50 px-4x rounded-lg py-1' ?>">
                Profil
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="dropdownNavbar2" class="z-10 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="<?php echo base_url('assets/pdf/My_CV.pdf') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Download CV</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('web/profil') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Profil Sekolah</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo base_url('web/login') ?>" class="font-medium text-md hover:text-gray-400 text-gray-50 <?php if ($title == 'Login') echo 'text-gray-700 bg-gray-50 px-4 rounded-lg py-1'  ?>">Login</a>
        </div>
    </div>
</div>