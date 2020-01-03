<!DOCTYPE html>
<html>
<head>
	<title>Slip Gaji Karyawan</title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body onload="print()">

<?php 
$rw = $this->db->query("SELECT * FROM karyawan,pekerjaan where karyawan.id_pekerjaan=pekerjaan.id_pekerjaan and karyawan.nik='$nik'")->row();

 ?>

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
		<h4>SLIP GAJI</h4>
	</center>
	<hr>
	<table class="table">
		<tr>
			<td width="10%">Nik</td>
			<td>:</td>
			<td><?php echo $rw->nik; ?></td>
			<td width="10%">Alamat</td>
			<td>:</td>
			<td><?php echo $rw->alamat; ?></td>
			<td width="10%">Tanggal</td>
			<td>:</td>
			<td><?php echo $tgl; ?></td>
		</tr>
		<tr>
			<td width="10%">Nama</td>
			<td>:</td>
			<td><?php echo $rw->nama; ?></td>
			<td width="10%">Jabatan</td>
			<td>:</td>
			<td><?php echo $rw->pekerjaan; ?></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>KETERANGAN</th>
				<th>JUMLAH</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>1</th>
				<td>Gaji Pokok</td>
				<td>Rp. <?php echo number_format($rw->gapok) ?></td>
			</tr>
			<tr>
				<th>2</th>
				<td>Tunjangan Kesehatan</td>
				<td>Rp. <?php echo number_format($rw->tukes) ?></td>
			</tr>
			<tr>
				<th>3</th>
				<td>Tunjangan Transportasi</td>
				<td>Rp. <?php echo number_format($rw->tutra) ?></td>
			</tr>
			<tr>
				<th>4</th>
				<td>Tunjangan Pendidikan</td>
				<td>Rp. <?php echo number_format($rw->tupen) ?></td>
			</tr>
			<tr>
				<th>5</th>
				<td>Tunjangan Keluarga</td>
				<td>Rp. <?php echo number_format($rw->tukel) ?></td>
			</tr>
			<tr>
				<th colspan="2">TOTAL DITERIMA</th>
				<th>Rp. 
					<?php 
					$total = $rw->gapok+$rw->tukes+$rw->tutra+$rw->tupen+$rw->tukel;
					echo number_format($total);
					 ?>
				</th>
			</tr>
		</tbody>
	</table>
	<p style="text-align: right;">
		Penerima,
		<br><br><br><br>

		<b><?php echo $rw->nama; ?></b>
	</p>
</body>
</html>