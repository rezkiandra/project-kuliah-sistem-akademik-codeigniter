<div class="flex flex-row uppercase shadow-md bg-gradient-to-r from-gray-600 to-gray-700 py-7">
    <div class="container flex items-center justify-between mx-auto">
        <div class="navbar-brand">
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