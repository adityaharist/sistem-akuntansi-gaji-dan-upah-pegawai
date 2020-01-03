
<h3>Data Karyawan <?php echo $rw->nama; ?></h3>
<table class="table">
	<tr>
		<th>Nik</th>
		<th>:</th>
		<th><?php echo $rw->nik; ?></th>
	</tr>
	<tr>
		<th>Nama Lengkap</th>
		<th>:</th>
		<th><?php echo $rw->nama; ?></th>
	</tr>
	<tr>
		<th>Username</th>
		<th>:</th>
		<th><?php echo $rw->username; ?></th>
	</tr>
	<tr>
		<th>Alamat</th>
		<th>:</th>
		<th><?php echo $rw->alamat; ?></th>
	</tr>
	<tr>
		<th>Jenis Kelamin</th>
		<th>:</th>
		<th><?php echo $rw->jenis_kelamin; ?></th>
	</tr>
	<tr>
		<th>Agama</th>
		<th>:</th>
		<th><?php echo $rw->agama; ?></th>
	</tr>
	<tr>
		<th>Pendidikan</th>
		<th>:</th>
		<th><?php echo $rw->pendidikan; ?></th>
	</tr>
	<tr>
		<th>Asal Sekolah</th>
		<th>:</th>
		<th><?php echo $rw->asal_sekolah; ?></th>
	</tr>
	<tr>
		<th>Jabatan</th>
		<th>:</th>
		<th><?php echo $rw->pekerjaan; ?></th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<a href="app/profiluser/<?php echo $this->session->userdata('id_user'); ?>">
				<button class="btn btn-primary">Ubah Profil</button>
			</a>
			<a href="app/ubahpass/<?php echo $this->session->userdata('id_user'); ?>">
				<button class="btn btn-primary">Ubah Password</button>
			</a>
		</td>
	</tr>
</table>