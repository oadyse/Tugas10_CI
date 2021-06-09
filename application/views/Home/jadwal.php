<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
	<div class="container shadow p-3 mb-4 mt-3 bg-white rounded"">
				<div class=" card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-1">
					<img src="<?= base_url() ?>public/Logo_PT_Kereta_Api_Indonesia_(Persero).png" alt="" width="72" height="57">
				</div>
				<div class="col-sm-11">
					<h1>PT. Kereta Api Indonesia</h1>
				</div>
			</div>
		</div><br />
		<div class="card-body">
			<div class="btn-group">
				<a href="<?php echo base_url(); ?>Home/index" class="btn btn-danger">Kembali</a>
				<a href="<?php echo base_url(); ?>Home/input_jadwal" class="btn btn-success">Input Jadwal Baru</a>
			</div>

			<br /><br />
			<h3 style="text-align: center;">Jadwal Kereta</h3>
			<br />

			<table class="table table-bordered">
				<tr>
					<th width="5%">No</th>
					<th>Kereta Api</th>
					<th>Stasiun Asal</th>
					<th>Stasiun Tujuan</th>
					<th>Jam Keberangkatan</th>
					<th>Jam Kedatangan</th>
				</tr>
				<?php
				$no = 1;
				foreach ($jadwal as $row) {
				?>
					<tr>
						<td width="5%"><?php echo $no++; ?>
						</td>
						<td><?php echo $row->nama_ka; ?>
						</td>
						<td><?php echo $row->st_asal; ?>
						</td>
						<td><?php echo $row->st_tujuan; ?>
						</td>
						<td><?php echo $row->jamberangkat; ?>
						</td>
						<td><?php echo $row->jamdatang; ?>
						</td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
		<br>
		<footer class="footer">
			<div class="container" style="text-align:center;">
				<hr />
				<span>M3119082 Sari Eka Nur Marifah - COPYRIGHT @<?php echo date('Y'); ?></span>
			</div>
		</footer>
		<br>
	</div>


</body>

</html>
