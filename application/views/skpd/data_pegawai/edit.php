<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-plus"></i> Edit Data Pegawai</h3>
      </div>
      <div class="panel-body">
        <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
        <?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
<!--        --><?//=validation_errors();?>
        <?=form_open_multipart(skpd_url('DataPegawai/editAjax/'.$data_pegawai->nip), array('class' => 'form-horizontal', 'id' => 'editpegawai_form'))?>
        <div class="row">

          <div class="col-md-8">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-3 control-label">NIP</label>
                <div class="col-md-9">
                  <input type="text" name="nip" class="form-control" placeholder="NIP" data-parsley-type="digits" data-parsley-length="[18, 18]"  value="<?=set_value('nip', $data_pegawai->nip)?>">
                  <?=form_error('nip')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Nama Lengkap</label>
                <div class="col-md-9">
                  <input type="text" name="name_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?=set_value('nama_lengkap', $data_pegawai->nama_lengkap)?>">
                  <?=form_error('name_lengkap')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">E-mail</label>
                <div class="col-md-9">
                  <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?=set_value('email', $data_pegawai->email)?>">
                  <?=form_error('email')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                  <div class="password-strength-container">
                    <input required  minlength="6" autocapitalize="off" autocomplete="off" spellcheck="true" type="password" id="pass" name="password" class=" form-control" placeholder="Password" value="<?=set_value('password', $data_pegawai->password)?>" readonly>
                  </div>
                  <?=form_error('password')?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Gelar Depan</label>
                <div class="col-md-9">
                  <input type="text" value="<?=set_value('gelar_depan', $data_pegawai->gelar_depan)?>" name="gelar_depan" class="form-control" >
                  <?=form_error('gelar_depan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Gelar Belakang</label>
                <div class="col-md-9">
                  <input type="text" value="<?=set_value('gelar_belakang', $data_pegawai->gelar_belakang)?>" name="gelar_belakang" class="form-control" >
                  <?=form_error('gelar_belakang')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Tempat Lahir</label>
                <div class="col-md-9">
                  <input type="text" name="tempat_lahir" value="<?=set_value('tempat_lahir', $data_pegawai->tempat_lahir)?>" class="form-control" required>
                  <?=form_error('tempat_lahir')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Tanggal Lahir</label>
                <div class="col-md-9">
                  <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                    <input type="text" name="tanggal_lahir" class="form-control" value="<?=set_value('tanggal_lahir', $data_pegawai->tanggal_lahir)?>" readonly>
                    <?=form_error('tanggal_lahir')?>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>

              </div>
              <div class="form-group">
                <label class="col-md-3 control-label" >Jenis Kelamin</label>
                <div class="col-md-9">
                  <select name="jenis_kelamin" class="form-control" required>
                    <option value="">-Jenis Kelamin-</option>
                    <option <?=set_value('jenis_kelamin', $data_pegawai->jenis_kelamin) == 'wanita' ? 'selected' : ''?> value="wanita">Perempuan</option>
                    <option <?=set_value('jenis_kelamin', $data_pegawai->jenis_kelamin) == 'pria' ? 'selected' : ''?>  value="pria">Laki-laki</option>
                  </select>
                  <?=form_error('jenis_kelamin')?>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-md-3 control-label" required>Agama</label>
                <div class="col-md-9">
                  <select name="agama" class="form-control">
                    <option value="">-Agama-</option>
                    <?php foreach ($data_agama as $data_agama): ?>
                      <option value="<?=$data_agama->nama_agama?>" <?=$data_pegawai->agama == $data_agama->nama_agama ? 'selected' : ''?> ><?=$data_agama->nama_agama?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('agama')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label" >Gol.Darah</label>
                <div class="col-md-9">
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="A"  <?=set_value('golongan_darah', $data_pegawai->golongan_darah) == 'A' ? 'checked="true"' : ''?> class="form-control"  type="radio"  required>
                    <span><i></i>A</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="B" class="form-control" type="radio" <?=set_value('golongan_darah', $data_pegawai->golongan_darah) == 'B' ? 'checked="true"' : ''?> required>
                    <span><i></i>B</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="AB" class="form-control" type="radio" <?=set_value('golongan_darah', $data_pegawai->golongan_darah) == 'AB' ? 'checked="true"' : ''?> required>
                    <span><i></i>AB</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="golongan_darah" value="O" class="form-control"  type="radio" <?=set_value('golongan_darah', $data_pegawai->golongan_darah) == 'O' ? 'checked="true"' : ''?> required>
                    <span><i></i>O</span>
                  </label>
                  <?=form_error('golongan_darah')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Rhesus</label>
                <div class="col-md-9">
                  <label class="fancy-radio">
                    <input name="rhesus" value="Positif"  class="form-control" type="radio" <?=$data_pegawai->rhesus == 'Positif' ? 'checked="true"' : ''?> required>
                    <span><i></i>Positif</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="rhesus" value="Negatif"  class="form-control" type="radio" <?=$data_pegawai->rhesus == 'Negatif' ? 'checked="true"' : ''?> required>
                    <span><i></i>Negatif</span>
                  </label>
                  <label class="fancy-radio">
                    <input name="rhesus" value="Tidak Tahu"  class="form-control" type="radio" <?=$data_pegawai->rhesus == 'Tidak Tahu' ? 'checked="true"' : ''?> required>
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
                    <option value="menikah"  <?=set_value('status_pernikahan', $data_pegawai->status_pernikahan) == 'menikah' ? 'selected' : ''?>>Menikah</option>
                    <option <?=set_value('status_pernikahan', $data_pegawai->status_pernikahan) == 'belum_menikah' ? 'selected' : ''?> value="belum_menikah">Belum Menikah</option>
                    <option <?=set_value('status_pernikahan', $data_pegawai->status_pernikahan) == 'janda' ? 'selected' : ''?> value="janda">Janda</option>
                    <option <?=set_value('status_pernikahan', $data_pegawai->status_pernikahan) == 'duda' ? 'selected' : ''?> value="duda">Duda</option>
                  </select>
                  <?=form_error('status_pernikahan')?>
                </div>
              </div>
              <!-- <div class="form-group">
                <label class="col-md-3 control-label">Jenjang Pendidikan</label>
                <div class="col-md-9">
                  <select name="jenjang_pendidikan" class="form-control" required>
                    <option value="">-Jenjang Pendidikan-</option>
                    <?php foreach ($data_pendidikan as $data_pendidikan): ?>
                      <option value="<?=$data_pendidikan->nama_pendidikan?>" <?=set_value('data_pendidikan', $data_pegawai->jenjang_pendidikan) == $data_pendidikan->nama_pendidikan ? 'selected' : ''?>><?=$data_pendidikan->nama_pendidikan?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('jenjang_pendidikan')?>
                </div>
              </div> -->
              <div class="form-group">
                <label class="col-md-3 control-label">Status Kepegawaian</label>
                <div class="col-md-9">
                  <select name="status_kepegawaian"  class="form-control" required>
                    <option value="">-Status Kepegawaian-</option>
                    <?php foreach ($data_statuspegawai as $data_statuspegawai): ?>
                      <option value="<?=$data_statuspegawai->nama_statuspegawai?>"  <?=$data_pegawai->status_kepegawaian == $data_statuspegawai->nama_statuspegawai ? 'selected' : ''?>><?=$data_statuspegawai->nama_statuspegawai?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('status_kepegawaian')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Jenis Pegawai</label>
                <div class="col-md-9">
                  <select name="jenis_kepegawaian"  class="form-control" required>
                    <option value="" >-Jenis Kepegawaian-</option>
                    <?php foreach ($data_jenispegawai as $data_jenispegawai): ?>
                      <option value="<?=$data_jenispegawai->nama_jenispegawai?>"  <?=$data_pegawai->jenis_kepegawaian == $data_jenispegawai->nama_jenispegawai ? 'selected' : ''?>><?=$data_jenispegawai->nama_jenispegawai?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('status_kepegawaian')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Kedudukan Pegawai</label>
                <div class="col-md-9">
                  <select name="kedudukan_kepegawaian"  class="form-control" required>
                    <option value="">-Kedudukan Kepegawaian-</option>
                    <?php foreach ($data_kedudukanpegawai as $data_kedudukanpegawai): ?>
                      <option value="<?=$data_kedudukanpegawai->nama_kedudukanpegawai?>"  <?=$data_pegawai->kedudukan_kepegawaian == $data_kedudukanpegawai->nama_kedudukanpegawai ? 'selected' : ''?>><?=$data_kedudukanpegawai->nama_kedudukanpegawai?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('status_kepegawaian')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Pangkat/Golongan/Ruang</label>
                <div class="col-md-9">
                  <select name="jenis_pangkat"  id="jenis_pangkat" class="form-control" required>
                    <option value="">-Pangkat/Golongan/Ruang-</option>
                    <?php foreach ($data_golongan as $data_golongan): ?>
                        <option data-id="<?=$data_golongan->id_golongan?>" <?=($data_pegawai->id_pangkat) == ($data_golongan->id_golongan) ? 'selected' : ''?> value="<?=$data_golongan->id_golongan?>"><?=$data_golongan->nama_pangkat . ' - ' .$data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang?></option>
                    <?php endforeach ?>
                    <input type="hidden" name="id_pangkat" id="id_pangkat" value="<?= $data_pegawai->id_pangkat ?>">
                  </select>
                  <?=form_error('jenis_pangkat')?>
                </div>
              </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">TMT Pangkat/Golongan/Ruang</label>
                    <div class="col-md-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input name="tmt_jenis_pangkat" type="text" class="form-control" value="<?= set_value('tmt_jenis_pangkat', $data_pegawai->tmt_jenis_pangkat) ?>" required>
                            <?= form_error('tmt_jenis_pangkat') ?>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="form-group">
              <img class="img-thumbnail img-responsive" id="uploadgambar" src="<?=upload_url('fotopegawai').(empty($data_pegawai->gambar) ? 'no_image.jpg' : $data_pegawai->gambar)?>" width="100%" alt="Upload Gambar" />
            </div>
            <div class="form-group">
                <label class="control-label">Upload Foto Pegawai  (Ukuran 3x4)</label>
              <input type="file" name="gambar" class="form-control" placeholder="Foto Pegawai" value="<?=set_value('gambar')?>" onchange="readURL(this);" accept="image/*" />
              <?=(isset($error_upload) ? $error_upload : '')?>
              <!-- <input value="<?=set_value('gambar')?>" required type="file" name="fotopegawai" class="form-control dropify" data-default-file="url_of_your_file" data-height="400" width="300px" data-max-file-size="2M"  data-show-errors="true"  data-allowed-formats="portrait square" data-allowed-file-extensions="jpg png jpeg" data-max-file-size-preview="2M"/> -->
            </div>
          </div>
          <div class="col-md-12">
            <hr>
            <div class="alert alert-info"> DATA PEKERJAAN (Saat Ini)</div>
          </div>
          <div class="col-md-6">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-4 control-label">Bidang/Bagian</label>
                <div class="col-md-8">
                  <select name="satuan_kerja" id="satker" class="form-control" required>
                    <option value="">-Bidang/Bagian-</option>
                    <?php foreach ($data_satker as $data_satker): ?>
                      <option value="<?=$data_satker->nama_satker?>" <?=set_value('satuan_kerja', $data_pegawai->satuan_kerja) == $data_satker->nama_satker ? 'selected' : ''?>><?=$data_satker->nama_satker?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('satuan_kerja')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Subbidang/Seksi</label>
                <div class="col-md-8">
                  <select  name="unit_kerja" id="unker" class="form-control" readonly required>
                    <?php foreach ($data_unit as $data_unit): ?>
                      <option value="<?=$data_unit->nama_unit?>" <?=set_value('unit_kerja', $data_pegawai->unit_kerja) == $data_unit->nama_unit ? 'selected' : ''?>><?=$data_unit->nama_unit?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('unit_kerja')?>
                </div>
              </div>
              <!-- <div class="form-group">
                <label class="col-md-4 control-label">Subid/Subag</label>
                <div class="col-md-8">
                  <input name="subid_subag" type="text"  value="<?=set_value('subid_subag', $data_pegawai->subid_subag)?>" class="form-control" required>
                  <?=form_error('subid/subag')?>
                </div>
              </div> -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Eselon</label>
                    <div class="col-md-8">
                        <select name="eselon" class="form-control" required>
                            <option value="">-Eselon-</option>
                            <?php foreach ($data_eselon as $data_eselon): ?>
                                <option value="<?=$data_eselon->nama_eselon?>" <?=set_value('eselon', $data_pegawai->eselon) == $data_eselon->nama_eselon ? 'selected' : ''?>><?=$data_eselon->nama_eselon?></option>
                            <?php endforeach ?>
                        </select>
                        <?=form_error('eselon')?>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-4 control-label">Jenis Jabatan</label>
                <div class="col-md-8">
                  <select name="jenis_jabatan"  class="form-control" required>
                    <option value="">-Jenis Jabatan-</option>
                    <?php foreach ($data_jenisjabatan as $data_jenisjabatan): ?>
                        <option value="<?=$data_jenisjabatan->nama_jenisjabatan?>" <?=set_value('jenis_jabatan', $data_pegawai->jenis_jabatan) == $data_jenisjabatan->nama_jenisjabatan ? 'selected' : ''?>><?=$data_jenisjabatan->nama_jenisjabatan?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('jenis_jabatan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Jabatan</label>
                <div class="col-md-8">
                  <select name="nama_jabatan" class="form-control" required>
                    <option value="">-Nama Jabatan-</option>
                    <?php foreach ($data_jabatan as $data_jabatan): ?>
                        <option value="<?=$data_jabatan->nama_jabatan?>" <?=set_value('nama_jabatan', $data_pegawai->nama_jabatan) == $data_jabatan->nama_jabatan ? 'selected' : ''?>><?=$data_jabatan->nama_jabatan?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('nama_jabatan')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">TMT Jabatan</label>
                <div class="col-md-8">
                  <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                    <input name="tmt_jabatan" type="text" class="form-control"  value="<?=set_value('tmt_jabatan', $data_pegawai->tmt_jabatan)?>" required>
                    <?=form_error('tmt_jabatan')?>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-12">
            <hr>
            <div class="alert alert-info"> DATA ALAMAT</div>
          </div>
          <div class="col-md-6">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-4 control-label">Alamat</label>
                <div class="col-md-8">
                  <input name="alamat" type="text" class="form-control"  value="<?=set_value('alamat', $data_alamat->alamat)?>"  >
                  <?=form_error('alamat')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">RT</label>
                <div class="col-md-8">
                  <input name="rt" type="text" class="form-control"  value="<?=set_value('rt', $data_alamat->rt)?>"  >
                  <?=form_error('rt')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">RW</label>
                <div class="col-md-8">
                  <input name="rw" type="text" class="form-control"  value="<?=set_value('rw', $data_alamat->rw)?>"  >
                  <?=form_error('rw')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Provinsi</label>
                <div class="col-md-8">
                  <select name="provinsi" id="provinsi" class="form-control" required >
                    <option value=""></option>
                    <?php foreach ($data_provinsi as $data_provinsi): ?>
                      <option value="<?=$data_provinsi->nama_provinsi?>" <?=$data_alamat->provinsi == $data_provinsi->nama_provinsi ? 'selected' : ''?>><?=$data_provinsi->nama_provinsi?></option>
                    <?php endforeach ?>
                  </select>
                  <?=form_error('provinsi')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Kabupaten/Kota</label>
                <div class="col-md-8">
                  <select readonly name="kab" id="kab" class="form-control"  required>
                    <option value="<?=$data_alamat->kab?>" selected><?=$data_alamat->kab?></option>
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
                  <select readonly name="kec" id="kec" class="form-control"  required>
                    <option value="<?=$data_alamat->kec?>" selected><?=$data_alamat->kec?></option>
                  </select>
                  <?=form_error('kec')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Kelurahan</label>
                <div class="col-md-8">
                  <select readonly name="kel" id="kel" class="form-control"  required>
                    <option value="<?=$data_alamat->kel?>" selected><?=$data_alamat->kel?></option>
                  </select>
                  <?=form_error('kel')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Kode Pos</label>
                <div class="col-md-8">
                  <input name="kode_pos" type="text" class="form-control" value="<?=set_value('kode_pos', $data_alamat->kode_pos)?>"  >
                  <?=form_error('kode_pos')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">No. Telepon</label>
                <div class="col-md-8">
                  <input name="telepon" type="text" class="form-control" value="<?=set_value('telepon', $data_alamat->telepon)?>" >
                  <?=form_error('telepon')?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">No. HP</label>
                <div class="col-md-8">
                  <input name="hp" type="text" class="form-control" value="<?=set_value('hp', $data_alamat->hp)?>">
                  <?=form_error('hp')?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <hr>
          </div>
          <div class="col-md-6">
            <div class="alert alert-info"><i class="fa fa-info-user"></i> KETERANGAN BADAN</div>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-4 control-label">Tinggi Badan (cm)</label>
                    <div class="col-md-8">
                        <input name="tinggi_badan" type="text" class="form-control" value="<?=set_value('tinggi_badan', $data_keteranganbadan->tinggi_badan)?>">
                        <?=form_error('tinggi_badan')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Berat Badan (kg)</label>
                    <div class="col-md-8">
                        <input name="berat_badan" type="text" class="form-control" value="<?=set_value('berat_badan', $data_keteranganbadan->berat_badan)?>">
                        <?=form_error('berat_badan')?>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="alert alert-info"><i class="fa fa-info-user"></i> KETERANGAN LAINNYA</div>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-4 control-label">No. KTP</label>
                    <div class="col-md-8">
                        <input name="no_ktp" type="text" class="form-control" value="<?=set_value('no_ktp', $data_keteranganlainnya->no_ktp)?>">
                        <?=form_error('no_ktp')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No. KARPEG</label>
                    <div class="col-md-8">
                        <input name="no_karpeg" type="text" class="form-control" value="<?=set_value('no_karpeg', $data_keteranganlainnya->no_karpeg)?>">
                        <?=form_error('no_karpeg')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No. ASKES</label>
                    <div class="col-md-8">
                        <input name="no_askes" type="text" class="form-control" value="<?=set_value('no_askes', $data_keteranganlainnya->no_askes)?>">
                        <?=form_error('no_askes')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No. TASPEN</label>
                    <div class="col-md-8">
                        <input name="no_taspen" type="text" class="form-control" value="<?=set_value('no_taspen', $data_keteranganlainnya->no_taspen)?>">
                        <?=form_error('no_taspen')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No. KARSI/KARSU</label>
                    <div class="col-md-8">
                        <input name="no_karis" type="text" class="form-control" value="<?=set_value('no_karis', $data_keteranganlainnya->no_karis)?>">
                        <?=form_error('no_karis')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No. NPWP</label>
                    <div class="col-md-8">
                        <input name="no_npwp" type="text" class="form-control" value="<?=set_value('no_npwp', $data_keteranganlainnya->no_npwp)?>">
                        <?=form_error('no_npwp')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No. KORPRI</label>
                    <div class="col-md-8">
                        <input name="no_korpri" type="text" class="form-control" value="<?=set_value('no_korpri', $data_keteranganlainnya->no_korpri)?>">
                        <?=form_error('no_korpri')?>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <hr>
            <center>
              <button class="btn btn-primary btn-sm" id="submit" type="submit" ><i class="glyphicon glyphicon-edit"></i>SIMPAN PERUBAHAN</button>
              <a class="btn btn-danger btn-sm" href="<?=skpd_url('DataPegawai')?>" role="button"><i class="fa fa-close"></i>BATAL</a>
            </center>
          </div>
          <?=form_close()?>
        </div>
      </div>
      <!-- END PANEL DEFAULT -->
    </div>
  </div>

</div>

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $("#uploadgambar").attr("src", e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }

  }
$(document).ready(function(){
  $("#jenis_jabatan").on("select2:select", function (e) {
   if(($("#jenis_jabatan").val() == 'Fungsional')) {
       $("#eselon").val('');
       $("#eselon").attr('disabled', true);
   }

   if(($("#jenis_jabatan").val() == 'Fungsional Tertentu')) {
        $("#eselon").val('');
       $("#eselon").attr('disabled', true);
   }

   if($("#jenis_jabatan").val() == 'Struktural') {
    $("#eselon").val('');
       $("#eselon").attr('disabled', false);
   }
  
 });

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




        var select2Options = { width: 'resolve',
        placeholder: "- Pilih -",
        triggerChange: true,
        allowClear: true};
        var getKab = '<?=skpd_url('DataPegawai/getKabByProvinsi/')?>'+':parentId:';
        var getKec = '<?=skpd_url('DataPegawai/getKecByKabupaten/')?>'+':parentId:';
        var getKel = '<?=skpd_url('DataPegawai/getKelByKecamatan/')?>'+':parentId:';
        // var getUnker = '<?=skpd_url('DataPegawai/getUnkerBySatker/')?>'+':parentId:';

        $('select').select2(select2Options);
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

        // var cascadLoading = new Select2Cascade($('#satker'), $('#unker'), getUnker, select2Options);
        // cascadLoading.then( function(parent, child, items) {
        //   // Open the child listbox immediately
        //   child.select2('open');
        //   // Dump response data
        //   console.log(items);
        // })


      //validation parsley
      $('#editpegawai_form').parsley();

    });
    </script>
