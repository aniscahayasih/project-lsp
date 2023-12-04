<!DOCTYPE html>
<html lang="en">

<head>

     <title>GC - Car Wash</title>
     <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">

     <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/logo.png">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Kinclongkan kendaraan anda bersama GC Car Wash</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 08.00 - 18:00 (Setiap
                              Hari)</span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">GC - Car Wash</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Tentang Kami</a></li>
                         <li><a href="#appointment" class="smoothScroll">Pendaftaran</a></li>
                         <li><a href="#saran" class="smoothScroll">Kritik dan Saran</a></li>
                         <li class="appointment-btn"><a href="<?php echo base_url() ?>auth/login">Login</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Percayakan Noda Kendaraan Bersama Kami</h3>
                                        <h1>GC - Car Wash</h1>
                                        <a href="#about" class="section-btn btn btn-default smoothScroll">Tentang
                                             Kami</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Kinclongkan kendaraan anda hanya disini</h3>
                                        <h1>GC - Car Wash</h1>
                                        <a href="#appointment"
                                             class="section-btn btn btn-default btn-gray smoothScroll">Daftar
                                             Sekarang</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Dan Berikan Masukan Kepada Kami</h3>
                                        <h1>Kepuasan Anda Adalah Semangat Kami</h1>
                                        <a href="#saran" class="section-btn btn btn-default btn-blue smoothScroll">Kirim
                                             Saran</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Tentang Kami</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>GC Carwash merupakan salah satu bidang usaha yang menawarkan jasa perawatan
                                        kendaraan berupa pencucian dan pembersihan kendaraan.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Bersih</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Kilat</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Wangi</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Puas</h3>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <?php
     //      date_default_timezone_set('Asia/Jakarta');
// $tgl_pendaftaran = date("Y-m-d");
// $queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$tgl_pendaftaran'");
// $htg = mysql_num_rows($queryy);
     
     //      $next = $htg + 1;
     
     //      $no_antrian = $tgl_pendaftaran . '/' . $next;
     
     //      $hitung = mysql_query("SELECT max(id_customer) as id_terakhir from customer");
// $cari = mysql_fetch_array($hitung);
// $id_lanjut = $cari['id_terakhir'] + 1;
     
     ?>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">



                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                         <form id="appointment-form" role="form" method="post" action="<?php echo base_url('index/createPendaftaran') ?>">
                              <input type="hidden" class="form-control" id="nama" name="id_customer"
                                   value="<?php //echo $id_lanjut; ?>">
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Pendaftaran</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                             placeholder="Nama Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">No. Handphone</label>
                                        <input type="number" class="form-control" id="no_hp" name="no_hp"
                                             placeholder="No. Handphone Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Alamat</label>
                                        <input type="text" class="form-control" id="email" name="alamat"
                                             placeholder="Alamat Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">No. Plat</label>
                                        <input type="text" class="form-control" id="email" name="nomor_plat"
                                             placeholder="No. Plat Kendaraan Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Type Mobil</label>
                                        <select name="type_mobil" class="form-controler-rounded form-control">
                                             <?php foreach ($type_mobil as $data): ?>
                                                  <option value="<?= $data->id_type_mobil; ?>">
                                                       <?= $data->type_mobil; ?>
                                                  </option>
                                             <?php endforeach; ?>
                                        </select>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">No. Antrian</label>
                                        <input type="text" class="form-control-rounded form-control"
                                             value="1" required="" readonly name="next">
                                        <input type="hidden" name="no_antrian" class="form-control-rounded form-control"
                                             value="1" required="" readonly>
                                   </div>


                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Jenis Cucian</label>
                                        <select name="jenis_cucian" id="jenisCucian" class="form-control" onchange="getTotal()">
                                             <option value="">
                                                  Pilih Jenis Cucian
                                             </option>
                                             <?php foreach ($jenis_cuci as $data): ?>
                                                  <option value="<?= $data->id_jenis_cucian; ?>">
                                                       <?= $data->jenis_cucian ." - ". $data->biaya; ?>
                                                  </option>
                                             <?php endforeach; ?>
                                        </select>
                                   </div>

                                   <?php date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke Asia/Jakarta
                                                  $today = date("Y-m-d"); ?>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Tanggal Pendaftaran</label>
                                        <input type="text" class="form-control" id="tgl_pendaftaran" name="tgl_pendaftaran"
                                             value="<?= $today; ?>" readonly>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Jam Pendaftaran</label>
                                        <input type="time" class="form-control" id="email" name="jam_pendaftaran"
                                             min="08:00:00" max="18:00:00" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="total_biaya">Total Biaya</label>
                                        <input type="text" class="form-control" id="total_biaya" name="total_biaya"
                                             placeholder="Total Biaya" readonly>
                                   </div>
                                   <!-- <input type="hidden" name="total_biaya" id="txt2" class="form-control" readonly=""
                                        value="<?= $totalBiaya; ?>" /> -->
                                   <script type="text/javascript">
                                        <?php //echo $jsArray; ?>
                                   </script>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Daftar
                                             Sekarang</button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>



     <!-- ABOUT -->
     <section id="saran">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                         <form id="saran-form" role="form" method="post"
                              action="<?php echo base_url('index/createKritik') ?>">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Kritik dan Saran</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                             placeholder="Nama Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                             placeholder="Email Anda">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Pesan</label>
                                        <input type="text" class="form-control" id="pesan" name="pesan"
                                             placeholder="Isi Pesan Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Kebersihan</label>
                                        <input type="number" class="form-control" id="kebersihan" name="kebersihan"
                                             placeholder="Nilai Point Kebersihan" maxlength="3" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Keramahan</label>
                                        <input type="number" class="form-control" id="keramahan" name="keramahan"
                                             placeholder="Nilai Point Keramahan" maxlength="3" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Ketelitian</label>
                                        <input type="number" class="form-control" id="ketelitian" name="ketelitian"
                                             placeholder="Nilai Point Ketelitian" maxlength="3" required="">
                                   </div>

                                   <br><br><br><br><br>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Kirim
                                             Saran</button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>



     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informasi Lanjut</h4>
                              <p>Untuk mengetahui informasi lebih lanjut, silahkan hubungi kontak berikut.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         &nbsp;
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Waktu Operasional</h4>
                                   <p>Senin - Minggu <span>08:00 - 18:00</span></p>
                              </div>
                         </div>
                    </div>

                    <!-- <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-6 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2020 <a href="www.kampus-programmer.com/"><b> Kampus
                                                  Programmer</b></a> | Repost by <a href='https://stokcoding.com/'
                                             title='StokCoding.com' target='_blank'>StokCoding.com</a>
                                   </p>
                              </div>
                         </div>

                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                             class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div> -->

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
     <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>
     <script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>
     <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
     <script src="<?php echo base_url() ?>assets/js/smoothscroll.js"></script>
     <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
     <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
     <script>
          $(document).ready(function () {
               const flashData = $('.flash-data').data('flashdata');
               if (flashData) {
                    swal("Data Berhasil Ditambahkan!", flashData);
               }
          });
          function getTotal() {
			let total = document.getElementById("jenisCucian");
			let total2 = total.options[total.selectedIndex].text
			let getTotal = total2.split(" - ");
               document.getElementById("total_biaya").value = getTotal[1];
			console.log("total = " + getTotal[1]);
		}
     </script>

</body>

</html>