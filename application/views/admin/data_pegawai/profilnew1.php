<!-- OVERVIEW -->
<div class="panel panel-headline">
    <div class="panel-heading">
        <center>
            <div class="col-md-12">
                <h3> <strong>DATA LENGKAP PEGAWAI</strong></h3>
            </div>

        </center>
    </div>
    <div class="panel-body">
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="col-md-2">
                    <img src="<?=upload_url('fotopegawai').(empty($data_pegawai->gambar) ? 'no_image.jpg' : $data_pegawai->gambar)?>" class="img-thumbnail loaded-image" style="width:100%">
                </div>
                <div class="col-md-10" style="text-align: left;">
                    <br />
                    <h4 class="panel-title"><?=$data_pegawai->gelar_depan != NULL ? $data_pegawai->gelar_depan.'.' : '' ?> <?=$data_pegawai->nama_lengkap?><?=$data_pegawai->gelar_belakang != NULL ? ', '.$data_pegawai->gelar_belakang : '' ?></h4>
                    <br /><p>NIP : <?=$data_pegawai->nip?></p>
                    <p>NIP LAMA : 19601207 198703 2 001</p>
                </div>
            </div>
            <div class="col-md-6">
                <hr />
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
                        <td>E-mail</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i><?=$data_pegawai->email?></i></td>
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
                        <td>Status Kepegawaian</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i><?=$data_pegawai->status_kepegawaian?></i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td>TMT CPNS</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i><?=$data_pegawai->tmt_cpns?></i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td>Tanggal SK CPNS</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i><?=$data_pegawai->tanggal_sk_cpns?></i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td>No. SK CPNS</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i><?=$data_pegawai->no_sk_cpns?></i></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <hr />
                <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                    <tr class="data-item" data-id="">
                        <td>TMT PNS</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i><?=$data_pegawai->tmt_pns?></i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td>Tanggal SK PNS</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i>  <?=$data_pegawai->tanggal_sk_pns?> </i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td>No. SK PNS</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i>  <?=$data_pegawai->no_sk_pns?> </i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td width="150">Pangkat Gol.</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i><?=$data_pegawai->jenis_pangkat?></i></td>
                    </tr>
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
                    <tr class="data-item" data-id="">
                        <td>Satuan Kerja</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i> <?=$data_pegawai->satuan_kerja?></i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td>Unit Kerja</td>
                        <td width="10px" style="color: #848484;">:</td>
                        <td><i> <?=$data_pegawai->unit_kerja?> </i></td>
                    </tr>
                    <tr class="data-item" data-id="">
                        <td colspan="3"></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <hr>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#utama" role="tab" data-toggle="tab">DATA UTAMA</a></li>
                    <li><a href="#keluarga" role="tab" data-toggle="tab">DATA KELUARGA</a></li>
                    <li><a href="#riwayat" role="tab" data-toggle="tab">DATA RIWAYAT</a></li>
                </ul>
                <div class="tab-content ">
                    <div class="tab-pane fade in active" id="utama">
                        <div class="col-md-6">
                            <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
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
                                    <td>Kab/Kota</td>
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
                                    <td>Telepon</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_alamat->telepon?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>HP</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_alamat->hp?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td>Tinggi Badan</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganbadan->tinggi_badan?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>Berat Badan</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td>  <?=$data_keteranganbadan->berat_badan?></td>
                                </tr>
                                <tr class="data-item" data-id="">
                                    <td colspan="3"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                                <tr class="data-item" data-id="">
                                    <td>No. KTP</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td>  <?=$data_keteranganlainnya->no_ktp?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No. KARPEG </td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_karpeg?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No.ASKES</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_askes?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No. TASPEN</td>
                                    <td width="10px" style="color: #848484;">:</td>
                                    <td> <?=$data_keteranganlainnya->no_taspen?></td>
                                </tr><tr class="data-item" data-id="">
                                    <td>No. KARIS/KARSU</td>
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
                    <div class="tab-pane fade" id="keluarga">
                        <div class="col-md-12 no-padding">
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
                                        <div class="panel-body">
                                            <table  id="tbl_pasangan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Jenis </th>
                                                        <th>Nama</th>
                                                        <th>Tempat Tanggal Lahir</th>
                                                        <th>Pekerjaan</th>
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
                                                                <td><?=$data_pasangan->pekerjaan?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-sm" onclick="editData('data_pasangan','<?=$data_pasangan->id_pasangan?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a onclick="hapusData('pasangan','<?=$data_pasangan->id_pasangan?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                            <?php $i++; endforeach ?>
                                                        <?php endif ?>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#istri"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
                                            <div class="panel-body">
                                                <!-- BORDERED TABLE -->
                                                <table  id="tbl_anak" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Status </th>
                                                            <th>Nama</th>
                                                            <th>Tempat Tanggal Lahir</th>
                                                            <th>Pekerjaan</th>
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
                                                                    <td><?=$data_anak->pekerjaan?></td>
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
                                                <br>
                                                <!-- END BORDERED TABLE -->
                                                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_anak"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
                                            <div class="panel-body">
                                                <!-- BORDERED TABLE -->
                                                <table  id="tbl_ortu" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                                                    <thead>
                                                        <tr >
                                                            <th>No.</th>
                                                            <th>Status </th>
                                                            <th>Nama</th>
                                                            <th>Tempat Tanggal Lahir</th>
                                                            <th>Pekerjaan</th>
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
                                                                    <td><?=$data_orangtua->pekerjaan?></td>
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
                                            <div class="panel-footer">
                                                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_ortu"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="riwayat">
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion1">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="padding: 10px">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#kepegawaian"><strong>Data Riwayat Kepegawaian</strong></a>
                                        </div>
                                        <div id="kepegawaian" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <!-- BORDERED TABLE -->
                                                <div class="col-md-12">
                                                    <div class="alert alert-info"><i class="fa fa-info-circle"></i> Riwayat CPNS</div>
                                                </div>
                                                <table style="width:100% !important;" id="tbl_riwayat_kepegawaian_cpns" class="table table-bordered table-sorting table-hover datatable dataTable no-footer" role="grid">
                                                    <thead>
                                                        <tr class="data-item" data-id="">
                                                            <th colspan="3" class="text-center">Surat Keputusan</th>
                                                            <th rowspan="2" >Pangkat/ Gol.Ruang</th>
                                                            <th rowspan="2" >Tanggal TMT</th>
                                                            <th colspan="3" class="text-center">Lokasi Kerja</th>
                                                            <th colspan="2" class="text-center">Persetujuan BKN (CPNS)</th>
                                                            <th rowspan="2"></th>
                                                        </tr>
                                                        <tr class="data-item" data-id="">
                                                            <th>Pejabat</th>
                                                            <th>Nomor</th>
                                                            <th>Tanggal</th>
                                                            <th>Instansi</th>
                                                            <th>Sub Instansi</th>
                                                            <th>Unit Kerja</th>
                                                            <th>Nomor</th>
                                                            <th>Tanggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody >
                                                        <?php if ($riwayat_cpns != NULL): ?>
                                                            <?php foreach ($riwayat_cpns as $riwayat_cpns): ?>
                                                                <tr class="data-item" data-id="">
                                                                    <td data-pejabat='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->pejabat?></td>
                                                                    <td data-no='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->no_sk?></td>
                                                                    <td data-tanggalsk='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->tanggal_sk?></td>
                                                                    <td data-pangkat='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->pangkat?></td>
                                                                    <td data-tanggaltmt='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->tanggal_tmt?></td>
                                                                    <td data-instansi='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->instansi?></td>
                                                                    <td data-subinstansi='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->sub_instansi?></td>
                                                                    <td data-unker='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->unit_kerja?></td>
                                                                    <td data-nobkn='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->no_bkn?></td>
                                                                    <td data-tanggalbkn='<?=$riwayat_cpns->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_cpns->tanggal_bkn?></td>
                                                                    <td align="center" >
                                                                        <a style="font-size: 0.8em;" onclick="edit('cpns', '<?=$riwayat_cpns->id_riwayat?>')" data-toggle="modal" data-target="#edit_kepegawaian" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                                        <a style="font-size: 0.8em;" onclick="hapusRiwayat('pegawai_cpns','<?=$riwayat_cpns->id_riwayat?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach ?>
                                                        <?php endif ?>
                                                    </tbody>
                                                </table>
                                                <div class="col-md-12">
                                                    <hr>
                                                    <div class="alert alert-info"><i class="fa fa-info-circle"></i> Riwayat PNS</div>
                                                </div>
                                                <table id="tbl_riwayat_kepegawaian_pns"  class="table table-bordered table-sorting table-hover datatable dataTable no-footer" role="grid">
                                                    <thead>
                                                        <tr class="data-item" data-id="">
                                                            <th rowspan="2">Pejabat </th>
                                                            <th colspan="2" class="text-center">Surat Keputusan</th>
                                                            <th rowspan="2" >Pangkat/ Gol.Ruang</th>
                                                            <th rowspan="2" >Tanggal TMT</th>
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
                                                            <th>Unit Kerja</th>
                                                            <th>Nomor</th>
                                                            <th>Tanggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 0.8em;">
                                                        <?php if ($riwayat_pns != NULL): ?>
                                                            <?php foreach ($riwayat_pns as $riwayat_pns): ?>
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
                                                            <?php endforeach ?>
                                                        <?php endif ?>
                                                    </tbody>
                                                </table>
                                                <!-- END BORDERED TABLE -->
                                                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_kepegawaian"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="padding: 10px">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#pendidikan"><strong>Data Riwayat Pendidikan</strong></a>
                                        </div>
                                        <div id="pendidikan" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <!-- BORDERED TABLE -->
                                                <table id="tbl_riwayat_pendidikan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                                                    <thead>
                                                        <tr class="data-item" data-id="">
                                                            <th>No.</th>
                                                            <th>Tingkat </th>
                                                            <th>Pendidikan</th>
                                                            <th>Instansi</th>
                                                            <th>No. Ijazah</th>
                                                            <th>Tgl. Lulus</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if ($riwayat_pendidikan != NULL): ?>
                                                            <?php foreach ($riwayat_pendidikan as $riwayat_pendidikan): ?>
                                                                <?php $i = 1; ?>
                                                                <tr class="data-itemriwayatpendidikan" data-id="<?=$riwayat_pendidikan->id_riwayat?>">
                                                                    <td><?=$i?></td>
                                                                    <td><?=$riwayat_pendidikan->tingkat?></td>
                                                                    <td><?=$riwayat_pendidikan->nama_pendidikan?></td>
                                                                    <td><?=$riwayat_pendidikan->nama_instansi?></td>
                                                                    <td><?=$riwayat_pendidikan->no_ijazah?></td>
                                                                    <td><?=$riwayat_pendidikan->tanggal_lulus?></td>
                                                                    <td align="center">
                                                                        <a data-toggle="modal" data-target="#edit_pendidikan" onclick="editData('pendidikan',<?=$riwayat_pendidikan->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                        <a onclick="hapusRiwayat('pendidikan',<?=$riwayat_pendidikan->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>
                                                            <?php endforeach ?>
                                                        <?php endif ?>
                                                    </tbody>
                                                </table>
                                            </br>
                                            <!-- END BORDERED TABLE -->
                                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pendidikan"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                        </div></div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="padding: 10px">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#jabatan"><strong>Data Riwayat Jabatan</strong></a>
                                    </div>
                                    <div id="jabatan" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <!-- BORDERED TABLE -->
                                            <table id="tbl_riwayat_jabatan" cellspacing="0" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                                                <thead>
                                                    <tr class="data-item" data-id="">
                                                        <th rowspan="2">No.</th>
                                                        <th colspan="2" class="text-center">Jabatan </th>
                                                        <th colspan="2" class="text-center">TMT</th>
                                                        <th colspan="3" class="text-center">Surat Keputusan</th>
                                                        <th rowspan="2"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis</th>
                                                        <th>kedudukan</th>
                                                        <th>Jabatan</th>
                                                        <th>Pelantikan</th>
                                                        <th width="65px;">Pejabat Yang Menandatangani</th>
                                                        <th width="65px;">Nomor</th>
                                                        <th>Tanggal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($riwayat_jabatan != NULL): ?>
                                                        <?php foreach ($riwayat_jabatan as $riwayat_jabatan): ?>
                                                            <?php $i = 1; ?>
                                                            <tr class="data-itemriwayatjabatan" data-id="<?=$riwayat_jabatan->id_riwayat?>">
                                                                <td><?=$i?></td>
                                                                <td><?=$riwayat_jabatan->jenis?></td>
                                                                <td><?=$riwayat_jabatan->kedudukan?></td>
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
                                                            <?php $i++; ?>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                </tbody>
                                            </table>
                                            <br />
                                            <!-- END BORDERED TABLE -->
                                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_jabatan"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="padding: 10px">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#mutasi"><strong>Data Riwayat Mutasi</strong></a>
                                    </div>
                                    <div id="mutasi" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <!-- BORDERED TABLE -->
                                            <table id="tbl_riwayat_mutasi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
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
                                                        <?php foreach ($riwayat_mutasi as $riwayat_mutasi): ?>
                                                            <?php $i = 1; ?>
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
                                                            <?php $i++; ?>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                </tbody>
                                            </table>
                                        </br>
                                        <!-- END BORDERED TABLE -->
                                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_mutasi"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="padding: 10px">
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#golongan"><strong>Data Riwayat Golongan</strong></a>
                                </div>
                                <div id="golongan" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <!-- BORDERED TABLE -->
                                        <table id="tbl_riwayat_golongan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                                            <thead>
                                                <tr >
                                                    <th >No.</th>
                                                    <th >Golongan </th>
                                                    <th >Nomor SK</th>
                                                    <th >Tanggal SK</th>
                                                    <th >TMT Golongan</th>
                                                    <th >Nomor BKN</th>
                                                    <th >Tanggal BKN</th>
                                                    <th >Jenis KP</th>
                                                    <th ></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($riwayat_golongan != NULL): ?>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($riwayat_golongan as $riwayat_golongan): ?>
                                                        <tr class="data-itemriwayatgolongan" data-id="<?=$riwayat_golongan->id_riwayat?>">
                                                            <td><?=$i?></td>
                                                            <td><?=$riwayat_golongan->golongan?></td>
                                                            <td><?=$riwayat_golongan->nomor_sk?></td>
                                                            <td><?=$riwayat_golongan->tanggal_sk?></td>
                                                            <td><?=$riwayat_golongan->tmt_golongan?></td>
                                                            <td><?=$riwayat_golongan->nomor_bkn?></td>
                                                            <td><?=$riwayat_golongan->tanggal_bkn?></td>
                                                            <td><?=$riwayat_golongan->jenis_kp?></td>
                                                            <td align="center">
                                                                <a  onclick="editData('golongan',<?=$riwayat_golongan->id_riwayat?>);" data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                <a onclick="hapusRiwayat('golongan',<?=$riwayat_golongan->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    </br>
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_golongan"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="padding: 10px">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#diklat"><strong>Data Riwayat Diklat</strong></a>
                            </div>
                            <div id="diklat" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <!-- BORDERED TABLE -->
                                    <h3>Diklat Struktural</h3>
                                    <table id="tbl_riwayat_diklat_struktural" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
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
                                                        <?php $i++; ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </tbody>
                                    </table>
                                    <br />
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_diklat_struktural"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    <hr>
                                    <!-- BORDERED TABLE -->
                                    <h3>Diklat Fungsional</h3>
                                    <table id="tbl_riwayat_diklat_fungsional" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
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
                                                        <?php $i++; ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </tbody>
                                    </table>
                                </br>
                                <!-- END BORDERED TABLE -->
                                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_diklat_fungsional"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                <hr>
                                <!-- BORDERED TABLE -->
                                <h3>Diklat Teknis</h3>
                                <table id="tbl_riwayat_diklat_teknis" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
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
                                            <?php foreach ($riwayat_diklat2 as $riwayat_diklat2): ?>
                                                <?php $i = 1; ?>
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
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </br>
                            <!-- END BORDERED TABLE -->
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_diklat_teknis"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 10px">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#kursus"><strong>Data Riwayat Kursus</strong></a>
                    </div>
                    <div id="kursus" class="panel-collapse collapse">
                        <div class="panel-body">
                            <!-- BORDERED TABLE -->
                            <table id="tbl_riwayat_kursus" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
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
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <!-- END BORDERED TABLE -->
                            <br />
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_kursus"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 10px">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#penghargaan"><strong>Data Riwayat Penghargaan</strong></a>
                    </div>
                    <div id="penghargaan" class="panel-collapse collapse">
                        <div class="panel-body">
                            <!-- BORDERED TABLE -->
                            <table id="tbl_riwayat_penghargaan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                                <thead>
                                    <tr >
                                        <th> No.</th>
                                        <th> Jenis Penghargaan</th>
                                        <th> No. SK</th>
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
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <!-- END BORDERED TABLE -->
                            <br>
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_penghargaan"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 10px">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#profesi"><strong>Data Riwayat Profesi</strong></a>
                    </div>
                    <div id="profesi" class="panel-collapse collapse">
                        <div class="panel-body">
                            <!-- BORDERED TABLE -->
                            <table id="tbl_riwayat_profesi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
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
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                            <!-- END BORDERED TABLE -->
                        </br>
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_profesi"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 10px">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#unor"><strong>Data Riwayat PNS UNOR</strong></a>
                </div>
                <div id="unor" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!-- BORDERED TABLE -->
                        <table id="tbl_riwayat_unor" style="min-width: 100%;" class="table table-bordered  table-sorting table-hover datatable dataTable no-footer">
                            <thead>
                                <tr >
                                    <th> No.</th>
                                    <th> Instansi </th>
                                    <th> Nama UNOR</th>
                                    <th> No. SK</th>
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
                        </br>
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_unor"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 10px">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#pemberhentian"><strong>Data Riwayat Pemberhentian</strong></a>
                </div>
                <div id="pemberhentian" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!-- BORDERED TABLE -->
                        <table id="tbl_riwayat_pemberhentian" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                            <thead>
                                <tr >
                                    <th> No.</th>
                                    <th> Jenis Pemberhentian </th>
                                    <th> Kedudukan Hukum</th>
                                    <th> No. SK</th>
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
                        </br>
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pemberhentian"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 10px">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#angkakredit"><strong>Data Riwayat Angka Kredit</strong></a>
                </div>
                <div id="angkakredit" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!-- BORDERED TABLE -->
                        <div class="col-md-12">
                            <!-- <hr> -->
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_angkakredit"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        </div>
                        <table id="tbl_riwayat_angkakredit" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                            <thead>
                                <tr >
                                    <th> No.</th>
                                    <th> No. SK </th>
                                    <th> Tanggal SK</th>
                                    <th> Kredit Utama</th>
                                    <th> Kredit Penunjang</th>
                                    <th> Total Kredit </th>
                                    <th> Jabatan</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($riwayat_angkakredit != NULL): ?>
                                    <?php $i=1; foreach ($riwayat_angkakredit as $riwayat_angkakredit): ?>
                                        <tr class="data-itemriwayatangkakredit" data-id="<?=$riwayat_angkakredit->id_riwayat?>">
                                            <td><?=$i?></td>
                                            <td><?=$riwayat_angkakredit->no_sk?></td>
                                            <td><?=$riwayat_angkakredit->tanggal_sk?></td>
                                            <td><?=$riwayat_angkakredit->kredit_utama?></td>
                                            <td><?=$riwayat_angkakredit->kredit_penunjang?></td>
                                            <td><?=$riwayat_angkakredit->total_kredit?></td>
                                            <td><?=$riwayat_angkakredit->jabatan?></td>
                                            <td align="center">
                                                <a data-toggle="modal" data-target="#edit_angkakredit" onclick="editData('angkakredit',<?=$riwayat_angkakredit->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                <a  onclick="hapusRiwayat('angkakredit',<?=$riwayat_angkakredit->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <br />
                        <div class="col-md-5 col-md-offset-4 form-group pull-right">
                            <label class="col-sm-8 control-label">Total Kredit Penunjang</label>
                            <div class="col-sm-4">
                                <input id="tot_kpen_angkakredit" type="text" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-5 col-md-offset-4 form-group pull-right">
                            <label class="col-sm-8 control-label">Total Kredit Utama</label>
                            <div class="col-sm-4">
                                <input id="tot_ku_angkakredit" type="text" class="form-control">
                            </div>

                        </div>
                        <!-- END BORDERED TABLE -->

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 10px">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#dp3"><strong>Data Riwayat DP3</strong></a>
                </div>
                <div id="dp3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table id="tbl_riwayat_dp3" class="table table-bordered">
                            <thead>
                                <tr >
                                    <th> No.</th>
                                    <th> Tahun </th>
                                    <th> Nilai Rata-rata</th>
                                    <th> Keterangan</th>
                                    <th> Jumlah</th>
                                    <th> Pejabat Penilai</th>
                                    <th> Atasan Pejabat Penilai</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="data-itemriwayatdp3" data-id="">
                                    <td>1</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#edit_dp3" onclick="editData('data_riwayat_dp3','1');" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a href="#" onclick="hapusRiwayat('dp3','1')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END BORDERED TABLE -->
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_dp3"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 10px">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#skp"><strong>Data Riwayat SKP</strong></a>
                </div>
                <div id="skp" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!-- BORDERED TABLE -->
                        <table id="tbl_riwayat_skp" class="table table-bordered">
                            <thead>
                                <tr >
                                    <th> No.</th>
                                    <th> Tahun </th>
                                    <th> Rata-rata</th>
                                    <th> Keterangan</th>
                                    <th> Jumlah</th>
                                    <th> Pejabat Penilai</th>
                                    <th> Atasan Pejabat Penilai</th><!-- 
                                    <th> Lampirkan ?</th> -->
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="data-itemriwayatskp" data-id="">
                                    <td>1</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#edit_skp" onclick="editData('data_riwayat_skp','1');" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a href="#" onclick="hapusRiwayat('skp','1')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END BORDERED TABLE -->
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_skp"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 10px">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#cltn"><strong>Data Riwayat CLTN</strong></a>
                </div>
                <div id="cltn" class="panel-collapse collapse">
                    <div class="panel-body">
                        <!-- BORDERED TABLE -->
                        <table id="tbl_riwayat_cltn" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                            <thead>
                                <tr >
                                    <th> No.</th>
                                    <th> Jenis CLTN </th>
                                    <th> No. SK CLTN</th>
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
                                <?php if ($riwayat_cltn != NULL): ?>
                                    <?php $i=1; foreach ($riwayat_cltn as $riwayat_cltn): ?>
                                        <tr class="data-itemriwayatcltn" data-id="<?=$riwayat_cltn->id_riwayat?>">
                                            <td><?=$i?></td>
                                            <td><?=$riwayat_cltn->jenis_cltn?></td>
                                            <td><?=$riwayat_cltn->no_sk?></td>
                                            <td><?=$riwayat_cltn->tanggal_skep?></td>
                                            <td><?=$riwayat_cltn->tanggal_awal?></td>
                                            <td><?=$riwayat_cltn->tanggal_akhir?></td>
                                            <td><?=$riwayat_cltn->tanggal_aktif?></td>
                                            <td><?=$riwayat_cltn->no_bkn?></td>
                                            <td><?=$riwayat_cltn->tanggal_bkn?></td>
                                            <td align="center">
                                                <a data-toggle="modal" data-target="#edit_cltn" onclick="editData('cltn',<?=$riwayat_cltn->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                <a onclick="hapusRiwayat('cltn',<?=$riwayat_cltn->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $i++; endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </br>
                        <!-- END BORDERED TABLE -->
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_cltn"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<!-- END OVERVIEW -->
<!-- Tambah Istri/Suami ? -->
<div id="tambah_kepegawaian" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Kepegawaian</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status Kepegawaian</label>
                        <div class="col-sm-9">
                            <select id="nama_statuskepegawaian" class="form-control"  required>
                                <option value="">-Status Kepegawaian-</option>
                                <option value="cpns">CPNS</option>
                                <option value="pns">PNS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Pejabat yang Menetapkan</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_pejabat_kepegawaian" class="form-control"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">No. SK</label>
                        <div class="col-sm-9">
                            <input type="text" id="no_sk_kepegawaian" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                <input type="text" id="tanggal_sk_kepegawaian" class="form-control" required>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Pangkat/Gol. Ruang</label>
                        <div class="col-sm-9">
                            <input type="text" id="pangkat_kepegawaian" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">TMT</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                <input type="text" id="tmt_kepegawaian" class="form-control" required>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <div class="alert alert-info"><i class="fa fa-info-circle"></i> Lokasi Kerja</div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Instansi/Provinsi</label>
                        <div class="col-sm-9">
                            <input type="text" id="instansi_kepegawaian" class="form-control"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Kab/Kota/Sub Inst</label>
                        <div class="col-sm-9">
                            <input type="text" id="sub_kepegawaian" class="form-control"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Unit Kerja</label>
                        <div class="col-sm-9">
                            <input type="text" id="unit_kerja_kepegawaian" class="form-control"  required>
                        </div>
                    </div>
                    <div id="cpns_bkn" style="display: none" >
                        <div class="col-md-12">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Persetujuan BKN</div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                            <div class="col-sm-9">
                                <input type="text" id="nomor_bkn_kepegawaian" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bahan"  class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                    <input type="text" id="tanggal_bkn_kepegawaian" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pns_berita" style="display: none" >
                        <div class="col-md-12">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Sumpah Jabatan</div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Sumpah/ Janji PNS</label>
                            <div class="col-sm-9">
                                <label class="fancy-radio">
                                    <input id="sumpah_kepegawaian" value="Sudah"  class="form-control" type="radio"  required>
                                    <span><i></i>Sudah</span>
                                </label>
                                <label class="fancy-radio">
                                    <input id="sumpah_kepegawaian" value="Belum"  class="form-control" type="radio"  required>
                                    <span><i></i>Belum</span>
                                </label>
                                <label class="fancy-radio">
                                    <input id="sumpah_kepegawaian" value="Tidak Perlu"  class="form-control" type="radio"  required>
                                    <span><i></i>Tidak Perlu</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Yang Mengambil SUmpah</label>
                            <div class="col-sm-9">
                                <input type="text" id="pejabat_sumpah_kepegawaian" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Berita Acara</div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                            <div class="col-sm-9">
                                <input type="text" id="nomor_berita_acara_kepegawaian" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bahan"  class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                    <input type="text" id="tanggal_berita_acara_kepegawaian" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_kepegawaian','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Kepegawaian  -->
<div id="edit_kepegawaian" class="modal fade " role="dialog">
    <div class="modal-dialog  modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Kepegawaian</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status Kepegawaian</label>
                        <div class="col-sm-9">
                            <select id="edit_nama_statuskepegawaian" class="form-control" >
                                <option value="">-Status Kepegawaian-</option>
                                <option value="cpns">CPNS</option>
                                <option value="pns">PNS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Pejabat yang Menetapkan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_pejabat_kepegawaian" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">No. SK</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_no_sk_kepegawaian" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                <input type="text" id="edit_tanggal_sk_kepegawaian" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Pangkat/Gol. Ruang</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pangkat_kepegawaian" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">TMT</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                <input type="text" id="edit_tmt_kepegawaian" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="alert alert-info"><i class="fa fa-info-circle"></i> Lokasi Kerja</div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Instansi/Provinsi</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_instansi_kepegawaian" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Kab/Kota/Sub Inst</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_sub_kepegawaian" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Unit Kerja</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_unit_kerja_kepegawaian" class="form-control" >
                        </div>
                    </div>
                    <div id="edit_cpns_bkn" style="display: none" >
                        <div class="col-md-12">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Persetujuan BKN</div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                            <div class="col-sm-9">
                                <input type="text" id="edit_nomor_bkn_kepegawaian" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bahan"  class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                    <input type="text" id="edit_tanggal_bkn_kepegawaian" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="edit_pns_berita" style="display: none" >
                        <div class="col-md-12">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Sumpah Jabatan</div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Sumpah/ Janji PNS</label>
                            <div class="col-sm-9">
                                <label class="fancy-radio">
                                    <input id="edit_sumpah_kepegawaian" value="Sudah"  class="form-control" type="radio"  required>
                                    <span><i></i>Sudah</span>
                                </label>
                                <label class="fancy-radio">
                                    <input id="edit_sumpah_kepegawaian" value="Belum"  class="form-control" type="radio"  required>
                                    <span><i></i>Belum</span>
                                </label>
                                <label class="fancy-radio">
                                    <input id="edit_sumpah_kepegawaian" value="Tidak Perlu"  class="form-control" type="radio"  required>
                                    <span><i></i>Tidak Perlu</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Yang Mengambil SUmpah</label>
                            <div class="col-sm-9">
                                <input type="text" id="edit_pejabat_sumpah_kepegawaian" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Berita Acara</div>
                        </div>
                        <div class="form-group">
                            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                            <div class="col-sm-9">
                                <input type="text" id="edit_nomor_berita_acara_kepegawaian" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bahan"  class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                    <input type="text" id="edit_tanggal_berita_acara_kepegawaian" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_kepegawaian')"><i class="glyphicon glyphicon-plus"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Istri/Suami ? -->
<div id="istri" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Istri/Suami</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Jenis</label>
                        <div class="col-sm-9">
                            <input type="text" id="jenis_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="ttl_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="pekerjaan_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','data_pasangan','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Istri  -->
<div id="edit_istri" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Istri/Suami</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Jenis</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_jenis_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_ttl_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pekerjaan_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('data_pasangan')"><i class="glyphicon glyphicon-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Anak -->
<div id="tambah_anak" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Anak</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" id="status_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="ttl_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="pekerjaan_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','data_anak','')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Anak  -->
<div id="edit_anak" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Anak</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_status_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_ttl_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pekerjaan_anak" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('data_anak')"><i class="glyphicon glyphicon-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Ortu ? -->
<div id="tambah_ortu" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Orang Tua</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" id="status_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="ttl_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="pekerjaan_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','data_ortu','')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Istri  -->
<div id="edit_ortu" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Orang Tua</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_status_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_ttl_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pekerjaan_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success" onclick="profilAjaxEdit_send('data_ortu')"><i class="glyphicon glyphicon-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Pendidikan -->
<div id="tambah_pendidikan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Pendidikan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tingkat</label>
                        <div class="col-sm-9">
                            <select id="tingkat_pendidikan" class="form-control" >
                                <option value=""></option>
                                <?php foreach ($data_pendidikan as $data_pendidikan1): ?>
                                    <option value="<?=$data_pendidikan1->nama_pendidikan?>"><?=$data_pendidikan1->nama_pendidikan?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Pendidikan</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_pendidikan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <input type="text"  id="nama_instansi_pendidikan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. Ijazah</label>
                        <div class="col-sm-9">
                            <input type="text" id="no_ijazah_pendidikan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tgl. Lulus</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_lulus_pendidikan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_pendidikan','')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Pendidikan  -->
<div id="edit_pendidikan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Pendidikan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tingkat</label>
                        <div class="col-sm-9">
                            <select id="edit_tingkat_pendidikan" class="form-control" >
                                <option value=""></option>
                                <?php foreach ($data_pendidikan as $data_pendidikan2): ?>
                                    <option value="<?=$data_pendidikan2->nama_pendidikan?>"><?=$data_pendidikan2->nama_pendidikan?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Pendidikan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_pendidikan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <input type="text"  id="edit_nama_instansi_pendidikan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. Ijazah</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_no_ijazah_pendidikan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tgl. Lulus</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_lulus_pendidikan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success" onclick="profilAjaxEdit_send('pendidikan');"><i class="fa fa-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Jabatan -->
<div id="tambah_jabatan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Jabatan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select type="text" id="jenis_jabatan" class="form-control" >
                                <option value=""></option>
                                <?php foreach ($data_jenisjabatan as $data_jenisjabatan1): ?>
                                    <option value="<?=$data_jenisjabatan1->nama_jenisjabatan?>"><?=$data_jenisjabatan1->nama_jenisjabatan?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Kedudukan Jabatan</label>
                        <div class="col-sm-9">
                            <select type="text" id="kedudukan_jabatan" class="form-control" >
                                <option value=""></option>
                                <?php foreach ($data_kedudukanpegawai as $data_kedudukanpegawai1): ?>
                                    <option value="<?=$data_kedudukanpegawai1->nama_kedudukanpegawai?>"><?=$data_kedudukanpegawai1->nama_kedudukanpegawai?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Jabatan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tmt_jabatan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Pelantikan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tmt_pelantikan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
                        <div class="col-sm-9">
                            <input type="text" id="pejabat_jabatan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                        <div class="col-sm-9">
                            <input type="text" id="nomor_jabatan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_jabatan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_jabatan','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit jabatan  -->
<div id="edit_jabatan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Jabatan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select type="text" id="edit_jenis_jabatan" class="form-control" >
                                <option value=""></option>
                                <?php foreach ($data_jenisjabatan as $data_jenisjabatan1): ?>
                                    <option value="<?=$data_jenisjabatan1->nama_jenisjabatan?>"><?=$data_jenisjabatan1->nama_jenisjabatan?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Kedudukan Jabatan</label>
                        <div class="col-sm-9">
                            <select type="text" id="edit_kedudukan_jabatan" class="form-control" >
                                <option value=""></option>
                                <?php foreach ($data_kedudukanpegawai as $data_kedudukanpegawai1): ?>
                                    <option value="<?=$data_kedudukanpegawai1->nama_kedudukanpegawai?>"><?=$data_kedudukanpegawai1->nama_kedudukanpegawai?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Jabatan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tmt_jabatan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Pelantikan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tmt_pelantikan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pejabat_jabatan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nomor_jabatan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_jabatan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success"onclick="profilAjaxEdit_send('jabatan')"><i class="fa fa-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Mutasi -->
<div id="tambah_mutasi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Mutasi</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" id="jabatan_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
                        <div class="col-sm-9">
                            <input type="text" id="pangkat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tmt_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
                        <div class="col-sm-9">
                            <input type="text" id="pejabat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                        <div class="col-sm-9">
                            <input type="text" id="nomor_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_mutasi','')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit jabatan  -->
<div id="edit_mutasi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Mutasi</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_jabatan_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pangkat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tmt_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pejabat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nomor_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success" onclick="profilAjaxEdit_send('mutasi')"><i class="fa fa-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Golongan -->
<div id="tambah_golongan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Golongan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" id="golongan_golongan" class="form-control" > -->
                            <select id="golongan_golongan" class="form-control">
                                <option value="">-Pangkat Gol. -</option>
                                <?php foreach ($data_golongan as $data_golongan2): ?>
                                    <option value="<?=$data_golongan2->nama_golongan. ' ' .$data_golongan2->nama_ruang?>"><?=$data_golongan->nama_golongan. ' ' .$data_golongan2->nama_ruang?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input type="number" id="nomor_sk" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_sk" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tmt_golongan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor BKN</label>
                        <div class="col-sm-9">
                            <input type="number" id="nomor_bkn" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal BKN</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_bkn" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jenis KP</label>
                        <div class="col-sm-9">
                            <select id="jenis_kp" class="form-control" >
                                <option value=""></option>
                                <option value="Reguler">Reguler</option>
                                <option value="Jabatan Struktural">Jabatan Struktural</option>
                                <option value="Jabatan Fungsional Tertentu">Jabatan Fungsional Tertentu</option>
                                <option value="Penyesuaian Ijazah">Penyesuaian Ijazah</option>
                                <option value="Sedang Melaksanakan Tugas Belajar">Sedang Melaksanakan Tugas Belajar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Masa Kerja Golongan Tahun</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears " data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="masa_kerja_thn" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Masa Kerja Golongan Bulan</label>
                        <div class="col-sm-9">
                            <select id="masa_kerja_bln" class="form-control" >
                                <option value=""></option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_golongan','')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- EditGolongan  -->
<div id="edit_golongan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Golongan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" id="golongan_golongan" class="form-control" > -->
                            <select id="edit_golongan_golongan" class="form-control">
                                <option value="">-Pangkat Gol. -</option>
                                <?php foreach ($data_golongan as $data_golongan1): ?>
                                    <option value="<?=$data_golongan1->nama_golongan. ' ' .$data_golongan1->nama_ruang?>"><?=$data_golongan1->nama_golongan. ' ' .$data_golongan1->nama_ruang?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_nomor_sk" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_sk" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tmt_golongan" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor BKN</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_nomor_bkn" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal BKN</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_bkn" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jenis KP</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_kp" class="form-control" >
                                <option value=""></option>
                                <option value="Reguler">Reguler</option>
                                <option value="Jabatan Struktural">Jabatan Struktural</option>
                                <option value="Jabatan Fungsional Tertentu">Jabatan Fungsional Tertentu</option>
                                <option value="Penyesuaian Ijazah">Penyesuaian Ijazah</option>
                                <option value="Sedang Melaksanakan Tugas Belajar">Sedang Melaksanakan Tugas Belajar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('golongan')"><i class="fa fa-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Diklat Struktural -->
<div id="tambah_diklat_struktural" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Diklat Struktural</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_struktural" class="form-control" >
                        </div>
                    </div>          <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jml. Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="jumlah_jam_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="penyelenggara_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="tempat_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="text" id="angkatan_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="number" id="tahun_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="no_sttp_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_sttp_struktural" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_diklat_struktural','struktural')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Diklat Struktural  -->
<div id="edit_diklat_struktural" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Diklat Struktural</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_struktural" class="form-control" >
                        </div>
                    </div>          <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jml. Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_jumlah_jam_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_penyelenggara_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_tempat_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_angkatan_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tahun_struktural" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_no_sttp_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_sttp_struktural" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_diklat')"><i class="fa fa-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Diklat fungsional -->
<div id="tambah_diklat_fungsional" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Diklat Fungsional</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jml. Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="jumlah_jam_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="penyelenggara_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="tempat_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="number" id="angkatan_fungsional"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tahun_fungsional" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="no_sttp_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_sttp_fungsional" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_diklat_fungsional','fungsional')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Diklat Fungsional  -->
<div id="edit_diklat_fungsional" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Diklat Fungsional</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jml. Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_jumlah_jam_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_penyelenggara_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_tempat_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_angkatan_fungsional"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tahun_fungsional" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_no_sttp_fungsional" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_sttp_fungsional" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success" onclick="profilAjaxEdit_send('riwayat_diklat')"><i class="fa fa-save"></i>  SImpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Diklat Teknis -->
<div id="tambah_diklat_teknis" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Diklat Teknis</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jml. Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="jumlah_jam_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="penyelenggara_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="tempat_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="number" id="angkatan_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tahun_teknis" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="no_sttp_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_sttp_teknis" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_diklat_teknis','teknis')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Diklat Teknis  -->
<div id="edit_diklat_teknis" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Diklat Teknis</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jml. Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_jumlah_jam_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_penyelenggara_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_tempat_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_angkatan_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tahun_teknis" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_no_sttp_teknis" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_sttp_teknis" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success" onclick="profilAjaxEdit_send('riwayat_diklat')"><i class="fa fa-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Kursus -->
<div id="tambah_kursus" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Kursus</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tipe Kursus</label>
                        <div class="col-sm-9">
                            <select id="tipe_kursus" class="form-control">
                                <option value="kursus">Kursus</option>
                                <option value="sertifikat">Sertifikat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Kursus</label>
                        <div class="col-sm-9">
                            <input id="jenis_kursus" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama Kursus</label>
                        <div class="col-sm-9">
                            <input id="nama_kursus" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Lama Kursus</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input id="lama_kursus" type="text" class="form-control" aria-describedby="basic-addon2" >
                                <span class="input-group-addon" id="basic-addon2">Hari</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Kursus</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tahun_kursus" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. Sertifikat</label>
                        <div class="col-sm-9">
                            <input id="no_sertifikat_kursus" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  type="date" class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <select id="instansi_kursus" class="form-control">
                                <option value=""></option>
                                <<?php foreach ($data_satker as $satker): ?>
                                    <option value="<?=$satker->nama_satker?>"><?=$satker->nama_satker?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  type="date" class="col-sm-3 control-label">Institusi</label>
                        <div class="col-sm-9">
                            <input id="institusi_kursus" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_kursus','');"><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit  Kursus -->
<div id="edit_kursus" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Kursus</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tipe Kursus</label>
                        <div class="col-sm-9">
                            <select id="edit_tipe_kursus" class="form-control">
                                <option value=""></option>
                                <option value="kursus">Kursus</option>
                                <option value="sertifikat">Sertifikat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Kursus</label>
                        <div class="col-sm-9">
                            <input id="edit_jenis_kursus" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama Kursus</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_kursus" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Lama Kursus</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input id="edit_lama_kursus" type="text" class="form-control" aria-describedby="basic-addon2" >
                                <span class="input-group-addon" id="basic-addon2">Hari</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Kursus</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tahun_kursus" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. Sertifikat</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sertifikat_kursus" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  type="date" class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <select id="edit_instansi_kursus" class="form-control">
                                <option value=""></option>
                                <<?php foreach ($data_satker as $satker1): ?>
                                    <option value="<?=$satker1->nama_satker?>"><?=$satker1->nama_satker?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  type="date" class="col-sm-3 control-label">Institusi</label>
                        <div class="col-sm-9">
                            <input id="edit_institusi_kursus" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success" onclick="profilAjaxEdit_send('riwayat_kursus');"><i class="fa fa-save"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Penghargaan -->
<div id="tambah_penghargaan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Penghargaan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Penghargaan</label>
                        <div class="col-sm-9">
                            <input id="jenis_penghargaan" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. Surat</label>
                        <div class="col-sm-9">
                            <input id="no_surat_penghargaan" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_penghargaan" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Penghargaan</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tahun_penghargaan" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_penghargaan','');" ><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Penghargaan -->
<div id="edit_penghargaan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Penghargaan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Penghargaan</label>
                        <div class="col-sm-9">
                            <input id="edit_jenis_penghargaan" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. Surat</label>
                        <div class="col-sm-9">
                            <input id="edit_no_surat_penghargaan" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_penghargaan" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Penghargaan</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tahun_penghargaan" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_penghargaan');"<i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Profesi -->
<div id="tambah_profesi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Profesi</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Profesi</label>
                        <div class="col-sm-9">
                            <input id="jenis_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input id="penyelenggara_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Lulus</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tahun_profesi" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_profesi','');" ><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profesi -->
<div id="edit_profesi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Profesi</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Profesi</label>
                        <div class="col-sm-9">
                            <input id="edit_jenis_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input id="edit_penyelenggara_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Lulus</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tahun_profesi" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_profesi');" ><i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah PNS Unor -->
<div id="tambah_unor" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data PNS UNOR</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <input id="instansi_unor" type="text" class="form-control" value="Pemerintah Kabupaten Wakatobi" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unit Organisasi</label>
                        <div class="col-sm-9">
                            <select id="unor_unor" class="form-control">
                                <option value=""></option>
                                <?php foreach ($data_satker as $satker2): ?>
                                    <option value="<?=$satker2->nama_satker?>"><?=$satker2->nama_satker?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK</label>
                        <div class="col-sm-9">
                            <input id="no_sk_unor" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_sk_unor" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_unor','');"><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit PNS Unor -->
<div id="edit_unor" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data PNS UNOR</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <input id="edit_instansi_unor" type="text" class="form-control" value="Pemerintah Kabupaten Wakatobi" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unit Organisasi</label>
                        <div class="col-sm-9">
                            <select id="edit_unor_unor" class="form-control">
                                <option value=""></option>
                                <?php foreach ($data_satker as $satker3): ?>
                                    <option value="<?=$satker3->nama_satker?>"><?=$satker3->nama_satker?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                    <label  class="col-sm-3 control-label">Unit Organisasi Induk</label>
                    <div class="col-sm-9">
                    <input id="edit_unor_induk_unor" type="text" class="form-control" >
                </div>
            </div> -->
            <div class="form-group">
                <label  class="col-sm-3 control-label">No. SK</label>
                <div class="col-sm-9">
                    <input id="edit_no_sk_unor" type="number" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-3 control-label">Tanggal SK</label>
                <div class="col-sm-9">
                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                        <input id="edit_tanggal_sk_unor" type="text" class="form-control" >
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                    <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_unor');" ><i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- Tambah Pemberhentian -->
<div id="tambah_pemberhentian" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Pemberhentian</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Pemberhentian</label>
                        <div class="col-sm-9">
                            <select id="jenis_pemberhentian" class="form-control">
                                <option value=""></option>
                                <option value="Pemberhentian Karena BUP">Pemberhentian Karena BUP</option>
                                <option value="Pemberhentian Karena Meninggal Dunia">Pemberhentian Karena Meninggal Dunia</option>
                                <option value="Pemberhentian Karena Permohonan">Pemberhentian Karena Permohonan</option>
                                <option value="Pemberhentian Karena Cacat">Pemberhentian Karena Cacat</option>
                                <option value="Pemberhentian Karena Keuzuran Jasmani">Pemberhentian Karena Keuzuran Jasmani</option>
                                <option value="Pemberhentian Karena Tewas">Pemberhentian Karena Tewas</option>
                                <option value="Pemberhentian Karena Menjadi Anggota Parpol">Pemberhentian Karena Menjadi Anggota Parpol</option>
                                <option value="Pemberhentian Karena Penyederhanaan Organisasi">Pemberhentian Karena Penyederhanaan Organisasi</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji PNS">Pemberhentian Karena Pelanggaran Sumpah/Janji PNS</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan">Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan</option>
                                <option value="Pemberhentian Karena Tindak Pidana">Pemberhentian Karena Tindak Pidana</option>
                                <option value="Pemberhentian Karena Meninggalkan Tugas">Pemberhentian Karena Meninggalkan Tugas</option>
                                <option value="Pemberhentian Karena Dinyatakan Hilang">Pemberhentian Karena Dinyatakan Hilang</option>
                                <option value="Pemberhentian Karena >6 setelah CLTN Tidak Melapor">Pemberhentian Karena >6 setelah CLTN Tidak Melapor</option>
                                <option value="Pemberhentian Karena Kasus TIPIKOR">Pemberhentian Karena Kasus TIPIKOR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kedudukan Hukum</label>
                        <div class="col-sm-9">
                            <select id="kedudukan_pemberhentian" class="form-control">
                                <option value=""></option>
                                <option value="Aktif">Aktif</option>
                                <option value="CLTN">CLTN</option>
                                <option value="Tugas Belajar">Tugas Belajar</option>
                                <option value="Pemberhentian Sementara">Pemberhentian Sementara</option>
                                <option value="Penerimaan Uang Tunggu">Penerimaan Uang Tunggu</option>
                                <option value="Prajurit Wajib">Prajurit Wajib</option>
                                <option value="Pejabat Negara">Pejabat Negara</option>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Sedang dalam Proses Banding BAPEK">Sedang dalam Proses Banding BAPEK</option>
                                <option value="Pegawai Titipan">Pegawai Titipan</option>
                                <option value="Pengungsi">Pengungsi</option>
                                <option value="Perpanjangan CLTN">Perpanjangan CLTN</option>
                                <option value="PNS yang Dinyatakan Hilang">PNS yang Dinyatakan Hilang</option>
                                <option value="PNS yang Kena Hukuman Disiplin">PNS yang Kena Hukuman Disiplin</option>
                                <option value="Pemindahan Dalam Rangka Penurunan Jabatan<">Pemindahan Dalam Rangka Penurunan Jabatan</option>
                                <option value="Masa Persiapan Pensiun">Masa Persiapan Pensiun</option>
                                <option value="CPNS yang Belum Menerima SK CPNS">CPNS yang Belum Menerima SK CPNS</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                                <option value="Diberhentikan">Diberhentikan</option>
                                <option value="Punah">Punah</option>
                                <option value="EKS PNS Timor Timor">EKS PNS Timor Timor</option>
                                <option value="TMS dari Pengadaan">TMS dari Pengadaan</option>
                                <option value="Pembatalan NIP">Pembatalan NIP</option>
                                <option value="Pemberhentian Tanpa Hak Pensiun<">Pemberhentian Tanpa Hak Pensiun</option>
                                <option value="Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun">Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun</option>
                                <option value="Tidak ikut e-PUPNS 2015">Tidak ikut e-PUPNS 2015</option>
                                <option value="Tindak Pidana/Tindak Pidana Jabatan">Tindak Pidana/Tindak Pidana Jabatan</option>
                                <option value="Pemblokiran Data PNS dari Kedeputan Wasdal">Pemblokiran Data PNS dari Kedeputan Wasdal</option>
                                <option value="Mencapai BUP">Mencapai BUP</option>
                                <option value="Pensiun">Pensiun</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK</label>
                        <div class="col-sm-9">
                            <input id="no_sk_pemberhentian" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_sk_pemberhentian" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_pemberhentian','');" ><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Pemberhentian -->
<div id="edit_pemberhentian" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Pemberhentian</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Pemberhentian</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_pemberhentian" class="form-control">
                                <option value=""></option>
                                <option value="Pemberhentian Karena BUP">Pemberhentian Karena BUP</option>
                                <option value="Pemberhentian Karena Meninggal Dunia">Pemberhentian Karena Meninggal Dunia</option>
                                <option value="Pemberhentian Karena Permohonan">Pemberhentian Karena Permohonan</option>
                                <option value="Pemberhentian Karena Cacat">Pemberhentian Karena Cacat</option>
                                <option value="Pemberhentian Karena Keuzuran Jasmani">Pemberhentian Karena Keuzuran Jasmani</option>
                                <option value="Pemberhentian Karena Tewas">Pemberhentian Karena Tewas</option>
                                <option value="Pemberhentian Karena Menjadi Anggota Parpol">Pemberhentian Karena Menjadi Anggota Parpol</option>
                                <option value="Pemberhentian Karena Penyederhanaan Organisasi">Pemberhentian Karena Penyederhanaan Organisasi</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji PNS">Pemberhentian Karena Pelanggaran Sumpah/Janji PNS</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan">Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan</option>
                                <option value="Pemberhentian Karena Tindak Pidana">Pemberhentian Karena Tindak Pidana</option>
                                <option value="Pemberhentian Karena Meninggalkan Tugas">Pemberhentian Karena Meninggalkan Tugas</option>
                                <option value="Pemberhentian Karena Dinyatakan Hilang">Pemberhentian Karena Dinyatakan Hilang</option>
                                <option value="Pemberhentian Karena >6 setelah CLTN Tidak Melapor">Pemberhentian Karena >6 setelah CLTN Tidak Melapor</option>
                                <option value="Pemberhentian Karena Kasus TIPIKOR">Pemberhentian Karena Kasus TIPIKOR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kedudukan Hukum</label>
                        <div class="col-sm-9">
                            <select id="edit_kedudukan_pemberhentian" class="form-control">
                                <option value=""></option>
                                <option value="Aktif">Aktif</option>
                                <option value="CLTN">CLTN</option>
                                <option value="Tugas Belajar">Tugas Belajar</option>
                                <option value="Pemberhentian Sementara">Pemberhentian Sementara</option>
                                <option value="Penerimaan Uang Tunggu">Penerimaan Uang Tunggu</option>
                                <option value="Prajurit Wajib">Prajurit Wajib</option>
                                <option value="Pejabat Negara">Pejabat Negara</option>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Sedang dalam Proses Banding BAPEK">Sedang dalam Proses Banding BAPEK</option>
                                <option value="Pegawai Titipan">Pegawai Titipan</option>
                                <option value="Pengungsi">Pengungsi</option>
                                <option value="Perpanjangan CLTN">Perpanjangan CLTN</option>
                                <option value="PNS yang Dinyatakan Hilang">PNS yang Dinyatakan Hilang</option>
                                <option value="PNS yang Kena Hukuman Disiplin">PNS yang Kena Hukuman Disiplin</option>
                                <option value="Pemindahan Dalam Rangka Penurunan Jabatan<">Pemindahan Dalam Rangka Penurunan Jabatan</option>
                                <option value="Masa Persiapan Pensiun">Masa Persiapan Pensiun</option>
                                <option value="CPNS yang Belum Menerima SK CPNS">CPNS yang Belum Menerima SK CPNS</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                                <option value="Diberhentikan">Diberhentikan</option>
                                <option value="Punah">Punah</option>
                                <option value="EKS PNS Timor Timor">EKS PNS Timor Timor</option>
                                <option value="TMS dari Pengadaan">TMS dari Pengadaan</option>
                                <option value="Pembatalan NIP">Pembatalan NIP</option>
                                <option value="Pemberhentian Tanpa Hak Pensiun<">Pemberhentian Tanpa Hak Pensiun</option>
                                <option value="Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun">Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun</option>
                                <option value="Tidak ikut e-PUPNS 2015">Tidak ikut e-PUPNS 2015</option>
                                <option value="Tindak Pidana/Tindak Pidana Jabatan">Tindak Pidana/Tindak Pidana Jabatan</option>
                                <option value="Pemblokiran Data PNS dari Kedeputan Wasdal">Pemblokiran Data PNS dari Kedeputan Wasdal</option>
                                <option value="Mencapai BUP">Mencapai BUP</option>
                                <option value="Pensiun">Pensiun</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_pemberhentian" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_sk_pemberhentian" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_pemberhentian');"><i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Angka Kredit -->
<div id="tambah_angkakredit" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Angka Kredit</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK PAK</label>
                        <div class="col-sm-9">
                            <input id="no_sk_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK PAK</label>
                        <div class="col-sm-4">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_sk_angkakredit" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <input type="checkbox" id="pertama_angkakredit" class=""> &nbsp;Angka Kredit Pertama
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="bulan_mulai_angkakredit" class="form-control">
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <input id="tahun_mulai_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="bulan_selesai_angkakredit" class="form-control">
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <input id="tahun_selesai_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Utama Baru</label>
                        <div class="col-sm-9">
                            <input id="ku_baru_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Penunjang Baru</label>
                        <div class="col-sm-9">
                            <input id="kp_baru_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Total Kredit Baru</label>
                        <div class="col-sm-9">
                            <input id="total_baru_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <div class="input-group " data-date-autoclose="true" data-provide="">
                                <input id="jabatan_angkakredit" type="text" class="form-control" >
                                <span class="input-group-addon"><a data-toggle="modal" data-target="#cari_data_angkakredit"><i class="fa fa-search"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_unor','');"><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Angka Kredit -->
<div id="edit_angkakredit" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Angka Kredit</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK PAK</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK PAK</label>
                        <div class="col-sm-4">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_sk_angkakredit" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <input type="checkbox" id="edit_pertama_angkakredit" class=""> &nbsp;Angka Kredit Pertama
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="edit_bulan_mulai_angkakredit" class="form-control">
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <input id="edit_tahun_mulai_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="edit_bulan_selesai_angkakredit" class="form-control">
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <input id="edit_tahun_selesai_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Utama Baru</label>
                        <div class="col-sm-9">
                            <input id="edit_ku_baru_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Penunjang Baru</label>
                        <div class="col-sm-9">
                            <input id="edit_kp_baru_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Total Kredit Baru</label>
                        <div class="col-sm-9">
                            <input id="edit_total_baru_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <div class="input-group " data-date-autoclose="true" data-provide="">
                                <input id="edit_jabatan_angkakredit" type="text" class="form-control" >
                                <span class="input-group-addon"><a data-toggle="modal" data-target="#cari_data_angkakredit"><i class="fa fa-search"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_unor');"><i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Cari Data Riwayat Jabatan -->
<div id="cari_data_angkakredit" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Cari Data Riwayat Jabatan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <table style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jabatan </th>
                                <th>Instansi</th>
                                <th>TMT Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>a</td>
                                <td>Ani</td>
                                <td> 29 Juli 1995</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-success" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_unor','');"><i class="glyphicon glyphicon-plus"></i>  OK</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tambah DP3 -->
<div id="tambah_dp3" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data DP3</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select id="jenis_jabatan_dp3" class="form-control">
                                <option value="umum">Fungsional Umum</option>
                                <option value="struktural">Struktural</option>
                                <option value="tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input id="tahun_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kesetiaan</label>
                        <div class="col-sm-4">
                            <input id="kesetiaan_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kesetiaan_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggung Jawab</label>
                        <div class="col-sm-4">
                            <input id="tanggung_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_tanggung_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kejujuran</label>
                        <div class="col-sm-4">
                            <input id="kejujuran_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kejujuran_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prakarsa</label>
                        <div class="col-sm-4">
                            <input id="prakarsa_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_prakarsa_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prestasi Kerja</label>
                        <div class="col-sm-4">
                            <input id="prestasi_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_prestasi_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Ketaatan</label>
                        <div class="col-sm-4">
                            <input id="ketaatan_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_ketaatan_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-4">
                            <input id="kerjasama_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kerjasama_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Rata-rata</label>
                        <div class="col-sm-4">
                            <input id="rata_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_rata_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input id="jumlah_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <h5>Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="nip_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="nama_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tmt_golongan_penilaiandp3" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <h5>Atasan Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="nip_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="nama_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tmt_atasan_penilaiandp3" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_unor','');"><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit DP3 -->
<div id="edit_dp3" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data DP3</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_jabatan_dp3" class="form-control">
                                <option value="umum">Fungsional Umum</option>
                                <option value="struktural">Struktural</option>
                                <option value="tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input id="edit_tahun_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kesetiaan</label>
                        <div class="col-sm-4">
                            <input id="edit_kesetiaan_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kesetiaan_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggung Jawab</label>
                        <div class="col-sm-4">
                            <input id="edit_tanggung_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_tanggung_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kejujuran</label>
                        <div class="col-sm-4">
                            <input id="edit_kejujuran_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kejujuran_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prakarsa</label>
                        <div class="col-sm-4">
                            <input id="edit_prakarsa_dp3" type="text" class="form-control" value="Amat Baik" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_prakarsa_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prestasi Kerja</label>
                        <div class="col-sm-4">
                            <input id="edit_prestasi_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_prestasi_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Ketaatan</label>
                        <div class="col-sm-4">
                            <input id="edit_ketaatan_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_ketaatan_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-4">
                            <input id="edit_kerjasama_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kerjasama_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Rata-rata</label>
                        <div class="col-sm-4">
                            <input id="edit_rata_dp3" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_rata_dp3" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input id="edit_jumlah_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <h5>Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tmt_golongan_penilaiandp3" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <h5>Atasan Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tmt_atasan_penilaiandp3" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_unor');"><i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah SKP -->
<div id="tambah_skp" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data SKP</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select id="jenis_jabatan_skp" class="form-control">
                                <option value="umum">Fungsional Umum</option>
                                <option value="struktural">Struktural</option>
                                <option value="tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input id="tahun_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <h5><strong> Sasaran Kinerja Pegawai</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai SKP</label>
                        <div class="col-sm-3">
                            <input id="nilai_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="ket_nilai_skp" type="text" disabled="" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="ket_nilai_skp2" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <h5><strong>Perilaku Kerja</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Orientasi Pelayan</label>
                        <div class="col-sm-3">
                            <input id="orientasi_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_orientasi_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Komitmen</label>
                        <div class="col-sm-3">
                            <input id="komitmen_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_komitmen_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-3">
                            <input id="kerjasama_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_kerjasama_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Integritas</label>
                        <div class="col-sm-3">
                            <input id="integritas_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_integritas_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Disiplin</label>
                        <div class="col-sm-3">
                            <input id="disiplin_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_disiplin_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kepemimpinan</label>
                        <div class="col-sm-3">
                            <input id="kepemimpinan_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_kepemimpinan_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Perilaku Kerja</label>
                        <div class="col-sm-3">
                            <input id="nilai_perilaku_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="ket_nilai_perilaku_skp" type="text" disabled="" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="ket_nilai_perilaku_skp2" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Prestasi Kerja</label>
                        <div class="col-sm-3">
                            <input id="nilai_prestasi_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_nilai_prestasi_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <h5>Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="nip_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="nama_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tmt_golongan_penilaianskp" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <h5>Atasan Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="nip_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="nama_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tmt_atasan_penilaianskp" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_unor','');"><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit SKP -->
<div id="edit_skp" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data SKP</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_jabatan_skp" class="form-control">
                                <option value="umum">Fungsional Umum</option>
                                <option value="struktural">Struktural</option>
                                <option value="tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input id="edit_tahun_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <h5><strong> Sasaran Kinerja Pegawai</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai SKP</label>
                        <div class="col-sm-3">
                            <input id="edit_nilai_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_skp" type="text" disabled="" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_skp2" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <h5><strong>Perilaku Kerja</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Orientasi Pelayan</label>
                        <div class="col-sm-3">
                            <input id="edit_orientasi_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_orientasi_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Komitmen</label>
                        <div class="col-sm-3">
                            <input id="edit_komitmen_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_komitmen_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-3">
                            <input id="edit_kerjasama_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_kerjasama_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Integritas</label>
                        <div class="col-sm-3">
                            <input id="edit_integritas_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_integritas_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Disiplin</label>
                        <div class="col-sm-3">
                            <input id="edit_disiplin_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_disiplin_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kepemimpinan</label>
                        <div class="col-sm-3">
                            <input id="edit_kepemimpinan_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_kepemimpinan_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Perilaku Kerja</label>
                        <div class="col-sm-3">
                            <input id="edit_nilai_perilaku_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_perilaku_skp" type="text" disabled="" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_perilaku_skp2" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Prestasi Kerja</label>
                        <div class="col-sm-3">
                            <input id="edit_nilai_prestasi_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_nilai_prestasi_skp" type="text" disabled="" class="form-control" >
                        </div>
                    </div>
                    <h5>Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tmt_golongan_penilaianskp" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <h5>Atasan Pejabat Penilai</h5>
                    <hr>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tmt_atasan_penilaianskp" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_unor');"><i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah CLTN -->
<div id="tambah_cltn" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data CLTN</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis CLTN</label>
                        <div class="col-sm-9">
                            <input id="jenis_cltn" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK CLTN</label>
                        <div class="col-sm-9">
                            <input id="no_sk_cltn" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SKEP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_skep_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Awal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_awal_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Akhir</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_akhir_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Aktif</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_aktif_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. Bkn</label>
                        <div class="col-sm-9">
                            <input id="no_bkn_cltn" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Bkn</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_bkn_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_cltn','');"><i class="glyphicon glyphicon-plus"></i>  Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit CLTN -->
<div id="edit_cltn" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data CLTN</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis CLTN</label>
                        <div class="col-sm-9">
                            <input id="edit_jenis_cltn" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK CLTN</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_cltn" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SKEP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_skep_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Awal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_awal_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Akhir</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_akhir_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Aktif</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_aktif_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. Bkn</label>
                        <div class="col-sm-9">
                            <input id="edit_no_bkn_cltn" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Bkn</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_bkn_cltn" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_cltn');"><i class="glyphicon glyphicon-save"></i>  Simpan Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

var idGlob;
var select2Options = { width: 'resolve',
placeholder: "- Pilih -",
triggerChange: true,
allowClear: true};



$('select').select2(select2Options);

$(".panel-collapse").on("shown.bs.collapse", function(){
    $($.fn.dataTable.tables(true)).DataTable()
    .columns.adjust()
    // .responsive.recalc();
});

$('#edit_nama_statuskepegawaian').change(function(){
    if ($('#edit_nama_statuskepegawaian').val() === 'cpns') {
        $('#edit_cpns_bkn').removeAttr('style');
        $('#edit_pns_berita').css('display', 'none');
    }else if($('#edit_nama_statuskepegawaian').val() === 'pns'){
        $('#edit_cpns_bkn').css('display', 'none');
        $('#edit_pns_berita').removeAttr('style');
    }else{
        $('#edit_cpns_bkn').css('display', 'none');
        $('#edit_pns_berita').css('display', 'none');
    }
});

$('#nama_statuskepegawaian').change(function(){
    if ($('#nama_statuskepegawaian').val() === 'cpns') {
        $('#cpns_bkn').removeAttr('style');
        $('#pns_berita').css('display', 'none');
    }else if($('#nama_statuskepegawaian').val() === 'pns'){
        $('#cpns_bkn').css('display', 'none');
        $('#pns_berita').removeAttr('style');
    }else{
        $('#cpns_bkn').css('display', 'none');
        $('#pns_berita').css('display', 'none');
    }

});
function hapusRiwayat(method,id) {
    swal({
        title: 'Apakah Anda Yakin?',
        text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!',
        cancelButtonText: 'Batalkan!',
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('DataPegawai/hapusRiwayat/')?>'+method+'/'+id
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat berhasil dihapus.', 'success');
                } else swal('Gagal', 'Data Riwayat Gagal dihapus.', 'error');
            });
        } else {
            swal(
                'Batal',
                'Proses Hapus Data dibatalkan! :)',
                'error'
            )
        }
    });
}

