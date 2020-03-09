<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top" style="padding:10px 0px 10px 0px;">
    <div class="brand" style="position: static" >
        <div  style="color: white;" width="100px">
         <a href="index.html" class="logo" style="float: left">
             <img src="<?=assets_url()?>img/sulsel.png" alt="" class="img-responsive logo" width="120" height="">
         </a>
         <div class="judul">Sistem Informasi Manajemen Kepegawaian PARIWISATA SULSEL
<!--             <div class="sub-judul">Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</div>-->
         </div>
     </div>
 </div>
<div class="container-fluid">
    <div id="navbar-menu">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown" aria-expanded="true">
                    <i class="ti-bell"></i>
                    <?=$mpp_notif ? '<span class="badge bg-danger">'.count($mpp_notif).'</span>' : '' ?>
                </a>
                <ul class="dropdown-menu notifications">
                    <li align="center">Terdapat <?=count($mpp_notif)?> Pemberitahuan Belum Dibaca</li>
                    <?php foreach ($mpp_notif as $mpp_notif): ?>
                        <li>
                        <a href="<?=admin_url('beranda/mark_as_read/'.$mpp_notif->id)?>" class="notification-item">
                            <i class="fa fa-bullhorn custom-bg-purple"></i>
                            <p><span class="text">Pegawai dengan NIP: <?=$mpp_notif->nip?> akan pensiun dalam <label class="label label-<?=check_mpp_label($mpp_notif->month)?>"><?=$mpp_notif->month?> Bulan</label></span> <span class="timestamp"><?=tgl_indo($mpp_notif->iat)?></span></p>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    <li><a href="<?=admin_url('beranda/mark_all_as_read')?>" class="more">Tandai semua telah dibaca</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=assets_url()?>img/user.png" class="img-circle" alt="Avatar"> <span><?=$this->session->fullname?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                    <li><a href="<?=login_url('logout')?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- END NAVBAR -->
