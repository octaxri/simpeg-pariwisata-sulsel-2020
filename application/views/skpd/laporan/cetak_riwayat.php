<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        #coba tr, #coba td {
            border: 1px solid black;
            padding: 7px;
        }
        table {border-collapse: collapse;}
    </style>
</head>
<body onload='window.print();' style="font-family: calibri; margin: 10%; margin-top:5%">
    <center>
        <h3>RIWAYAT HIDUP PEGAWAI</h3>
        <h4 class="panel-title"><?=$data_pegawai->gelar_depan != NULL ? $data_pegawai->gelar_depan.'.' : '' ?> <?=$data_pegawai->nama_lengkap?><?=$data_pegawai->gelar_belakang != NULL ? ', '.$data_pegawai->gelar_belakang : '' ?></h4>
        <p>NIP : <?=$data_pegawai->nip?></p>
        <br>
        <img src="<?=upload_url('fotopegawai').(empty($data_pegawai->gambar) ? 'no_image.jpg' : $data_pegawai->gambar)?>" class="img-thumbnail loaded-image" style="width:15%">
    </center>
    <h4>DATA DIRI</h4>
    <table >
        <tbody>
                      <tr>
                        <td width="30%">Nama Lengkap</td>
                        <td width="10%">:</td>
                        <td width="60%"><?=$data_pegawai->nama_lengkap?></td>
                      </tr>
                      <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?=$data_pegawai->nip?></td>
                      </tr>
                      <tr>
                        <td>Gelar Depan</td>
                        <td>:</td>
                        <td><?=$data_pegawai->gelar_depan != NULL ? $data_pegawai->gelar_depan : '-'?></td>
                      </tr>
                      <tr>
                        <td>Gelar Belakang</td>
                        <td>:</td>
                        <td><?=$data_pegawai->gelar_belakang != NULL ? $data_pegawai->gelar_belakang : '-'?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?=$data_pegawai->tanggal_lahir != NULL ? $data_pegawai->tanggal_lahir : '-'?></td>
                      </tr>
                      <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?=$data_pegawai->tempat_lahir != NULL ? $data_pegawai->tempat_lahir : '-'?></td>
                      </tr>
                      <tr>
                        <td>Usia</td>
                        <td>:</td>
                        <td><?php
                                    $akhir = new DateTime(date('m/d/Y'));
                                    $awal = new DateTime($data_pegawai->tanggal_lahir);
                                echo $akhir->diff($awal)->format("%y Thn %m Bln %d Hr")?></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=$data_pegawai->jenis_kelamin != NULL ? $data_pegawai->jenis_kelamin : '-'?></td>
                      </tr>
                      <tr>
                        <td>Status Pernikahan</td>
                        <td>:</td>
                        <td><?=$data_pegawai->status_pernikahan != NULL ? $data_pegawai->status_pernikahan : '-'?></td>
                      </tr>
                      <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?=$data_pegawai->agama != NULL ? $data_pegawai->agama : '-'?></td>
                      </tr>
                      <tr>
                        <td>E-Mail</td>
                        <td>:</td>
                        <td><?=$data_pegawai->email != NULL ? $data_pegawai->email : '-'?></td>
                      </tr>
                      <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td><?=$data_alamat->telepon != NULL ? $data_alamat->telepon : '-'?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=$data_alamat->alamat != NULL ? $data_alamat->alamat : '-'?></td>
                      </tr>
                    </tbody>
    </table>
    <hr>
    <h4>STATUS HUKUM</h4>
    <table class="table">
       <tbody>
                      <tr>
                        <td width="20%">Status Kepegawaian</td>
                        <td width="10%">:</td>
                        <td width="70%"><?=$data_pegawai->status_kepegawaian != NULL ? $data_pegawai->status_kepegawaian : '-'?></td>
                      </tr>
                      <tr>
                        <td>Masa Kerja Total</td>
                        <td>:</td>
                        <td><?=$data_pegawai->masa_kerja_total != NULL ? $data_pegawai->masa_kerja_total : '-'?> Hr</td>
                      </tr>
                      <tr>
                        <td>TMT CPNS</td>
                        <td>:</td>
                        <td><?=$data_pegawai->tmt_cpns != NULL ? $data_pegawai->tmt_cpns : '-'?></td>
                      </tr>
                      <tr>
                        <td>Tanggal SK CPNS</td>
                        <td>:</td>
                        <td><?=$data_pegawai->tanggal_sk_cpns != NULL ? $data_pegawai->tanggal_sk_cpns : '-'?></td>
                      </tr>
                      <tr>
                        <td>No. SK CPNS</td>
                        <td>:</td>
                        <td><?=$data_pegawai->no_sk_cpns != NULL ? $data_pegawai->no_sk_cpns : '-'?></td>
                      </tr>
                      <tr>
                        <td>TMT PNS</td>
                        <td>:</td>
                        <td><?=$data_pegawai->tmt_pns != NULL ? $data_pegawai->tmt_pns : '-'?></td>
                      </tr>
                      <tr>
                        <td>Tanggal SK PNS</td>
                        <td>:</td>
                        <td><?=$data_pegawai->tanggal_sk_pns != NULL ? $data_pegawai->tanggal_sk_pns : '-'?></td>
                      </tr
                      <tr>
                        <td>No. SK PNS</td>
                        <td>:</td>
                        <td><?=$data_pegawai->no_sk_pns != NULL ? $data_pegawai->no_sk_pns : '-'?></td>
                      </tr>
                    </tbody>
    </table>
    <hr>
    <h4>PANGKAT TERAKHIR</h4>
    <table class="table">
        <tbody>
            <tr>
                <td width="300px">Masa Kerja Golongan</td>
                <td width="100px">:</td>
                <td width="600px">3 tahun, 1 bln</td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>TMT Golongan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tanggal SK</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>No SK</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Penandatangan SK</td>
                <td>:</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h4>JABATAN</h4>
    <table class="table">
        <tbody>
            <tr>
                <td width="300px">Eselon</td>
                <td width="100px">:</td>
                <td width="600px">-</td>
            </tr>
            <tr>
                <td>Jenis Jabatan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Nama Jabatan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Subbidang/Seksi</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Masa Kerja Jabatan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>TMT Jabatan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tanggal SK</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Nomor SK</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Penandatangani SK</td>
                <td>:</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h4>PENDIDIKAN TERAKHIR</h4>
    <table class="table">
        <tbody>
            <tr>
                <td width="300px">Jenjang Pendidikan</td>
                <td width="100px">:</td>
                <td width="600px">S1</td>
            </tr>
            <tr>
                <td>Nama Sekolah/Universitas</td>
                <td>:</td>
                <td>Unhas</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>No. Ijazah</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tanggal Ijazah</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Penandatanganan Ijazah</td>
                <td>:</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h4>IDENTITAS LAINNYA</h4>
    <table class="table">
        <tbody>
            <tr>
                <td width="400px">NIK</td>
                <td width="100px">:</td>
                <td width="600px">24253534646</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>:</td>
                <td>B</td>
            </tr>
            <tr>
                <td>No. NPWP</td>
                <td>:</td>
                <td>81983918398</td>
            </tr>
            <tr>
                <td>No. SKCK</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>No. Taspen</td>
                <td>:</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <br>
    <br>
    <h4>RIWAYAT JABATAN</h4>
    <table id="coba" width="100%">
        <thead style="font-weight: bold; text-align: center">
            <tr style="height: 50px;background-color: #DADFE1 !important;
    -webkit-print-color-adjust: exact">
                <td rowspan="2">NO.</td>
                <td rowspan="2">JABATAN</td>
                <td rowspan="2">TMT</td>
                <td  colspan="3">SURAT KEPUTUSAN</td>
            </tr>
            <tr>
                <td>Pejabat</td>
                <td>Nomor</td>
                <td>Tanggal</td>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <tr>
                <td>1</td>
                <td>Kepala Seksi</td>
                <td>29 Juli 1995</td>
                <td>Ayu</td>
                <td>219183</td>
                <td>23-08-44</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Kepala Seksi</td>
                <td>29 Juli 1995</td>
                <td>Ayu</td>
                <td>219183</td>
                <td>23-08-44</td>
            </tr>
        </tbody>
    </table>
    <h4>RIWAYAT KEPANGKATAN</h4>
    <table id="coba" width="100%">
        <thead style="font-weight: bold; text-align: center">
            <tr style="height: 50px;background-color: #DADFE1 !important;
    -webkit-print-color-adjust: exact">
                <td rowspan="2">NO.</td>
                <td rowspan="2">PANGKAT</td>
                <td rowspan="2">GOLONGAN</td>
                <td rowspan="2">TMT</td>
                <td rowspan="2">JENIS</td>
                <td colspan="3">SURAT KEPUTUSAN</td>
            </tr>
            <tr>
                <td>Pejabat</td>
                <td>Nomor</td>
                <td>Tanggal</td>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <tr>
                <td>1</td>
                <td>Jaksa Utama</td>
                <td>IIb</td>
                <td>29 Juli 1995</td>
                <td>Reguler</td>
                <td>Ayu</td>
                <td>219183</td>
                <td>23-08-44</td>
            </tr>
            <tr>
                <td>1</td>
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
    <h4>RIWAYAT PENDIDIKAN</h4>
    <table id="coba" width="100%">
        <thead style="font-weight: bold; text-align: center">
            <tr style="height: 50px;background-color: #DADFE1 !important;
    -webkit-print-color-adjust: exact">
                <td>NO.</td>
                <td>TINGKAT</td>
                <td>NAMA INSTANSI</td>
                <td>JURUSAN</td>
                <td>NO. IJAZAH</td>
                <td>TGL. IJAZAH</td>
                <td>TEMPAT</td>
                <td> NAMA PIMPINAN</td>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <tr>
                <td>1</td>
                <td>S1</td>
                <td>UnHas</td>
                <td>Teknik</td>
                <td>yahuuu</td>
                <td>yahuuu</td>
                <td>yahuuu</td>
                <td>yahuuu</td>
            </tr>
        </tbody>
    </table>
    <h4>RIWAYAT DIKLAT & PELATIHAN</h4>
    <table id="coba" width="100%">
        <thead style="font-weight: bold; text-align: center">
            <tr style="height: 50px;background-color: #DADFE1 !important;
    -webkit-print-color-adjust: exact">
                <td>NO.</td>
                <td>NAMA DIKLAT</td>
                <td>JENIS DIKLAT</td>
                <td>JUMLAH JAM</td>
                <td>PENYELENGGARA</td>
                <td>TEMPAT</td>
                <td>ANGKATAN</td>
                <td>TAHUN</td>
                <td>NO. STTP</td>
                <td>TGL. STTP</td>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <tr>
                <td>1</td>
                <td>-</td>
                <td>Struktural</td>
                <td>100</td>
                <td>Kejaksaan</td>
                <td>Jakarta</td>
                <td>2002</td>
                <td>2002</td>
                <td>aaaaa</td>
                <td>13 03 39</td>
            </tr>
        </tbody>
    </table>
    <h4>RIWAYAT MUTASI</h4>
    <table id="coba" width="100%">
        <thead style="font-weight: bold; text-align: center">
            <tr style="height: 50px;background-color: #DADFE1 !important;
    -webkit-print-color-adjust: exact">
                <td rowspan="2">NO.</td>
                <td rowspan="2">JABATAN</td>
                <td rowspan="2">PANGKAT</td>
                <td rowspan="2">TMT</td>
                <td colspan="3">SURAT KEPUTUSAN</td>
            </tr>
            <tr>
                <th>Pejabat</th>
                <th>Nomor</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <tr>
                <td>1</td>
                <td>Kepala Seksi</td>
                <td>IIa</td>
                <td>Ayu</td>
                <td>219183</td>
                <td>219183</td>
                <td>23-08-44</td>
            </tr>
        </tbody>
    </table>
    <h4>DATA KELUARGA</h4>
    <table id="coba" width="100%">
        <thead style="font-weight: bold; text-align: center">
            <tr style="height: 50px;background-color: #DADFE1 !important;
    -webkit-print-color-adjust: exact">
                <td>NO.</td>
                <td>STATUS</td>
                <td>NAMA</td>
                <td>TEMPAT TANGGAL LAHIR</td>
                <td>PEKERJAAN</td>
            </tr>
        </thead>
        <tbody style="text-align: center">
            <tr>
                <td>1</td>
                <td>Kandung</td>
                <td>Ani</td>
                <td>Kaluku, 29 Juli 1995</td>
                <td>Mahasiswa</td>
            </tr>
        </tbody>
    </table>
</body>
</html>