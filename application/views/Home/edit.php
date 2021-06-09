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
		width: 50%;
	}

	body {
		background-color: #d1d1d1;
	}
</style>

<body>
	<div id="container" class="container shadow p-3 mb-4 mt-3 bg-white rounded">
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<h1 class="text-center pt-4 ">Data Pemesanan Tiket</h1>
				<div class="info-form"><br>
					<?php if (validation_errors()) : ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif ?>

					<hr><br>

					<h4>Data Diri</h4><br>
					<?= form_open("Home/update/{$penumpang->id}") ?>
					<div class="form-group row">
						<?= form_label('NIK', 'nik', 'class="col-sm-3 col-form-label"') ?>
						<div class="col-sm-9">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'nik',
                                'id' => 'nik',
                                'class' => 'form-control',
                                'value' => $penumpang->nik
                            ]) ?>
						</div>
					</div>

					<div class="form-group row">
						<?= form_label('Nama Lengkap', 'nama', 'class="col-sm-3 col-form-label"') ?>
						<div class="col-sm-9">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'nama',
                                'id' => 'nama',
                                'class' => 'form-control',
                                'value' => $penumpang->nama
                            ]) ?>
						</div>
					</div>

					<fieldset class="form-group row">
						<div class="col-sm-8">
							<label for="Laki-laki">
								<?= form_radio('gender', 'Laki-laki', ($penumpang->gender) == 'Laki-laki' ? true : false, 'id="Laki-laki" class="form-check-inline"')?>
								Laki-laki
							</label><br>
							<label for="Perempuan">
								<?= form_radio('gender', 'Perempuan', ($penumpang->gender) == 'Perempuan' ? true : false, 'id="Perempuan" class="form-check-inline"') ?>
								Perempuan
							</label>
						</div>
					</fieldset>

					<div class="form-group row">
						<?= form_label('Nomor Handphone', 'no_hp', 'class="col-sm-3 col-form-label"') ?>
						<div class="col-sm-9">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'no_hp',
                                'id' => 'no_hp',
                                'class' => 'form-control',
                                'value' => $penumpang->no_hp
                            ]) ?>
						</div>
					</div>


					<!-- dikasih validasi email -->
					<div class="form-group row">
						<?= form_label('Email', 'email', 'class="col-sm-3 col-form-label"') ?>
						<div class="col-sm-9">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'email',
                                'id' => 'email',
                                'class' => 'form-control',
                                'value' => $penumpang->email
                            ]) ?>
						</div>
					</div>

					<div class="form-group row">
						<?= form_label('Alamat', 'alamat', 'class="col-sm-3 col-form-label"') ?>
						<div class="col-sm-9">
							<?= form_textarea([
                                'name' => 'alamat',
                                'id' => 'alamat',
                                'class' => 'form-control',
                                'rows' => '3',
                                'cols' => '30',
                                'value' => $penumpang->alamat
                            ]) ?>
						</div>
					</div>
					<br>
					<hr><br>

					<h4>Form Pemesanan</h4><br>

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
                            ], $penumpang->st_asal, 'class="form-control" id="st_tujuan"') ?>
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
                            ], $penumpang->st_tujuan, 'class="form-control" id="st_tujuan"') ?>
						</div>
					</div>

					<div class="form-row">
						<?= form_label('Tanggal Berangkat', 'depart') ?>
						<?= form_input([
                            'type' => 'date',
                            'name' => 'depart',
                            'id' => 'depart',
                            'class' => 'form-control',
                            'value' => $penumpang->depart
                        ]) ?>
					</div>
					<br>
					<?= form_checkbox('agree', 'agree', false, 'id="agree"'); ?>
					<?= form_label('Sudah mengecek kembali data pribadi', 'agree') ?>
					<br><br>
					<div class="text-center">
						<?= form_submit('submitbutton', 'Edit', 'class="btn btn-primary"') ?>
					</div>

					<?= form_close() ?>

				</div>
				<br>
			</div>
		</div>

		<footer class="footer">
			<div class="container" style="text-align:center;">
				<hr />
				<span>M3119082 Sari Eka Nur Marifah - COPYRIGHT @<?php echo date('Y'); ?></span>
			</div>
		</footer>

	</div>
</body>


</html>
