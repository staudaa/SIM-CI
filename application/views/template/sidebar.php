<style>
	.title h1 {
		font-style: initial;
		color: blueviolet;
	}
</style>

<body class="hold-transition sidebar-mini">

	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('dashboard')?>" class="nav-link">Home</a>
				</li>
				<li>
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
							Tambah Data
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url('data/add') ?>">Data siswa</a>
							<a class="dropdown-item" href="<?= base_url('jurusan/tambah') ?>">Data Jurusan</a>
							<a class="dropdown-item" href="<?= base_url('kelas/tambah') ?>">Data kelas</a>
							<a class="dropdown-item" href="<?= base_url('pegawai/tambah') ?>">Data pegawai</a>
						</div>
					</div>
				</li>
			</ul>

			
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<!-- <a href="../../index3.html" class="brand-link">
        <img src="<?= base_url('asset/lte') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a> -->

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('asset/lte') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Sistem Informasi Sekolah</a>
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
						<li class="nav-item">
							<a href="<?= base_url('dashboard') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard

								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('data') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'data') echo 'active' ?>">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Data Siswa

								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('kelas') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kelas') echo 'active' ?>">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									kelas

								</p>
							</a>

						</li>
						<li class="nav-item">
							<a href="<?= base_url('jurusan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'jurusan') echo 'active' ?>">
								<i class="nav-icon fas fa-chart-pie"></i>
								<p>
									jurusan

								</p>
							</a>

						</li>
						<li class="nav-item">
							<a href="<?= base_url('pegawai') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'pegawai') echo 'active' ?>">
								<i class="nav-icon fas fa-tree"></i>
								<p>
									pegawai

								</p>
							</a>

						</li>

						<li class="nav-item">
							<a href="<?= site_url('auth/logout') ?>" class="nav-link" onclick="return confirm('Apakah anda yakin ingin logout?')">
								<i class="nav-icon fas fa-undo"></i>
								Logout
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<div class="title">
								<h1>
									<?= $title ?>
								</h1>
							</div>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
								<li class="breadcrumb-item active">
									<?= $title ?>
								</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">