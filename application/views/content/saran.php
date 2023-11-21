<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Kritik dan Saran</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="#">Kritik dan Saran</a></li>
							<li class="active"><a href="#">Data Kritik dan Saran</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Data Kritik dan Saran</strong>
					</div>
					<div class="card-body">
						<table
							id="bootstrap-data-table"
							class="table table-striped table-bordered"
						>
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Pesan</th>
									<th>Point Kebersihan</th>
									<th>Point Keramahan</th>
									<th>Point Ketelitian</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($saran as $data) : ?>
								<tr>
									<td><?= $data->id_saran ?></td>
									<td><?= $data->nama ?></td>
									<td><?= $data->email ?></td>
									<td><?= $data->pesan ?></td>
									<td><?= $data->kebersihan ?></td>
									<td><?= $data->keramahan ?></td>
									<td><?= $data->ketelitian ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
