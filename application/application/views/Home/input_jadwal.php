<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Pemesanan Tiket</title>
</head>

<style>
	.container {
		width: 60%;
	}

	body {
		background-color: #d1d1d1;
	}
</style>

<body>


	<h1 class="text-center pt-4 ">Tambah Jadwal</h1>
	<div class="info-form"><br>
		<?php if (validation_errors()) : ?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
		<?php endif ?>

		<hr><br>

		<h4>Input Jadwal Kereta</h4><br>
		<?= form_open('Home/addjadwal') ?>
		<div class="form-group row">
			<?= form_label('Nama Kereta Api', 'nama_ka', 'class="col-sm-3 col-form-label"') ?>
			<div class="col-sm-9">
				<?= form_input([
                                'type' => 'text',
                                'name' => 'nama_ka',
                                'id' => 'nama_ka',
                                'class' => 'form-control',
                                'value' => set_value("nama_ka")
                            ]) ?>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-sm-6">
				<?= form_label('Stasiun Asal', 'st_asal') ?>
				<?= form_dropdown('st_asal', [
                                '' => '',
                                'Madiun' => "Madiun",
                                'Barat' => "Barat",
                                'Ngawi' => "Ngawi",
                                'Sragen' => "Sragen",
                                'Solo Balapan' => "Solo Balapan",
                                'Purwosari' => "Purwosari",
                                'Delanggu' => "Delanggu",
                                'Klaten' => "Klaten",
                                'Yogyakarta' => "Yogyakarta"
                            ], set_value('st_asal'), 'class="form-control" id="st_asal"') ?>
			</div>
			<div class="form-group col-sm-6">
				<?= form_label('Stasiun Tujuan', 'st_tujuan') ?>
				<?= form_dropdown('st_tujuan', [
                                '' => '',
                                'Madiun' => "Madiun",
                                'Barat' => "Barat",
                                'Ngawi' => "Ngawi",
                                'Sragen' => "Sragen",
                                'Solo Balapan' => "Solo Balapan",
                                'Purwosari' => "Purwosari",
                                'Delanggu' => "Delanggu",
                                'Klaten' => "Klaten",
                                'Yogyakarta' => "Yogyakarta"
                            ], set_value('st_tujuan'), 'class="form-control" id="st_tujuan"') ?>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-sm-6">
				<?= form_label('Jam Keberangkatan', 'jamberangkat') ?>
				<?= form_input([
                                'type' => 'time',
                                'name' => 'jamberangkat',
                                'id' => 'jamberangkat',
                                'class' => 'form-control',
                                'value' => set_value("jamberangkat")
                            ]) ?>
			</div>
			<div class="form-group col-sm-6">
				<?= form_label('Jam Kedatangan', 'jamdatang') ?>
				<?= form_input([
                                'type' => 'time',
                                'name' => 'jamdatang',
                                'id' => 'jamdatang',
                                'class' => 'form-control',
                                'value' => set_value("jamdatang")
                            ]) ?>
			</div>

		</div>
		<br>
		<div class="text-center">
			<?= form_submit('submitbutton', 'Tambahkan', 'class="btn btn-primary"') ?>
		</div>

		<?= form_close() ?>


		<br>


		<footer class="footer">
			<div class="container" style="text-align:center;">
				<hr />
				<span>M3119082 Sari Eka Nur Marifah - COPYRIGHT @<?php echo date('Y'); ?></span>
			</div>
		</footer>

	</div>
</body>

</html>
