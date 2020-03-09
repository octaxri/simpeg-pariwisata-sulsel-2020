<hr>
<div class="row">
    <div  class="col-md-12">
        <div class="panel">
              <div class="panel-heading">
                <center>
                  <h4 class="panel-title">`+item.nama_lengkap+`</h4>
                  <p>NIP : `+item.nip+`</p>
                </center>
                <div class="right">
                  <a type="" href="<?=admin_url('laporan/Cetak/')?>`+item.nip+`" class="btn btn-default"><i class="fa fa-print"></i>Cetak</a>
                </div>
              </div>
              <div class="panel-body">
                <div class="col-md-12">
                <h4>BIODATA</h4>
                <div class="row">
                  <div class="col-md-8"> 
                    <table class="table">
                    <tbody>
                      <tr>
                        <td width="30%">Nama Lengkap</td>
                        <td width="10%">:</td>
                        <td width="60%">`+item.nama_lengkap+`</td>
                      </tr>
                      <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>`+item.nip+`</td>
                      </tr>
                      <tr>
                        <td>Gelar Depan</td>
                        <td>:</td>
                        <td>`+item.gelar_depan+`</td>
                      </tr>
                      <tr>
                        <td>Gelar Belakang</td>
                        <td>:</td>
                        <td>`+item.gelar_belakang+`</td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>`+item.tanggal_lahir+`</td>
                      </tr>
                      <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>`+item.tempat_lahir+`</td>
                      </tr>
                      <tr>
                        <td>Usia</td>
                        <td>:</td>
                        <td>`+date_result+`</td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>`+item.jenis_kelamin+`</td>
                      </tr>
                      <tr>
                        <td>Status Pernikahan</td>
                        <td>:</td>
                        <td>`+item.status_pernikahan+`</td>
                      </tr>
                      <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>`+item.agama+`</td>
                      </tr>
                      <tr>
                        <td>E-Mail</td>
                        <td>:</td>
                        <td>`+item.email+`</td>
                      </tr>
                      <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td>`+item_alamat.telepon+`</td>
                      </tr>
                      <tr>
                        <td>HP</td>
                        <td>:</td>
                        <td>`+item_alamat.hp+`</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>`+item_alamat.alamat+`</td>
                      </tr>
                    </tbody>
                  </table> 
                  </div>
                  <div class="col-md-2 text-center"> 
                    <img src="`+item.gambar+`" style="width:100%"> 
                  </div>
                </div>
                <h4>STATUS HUKUM</h4>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td width="20%">Status Kepegawaian</td>
                        <td width="10%">:</td>
                        <td width="60%">`+item.status_kepegawaian+`</td>
                      </tr>
                      <tr>
                        <td>Masa Kerja Total</td>
                        <td>:</td>
                        <td>`+item.masa_kerja_total+` Hr</td>
                      </tr>
                      <tr>
                        <td>TMT CPNS</td>
                        <td>:</td>
                        <td>`+item.tmt_cpns+`</td>
                      </tr>
                      <tr>
                        <td>Tanggal SK CPNS</td>
                        <td>:</td>
                        <td>`+item.tanggal_sk_cpns+`</td>
                      </tr>
                      <tr>
                        <td>No. SK CPNS</td>
                        <td>:</td>
                        <td>`+item.no_sk_cpns+`</td>
                      </tr>
                      <tr>
                        <td>TMT PNS</td>
                        <td>:</td>
                        <td>`+item.tmt_pns+`</td>
                      </tr>
                      <tr>
                        <td>Tanggal SK PNS</td>
                        <td>:</td>
                        <td>`+item.tanggal_sk_pns+`</td>
                      </tr
                      <tr>
                        <td>No. SK PNS</td>
                        <td>:</td>
                        <td>`+item.no_sk_pns+`<td>
                      </tr>
                    </tbody>
                  </table>
                  <h4>PANGKAT TERAKHIR</h4>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td width="20%">Masa Kerja Golongan</td>
                        <td width="10%">:</td>
                        <td width="70%">`+item.masa_kerja_golongan+` Hr</td>
                      </tr>
                      <tr>
                        <td>Pangkat</td>
                        <td>:</td>
                        <td>`+item.jenis_pangkat+`</td>
                      </tr>
                      <tr>
                        <td>TMT Golongan</td>
                        <td>:</td>
                        <td></td>
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
                  <h4>JABATAN</h4>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td width="20%">Eselon</td>
                        <td width="10%">:</td>
                        <td width="70%">`+item.eselon+`</td>
                      </tr>
                      <tr>
                        <td>Jenis Jabatan</td>
                        <td>:</td>
                        <td>`+item.jenis_jabatan+`</td>
                      </tr>
                      <tr>
                        <td>Nama Jabatan</td>
                        <td>:</td>
                        <td>`+item.nama_jabatan+`</td>
                      </tr>
                      <tr>
                        <td>Subbidang/Seksi</td>
                        <td>:</td>
                        <td>`+item.unit_kerja+`</td>
                      </tr>
                      <tr>
                        <td>Masa Kerja Jabatan</td>
                        <td>:</td>
                        <td></td>
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
                  <h4>PENDIDIKAN TERAKHIR</h4>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td width="20%">Jenjang Pendidikan</td>
                        <td width="10%">:</td>
                        <td width="70%">`+item.jenjang_pendidikan+`</td>
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
                  <h4>IDENTITAS LAINNYA</h4>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td width="20%">NIK</td>
                        <td width="10%">:</td>
                        <td width="70%">24253534646</td>
                      </tr>
                      <tr>
                        <td>Golongan Darah</td>
                        <td>:</td>
                        <td>`+item.golongan_darah+`</td>
                      </tr>
                      <tr>
                        <td>No. NPWP</td>
                        <td>:</td>
                        <td>`+item_keteranganlainnya.no_npwp+`</td>
                      </tr>
                      <tr>
                        <td>No. SKCK</td>
                        <td>:</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>No. Taspen</td>
                        <td>:</td>
                        <td>`+item_keteranganlainnya.no_taspen+`</td>
                      </tr>
                    </tbody>
                  </table>
                  <h4>RIWAYAT JABATAN</h4>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Jabatan </th>
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
                  <table class="table table-bordered">
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
                      </tr>
                    </thead>
                    <tbody>
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
                  <table class="table table-bordered">
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
                  <table class="table table-bordered">
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
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Status </th>
                      <th>Nama</th>
                      <th>Tempat Tanggal Lahir</th>
                      <th>Pekerjaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Kandung</td>
                      <td>Ani</td>
                      <td>Kaluku, 29 Juli 1995</td>
                      <td>Mahasiswa</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
    </div>

</div>