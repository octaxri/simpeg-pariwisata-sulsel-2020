<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>PERHATIAN!</strong> Inputan dengan tanda <strong style="color: red;">(*)</strong>  , Wajib untuk diisi (<a role="button" data-dismiss="alert" aria-label="Close" >Tutup</a>)
    </div>
    <div class="panel panel-tab">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-plus"></i> Tambah Data Pegawai</h3>
        <ul class="nav nav-tabs pull-right">
         <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user-circle-o"></i> Data Pribadi</a></li>
         <li><a href="#tab2" data-toggle="tab"><i class="fa fa-briefcase"></i> Posisi & Jabatan</a></li>
         <li><a href="#tab3" data-toggle="tab"><i class="fa fa-map-marker"></i> Data Alamat</a></li>
         <li><a href="#tab4" data-toggle="tab"><i class="fa fa-drivers-license-o"></i> Data Tambahan</a></li>
       </ul>
     </div>
     <div class="panel-body">
      <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
      <?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
      <?=form_open_multipart(admin_url('DataPegawai/tambahAjax'), array('class' => 'form-horizontal', 'id' => 'tambahpegawai_form'))?>
      <div class="row">
        <div class="panel-body">
          <div class="tab-content no-padding">
           <div class="tab-pane fade in active" id="tab1">
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-4 control-label">NIP &nbsp; <strong style="color: red;">(*)</strong></label>
                <div id="nipStatus" class="col-md-8">
                    <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP (18 Digit Angka)" data-parsley-type="digits" data-parsley-length="[18, 18]" required>
                    <div id="nipStatusIcon">
                    </div>
                  <?=form_error('nip')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">NIP Lama</label>
                <div class="col-md-8">
                  <input type="text" name="niplama" class="form-control" placeholder="NIP Lama (9 Digit Angka)" data-parsley-type="digits" data-parsley-length="[9, 9]">
                  <p id="nip_info"></p>
                  <?=form_error('niplama')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Lengkap &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <input type="text" name="name_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                  <?=form_error('name_lengkap')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">E-mail </label>
                <div class="col-md-8">
                  <input type="email" name="email" class="form-control" placeholder="E-mail">
                  <?=form_error('email')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Password &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <div class="password-strength-container">
                    <input required  minlength="6" autocapitalize="off" autocomplete="off" spellcheck="true" type="password" id="pass" name="password" class="hideShowPassword-field hideShowPassword-shown form-control" placeholder="Password">
                  </div>
                  <?=form_error('password')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Ulang Password &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <input minlength="6" autocapitalize="off" autocomplete="off" spellcheck="true" type="password" id="repass" class="form-control" placeholder="Ulang Password">
                  <p id="pass_info"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Gelar Depan</label>
                <div class="col-md-8">
                  <input type="text" name="gelar_depan" class="form-control" >
                  <?=form_error('gelar_depan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Gelar Belakang</label>
                <div class="col-md-8">
                  <input type="text" name="gelar_belakang" class="form-control" >
                  <?=form_error('gelar_belakang')?>
                </div>
              </div>
              <div class="alert alert-info"><i class="fa fa-info-user"></i> DATA PENDIDIKAN TERAKHIR</div>
              <div class="form-group">
                <label class="col-md-4 control-label">Jenjang Pendidikan &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <select name="jenjang_pendidikan" class="form-control select2" required>
                    <option value="">-Jenjang Pendidikan-</option>
                    <?php foreach ($data_pendidikan as $data_pendidikan): ?>
                      <option value="<?=$data_pendidikan->nama_pendidikan?>"><?=$data_pendidikan->nama_pendidikan?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('jenjang_pendidikan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Program Studi</label>
                <div class="col-md-8">
                  <input type="text" name="nama_prodi" class="form-control" >
                  <?=form_error('nama_prodi')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Jurusan</label>
                <div class="col-md-8">
                  <input type="text" name="nama_jurusan" class="form-control" >
                  <?=form_error('nama_jurusan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Sekolah &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <input type="text" name="nama_sekolah" class="form-control" required>
                  <?=form_error('nama_sekolah')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">No. Ijazah &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <input type="text" name="no_ijazah" class="form-control" required>
                  <?=form_error('nama_prodi')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tahun Lulus &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                    <input type="text" name="tahun_lulus" class="form-control">
                    <?=form_error('tahun_lulus')?>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
            </div>  
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-4 control-label">Tempat Lahir &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <input type="text" name="tempat_lahir" class="form-control" required>
                  <?=form_error('tempat_lahir')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tanggal Lahir &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                    <input type="text" name="tanggal_lahir" class="form-control" >
                    <?=form_error('tanggal_lahir')?>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" >Jenis Kelamin &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <select name="jenis_kelamin" class="form-control select2" required>
                    <option value="">-Jenis Kelamin-</option>
                    <option value="wanita">Perempuan</option>
                    <option value="pria">Laki-laki</option>
                  </select>
                  <?=form_error('jenis_kelamin')?>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-md-4 control-label">Agama &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <select name="agama" class="form-control select2" required>
                    <option value="">-Agama-</option>
                    <?php foreach ($data_agama as $data_agama): ?>
                      <option value="<?=$data_agama->nama_agama?>"><?=$data_agama->nama_agama?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('agama')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" >Gol. Darah &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="A"  class="form-control" type="radio" checked="" required>
                    <span><i></i>A</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="B" class="form-control" type="radio" checked="" required>
                    <span><i></i>B</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="AB" class="form-control" type="radio" checked="" required>
                    <span><i></i>AB</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="O" class="form-control"  type="radio" checked="" required>
                    <span><i></i>O</span>
                  </label>
                  <?=form_error('golongan_darah')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Resus Darah</label>
                <div class="col-md-8">
                  <label class="fancy-radio">
                    <input name="rhesus" value="Positif"  class="form-control" type="radio" checked="" required>
                    <span><i></i>Positif</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="rhesus" value="Negatif"  class="form-control" type="radio" checked="" required>
                    <span><i></i>Negatif</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="rhesus" value="Tidak Tahu"  class="form-control" type="radio" checked="" required>
                    <span><i></i>Tidak Tahu</span>
                  </label>
                  <?=form_error('rhesus')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Status Pernikahan &nbsp; <strong style="color: red;">(*)</strong></label>
                <div class="col-md-8">
                  <select name="status_pernikahan" class="form-control select2" required>
                    <option value="">-Status-</option>
                    <option value="menikah">Menikah</option>
                    <option value="belum_menikah">Belum Menikah</option>
                    <option value="janda">Janda</option>
                    <option value="duda">Duda</option>
                  </select>
                  <?=form_error('status_pernikahan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-8 col-md-offset-2">Upload Foto Pegawai  (Ukuran 3x4) &nbsp; <strong style="color: red;">(*)</strong></label><br>
                <div class="col-md-10 col-sm-offset-2" align="">

                  <input required type="file" name="gambar" class="form-control dropify" data-default-file="<?=upload_url('fotopegawai')?>no_image.jpg" data-height="400" width="300px" data-max-file-size="2M"  data-show-errors="true"  data-allowed-formats="portrait square" data-allowed-file-extensions="jpg png jpeg" data-max-file-size-preview="2M"/>
                </div>

              </div>

            </div>
            <div class="col-md-12 text-center">
              <hr>
              <center>
                <a class="btn btn-primary btn-sm btnNext" href="#tab2" data-toggle="tab" role="button"><i class="fa fa-arrow-right"></i>BERIKUTNYA</a>
              </center>
            </div>
          </div>
          <div class="tab-pane fade" id="tab2">
            <div class="col-md-6">
              <div class="alert alert-info"><i class="fa fa-info-user"></i> STRUKTUR JABATAN</div>
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">Instansi Induk &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <textarea rows="3" style="resize: none; text-transform: uppercase;" id="instansi_induk" name="instansi_induk" class="form-control" required readonly>Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Bidang/Bagian &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="satuan_kerja" id="satker" class="form-control select2" required readonly>
                      <option value=""></option>
                      <?php foreach ($data_satker as $data_satker): ?>
                        <option value="<?=$data_satker->nama_satker?>"><?=$data_satker->nama_satker?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('satuan_kerja')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Subbidang/Seksi</label>
                  <div class="col-md-8">
                    <select name="unit_kerja" id="unit_kerja" disabled class="form-control select2" readonly>
                      <option value="">-Subbidang/Seksi-</option>
                    </select>
                  </div>
                </div>
                <?=form_error('unit_kerja')?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="alert alert-info"><i class="fa fa-info-user"></i> JABATAN</div>
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">Jenis Jabatan &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="jenis_jabatan" id="jenis_jabatan" class="form-control select2" required>
                      <option value="">-Jenis Jabatan-</option>
                      <?php foreach ($data_jenisjabatan as $data_jenisjabatan): ?>
                        <option value="<?=$data_jenisjabatan->nama_jenisjabatan?>"><?=$data_jenisjabatan->nama_jenisjabatan?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('jenis_jabatan')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Jabatan &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="nama_jabatan" id="nama_jabatan" class="form-control select2" required>
                      <option value="">-Nama Jabatan-</option>
                      <?php foreach ($data_jabatan as $data_jabatan): ?>
                        <option value="<?=$data_jabatan->nama_jabatan?>"><?=$data_jabatan->nama_jabatan?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('nama_jabatan')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Eselon</label>
                  <div class="col-md-8">
                    <select name="eselon" id="eselon" class="form-control select2">
                      <option value="">-Eselon-</option>
                      <?php foreach ($data_eselon as $data_eselon): ?>
                        <option value="<?=$data_eselon->nama_eselon?>"><?=$data_eselon->nama_eselon?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('eselon')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Pangkat/Golongan/<br>Ruang &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="jenis_pangkat" id="jenis_pangkat" class="form-control select2" required>
                      <option value="">-Pangkat/Golongan/Ruang-</option>
                      <?php foreach ($data_golongan as $data_golongan): ?>
                        <option data-id="<?=$data_golongan->id_golongan?>" value="<?=$data_golongan->nama_pangkat. ' - ' .$data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang?>"><?=$data_golongan->nama_pangkat. ' - ' .$data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang?></option>
                      <?php endforeach ?>
                      <input type="hidden" name="id_pangkat" id="id_pangkat">
                    </select>
                    <?=form_error('jenis_pangkat')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">TMT Pangkat/Golongan/<br>Ruang &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                      <input name="tmt_jenis_pangkat" type="text" class="form-control" required>
                      <?=form_error('tmt_jenis_pangkat')?>
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Kedudukan Pegawai &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="kedudukan_kepegawaian"  class="form-control select2" required>
                      <option value="">-Kedudukan Kepegawaian-</option>
                      <?php foreach ($data_kedudukanpegawai as $data_kedudukanpegawai): ?>
                        <option value="<?=$data_kedudukanpegawai->nama_kedudukanpegawai?>"><?=$data_kedudukanpegawai->nama_kedudukanpegawai?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('status_kepegawaian')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Status Kepegawaian &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="status_kepegawaian"  class="form-control select2" required>
                      <option value="">-Status Kepegawaian-</option>
                      <?php foreach ($data_statuspegawai as $data_statuspegawai): ?>
                        <option value="<?=$data_statuspegawai->nama_statuspegawai?>"><?=$data_statuspegawai->nama_statuspegawai?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('status_kepegawaian')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Jenis Pegawai &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="jenis_kepegawaian"  class="form-control select2" required>
                      <option value="" >-Jenis Kepegawaian-</option>
                      <?php foreach ($data_jenispegawai as $data_jenispegawai): ?>
                        <option value="<?=$data_jenispegawai->nama_jenispegawai?>"><?=$data_jenispegawai->nama_jenispegawai?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('status_kepegawaian')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">TMT Jabatan &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                      <input name="tmt_jabatan" type="text" class="form-control" required>
                      <?=form_error('tmt_jabatan')?>
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <hr>
              <center>
                <a class="btn btn-primary btn-sm btnPrev" href="#tab1" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>SEBELUMNYA</a>
                <a class="btn btn-primary btn-sm btnNext" href="#tab3" data-toggle="tab" role="button"><i class="fa fa-arrow-right"></i>BERIKUTNYA</a>
              </center>
            </div>

          </div>
          <div class="tab-pane fade" id="tab3">
            <div class="col-md-6">
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">Alamat &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <input name="alamat" type="text" class="form-control"  required>
                    <?=form_error('alamat')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">RT &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <input name="rt" type="text" class="form-control" required >
                    <?=form_error('rt')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">RW &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <input name="rw" type="text" class="form-control"  required>
                    <?=form_error('rw')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Provinsi &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select name="provinsi" id="provinsi" class="form-control" required >
                      <option value=""></option>
                      <?php foreach ($data_provinsi as $data_provinsi): ?>
                        <option value="<?=$data_provinsi->nama_provinsi?>"><?=$data_provinsi->nama_provinsi?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('provinsi')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Kabupaten/Kota &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select disabled name="kab" id="kab" class="form-control" required >
                      <option value=""></option>
                      <option value="test">test</option>
                    </select>
                    <?=form_error('kab')?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">Kecamatan &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select disabled name="kec" id="kec" class="form-control" required >
                      <option value=""></option>
                    </select>
                    <?=form_error('kec')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Kelurahan &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <select disabled name="kel" id="kel" class="form-control select2" required >
                      <option value=""></option>
                    </select>
                    <?=form_error('kel')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode Pos</label>
                  <div class="col-md-8">
                    <input name="kode_pos" type="text" class="form-control" >
                    <?=form_error('kode_pos')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. Telepon</label>
                  <div class="col-md-8">
                    <input name="telepon" type="text" class="form-control" >
                    <?=form_error('telepon')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. HP</label>
                  <div class="col-md-8">
                    <input name="hp" type="text" class="form-control" >
                    <?=form_error('hp')?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <hr>
              <center>
                <a class="btn btn-primary btn-sm btnPrev" href="#tab2" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>SEBELUMNYA</a>
                <a class="btn btn-primary btn-sm btnNext" href="#tab4" data-toggle="tab" role="button"><i class="fa fa-arrow-right"></i>BERIKUTNYA</a>
              </center>
            </div>
          </div>
          <div class="tab-pane fade" id="tab4">
            <div class="col-md-6">
              <div class="alert alert-info"><i class="fa fa-info-user"></i> KETERANGAN BADAN</div>
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">Tinggi Badan (cm)</label>
                  <div class="col-md-8">
                    <input name="tinggi_badan" type="text" class="form-control" >
                    <?=form_error('tinggi_badan')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Berat Badan (kg)</label>
                  <div class="col-md-8">
                    <input name="berat_badan" type="text" class="form-control">
                    <?=form_error('berat_badan')?>
                  </div>
                </div>
              </div>
              <br>

              <div class="alert alert-info"><i class="fa fa-info-user"></i> BAHASA YANG DIKUASAI &nbsp; <strong style="color: red;">(*)</strong></div>
              <select id="multiselect2" name="bahasa[]" class="multiselect multiselect-custom" multiple="multiple" required>
                <option value="bindo">Bahasa Indonesia</option>
                <option value="english">Bahasa Inggris</option>
                <option value="mandarin">Mandarin</option>
              </select>
            </div>
            <div class="col-md-6">
              <div class="alert alert-info"><i class="fa fa-info-user"></i> KETERANGAN LAINNYA</div>
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">NIK &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <input name="no_ktp" type="text" class="form-control"  required>
                    <?=form_error('no_ktp')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. KARPEG &nbsp; <strong style="color: red;">(*)</strong></label>
                  <div class="col-md-8">
                    <input name="no_karpeg" type="text" class="form-control" required >
                    <?=form_error('no_karpeg')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. ASKES</label>
                  <div class="col-md-8">
                    <input name="no_askes" type="text" class="form-control">
                    <?=form_error('no_askes')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. TASPEN</label>
                  <div class="col-md-8">
                    <input name="no_taspen" type="text" class="form-control" >
                    <?=form_error('no_taspen')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. KARSI/KARSU</label>
                  <div class="col-md-8">
                    <input name="no_karis" type="text" class="form-control">
                    <?=form_error('no_karis')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. NPWP</label>
                  <div class="col-md-8">
                    <input name="no_npwp" type="text" class="form-control" >
                    <?=form_error('no_npwp')?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. KORPRI</label>
                  <div class="col-md-8">
                    <input name="no_korpri" type="text" class="form-control" >
                    <?=form_error('no_korpri')?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <hr>
              <center>
                <a class="btn btn-primary btn-sm btnPrev" href="#tab3" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>SEBELUMNYA</a>
                <button class="btn btn-success btn-sm" id="submit" type="submit" disabled="true"><i class="fa fa-save"></i>SIMPAN</button>
                <a class="btn btn-danger btn-sm" href="<?=admin_url('DataPegawai')?>" role="button"><i class="fa fa-close"></i>BATAL</a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <?=form_close()?>
    </div>
  </div>
  <!-- END PANEL DEFAULT -->
</div>
</div>

</div>

<script>
  $(document).ready(function(){
    $("#repass").keyup(function(){
      var pass = $("#pass").val();
      var repass = $("#repass").val();

      if (pass === repass) {
        $("#pass_info").text('Password Sama');
        $("#pass_info").css("color", "green");
          $("#nip").css("color", "green");
        $("#submit").prop("disabled", false);

      }else{
        $("#pass_info").text('Password Tidak Sama');
        $("#pass_info").css("color", "red");
          $("#nip").css("color", "red");
        $("#submit").prop("disabled", true);
      }
    });

    $('#nip').keyup(function(){
       $.ajax({
        type: 'POST',
        url: '<?=admin_url('DataPegawai/cekNip/')?>',
        data: {
          nip: $('#nip').val()
        }
      }).done(function(response) {
        if (response.success) {
          $("#nipStatus").removeClass('has-error has-feedback');
          $("#nipStatus").addClass('has-success has-feedback');
          $("#nipStatusIcon").empty();
          $("#nipStatusIcon").html('<span class="fa fa-check form-control-feedback" aria-hidden="true"></span>');
          $("#submit").prop("disabled", false);
        } else
        {
          $("#nipStatus").removeClass('has-success has-feedback');
          $("#nipStatus").addClass('has-error has-feedback');
          $("#nipStatusIcon").empty();
          $("#nipStatusIcon").html('<span class="fa fa-close form-control-feedback" aria-hidden="true"></span>');
          $("#submit").prop("disabled", true);
        }
      });
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#uploadgambar").attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
      }

    }

    $('#jenis_pangkat').change(function(){
      $('#id_pangkat').val($(this).find('option:selected').data('id'));
      console.log( $('#id_pangkat').val());
    });


    $('#pass').pwstrength(
    {
      ui:
      {
        container: '#password-strength-container',
        showVerdictsInsideProgressBar: true,
        viewports:
        {
          verdict: ".pwstrength_viewport_verdict"
        }
      }
    });

    $('#pass').hideShowPassword(
    {
      innerToggle: true,
      toggle:
      {
        className: 'hideShowPassword-toggle toggle-eye'
      },
      states:
      {
        shown:
        {
          toggle:
          {
            content: '<i class="fa fa-eye-slash">'
          }
        },
        hidden:
        {
          toggle:
          {
            content: '<i class="fa fa-eye">'
          }
        }
      }
    });


    $(document).ready(function() {
      var select2Options = { width: 'resolve',
      placeholder: "- Pilih -",
      triggerChange: true,
      allowClear: true};
      var getKab = '<?=admin_url('DataPegawai/getKabByProvinsi/')?>'+':parentId:';
      var getKec = '<?=admin_url('DataPegawai/getKecByKabupaten/')?>'+':parentId:';
      var getKel = '<?=admin_url('DataPegawai/getKelByKecamatan/')?>'+':parentId:';
      var getUnker = '<?=admin_url('DataPegawai/getUnkerBySatker/')?>'+':parentId:';
      var getJabatan = '<?=admin_url('DataPegawai/getJabatanByJenisJabatan/')?>'+':parentId:';
      var getEselon = '<?=admin_url('DataPegawai/getEselonByNamaJabatan/')?>'+':parentId:';

      $('.select2').select2(select2Options);
      var cascadLoading = new Select2Cascade($('#provinsi'), $('#kab'), getKab, select2Options);
      cascadLoading.then( function(parent, child, items) {
          // Open the child listbox immediately
          child.select2('open');
          // Dump response data
          console.log(items);
        })
      var cascadLoading = new Select2Cascade($('#kab'), $('#kec'), getKec, select2Options);
      cascadLoading.then( function(parent, child, items) {
          // Open the child listbox immediately
          child.select2('open');
          // Dump response data
          console.log(items);
        })
      var cascadLoading = new Select2Cascade($('#kec'), $('#kel'), getKel, select2Options);
      cascadLoading.then( function(parent, child, items) {
          // Open the child listbox immediately
          child.select2('open');
          // Dump response data
          console.log(items);
        })

      var cascadLoading = new Select2Cascade($('#satker'), $('#unit_kerja'), getUnker, select2Options);
      cascadLoading.then( function(parent, child, items) {
          // Open the child listbox immediately
          child.select2('open');
          // Dump response data
          console.log(items);
        })

      var cascadLoading = new Select2Cascade($('#jenis_jabatan'), $('#nama_jabatan'), getJabatan, select2Options);
      cascadLoading.then( function(parent, child, items) {
          // Open the child listbox immediately
          child.select2('open');
          // Dump response data
          console.log(items);
        })

      var cascadLoading = new Select2Cascade($('#nama_jabatan'), $('#eselon'), getEselon, select2Options);
      cascadLoading.then( function(parent, child, items) {
          // Open the child listbox immediately
          // child.select2('open');
          // Dump response data
          $('#eselon').val(items.data[0].nama).trigger('change');
          console.log(items.data[0].nama);
        })


    });
      //dropify
      $('.dropify').dropify({
        messages: {
          'default': 'Klik atau tarik foto pegawai kesini',
          'replace': 'tarik foto atau klik disini untuk mengganti foto',
          'remove':  'Hapus',
          'error':   'Ooops, ada sebuah kesalahan!.'
        },
        error: {
          'fileSize': 'Ukuran File melewati 2MB ({{ value }} max).',
          'imageFormat': 'Format foto yang diupload tidak didukung ({{ value }} only).'
        },
        tpl: {
          wrap:            '<div class="dropify-wrapper"></div>',
          loader:          '<div class="dropify-loader"></div>',
          message:         '<div class="dropify-message"><span class="file-icon" /> <p>{{ default }}</p></div>',
          preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
          filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
          clearButton:     '<button type="button" class="dropify-clear">{{ remove }}</button>',
          errorLine:       '<p class="dropify-error">{{ error }}</p>',
          errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
        }
      });

      //validation parsley
      $('#tambahpegawai_form').parsley();

    });

$('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$('.btnPrev').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>
