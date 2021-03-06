<!-- OVERVIEW -->
<div class="container-fluid">
    <div class="panel panel-profile">
        <div class="clearfix">
            <!-- LEFT COLUMN -->
            <div class="profile-left">
                <!-- PROFILE HEADER -->
                <div class="profile-header">
                    <div class="overlay"></div>
                    <div class="profile-main">
                        <img src="<?=upload_url('fotopegawai').(empty($data_pegawai->gambar) ? 'no_image.jpg' : $data_pegawai->gambar)?>" class="img-thumbnail loaded-image img-square" style="max-width: 125px; max-height:155px;">
                        <h3 class="name"><?=$data_pegawai->gelar_depan != NULL ? $data_pegawai->gelar_depan.'.' : '' ?> <?=$data_pegawai->nama_lengkap?><?=$data_pegawai->gelar_belakang != NULL ? ', '.$data_pegawai->gelar_belakang : '' ?></h3>

                    </div>
                    <div class="profile-stat">
                        <div class="row">
                            <div class="col-md-4 stat-item">
                                <span>Status Golongan</span>
                                <span  class="label label-default "><?=$data_pegawai->jenis_pangkat?></span>
                            </div>
                            <div class="col-md-4 stat-item">
                                <span>Status Jabatan</span>
                                <span  class="label label-default "><?=$data_pegawai->nama_jabatan?></span>
                            </div>
                            <div class="col-md-4 stat-item">
                                <span>Status Pegawai </span>
                                <span class="label label-success " ><?=$data_pegawai->kedudukan_kepegawaian?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE HEADER -->
                <!-- PROFILE DETAIL -->
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading">Info Dasar</h4>
                        <ul class="list-unstyled list-justify">
                            <li>NIP
                                <span> <strong><?=$data_pegawai->nip?></strong></span>
                            </li>
                            <li>NIP Lama
                                <span> <strong><?=$data_pegawai->niplama?></strong></span>
                            </li>
                            <li>Email
                                <span><?=$data_pegawai->email?></span>
                            </li>
                            <li>Telepon / No. HP
                                <span><?=$data_alamat->telepon != null ? $data_alamat->telepon : '-'?> / <?=$data_alamat->hp != null ? $data_alamat->hp : '-'?> </span>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- END PROFILE DETAIL -->
            </div>
            <!-- END LEFT COLUMN -->
            <!-- RIGHT COLUMN -->
            <div class="profile-right">
                <h4 class="heading">Informasi Kepegawaian
                    <div class="pull-right">
                        <a href="<?=pegawai_url('DataPegawai/edit/').$data_pegawai->nip?>" class="btn btn-success btn-xs"><span><i class="fa fa-edit"></i></span>Ubah Data</a>
                        <a href="#" class="btn btn-primary btn-xs"><span><i class="fa fa-print"></i></span>Cetak</a>
                    </div>
                </h4>
                <!-- <div class="text-center"></div> -->
                <!-- AWARDS -->
                <div class="awards">
                    <div class="row" >
                        <div class="col-md-6">
                            <table class="standard-table" style="text-align: left;" width="100%" cellspacing="0" cellpadding="0">
                                <tr class="data-item" data-id="">
                                    <td>Status Kepegawaian</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i><?=$data_pegawai->status_kepegawaian?></i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td width="150">Pangkat/Golongan/Ruang</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i><?=$data_pegawai->jenis_pangkat?></i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Bidang/Bagian</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i> <?=$data_pegawai->satuan_kerja?></i></td>
                                </tr>
