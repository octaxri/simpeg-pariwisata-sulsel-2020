<!doctype html>
<html lang="en">

<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap" rel="stylesheet">

<head>
    <!-- Required meta tags -->
    <link rel="icon" type="image/png" sizes="96x96" href="public/assets/img/pemprov.png">

    <meta charset="utf-8">
    <title>SIMPEG PARIWISATA SULSEL</title>
<!--    <link rel="shortcut icon" href="--><?//= home_assets_new() ?><!--media/logosimpel.ico">-->
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= home_assets_new() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= home_assets_new() ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Bootstrap CSS -->

</head>

<body id="landing-page">
<!-- Navbar -->
<div id="navbar_mobile" class="navbar-mobile blue-solid nav-mobile-padding">
    <div class="row">
        <div class="col-6 text-left logo-wrap">
            <a href="#background-page" class="page-scroll"><img id="logoHeader" src="<?= home_assets_new() ?>media/logo-sulsel-stroke-putih.png" alt=""></a>
        </div>
        <div class="col-6 text-right menu-wrap">
            <div id="menu-mobile">
                <div class="btn-group">
                    <button type="button" class="btn btn-brand dropdown-toggle no-border no-background"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MENU <i class="fa fa-bars"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#info-page" class="dropdown-item page-scroll" type="button">INFO</a>
                        <a href="#statistik-page" class="dropdown-item page-scroll" type="button">STATISTIK</a>
                        <a href="#fitur-page" class="dropdown-item page-scroll" type="button">FITUR</a>
                        <a href="/simpeg/login" class="dropdown-item page-scroll" type="button">LOGIN</a>
                    </div>
                </div>
            </div>
            <ul id="menu-full" class="list-group list-group-horizontal">
                <li class="list-group-item item-active">
                    <a class="link-item page-scroll" href="#info-page">INFO</a>
                </li>
                <li class="list-group-item link-active">
                    <a class="link-item page-scroll" href="#statistik-page">STATISTIK</a>
                </li>
                <li class="list-group-item">
                    <a class="link-item page-scroll" href="#fitur-page">FITUR</a>
                </li>
                <li class="list-group-item">
                    <a class="link-item page-scroll" href="/simpeg/login">LOGIN</a>
                </li>
            </ul>

        </div>
    </div>
</div>
<!-- Akhir Navbar -->

<!-- Background -->
<section id="background-page">
    <div id="home" class="background-image col-md" style="" data-section="home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-justify wow fadeInUp" id="bodytext">
                        SISTEM<br />INFORMASI<br />KEBUDPAR<br />SULSEL</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Background -->

<!-- Multiple Login -->
<section>
    <div class="container container-login wow fadeInUp" id="multiplelogin">
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <div class="icon">01</div>
                    <div class="content">
                        <h3>SIMPEG</h3>
                        <p>Sistem Kepegawaian Dinas Pariwisata Provinsi Sulawesi Selatan</p>
                        <a href="/simpeg/login" id="tombolLogin">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="icon">02</div>
                    <div class="content">
                        <h3>Aset</h3>
                        <p>Daftar Aset Dinas Kebudayaan dan Pariwisata Sulawesi Selatan</p>
                        <a href="#" id="tombolLogin">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="icon">03</div>
                    <div class="content">
                        <h3>Manajemen PAD</h3>
                        <p>Manajemen Pendapatan Asli Daerah Dinas Kebudayaan dan Pariwisata Provinsi Sulawesi Selatan
                        </p>
                        <a href="#" id="tombolLogin">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="icon">04</div>
                    <div class="content">
                        <h3>Program</h3>
                        <p>Daftar Program Dinas Kebudayaan dan Pariwisata Provinsi Sulawesi Selatan</p>
                        <a href="#" id="tombolLogin">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Multiple Login -->

<!-- Tentang SIMPEG -->
<section id="info-page">
    <div id="tentangSimpeg">
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="text-center wow fadeInUp" id="headtentangsimpeg" style="margin-top: -80px;">TENTANG
                    SISTEM KEBUDPAR SULSEL
                </h1>
                <!-- <div class="col">
               <img src="assets/media/tentang-simpeg.png" width="48%">
             </div> -->
            </div>
        </div>
        <div id="infoSimpeg" class="row justify-content-center">
            <div class="col-sm-8 wow fadeInUp">
                <p>Adalah Sistem Informasi yang dirancang untuk menangani berbagai hal dalam pengurusan kepegawaian
                    Dinas
                    Kebudayaan dan Pariwisata Sulawesi Selatan. Mulai dari pengisian, pengolahan dan pemusatan data
                    secara
                    terkomputerisasi sehingga dapat menangani berbagai laporan
                    yang berhubungan dengan kepegawaian. Sistem informasi ini hanya dapat diakses oleh pegawai Dinas
                    Kebudayaan
                    dan Pariwisata untuk proses administrasi kepegawaian.</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="media">
        <div class="col-md">
            <img src="<?= home_assets_new() ?>media/bgleft.png" class="text-align"
                 style="width: 38%; margin-left: -16px; margin-top: 30px;">
        </div>
