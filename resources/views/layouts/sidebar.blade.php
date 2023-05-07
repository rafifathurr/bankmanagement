<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="{{asset('images/logo.svg')}}" class="sidebar-brand-text mx-3 images_logo">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(str_contains($title, 'Report')) active @endif">
        <a class="nav-link" href="{{route('transactions.report.index')}}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Report</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item @if(str_contains($title, 'Daftar Transaksi')) active @endif">
        <a class="nav-link" href="{{route('transactions.index')}}">
            <i class="fas fa-fw fa-exchange-alt"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item @if(str_contains($title, 'Point')) active @endif">
        <a class="nav-link" href="{{route('points.index')}}">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Point</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item @if(str_contains($title, 'Data Nasabah')) active @endif">
        <a class="nav-link" href="{{route('customer.index')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Nasabah</span></a>
    </li>

    <li class="nav-item @if(str_contains($title, 'Jenis Transaksi')) active @endif">
        <a class="nav-link" href="{{route('type.index')}}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Jenis Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->