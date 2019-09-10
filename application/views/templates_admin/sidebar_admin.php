 <div id="viewport"> <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a>
    </header>
    <div class="sidebar-heading">
      Administrator
    </div>
    <hr class="sidebar-divider my-0">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-dark py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="<?= base_url('home'); ?>">Home</a><br>
            <hr class="sidebar-divider my-0">
        </div>
        <div class="bg-dark py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="<?= base_url('categories') ;?>">Categories</a><br>
            <hr class="sidebar-divider my-0">
        </div>
        <div class="bg-dark py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="login.html">Chart</a><br>
            <hr class="sidebar-divider my-0">
        </div>
        <div class="bg-dark py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="login.html">Product</a><br>
            <hr class="sidebar-divider my-0">
        </div>
        </div>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/dashboard/data_barang'); ?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Data Barang</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/invoice'); ?>">
          <i class="fas fa-fw fa-chart-bar"></i>
          <span>invoice</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-fw fa-chart-pie"></i>
          <span>statistik penjualan</span></a>
      </li>
    </ul>
  </div>