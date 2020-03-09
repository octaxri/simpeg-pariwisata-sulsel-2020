<?php $modul = $this->uri->segment(2); $method = $this->uri->segment(3); ?>
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
                <div class="office">
                    <h1><i class="lnr lnr-user"></i></h1>
                    <span>PEGAWAI</span>
                </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <!-- <li><a href="<?=pegawai_url('beranda')?>" class="<?=($modul == 'beranda' ? 'active' : '')?>" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li> -->
                        <li class="panel"><a href="<?=pegawai_url('dataPegawai/')?>" class="<?=($modul == 'dataPegawai' ? 'active' : '')?>" ><i  class="lnr lnr-chart-bars"></i> <span>Data Pegawai</span></a></li>
                        <li class="panel">
                            <a  aria-expanded="<?=($modul == 'pengaturan' ? 'true' : 'false')?>" class="<?=($modul == 'pengaturan' ? 'active' : 'collapsed')?>" href="#pengaturan" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Pengaturan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="pengaturan" class="<?=($modul == 'pengaturan' ? 'collapse in' : 'collapse')?>" aria-expanded="<?=($modul == 'pengaturan' ? 'true' : 'false')?>" >
                                <ul class="nav">
                                    <li class="panel"><a href="<?=pegawai_url('pengaturan/ubah_password')?>"class="<?=($method == 'ubah_password' ? 'active' : '')?>">Ubah Password</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li><a href="<?=pegawai_url('riwayatHidup')?>" class="<?=($modul == 'riwayatHidup' ? 'active' : '')?>"><i class="lnr lnr-user"></i> <span>Riwayat Hidup</span></a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
