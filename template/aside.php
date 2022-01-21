<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo BASE_URL?>/assets/index3.html" class="brand-link">
      <img src="<?php echo BASE_URL?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo BASE_URL?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <?php 
         if (!file_exists('../config/conn.php')) 
         {
          echo " <li class='nav-item'>
            <a href='/first-install' class='nav-link'>
              <i class='nav-icon fas fa-angle-double-right'></i>
              <p>
                Start
                <span class='right badge badge-danger'>New</span>
              </p>
            </a>

          </li>";
            
         }
          ?>
         
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Statistik
            
              </p>
            </a>
          </li>

           <li class="nav-item menu-is-opening menu-open ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                INPUT
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL?>/import" class="nav-link ">
                  <i class="<?php if ($first_part=="index.php") {echo "fas"; } else  {echo "far";}?> fa-circle nav-icon"></i>
                  <p>Import Excel</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="<?php echo BASE_URL?>/transaksi" class="nav-link">
                  <i class="<?php if ($first_part=="transaksi") {echo "fas"; } else  {echo "far";}?> fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
           </ul>
         </li>
            <li class="nav-item menu-is-opening menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL?>/kegiatan" class="nav-link <?php if ($first_part=="kegiatan") {echo "active"; } else  {echo "noactive";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kegiatan</p>
                </a>
              </li>
                <li class="nav-item">
                   <a href="<?php echo BASE_URL?>/subkeg" class="nav-link <?php if ($first_part=="subkeg") {echo "active"; } else  {echo "noactive";}?>">
                    <i class="far fa-circle nav-icon"></i>
                  <p>Sub Kegiatan</p>
                </a>
              </li>
               <li class="nav-item">
                   <a href="<?php echo BASE_URL?>/md"
                    <?php if ($first_part=="md") {echo " class='nav-link active'><i class='fas fa-circle nav-icon'></i>"; } else  {echo " class='nav-link nonactive'><i class='far fa-circle nav-icon'></i>";}?>
                   
                  <p>MD</p>
                </a>
              </li>
               <li class="nav-item">
                   <a href="<?php echo BASE_URL?>/pegawai" class="nav-link <?php if ($first_part=="pegawai") {echo "active"; } else  {echo "noactive";}?>">
                    <i class="far fa-circle nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-header">ADVANCE</li>
          <li class="nav-item">
                <a href="<?php echo BASE_URL?>/generate.php" class="nav-link <?php if ($first_part=="generate.php") {echo "active"; } else  {echo "noactive";}?>">
                  <i class="fas fa-th nav-icon"></i>
                  <p>Generator</p>
                </a>
              </li>


          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
