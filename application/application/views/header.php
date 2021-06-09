<!doctype html>
<html lang="en">

<head>
	<title>Hello, world!</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- Material Kit CSS -->
	<link
		href="<?= base_url() ?>public/templates/assets/css/material-dashboard.css?v=2.1.0"
		rel="stylesheet" />
</head>

<body class="dark-edition">
	<div class="wrapper ">
		<div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
			<!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
			<div class="logo d-flex justify-content-center align-items-center">
				<img src="<?= base_url() ?>public/Logo_PT_Kereta_Api_Indonesia_(Persero).png"
					alt="" width="72" height="57">
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item active  ">
						<a class="nav-link" href="javascript:void(0)">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>
					<!-- your sidebar here -->
				</ul>
			</div>
		</div>
		<div class="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">
									<i class="material-icons">notifications</i>
									<p class="d-lg-none d-md-block">
										Notifications
									</p>
								</a>
							</li>
							<!-- your navbar here -->
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="content">
				<div class="container-fluid">
