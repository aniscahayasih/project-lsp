<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pendaftaran</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pendaftaran</a></li>
                                    <li class="active"><a href="#">Data Pendaftaran</a></li>
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
                            <?php echo $judul ?>
                                <strong class="card-title">Data Pendaftaran</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">                                       
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($pendaftaran as $data) : ?>                                 
                                        <tr>
                                            <td><?= $data->id_pendaftaran ?></td>
                                            <td><?php echo $data->no_antrian;?></td>
                                            <td><?php echo $data->jam_pendaftaran;?></td>
                                            <td><?php echo $data->nama;?></td>
                                            <td><?php echo $data->nomor_plat;?></td>
                                            <td><?php echo $data->jenis_cucian;?></td>
                                            <td><?php echo $data->total_biaya;?></td>
                                            
                                            <td>
                                                <form action="<?php echo base_url('admin/ganti_status'); ?>" method="POST">
                                                    <input type="hidden" name="id_pendaftaran" value="<?php echo $data->id_pendaftaran ?>">
                                                    <?php
                                                        if($data->status =='Lunas'){
                                                    ?>
                                                    Lunas
                                                    <?php } else { ?>
                                                        <select name="status" onchange="this.form.submit();" class="form-control">
                                                            <option value="Pendaftaran" <?php if($data->status == 'Pendaftaran') { echo "selected"; } ?>>Pendaftaran</option> 
                                                            <option value="Dalam Pengerjaan" <?php if($data->status == 'Dalam Pengerjaan') { echo 'selected'; } ?>>Dalam Pengerjaan</option>
                                                            <option value="Batal" <?php if($data->status == 'Batal') { echo 'selected'; } ?>>Batal</option>
                                                        </select>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                            <td align="center">
                                                <a href="index.php?p=tambah_pembayaran&id_pendaftaran=" class="btn btn-success mb-3"> <i class="fa fa-fw fa-dollar" style="color: white"></i> <font color="white">Bayar</font>
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