<?php $modul = $this->uri->segment(2); $method = $this->uri->segment(3); $param = $this->uri->segment(4);?>

<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li class="menu-group">Menu Administrator <br /> <hr /></li>

                <li class="panel">
                    <a class="<?=($modul == 'beranda' ? 'active' : '')?>" href="<?=admin_url('beranda')?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="panel">
                    <a class="<?=($modul == 'informasi' ? 'active' : '')?>" href="<?=admin_url('informasi')?>"><i class="fa fa-info"></i> <span>Papan Informasi</span>
<!--                        <span class="label label-success">baru!</span></a>-->
                </li>
                <li class="panel">
                    <a  aria-expanded="<?=($modul == 'masterdata' ? 'true' : 'false')?>" class="<?=($modul == 'masterdata' ? 'active' : 'collapsed')?>"   href="#subLayouts" data-toggle="collapse" class="collapsed"><i class="lnr lnr-layers"></i> <span>Referensi Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subLayouts" class="<?=($modul == 'masterdata' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'masterdata' ? 'true' : 'false')?>" >
                        <ul class="nav">
                            <li class="panel"><a href="<?=admin_url('masterdata/umum')?>" class="<?=($method == 'umum' ? 'active' : '')?>">Data Umum</a></li>
                            <li class="panel"><a href="<?=admin_url('masterdata/instansi')?>" class="<?=($method == 'instansi' ? 'active' : '')?>">Data Instansi</a></li>
                            <li class="panel"><a href="<?=admin_url('masterdata/dokumen')?>" class="<?=($method == 'dokumen' ? 'active' : '')?>">Data Dokumen</a></li>
                            <li class="panel"><a href="<?=admin_url('masterdata/eselon')?>" class="<?=($method == 'eselon' ? 'active' : '')?>">Tingkat Eselon</a></li>
                            <li class="panel"><a href="<?=admin_url('masterdata/jabatan')?>" class="<?=($method == 'jabatan' ? 'active' : '')?>">Referensi Jabatan</a></li>
                            <li class="panel"><a href="<?=admin_url('masterdata/kepegawaian')?>" class="<?=(($modul == 'masterdata' AND $method == 'kepegawaian') ? 'active' : '')?>">Referensi Kepegawaian</a></li>
                            <li class="panel"><a href="<?=admin_url('masterdata/alamat')?>" class="<?=($method == 'alamat' ? 'active' : '')?>">Referensi Lokasi</a></li>
                        </ul>
                    </div>
                </li>
                <li class="panel"><a href="<?=admin_url('pegawai')?>" class="<?=($modul == 'pegawai' ? 'active' : '')?>"><i class="lnr lnr-chart-bars"></i> <span>Data Pegawai</span></a>
                </li>
                <li class="panel"><a href="<?=admin_url('dokumen')?>" class="<?=($modul == 'dokumen' ? 'active' : '')?>"><i class="fa fa-folder-open" aria-hidden="true"></i> <span>Dokumen Pegawai</span>
<!--                        <span class="label label-success">baru!</span></a>-->
                </li> 
                <li class="panel"><a href="<?=admin_url('honorer')?>" class="<?=($modul == 'honorer' ? 'active' : '')?>"><i class="lnr lnr-chart-bars"></i> <span>Data Honorer</span>
