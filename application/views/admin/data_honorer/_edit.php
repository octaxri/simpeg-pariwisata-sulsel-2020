<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-plus"></i> Edit Data Pegawai</h3>
            </div>
            <div class="panel-body">
                 <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
                <?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
                <?=form_open_multipart(admin_url('DataPegawai/editAjax/').$data_pegawai->nip, array('class' => 'form-horizontal'))?>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="form-group">
                            <label class="control-label">Upload Foto Pegawai</label>
                            <input type="file" name="gambar" class="form-control" placeholder="Foto Pegawai" value="<?=set_value('gambar')?>" onchange="readURL(this);" accept="image/*" />
                            <?=(isset($error_upload) ? $error_upload : '')?>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tampilan Foto</label>
                            <img class="img-thumbnail img-responsive" id="uploadgambar" src="<?=upload_url('fotopegawai').(empty($data_pegawai->gambar) ? 'no_image.jpg' : $data_pegawai->gambar)?>" width="100%" alt="Upload Gambar" />
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">NIP</label>
                                <div class="col-md-8">
                                    <input type="text" name="nip" class="form-control" value="<?=set_value('nip', $data_pegawai->nip)?>">
                                    <?=form_error('nip')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Lengkap</label>
                                <div class="col-md-8">
                                    <input type="text" name="name_lengkap" class="form-control" value="<?=set_value('nama_lengkap', $data_pegawai->nama_lengkap)?>">
                                    <?=form_error('name_lengkap')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-mail</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control" value="<?=set_value('email', $data_pegawai->email)?>">
                                    <?=form_error('email')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="pass" name="password" class="form-control" value="<?=set_value('password', $data_pegawai->password)?>" disabled>
                                    <?=form_error('password')?>
                                </div>
                            </div>
