<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="background-color: #0a300f">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
				<img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="img-circle">
			</div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('first_name'); ?></p>
        <p style="color: white"><?php echo $this->session->userdata('last_name'); ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- Optionally, you can add icons to the links -->
      <li class="nav-link active"><a href="<?php echo base_url('mahasiswa/home/daftar'); ?>"><i class="nav-icon fa fa-th"></i> <span>Pencarian Proposal</span></a></li>
      <!-- <li><a href="#"><i class="fa fa-link"></i> <span></span>Daftar Skripsi</a></li> -->
      <li class="treeview">
        <a href="#"><i class="nav-icon fa fa-th"></i> <span>Proposal Tugas Akhir</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('mahasiswa/home/daftar'); ?>"><i class="fa fa-link"></i>Daftar Proposal</a></li>
          <li><a href="<?php echo base_url('mahasiswa/home/judul'); ?>"><i class="fa fa-link"></i>Pengajuan Judul Proposal</a></li>
          <li><a href="<?php echo base_url('mahasiswa/home/proposal'); ?>"><i class="fa fa-link"></i>Pengajuan Proposal</a></li>
          <li><a href="<?php echo base_url('mahasiswa/home/status_sidang'); ?>"><i class="fa fa-link"></i>Status Tugas Akhir</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
