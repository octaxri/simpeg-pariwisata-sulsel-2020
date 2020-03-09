                    <div class="row">
                        <div class="col-md-12">
                            <!-- PANEL DEFAULT -->
                            <div class="panel">
                                <div class="panel-body">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pensiun"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
                                                        <th rowspan="2">Pangkat</th>
                                                        <th rowspan="2">Jabatan</th>
                                                        <th colspan="7">SK Pensiun</th>
                                                        <th rowspan="2">Subbidang/Seksi</th>
                                                        <th rowspan="2"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>TMT</th>
                                                        <th>M/P</th>
                                                        <th>No.</th>
                                                        <th>Tanggal</th>
                                                        <th>Penandatangan</th>
                                                        <th>Keterangan</th>
                                                        <th>Lampiran</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; foreach ($data_pensiun as $pensiun): ?>
                                                        <tr>
                                                            <td><?=$i?></td>
                                                            <td><?=$data_pensiun->nama_lengkap?></td>
                                                            <td><?=$data_pensiun->nip?></td>
                                                            <td><?=$data_pensiun->jenis_kelamin?></td>
                                                            <td><?=$data_pensiun->nama_eselon?></td>
                                                            <td><?=$data_pensiun->nama_jabatan?></td>
                                                        </tr>
                                                    <?php $i++; endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </div>
                            <!-- END PANEL DEFAULT -->
                        </div>
                    </div>  