<!--                                <tr class="data-item" data-id="">-->
<!--                                    <td>Bagian</td>-->
<!--                                    <td width="10px" style="color: #848484;">:</td>-->
<!--                                    <td><i> - </i></td>-->
<!--                                </tr>-->
<!--                                <tr class="data-item" data-id="">-->
<!--                                    <td>Sub Bagian</td>-->
<!--                                    <td width="10px" style="color: #848484;">:</td>-->
<!--                                    <td><i> - </i></td>-->
<!--                                </tr>-->
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="standard-table" style="text-align: left;" width="100%" cellspacing="0" cellpadding="0">
                                <tr class="data-item" data-id="">
                                    <td>Eselon</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i> <?=$data_pegawai->eselon?> </i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Jenis Jabatan</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i><?=$data_pegawai->jenis_jabatan?></i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Nama Jabatan </td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i><?=$data_pegawai->nama_jabatan?></i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>TMT Jabatan</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i><?=date('d F Y',strtotime($data_pegawai->tmt_jabatan))?></i></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END AWARDS -->
                <!-- TABBED CONTENT -->
                <div class="custom-tabs-line tabs-line-bottom left-aligned">
                    <ul class="nav" role="tablist">
                        <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Data Pribadi</a></li>
                        <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Data keluarga</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-bottom-left1">
                        <div class="col-md-6">
                            <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                                <tr class="data-item" data-id="">
                                    <td>Tempat Lahir</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i> <?=$data_pegawai->tempat_lahir?> </i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Tanggal Lahir</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i><?=date('d F Y',strtotime($data_pegawai->nip))?></i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Usia</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i> <?php
                                    $akhir = new DateTime(date('m/d/Y'));
                                    $awal = new DateTime($data_pegawai->tanggal_lahir);
                                    echo $akhir->diff($awal)->format("%y Thn %m Bln %d Hr")?> </i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Agama</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i> <?=$data_pegawai->agama?> </i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Jenis Kelamin</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td><i> <?=$data_pegawai->jenis_kelamin?> </i></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td width="150">Gol. Darah</td>
                                    <td width="1">:</td>
                                    <td><?=$data_pegawai->golongan_darah?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td width="150">Alamat</td>
                                    <td width="1">:</td>
                                    <td><?=$data_alamat->alamat?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Kabupaten/Kota</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_alamat->kab?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Kecamatan</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_alamat->kec?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Kelurahan</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_alamat->kel?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Kode Pos</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_alamat->kode_pos?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td colspan="3"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">

                                <tr class="data-item" data-id="">
                                    <td>Tinggi Badan (cm)</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganbadan->tinggi_badan?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>Berat Badan (kg)</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td>  <?=$data_keteranganbadan->berat_badan?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>NIK</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td>  <?=$data_keteranganlainnya->no_ktp?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No. KARPEG </td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_karpeg?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No. ASKES</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_askes?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No. TASPEN</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_taspen?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No. KARSI/KARSU</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_karis?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>No. NPWP</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_npwp?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>No. KORPRI</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_korpri?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td colspan="3"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-bottom-left2">
                        <div class="panel-group project-accordion" id="accordion">
                            <div class="panel project-milestone">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-small">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#istrisuami">

                                            <span class="milestone-title"><strong>Data Istri/Suami</strong></span>
                                            <i class="fa toggle-icon fa-plus-circle"></i>
                                        </a>

                                    </h4>
                                </div>
                                <div id="istrisuami" class="panel-collapse collapse">
                                    <div class="panel-body no-padding">
                                        <table  id="tbl_pasangan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable ">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Jenis </th>
                                                    <th>Nama</th>
                                                    <th>Tempat Tanggal Lahir</th>
                                                    <th>Nomor Akta Nikah</th>
                                                    <th>Tanggal Akta Nikah</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Keterangan</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($data_pasangan != NULL): ?>
                                                    <?php $i = 1; foreach ($data_pasangan as $data_pasangan): ?>
                                                        <tr class="data-itempasangan" data-id="<?=$data_pasangan->id_pasangan?>">
                                                            <td><?=$i?></td>
                                                            <td><?=$data_pasangan->jenis?></td>
                                                            <td><?=$data_pasangan->nama?></td>
                                                            <td><?=$data_pasangan->ttl?></td>
                                                            <td><?=$data_pasangan->akta_nikah?></td>
                                                            <td><?=$data_pasangan->tanggal_nikah?></td>
                                                            <td><?=$data_pasangan->pekerjaan?></td>
                                                            <td><?=($data_pasangan->meninggal == '0') ? 'Hidup' : 'Meninggal'?></td>
                                                            <td align="center">
                                                                <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-sm" onclick="editData('data_pasangan','<?=$data_pasangan->id_pasangan?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                <a onclick="hapusData('pasangan','<?=$data_pasangan->id_pasangan?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; endforeach ?>
                                                    <?php endif ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel project-milestone">
                                    <div class="panel-heading" >
                                        <h4 class="panel-title panel-small">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#anak">

                                                <span class="milestone-title"><strong>Data Anak</strong></span>
                                                <i class="fa toggle-icon fa-plus-circle"></i>
                                            </a>

                                        </h4>
                                    </div>
                                    <div id="anak" class="panel-collapse collapse">
                                        <div class="panel-body no-padding">
                                            <!-- BORDERED TABLE -->
                                            <table  id="tbl_anak" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable ">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Status </th>
                                                        <th>Nama</th>
                                                        <th>Tempat Tanggal Lahir</th>
                                                        <th>Nomor Akta Lahir</th>
                                                        <th>Tanggal Akta Lahir</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Keterangan</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($data_anak != NULL): ?>
                                                        <?php foreach ($data_anak as $data_anak): ?>
                                                            <?php $i = 1; ?>
                                                            <tr class="data-itemanak" data-id="<?=$data_anak->id_anak?>">
                                                                <td><?=$i?></td>
                                                                <td><?=$data_anak->status?></td>
                                                                <td><?=$data_anak->nama?></td>
                                                                <td><?=$data_anak->ttl?></td>
                                                                <td><?=$data_anak->no_akta?></td>
                                                                <td><?=$data_anak->tanggal_akta?></td>
                                                                <td><?=$data_anak->pekerjaan?></td>
                                                                <td><?=($data_anak->meninggal == '0') ? 'Hidup' : 'Meninggal'?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_anak" class="btn btn-primary btn-sm" onclick="editData('data_anak','<?=$data_anak->id_anak?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" onclick="hapusData('anak','<?=$data_anak->id_anak?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                            <?php $i++; ?>
                                                        <?php endforeach ?>
                                                    <?php endif ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel project-milestone">
                                    <div class="panel-heading" >
                                        <h4 class="panel-title panel-small">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#orangtua">

                                                <span class="milestone-title"><strong>Data Orang Tua</strong></span>
                                                <i class="fa toggle-icon fa-plus-circle"></i>
                                            </a>

                                        </h4>
                                    </div>
                                    <div id="orangtua" class="panel-collapse collapse">
                                        <div class="panel-body no-padding">
                                            <!-- BORDERED TABLE -->
                                            <table  id="tbl_ortu" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable ">
                                                <thead>
                                                    <tr >
                                                        <th>No.</th>
                                                        <th>Status </th>
                                                        <th>Nama</th>
                                                        <th>Tempat Tanggal Lahir</th>
                                                        <th>Nomor Akta Lahir</th>
                                                        <th>Tanggal Akta Lahir</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Keterangann</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($data_orangtua != NULL): ?>
                                                        <?php foreach ($data_orangtua as $data_orangtua): ?>
                                                            <?php $i = 1; ?>
                                                            <tr class="data-itemorangtua" data-id="<?=$data_orangtua->id_orangtua?>">
                                                                <td><?=$i?></td>
                                                                <td><?=$data_orangtua->status?></td>
                                                                <td><?=$data_orangtua->nama?></td>
                                                                <td><?=$data_orangtua->ttl?></td>
                                                                <td><?=$data_orangtua->no_akta?></td>
                                                                <td><?=$data_orangtua->tanggal_akta?></td>
                                                                <td><?=$data_orangtua->pekerjaan?></td>
                                                                <td><?=($data_orangtua->meninggal == '0') ? 'Hidup' : 'Meninggal'?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal"  onclick="editData('data_ortu','<?=$data_orangtua->id_orangtua?>');" data-target="#edit_ortu" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" onclick="hapusData('orangtua','<?=$data_orangtua->id_orangtua?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                            <?php $i++; ?>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                </tbody>
                                            </table>
                                            <!-- <br> -->
                                            <!-- END BORDERED TABLE -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TABBED CONTENT -->
            </div>
            <!-- END RIGHT COLUMN -->
        </div>
    </div>
    <div class="col-md-12">
        <!-- PANEL NO DIVIDER HEADING -->
        <div class="panel">
            <div class="panel-heading no-divider">
                <h3 class="panel-title" >RIWAYAT PEGAWAI</h3>
            </div>
            <div class="panel-body">
                <div class="custom-tabs-line tabs-line-bottom left-aligned">
                    <div class="scroller scroller-left"><i class="glyphicon glyphicon-chevron-left"></i></div>
                    <div class="scroller scroller-right"><i class="glyphicon glyphicon-chevron-right"></i></div>
                    <div class="wrapper">
                        <ul class="nav list" role="tablist">
                            <li class="active"><a href="#kepegawaian" role="tab" data-toggle="tab" aria-expanded="true">Kepegawaian</a></li>
                            <li class=""><a href="#pendidikan" role="tab" data-toggle="tab" aria-expanded="false">Pendidikan</a></li>
                            <li class=""><a href="#jabatan" role="tab" data-toggle="tab" aria-expanded="false">Jabatan</a></li>
                            <li class=""><a href="#mutasi" role="tab" data-toggle="tab" aria-expanded="false">Mutasi</a></li>
                            <li class=""><a href="#diklat" role="tab" data-toggle="tab" aria-expanded="false">Diklat</a></li>
                            <li class=""><a href="#kursus" role="tab" data-toggle="tab" aria-expanded="false">Kursus</a></li>
                            <li class=""><a href="#penghargaan" role="tab" data-toggle="tab" aria-expanded="false">Penghargaan</a></li>
                            <li class=""><a href="#profesi" role="tab" data-toggle="tab" aria-expanded="false">Profesi</a></li>
                            <li class=""><a href="#unor" role="tab" data-toggle="tab" aria-expanded="false">PNS Unor</a></li>
                            <li class=""><a href="#pemberhentian" role="tab" data-toggle="tab" aria-expanded="false">Pemberhentian</a></li>
                            <li class=""><a href="#angkakredit" role="tab" data-toggle="tab" aria-expanded="false">Angka Kredit</a></li>
                            <li class=""><a href="#dp3" role="tab" data-toggle="tab" aria-expanded="false">DP3</a></li>
                            <li class=""><a href="#skp" role="tab" data-toggle="tab" aria-expanded="false">SKP</a></li>
                            <li class=""><a href="#cuti" role="tab" data-toggle="tab" aria-expanded="false">Cuti</a></li>
                            <!-- <li class=""><a href="#pwk" role="tab" data-toggle="tab" aria-expanded="false">PWK</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="kepegawaian">
                        <!-- BORDERED TABLE -->
                        <div class="col-md-12 no-padding">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Riwayat CPNS</div>
                        </div>
                        <table style="width:100% !important;" id="tbl_riwayat_kepegawaian_cpns" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer" role="grid">
                            <thead>
                                <tr class="data-item" data-id="">
                                    <th colspan="2" class="text-center">Surat Keputusan</th>
                                    <th rowspan="2" >Pangkat/Golongan/Ruang</th>
                                    <th rowspan="2" > TMT</th>
                                    <th rowspan="2" >Pengambil Sumpah</th>
                                    <th colspan="3" class="text-center">Lokasi Kerja</th>
                                    <th colspan="2" class="text-center">Persetujuan BKN (CPNS)</th>
                                    <th rowspan="2"></th>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Instansi</th>
                                    <th>Sub Instansi</th>
                                    <th>Subbidang/Seksi</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody >
                                <?php if ($riwayat_cpns != NULL): ?>
                                    <?php $i = 1; foreach ($riwayat_cpns as $riwayat_cpns): ?>
                                        <tr class="data-item" data-id="">
                                            <td data-no='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->no_sk?></td>
                                            <td data-tanggalsk='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->tanggal_sk?></td>
                                            <td data-pangkat='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->pangkat?></td>
                                            <td data-tanggaltmt='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->tanggal_tmt?></td>
                                            <td data-instansi='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->pejabat?></td>
                                            <td data-instansi='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->instansi?></td>
                                            <td data-subinstansi='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->sub_instansi?></td>
                                            <td data-unker='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->unit_kerja?></td>
                                            <td data-nobkn='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->no_bkn?></td>
                                            <td data-tanggalbkn='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->tanggal_bkn?></td>
                                            <td align="center" >
                                                <a style="" onclick="edit('cpns', '<?=$riwayat_cpns->id_riwayat?>')" data-toggle="modal" data-target="#edit_kepegawaian" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>
                                                <a style="" onclick="hapusRiwayat('pegawai_cpns','<?=$riwayat_cpns->id_riwayat?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $i++; endforeach ?>
                                <?php endif ?>
                            </tbody>
                        </table>
                        <hr />
                        <div class="col-md-12 no-padding">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Riwayat PNS</div>
                        </div>
                        <table id="tbl_riwayat_kepegawaian_pns"  class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer" role="grid">
                            <thead>
                                <tr class="data-item" data-id="">
                                    <th rowspan="2">Pejabat </th>
                                    <th colspan="2" class="text-center">Surat Keputusan</th>
                                    <th rowspan="2" >Pangkat/Golongan/Ruang</th>
                                    <th rowspan="2" > TMT</th>
                                    <th colspan="3" class="text-center">Lokasi Kerja</th>
                                    <th rowspan="2" width="98px;">Sumpah/Janji</th>
                                    <th rowspan="2">Pengambil Sumpah</th>
                                    <th colspan="2" class="text-center">Berita Acara</th>
                                    <th rowspan="2"></th>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Instansi</th>
                                    <th>Sub Instansi</th>
                                    <th>Subbidang/Seksi</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 0.8em;">
                                <?php if ($riwayat_pns != NULL): ?>
                                    <?php $i = 1; foreach ($riwayat_pns as $riwayat_pns): ?>
                                        <tr class="data-item" data-id="">
                                            <td data-pejabat='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->pejabat?></td>
                                            <td data-nosk='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->no_sk?></td>
                                            <td data-tanggalsk='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->tanggal_sk?></td>
                                            <td data-pangkat='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->pangkat?></td>
                                            <td data-tanggaltmt='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->tanggal_tmt?></td>
                                            <td data-instansi='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->instansi?></td>
                                            <td data-subinstansi='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->sub_instansi?></td>
                                            <td data-unker='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->unit_kerja?></td>
                                            <td data-sumpah='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->sumpah?></td>
                                            <td data-pengambilsumpah='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->pengambil_sumpah?></td>
                                            <td data-noberita='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->no_berita?></td>
                                            <td data-tanggalberita='<?=$riwayat_pns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns->tanggal_berita?></td>
                                            <td  align="center">
                                                <a style="font-size: 0.8em; display: inline" onclick="edit('pns', '<?=$riwayat_pns->id_riwayat?>')" data-toggle="modal" data-target="#edit_kepegawaian" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                <a  style="font-size: 0.8em display: inline;" onclick="hapusRiwayat('pegawai_pns','<?=$riwayat_pns->id_riwayat?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php $i++; endforeach ?>
                                <?php endif ?>
                            </tbody>
                        </table>
                        <!-- END BORDERED TABLE -->
                    </div>
                    <div class="tab-pane fade" id="pendidikan">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_pendidikan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr class="data-item" data-id="">
                                        <th>No.</th>
                                        <th>Tingkat </th>
                                        <th>Program Studi</th>
                                        <th>Jurusan</th>
                                        <th>Nama Sekolah</th>
                                        <th>No. Ijazah</th>
                                        <th>Tahun Lulus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($riwayat_pendidikan != NULL): ?>
                                    <?php $i = 1; ?>
                                        <?php foreach ($riwayat_pendidikan as $riwayat_pendidikan): ?>
                                        <tr class="data-itemriwayatpendidikan" data-id="<?=$riwayat_pendidikan->id_riwayat?>">
                                            <td><?=$i?></td>
                                            <td><?=$riwayat_pendidikan->tingkat?></td>
                                            <td><?=$riwayat_pendidikan->nama_prodi?></td>
                                            <td><?=$riwayat_pendidikan->nama_jurusan?></td>
                                            <td><?=$riwayat_pendidikan->nama_sekolah?></td>
                                            <td><?=$riwayat_pendidikan->no_ijazah?></td>
                                            <td><?=$riwayat_pendidikan->tahun_lulus?></td>
                                            <td align="center">
                                                <a data-toggle="modal" data-target="#edit_pendidikan" onclick="editData('pendidikan',<?=$riwayat_pendidikan->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                <a onclick="hapusRiwayat('pendidikan',<?=$riwayat_pendidikan->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $i++; endforeach ?>
                                <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="jabatan">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_jabatan" cellspacing="0" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr class="data-item" data-id="">
                                        <th rowspan="2">No.</th>
                                        <th colspan="3" class="text-center">Jabatan </th>
                                        <th rowspan="2">Eselon </th>
                                        <th colspan="2" class="text-center">TMT</th>
                                        <th colspan="3" class="text-center">Surat Keputusan</th>
                                        <th rowspan="2"></th>
                                    </tr>
                                    <tr>
                                        <th>Jenis</th>
                                        <th>Nama</th>
                                        <th>kedudukan</th>
                                        <th>Jabatan</th>
                                        <th>Pelantikan</th>
                                        <th width="65px;">Pejabat Yang Menetapkan</th>
                                        <th width="65px;">Nomor</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_jabatan != NULL): ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($riwayat_jabatan as $riwayat_jabatan): ?>
                                            <tr class="data-itemriwayatjabatan" data-id="<?=$riwayat_jabatan->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_jabatan->jenis?></td>
                                                <td><?=$riwayat_jabatan->nama_jabatan?></td>
                                                <td><?=$riwayat_jabatan->kedudukan?></td>
                                                <td><?=$riwayat_jabatan->eselon?></td>
                                                <td><?=$riwayat_jabatan->tmt_jabatan?></td>
                                                <td><?=$riwayat_jabatan->tmt_pelantikan?></td>
                                                <td><?=$riwayat_jabatan->pejabat?></td>
                                                <td><?=$riwayat_jabatan->nomor?></td>
                                                <td><?=$riwayat_jabatan->tanggal?></td>
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_jabatan" onclick="editData('jabatan',<?=$riwayat_jabatan->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a onclick="hapusRiwayat('jabatan',<?=$riwayat_jabatan->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                        <?php $i++; endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mutasi">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_mutasi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr class="data-item" data-id="">
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Jabatan </th>
                                        <th rowspan="2">Pangkat </th>
                                        <th rowspan="2">TMT</th>
                                        <th colspan="3" class="text-center">Surat Keputusan</th>
                                        <th rowspan="2"></th>
                                    </tr>
                                    <tr>
                                        <th>Pejabat</th>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_mutasi != NULL): ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($riwayat_mutasi as $riwayat_mutasi): ?>
                                            <tr class="data-itemriwayatmutasi" data-id="<?=$riwayat_mutasi->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_mutasi->jabatan?></td>
                                                <td><?=$riwayat_mutasi->pangkat?></td>
                                                <td><?=$riwayat_mutasi->tmt?></td>
                                                <td><?=$riwayat_mutasi->pejabat?></td>
                                                <td><?=$riwayat_mutasi->nomor?></td>
                                                <td><?=$riwayat_mutasi->tanggal?></td>
                                                <td align="center">
                                                    <a data-toggle="modal" onclick="editData('mutasi',<?=$riwayat_mutasi->id_riwayat?>);" data-target="#edit_mutasi" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a onclick="hapusRiwayat('mutasi',<?=$riwayat_mutasi->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                        <?php $i++; endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="diklat">
                        <div class="table-responsive">
                            <h3>Diklat Struktural</h3>
                            <table id="tbl_riwayat_diklat_struktural" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th>No.</th>
                                        <th>Nama Diklat</th>
                                        <th>Jumlah Jam</th>
                                        <th>Penyelenggara</th>
                                        <th>Tempat</th>
                                        <th>Angkatan</th>
                                        <th>Tahun</th>
                                        <th>No. STTP</th>
                                        <th>Tgl. STTP</th>
                                        <th></th>
                                        <th style="display: none;">Jenis Diklat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_diklat != NULL): ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($riwayat_diklat as $riwayat_diklat): ?>
                                            <?php if ($riwayat_diklat->jenis_diklat == 'struktural'): ?>
                                                <tr class="data-itemriwayatdiklat" data-id="<?=$riwayat_diklat->id_riwayat?>">
                                                    <td><?=$i?></td>
                                                    <td><?=$riwayat_diklat->nama_diklat?></td>
                                                    <td><?=$riwayat_diklat->jumlah_jam?></td>
                                                    <td><?=$riwayat_diklat->penyelenggara?></td>
                                                    <td><?=$riwayat_diklat->tempat?></td>
                                                    <td><?=$riwayat_diklat->angkatan?></td>
                                                    <td><?=$riwayat_diklat->tahun?></td>
                                                    <td><?=$riwayat_diklat->no_sttp?></td>
                                                    <td><?=$riwayat_diklat->tanggal_sttp?></td>
                                                    <td align="center">
                                                        <a onclick="editData('diklat',<?=$riwayat_diklat->id_riwayat?>);" data-toggle="modal" data-target="#edit_diklat_struktural" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                        <a onclick="hapusRiwayat('diklat',<?=$riwayat_diklat->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                    </td>
                                                    <td style="display: none;"><?=$riwayat_diklat->jenis_diklat?></td>
                                                </tr>
                                            <?php endif ?>
                                        <?php $i++; endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                            <br />
                            <hr>
                            <!-- BORDERED TABLE -->
                            <h3>Diklat Fungsional</h3>
                            <table id="tbl_riwayat_diklat_fungsional" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th>No.</th>
                                        <th>Nama Diklat</th>
                                        <th>Jumlah Jam</th>
                                        <th>Penyelenggara</th>
                                        <th>Tempat</th>
                                        <th>Angkatan</th>
                                        <th>Tahun</th>
                                        <th>No. STTP</th>
                                        <th>Tgl. STTP</th>
                                        <th></th>
                                        <th style="display: none;">Jenis Diklat</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_diklat1 != NULL): ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($riwayat_diklat1 as $riwayat_diklat1): ?>
                                            <?php if ($riwayat_diklat1->jenis_diklat == 'fungsional'): ?>
                                                <tr class="data-itemriwayatdiklat" data-id="<?=$riwayat_diklat1->id_riwayat?>">
                                                    <td><?=$i?></td>
                                                    <td><?=$riwayat_diklat1->nama_diklat?></td>
                                                    <td><?=$riwayat_diklat1->jumlah_jam?></td>
                                                    <td><?=$riwayat_diklat1->penyelenggara?></td>
                                                    <td><?=$riwayat_diklat1->tempat?></td>
                                                    <td><?=$riwayat_diklat1->angkatan?></td>
                                                    <td><?=$riwayat_diklat1->tahun?></td>
                                                    <td><?=$riwayat_diklat1->no_sttp?></td>
                                                    <td><?=$riwayat_diklat1->tanggal_sttp?></td>
                                                    <td align="center">
                                                        <a onclick="editData('diklat',<?=$riwayat_diklat1->id_riwayat?>);" data-toggle="modal" data-target="#edit_diklat_fungsional" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                        <a onclick="hapusRiwayat('diklat',<?=$riwayat_diklat1->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                    </td>
                                                    <td style="display: none;"><?=$riwayat_diklat1->jenis_diklat?></td>
                                                </tr>
                                            <?php endif ?>
                                        <?php $i++; endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                            </br>
                            <hr>
                            <!-- BORDERED TABLE -->
                            <h3>Diklat Teknis</h3>
                            <table id="tbl_riwayat_diklat_teknis" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th>No.</th>
                                        <th>Nama Diklat</th>
                                        <th>Jumlah Jam</th>
                                        <th>Penyelenggara</th>
                                        <th>Tempat</th>
                                        <th>Angkatan</th>
                                        <th>Tahun</th>
                                        <th>No. STTP</th>
                                        <th>Tgl. STTP</th>
                                        <th></th>
                                        <th style="display: none;">Jenis Diklat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_diklat2 != NULL): ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($riwayat_diklat2 as $riwayat_diklat2): ?>
                                            <?php if ($riwayat_diklat2->jenis_diklat == 'teknis'): ?>
                                                <tr class="data-itemriwayatdiklat" data-id="<?=$riwayat_diklat2->id_riwayat?>">
                                                    <td><?=$i?></td>
                                                    <td><?=$riwayat_diklat2->nama_diklat?></td>
                                                    <td><?=$riwayat_diklat2->jumlah_jam?></td>
                                                    <td><?=$riwayat_diklat2->penyelenggara?></td>
                                                    <td><?=$riwayat_diklat2->tempat?></td>
                                                    <td><?=$riwayat_diklat2->angkatan?></td>
                                                    <td><?=$riwayat_diklat2->tahun?></td>
                                                    <td><?=$riwayat_diklat2->no_sttp?></td>
                                                    <td><?=$riwayat_diklat2->tanggal_sttp?></td>
                                                    <td align="center">
                                                        <a data-toggle="modal" onclick="editData('diklat',<?=$riwayat_diklat2->id_riwayat?>);" data-target="#edit_diklat_teknis" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                        <a onclick="hapusRiwayat('diklat',<?=$riwayat_diklat2->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                    </td>
                                                    <td style="display: none;"><?=$riwayat_diklat2->jenis_diklat?></td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endif ?>
                                        <?php $i++; endforeach ?>
                                    <?php endif ?>
                                </tbody>
                            </table>
                            </br>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kursus">
                        <div class="table-responsive">

                            <table id="tbl_riwayat_kursus" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Tipe Kursus </th>
                                        <th> Instansi</th>
                                        <th> Jenis Kursus</th>
                                        <th> Nama Kursus</th>
                                        <th> Tahun</th>
                                        <th> Lama Kursus (Hari) </th>
                                        <th> Nomor Sertifikasi </th>
                                        <th> Institusi Penyelenggara</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_kursus != NULL): ?>
                                        <?php $i=1; foreach ($riwayat_kursus as $riwayat_kursus): ?>
                                            <tr class="data-itemriwayatkursus" data-id="<?=$riwayat_kursus->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_kursus->tipe_kursus?></td>
                                                <td><?=$riwayat_kursus->instansi_kursus?></td>
                                                <td><?=$riwayat_kursus->jenis_kursus?></td>
                                                <td><?=$riwayat_kursus->nama_kursus?></td>
                                                <td><?=$riwayat_kursus->tahun_kursus?></td>
                                                <td><?=$riwayat_kursus->lama_kursus?></td>
                                                <td><?=$riwayat_kursus->no_sertifikat_kursus?></td>
                                                <td><?=$riwayat_kursus->institusi_kursus?></td>
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_kursus" onclick="editData('kursus',<?=$riwayat_kursus->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a href="#" onclick="hapusRiwayat('kursus',<?=$riwayat_kursus->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                        <?php $i++; endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="penghargaan">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_penghargaan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Jenis Penghargaan</th>
                                        <th> Nomor SK</th>
                                        <th> Tanggal SK</th>
                                        <th> Tahun</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_penghargaan != NULL): ?>
                                        <?php $i= 1; foreach ($riwayat_penghargaan as $riwayat_penghargaan): ?>
                                            <tr class="data-itemriwayatpenghargaan" data-id="<?=$riwayat_penghargaan->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_penghargaan->jenis_penghargaan?></td>
                                                <td><?=$riwayat_penghargaan->no_sk?></td>
                                                <td><?=$riwayat_penghargaan->tanggal_sk?></td>
                                                <td><?=$riwayat_penghargaan->tahun_penghargaan?></td>
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_penghargaan" onclick="editData('penghargaan',<?=$riwayat_penghargaan->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a onclick="hapusRiwayat('penghargaan',<?=$riwayat_penghargaan->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                        <?php $i++; endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <!-- END BORDERED TABLE -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profesi">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_profesi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Profesi </th>
                                        <th> Penyelenggara</th>
                                        <th> Tahun Lulus</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_profesi != NULL): ?>
                                        <?php $i=1; foreach ($riwayat_profesi as $riwayat_profesi): ?>
                                            <tr class="data-itemriwayatprofesi" data-id="<?=$riwayat_profesi->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_profesi->profesi?></td>
                                                <td><?=$riwayat_profesi->penyelenggara?></td>
                                                <td><?=$riwayat_profesi->tahun_lulus?></td>
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_profesi" onclick="editData('profesi',<?=$riwayat_profesi->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a href="#" onclick="hapusRiwayat('profesi',<?=$riwayat_profesi->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                        <?php $i++; endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="unor">
                        <div class="table-responsive">

                            <table id="tbl_riwayat_unor" style="min-width: 100%;" class="table table-bordered  table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Instansi </th>
                                        <th> Nama UNOR</th>
                                        <th> Nomor SK</th>
                                        <th> Tanggal SK</th>
                                        <!-- <th> Prosedur Awal</th> -->
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_unor != NULL): ?>
                                        <?php $i=1; foreach ($riwayat_unor as $riwayat_unor): ?>
                                            <tr class="data-itemriwayatunor" data-id="<?=$riwayat_unor->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_unor->instansi?></td>
                                                <td><?=$riwayat_unor->nama_unor?></td>
                                                <td><?=$riwayat_unor->no_sk?></td>
                                                <td><?=$riwayat_unor->tanggal_sk?></td>
                                                <!-- <td><?=$riwayat_unor->prosedur_awal?></td> -->
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_unor" onclick="editData('unor',<?=$riwayat_unor->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a href="#" onclick="hapusRiwayat('unor',<?=$riwayat_unor->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                            <?php $i++; endforeach;?>
                                        <?php endif;?>
                                    </tbody>
                                </table>
                                <!-- END BORDERED TABLE -->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pemberhentian">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_pemberhentian" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Jenis Pemberhentian </th>
                                        <th> Kedudukan Hukum</th>
                                        <th> Nomor SK</th>
                                        <th> Tanggal SK</th>
                                        <!-- <th> Prosedur Asal</th> -->
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_pemberhentian != NULL): ?>
                                        <?php $i=1; foreach ($riwayat_pemberhentian as $riwayat_pemberhentian): ?>
                                            <tr class="data-itemriwayatpemberhentian" data-id="<?=$riwayat_pemberhentian->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_pemberhentian->jenis_pemberhentian?></td>
                                                <td><?=$riwayat_pemberhentian->kedudukan_hukum?></td>
                                                <td><?=$riwayat_pemberhentian->no_sk?></td>
                                                <td><?=$riwayat_pemberhentian->tanggal_sk?></td>
                                                <!-- <td><?=$riwayat_pemberhentian->prosedur_asal?></td> -->
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_pemberhentian" onclick="editData('pemberhentian',<?=$riwayat_pemberhentian->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a href="#" onclick="hapusRiwayat('pemberhentian',<?=$riwayat_pemberhentian->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                            <?php $i++; endforeach;?>
                                        <?php endif;?>
                                    </tbody>
                                </table>
                                <!-- END BORDERED TABLE -->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="angkakredit">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_angkakredit" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Nomor SK </th>
                                        <th> Tanggal SK</th>
                                        <th> Kredit Utama</th>
                                        <th> Kredit Penunjang</th>
                                        <th> Total Kredit </th>
                                        <th> Jabatan</th>
                                        <th> </th>
                                        <th style="display: none"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_angkakredit != NULL): ?>
                                        <?php $i=1; $total_kredit=0; foreach ($riwayat_angkakredit as $riwayat_angkakredit): ?>
                                            <tr class="data-itemriwayatangkakredit" data-id="<?=$riwayat_angkakredit->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_angkakredit->no_sk?></td>
                                                <td><?=$riwayat_angkakredit->tanggal_sk?></td>
                                                <td><?=$riwayat_angkakredit->kredit_utama?></td>
                                                <td><?=$riwayat_angkakredit->kredit_penunjang?></td>
                                                <td><?=$riwayat_angkakredit->kredit_total?></td>
                                                <td><?=$riwayat_angkakredit->jabatan?></td>
                                                <td style="display: none">
                                                    <?php
                                                     $total_kredit_utama += floatval($riwayat_angkakredit->kredit_utama);
                                                     $total_kredit_penunjang += floatval($riwayat_angkakredit->kredit_penunjang);
                                                     ?> 
                                                </td>
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_angkakredit" onclick="editData('angkakredit',<?=$riwayat_angkakredit->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a  onclick="hapusRiwayat('angkakredit',<?=$riwayat_angkakredit->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                        <?php $i++; endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                            <br />
                            <div class="col-md-5 col-md-offset-4 form-group pull-right">
                                <label class="col-sm-8 control-label">Total Kredit Penunjang</label>
                                <div class="col-sm-4">
                                    <input id="tot_kpen_angkakredit" type="text" value="<?=$total_kredit_utama?>" class="form-control" readonly="">
                                </div>

                            </div>
                            <div class="col-md-5 col-md-offset-4 form-group pull-right">
                                <label class="col-sm-8 control-label">Total Kredit Utama</label>
                                <div class="col-sm-4">
                                    <input id="tot_ku_angkakredit" type="text" value="<?=$total_kredit_penunjang?>" class="form-control" readonly="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dp3">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_dp3" style="min-width: 100%" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> Tahun </th>
                            <th> Nilai Rata-rata</th>
                            <th> Keterangan</th>
                            <th> Jumlah</th>
                            <th> Pejabat Penilai</th>
                            <th> Atasan Pejabat Penilai</th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_dp3 != NULL): ?>
                            <?php $i=1; foreach ($riwayat_dp3 as $riwayat_dp3): ?>
                            <tr class="data-itemriwayatdp3" data-id="<?=$riwayat_dp3->id_riwayat?>">
                                <td><?=$i?></td>
                                 <td style="display: none"><?=$riwayat_dp3->jenis_jabatan?></td>
                                <td><?=$riwayat_dp3->tahun?></td>
                                <td style="display: none"><?=$riwayat_dp3->kesetiaan?></td>
                                <td style="display: none"><?=$riwayat_dp3->tanggung?></td>
                                <td style="display: none"><?=$riwayat_dp3->kejujuran?></td>
                                <td style="display: none"><?=$riwayat_dp3->prakarsa?></td>
                                <td style="display: none"><?=$riwayat_dp3->prestasi?></td>
                                <td style="display: none"><?=$riwayat_dp3->ketaatan?></td>
                                <td style="display: none"><?=$riwayat_dp3->kerjasama?></td>
                                <td><?=$riwayat_dp3->nilai_ratarata?></td>
                                <td><?=$riwayat_dp3->keterangan?></td>
                                <td><?=$riwayat_dp3->jumlah?></td>
                                <td><?=$riwayat_dp3->nama_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->nip_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->jabatan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->unor_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->golongan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->tmt_pejabat?></td>
                                <td><?=$riwayat_dp3->nama_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->nip_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->jabatan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->unor_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->golongan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3->tmt_atasan_pejabat?></td>
                                <td align="center">
                                   <a data-toggle="modal" data-target="#edit_dp3" onclick="editData('dp3',<?=$riwayat_dp3->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                   <a href="#" onclick="hapusRiwayat('dp3',<?=$riwayat_dp3->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                               </td>
                           </tr>
                           <?php $i++; endforeach;?>
                       <?php endif;?>
                   </tbody>
               </table>  
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skp">
                        <div class="table-responsive">
                              
