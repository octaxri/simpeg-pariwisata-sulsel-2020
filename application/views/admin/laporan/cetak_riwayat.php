<?php
if ($data_pegawai->gambar != '')
    $data_pegawai->gambar = upload_url('fotopegawai').$data_pegawai->gambar;
else
    $data_pegawai->gambar = upload_url('fotopegawai').'no_image.jpg';

$date = $data_pegawai->tanggal_lahir;
// var_dump($date);
$date = str_replace('/', '-', trim($date, '"'));
// var_dump($date);
$akhir = new DateTime(date('m/d/Y'));
$awal = new DateTime($date);
// var_dump($awal);
// die();
$usia = $akhir->diff($awal)->format("%y Tahun");

?>

<!DOCTYPE html>
<html>
<head>
    <title>CETAK RIWAYAT HIDUP PEGAWAI</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
<style>
    th,tr,td {
        white-space: nowrap;
    }
    .white-spaces {
        white-space: nowrap;
    }

    .no-wrap th,tr,td{
        white-space: normal !important;
    }
</style>
</head>
<body onload='window.print();' style="font-family: calibri; margin: 10%; margin-top:5%">
    <center>
        <img src="<?=assets_url('img').'sulsel.png'?>" style="width: 150px;">
        <h3 style="text-transform: uppercase"><b>
            Dinas Kebudayaan dan Kepariwisataan  <br>
                Provinsi Sulawesi Selatan
            </b>
        </h3>
        <hr size="4px">
        <h4 class="panel-title"><?=$data_pegawai->gelar_depan != NULL ? $data_pegawai->gelar_depan.'.' : '' ?> <?=$data_pegawai->nama_lengkap?><?=$data_pegawai->gelar_belakang != NULL ? ', '.$data_pegawai->gelar_belakang : '' ?></h4>
        <p>NIP : <?=$data_pegawai->nip?></p>
        <br>
        <img src="<?=$data_pegawai->gambar?>" class="img-thumbnail loaded-image" style="width:15%">    
    </center>
    <div class="col-md-12">
        <h4>BIODATA</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="30%">Nama Lengkap</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->nama_lengkap?></td>
                        </tr>
                        <tr>
                            <td width="30%">NIP</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->nip?></td>
                        </tr>
                        <tr>
                            <td width="30%">Gelar Depan</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->gelar_depan?></td>
                        </tr>
                        <tr>
                            <td width="30%">Gelar Belakang</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->gelar_belakang?></td>
                        </tr>
                        <tr>
                            <td width="30%">Tanggal Lahir</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->tanggal_lahir?></td>
                        </tr>
                        <tr>
                            <td width="30%">Tempat Lahir</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->tempat_lahir?></td>
                        </tr>
                        <tr>
                            <td width="30%">Usia</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$usia?></td>
                        </tr>
                        <tr>
                            <td width="30%">Jenis Kelamin</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->jenis_kelamin?></td>
                        </tr>
                        <tr>
                            <td width="30%">Status Pernikahan</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->status_pernikahan?></td>
                        </tr>
                        <tr>
                            <td width="30%">Agama</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->agama?></td>
                        </tr>
                        <tr>
                            <td width="30%">E-Mail</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_pegawai->email?></td>
                        </tr>
                        <tr>
                            <td width="30%">Telepon</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_alamat->telepon?></td>
                        </tr>
                        <tr>
                            <td width="30%">HP</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_alamat->hp?></td>
                        </tr>
                        <tr>
                            <td width="30%">Alamat</td>
                            <td width="2%">:</td>
                            <td width="68%"><?=$data_alamat->alamat?></td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>
        <h4>IDENTITAS LAINNYA</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td width="30%">No. KTP</td>
                        <td width="2%">:</td>
                        <td width="70%"><?=$data_keteranganlainnya->no_ktp?></td>
                    </tr>
                    <tr>
                        <td width="30%">Golongan Darah</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=$data_pegawai->golongan_darah?></td>
                    </tr>
                    <tr>
                        <td width="30%">No. NPWP</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=$data_keteranganlainnya->no_npwp?></td>
                    </tr>
                    <tr>
                        <td width="30%">No. SKCK</td>
                        <td width="2%">:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td width="30%">No. Taspen</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=$data_keteranganlainnya->no_taspen?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>PENGANGKATAN SEBAGAI CPNS</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered table-responsive">
                    <tbody>
                    <tr>
                        <td width="30%">No. SK Pengangkatan CPNS</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_cpns) ? $data_cpns->no_sk : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Pejabat yang Menetapkan</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_cpns) ? $data_cpns->pejabat : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Pangkat/Golongan/Ruang</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_cpns) ? $data_cpns->pangkat : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">TMT CPNS</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_cpns) ? $data_cpns->tanggal_sk : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Masa Kerja</td>
                        <td width="2%">:</td>
                        <td width="68%">-</td>
                    </tr>
                    <tr>
                        <td width="30%">TMT Melaksanakan Tugas</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_cpns) ? $data_cpns->tanggal_tmt : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">No. STTPP (Prajabatan)  </td>
                        <td width="2%">:</td>
                        <td width="68%">-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>PENGANGKATAN SEBAGAI PNS</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered table-responsive">
                    <tbody>
                    <tr>
                        <td width="30%">No. SK Pengangkatan CPNS</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_pns) ? $data_pns->no_sk : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Tanggal SK PNS</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_pns) ? $data_pns->tanggal_sk : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Pejabat yang Menetapkan</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_pns) ? $data_pns->pejabat : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Pangkat/Golongan/Ruang</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_pns) ? $data_pns->pangkat : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">TMT PNS</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_pns) ? $data_pns->tanggal_tmt : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Sumpah / Janji PNS</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_pns) ? $data_pns->sumpah : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Pengambil Sumpah</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_pns) ? $data_pns->pengambil_sumpah : "-")?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>PANGKAT TERAKHIR</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered table-responsive">
                    <tbody>
                    <tr>
                        <td width="30%">Pangkat</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=$data_pegawai->jenis_pangkat?></td>
                    </tr>
                    <tr>
                        <td width="30%">TMT Golongan</td>
                        <td width="2%">:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="30%">Tanggal SK</td>
                        <td width="2%">:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td width="30%">No. SK</td>
                        <td width="2%">:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td width="30%">Penandatangan SK</td>
                        <td width="2%">:</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            <div>
        </div>
        <h4>JABATAN SAAT INI</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered table-responsive">
                    <tbody>
                    <tr>
                        <td width="30%">Eselon</td>
                        <td width="2%">:</td>
                        <td width="70%"><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->eselon : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Jenis Jabatan</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->jenis : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Nama Jabatan</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->nama_jabatan : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Instansi Induk</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->instansi_induk : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Bidang/Bagian</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->unor_induk : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Subbidang/Seksi</td>
                        <td width="2%">:</td>
                        <td width="68%"><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->unor : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">TMT Jabatan</td>
                        <td width="2%">:</td>
                        <td><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->tmt_jabatan : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Tanggal SK</td>
                        <td width="2%">:</td>
                        <td><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->tanggal : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Nomor SK</td>
                        <td width="2%">:</td>
                        <td><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->nomor : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Penandatangani SK</td>
                        <td width="2%">:</td>
                        <td><?=(($data_jabatan_terakhir) ? $data_jabatan_terakhir->pejabat : "-")?></td>
                    </tr>
                    </tbody>
                </table>
            <div>
        </div>
        <h4>PENDIDIKAN TERAKHIR</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered table-responsive">
                    <tbody>
                    <tr>
                        <td width="30%">Jenjang Pendidikan</td>
                        <td width="2%">:</td>
                        <td width="70%"><?=(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->tingkat : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Nama Sekolah/Universitas</td>
                        <td width="2%">:</td>
                        <td><?=(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->nama_sekolah : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Program Studi</td>
                        <td width="2%">:</td>
                        <td><?=(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->nama_prodi : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Jurusan</td>
                        <td width="2%">:</td>
                        <td><?=(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->nama_jurusan : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">No. Ijazah</td>
                        <td width="2%">:</td>
                        <td><?=(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->no_ijazah : "-")?></td>
                    </tr>
                    <tr>
                        <td width="30%">Tahun Lulus</td>
                        <td width="2%">:</td>
                        <td><?=(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->tahun_lulus : "-")?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>RIWAYAT JABATAN</h4>
         <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered no-wrap">
                    <thead>
                    <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Subbidang/Seksi </th>
                        <th rowspan="2">Nama Jabatan</th>
                        <th rowspan="2">Eselon</th>
                        <th rowspan="2">TMT Jabatan</th>
                        <th colspan="3" class="text-center">Surat Keputusan</th>
                    </tr>
                    <tr>
                        <th>Pejabat</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($riwayat_jabatan as $riwayat_jabatan) :?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$riwayat_jabatan->unor?></td>
                                <td><?=$riwayat_jabatan->nama_jabatan?></td>
                                <td><?=$riwayat_jabatan->eselon?></td>
                                <td><?=$riwayat_jabatan->tmt_jabatan?></td>
                                <td><?=$riwayat_jabatan->pejabat?></td>
                                <td><?=$riwayat_jabatan->nomor?></td>
                                <td><?=$riwayat_jabatan->tanggal?></td>
                            </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <h4>RIWAYAT KEPANGKATAN</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered">
                    <thead>
                    <tr >
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Pangkat </th>
                        <th rowspan="2">Golongan</th>
                        <th rowspan="2">TMT</th>
                        <th rowspan="2">Jenis</th>
                        <th colspan="3" class="text-center">Surat Keputusan</th>
                    </tr>
                    <tr>
                        <th>Pejabat</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="30%">1</td>
                        <td>Jaksa Utama</td>
                        <td>IIb</td>
                        <td>29 Juli 1995</td>
                        <td>Reguler</td>
                        <td>Ayu</td>
                        <td>219183</td>
                        <td>23-08-44</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
        <h4>RIWAYAT PENDIDIKAN</h4>
         <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered no-wrap">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tingkat </th>
                        <th>Nama Instansi</th>
                        <th>Jurusan</th>
                        <th>No. Ijazah</th>
                        <th>Tahun Lulus</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($riwayat_pendidikan as $riwayat_pendidikan) :?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$riwayat_pendidikan->tingkat?></td>
                                <td><?=$riwayat_pendidikan->nama_sekolah?></td>
                                <td><?=$riwayat_pendidikan->nama_jurusan?></td>
                                <td><?=$riwayat_pendidikan->no_ijazah?></td>
                                <td><?=$riwayat_pendidikan->tahun_lulus?></td>
                            </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>RIWAYAT DIKLAT & PELATIHAN</h4>
         <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered no-wrap">
                    <thead>
                    <tr >
                        <th>No.</th>
                        <th>Nama Diklat</th>
                        <th>Jenis Diklat</th>
                        <th>Jumlah Jam</th>
                        <th>Penyelenggara</th>
                        <th>Tempat</th>
                        <th>Angkatan</th>
                        <th>Tahun</th>
                        <th>No. STTP</th>
                        <th>Tgl. STTP</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($riwayat_diklat as $riwayat_diklat) :?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$riwayat_diklat->nama_diklat?></td>
                                <td><?=$riwayat_diklat->jenis_diklat?></td>
                                <td><?=$riwayat_diklat->jumlah_jam?></td>
                                <td><?=$riwayat_diklat->penyelenggara?></td>
                                <td><?=$riwayat_diklat->tempat?></td>
                                <td><?=$riwayat_diklat->angkatan?></td>
                                <td><?=$riwayat_diklat->tahun?></td>
                                <td><?=$riwayat_diklat->no_sttp?></td>
                                <td><?=$riwayat_diklat->tanggal_sttp?></td>
                            </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>RIWAYAT MUTASI</h4>
         <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered no-wrap">
                    <thead>
                    <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Jabatan </th>
                        <th rowspan="2">Pangkat </th>
                        <th rowspan="2">TMT</th>
                        <th colspan="3" class="text-center">Surat Keputusan</th>
                    </tr>
                    <tr>
                        <th>Pejabat</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($riwayat_mutasi as $riwayat_mutasi) :?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$riwayat_mutasi->jabatan?></td>
                                <td><?=$riwayat_mutasi->pangkat?></td>
                                <td><?=$riwayat_mutasi->tmt?></td>
                                <td><?=$riwayat_mutasi->pejabat?></td>
                                <td><?=$riwayat_mutasi->nomor?></td>
                                <td><?=$riwayat_mutasi->tanggal?></td>
                            </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>DATA SUAMI/ISTRI</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered no-wrap">
                    <thead>
                        <tr>
                        <th>No.</th>
                        <th>Status </th>
                        <th>Nama</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Tanggal Nikah</th>
                        <th>Pekerjaan</th>
                        <th>Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($data_pasangan as $data_pasangan) :?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$data_pasangan->jenis?></td>
                                <td><?=$data_pasangan->nama?></td>
                                <td><?=$data_pasangan->ttl?></td>
                                <td><?=$data_pasangan->tanggal_nikah?></td>
                                <td><?=$data_pasangan->pekerjaan?></td>
                                <td><?=(($data_pasangan->meninggal == 0) ? 'Belum' : 'Sudah')?></td>
                            </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <h4>DATA ANAK</h4>
        <div class="row">
            <div class="col-md-12"> 
                <table class="table table-bordered no-wrap">
                    <thead>
                        <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Pekerjaan</th>
                        <th>Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($data_anak as $data_anak) :?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$data_anak->nama?></td>
                                <td><?=$data_anak->ttl?></td>
                                <td><?=$data_anak->pekerjaan?></td>
                                <td><?=(($data_anak->meninggal == 0) ? 'Belum' : 'Sudah')?></td>
                            </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <strong>dengan ini saya menyatakan bahwa data yang telah diisi atau tercatat dalam formulir ini adalah benar, jelas, dan lengkap menurut keadaan yang sebenarnya.</strong>
        </div>
    </div>
<br>
<br>
<table style="width: 100%;">
	<tr>
		<td width="50%"></td>
		<td align="right">Ditetapkan di</td>
		<td align="center">:</td>
		<td>Wangi - Wangi</td>
	</tr>
	<tr>
		<td width="50%"></td>
		<td align="right">Pada tanggal</td>
		<td align="center">:</td>
		<td><?php
		 echo date("d F Y");
		?></td>
	</tr>
</table>
<br>


<table style="width: 100%;" class="text-center">
	<tr>
		<td width="50%">
		</td>
		<td width="50%">
			<p><b>BUPATI WAKATOBI,<b></p>
			<br>
			<br>
			<br>
			<br>
			<p style="text-decoration: underline; font-weight: bold;">ARHAWI</p>
		</td>
	</tr>
</table>

</body>
</html>
