<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SIMPEG PARIWISATA SULSEL</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?= home_assets() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Fonts -->
	<link href="<?= home_assets() ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= home_assets() ?>css/animate.css" rel="stylesheet" />
	<!-- Squad theme CSS -->
	<link href="<?= home_assets() ?>css/style.css" rel="stylesheet">
	<link href="<?= home_assets() ?>color/default.css" rel="stylesheet">

	<link rel="stylesheet" href="<?= assets_url() ?>vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="<?= assets_url() ?>vendor/datatables/css-main/jquery.dataTables.min.css">
	<!-- <link rel="stylesheet" href="<?= assets_url() ?>vendor/datatables/css-bootstrap/dataTables.bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?= assets_url() ?>vendor/datatables-tabletools/css/dataTables.tableTools.css">

	<link rel="icon" type="image/png" sizes="96x96" href="public/assets/img/pemprov.png">
	<link rel="icon" type="image/png" sizes="96x96" href="public/assets/img/pemprov.png">
	<style>
		table th,
		table td {
			white-space: nowrap;
		}
	</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
		<div id="load"></div>
	</div>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="index.html">
					<h1>SIMPEG</h1>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#intro">Beranda</a></li>
					<li><a href="#tentang">Tentang</a></li>
					<li><a href="#informasi">Informasi</a></li>
					<li><a href="#statistik">Statistik</a></li>
					<li><a href="#fitur">Fitur</a></li>
					<!-- <li><a href="#galeri">Galeri</a></li> -->
					<li><a href="<?= login_url() ?>">Login</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Section: intro -->
	<section id="intro" class="intro">

		<div class="slogan">
			<h2>SELAMAT DATANG </h2>
			<h4 style="text-transform: uppercase;">SISTEM INFORMASI MANAJEMEN KEPEGAWAIAN PARIWISATA SULSEL</h4>
		</div>
		<div class="page-scroll">
			<a href="#tentang" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
	</section>
	<!-- /Section: intro -->

	<!-- Section: tentang -->
	<section id="tentang" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="wow bounceInDown" data-wow-delay="0.4s">
							<div class="section-heading">
								<h2>Tentang SIMPEG</h2>
								<i class="fa fa-2x fa-angle-down"></i>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-lg-offset-5">
					<hr class="marginbot-50">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="wow fadeInLeft" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-desc">
								<h5>Sistem Informasi Manajemen Kepegawaian </h5>
								<p>Adalah Sistem Informasi yang dirancang untuk menangani berbagai hal dalam pengurusan kepegawaian mulai dari pengisian, pengolahan dan pemusatan data secara terkomputerisasi sehingga dapat menangani berbagai laporan yang berhubungan dengan kepegawaian. SIMPEG ini dapat diakses menggunakan internet sehingga dapat lebih mudah diakses dan memudahkan dalam proses administrasi kepegawaian.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: tentang -->

	<!-- Section: Informasi -->
	<section id="informasi" class="home-section text-center bg-gray">

		<div class="heading-about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="wow bounceInDown" data-wow-delay="0.4s">
							<div class="section-heading">
								<h2>Papan Informasi</h2>
								<i class="fa fa-2x fa-angle-down"></i>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-5">
					<hr class="marginbot-50">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="wow fadeInLeft" data-wow-delay="0.2s">
						<div class="service-box">
							<table class="datatables stripe hover row-border dt-right" style="width: 100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>Ditujukan</th>
										<th>Informasi</th>
										<th>File Yang Perlu Di Download</th>
										<th>Terakhir Diupdate</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($data_informasi as $data_informasi) { ?>
										<tr>
											<td><?= $i ?></td>
											<td><?= $data_informasi->ditujukan ?></td>
											<td><?= $data_informasi->isi ?></td>
											<td><a target="_blank" href="<?= upload_url('informasi') . $data_informasi->files ?>"><?= $data_informasi->files ?></a></td>
											<td><?= date('d M Y', strtotime($data_informasi->uat)) ?></td>
										</tr>

									<?php $i++;
									} ?>
								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: Informasi -->

	<!-- Section: statistik -->
	<section id="statistik" class="home-section text-center">

		<div class="heading-about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="wow bounceInDown" data-wow-delay="0.4s">
							<div class="section-heading">
								<h2>STATISTIK KEPEGAWAIAN SAAT INI</h2>
								<i class="fa fa-2x fa-angle-down"></i>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-5">
					<hr class="marginbot-50">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon" style="font-size: 4.0em">
								<strong><?= $total_pegawai ?></strong>
							</div>
							<div class="service-desc">
								<h5>TOTAL PEGAWAI</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon" style="font-size: 4.0em">
								<strong><?= $data_pegawai_pns ?></strong>
							</div>
							<div class="service-desc">
								<h5>PEGAWAI PNS</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon" style="font-size: 4.0em">
								<strong><?= $data_pegawai_cpns ?></strong>
							</div>
							<div class="service-desc">
								<h5>PEGAWAI CPNS</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="wow fadeInRight" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon" style="font-size: 4.0em">
								<strong><?= $data_pegawai_pensiun ?></strong>
							</div>
							<div class="service-desc">
								<h5>PEGAWAI PENSIUN</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Statistik Berdasarkan Jenis Kelamin</h3>
						</div>
						<div class="panel-body">
							<!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
							<canvas id="donut-chart-jeniskelamin" height="150"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Statistik Berdasarkan Pendidikan Terakhir</h3>
						</div>
						<div class="panel-body">
							<!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
							<canvas id="donut-chart-pendidikan" height="150"></canvas>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Statistik Berdasarkan Golongan</h3>
						</div>
						<div class="panel-body">
							<!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
							<canvas id="donut-chart-golongan" height="150"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Statistik Berdasarkan Eselon</h3>
						</div>
						<div class="panel-body">
							<!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
							<canvas id="donut-chart-eselon" height="150"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: statistik -->

	<!-- Section: fitur -->
	<section id="fitur" class="home-section text-center bg-gray">

		<div class="heading-about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="wow bounceInDown" data-wow-delay="0.4s">
							<div class="section-heading">
								<h2>FITUR</h2>
								<i class="fa fa-2x fa-angle-down"></i>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-5">
					<hr class="marginbot-50">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon">
								<img src="<?= home_assets() ?>img/online.png" alt="" />
							</div>
							<div class="service-desc">
								<h5>ONLINE</h5>
								<p>Aplikasi dibangun berbasis website sehingga dapat diakses kapanpun dan dari manapun oleh setiap pengguna di masing-masing SKPD/OPD dengan menggunakan jaringan internet</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon">
								<img src="<?= home_assets() ?>img/history.png" alt="" />
							</div>
							<div class="service-desc">
								<h5>HISTORY SYSTEM</h5>
								<p>Data yang telah diinput oleh masing-masing SKPD/OPD menjadi database pemerintah daerah masing-masing serta dapat dilihat atau diubah pada tahun-tahun berikutnya</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon">
								<img src="<?= home_assets() ?>img/base.png" alt="" />
							</div>
							<div class="service-desc">
								<h5>BASE SYSTEM</h5>
								<p>Setiap SKPD/OPD memiliki username dan password masing-masing untuk login serta menambahkan/mengubah data pegawai dari SKPD/OPD yang dikelolanya</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="wow fadeInRight" data-wow-delay="0.2s">
						<div class="service-box">
							<div class="service-icon">
								<img src="<?= home_assets() ?>img/output.png" alt="" />
							</div>
							<div class="service-desc">
								<h5>OUTPUT</h5>
								<p>Data hasil input dapat diunduh dalam format PDF. Format hasil unduhan dibuat sesuai dengan peraturan dan perundang-undangan yang berlaku.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: fitur -->

	<!-- Section: galeri -->
	<!-- <section id="galeri" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>GALERI</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div> -->

	<!-- galeri -->
	<!-- <div class="portfolio-container section-container ">
	        <div class="container">
	            <div class="row">
                	<div class="col-sm-4 portfolio-box wow fadeInUp">
	                	<div class="portfolio-box-image">
	                		<img src="<?= home_assets() ?>img/galeri1.jpg"  width="100%" alt="" data-at2x="<?= home_assets() ?>img/galeri1.jpg">
	                	</div>
                    </div>
                    <div class="col-sm-4 portfolio-box wow fadeInDown">
	                	<div class="portfolio-box-image">
	                		<img src="<?= home_assets() ?>img/galeri2.jpg"  width="100%" alt="" data-at2x="<?= home_assets() ?>img/galeri2.jpg">
	                	</div>
                    </div>
                    <div class="col-sm-4 portfolio-box wow fadeInUp">
	                	<div class="portfolio-box-image">
	                		<img src="<?= home_assets() ?>img/galeri3.jpg"  width="100%" alt="" data-at2x="<?= home_assets() ?>img/galeri3.jpg">
	                	</div>
                    </div>
	            </div>
	        </div>
        </div> -->

	<!-- </section> -->
	<!-- /Section: galeri -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
						<div class="page-scroll marginbot-30">
							<a href="#intro" id="totop" class="btn btn-circle">
								<i class="fa fa-angle-double-up animated"></i>
							</a>
						</div>
					</div>
					<p>&copy;DINAS PARIWISATA SULSEL. All Rights Reserved.</p>
					<div class="credits">
						<!--
                            All the links in the footer should remain intact.
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                        -->
						<a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/">SIMPEG</a> by <a href="https://upanastudio.com/">Upana Studio</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Core JavaScript Files -->
	<script src="<?= home_assets() ?>js/jquery.min.js"></script>
	<script src="<?= home_assets() ?>js/bootstrap.min.js"></script>
	<script src="<?= assets_url() ?>vendor/datatables/js-main/jquery.dataTables.min.js"></script>
	<script src="<?= home_assets() ?>js/jquery.easing.min.js"></script>
	<script src="<?= home_assets() ?>js/jquery.scrollTo.js"></script>
	<script src="<?= home_assets() ?>js/wow.min.js"></script>
	<script src="<?= assets_url() ?>vendor/chartist/js/chartist.min.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="<?= home_assets() ?>js/custom.js"></script>

	<!-- Chart JS -->
	<script src="<?= assets_url() ?>vendor/chartist/js/chartist.min.js"></script>
	<script src="<?= assets_url() ?>vendor/chart-js/Chart.min.js""></script>
    <script>
            var tables = $('.datatables ').DataTable({
			"scrollX": true,
			"language" : { "url" : "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json" , "sEmptyTable" : "Tidak ada data di database" }, columnDefs: [ { targets: '_all' , className: 'dt-left' } ] }); </script> <script type="text/javascript">
		var options;
		var scalesOptions = {
			xAxes: [{
				gridLines: {
					display: false
				}
			}],
			yAxes: [{
				gridLines: {
					color: '#eff3f6',
					drawBorder: false,
				},
			}]
		};

		var data_eselon = {
			labels: ['I/a', 'I/b', 'II/a', 'II/b', 'III/a', 'III/b', 'IV/a', 'IV/b', 'Non-Eselon'],
			series: [<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'Ia' or `eselon` = 'ia'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'I.b' or `eselon` = 'i.b'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'II.a' or `eselon` = 'ii.a'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'II.b' or `eselon` = 'ii.b'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'III.a' or `eselon` = 'iii.a'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'III.b' or `eselon` = 'iii.b'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'IV.a' or `eselon` = 'iv.a'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'IV.b' or `eselon` = 'iv.b'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'Non-Eselon'") ?>
			]
		};

		var data_jeniskelamin = {
			labels: ['Pria', 'Wanita'],
			series: [
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `jenis_kelamin` = 'Pria'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `jenis_kelamin` = 'Wanita'") ?>
			]
		};

		var data_pendidikan = {
			labels: ['SD', 'SMP', 'SMA', 'D-I', 'D-II', 'D-III', 'S1/D-IV', 'S2', 'S3'],
			series: [
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='SD' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='SMP' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='SMA' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='D-I' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='D-II' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='D-III' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='S1/D-IV' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='S2' AND riwayat_pendidikan.saat_ini ='1'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `riwayat_pendidikan` on data_pegawai.nip = riwayat_pendidikan.nip WHERE riwayat_pendidikan.tingkat ='S3' AND riwayat_pendidikan.saat_ini ='1'") ?>

			]
		};

		var data_golongan = {
			labels: ['I/A', 'I/B', 'I/C', 'I/D', 'II/A', 'II/B', 'II/C', 'II/D', 'III/A', 'III/B', 'III/C', 'III/D', 'IV/A', 'IV/B', 'IV/C', 'IV/D', 'IV/E'],
			series: [
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='A'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='B'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='C'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='D'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='A'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='B'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='C'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='D'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='A'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='B'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='C'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='D'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='A'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='B'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='C'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='D'") ?>,
				<?= $this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='E'") ?>

			]
		};
		var ctxDonutChart = document.getElementById("donut-chart-golongan").getContext("2d");
		var ctxDonutChartEselon = document.getElementById("donut-chart-eselon").getContext("2d");
		var ctxDonutChartJenisKelamin = document.getElementById("donut-chart-jeniskelamin").getContext("2d");
		var ctxDonutChartPendidikan = document.getElementById("donut-chart-pendidikan").getContext("2d");


		var donutChartEselon = new Chart(ctxDonutChartEselon, {
			type: 'bar',
			data: {
				labels: data_eselon.labels,
				datasets: [{
					data: data_eselon.series,
					backgroundColor: ['#4A90E2', '#7CAC25', '#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E', ],
					label: 'Total Data',
					borderColor: 'transparent',
					backgroundColor: 'rgba(1,279,148,.50)'
				}]
			},
			options: {
				responsive: true,
				scales: scalesOptions,
			}
		});

		var donutChartJenisKelamin = new Chart(ctxDonutChartJenisKelamin, {
			type: 'pie',
			data: {
				labels: data_jeniskelamin.labels,
				datasets: [{
					data: data_jeniskelamin.series,
					backgroundColor: ['#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E', ],
				}]
			},
			options: {
				responsive: true,
				legend: {
					position: 'left',
				},
			}
		});

		var donutChartPendidikan = new Chart(ctxDonutChartPendidikan, {
			type: 'radar',
			data: {
				labels: data_pendidikan.labels,
				datasets: [{
					data: data_pendidikan.series,
					label: 'Pendidikan',
					// backgroundColor: ['#4A90E2', '#7CAC25', '#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E', '#D29DBA','#A54GD8','#98D53G'],
					backgroundColor: 'rgba(248,155,2,0.50)',
					borderColor: 'rgb(248,155,2)',
					pointBackgroundColor: 'rgb(248,155,2)',
					borderWidth: 2
				}]
			},
			options: {
				legend: {
					position: 'right'
				},
				scale: {
					ticks: {
						beginAtZero: true
					}
				},
			}
		});

		var donutChart = new Chart(ctxDonutChart, {
			type: 'bar',
			data: {
				labels: data_golongan.labels,
				datasets: [{
					data: data_golongan.series,
					backgroundColor: ['#4A90E2', '#7CAC25', '#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E'],
					label: 'Total Data',
					borderColor: 'transparent',
					backgroundColor: 'rgba(1,153,248,.50)'
				}]
			},
			options: {
				responsive: true,
				scales: scalesOptions,
			}
		});
	</script>

</body>

</html>
