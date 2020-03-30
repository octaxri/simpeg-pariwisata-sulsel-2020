<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top" style="padding:10px 0px 10px 0px;">
    <div class="brand" style="position: static" >
        <div  style="color: white;" width="100px">
            <a href="index.html" class="logo" style="float: left">
                <img src="<?=assets_url()?>img/sulsel.png" alt="" class="img-responsive logo" width="120" height="40">
            </a>
            <div class="judul" style="font-size: 20px; text-transform: uppercase">Sistem Informasi Manajemen Kepegawaian PARIWISATA SULSEL
<!--                <div class="sub-judul">Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</div>-->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="tour-fullwidth" class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=assets_url()?>img/user.png" class="img-circle" alt="Avatar"> <span><?=$this->session->fullname?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=login_url('logout')?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
