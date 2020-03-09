<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                <h1 class="page-title"><?=$title?></h1>
                <p class="page-subtitle">Selamat Datang Di Sistem Kepegawaian Pariwisata Sulsel</p>
            </div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                <li class="active"><?=$title?></li>
            </ul>
        </div>
        <div class="container-fluid">
            <?php if ($isi) $this->load->view($isi); ?>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>
