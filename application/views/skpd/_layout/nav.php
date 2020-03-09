<?php $modul = $this->uri->segment(2); $method = $this->uri->segment(3); $param = $this->uri->segment(4);?>

<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li class="menu-group">Menu Bidang<br /> <hr /></li>

                <li class="panel">
                    <a class="<?=($modul == 'beranda' ? 'active' : '')?>" href="<?=skpd_url('beranda')?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="panel"><a href="<?=skpd_url('pegawai')?>" class="<?=($modul == 'pegawai' ? 'active' : '')?>"><i class="lnr lnr-chart-bars"></i> <span>Data Pegawai</span></a>
                </li>
                <li class="panel"><a href="<?=skpd_url('dokumen')?>" class="<?=($modul == 'dokumen' ? 'active' : '')?>"><i class="lnr lnr-chart-bars"></i> <span>Dokumen Pegawai</span>
<!--                        <span class="label label-success">new!</span></a>-->
                </li>
                <li class="panel">
                    <a class="<?=($modul == 'Honorer' || $modul == 'honorer' ? 'active' : '')?>" href="<?=skpd_url('Honorer')?>"><i class="ti-comments"></i> <span>Data Honorer</span>
<!--                        <span class="label label-success">new!</span></a>-->
                </li>                
 <!--                <li class="panel"><a href="<?=skpd_url('DataHonorer')?>" class="<?=($modul == 'DataHonorer' ? 'active' : '')?>"><i class="lnr lnr-chart-bars"></i> <span>Data Pegawai Honorer</span></a>
                </li> -->
               <li class="panel">
                    <a  href="#" aria-expanded="<?=($modul == 'peremajaan' ? 'true' : 'false')?>" class="<?=($modul == 'peremajaan' ? 'active' : 'collapsed')?>"  data-target="#peremajaandata" data-parent="#sidebar-nav" data-toggle="collapse"><i class="ti-agenda"></i> <span>Peremajaan Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="peremajaandata" class="<?=($modul == 'peremajaan' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'peremajaan' ? 'true' : 'false')?>" >
                        <ul class="submenu">
                            <li class="panel">
                                <a href="#" class="<?=(($modul == 'peremajaan' AND $method == 'keluarga') ? 'active' : 'collapsed')?>" data-toggle="collapse" data-target="#submenuKeluarga">Keluarga <i class="icon-submenu ti-angle-left"></i></a>
                                <div id="submenuKeluarga" class="<?=(($modul == 'peremajaan' AND $method == 'keluarga') ? 'collapse in' : 'collapse')?>" aria-expanded="<?=(($modul == 'peremajaan' AND $method == 'keluarga') ? 'true' : 'false')?>">
                                    <ul class="submenu">
                                        <li><a href="<?=skpd_url('peremajaan/keluarga/suamiistri')?>" class="<?=($param == 'suamiistri' ? 'active' : 'collapsed')?>">Suami & Istri</a></li>
                                        <li><a href="<?=skpd_url('peremajaan/keluarga/anak')?>" class="<?=($param == 'anak' ? 'active' : 'collapsed')?>"" class="active">Anak</a></li>
                                        <li><a href="<?=skpd_url('peremajaan/keluarga/orangtua')?>" class="<?=($param == 'orangtua' ? 'active' : 'collapsed')?>"" class="active">Orang Tua</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="panel">
                                <a href="#" class="<?=(($modul == 'peremajaan' AND $method == 'kepegawaian') ? 'active' : 'collapsed')?>" data-toggle="collapse" data-target="#submenuKepegawaian">Kepegawaian <i class="icon-submenu ti-angle-left"></i></a>
                                <div id="submenuKepegawaian" class="<?=(($modul == 'peremajaan' AND $method == 'kepegawaian') ? 'collapse in' : 'collapse')?>" aria-expanded="<?=(($modul == 'peremajaan' AND $method == 'kepegawaian') ? 'true' : 'false')?>">
                                    <ul class="submenu">
                                        <li><a href="<?=skpd_url('peremajaan/kepegawaian/cpns')?>" class="<?=($param == 'cpns' ? 'active' : 'collapsed')?>">CPNS</a></li>
                                        <li><a href="<?=skpd_url('peremajaan/kepegawaian/pns')?>" class="<?=($param == 'pns' ? 'active' : 'collapsed')?>"" class="active">PNS</a></li>
                                    </ul>
                                </div>
                            </li>
                           <!--  <li class="panel"><a href="<?=skpd_url('peremajaan/kepegawaian')?>"class="<?=($method == 'kepegawaian' ? 'active' : '')?>">Kepegawaian</a>
                            </li> -->
                            <li class="panel"><a href="<?=skpd_url('peremajaan/pendidikan')?>"class="<?=($method == 'pendidikan' ? 'active' : '')?>">Pendidikan</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/jabatan')?>"class="<?=($method == 'jabatan' ? 'active' : '')?>">Jabatan</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/mutasi')?>"class="<?=($method == 'mutasi' ? 'active' : '')?>">Mutasi</a>
                            </li>
                            <li class="panel">
                                <a href="#" class="<?=(($modul == 'peremajaan' AND $method == 'diklat') ? 'active' : 'collapsed')?>" data-toggle="collapse" data-target="#submenudiklat">Diklat <i class="icon-submenu ti-angle-left"></i></a>
                                <div id="submenudiklat" class="<?=(($modul == 'peremajaan' AND $method == 'diklat') ? 'collapse in' : 'collapse')?>" aria-expanded="<?=(($modul == 'peremajaan' AND $method == 'diklat') ? 'true' : 'false')?>">
                                    <ul class="submenu">
                                        <li><a href="<?=skpd_url('peremajaan/diklat/struktural')?>" class="<?=($param == 'struktural' ? 'active' : 'collapsed')?>">Struktural</a></li>
                                        <li><a href="<?=skpd_url('peremajaan/diklat/fungsional')?>" class="<?=($param == 'fungsional' ? 'active' : 'collapsed')?>"" class="active">Fungsional</a></li>
                                        <li><a href="<?=skpd_url('peremajaan/diklat/teknis')?>" class="<?=($param == 'teknis' ? 'active' : 'collapsed')?>"" class="active">Teknis</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/kursus')?>"class="<?=($method == 'kursus' ? 'active' : '')?>">Kursus</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/penghargaan')?>"class="<?=($method == 'penghargaan' ? 'active' : '')?>">Penghargaan</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/profesi')?>"class="<?=($method == 'profesi' ? 'active' : '')?>">Profesi</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/unor')?>"class="<?=($method == 'unor' ? 'active' : '')?>">PNS Unor</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/pemberhentian')?>"class="<?=($method == 'pemberhentian' ? 'active' : '')?>">Pemberhentian</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/angkakredit')?>"class="<?=($method == 'angkakredit' ? 'active' : '')?>">Angka Kredit</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/dp3')?>"class="<?=($method == 'dp3' ? 'active' : '')?>">DP3</a>
                            </li>
                            <li class="panel"><a href="<?=skpd_url('peremajaan/skp')?>"class="<?=($method == 'skp' ? 'active' : '')?>">SKP</a>
                            </li>   
                            <li class="panel"><a href="<?=skpd_url('peremajaan/cuti')?>"class="<?=($method == 'cuti' ? 'active' : '')?>">Cuti</a>
                            </li>
                            <!-- <li class="panel"><a href="<?=skpd_url('peremajaan/pwk')?>"class="<?=($method == 'pwk' ? 'active' : '')?>">PWK</a> -->
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="panel">
                    <a  aria-expanded="<?=($modul == 'migrasiPegawai' ? 'true' : 'false')?>" class="<?=($modul == 'MigrasiPegawai' ? 'active' : 'collapsed')?>"   href="#migrasi" data-toggle="collapse" class="collapsed"><i class="ti-exchange-vertical"></i> <span>Migrasi Pegawai</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="migrasi" class="<?=($modul == 'MigrasiPegawai' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'migrasPegawai' ? 'true' : 'false')?>" >
                        <ul class="nav">
                            <!-- <li class="panel"><a href="<?=skpd_url('MigrasiPegawai/daftarPegawai')?>"class="<?=($method == 'daftarPegawai' ? 'active' : '')?>">Daftar Pegawai</a></li> -->
                            <li class="panel"><a href="<?=skpd_url('MigrasiPegawai/daftarKenaikanPangkat')?>"class="<?=($method == 'daftarKenaikanPangkat' ? 'active' : '')?>">Daftar Kenaikan Pangkat</a></li>
                           <!--  <li class="panel"><a href="<?=skpd_url('MigrasiPegawai/daftarMutasi')?>"class="<?=($method == 'daftarMutasi' ? 'active' : '')?>">Daftar Mutasi</a></li> -->
                            <!-- <li class="panel"><a href="<?=skpd_url('MigrasiPegawai/daftarPensiun')?>"class="<?=($method == 'daftarPensiun' ? 'active' : '')?>">Daftar Pensiun</a></li> -->
                            <li class="panel"><a href="<?=skpd_url('MigrasiPegawai/daftarMeninggal')?>"class="<?=($method == 'daftarMeninggal' ? 'active' : '')?>">Meninggal</a></li>
                        </ul>
                    </div>
                </li>
                <!-- <li class="panel">
                    <a aria-expanded="<?=($modul == 'laporan' ? 'true' : 'false')?>" class="<?=($modul == 'laporan' ? 'active' : 'collapsed')?>"   href="#forms" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="forms" class="<?=($modul == 'laporan' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'laporan' ? 'true' : 'false')?>" >
                        <ul class="nav"> -->
                            <!-- <li class="panel"><a href="<?=skpd_url('laporan/riwayatHidup')?>"class="<?=($method == 'riwayatHidup' ? 'active' : '')?>">Daftar Riwayat Hidup</a></li> -->
                            <!-- <li class="panel"><a href="<?=skpd_url('laporan/unitKerja')?>"class="<?=($method == 'unitKerja' ? 'active' : '')?>">Daftar Unit Kerja</a></li>
                            <li class="panel"><a href="<?=skpd_url('laporan/namaPejabat')?>"class="<?=($method == 'namaPejabat' ? 'active' : '')?>">Daftar Nama Pejabat</a></li>
                            <li class="panel"><a href="<?=skpd_url('laporan/jenisKelamin')?>"class="<?=($method == 'jenisKelamin' ? 'active' : '')?>">Rekap Jenis Kelamin</a></li>
                            <li class="panel"><a href="<?=skpd_url('laporan/golongan')?>"class="<?=($method == 'golongan' ? 'active' : '')?>">Rekap Jabatan</a></li> -->
                       <!--  </ul>
                    </div>
                </li> -->
                <li class="panel">
                    <a class="<?=($modul == 'mpp' ? 'active' : '')?>" href="<?=skpd_url('mpp')?>"><i class="ti-align-justify"></i> <span>Daftar MPP</span></a>
                </li>

                <li class="panel">
                    <a class="<?=($modul == 'DataOrganisasi' ? 'active' : '')?>" href="<?=skpd_url('DataOrganisasi')?>"><i class="ti-comments"></i> <span>Organisasi</span>
