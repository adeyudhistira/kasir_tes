<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Transaksi
    </div>
    <li class="nav-item">
    <a class="nav-link" href="{{route('transaksi')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Transaksi</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('list_transaksi')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Daftar Transaksi</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Master</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <a class="collapse-item" href="{{route('barang')}}">Barang</a>
  </div>
</div>
</li>


  </ul>
        <!-- End of Sidebar -->