<!DOCTYPE HTML>
<html>
<head>
<title>PT. Nindya Karya (Persero)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="tes coding, pt nindya karya, programmer" />

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel='stylesheet' />

<link href="<?php echo base_url();?>assets/part/dashboard.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>

<!-- Start DataTables -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/dataTables.min.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/DataTables/dataTables.min.js"></script>
<!-- End DataTables -->

<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
		  font-size: 3.5rem;
		}
	}
  
	table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 100%;
		border: 1px solid #ddd;
	}

	th, td {
		text-align: left;
		padding: 16px;
	}

	tr:nth-child(even) {
		background-color: #f2f2f2;
	}
</style>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo base_url();?>">PT. Nindya Karya (Persero)</a>
	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	
	<label class="navbar-brand"><h3>Sistem Laporan Produksi</h3></label>
	
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
		<a class="nav-link" href="<?php echo base_url();?>dashboard/logout">Sign out</a>
		</li>
	</ul>
</nav>

<div class="container-fluid">
	<div class="row">
		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
			<div class="sidebar-sticky pt-3">
				<ul class="nav flex-column">
					<br />
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>dashboard"><span data-feather="home"></span>Dashboard</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>laporan"><span data-feather="file"></span>Laporan Produksi</a></li>
				</ul>
			</div>
		</nav>

		<?php $this->load->view($container); ?>
	
	</div>
	<div class="clearfix"> </div>
	
	<?php $this->load->view('slice/footer'); ?>
	
</body>
</html>