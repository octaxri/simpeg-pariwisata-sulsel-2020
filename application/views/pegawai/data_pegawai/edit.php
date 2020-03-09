<div class="row">
                        <div class="col-md-12">
                            <!-- PANEL DEFAULT -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Data Pegawai</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 text-center"> 
                                            <img src="<?=assets_url()?>img/user.png" class="img-thumbnail loaded-image" style="width:100%">
                                            <span>Pilih Foto</span> <input id="data_pegawai-image-file" type="file" name="files[]" accept="image/gif, image/jpeg, image/png"> </span> 
                                            <input id="data_pegawai-upload-data" type="hidden" name="data_pegawai-upload-data">
                                        </div> 
                                        <div class="col-md-9">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">NIP</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" placeholder="NIP">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Nama Lengkap</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">E-mail</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" placeholder="E-mail">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Ulang Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" placeholder="Ulang Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Gelar Depan</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Gelar Belakang</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Tempat Lahir</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Tanggal Lahir</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Jenis Kelamin</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Jenis Kelamin-</option>
                                                            <option value="tomatoes">Perempuan</option>
                                                            <option value="mozarella">Laki-laki</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Agama</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Agama-</option>
                                                            <option value="tomatoes">Islam</option>
                                                            <option value="mozarella">Protestan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Gol.Darah</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Status Pernikahan</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Status-</option>
                                                            <option value="tomatoes">Menikah</option>
                                                            <option value="mozarella">Belum Menikah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Jenjang Pendidikan</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Jenjang Pendidikan-</option>
                                                            <option value="tomatoes">S1</option>
                                                            <option value="mozarella">S2</option>
                                                        </select>
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
                                                        <select class="form-control">
                                                            <option value="cheese">-Status Kepegawaian-</option>
                                                            <option value="tomatoes">CPNS</option>
                                                            <option value="tomatoes">PNS</option>
                                                            <option value="mozarella">Pensiun</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">TMT CPNS</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Tanggal SK CPNS</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. SK CPNS</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">TMT PNS</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Tanggal SK PNS</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. SK PNS</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Pangkat/Golongan/Ruang</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Pangkat/Golongan/Ruang-</option>
                                                            <option value="tomatoes">Satya Ia</option>
                                                            <option value="mozarella">Satya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Eselon</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Eselon-</option>
                                                            <option value="tomatoes">IIa</option>
                                                            <option value="mozarella">IIb</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Bidang/Bagian</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Bidang/Bagian-</option>
                                                            <option value="tomatoes">Dinas Periwisata</option>
                                                            <option value="mozarella">Dinas Pendidikan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Subbidang/Seksi</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Subbidang/Seksi-</option>
                                                            <option value="tomatoes">Pembinaan</option>
                                                            <option value="mozarella">SDM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Jenis Jabatan</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Jenis Jabatan-</option>
                                                            <option value="tomatoes">Fungsional Kesehatan</option>
                                                            <option value="mozarella">SDM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Nama Jabatan</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control">
                                                            <option value="cheese">-Nama Jabatan-</option>
                                                            <option value="tomatoes">Kadis</option>
                                                            <option value="mozarella">SDM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Masa Kerja Jabatan</label>
                                                    <div class="col-md-8">
                                                        <div class="input-daterange input-group" data-provide="datepicker">
                                                            <input type="text" class="input-sm form-control" name="start">
                                                            <span class="input-group-addon">to</span>
                                                            <input type="text" class="input-sm form-control" name="end">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Masa Kerja Total</label>
                                                    <div class="col-md-8">
                                                        <div class="input-daterange input-group" data-provide="datepicker">
                                                            <input type="text" class="input-sm form-control" name="start">
                                                            <span class="input-group-addon">to</span>
                                                            <input type="text" class="input-sm form-control" name="end">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Masa Kerja Golongan</label>
                                                    <div class="col-md-8">
                                                        <div class="input-daterange input-group" data-provide="datepicker">
                                                            <input type="text" class="input-sm form-control" name="start">
                                                            <span class="input-group-addon">to</span>
                                                            <input type="text" class="input-sm form-control" name="end">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">TMT Jabatan</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                                            <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">RT</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">RW</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Propinsi</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Kabupaten/Kota</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Kecamatan</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Kelurahan</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Kode Pos</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Telepon</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">HP</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
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
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Berat Badan (kg)</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
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
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. KARPEG</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. ASKES</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. TASPEN</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. KARSI/KARSU</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. NPWP</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">No. KORPRI</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <hr>
                                        </div>
                                        <center>
                                            <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-save"></i>SIMPAN</button>
                                            <button class="btn btn-danger" type="button"><i class="fa fa-close"></i>BATAL</button>
                                        </center>
                                        
                                    </div>
                                </div>
                            <!-- END PANEL DEFAULT -->
                        </div>
                    </div>