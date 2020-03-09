<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
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
                <label class="col-md-3 control-label">NIP</label>
                <div class="col-md-9">
                  <input type="text" name="nip" class="form-control" placeholder="NIP" data-parsley-type="digits" data-parsley-length="[18, 18]">
                  <?=form_error('nip')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">NIP Lama</label>
                <div class="col-md-9">
                  <input type="text" name="niplama" class="form-control" placeholder="NIP Lama" data-parsley-type="digits" data-parsley-length="[9, 9]">
                  <?=form_error('niplama')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Nama Lengkap</label>
                <div class="col-md-9">
                  <input type="text" name="name_lengkap" class="form-control" placeholder="Nama Lengkap">
                  <?=form_error('name_lengkap')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">E-mail</label>
                <div class="col-md-9">
                  <input type="email" name="email" class="form-control" placeholder="E-mail">
                  <?=form_error('email')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                  <div class="password-strength-container">
                    <input required  minlength="6" autocapitalize="off" autocomplete="off" spellcheck="true" type="password" id="pass" name="password" class="hideShowPassword-field hideShowPassword-shown form-control" placeholder="Password">
                  </div>
                  <?=form_error('password')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Ulang Password</label>
                <div class="col-md-9">
                  <input minlength="6" autocapitalize="off" autocomplete="off" spellcheck="true" type="password" id="repass" class="form-control" placeholder="Ulang Password">
                  <p id="pass_info"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Gelar Depan</label>
                <div class="col-md-9">
                  <input type="text" name="gelar_depan" class="form-control" >
                  <?=form_error('gelar_depan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Gelar Belakang</label>
                <div class="col-md-9">
                  <input type="text" name="gelar_belakang" class="form-control" >
                  <?=form_error('gelar_belakang')?>
                </div>
              </div>
              <div class="alert alert-info"><i class="fa fa-info-user"></i> DATA PENDIDIKAN TERAKHIR</div>
              <div class="form-group">
                <label class="col-md-3 control-label">Jenjang Pendidikan</label>
                <div class="col-md-9">
                  <select name="jenjang_pendidikan" class="form-control select2">
                    <option value="">-Jenjang Pendidikan-</option>
                    <?php foreach ($data_pendidikan as $data_pendidikan): ?>
                      <option value="<?=$data_pendidikan->nama_pendidikan?>"><?=$data_pendidikan->nama_pendidikan?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('jenjang_pendidikan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Nama Program Studi</label>
                <div class="col-md-9">
                  <input type="text" name="nama_prodi" class="form-control" >
                  <?=form_error('nama_prodi')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Nama Jurusan</label>
                <div class="col-md-9">
                  <input type="text" name="nama_jurusan" class="form-control" >
                  <?=form_error('nama_jurusan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Nama Sekolah</label>
                <div class="col-md-9">
                  <input type="text" name="nama_sekolah" class="form-control" >
                  <?=form_error('nama_sekolah')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">No Ijazah</label>
                <div class="col-md-9">
                  <input type="text" name="no_ijazah" class="form-control" >
                  <?=form_error('nama_prodi')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Tahun Lulus</label>
                <div class="col-md-9">
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
                <label class="col-md-3 control-label">Tempat Lahir</label>
                <div class="col-md-9">
                  <input type="text" name="tempat_lahir" class="form-control" required>
                  <?=form_error('tempat_lahir')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Tanggal Lahir</label>
                <div class="col-md-9">
                  <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                    <input type="text" name="tanggal_lahir" class="form-control">
                    <?=form_error('tanggal_lahir')?>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label" >Jenis Kelamin</label>
                <div class="col-md-9">
                  <select name="jenis_kelamin" class="form-control select2" required>
                    <option value="">-Jenis Kelamin-</option>
                    <option value="wanita">Perempuan</option>
                    <option value="pria">Laki-laki</option>
                  </select>
                  <?=form_error('jenis_kelamin')?>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-md-3 control-label" required>Agama</label>
                <div class="col-md-9">
                  <select name="agama" class="form-control select2">
                    <option value="">-Agama-</option>
                    <?php foreach ($data_agama as $data_agama): ?>
                      <option value="<?=$data_agama->nama_agama?>"><?=$data_agama->nama_agama?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('agama')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label" >Gol.Darah</label>
                <div class="col-md-9">
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
                <label class="col-md-3 control-label">Rhesus</label>
                <div class="col-md-9">
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
                  <?=form_error('golonhan_darah')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Status Pernikahan</label>
                <div class="col-md-9">
                  <select name="status_pernikahan" class="form-control " required>
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
                <label class="col-md-3 control-label">Jenis Dokumen</label>
                <div class="col-md-3">
                  <select name="jenis_dokumen"  id="jenis_dok" class="form-control select2" required>
                    <option value="">-Jenjang Pendidikan-</option>
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
                    <option value="PASSPOR">PASSPOR</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <input class="form-control" name="no_dokumen" id="no_dok" placeholder="Nomor Dokumen" readonly required />
                </div>
                <?=form_error('jenjang_pendidikan')?>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Upload Foto Pegawai  (Ukuran 3x4)</label>
                <div class="col-md-9">

                  <input required type="file" name="gambar" class="form-control dropify" data-default-file="<?=upload_url('fotopegawai')?>no_image.jpg" data-height="400" width="300px" data-max-file-size="2M"  data-show-errors="true"  data-allowed-formats="portrait square" data-allowed-file-extensions="jpg png jpeg" data-max-file-size-preview="2M"/>
                </div>

              </div>

            </div>
            <div class="col-md-12 text-center">
              <div class="form-horizontal">
                <div class="col-md-6">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab2">
                        <div class="col-md-6">
                          <div class="alert alert-info"><i class="fa fa-info-user"></i> STRUKTUR JABATAN</div>
                          <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-md-4 control-label">Instansi Induk</label>
                              <div class="col-md-8">
                                <input type="text" name="instansi_induk" class="form-control" value="PEMERINTAHAN KABUPATEN WAKATOBI" readonly>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Unit Organisasi Induk</label>
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
                              <label class="col-md-4 control-label">Unit Organisasi</label>
                              <div class="col-md-8">
                                <select name="" id="" class="form-control select2" readonly required>
                                  <option value=""></option>
                                </select>
                              </div>
                            </div>
                        <!--     <div class="form-group">
                              <label class="col-md-4 control-label">Sub Bidang 1</label>
                              <div class="col-md-8">
                                <select name="" id="" class="form-control select2" readonly required>
                                  <option value=""></option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Sub Bidang 2</label>
                              <div class="col-md-8">
                                <select name="" id="" class="form-control select2" readonly required>
                                  <option value=""></option>
                                </select>
                              </div>
                            </div> -->
<!--     
                            <div class="form-group">
                              <label class="col-md-4 control-label">Unit Kerja</label>
                              <div class="col-md-8">
                                <select  name="unit_kerja" id="unker" class="form-control" disabled required>
                                  <option value="">-Unit Kerja-</option>
                                </select>
                                <?=form_error('unit_kerja')?>
                              </div>
                            </div> -->
                          </div>
                        </div>

                        <div class="col-md-6">
              <div class="alert alert-info"><i class="fa fa-info-user"></i> Jabatan</div>
              <div class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">Jenis Jabatan</label>
                  <div class="col-md-8">
                    <select name="jenis_jabatan" class="form-control select2" required>
                      <option value="">-Jenis Jabatan-</option>
                      <?php foreach ($data_jenisjabatan as $data_jenisjabatan): ?>
                        <option value="<?=$data_jenisjabatan->nama_jenisjabatan?>"><?=$data_jenisjabatan->nama_jenisjabatan?></option>
                      <?php endforeach ?>
                    </select>
                    <?=form_error('jenis_jabatan')?>
                  </div>
                </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Nama Jabatan</label>
                              <div class="col-md-8">
                                <select name="nama_jabatan" class="form-control select2" required>
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
                                <select name="eselon" class="form-control select2" required>
                                  <option value="">-Eselon-</option>
                                  <?php foreach ($data_eselon as $data_eselon): ?>
                                    <option value="<?=$data_eselon->nama_eselon?>"><?=$data_eselon->nama_eselon?></option>
                                  <?php endforeach ?>
                                </select>
                                <?=form_error('eselon')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Pangkat/Golongan/Ruang</label>
                              <div class="col-md-8">
                                <select name="jenis_pangkat" class="form-control select2" required>
                                  <option value="">-Pangkat/Golongan/Ruang-</option>
                                  <?php foreach ($data_golongan as $data_golongan): ?>
                                    <option value="<?=$data_golongan->nama_pangkat. ' - ' .$data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang?>"><?=$data_golongan->nama_pangkat. ' - ' .$data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang?></option>
                                  <?php endforeach ?>
                                </select>
                                <?=form_error('jenis_pangkat')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Kedudukan Pegawai</label>
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
                              <label class="col-md-4 control-label">Status Kepegawaian</label>
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
                              <label class="col-md-4 control-label">Jenis Pegawai</label>
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
                              <label class="col-md-4 control-label">TMT Jabatan</label>
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
                      </div>
                      <div class="tab-pane fade" id="tab3">
                        <div class="col-md-6">
                          <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-md-4 control-label">Alamat</label>
                              <div class="col-md-8">
                                <input name="alamat" type="text" class="form-control"  required>
                                <?=form_error('alamat')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">RT</label>
                              <div class="col-md-8">
                                <input name="rt" type="text" class="form-control" required >
                                <?=form_error('rt')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">RW</label>
                              <div class="col-md-8">
                                <input name="rw" type="text" class="form-control"  required>
                                <?=form_error('rw')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Provinsi</label>
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
                              <label class="col-md-4 control-label">Kab/Kota</label>
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
                              <label class="col-md-4 control-label">Kecamatan</label>
                              <div class="col-md-8">
                                <select disabled name="kec" id="kec" class="form-control" required >
                                  <option value=""></option>
                                  <option value="Test">Test</option>
                                </select>
                                <?=form_error('kec')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Kelurahan</label>
                              <div class="col-md-8">
                                <select disabled name="kel" id="kel" class="form-control" required >
                                  <option value=""></option>
                                </select>
                                <?=form_error('kel')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Kode Pos</label>
                              <div class="col-md-8">
                                <input name="kode_pos" type="text" class="form-control" required >
                                <?=form_error('kode_pos')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Telepon</label>
                              <div class="col-md-8">
                                <input name="telepon" type="text" class="form-control" >
                                <?=form_error('telepon')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">HP</label>
                              <div class="col-md-8">
                                <input name="hp" type="text" class="form-control" >
                                <?=form_error('hp')?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab4">
                        <div class="col-md-6">
                          <div class="alert alert-info"><i class="fa fa-info-user"></i> KETERANGAN BADAN</div>
                          <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-md-4 control-label">Tinggi Badan</label>
                              <div class="col-md-8">
                                <input name="tinggi_badan" type="text" class="form-control"  required>
                                <?=form_error('tinggi_badan')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Berat Badan</label>
                              <div class="col-md-8">
                                <input name="berat_badan" type="text" class="form-control"  required>
                                <?=form_error('berat_badan')?>
                              </div>
                            </div>
                          </div>
                          <br>

                          <div class="alert alert-info"><i class="fa fa-info-user"></i> BAHASA YANG DIKUASAI</div>
                          <select id="multiselect2" name="bahasa[]" class="multiselect multiselect-custom" multiple="multiple">
                            <option value="bindo">Bahasa Indonesia</option>
                            <option value="english">Bahasa Inggris</option>
                            <option value="mandarin">Mandarin</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <div class="alert alert-info"><i class="fa fa-info-user"></i> KETERANGAN LAINNYA</div>
                          <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-md-4 control-label">No. KTP</label>
                              <div class="col-md-8">
                                <input name="no_ktp" type="text" class="form-control"  required>
                                <?=form_error('no_ktp')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">No. KARPEG</label>
                              <div class="col-md-8">
                                <input name="no_karpeg" type="text" class="form-control" required >
                                <?=form_error('no_karpeg')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">No. ASKES</label>
                              <div class="col-md-8">
                                <input name="no_askes" type="text" class="form-control"  required>
                                <?=form_error('no_askes')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">No. TASPEN</label>
                              <div class="col-md-8">
                                <input name="no_taspen" type="text" class="form-control" required >
                                <?=form_error('no_taspen')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">No. KARIS/KARSU</label>
                              <div class="col-md-8">
                                <input name="no_karis" type="text" class="form-control"  required>
                                <?=form_error('no_karis')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">No. NPWP</label>
                              <div class="col-md-8">
                                <input name="no_npwp" type="text" class="form-control"  required>
                                <?=form_error('no_npwp')?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">No. KORPRI</label>
                              <div class="col-md-8">
                                <input name="no_korpri" type="text" class="form-control" required >
                                <?=form_error('no_korpri')?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <hr>
                          <center>
                            <button class="btn btn-primary btn-sm" id="submit" type="submit" disabled="true"><i class="fa fa-save"></i>SIMPAN</button>
                            <a class="btn btn-danger" href="<?=admin_url('DataPegawai')?>" role="button"><i class="fa fa-close"></i>BATAL</a>
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
                $("#submit").prop("disabled", false);

              }else{
                $("#pass_info").text('Password Tidak Sama');
                $("#pass_info").css("color", "red");
                $("#submit").prop("disabled", true);
              }
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

            $('#jenis_dok').change(function(){
              $('#no_dok').removeAttr('readonly');
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

              var cascadLoading = new Select2Cascade($('#satker'), $('#unker'), getUnker, select2Options);
              cascadLoading.then( function(parent, child, items) {
          // Open the child listbox immediately
          child.select2('open');
          // Dump response data
          console.log(items);
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
  </script>
