<form action="" method="post"> 
	<div class="form-group">
		<label>Nik</label>
		<input type="text" name="nik" class="form-control" value="<?php echo $rw->nik ?>">
	</div>
	<div class="form-group">
		<label>username</label>
		<input type="text" name="username" class="form-control" value="<?php echo $rw->username ?>">
	</div>
	<div class="form-group">
		<label>nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $rw->nama ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $rw->alamat ?></textarea>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control">
			<option value="<?php echo $rw->jenis_kelamin ?>"><?php echo $rw->jenis_kelamin ?></option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
	</div>
	<div class="form-group">
		<label>Agama</label>
		<select name="agama" class="form-control">
			<option value="<?php echo $rw->agama ?>"><?php echo $rw->agama ?></option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
		</select>
	</div>
	<div class="form-group">
		<label>Pendidikan</label>
		<input type="text" name="pendidikan" class="form-control" value="<?php echo $rw->pendidikan ?>">
	</div>
	<div class="form-group">
		<label>Asal Sekolah</label>
		<input type="text" name="asal_sekolah" class="form-control" value="<?php echo $rw->asal_sekolah ?>">
	</div>
	<div class="form-group">
		<label>Jabatan</label>
		<select name="id_pekerjaan" class="form-control">
            <option value="<?php echo $rw->id_pekerjaan ?>"><?php echo $rw->pekerjaan ?></option>
            <?php 
            $sql = $this->db->get('pekerjaan');
            foreach ($sql->result() as $row) {
             ?>
            <option value="<?php echo $row->id_pekerjaan; ?>"><?php echo $row->pekerjaan; ?></option>
            <?php } ?>
        </select>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Ubah</button>
	</div>
</form>