<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Customer</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="#">Customer</a></li>
							<li class="active"><a href="#">Data Customer</a></li>
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
						<strong class="card-title">Data Customer</strong>
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
									<th>No. HP</th>
									<th>Alamat</th>
									<th>No. Plat</th>
									<th>Type Mobil</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($customer as $data) : ?>
								<tr>
									<td><?= $data->id_customer ?></td>
									<td><?= $data->nama ?></td>
									<td><?= $data->no_hp ?></td>
									<td><?= $data->alamat ?></td>
									<td><?= $data->nomor_plat ?></td>
									<td><?= $data->type_mobil ?></td>
								</tr>
								<?php endforeach; ?>
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