<!--                             <div class="form-group">
                                <label class="col-md-4 control-label">Ulang Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="repass" class="form-control" placeholder="Ulang Password">
                                    <p id="pass_info"></p>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gelar Depan</label>
                                <div class="col-md-8">
                                    <input type="text" name="gelar_depan" class="form-control" value="<?=set_value('gelar_depan', $data_pegawai->gelar_depan)?>">
                                    <?=form_error('gelar_depan')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gelar Belakang</label>
                                <div class="col-md-8">
                                    <input type="text" name="gelar_belakang" class="form-control" value="<?=set_value('gelar_belakang', $data_pegawai->gelar_belakang)?>">
                                    <?=form_error('gelar_belakang')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tempat Lahir</label>
                                <div class="col-md-8">
                                    <input type="text" name="tempat_lahir" class="form-control" value="<?=set_value('tempat_lahir', $data_pegawai->tempat_lahir)?>">
                                    <?=form_error('tempat_lahir')?>
                                </div>  
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                        <input type="text" name="tanggal_lahir" class="form-control" value="<?=set_value('tanggal_lahir', $data_pegawai->tanggal_lahir)?>">
                                        <?=form_error('tanggal_lahir')?>
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Jenis Kelamin</label>
                                <div class="col-md-8">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="-">-Jenis Kelamin-</option>
                                        <option <?=set_value('jenis_kelamin', $data_pegawai->jenis_kelamin) == 'wanita' ? 'selected' : ''?> value="wanita">Laki-laki>Perempuan</option>
                                        <option <?=set_value('jenis_kelamin', $data_pegawai->jenis_kelamin) == 'pria' ? 'selected' : ''?>  value="pria">Laki-laki</option>
                                    </select>
                                    <?=form_error('jenis_kelamin')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">Agama</label>
                                <div class="col-md-8">
                                    <select name="agama" class="form-control">
                                        <option value="-">-Agama-</option>
                                        <?php foreach ($data_agama as $data_agama): ?>
                                            <option value="<?=$data_agama->nama_agama?>" <?=$data_pegawai->agama == $data_agama->nama_agama ? 'selected' : ''?> ><?=$data_agama->nama_agama?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?=form_error('agama')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gol. Darah</label>
                                <div class="col-md-8">
                                    <input name="golongan_darah" type="text" class="form-control" value="<?=set_value('golongan_darah', $data_pegawai->golongan_darah)?>">
                                    <?=form_error('golongan_darah')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status Pernikahan</label>
                                <div class="col-md-8">
                                    <select name="status_pernikahan" class="form-control">
                                        <option value="-">-Status-</option>
                                        <option value="menikah"  <?=set_value('status_pernikahan', $data_pegawai->status_pernikahan) == 'menikah' ? 'selected' : ''?>>Menikah</option>
                                        <option <?=set_value('status_pernikahan', $data_pegawai->status_pernikahan) == 'belum_menikah' ? 'selected' : ''?> value="belum_menikah">Belum Menikah</option>
                                    </select>
                                    <?=form_error('status_pernikahan')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Jenjang Pendidikan</label>
                                <div class="col-md-8">
                                    <select name="jenjang_pendidikan" class="form-control">
                                        <option value="-">-Jenjang Pendidikan-</option>
                                        <?php foreach ($data_pendidikan as $data_pendidikan): ?>
                                            <option value="<?=$data_pendidikan->nama_pendidikan?>" <?=set_value('data_pendidikan', $data_pegawai->jenjang_pendidikan) == $data_pendidikan->nama_pendidikan ? 'selected' : ''?>><?=$data_pendidikan->nama_pendidikan?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?=form_error('jenjang_pendidikan')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status Kepegawaian</label>
                                <div class="col-md-8">
                                    <select name="status_kepegawaian" class="form-control">
                                        <option value="-">-Status Kepegawaian-</option>
                                        <option <?=set_value('status_kepegawaian', $data_pegawai->status_kepegawaian) == 'cpns' ? 'selected' : ''?> value="cpns">CPNS</option>
                                        <option <?=set_value('status_kepegawaian', $data_pegawai->status_kepegawaian) == 'pns' ? 'selected' : ''?> value="pns">PNS</option>
                                        <option <?=set_value('status_kepegawaian', $data_pegawai->status_kepegawaian) == 'pensiun' ? 'selected' : ''?> value="pensiun">Pensiun</option>
                                    </select>
                                    <?=form_error('status_kepegawaian')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">TMT CPNS</label>
                                <div class="col-md-8">
                                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                        <input name="tmt_cpns" type="text" class="form-control" value="<?=set_value('tmt_cpns', $data_pegawai->tmt_cpns)?>">
                                        <?=form_error('tmt_cpns')?>
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tanggal SK CPNS</label>
                                <div class="col-md-8">
                                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                        <input name="tanggal_sk_cpns" type="text" class="form-control" value="<?=set_value('tanggal_sk_cpns', $data_pegawai->tanggal_sk_cpns)?>"accept="">
                                        <?=form_error('tanggal_sk_cpns')?>
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">No. SK CPNS</label>
                                <div class="col-md-8">
                                    <input name="no_sk_cpns" type="text" class="form-control" value="<?=set_value('no_sk_cpns', $data_pegawai->no_sk_cpns)?>" >
                                    <?=form_error('no_sk_cpns')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Pangkat/Golongan/Ruang</label>
                                <div class="col-md-8">
                                    <select name="jenis_pangkat" class="form-control">
                                        <option value="">-Pangkat/Golongan/Ruang-</option>
                                        <?php foreach ($data_golongan as $data_golongan): ?>
                                            <option <?=set_value('jenis_pangkat', $data_pegawai->jenis_pangkat) == $data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang ? 'selected' : ''?> value="<?=$data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang?>"><?=$data_golongan->nama_golongan. ' ' .$data_golongan->nama_ruang?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?=form_error('jenis_pangkat')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Eselon</label>
                                <div class="col-md-8">
                                    <select name="eselon" class="form-control">
                                        <option value="-">-Eselon-</option>
                                        <?php foreach ($data_eselon as $data_eselon): ?>
                                            <option value="<?=$data_eselon->nama_eselon?>" <?=set_value('eselon', $data_pegawai->eselon) == $data_eselon->nama_eselon ? 'selected' : ''?>><?=$data_eselon->nama_eselon?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?=form_error('eselon')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Bidang/Bagian</label>
                                <div class="col-md-8">
                                    <select name="satuan_kerja" class="form-control">
                                        <option value="-">-Bidang/Bagian-</option>
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
                                    <select  name="unit_kerja" class="form-control">
                                        <option value="-">-Subbidang/Seksi-</option>
                                        <?php foreach ($data_unit as $data_unit): ?>
                                            <option value="<?=$data_unit->nama_unit?>" <?=set_value('unit_kerja', $data_pegawai->unit_kerja) == $data_unit->nama_unit ? 'selected' : ''?>><?=$data_unit->nama_unit?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?=form_error('unit_kerja')?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-horizontal">
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Jenis Jabatan</label>
                                <div class="col-md-8">
                                    <select name="jenis_jabatan" class="form-control">
                                        <option value="-">-Jenis Jabatan-</option>
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
                                    <select name="nama_jabatan" class="form-control">
                                        <option value="-"    >-Nama Jabatan-</option>
                                        <?php foreach ($data_jabatan as $data_jabatan): ?>
                                            <option value="<?=$data_jabatan->nama_jabatan?>" <?=set_value('nama_jabatan', $data_pegawai->nama_jabatan) == $data_jabatan->nama_jabatan ? 'selected' : ''?>><?=$data_jabatan->nama_jabatan?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?=form_error('nama_jabatan')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Masa Kerja Jabatan</label>
                                <div class="col-md-8">
                                    <div class="input-daterange input-group" data-provide="datepicker">
                                        <input name="masa_kerja_jabatan_awal" type="text" class="input-sm form-control" value="<?=set_value('masa_kerja_jabatan_awal', $data_pegawai->masa_kerja_jabatan_awal)?>"> 
                                        <?=form_error('masa_kerja_jabatan_awal')?>
                                        <span class="input-group-addon">to</span>
                                        <input name="masa_kerja_jabatan_akhir" type="text" class="input-sm form-control" value="<?=set_value('masa_kerja_jabatan_akhir', $data_pegawai->masa_kerja_jabatan_akhir)?>">
                                         <?=form_error('masa_kerja_jabatan_akhir')?>
                                    </div>
                                </div>
                                
                               

                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Masa Kerja Total</label>
                                <div class="col-md-8">
                                    <div class="input-daterange input-group" data-provide="datepicker">
                                        <input name="masa_kerja_total_awal" type="text" class="input-sm form-control" value="<?=set_value('masa_kerja_total_awal', $data_pegawai->masa_kerja_total_awal)?>">
                                        <?=form_error('masa_kerja_total_awal')?>
                                        <span class="input-group-addon">to</span>
                                        <input name="masa_kerja_total_akhir" type="text" class="input-sm form-control" value="<?=set_value('masa_kerja_total_akhir', $data_pegawai->masa_kerja_total_akhir)?>">
                                        <?=form_error('masa_kerja_total_akhir')?>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Masa Kerja Golongan</label>
                                <div class="col-md-8">
                                    <div class="input-daterange input-group" data-provide="datepicker">
                                        <input name="masa_kerja_golongan_awal" type="text" class="input-sm form-control" value="<?=set_value('masa_kerja_golongan_awal', $data_pegawai->masa_kerja_golongan_awal)?>">
                                        <?=form_error('masa_kerja_golongan_awal')?>
                                        <span class="input-group-addon">to</span>
                                        <input name="masa_kerja_golongan_akhir" type="text" class="input-sm form-control" value="<?=set_value('masa_kerja_golongan_akhir', $data_pegawai->masa_kerja_golongan_akhir)?>">
                                        <?=form_error('masa_kerja_golongan_akhir')?>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">TMT Jabatan</label>
                                <div class="col-md-8">
                                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                        <input name="tmt_jabatan" type="text" class="form-control" value="<?=set_value('tmt_jabatan', $data_pegawai->tmt_jabatan)?>">
                                        <?=form_error('tmt_jabatan')?>
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <div class="alert alert-info"><i class="fa fa-info-circle"></i> DATA ALAMAT</div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Alamat</label>
                                <div class="col-md-8">
                                    <input name="alamat" type="text" class="form-control" value="<?=set_value('alamat', $data_alamat->alamat)?>">
                                    <?=form_error('alamat')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">RT</label>
                                <div class="col-md-8">
                                    <input name="rt" type="text" class="form-control" value="<?=set_value('rt', $data_alamat->rt    )?>">
                                    <?=form_error('rt')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">RW</label>
                                <div class="col-md-8">
                                    <input name="rw" type="text" class="form-control" value="<?=set_value('rw', $data_alamat->rw)?>">
                                    <?=form_error('rw')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Provinsi</label>
                                <div class="col-md-8">
                                    <input name="provinsi"  type="text" class="form-control" value="<?=set_value('provinsi', $data_alamat->provinsi)?>">
                                    <?=form_error('provinsi')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Kabupaten/Kota</label>
                                <div class="col-md-8">
                                    <input name="kab" type="text" class="form-control" value="<?=set_value('kab', $data_alamat->kab)?>">
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
                                    <input name="kec" type="text" class="form-control" value="<?=set_value('kec', $data_alamat->kec)?>">
                                    <?=form_error('kec')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Kelurahan</label>
                                <div class="col-md-8">
                                    <input name="kel" type="text" class="form-control" value="<?=set_value('kel', $data_alamat->kel)?>">
                                    <?=form_error('kel')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Kode Pos</label>
                                <div class="col-md-8">
                                    <input name="kode_pos" type="text" class="form-control" value="<?=set_value('kode_pos', $data_alamat->kode_pos)?>">
                                    <?=form_error('kode_pos')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Telepon</label>
                                <div class="col-md-8">
                                    <input name="telepon" type="text" class="form-control" value="<?=set_value('telepon', $data_alamat->telepon)?>">
                                    <?=form_error('telepon')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">HP</label>
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
                    </div>
                    <div class="col-md-12">
                        <center>
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i>SIMPAN</button>
                            <a class="btn btn-danger" href="<?=admin_url('DataPegawai')?>" role="button"><i class="fa fa-close"></i>BATAL</a>
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
$(document).ready(function(){
    $("#repass").keyup(function(){
        var pass = $("#pass").val();
        var repass = $("#repass").val();

        if (pass === repass) {
           $("#pass_info").text('Password Sama');
           $("#pass_info").css("color", "green");
        }else{
           $("#pass_info").text('Password Tidak Sama');
           $("#pass_info").css("color", "red");
        }
    });
});   
</script>
<script type="text/javascript">
       function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#uploadgambar").attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
