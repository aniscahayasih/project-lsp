<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Type Mobil</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="#">Type Mobil</a></li>
							<li class="active"><a href="#">Data Type Mobil</a></li>
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
						<strong class="card-title">Data Type Mobil</strong>
					</div>
					<div class="card-body">
						<a href="<?php echo base_url()?>admin/add_type_mobil_view" class="btn btn-success mb-3"><i class="fa fa-plus"
								style="color: white"></i>
							<font size="3" color="white"><u>Tambah Data</u></font>
						</a></div><br>
                    <?php echo $this->session->flashdata('message'); ?>
					<table id="bootstrap-data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Type Mobil</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
  $nomor=1;
?>
                            <?php foreach ($type_mobil as $data) : ?>
							<tr>
								<td><?= $nomor++;?></td>
								<td><?= $data->type_mobil;?></td>
								<td align="center">
									<a href="<?= base_url('admin/edit_type_mobil_view/' . $data->id_type_mobil) ?>"
										class="btn btn-warning mb-3"> <i class="fa fa-fw fa-pencil"
											style="color: white"></i>
										<font color="white">Edit</font>
									</a>
								</td>
								<td align="center">
									<a href="<?= base_url('admin/delete_type_mobil/' . $data->id_type_mobil) ?>"
										onClick="return confirm('Apakah Anda Yakin Hapus Data?')"
										class="btn btn-danger mb-3"> <i class="fa fa-fw fa-trash"
											style="color: white"></i>
										<font color="white">Hapus</font>
									</a>
								</td>
							</tr>
                            <?php endforeach; ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>


	</div>
</div><!-- .animated -->
</div><!-- .content -->