</section>
<!-- Akhir Tentang SIMPEG -->

<!-- Statistik -->
<section id="statistik-page" class="statistik mt-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm">
                <h1 class="wow fadeInUp" id="statistik">STATISTIK KEPEGAWAIAN</h1>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h5 class="panel-title text-center mt-5 mb-5 text-muted">Statistik Berdasarkan Jenis Kelamin</h5>
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
                        <h5 class="panel-title text-center mt-5 mb-5 text-muted">Statistik Berdasarkan Pendidikan Terakhir</h5>
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
                        <h5 class="panel-title text-center mt-5 mb-5 text-muted">Statistik Berdasarkan Golongan</h5>
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
                        <h5 class="panel-title text-center mt-5 mb-5 text-muted">Statistik Berdasarkan Eselon</h5>
                    </div>
                    <div class="panel-body">
                        <!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
                        <canvas id="donut-chart-eselon" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="middle mt-5">
        <div class="counting-sec">
            <div class="row inner-width text-center">
                <div class="col-6 col-md-3">
                    <i class="fas fa-briefcase"></i>
                    <div class="num">
                        <strong><?= $total_pegawai ?></strong>
                    </div>
                    <h5>Total Pegawai</h5>
                </div>

                <div class="col-6 col-md-3">
                    <i class="fas fa-user-tie"></i>
                    <div class="num">
                        <strong><?= $data_pegawai_pns ?></strong>
                    </div>
                    <h5>Pegawai PNS</h5>
                </div>

                <div class="col-6 col-md-3">
                    <i class="fas fa-user-tie"></i>
                    <div class="num">
                        <strong><?= $data_pegawai_cpns ?></strong>
                    </div>
                    <h5>Pegawai CPNS</h5>
                </div>

                <div class="col-6 col-md-3">
                    <i class="fas fa-users"></i>
                    <div class="num">
                        <strong><?= $data_pegawai_pensiun ?></strong>
                    </div>
                    <h5>Pegawai Pensiun</h5>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Akhir statistik -->

<!-- Awal Fitur -->
<section id="fitur-page" class="fitur">
    <div class="container text-center">
        <div class="row justify-content-center mb-3">
            <div class="col">
                <div class="text-center wow fadeInUp" id="fitur">FITUR</div>
            </div>
        </div>
        <div class="row justify-content-center wow fadeInUp fitur-wrap" style="">
            <div class="col-md">
                <img src="<?= home_assets_new() ?>media/web-icon/png/021-search engine.png" style="width: 150px;">
                <h5 style="margin-top: 20px;" id="">ONLINE</h5>
                <p class="text-align" style="margin-top: 30px; text-align: left;">Aplikasi dibangun berbasis website
                    sehingga
                    dapat diakses kapanpun dan darimanapun oleh setiap pengguna di masing-masing SKPD/OPD dengan
                    menggunakan
                    jaringan internet.</p>
            </div>
            <div class="col-md">
                <img src="<?= home_assets_new() ?>media/web-icon/png/020-download.png" style="width: 150px;">
                <h5 style="margin-top: 20px;">HISTORY SYSTEM</h5>
                <p class="text-align" style="margin-top: 30px; text-align: left;">Data yang telah diinput oleh
                    masing-masing
                    SKPD/OPD menjadi database pemerintah daerah masing-masing serta dapat dilihat atau diubah pada
                    tahun-tahun
                    berikutnya.</p>
            </div>
            <div class="col-md">
                <img src="<?= home_assets_new() ?>media/web-icon/png/025-web traffic.png" style="width: 150px;">
                <h5 style="margin-top: 20px;">BASE SYSTEM</h5>
                <p class="text-align" style="margin-top: 30px; text-align: left;">Setiap SKPD/OPD memiliki username
                    dan
                    password masing-masing untuk login serta menambahkan / mengubah data pegawai dari SKPD/OPD yang
                    dikelolanya.
                </p>
            </div>
            <div class="col-md">
                <img src="<?= home_assets_new() ?>media/web-icon/png/014-diagram.png" style="width: 150px;">
                <h5 style="margin-top: 20px;">OUTPOT</h5>
                <p class="text-align" style="margin-top: 30px; text-align: left;">Data hasil input dapat diunduh
                    dalam format
                    PDF. Format hasil unduhan dibuat sesuai dengan peraturan dan perundang-undangan yang berlaku.
                </p>
            </div>
        </div>

        <div class="media">
            <div class="col-md">
                <img class="media-img" src="<?= home_assets_new() ?>media/bgright.png" style="">

            </div>



</section>
<!-- Akhir Fitur -->

