<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			
			<!-- Tasks: style can be found in dropdown.less -->

			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="user-image">
                <span class="hidden-xs"><?php echo $this->session->userdata('last_name'); ?></span>
            </a>
				<ul class="dropdown-menu" style="background-color: black">
					<!-- User image -->
					<li class="user-header" style="background-color: black">
						<img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="img-circle">
						<p style="color: white">
							<small> <?php echo $this->session->userdata('first_name'); ?></small>
							<?php echo $this->session->userdata('last_name'); ?>
							<small>Terakhir Masuk , <?php echo $this->session->userdata('last_login'); ?></small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo base_url() ?>auth/profile/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-info btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url() ?>auth/logout" class="btn btn-danger btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
