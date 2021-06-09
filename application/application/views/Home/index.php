<div class="row">
	<div class="col-sm-1">
		<img src="<?= base_url() ?>public/Logo_PT_Kereta_Api_Indonesia_(Persero).png"
			alt="" width="72" height="57">
	</div>
	<div class="col-sm-11">
		<h1 class="text-white">PT. Kereta Api Indonesia</h1>
	</div>
</div>
<br /><br />
<h3 style="text-align: center;">Daftar Penumpang</h3>
<br />

<table class="table table-bordered">
	<tr>
		<th width="5%">No</th>
		<th>NIK</th>
		<th>Nama Lengkap</th>
		<th>Stasiun Asal</th>
		<th>Stasiun Tujuan</th>
		<th>Tanggal Berangkat</th>
		<th>Aksi</th>
	</tr>
	<?php
                $no = 1;
                foreach ($penumpang as $row) {
                    ?>
	<tr>
		<td width="5%"><?php echo $no++; ?>
		</td>
		<td><?php echo $row->nik; ?>
		</td>
		<td><?php echo $row->nama; ?>
		</td>
		<td><?php echo $row->st_asal; ?>
		</td>
		<td><?php echo $row->st_tujuan; ?>
		</td>
		<td><?php echo $row->depart; ?>
		</td>
		<td>
			<a href="<?php echo base_url(); ?>Home/edit/<?php echo $row->id; ?>"
				class="btn btn-warning">Edit</a>
			<a href="<?php echo base_url(); ?>Home/delete/<?php echo $row->id; ?>"
				class="btn btn-danger">Hapus</a>
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
