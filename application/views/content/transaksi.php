<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Transaksi</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="#">Transaksi</a></li>
							<li class="active"><a href="#">Data Transaksi</a></li>
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
						<strong class="card-title">Data Transaksi</strong>
					</div>
					<div class="card-body">
						<table
							id="bootstrap-data-table"
							class="table table-striped table-bordered"
						>
							<thead>
								<tr>
									<th>No.</th>
									<th>No. Antrian</th>
									<th>No. Nota</th>
									<th>Nama</th>
									<th>Total</th>
									<th>Status</th>
									<th>Penanggung Jawab Cuci</th>
								</tr>
							</thead>
							<tbody>
								
								<?php foreach ($transaksi as $data) : ?>
								<tr>
									<td><?= $data->id_transaksi ?></td>
									<td><?= $data->no_antrian ?></td>
									<td><?= $data->no_nota ?></td>
									<td><?= $data->nama ?></td>
									<td><?= $data->total ?></td>
									<td><?= $data->status ?></td>
									<td><?= $data->nama_pencuci ?></td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .animated -->
</div>
<!-- .content -->
