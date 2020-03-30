<!-- OVERVIEW -->
<div class="panel panel-headline">
    <div class="panel-heading">
        <center>
        <h4 class="panel-title"><?=$data_pegawai->gelar_depan != NULL ? $data_pegawai->gelar_depan.'.' : '' ?> <?=$data_pegawai->nama_lengkap?><?=$data_pegawai->gelar_belakang != NULL ? ', '.$data_pegawai->gelar_belakang : '' ?></h4>
        <p>NIP : <?=$data_pegawai->nip?></p>
        </center>
    </div>
    <div class="panel-body">
    <hr>
        <div class="row">
            <div class="col-md-2 text-center">
                <img src="<?=upload_url('fotopegawai').(empty($data_pegawai->gambar) ? 'no_image.jpg' : $data_pegawai->gambar)?>" style="width:100%"> </div>
                <div class="col-md-4">
                    <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="200">Nama</td>
                            <td width="1">:</td>
                            <td><?=$data_pegawai->nama_lengkap?></td>
                        </tr>
                        <tr>
                            <td >NIP</td>
                            <td >:</td>
                            <td><?=$data_pegawai->nip?> </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td> <?=$data_pegawai->tempat_lahir?> </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><?=date('d F Y',strtotime($data_pegawai->nip))?></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>:</td>
                            <td><?=$data_pegawai->email?></td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td>:</td>
                            <td> <?php  
                                    $akhir = new DateTime(date('m/d/Y'));
                                    $awal = new DateTime($data_pegawai->tanggal_lahir);
                                echo $akhir->diff($awal)->format("%y Thn %m Bln %d Hr")?> </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td> <?=$data_pegawai->agama?> </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td> <?=$data_pegawai->jenis_kelamin?> </td>
                        </tr>
                        <tr>
                            <td>Status Kepegawaian</td>
                            <td>:</td>
                            <td><?=$data_pegawai->status_kepegawaian?></td>
                        </tr>
                        <tr>
                            <td>TMT CPNS</td>
                            <td>:</td>
                            <td><?=$data_pegawai->tmt_cpns?></td>
                        </tr>
                        <tr>
                            <td>Tanggal SK CPNS</td>
                            <td>:</td>
                            <td><?=$data_pegawai->tanggal_sk_cpns?></td>
                        </tr>
                        <tr>
                            <td>Nomor SK CPNS</td>
                            <td>:</td>
                            <td><?=$data_pegawai->no_sk_cpns?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>TMT PNS</td>
                            <td>:</td>
                            <td><?=$data_pegawai->tmt_pns?></td>
                        </tr>
                        <tr>
                            <td>Tanggal SK PNS</td>
                            <td>:</td>
                            <td>  <?=$data_pegawai->tanggal_sk_pns?> </td>
                        </tr>
                        <tr>
                            <td>Nomor SK PNS</td>
                            <td>:</td>
                            <td>  <?=$data_pegawai->no_sk_pns?> </td>
                        </tr>
                        <tr>
                            <td width="150">Pangkat/Golongan/Ruang</td>
                            <td width="1">:</td>
                            <td><?=$data_pegawai->jenis_pangkat?></td>
                        </tr>
                        <tr>
                            <td>Eselon</td>
                            <td>:</td>
                            <td> <?=$data_pegawai->eselon?> </td>
                        </tr>
                        <tr>
                            <td>Jenis Jabatan</td>
                            <td>:</td>
                            <td><?=$data_pegawai->jenis_jabatan?></td>
                        </tr>
                        <tr>
                            <td>Nama Jabatan </td>
                            <td>:</td>
                            <td><?=$data_pegawai->nama_jabatan?></td>
                        </tr>
                        <tr>
                            <td>Masa Kerja Jabatan</td>
                            <td>:</td>
                            <td>  <?=$data_pegawai->masa_kerja_jabatan?> Hr </td>
                        </tr>
                        <tr>
                            <td>Masa Kerja Total</td>
                            <td>:</td>
                            <td>  <?=$data_pegawai->masa_kerja_total?> Hr </td>
                        </tr>
                        <tr>
                            <td>Masa Kerja Golongan</td>
                            <td>:</td>
                            <td> <?=$data_pegawai->masa_kerja_golongan?> Hr</td>
                        </tr>
                        <tr>
                            <td>TMT Jabatan</td>
                            <td>:</td>
                             <td><?=date('d F Y',strtotime($data_pegawai->tmt_jabatan))?></td>
                        </tr>
                        <tr>
                            <td>Bidang/Bagian</td>
                            <td>:</td>
                            <td> <?=$data_pegawai->satuan_kerja?></td>
                        </tr>
                        <tr>
                            <td>Subbidang/Seksi</td>
                            <td>:</td>
                            <td> <?=$data_pegawai->unit_kerja?> </td>
                        </tr>
                        <tr>
                            <td colspan="3">
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
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="utama">
                            <div class="col-md-6">
                                <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="150">Gol. Darah</td>
                                        <td width="1">:</td>
                                        <td><?=$data_pegawai->golongan_darah?></td>
                                    </tr>
                                    <tr>
                                        <td width="150">Alamat</td>
                                        <td width="1">:</td>
                                        <td><?=$data_alamat->alamat?></td>
                                    </tr>
                                    <tr>
                                        <td>Kabupaten/Kota</td>
                                        <td>:</td>
                                        <td> <?=$data_alamat->kab?></td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>
                                        <td>:</td>
                                        <td> <?=$data_alamat->kec?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelurahan</td>
                                        <td>:</td>
                                        <td> <?=$data_alamat->kel?></td>
                                    </tr>
                                    <tr>
                                        <td>Kode Pos</td>
                                        <td>:</td>
                                        <td> <?=$data_alamat->kode_pos?></td>
                                    </tr>
                                    <tr>
                                        <td>Telepon</td>
                                        <td>:</td>
                                        <td> <?=$data_alamat->telepon?></td>
                                    </tr>
                                    <tr>
                                        <td>HP</td>
                                        <td>:</td>
                                        <td> <?=$data_alamat->hp?></td>
                                    </tr>
                                    <tr>
                                        <td>Tinggi Badan (cm)</td>
                                        <td>:</td>
                                        <td> <?=$data_keteranganbadan->tinggi_badan?></td>
                                    </tr><tr>
                                        <td>Berat Badan (kg)</td>
                                        <td>:</td>
                                        <td>  <?=$data_keteranganbadan->berat_badan?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>NIK</td>
                                        <td>:</td>
                                        <td>  <?=$data_keteranganlainnya->no_ktp?></td>
                                    </tr><tr>
                                        <td>No. KARPEG </td>
                                        <td>:</td>
                                        <td> <?=$data_keteranganlainnya->no_karpeg?></td>
                                    </tr><tr>
                                        <td>No. ASKES</td>
                                        <td>:</td>
                                        <td> <?=$data_keteranganlainnya->no_askes?></td>
                                    </tr><tr>
                                        <td>No. TASPEN</td>
                                        <td>:</td>
                                        <td> <?=$data_keteranganlainnya->no_taspen?></td>
                                    </tr><tr>
                                        <td>No. KARSI/KARSU</td>
                                        <td>:</td>
                                        <td> <?=$data_keteranganlainnya->no_karis?></td>
                                    </tr>
                                    <tr>
                                        <td>No. NPWP</td>
                                        <td>:</td>
                                        <td> <?=$data_keteranganlainnya->no_npwp?></td>
                                    </tr>
                                    <tr>
                                        <td>No. KORPRI</td>
                                        <td>:</td>
                                        <td> <?=$data_keteranganlainnya->no_korpri?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="keluarga">
                        <div class="col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                  <div class="panel-heading" style="padding: 10px">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#istrisuami"><strong>Data Istri/Suami</strong></a>
                                  </div>
                                  <div id="istrisuami" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    <!-- BORDERED TABLE -->
                                        <table  id="tbl_pasangan" class="table table-bordered">
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
                                                        <tr>
                                                            <td><?=$i?></td>
                                                            <td><?=$data_pasangan->jenis?></td>
                                                            <td><?=$data_pasangan->nama?></td>
                                                            <td><?=$data_pasangan->ttl?></td>
                                                            <td><?=$data_pasangan->pekerjaan?></td>
                                                            <td align="center">
                                                                <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs" onclick="editData('data_pasangan','<?=$data_pasangan->id_data?>','<?=$data_pasangan->jenis?>','<?=$data_pasangan->ttl?>','<?=$data_pasangan->pekerjaan?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                            </td>
                                                        </tr>
                                                     <?php $i++; endforeach ?>
                                                <?php endif ?>                                              
                                            </tbody>
                                        </table>
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#istri"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" style="padding: 10px">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#anak"><strong>Data Anak</strong></a>
                                  </div>
                                  <div id="anak" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <!-- BORDERED TABLE -->
                                        <table  id="tbl_anak" class="table table-bordered">
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
                                                            <tr>
                                                                <td><?=$i?></td>
                                                                <td><?=$data_anak->status?></td>
                                                                <td><?=$data_anak->nama?></td>
                                                                <td><?=$data_anak->ttl?></td>
                                                                <td><?=$data_anak->pekerjaan?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                              
                                            </tbody>
                                        </table>
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_anak"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" style="padding: 10px">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#orangtua"><strong>Data Orang Tua</strong></a>
                                  </div>
                                  <div id="orangtua" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <!-- BORDERED TABLE -->
                                        <table  id="tbl_ortu" class="table table-bordered">
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
                                                <?php if ($data_orangtua != NULL): ?>
                                                    <?php foreach ($data_orangtua as $data_orangtua): ?>
                                                        <?php $i = 1; ?>
                                                            <tr>
                                                                <td><?=$i?></td>
                                                                <td><?=$data_orangtua->status?></td>
                                                                <td><?=$data_orangtua->nama?></td>
                                                                <td><?=$data_orangtua->ttl?></td>
                                                                <td><?=$data_orangtua->pekerjaan?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    <!-- END BORDERED TABLE -->
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
                                      <a data-toggle="collapse" data-parent="#accordion1" href="#pendidikan"><strong>Data Riwayat Pendidikan</strong></a>
                                  </div>
                                  <div id="pendidikan" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    <!-- BORDERED TABLE -->
                                        <table id="tbl_riwayat_pendidikan" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Tingkat </th>
                                                    <th>Nama Instansi</th>
                                                    <th>Jurusan</th>
                                                    <th>No. Ijazah</th>
                                                    <th>Tgl. Ijazah</th>
                                                    <th>Tempat</th>
                                                    <th>Nama Pimpinan</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($riwayat_pendidikan != NULL): ?>
                                                    <?php foreach ($riwayat_pendidikan as $riwayat_pendidikan): ?>
                                                        <?php $i = 1; ?>
                                                            <tr>
                                                                <td><?=$i?></td>
                                                                <td><?=$riwayat_pendidikan->tingkat?></td>
                                                                <td><?=$riwayat_pendidikan->nama_instansi?></td>
                                                                <td><?=$riwayat_pendidikan->jurusan?></td>
                                                                <td><?=$riwayat_pendidikan->no_ijazah?></td>
                                                                <td><?=$riwayat_pendidikan->tanggal_ijazah?></td>
                                                                <td><?=$riwayat_pendidikan->tempat?></td>
                                                                <td><?=$riwayat_pendidikan->nama_pimpinan?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pendidikan"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading" style="padding: 10px">
                                      <a data-toggle="collapse" data-parent="#accordion1" href="#jabatan"><strong>Data Riwayat Jabatan</strong></a>
                                  </div>
                                  <div id="jabatan" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <!-- BORDERED TABLE -->
                                        <table id="tbl_riwayat_jabatan" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">No.</th>
                                                    <th rowspan="2">Jabatan </th>
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
                                                <?php if ($riwayat_jabatan != NULL): ?>
                                                    <?php foreach ($riwayat_jabatan as $riwayat_jabatan): ?>
                                                        <?php $i = 1; ?>
                                                            <tr>
                                                                <td><?=$i?></td>
                                                                <td><?=$riwayat_jabatan->jabatan?></td>
                                                                <td><?=$riwayat_jabatan->tmt?></td>
                                                                <td><?=$riwayat_jabatan->pejabat?></td>
                                                                <td><?=$riwayat_jabatan->nomor?></td>
                                                                <td><?=$riwayat_jabatan->tanggal?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
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
                                        <table id="tbl_riwayat_mutasi" class="table table-bordered">
                                            <thead>
                                                <tr>
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
                                                            <tr>
                                                                <td><?=$i?></td>
                                                                <td><?=$riwayat_mutasi->jabatan?></td>
                                                                <td><?=$riwayat_mutasi->pangkat?></td>
                                                                <td><?=$riwayat_mutasi->tmt?></td>
                                                                <td><?=$riwayat_mutasi->nomor?></td>
                                                                <td><?=$riwayat_mutasi->pejabat?></td>
                                                                <td><?=$riwayat_mutasi->nomor?></td>
                                                                <td><?=$riwayat_mutasi->tanggal?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
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
                                        <table id="tbl_riwayat_golongan" class="table table-bordered">
                                            <thead>
                                                <tr >
                                                    <th rowspan="2">No.</th>
                                                    <th rowspan="2">Pangkat </th>
                                                    <th rowspan="2">Golongan</th>
                                                    <th rowspan="2">TMT</th>
                                                    <th rowspan="2">Jenis</th>
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
                                                <?php if ($riwayat_golongan != NULL): ?>
                                                    <?php foreach ($riwayat_golongan as $riwayat_golongan): ?>
                                                        <?php $i = 1; ?>
                                                            <tr>
                                                                <td><?=$i?></td>
                                                                <td><?=$riwayat_golongan->pangkat?></td>
                                                                <td><?=$riwayat_golongan->golongan?></td>
                                                                <td><?=$riwayat_golongan->tmt?></td>
                                                                <td><?=$riwayat_golongan->jenis?></td>
                                                                <td><?=$riwayat_golongan->pejabat?></td>
                                                                <td><?=$riwayat_golongan->nomor?></td>
                                                                <td><?=$riwayat_golongan->tanggal?></td>
                                                                <td align="center">
                                                                    <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                </td>
                                                            </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
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
                                        <table id="tbl_riwayat_diklat_struktural" class="table table-bordered">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($riwayat_diklat != NULL): ?>
                                                    <?php foreach ($riwayat_diklat as $riwayat_diklat): ?>
                                                        <?php $i = 1; ?>
                                                            <?php if ($riwayat_diklat->jenis_diklat == 'struktural'): ?>
                                                                <tr>
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
                                                                        <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>
                                                            <?php endif ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_diklat_struktural"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    <hr>
                                    <!-- BORDERED TABLE -->
                                    <h3>Diklat Fungsional</h3>
                                        <table id="tbl_riwayat_diklat_fungsional" class="table table-bordered">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php if ($riwayat_diklat1 != NULL): ?>
                                                    <?php foreach ($riwayat_diklat1 as $riwayat_diklat1): ?>
                                                        <?php $i = 1; ?>
                                                            <?php if ($riwayat_diklat1->jenis_diklat == 'fungsional'): ?>
                                                                <tr>
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
                                                                        <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>
                                                            <?php endif ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_diklat_fungsional"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    <hr>
                                    <!-- BORDERED TABLE -->
                                    <h3>Diklat Teknis</h3>
                                        <table id="tbl_riwayat_diklat_teknis" class="table table-bordered">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php if ($riwayat_diklat2 != NULL): ?>
                                                    <?php foreach ($riwayat_diklat2 as $riwayat_diklat2): ?>
                                                        <?php $i = 1; ?>
                                                            <?php if ($riwayat_diklat2->jenis_diklat == 'teknis'): ?>
                                                                <tr>
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
                                                                        <a data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>
                                                            <?php endif ?>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    <!-- END BORDERED TABLE -->
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_diklat_teknis"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
            <label for="bahan" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','data_anak','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Status</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','data_ortu','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Status</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
              <input type="text" id="tingkat_pendidikan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama Instansi</label>
            <div class="col-sm-9">
              <input type="text" id="nama_instansi_pendidikan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Jurusan</label>
            <div class="col-sm-9">
              <input type="text"  id="jurusan_pendidikan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">No. Ijazah</label>
            <div class="col-sm-9">
              <input type="text" id="no_ijazah_pendidikan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tgl. Ijazah</label>
            <div class="col-sm-9">
                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" id="tanggal_ijazah_pendidikan" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat</label>
            <div class="col-sm-9">
              <input type="text" id="tempat_pendidikan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama Pimpinan</label>
            <div class="col-sm-9">
              <input type="text" id="nama_pimpinan_pendidikan" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_pendidikan','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama Instansi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jurusan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">No. Ijazah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tgl. Ijazah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama Pimpinan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" ></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
            <div class="col-sm-9">
              <input type="text" id="jabatan_jabatan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">TMT</label>
            <div class="col-sm-9">
                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" id="tmt_jabatan" class="form-control">
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
            <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">TMT</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_mutasi','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">TMT</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text"lass="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pejabat Penandatangan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text"  class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
            <div class="col-sm-9">
              <input type="text" id="pangkat_golongan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Golongan</label>
            <div class="col-sm-9">
              <input type="text" id="golongan_golongan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">TMT</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" id="tmt_golongan" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis</label>
            <div class="col-sm-9">
              <input type="text" id="jenis_golongan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
            <div class="col-sm-9">
              <input type="text" id="pejabat_golongan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
            <div class="col-sm-9">
              <input type="text" id="nomor_golongan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" id="tanggal_golongan" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_golongan','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Golongan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">TMT</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nomor</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text"  class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
            <div class="col-sm-9">
              <input type="text" id="jumlah_jam_struktural" class="form-control" >
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
              <input type="text" id="tahun_struktural" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
            <div class="col-sm-9">
              <input type="text" id="no_sttp_struktural" class="form-control" >
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
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_diklat_struktural','struktural')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
            <div class="col-sm-9">
              <input type="text" id="jumlah_jam_fungsional" class="form-control" >
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
              <input type="text" id="angkatan_fungsional"  class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" id="tahun_fungsional" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
            <div class="col-sm-9">
              <input type="text" id="no_sttp_fungsional" class="form-control" >
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
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_diklat_fungsional','fungsional')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
            <div class="col-sm-9">
                <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
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
            <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
            <div class="col-sm-9">
              <input type="text" id="jumlah_jam_teknis" class="form-control" >
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
              <input type="text" id="angkatan_teknis" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" id="tahun_teknis" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
            <div class="col-sm-9">
              <input type="text" id="no_sttp_teknis" class="form-control" >
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
            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send('<?=$data_pegawai->nip?>','riwayat_diklat_teknis','teknis')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
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
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tempat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text"  class="form-control">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" href="profil_lengkap.html"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
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
                        $('#tbl_pasangan').append('<tr><td class="text-center">.</td><td>' + response.data.jenis + '</td><td>' + response.data.nama + '</td><td>' + response.data.ttl + '</td><td>' + response.data.pekerjaan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_istri" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
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
                        $('#tbl_anak').append('<tr><td class="text-center">.</td><td>' + response.data.status + '</td><td>' + response.data.nama + '</td><td>' + response.data.ttl + '</td><td>' + response.data.pekerjaan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_anak" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
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
                        $('#tbl_ortu').append('<tr><td class="text-center">.</td><td>' + response.data.status + '</td><td>' + response.data.nama + '</td><td>' + response.data.ttl + '</td><td>' + response.data.pekerjaan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_ortu" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
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
                    nama_instansi: $('#nama_instansi_pendidikan').val(),
                    jurusan: $('#jurusan_pendidikan').val(),
                    no_ijazah: $('#no_ijazah_pendidikan').val(),
                    tanggal_ijazah: $('#tanggal_ijazah_pendidikan').val(),
                    tempat: $('#tempat_pendidikan').val(),
                    nama_pimpinan: $('#nama_pimpinan_pendidikan').val()
                    }
                }).done(function(response) {
                    if (response.success) {
                        $('#tbl_riwayat_pendidikan').append('<tr><td class="text-center">.</td><td>' + response.data.tingkat + '</td><td>' + response.data.nama_instansi + '</td><td>' + response.data.jurusan + '</td><td>' + response.data.no_ijazah + '</td><td>' + response.data.tanggal_ijazah + '</td><td>' + response.data.tempat + '</td><td>' + response.data.nama_pimpinan + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_pendidikan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                        // $('.error_eselon').html('');
                        $('#tingkat_pendidikan').val('');
                        $('#nama_instansi_pendidikan').val('');
                        $('#jurusan_pendidikan').val('');
                        $('#tanggal_ijazah_pendidikan').val('');
                        $('#no_ijazah_pendidikan').val('');
                        $('#tempat_pendidikan').val('');
                        $('#nama_instansi_pendidikan').val('');
                        $('#tambah_pendidikan').modal('hide');
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
                    jabatan: $('#jabatan_jabatan').val(),
                    tmt: $('#tmt_jabatan').val(),
                    pejabat: $('#pejabat_jabatan').val(),
                    nomor: $('#nomor_jabatan').val(),
                    tanggal: $('#tanggal_jabatan').val(),
                    }
                }).done(function(response) {
                    if (response.success) {
                        $('#tbl_riwayat_jabatan').append('<tr><td class="text-center">.</td><td>' + response.data.jabatan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_jabatan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                        // $('.error_eselon').html('');
                        $('#jabatan_jabatan').val('');
                        $('#tmt_jabatan').val('');
                        $('#pejabat_jabatan').val('');
                        $('#tanggal_jabatan').val('');
                        $('#nomor_jabatan').val('');
                        $('#tambah_jabatan').modal('hide');
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
                        $('#tbl_riwayat_mutasi').append('<tr><td class="text-center">.</td><td>' + response.data.jabatan + '</td><td>' + response.data.pangkat + '</td><td>' + response.data.tmt + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_mutasi" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                        // $('.error_eselon').html('');
                        $('#jabatan_mutasi').val('');
                        $('#pangkat_mutasi').val('');
                        $('#tmt_mutasi').val('');
                        $('#pejabat_mutasi').val('');
                        $('#tanggal_mutasi').val('');
                        $('#nomor_mutasi').val('');
                        $('#tambah_mutasi').modal('hide');
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
                    pangkat: $('#pangkat_golongan').val(),
                    golongan: $('#golongan_golongan').val(),
                    tmt: $('#tmt_golongan').val(),
                    jenis: $('#jenis_golongan').val(),
                    pejabat: $('#pejabat_golongan').val(),
                    nomor: $('#nomor_golongan').val(),
                    tanggal: $('#tanggal_golongan').val(),
                    }
                }).done(function(response) {
                    if (response.success) {
                        $('#tbl_riwayat_golongan').append('<tr><td class="text-center">.</td><td>' + response.data.pangkat + '</td><td>' + response.data.golongan + '</td><td>' + response.data.tmt + '</td><td>' + response.data.jenis + '</td><td>' + response.data.pejabat + '</td><td>' + response.data.nomor + '</td><td>' + response.data.tanggal + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_golongan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                        // $('.error_eselon').html('');
                        $('#pangkat_golongan').val('');
                        $('#golongan_golongan').val('');
                        $('#tmt_golongan').val('');
                        $('#jenis_golongan').val('');
                        $('#pejabat_golongan').val('');
                        $('#tanggal_golongan').val('');
                        $('#nomor_golongan').val('');
                        $('#tambah_golongan').modal('hide');
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
                        $('#tbl_riwayat_diklat_struktural').append('<tr><td class="text-center">.</td><td>' + response.data.nama_diklat + '</td><td>' + response.data.jumlah_jam + '</td><td>' + response.data.penyelenggara + '</td><td>' + response.data.tempat + '</td><td>' + response.data.angkatan + '</td><td>' + response.data.tahun + '</td><td>' + response.data.no_sttp + '</td><td>' + response.data.tanggal_sttp + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_diklat_struktural" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                        // $('.error_eselon').html('');
                        $('#nama_struktural').val('');
                        $('#jumlah_jam_struktural').val('');
                        $('#penyelenggara_struktural').val('');
                        $('#tempat_struktural').val('');
                        $('#angkatan_struktural').val('');
                        $('#no_sttp_struktural').val('');
                        $('#tahun_struktural').val('');
                        $('#tanggal_sttp_struktural').val('');
                        $('#tambah_diklat_struktural').modal('hide');
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
                        $('#tbl_riwayat_diklat_fungsional').append('<tr><td class="text-center">.</td><td>' + response.data.nama_diklat + '</td><td>' + response.data.jumlah_jam + '</td><td>' + response.data.penyelenggara + '</td><td>' + response.data.tempat + '</td><td>' + response.data.angkatan + '</td><td>' + response.data.tahun + '</td><td>' + response.data.no_sttp + '</td><td>' + response.data.tanggal_sttp + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_diklat_fungsional" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                        // $('.error_eselon').html('');
                        $('#nama_fungsional').val('');
                        $('#jumlah_jam_fungsional').val('');
                        $('#penyelenggara_fungsional').val('');
                        $('#tempat_fungsional').val('');
                        $('#angkatan_fungsional').val('');
                        $('#no_sttp_fungsional').val('');
                        $('#tahun_fungsional').val('');
                        $('#tanggal_sttp_fungsional').val('');
                        $('#tambah_diklat_fungsional').modal('hide');
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
                        $('#tbl_riwayat_diklat_teknis').append('<tr><td class="text-center">.</td><td>' + response.data.nama_diklat + '</td><td>' + response.data.jumlah_jam + '</td><td>' + response.data.penyelenggara + '</td><td>' + response.data.tempat + '</td><td>' + response.data.angkatan + '</td><td>' + response.data.tahun + '</td><td>' + response.data.no_sttp + '</td><td>' + response.data.tanggal_sttp + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_diklat_teknis" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                        // $('.error_eselon').html('');
                        $('#nama_teknis').val('');
                        $('#jumlah_jam_teknis').val('');
                        $('#penyelenggara_teknis').val('');
                        $('#tempat_teknis').val('');
                        $('#angkatan_teknis').val('');
                        $('#no_sttp_teknis').val('');
                        $('#tahun_teknis').val('');
                        $('#tanggal_sttp_teknis').val('');
                        $('#tambah_diklat_teknis').modal('hide');
                        swal('Sukses', 'Data Riwayat Riwayat Diklat Teknis berhasil ditambah.', 'success');
                    } else {
                        swal('Gagal', 'Data Riwayat Riwayat Diklat Teknis gagal ditambah.', 'error');
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
    function hapusData(method,id) {
        swal({
          title: 'Apakah Anda Yakin?',
          text: "Anda tidak dapat mengembalikan data yang telah dihapus",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus',
          cancelButtonText: 'Batalkan',
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
                  $("tr[data-id='"+id+"']").remove();
                  
                  swal('Sukses', 'Data berhasil dihapus', 'success');
                } else swal('Gagal', 'Data gagal dihapus', 'error');
             });
          } else {
            swal(
              'Batal',
              'Proses dibatalkan',
              'error'
            )
          }
        });
    }
</script>