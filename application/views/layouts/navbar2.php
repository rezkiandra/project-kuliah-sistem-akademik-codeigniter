<div class="flex flex-row uppercase shadow-md bg-gradient-to-r from-gray-600 to-gray-700 py-7">
    <div class="container flex items-center justify-between mx-auto">
        <div class="flex flex-row items-center justify-center gap-2 navbar-brand">
            <svg class="text-gray-50 hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            </svg>
            <a href="<?php echo base_url('webadmin') ?>" class="text-2xl font-medium hover:text-gray-400 text-gray-50">SIAKAD</a>
        </div>
        <div class="flex items-center justify-center gap-12 navbar-items">
            <a href="<?php echo base_url('webadmin') ?>" class="font-medium text-md hover:text-gray-400 text-gray-50">Dashboard</a>
            <button id="tableLink" data-dropdown-toggle="table" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium uppercase border-b border-gray-100 text-gray-50 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 md:w-auto">
                Data Table
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="table" class="z-10 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="<?php echo base_url('webadmin/kelas') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Kelas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('webadmin/jabatan') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Jabatan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('webadmin/mapel') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Mapel</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('webadmin/siswa') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Siswa</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('webadmin/guru') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Guru</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('webadmin/staff') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Staff</a>
                    </li>
                </ul>
            </div>
            <button id="laporanLink" data-dropdown-toggle="laporan" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium uppercase border-b border-gray-100 text-gray-50 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:p-0 md:w-auto">
                Cetak Laporan
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="laporan" class="z-10 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="<?php echo base_url('cetaktable/kelasBiasa') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Kelas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cetaktable/jabatanBiasa') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Jabatan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cetaktable/mapelBiasa') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Mapel</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cetaktable/siswaBiasa') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Siswa</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cetaktable/guruBiasa') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Guru</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cetaktable/staffBiasa') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Table Staff</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cetaktable/dashboard') ?>" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100">Dashboard</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo base_url('login/logout') ?>" class="font-medium text-md hover:text-gray-400 text-gray-50" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
        </div>
    </div>
</div>