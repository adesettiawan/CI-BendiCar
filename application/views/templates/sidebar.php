 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">PT. BENDI CAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/car.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">C.A.R</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview menu-open">
          <li class="nav-item">
            <a href="<?php base_url(); ?>penyewa" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Penyewa</p>
            </a>
          </li>
          </li>
        
          <li class="nav-item has-treeview menu-open">
          <li class="nav-item">
            <a href="<?php base_url(); ?>petugas" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Petugas</p>
            </a>
          </li>
          </li>

           <li class="nav-item has-treeview menu-open">
          <li class="nav-item">
            <a href="<?php base_url(); ?>kendaraan" class="nav-link">
              <i class="nav-icon fas fa-car-alt"></i>
              <p>Kendaraan</p>
            </a>
          </li>
          </li>
          
           <li class="nav-item has-treeview menu-open">
          <li class="nav-item">
            <a href="<?php base_url(); ?>peminjaman" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>Peminjaman</p>
            </a>
          </li>
          </li>

          <li class="nav-item has-treeview menu-open">
          <li class="nav-item">
            <a href="<?php base_url(); ?>pengembalian" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Pengembalian</p>
            </a>
          </li>
          </li>

          <li class="nav-item has-treeview menu-open">
          <li class="nav-item">
            <a href="<?php base_url(); ?>denda" class="nav-link">
              <i class="nav-icon fas fa-calculator"></i>
              <p>Denda</p>
            </a>
          </li>
          </li>

          <li class="nav-item has-treeview menu-open">
          <li class="nav-item">
            <a href="<?php base_url(); ?>auth" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Log out</p>
            </a>
          </li>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
