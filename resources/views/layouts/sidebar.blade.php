<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                </ul>
            </li>
            <li class="nav-label">Data Master</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">User</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.passenger') }}">Penumpang</a></li>
                    <li><a href="{{ route('admin.operator') }}">Petugas</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Transportasi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.transportation') }}">Transportasi</a></li>
                    <li><a href="{{ route('admin.transportation-type') }}">Tipe Transportasi</a></li>
                    <li><a href="{{ route('admin.route') }}">Rute</a></li>
                </ul>
            </li>
            <li class="nav-label">Transaksi</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Pemesanan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.booking') }}">Pending</a></li>
                    <li><a href="{{ route('admin.booking') }}">Disetujui</a></li>
                    <li><a href="{{ route('admin.booking') }}">Tidak Disetui</a></li>
                </ul>
            </li>
            <li class="nav-label">Laporan</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Laporan</span>
                </a>
                <ul aria-expanded="false">

                    <li><a href="{{ route('admin.passenger.report') }}">Penumpang</a></li>
                </ul>
            </li>
            <li class="nav-label">Table</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                    <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                </ul>
            </li>
            <li class="nav-label">Pages</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-lock.html">Lock Screen</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