<!--                        <span class="label label-success">baru!</span></a>-->
                </li>               
 <!--                <li class="panel"><a href="<?=admin_url('DataHonorer')?>" class="<?=($modul == 'DataHonorer' ? 'active' : '')?>"><i class="lnr lnr-chart-bars"></i> <span>Data Pegawai Honorer</span></a>
                </li> -->
               <li class="panel">
                    <a  href="#" aria-expanded="<?=($modul == 'peremajaan' ? 'true' : 'false')?>" class="<?=($modul == 'peremajaan' ? 'active' : 'collapsed')?>"  data-target="#peremajaandata" data-parent="#sidebar-nav" data-toggle="collapse"><i class="ti-agenda"></i> <span>Peremajaan Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="peremajaandata" class="<?=($modul == 'peremajaan' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'peremajaan' ? 'true' : 'false')?>" >
                        <ul class="submenu">
                            <li class="panel">
                                <a href="#" class="<?=(($modul == 'peremajaan' AND $method == 'kepegawaian') ? 'active' : 'collapsed')?>" data-toggle="collapse" data-target="#submenuKepegawaian">Kepegawaian <i class="icon-submenu ti-angle-left"></i></a>
                                <div id="submenuKepegawaian" class="<?=(($modul == 'peremajaan' AND $method == 'kepegawaian') ? 'collapse in' : 'collapse')?>" aria-expanded="<?=(($modul == 'peremajaan' AND $method == 'kepegawaian') ? 'true' : 'false')?>">
                                    <ul class="submenu">
                                        <li><a href="<?=admin_url('peremajaan/kepegawaian/cpns')?>" class="<?=($param == 'cpns' ? 'active' : 'collapsed')?>">CPNS</a></li>
                                        <li><a href="<?=admin_url('peremajaan/kepegawaian/pns')?>" class="<?=($param == 'pns' ? 'active' : 'collapsed')?>"" class="active">PNS</a></li>
                                    </ul>
                                </div>
                            </li>
                           <!--  <li class="panel"><a href="<?=admin_url('peremajaan/kepegawaian')?>"class="<?=($method == 'kepegawaian' ? 'active' : '')?>">Kepegawaian</a>
                            </li> -->
                            <li class="panel"><a href="<?=admin_url('peremajaan/pendidikan')?>"class="<?=($method == 'pendidikan' ? 'active' : '')?>">Pendidikan</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/jabatan')?>"class="<?=($method == 'jabatan' ? 'active' : '')?>">Jabatan</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/mutasi')?>"class="<?=($method == 'mutasi' ? 'active' : '')?>">Mutasi</a>
                            </li>
                            <li class="panel">
                                <a href="#" class="<?=(($modul == 'peremajaan' AND $method == 'diklat') ? 'active' : 'collapsed')?>" data-toggle="collapse" data-target="#submenudiklat">Diklat <i class="icon-submenu ti-angle-left"></i></a>
                                <div id="submenudiklat" class="<?=(($modul == 'peremajaan' AND $method == 'diklat') ? 'collapse in' : 'collapse')?>" aria-expanded="<?=(($modul == 'peremajaan' AND $method == 'diklat') ? 'true' : 'false')?>">
                                    <ul class="submenu">
                                        <li><a href="<?=admin_url('peremajaan/diklat/struktural')?>" class="<?=($param == 'struktural' ? 'active' : 'collapsed')?>">Struktural</a></li>
                                        <li><a href="<?=admin_url('peremajaan/diklat/fungsional')?>" class="<?=($param == 'fungsional' ? 'active' : 'collapsed')?>"" class="active">Fungsional</a></li>
                                        <li><a href="<?=admin_url('peremajaan/diklat/teknis')?>" class="<?=($param == 'teknis' ? 'active' : 'collapsed')?>"" class="active">Teknis</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/kursus')?>"class="<?=($method == 'kursus' ? 'active' : '')?>">Kursus</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/penghargaan')?>"class="<?=($method == 'penghargaan' ? 'active' : '')?>">Penghargaan</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/profesi')?>"class="<?=($method == 'profesi' ? 'active' : '')?>">Profesi</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/unor')?>"class="<?=($method == 'unor' ? 'active' : '')?>">PNS Unor</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/pemberhentian')?>"class="<?=($method == 'pemberhentian' ? 'active' : '')?>">Pemberhentian</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/angkakredit')?>"class="<?=($method == 'angkakredit' ? 'active' : '')?>">Angka Kredit</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/dp3')?>"class="<?=($method == 'dp3' ? 'active' : '')?>">DP3</a>
                            </li>
                            <li class="panel"><a href="<?=admin_url('peremajaan/skp')?>"class="<?=($method == 'skp' ? 'active' : '')?>">SKP</a>
                            </li>   
                            <li class="panel"><a href="<?=admin_url('peremajaan/cuti')?>"class="<?=($method == 'cuti' ? 'active' : '')?>">Cuti</a>
                            </li>
                            <!-- <li class="panel"><a href="<?=admin_url('peremajaan/pwk')?>"class="<?=($method == 'pwk' ? 'active' : '')?>">PWK</a> -->
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="panel">
                    <a  aria-expanded="<?=($modul == 'migrasiPegawai' ? 'true' : 'false')?>" class="<?=($modul == 'MigrasiPegawai' ? 'active' : 'collapsed')?>"   href="#migrasi" data-toggle="collapse" class="collapsed"><i class="ti-exchange-vertical"></i> <span>Migrasi Pegawai</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="migrasi" class="<?=($modul == 'MigrasiPegawai' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'migrasPegawai' ? 'true' : 'false')?>" >
                        <ul class="nav">
                            <!-- <li class="panel"><a href="<?=admin_url('MigrasiPegawai/daftarPegawai')?>"class="<?=($method == 'daftarPegawai' ? 'active' : '')?>">Daftar Pegawai</a></li> -->
                            <li class="panel"><a href="<?=admin_url('MigrasiPegawai/daftarKenaikanPangkat')?>"class="<?=($method == 'daftarKenaikanPangkat' ? 'active' : '')?>">Daftar Kenaikan Pangkat</a></li>
                           <!--  <li class="panel"><a href="<?=admin_url('MigrasiPegawai/daftarMutasi')?>"class="<?=($method == 'daftarMutasi' ? 'active' : '')?>">Daftar Mutasi</a></li> -->
                            <!-- <li class="panel"><a href="<?=admin_url('MigrasiPegawai/daftarPensiun')?>"class="<?=($method == 'daftarPensiun' ? 'active' : '')?>">Daftar Pensiun</a></li> -->
                            <li class="panel"><a href="<?=admin_url('MigrasiPegawai/daftarMeninggal')?>"class="<?=($method == 'daftarMeninggal' ? 'active' : '')?>">Meninggal</a></li>
                        </ul>
                    </div>
                </li>
                <!--<li class="panel">
                    <a aria-expanded="<?=($modul == 'laporan' ? 'true' : 'false')?>" class="<?=($modul == 'laporan' ? 'active' : 'collapsed')?>"   href="#forms" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Laporan</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="forms" class="<?=($modul == 'laporan' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'laporan' ? 'true' : 'false')?>" >
                        <ul class="nav">
                            <li class="panel"><a href="<?=admin_url('laporan/riwayatHidup')?>"class="<?=($method == 'riwayatHidup' ? 'active' : '')?>">Daftar Riwayat Hidup</a></li>-->
                            <!-- <li class="panel"><a href="<?=admin_url('laporan/unitKerja')?>"class="<?=($method == 'unitKerja' ? 'active' : '')?>">Daftar Unit Kerja</a></li>
                            <li class="panel"><a href="<?=admin_url('laporan/namaPejabat')?>"class="<?=($method == 'namaPejabat' ? 'active' : '')?>">Daftar Nama Pejabat</a></li>
                            <li class="panel"><a href="<?=admin_url('laporan/jenisKelamin')?>"class="<?=($method == 'jenisKelamin' ? 'active' : '')?>">Rekap Jenis Kelamin</a></li>
                            <li class="panel"><a href="<?=admin_url('laporan/golongan')?>"class="<?=($method == 'golongan' ? 'active' : '')?>">Rekap Jabatan</a></li> -->
                        <!--</ul>
                    </div>
                </li>-->
                <li class="panel">
                    <a class="<?=($modul == 'mpp' ? 'active' : '')?>" href="<?=admin_url('mpp')?>"><i class="ti-align-justify"></i> <span>Daftar MPP</span></a>
                </li>

                <li class="panel">
                    <a class="<?=($modul == 'dataduk' ? 'active' : '')?> <?=($modul == 'DataDuk' ? 'active' : '')?>" href="<?=admin_url('dataduk')?>"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span>Duk</span>