<table id="tbl_riwayat_skp" style="min-width: 100%" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> Tahun </th>
                            <th> Nilai Rata-rata</th>
                            <th> Keterangan</th>
                            <th> Jumlah</th>
                            <th> Pejabat Penilai</th>
                            <th> Atasan Pejabat Penilai</th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_skp != NULL): ?>
                            <?php $i=1; foreach ($riwayat_skp as $riwayat_skp): ?>
                            <tr class="data-itemriwayatskp" data-id="<?=$riwayat_skp->id_riwayat?>">
                                <td><?=$i?></td>
                                <td style="display: none"><?=$riwayat_skp->jenis_jabatan?></td>
                                <td><?=$riwayat_skp->tahun?></td>
                                <td style="display: none"><?=$riwayat_skp->komitmen?></td>
                                <td style="display: none"><?=$riwayat_skp->kerjasama?></td>
                                <td style="display: none"><?=$riwayat_skp->integritas?></td>
                                <td style="display: none"><?=$riwayat_skp->disiplin?></td>
                                <td style="display: none"><?=$riwayat_skp->kepemimpinan?></td>
                                <td style="display: none"><?=$riwayat_skp->nilai_prestasi_kerja?></td>
                                <td><?=$riwayat_skp->nilai_perilaku_kerja?></td>
                                <td><?=$riwayat_skp->ket_nilai_prestasi_kerja?></td>
                                <td><?=$riwayat_skp->hasil_nilai_perilaku_kerja?></td>
                                <td><?=$riwayat_skp->nama_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->nip_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->jabatan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->unor_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->golongan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->tmt_pejabat?></td>
                                <td><?=$riwayat_skp->nama_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->nip_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->jabatan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->unor_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->golongan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp->tmt_atasan_pejabat?></td>
                                <td align="center">
                                   <a data-toggle="modal" data-target="#edit_skp" onclick="editData('skp',<?=$riwayat_skp->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                   <a href="#" onclick="hapusRiwayat('skp',<?=$riwayat_skp->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                               </td>
                           </tr>
                           <?php $i++; endforeach;?>
                       <?php endif;?>
                   </tbody>
               </table>  
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cuti">
                        <div class="table-responsive">
                            <table id="tbl_riwayat_cuti" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Jenis Cuti </th>
                                        <th> Nomor SK Cuti</th>
                                        <th> Tgl. SKEP</th>
                                        <th> Tanggal Awal</th>
                                        <th> Tanggal Akhir</th>
                                        <th> Tanggal Aktif</th>
                                        <th> No. BKN</th>
                                        <th> Tanggal BKN</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($riwayat_cuti != NULL): ?>
                                        <?php $i=1; foreach ($riwayat_cuti as $riwayat_cuti): ?>
                                            <tr class="data-itemriwayatcuti" data-id="<?=$riwayat_cuti->id_riwayat?>">
                                                <td><?=$i?></td>
                                                <td><?=$riwayat_cuti->jenis_cuti?></td>
                                                <td><?=$riwayat_cuti->no_sk?></td>
                                                <td><?=$riwayat_cuti->tanggal_skep?></td>
                                                <td><?=$riwayat_cuti->tanggal_awal?></td>
                                                <td><?=$riwayat_cuti->tanggal_akhir?></td>
                                                <td><?=$riwayat_cuti->tanggal_aktif?></td>
                                                <td><?=$riwayat_cuti->no_bkn?></td>
                                                <td><?=$riwayat_cuti->tanggal_bkn?></td>
                                                <td align="center">
                                                    <a data-toggle="modal" data-target="#edit_cuti" onclick="editData('cuti',<?=$riwayat_cuti->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                    <a onclick="hapusRiwayat('cuti',<?=$riwayat_cuti->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                            <?php $i++; endforeach;?>
                                        <?php endif;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">  
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
        .columns.adjust()
        // .responsive.recalc();
    });
    $('.panel-collapse').on('shown.bs.collapse', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
        .columns.adjust()
        // .responsive.recalc();
    });
    var hidWidth;
    var scrollBarWidths = 40;

    var widthOfList = function(){
      var itemsWidth = 0;
      $('.list li').each(function(){
        var itemWidth = $(this).outerWidth();
        itemsWidth+=itemWidth;
      });
      return itemsWidth;
    };

    var widthOfHidden = function(){
      return (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
    };

    var getLeftPosi = function(){
      return $('.list').position().left;
    };

    var reAdjust = function(){
      if (($('.wrapper').outerWidth()) < widthOfList()) {
        $('.scroller-right').show();
      }
      else {
        $('.scroller-right').hide();
      }

      if (getLeftPosi()<0) {
        $('.scroller-left').show();
      }
      else {
        $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
      	$('.scroller-left').hide();
      }
    }

    reAdjust();

    $(window).on('resize',function(e){
      	reAdjust();
    });

    $('.scroller-right').click(function() {

      $('.scroller-left').fadeIn('slow');
      $('.scroller-right').fadeOut('slow');

      $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

      });
    });

    $('.scroller-left').click(function() {

    	$('.scroller-right').fadeIn('slow');
    	$('.scroller-left').fadeOut('slow');

      	$('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){

      	});
    });
    </script>
