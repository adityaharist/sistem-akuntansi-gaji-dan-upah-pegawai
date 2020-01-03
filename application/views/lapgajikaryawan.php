<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body onload="print()">
	<center>
		<table>
			<tr>
				<td>
					<img src="gambar/logo.png" style="width: 100px; height: 100px;">
				</td>
				<td>
					<center>
						<h3>PT. Sinar Metrindo Perkasa (SIMETRI)</h3>
					<h5>Rukan Aries Niaga Blok A1 No 3A dan 3B Jl. Taman Aries no telp (021) 58906959, faks  (021) 58907350.</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4>GAJI KARYAWAN</h4>
	</center>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nik</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Gaji Pokok</th>
				<th>Tunjangan Kesehatan</th>
				<th>Tunjangan Tranportasi</th>
				<th>Tunjangan Pendidikan</th>
				<th>Tunjangan Keluarga</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($rw->result() as $row) {
			 ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->nik; ?></td>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->pekerjaan; ?></td>
				<td><?php echo $row->gapok; ?></td>
				<td><?php echo $row->tukes; ?></td>
				<td><?php echo $row->tutra; ?></td>
				<td><?php echo $row->tupen; ?></td>
				<td><?php echo $row->tukel; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>