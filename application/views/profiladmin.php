<form action="" method="post">
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $rw->nama ?>">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" value="<?php echo $rw->username ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password" class="form-control" value="<?php echo $rw->password ?>">
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Ubah</button>
	</div>
</form>