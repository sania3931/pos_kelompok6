<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">Allen Moreno</p>
                    <p class="designation">Premium user</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kelola_akun" aria-expanded="false"
                aria-controls="master">
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kelola_akun">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('super-admin/users') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('super-admin/kategori') }}">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Suplier</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="transaksi">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Retur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terima</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="laporan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Penjualan</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Retur</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Retur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terima</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Laporan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