function profilAjax_send(nip, tipe, jenis_diklat) {
    switch (tipe) {
        case 'data_pasangan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                jenis: $('#jenis_pasangan').val(),
                nama: $('#nama_pasangan').val(),
                ttl: $('#ttl_pasangan').val(),
                pekerjaan: $('#pekerjaan_pasangan').val()
            }
        }).done(function(response) {
            if (response.success) {
                $('#tbl_pasangan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.jenis + '</td><td>' + response.data.nama + '</td><td>' + response.data.ttl + '</td><td>' + response.data.pekerjaan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // $('.error_eselon').html('');
                $('#jenis_pasangan').val('');
                $('#nama_pasangan').val('');
                $('#ttl_pasangan').val('');
                $('#pekerjaan_pasangan').val('');
                $('#istri').modal('hide');
                swal('Sukses', 'Data Pasangan berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Pasangan gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'data_anak':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                status: $('#status_anak').val(),
                nama: $('#nama_anak').val(),
                ttl: $('#ttl_anak').val(),
                pekerjaan: $('#pekerjaan_anak').val()
            }
        }).done(function(response) {
            if (response.success) {
                $('#tbl_anak').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.status + '</td><td>' + response.data.nama + '</td><td>' + response.data.ttl + '</td><td>' + response.data.pekerjaan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_anak" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // $('.error_eselon').html('');
                $('#status_anak').val('');
                $('#nama_anak').val('');
                $('#ttl_anak').val('');
                $('#pekerjaan_anak').val('');
                $('#tambah_anak').modal('hide');
                swal('Sukses', 'Data Anak berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Anak gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'data_ortu':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                status: $('#status_ortu').val(),
                nama: $('#nama_ortu').val(),
                ttl: $('#ttl_ortu').val(),
                pekerjaan: $('#pekerjaan_ortu').val()
            }
        }).done(function(response) {
            if (response.success) {
                $('#tbl_ortu').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.status + '</td><td>' + response.data.nama + '</td><td>' + response.data.ttl + '</td><td>' + response.data.pekerjaan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_ortu" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // $('.error_eselon').html('');
                $('#status_ortu').val('');
                $('#nama_ortu').val('');
                $('#ttl_ortu').val('');
                $('#pekerjaan_ortu').val('');
                $('#tambah_ortu').modal('hide');
                swal('Sukses', 'Data Orang Tua berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Orang Tua gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_pendidikan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                tingkat: $('#tingkat_pendidikan').val(),
                nama_pendidikan: $('#nama_pendidikan').val(),
                nama_instansi: $('#nama_instansi_pendidikan').val(),
                no_ijazah: $('#no_ijazah_pendidikan').val(),
                tanggal_lulus: $('#tanggal_lulus_pendidikan').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_pendidikan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.tingkat + '</td><td>' + response.data.nama_instansi + '</td><td>' + response.data.jurusan + '</td><td>' + response.data.no_ijazah + '</td><td>' + response.data.tanggal_ijazah + '</td><td>' + response.data.tempat + '</td><td>' + response.data.nama_pimpinan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_pendidikan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // $('.error_eselon').html('');
                // $('#tingkat_pendidikan').val('');
                // $('#nama_instansi_pendidikan').val('');
                // $('#jurusan_pendidikan').val('');
                // $('#tanggal_ijazah_pendidikan').val('');
                // $('#no_ijazah_pendidikan').val('');
                // $('#tempat_pendidikan').val('');
                // $('#nama_instansi_pendidikan').val('');
                // $('#tambah_pendidikan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Pendidikan berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Pendidikan gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_jabatan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                jenis: $('#jenis_jabatan').val(),
                kedudukan: $('#kedudukan_jabatan').val(),
                tmt_jabatan: $('#tmt_jabatan').val(),
                tmt_pelantikan: $('#tmt_pelantikan').val(),
                pejabat: $('#pejabat_jabatan').val(),
                nomor: $('#nomor_jabatan').val(),
                tanggal: $('#tanggal_jabatan').val(),
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_jabatan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.jabatan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_jabatan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#jenis_jabatan').val('');
                // $('#tmt_jabatan').val('');
                // $('#pejabat_jabatan').val('');
                // $('#tanggal_jabatan').val('');
                // $('#nomor_jabatan').val('');
                // $('#tambah_jabatan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Jabatan berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Jabatan gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_mutasi':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                jabatan: $('#jabatan_mutasi').val(),
                pangkat: $('#pangkat_mutasi').val(),
                tmt: $('#tmt_mutasi').val(),
                pejabat: $('#pejabat_mutasi').val(),
                nomor: $('#nomor_mutasi').val(),
                tanggal: $('#tanggal_mutasi').val(),
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_mutasi').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.jabatan + '</td><td>' + response.data.pangkat + '</td><td>' + response.data.tmt + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_mutasi" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#jabatan_mutasi').val('');
                // $('#pangkat_mutasi').val('');
                // $('#tmt_mutasi').val('');
                // $('#pejabat_mutasi').val('');
                // $('#tanggal_mutasi').val('');
                // $('#nomor_mutasi').val('');
                // $('#tambah_mutasi').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Mutasi berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Mutasi gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_golongan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                golongan: $('#golongan_golongan').val(),
                nomor_sk: $('#nomor_sk').val(),
                tanggal_sk: $('#tanggal_sk').val(),
                tmt_golongan: $('#tmt_golongan').val(),
                nomor_bkn: $('#nomor_bkn').val(),
                tanggal_bkn: $('#tanggal_bkn').val(),
                jenis_kp: $('#jenis_kp').val(),
                masa_kerja_thn: $('#masa_kerja_thn').val(),
                masa_kerja_bln: $('#masa_kerja_bln').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Golongan berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Golongan gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_diklat_struktural':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+ 'riwayat_diklat',
            data: {
                nama_diklat: $('#nama_struktural').val(),
                jumlah_jam: $('#jumlah_jam_struktural').val(),
                penyelenggara: $('#penyelenggara_struktural').val(),
                tempat: $('#tempat_struktural').val(),
                angkatan: $('#angkatan_struktural').val(),
                tahun: $('#tahun_struktural').val(),
                no_sttp: $('#no_sttp_struktural').val(),
                tanggal_sttp: $('#tanggal_sttp_struktural').val(),
                jenis_diklat: jenis_diklat,
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_diklat_struktural').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.nama_diklat + '</td><td>' + response.data.jumlah_jam + '</td><td>' + response.data.penyelenggara + '</td><td>' + response.data.tempat + '</td><td>' + response.data.angkatan + '</td><td>' + response.data.tahun + '</td><td>' + response.data.no_sttp + '</td><td>' + response.data.tanggal_sttp + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_diklat_struktural" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#nama_struktural').val('');
                // $('#jumlah_jam_struktural').val('');
                // $('#penyelenggara_struktural').val('');
                // $('#tempat_struktural').val('');
                // $('#angkatan_struktural').val('');
                // $('#no_sttp_struktural').val('');
                // $('#tahun_struktural').val('');
                // $('#tanggal_sttp_struktural').val('');
                // $('#tambah_diklat_struktural').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Diklat Struktural berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Diklat Struktural gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_diklat_fungsional':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+ 'riwayat_diklat',
            data: {
                nama_diklat: $('#nama_fungsional').val(),
                jumlah_jam: $('#jumlah_jam_fungsional').val(),
                penyelenggara: $('#penyelenggara_fungsional').val(),
                tempat: $('#tempat_fungsional').val(),
                angkatan: $('#angkatan_fungsional').val(),
                tahun: $('#tahun_fungsional').val(),
                no_sttp: $('#no_sttp_fungsional').val(),
                tanggal_sttp: $('#tanggal_sttp_fungsional').val(),
                jenis_diklat: jenis_diklat,
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_diklat_fungsional').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.nama_diklat + '</td><td>' + response.data.jumlah_jam + '</td><td>' + response.data.penyelenggara + '</td><td>' + response.data.tempat + '</td><td>' + response.data.angkatan + '</td><td>' + response.data.tahun + '</td><td>' + response.data.no_sttp + '</td><td>' + response.data.tanggal_sttp + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_diklat_fungsional" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#nama_fungsional').val('');
                // $('#jumlah_jam_fungsional').val('');
                // $('#penyelenggara_fungsional').val('');
                // $('#tempat_fungsional').val('');
                // $('#angkatan_fungsional').val('');
                // $('#no_sttp_fungsional').val('');
                // $('#tahun_fungsional').val('');
                // $('#tanggal_sttp_fungsional').val('');
                // $('#tambah_diklat_fungsional').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Riwayat Diklat Fungsional berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Riwayat Diklat Fungsional gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_diklat_teknis':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+ 'riwayat_diklat',
            data: {
                nama_diklat: $('#nama_teknis').val(),
                jumlah_jam: $('#jumlah_jam_teknis').val(),
                penyelenggara: $('#penyelenggara_teknis').val(),
                tempat: $('#tempat_teknis').val(),
                angkatan: $('#angkatan_teknis').val(),
                tahun: $('#tahun_teknis').val(),
                no_sttp: $('#no_sttp_teknis').val(),
                tanggal_sttp: $('#tanggal_sttp_teknis').val(),
                jenis_diklat: jenis_diklat,
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_diklat_teknis').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.nama_diklat + '</td><td>' + response.data.jumlah_jam + '</td><td>' + response.data.penyelenggara + '</td><td>' + response.data.tempat + '</td><td>' + response.data.angkatan + '</td><td>' + response.data.tahun + '</td><td>' + response.data.no_sttp + '</td><td>' + response.data.tanggal_sttp + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_diklat_teknis" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#nama_teknis').val('');
                // $('#jumlah_jam_teknis').val('');
                // $('#penyelenggara_teknis').val('');
                // $('#tempat_teknis').val('');
                // $('#angkatan_teknis').val('');
                // $('#no_sttp_teknis').val('');
                // $('#tahun_teknis').val('');
                // $('#tanggal_sttp_teknis').val('');
                // $('#tambah_diklat_teknis').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Riwayat Diklat Teknis berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Riwayat Diklat Teknis gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_kepegawaian':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                nama_statuskepegawaian: $('#nama_statuskepegawaian').val(),
                nama_pejabat: $('#nama_pejabat_kepegawaian').val(),
                no_sk: $('#no_sk_kepegawaian').val(),
                tanggal_sk: $('#tanggal_sk_kepegawaian').val(),
                pangkat: $('#pangkat_kepegawaian').val(),
                tmt: $('#tmt_kepegawaian').val(),
                instansi: $('#instansi_kepegawaian').val(),
                sub: $('#sub_kepegawaian').val(),
                nomor_bkn: $('#nomor_bkn_kepegawaian').val(),
                tanggal_bkn: $('#tanggal_bkn_kepegawaian').val(),
                sumpah: $('#sumpah_kepegawaian').val(),
                pejabat_sumpah: $('#pejabat_sumpah_kepegawaian').val(),
                nomor_berita_acara: $('#nomor_berita_acara_kepegawaian').val(),
                tanggal_berita_acara: $('#tanggal_berita_acara_kepegawaian').val(),
                unit_kerja: $('#unit_kerja_kepegawaian').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_pendidikan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.tingkat + '</td><td>' + response.data.nama_instansi + '</td><td>' + response.data.jurusan + '</td><td>' + response.data.no_ijazah + '</td><td>' + response.data.tanggal_ijazah + '</td><td>' + response.data.tempat + '</td><td>' + response.data.nama_pimpinan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_pendidikan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // $('.error_eselon').html('');
                // $('#nama_statuskepegawaian').val('');
                // $('#nama_pejabat_kepegawaian').val('');
                // $('#no_sk_kepegawaian').val('');
                // $('#tanggal_sk_kepegawaian').val('');
                // $('#pangkat_kepegawaian').val('');
                // $('#tmt_kepegawaian').val('');
                // $('#instansi_kepegawaian').val('');
                // $('#sub_kepegawaian').val('');
                // $('#unit_kerja_kepegawaian').val('');
                // $('#nomor_bkn_kepegawaian').val('');
                // $('#tanggal_bkn_kepegawaian').val('');
                // $('#sumpah_kepegawaian').val('');
                // $('#pejabat_sumpah_kepegawaian').val('');
                // $('#nomor_berita_acara_kepegawaian').val('');
                // $('#tanggal_berita_acara_kepegawaian').val('');
                // $('#tambah_kepegawaian').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Kepegawaian berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Kepegawaian gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_kursus':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                tipe_kursus: $('#tipe_kursus').val(),
                jenis_kursus: $('#jenis_kursus').val(),
                nama_kursus: $('#nama_kursus').val(),
                lama_kursus: $('#lama_kursus').val(),
                tahun_kursus: $('#tahun_kursus').val(),
                no_sertifikat_kursus: $('#no_sertifikat_kursus').val(),
                instansi_kursus: $('#instansi_kursus').val(),
                institusi_kursus: $('#institusi_kursus').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Kursus berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Kursus gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_penghargaan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                jenis_penghargaan: $('#jenis_penghargaan').val(),
                no_sk: $('#no_surat_penghargaan').val(),
                tanggal_sk: $('#tanggal_penghargaan').val(),
                tahun_penghargaan: $('#tahun_penghargaan').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Penghargaan berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Penghargaan gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_profesi':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                profesi: $('#jenis_profesi').val(),
                penyelenggara: $('#penyelenggara_profesi').val(),
                tahun_lulus: $('#tahun_profesi').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Profesi berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Profesi gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_unor':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                instansi: $('#instansi_unor').val(),
                nama_unor: $('#unor_unor').val(),
                no_sk: $('#no_sk_unor').val(),
                tanggal_sk: $('#tanggal_sk_unor').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Unit Organisasi berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Unit Organisasi gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_pemberhentian':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                jenis_pemberhentian: $('#jenis_pemberhentian').val(),
                kedudukan_hukum: $('#kedudukan_pemberhentian').val(),
                no_sk: $('#no_sk_pemberhentian').val(),
                tanggal_sk: $('#tanggal_sk_pemberhentian').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Pemberhentian berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Pemberhentian gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_cltn':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjax/')?>'+nip+'/'+tipe,
            data: {
                jenis_cltn: $('#jenis_cltn').val(),
                no_sk: $('#no_sk_cltn').val(),
                tanggal_skep: $('#tanggal_skep_cltn').val(),
                tanggal_awal: $('#tanggal_awal_cltn').val(),
                tanggal_akhir: $('#tanggal_akhir_cltn').val(),
                tanggal_aktif: $('#tanggal_aktif_cltn').val(),
                no_bkn: $('#no_bkn_cltn').val(),
                tanggal_bkn: $('#tanggal_bkn_cltn').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat CLTN berhasil ditambah.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat CLTN gagal ditambah.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;
    }
}

function editDataKeluarga(method,id_data,jenis, nama, ttl, pekerjaan ) {
    switch (method) {
        case 'data_pasangan':
        $('#id_data').val(id_data);
        $('#jenis').text('');
        // console.log($('#valueAgama').val());
        break;
    }

}

function editData(model,id){
    switch (model) {
        case 'cpns':
        $('#edit_nama_statuskepegawaian').val('cpns');
        $('#edit_cpns_bkn').removeAttr('style');
        $('#edit_pns_berita').css('display', 'none');
        $('#edit_nama_pejabat_kepegawaian').val($("td[data-pejabat='"+id+"']").text());
        $('#edit_no_sk_kepegawaian').val($("td[data-no='"+id+"']").text());
        $('#edit_tanggal_sk_kepegawaian').val($("td[data-tanggalsk='"+id+"']").text());
        $('#edit_pangkat_kepegawaian').val($("td[data-pangkat='"+id+"']").text());
        $('#edit_tmt_kepegawaian').val($("td[data-tanggaltmt='"+id+"']").text());
        $('#edit_instansi_kepegawaian').val($("td[data-instansi='"+id+"']").text());
        $('#edit_sub_kepegawaian').val($("td[data-subinstansi='"+id+"']").text());
        $('#edit_unit_kerja_kepegawaian').val($("td[data-unker='"+id+"']").text());
        $('#edit_nomor_bkn_kepegawaian').val($("td[data-nobkn='"+id+"']").text());
        $('#edit_tanggal_bkn_kepegawaian').val($("td[data-tanggalbkn='"+id+"']").text());
        idGlob = id;
        break;

        case 'pns':
        $('#edit_cpns_bkn').css('display', 'none');
        $('#edit_pns_berita').removeAttr('style');
        $('#edit_nama_statuskepegawaian').val('pns');
        $('#edit_nama_pejabat_kepegawaian').val($("td[data-pejabat='"+id+"']").text());
        $('#edit_no_sk_kepegawaian').val($("td[data-nosk='"+id+"']").text());
        $('#edit_tanggal_sk_kepegawaian').val($("td[data-tanggalsk='"+id+"']").text());
        $('#edit_pangkat_kepegawaian').val($("td[data-pangkat='"+id+"']").text());
        $('#edit_tmt_kepegawaian').val($("td[data-tanggaltmt='"+id+"']").text());
        $('#edit_instansi_kepegawaian').val($("td[data-instansi='"+id+"']").text());
        $('#edit_sub_kepegawaian').val($("td[data-subinstansi='"+id+"']").text());
        $('#edit_unit_kerja_kepegawaian').val($("td[data-unker='"+id+"']").text());
        $("#edit_sumpah_kepegawaian[value="+$("td[data-sumpah='"+id+"']").text()+"]").attr('checked', 'true');
        $('#edit_pejabat_sumpah_kepegawaian').val($("td[data-pengambilsumpah='"+id+"']").text());
        $('#edit_nomor_berita_acara_kepegawaian').val($("td[data-noberita='"+id+"']").text());
        $('#edit_tanggal_berita_acara_kepegawaian').val($("td[data-tanggalberita='"+id+"']").text());
        idGlob = id;
        break;

        case 'data_pasangan':
        $('#edit_jenis_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_nama_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_ttl_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_pekerjaan_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'data_anak':
        $('#edit_status_anak').val($(".data-itemanak[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_nama_anak').val($(".data-itemanak[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_ttl_anak').val($(".data-itemanak[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_pekerjaan_anak').val($(".data-itemanak[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'data_ortu':
        $('#edit_status_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_nama_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_ttl_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_pekerjaan_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'pendidikan':
        $('#edit_tingkat_pendidikan').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
        $('#edit_nama_pendidikan').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_nama_instansi_pendidikan').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_no_ijazah_pendidikan').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_tanggal_lulus_pendidikan').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(5)").text());
        idGlob = id;
        break;

        case 'jabatan':
        $('#edit_jenis_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
        $('#edit_kedudukan_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
        $('#edit_tmt_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tmt_pelantikan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_pejabat_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_nomor_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_tanggal_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(6)").text());
        idGlob = id;
        break;

        case 'mutasi':
        $('#edit_jabatan_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_pangkat_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_tmt_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_pejabat_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_nomor_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_tanggal_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(6)").text())
        idGlob = id;
        break;

        case 'golongan':
        $('#edit_golongan_golongan').val($(".data-itemriwayatgolongan[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
        $('#edit_nomor_sk').val($(".data-itemriwayatgolongan[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_tanggal_sk').val($(".data-itemriwayatgolongan[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tmt_golongan').val($(".data-itemriwayatgolongan[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_nomor_bkn').val($(".data-itemriwayatgolongan[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_tanggal_bkn').val($(".data-itemriwayatgolongan[data-id='" + id + "']>td:eq(6)").text());
        $('#edit_jenis_kp').val($(".data-itemriwayatgolongan[data-id='" + id + "']>td:eq(7)").text()).trigger('change');
        idGlob = id;
        break;

        case 'diklat':
        if ($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(10)").text() == 'struktural') {
            $('#edit_nama_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(1)").text());
            $('#edit_jumlah_jam_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(2)").text());
            $('#edit_penyelenggara_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(3)").text());
            $('#edit_tempat_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(4)").text());
            $('#edit_angkatan_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_tahun_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(6)").text());
            $('#edit_no_sttp_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(7)").text())
            $('#edit_tanggal_sttp_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(8)").text())
        }else if ($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(10)").text() == 'fungsional') {
            $('#edit_nama_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(1)").text());
            $('#edit_jumlah_jam_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(2)").text());
            $('#edit_penyelenggara_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(3)").text());
            $('#edit_tempat_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(4)").text());
            $('#edit_angkatan_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_tahun_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(6)").text());
            $('#edit_no_sttp_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(7)").text())
            $('#edit_tanggal_sttp_fungsional').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(8)").text())
        }else if ($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(10)").text() == 'teknis') {
            $('#edit_nama_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(1)").text());
            $('#edit_jumlah_jam_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(2)").text());
            $('#edit_penyelenggara_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(3)").text());
            $('#edit_tempat_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(4)").text());
            $('#edit_angkatan_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_tahun_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(6)").text());
            $('#edit_no_sttp_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(7)").text())
            $('#edit_tanggal_sttp_teknis').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(8)").text())
        }
        idGlob = id;
        break;

        case 'kursus':
        $('#edit_tipe_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
        $('#edit_instansi_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
        $('#edit_jenis_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_nama_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_tahun_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_lama_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(6)").text());
        $('#edit_no_sertifikat_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(7)").text());
        $('#edit_institusi_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(8)").text());
        idGlob = id;
        break;

        case 'penghargaan':
        $('#edit_jenis_penghargaan').val($(".data-itemriwayatpenghargaan[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_no_surat_penghargaan').val($(".data-itemriwayatpenghargaan[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_tanggal_penghargaan').val($(".data-itemriwayatpenghargaan[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tahun_penghargaan').val($(".data-itemriwayatpenghargaan[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'profesi':
        $('#edit_jenis_profesi').val($(".data-itemriwayatprofesi[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_penyelenggara_profesi').val($(".data-itemriwayatprofesi[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_tahun_profesi').val($(".data-itemriwayatprofesi[data-id='" + id + "']>td:eq(3)").text());
        idGlob = id;
        break;

        case 'unor':
        $('#edit_instansi_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_unor_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
        $('#edit_no_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tanggal_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'pemberhentian':
        $('#edit_jenis_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
        $('#edit_kedudukan_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
        $('#edit_no_sk_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tanggal_sk_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'angkakredit':
        $('#edit_instansi_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_unor_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
        $('#edit_no_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tanggal_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'dp3':
        $('#edit_instansi_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_unor_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
        $('#edit_no_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tanggal_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'skp':
        $('#edit_instansi_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_unor_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
        $('#edit_no_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tanggal_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(4)").text());
        idGlob = id;
        break;

        case 'cltn':
        $('#edit_jenis_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_no_sk_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_tanggal_skep_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_tanggal_awal_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_tanggal_akhir_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_tanggal_aktif_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(6)").text());
        $('#edit_no_bkn_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(7)").text());
        $('#edit_tanggal_bkn_cltn').val($(".data-itemriwayatcltn[data-id='" + id + "']>td:eq(8)").text());
        idGlob = id;
        break;
        default:

    }

}

function profilAjaxEdit_send(model){
    switch (model) {
        case 'riwayat_kepegawaian':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                nama_statuskepegawaian: $('#edit_nama_statuskepegawaian').val(),
                nama_pejabat: $('#edit_nama_pejabat_kepegawaian').val(),
                no_sk: $('#edit_no_sk_kepegawaian').val(),
                tanggal_sk: $('#edit_tanggal_sk_kepegawaian').val(),
                pangkat: $('#edit_pangkat_kepegawaian').val(),
                tmt: $('#edit_tmt_kepegawaian').val(),
                instansi: $('#edit_instansi_kepegawaian').val(),
                sub: $('#edit_sub_kepegawaian').val(),
                nomor_bkn: $('#edit_nomor_bkn_kepegawaian').val(),
                tanggal_bkn: $('#edit_tanggal_bkn_kepegawaian').val(),
                sumpah: $('#edit_sumpah_kepegawaian').val(),
                pejabat_sumpah: $('#edit_pejabat_sumpah_kepegawaian').val(),
                nomor_berita_acara: $('#edit_nomor_berita_acara_kepegawaian').val(),
                tanggal_berita_acara: $('#edit_tanggal_berita_acara_kepegawaian').val(),
                unit_kerja: $('#edit_unit_kerja_kepegawaian').val()
            }
        }).done(function(response) {
            if (response.success) {
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Kepegawaian berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Kepegawaian gagal diperbaharui.', 'error');
            }
        });
        break;

        case 'pendidikan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                tingkat: $('#edit_tingkat_pendidikan').val(),
                nama_pendidikan: $('#edit_nama_pendidikan').val(),
                nama_instansi: $('#edit_nama_instansi_pendidikan').val(),
                no_ijazah: $('#edit_no_ijazah_pendidikan').val(),
                tanggal_lulus: $('#edit_tanggal_lulus_pendidikan').val()
            }
        }).done(function(response) {
            if (response.success) {
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Pendidikan berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Pendidikan gagal diperbaharui.', 'error');
            }
        });
        break;

        case 'jabatan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                jenis: $('#edit_jenis_jabatan').val(),
                kedudukan: $('#edit_kedudukan_jabatan').val(),
                tmt_jabatan: $('#edit_tmt_jabatan').val(),
                tmt_pelantikan: $('#edit_tmt_pelantikan').val(),
                pejabat: $('#edit_pejabat_jabatan').val(),
                nomor: $('#edit_nomor_jabatan').val(),
                tanggal: $('#edit_tanggal_jabatan').val()
            }
        }).done(function(response) {
            if (response.success) {
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Pendidikan berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Pendidikan gagal diperbaharui.', 'error');
            }
        });
        break;

        case 'data_pasangan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                jenis: $('#edit_jenis_pasangan').val(),
                nama: $('#edit_nama_pasangan').val(),
                ttl: $('#edit_ttl_pasangan').val(),
                pekerjaan: $('#edit_pekerjaan_pasangan').val(),
            }
        }).done(function(response) {
            if (response.success) {
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Pasangan berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Pasangan gagal diperbaharui.', 'error');
            }
        });
        break;

        case 'data_anak':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                status: $('#edit_status_anak').val(),
                nama: $('#edit_nama_anak').val(),
                ttl: $('#edit_ttl_anak').val(),
                pekerjaan: $('#edit_pekerjaan_anak').val(),
            }
        }).done(function(response) {
            if (response.success) {
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Anak berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Anak gagal diperbaharui.', 'error');
            }
        });
        break;

        case 'data_ortu':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                status: $('#edit_status_ortu').val(),
                nama: $('#edit_nama_ortu').val(),
                ttl: $('#edit_ttl_ortu').val(),
                pekerjaan: $('#edit_pekerjaan_ortu').val(),
            }
        }).done(function(response) {
            if (response.success) {
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Orang Tua berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Orang Tua gagal diperbaharui.', 'error');
            }
        });
        break;

        case 'mutasi' :
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                jabatan: $('#edit_jabatan_mutasi').val(),
                pangkat: $('#edit_pangkat_mutasi').val(),
                tmt: $('#edit_tmt_mutasi').val(),
                pejabat: $('#edit_pejabat_mutasi').val(),
                nomor: $('#edit_nomor_mutasi').val(),
                tanggal: $('#edit_tanggal_mutasi').val(),
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_mutasi').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.jabatan + '</td><td>' + response.data.pangkat + '</td><td>' + response.data.tmt + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_mutasi" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#jabatan_mutasi').val('');
                // $('#pangkat_mutasi').val('');
                // $('#tmt_mutasi').val('');
                // $('#pejabat_mutasi').val('');
                // $('#tanggal_mutasi').val('');
                // $('#nomor_mutasi').val('');
                // $('#tambah_mutasi').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Mutasi berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Mutasi gagal diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'golongan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                golongan: $('#edit_golongan_golongan').val(),
                nomor_sk: $('#edit_nomor_sk').val(),
                tanggal_sk: $('#edit_tanggal_sk').val(),
                tmt_golongan: $('#edit_tmt_golongan').val(),
                nomor_bkn: $('#edit_nomor_bkn').val(),
                tanggal_bkn: $('#edit_tanggal_bkn').val(),
                jenis_kp: $('#edit_jenis_kp').val()
                // masa_kerja_bln: $('#edit_masa_kerja_bln').val()
                // masa_kerja_thn: $('#edit_masa_kerja_thn').val(),
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Golongan berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Golongan gagal diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_diklat':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                nama_diklat: $('#edit_nama_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val(),
                jumlah_jam: $('#edit_jumlah_jam_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val(),
                penyelenggara: $('#edit_penyelenggara_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val(),
                tempat: $('#edit_tempat_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val(),
                angkatan: $('#edit_angkatan_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val(),
                tahun: $('#edit_tahun_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val(),
                no_sttp: $('#edit_no_sttp_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val(),
                tanggal_sttp: $('#edit_tanggal_sttp_'+$(".data-itemriwayatdiklat[data-id='" + idGlob + "']>td:eq(10)").text()).val()
                // masa_kerja_bln: $('#edit_masa_kerja_bln').val()
                // masa_kerja_thn: $('#edit_masa_kerja_thn').val(),
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Diklat berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Diklat gagal diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_kursus':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                tipe_kursus: $('#edit_tipe_kursus').val(),
                jenis_kursus: $('#edit_jenis_kursus').val(),
                nama_kursus: $('#edit_nama_kursus').val(),
                lama_kursus: $('#edit_lama_kursus').val(),
                tahun_kursus: $('#edit_tahun_kursus').val(),
                no_sertifikat_kursus: $('#edit_no_sertifikat_kursus').val(),
                instansi_kursus: $('#edit_instansi_kursus').val(),
                institusi_kursus: $('#edit_institusi_kursus').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Kursus berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Kursus gagal diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_penghargaan':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                jenis_penghargaan: $('#edit_jenis_penghargaan').val(),
                no_sk: $('#edit_no_surat_penghargaan').val(),
                tanggal_sk: $('#edit_tanggal_penghargaan').val(),
                tahun_penghargaan: $('#edit_tahun_penghargaan').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Penghargaan berhasil Diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Penghargaan gagal Diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_profesi':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                profesi: $('#edit_jenis_profesi').val(),
                penyelenggara: $('#edit_penyelenggara_profesi').val(),
                tahun_lulus: $('#edit_tahun_profesi').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Profesi berhasil Diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Profesi gagal Diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_unor':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                instansi: $('#edit_instansi_unor').val(),
                nama_unor: $('#edit_unor_unor').val(),
                no_sk: $('#edit_no_sk_unor').val(),
                tanggal_sk: $('#edit_tanggal_sk_unor').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Unit Organisasi berhasil diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Unit Organisasi gagal diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_pemberhentian':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                jenis_pemberhentian: $('#edit_jenis_pemberhentian').val(),
                kedudukan_hukum: $('#edit_kedudukan_pemberhentian').val(),
                no_sk: $('#edit_no_sk_pemberhentian').val(),
                tanggal_sk: $('#edit_tanggal_sk_pemberhentian').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat Pemberhentian berhasil Diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat Pemberhentian gagal Diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        case 'riwayat_cltn':
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/profilAjaxEdit/')?>'+idGlob+'/'+model,
            data: {
                jenis_cltn: $('#edit_jenis_cltn').val(),
                no_sk: $('#edit_no_sk_cltn').val(),
                tanggal_skep: $('#edit_tanggal_skep_cltn').val(),
                tanggal_awal: $('#edit_tanggal_awal_cltn').val(),
                tanggal_akhir: $('#edit_tanggal_akhir_cltn').val(),
                tanggal_aktif: $('#edit_tanggal_aktif_cltn').val(),
                no_bkn: $('#edit_no_bkn_cltn').val(),
                tanggal_bkn: $('#edit_tanggal_bkn_cltn').val()
            }
        }).done(function(response) {
            if (response.success) {
                // $('#tbl_riwayat_golongan').append('<tr class="data-item" data-id=""><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                // // $('.error_eselon').html('');
                // $('#pangkat_golongan').val('');
                // $('#golongan_golongan').val('');
                // $('#tmt_golongan').val('');
                // $('#jenis_golongan').val('');
                // $('#pejabat_golongan').val('');
                // $('#tanggal_golongan').val('');
                // $('#nomor_golongan').val('');
                // $('#tambah_golongan').modal('hide');
                setTimeout(function() { location.reload() },1500);
                swal('Sukses', 'Data Riwayat CLTN berhasil Diperbaharui.', 'success');
            } else {
                swal('Gagal', 'Data Riwayat CLTN gagal Diperbaharui.', 'error');
                // $('#tambah_eselon').modal('hide');
                // $('.error_pasangan').html(response.error);
            }
        });
        break;

        default:


    }
}

function hapusData(method,id) {
    swal({
        title: 'Apakah Anda Yakin?',
        text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!',
        cancelButtonText: 'Batalkan!',
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('DataPegawai/hapusData/')?>'+method+'/'+id
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data  berhasil dihapus.', 'success');
                } else swal('Gagal', 'Data  Gagal dihapus.', 'error');
            });
        } else {
            swal(
                'Batal',
                'Proses Hapus Data dibatalkan! :)',
                'error'
            )
        }
    });
}

function hapusRiwayat(method,id) {
    swal({
        title: 'Apakah Anda Yakin?',
        text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!',
        cancelButtonText: 'Batalkan!',
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('DataPegawai/hapusRiwayat/')?>'+method+'/'+id
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat berhasil dihapus.', 'success');
                } else swal('Gagal', 'Data Riwayat Gagal dihapus.', 'error');
            });
        } else {
            swal(
                'Batal',
                'Proses Hapus Data dibatalkan! :)',
                'error'
            )
        }
    });
}
</script>