<!--                        <span class="label label-success">baru!</span></a>-->
                </li>
                <li class="panel">
                    <a class="<?=($modul == 'DataOrganisasi' ? 'active' : '')?>" href="<?=admin_url('DataOrganisasi')?>"><i class="fa fa-th" aria-hidden="true"></i> <span>Tabel Organisasi</span>
<!--                        <span class="label label-success">baru!</span></a>-->
                </li>
  
<!--                 <li class="panel">
                    <a class="<?=($modul == 'DataMutasi' ? 'active' : '')?>" href="<?=admin_url('DataMutasi')?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Data Mutasi</span> <span class="label label-success">baru!</span></a>
                </li> -->

                <li class="panel">
                    <a  aria-expanded="<?=($modul == 'DataMutasi' ? 'true' : 'false')?>" class="<?=($modul == 'DataMutasi' ? 'active' : 'collapsed')?>" href="#DataMutasi" data-toggle="collapse" class="collapsed"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Data Mutasi</span>  <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="DataMutasi" class="<?=($modul == 'DataMutasi' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'DataMutasi' ? 'true' : 'false')?>" >
                        <ul class="nav">
                            <li class="panel"><a href="<?=admin_url('DataMutasi/individu')?>"class="<?=($method == 'individu' ? 'active' : '')?>">SK Individu</a></li>
                            <li class="panel"><a href="<?=admin_url('DataMutasi/kelompok')?>"class="<?=($method == 'kelompok' || $method == 'tambah_sk_pegawai' || $method == 'details' ? 'active' : '')?>">SK Kolektif</a></li>
                        </ul>
                    </div>
                </li>

                <!-- <li class="panel">
                    <a class="<?=($modul == 'verifikasi' ? 'active' : '')?>" href="<?=admin_url('verifikasi')?>"><i class="ti-bell"></i> <span>Verifikasi Data</span></a>
                </li> -->
                <li class="panel">
                    <a  aria-expanded="<?=($modul == 'pengaturan' ? 'true' : 'false')?>" class="<?=($modul == 'pengaturan' ? 'active' : 'collapsed')?>" href="#pengaturan" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Pengaturan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="pengaturan" class="<?=($modul == 'pengaturan' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'pengaturan' ? 'true' : 'false')?>" >
                        <ul class="nav">
                            <li class="panel"><a href="<?=admin_url('pengaturan/pegawai')?>"class="<?=($method == 'pegawai' ? 'active' : '')?>">Kelola Pegawai</a></li>
                            <li class="panel"><a href="<?=admin_url('pengaturan/skpd')?>"class="<?=($method == 'skpd' ? 'active' : '')?>">Kelola Bidang/Bagian</a></li>
                            <li class="panel"><a href="<?=admin_url('pengaturan/admin')?>"class="<?=($method == 'admin' ? 'active' : '')?>">Kelola ADMIN</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