<!--                        <span class="label label-success">new!</span></a>-->
                </li>

<!--                <li class="panel">-->
<!--                    <a class="" href="#"><i class="ti-bell"></i> <span>Pembaharuan</span><span class="label label-info">Segera!</span></a>-->
<!--                </li>-->
<!--                <li class="panel">-->
<!--                    <a class="" href="#"><i class="ti-comments"></i> <span>Tanya Admin</span><span class="label label-info">Segera!</span></a>-->
<!--                </li>-->

                <!-- <li class="panel">
                    <a class="<?=($modul == 'verifikasi' ? 'active' : '')?>" href="<?=skpd_url('verifikasi')?>"><i class="ti-bell"></i> <span>Verifikasi Data</span></a>
                </li> -->
                <!-- <li class="panel">
                    <a  aria-expanded="<?=($modul == 'pengaturan' ? 'true' : 'false')?>" class="<?=($modul == 'pengaturan' ? 'active' : 'collapsed')?>" href="#pengaturan" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Pengaturan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="pengaturan" class="<?=($modul == 'pengaturan' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'pengaturan' ? 'true' : 'false')?>" >
                        <ul class="nav">
                            <li class="panel"><a href="<?=skpd_url('pengaturan/pegawai')?>"class="<?=($method == 'pegawai' ? 'active' : '')?>">Kelola Pegawai</a></li>
                            <li class="panel"><a href="<?=skpd_url('pengaturan/skpd')?>"class="<?=($method == 'skpd' ? 'active' : '')?>">Kelola SKPD</a></li>
                        </ul>
                    </div>
                </li> -->
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
