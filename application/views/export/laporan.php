<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title_pdf;?></title>
	<style>
		#table {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#table td,
		#table th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#table tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#table tr:hover {
			background-color: #ddd;
		}

		#table th {
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}

	</style>
</head>

<body>
	<div style="text-align:center">
		<h3> Laporan PDF GC - Carwash</h3>
	</div>
	<table id="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>No. Antrian</th>
				<th>Jam Daftar</th>
				<th>Nama</th>
				<th>No. Plat</th>
				<th>Jenis Cucian</th>
				<th>Total Biaya</th>
				<th width="30%">Status</th>
			</tr>
		</thead>
		<tbody>
            <?php $nomor=1; ?>
			<?php foreach ($laporan as $data) : ?>
			<tr>
				<td><?= $nomor++;?></td>
				<td><?= $data->no_antrian;?></td>
				<td><?= $data->jam_pendaftaran;?></td>
				<td><?= $data->nama;?></td>
				<td><?= $data->nomor_plat;?></td>
				<td><?= $data->jenis_cucian;?></td>
				<td><?= $data->total_biaya;?></td>
				<td>
					<form action="index.php?p=ganti_status" method="POST">
						<input type="hidden" name="id_pendaftaran" value="<?php echo $data->id_pendaftaran;?>">
						<?php
                                                        if($data->status=='Lunas'){
                                                    ?>
						Lunas
						<?php } else { ?>
						<select name="status" onchange="this.form.submit();" class="form-control">
							<option value="Pendaftaran"
								<?php if($data->status == 'Pendaftaran') { echo 'selected'; } ?>>
								Pendaftaran</option>
							<option value="Dalam Pengerjaan"
								<?php if($data->status == 'Dalam Pengerjaan') { echo 'selected'; } ?>>
								Dalam Pengerjaan</option>
							<option value="Batal" <?php if($data->status == 'Batal') { echo 'selected'; } ?>>Batal
							</option>
						</select>
						<?php } ?>
					</form>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>

</html>
