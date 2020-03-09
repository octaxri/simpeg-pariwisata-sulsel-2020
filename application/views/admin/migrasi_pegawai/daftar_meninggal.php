                    <div class="row">
                        <div class="col-md-12">
                            <!-- PANEL DEFAULT -->
                            <div class="panel">
                                <div class="panel-body">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_meninggal"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="datatable-data-export" class="table table-striped table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">No.</th>
                                                        <th rowspan="2">Nama Lengkap</th>
                                                        <th rowspan="2">NIP</th>
                                                        <th rowspan="2">Jenis Kelamin</th>
                                                        <th rowspan="2">Pangkat/Golongan/Ruang</th>
                                                        <th rowspan="2">Jabatan</th>
                                                        <th colspan="6" class="text-center">Akta Meninggal</th>
                                                        <th rowspan="2">Subbidang/Seksi</th>
                                                        <th rowspan="2"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Wafat</th>
                                                        <th>Tanggal Akta</th>
                                                        <th>No. Akta</th>
                                                        <th>Penandatangan</th>
                                                        <th>Keterangan</th>
                                                        <th>Lampiran</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- END PANEL DEFAULT -->
                    </div>

                            <div id="tambah_meninggal" class="modal fade " role="dialog">
          <div class="modal-dialog "><!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Pegawai Meninggal</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">NIP</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/<br>Ruang</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Tanggal Wafat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Tanggal Akta</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">No. Akta</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Penandatangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Lampiran</label>
                    <div class="col-sm-9">
                      <input id="lampiran_mutasi" type="file" name="files[]" >
                    </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-3 control-label">Subbidang/Seksi</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option value="cheese">-Pilih Subbidang/Seksi-</option>
                                <option value="tomatoes">Unit 1</option>
                                <option value="mozarella">Unit 2</option>
                            </select>
                        </div>
                    </div>
                  <div class="form-group ">
                  <div class="col-md-3 col-md-offset-5">
                    <a  class="btn btn-primary btn-sm" href="meninggal.html"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div id="edit_meninggal" class="modal fade " role="dialog">
          <div class="modal-dialog "><!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Pegawai Meninggal</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">NIP</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/<br>Ruang</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Tanggal Wafat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Tanggal Akta</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">No. Akta</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Penandatangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Lampiran</label>
                    <div class="col-sm-9">
                      <input id="lampiran_mutasi" type="file" name="files[]" >
                    </div>
                  </div>
                  <div class="form-group">
                        <label class="col-sm-3 control-label">Subbidang/Seksi</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option value="cheese">-Pilih Subbidang/Seksi-</option>
                                <option value="tomatoes">Unit 1</option>
                                <option value="mozarella">Unit 2</option>
                            </select>
                        </div>
                    </div>
                  <div class="form-group ">
                  <div class="col-md-3 col-md-offset-5">
                    <a  class="btn btn-primary btn-sm" href="meninggal.html"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