<!-- F&Q -->
<section class="fq mt-5">
    <div class="container text-center wow fadeInUp">
        <div class="row justify-content-center mb-3">
            <div class="col">
                <h1 class="text-center " id="fq">F&Q</h1>
            </div>
        </div>

        <!-- Awal Collapse -->
        <div class="accordion" id="accordionExample">
            <div class="card" style="border-radius: 30px; margin-bottom: 10px;">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                            Bagaimana Cara Menggunakan Sistem Kebudpar Sulsel
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Untuk menggunakan layanan sistem Kebudpar silahkan isi form pendaftaran yang tersedia. Perlu
                        diketahui
                        bahwa, sistem Kebudpar hanya dapat digunakan jika anda adalah pegawai terdaftar di dinas
                        pariwisata dan
                        mengisi data asli serta melampirkan kartu tanda penduduk anda. Kami akan sangat hati-hati
                        dalam
                        memverifikasi keaslian data Anda dan sangat teliti terhadap praktek rekayasa sosial dan
                        pemalsuan data.
                    </div>
                </div>
            </div>

            <div class="card" style="border-radius: 30px; margin-bottom: 10px;">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Fitur-fitur yang tersedia !
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">

                        Fitur sistem Kebudpar terdiri dari :
                        <li>Sistem Kepegawaian</li>
                        <li>Daftar Aset Dinas Kebudayaan Pariwisata Sulsel</li>
                        <li>Manajemen Pendapatan Asli Daerah (PAD)</li>
                        <li>Program Dinas Kebudayaan dan Pariwisata</li>

                    </div>
                </div>
            </div>
            <div class="card" style="border-radius: 30px; margin-bottom: 10px;">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Apakah Data Pegawai Aman?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Keamanan dan data privasi pegawai dinas Kebudayaan dan Pariwisata tentu saja terjaga
                        kerahasiannya.
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Collapse -->


    </div>
    </div>
</section>
<!-- Akhir F&Q -->

<!-- Footer -->
<footer class="page-footer font-small footer-background pt-4 mt-5" style="color: white;">
    <div class="container text-center text-md-left mt-5">
        <div class="row mt-3">
            <div class="col-md-3">
                <h6>Sistem Informasi Kebudayaan dan Pariwisata Sulsel</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Jl. Jend. Sudirman No.23, Mangkura, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90114</p>
            </div>
            <div class="offset-sm-1 col-md-4">
                <h6 class="text-uppercase font-weight-bold">Links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!" style="color: white;">Event</a>
                </p>
                <p>
                    <a href="#!" style="color: white;">Video</a>
                </p>
            </div>
            <div class="col-md-4 text-center">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Support</h6>

                <button disabled="" class="btn btn-link no-border phone-number">
                    <i class="fa fa-phone"></i> +628522123123123
                </button>
                <!-- <div class="row">
                   <div class="col-1">
                      <i class="fa fa-phone"></i>
                   </div>
                   <div class="col-9">
                      <p></p>
                   </div>
                </div> -->
            </div>
        </div>


    </div>




    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020
        <a href="www.upanastudio.com" style="color: white;"> Upana Studio</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- End Footer -->
</body>

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="<?= home_assets_new() ?>js/amchart/core.js"></script>
<script src="<?= home_assets_new() ?>js/amchart/charts.js"></script>
<script src="<?= home_assets_new() ?>js/amchart/animated.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?= home_assets_new() ?>js/counterup/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="<?= home_assets_new() ?>js/amchart2/core.js"></script>
<script src="<?= home_assets_new() ?>js/amchart2/charts.js"></script>
<script src="<?= home_assets_new() ?>js/amchart2/animated.js"></script>

<!-- End Javascript -->

<!-- Chart JS -->
<script src="<?= assets_url() ?>vendor/chartist/js/chartist.min.js"></script>
<script src="<?= assets_url() ?>vendor/chart-js/Chart.min.js""></script>

<script type="text/javascript">
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
        series: [<?= $this->crud->qa("SELECT * FROM `data_pegawai` WHERE `eselon` = 'I.a' or `eselon` = 'i.a'") ?>,
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

<!-- Change Background when Scroll -->
<script>
    $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 500);
    });
</script>
<script>
    $('.page-scroll').on('click', function (e) {

        var tujuan = $(this).attr('href');


        var elemenTujuan = $(tujuan);

        if (tujuan == "#info-page") {
            $('html , body').animate({
                scrollTop: elemenTujuan.offset().top - 125
            });
        }
        else if( tujuan == "#statistik-page"){
            $('html , body').animate({
                scrollTop: elemenTujuan.offset().top - 60
            });
        }
        else if(tujuan == "#fitur-page"){
            $('html , body').animate({
                scrollTop: elemenTujuan.offset().top - 30
            });
        }
        else{
            $('html , body').animate({
                scrollTop: elemenTujuan.offset().top - 50
            });
        }


        e.preventDefault();
    });
</script>

<!--end::Page Scripts -->


</html>