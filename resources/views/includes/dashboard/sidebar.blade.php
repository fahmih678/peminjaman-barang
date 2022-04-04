<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="assets/dashboard/mazer/images/logo/logo.png" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item @yield('dashboard-active')">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('barang-active')">
                    <a href="/manajemen-barang" class='sidebar-link'>
                        <i class="bi bi-shop-window"></i>
                        <span>Data Barang</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('peminjaman-barang-active')">
                    <a href="/peminjaman-barang" class='sidebar-link'>
                        <i class="bi bi-truck"></i>
                        <span>Peminjaman Barang</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
