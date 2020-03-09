<!-- OVERVIEW  -->
<div class="panel panel-headline">
    <div class="panel-body">
        <div class="row">
                <div class="col-md-12">
                <hr>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#12" role="tab" data-toggle="tab">12 Bulan</a></li>
                        <li><a href="#9" role="tab" data-toggle="tab">9 Bulan</a></li>
                        <li><a href="#6" role="tab" data-toggle="tab">6 Bulan</a></li>
                        <li><a href="#3" role="tab" data-toggle="tab">3 Bulan</a></li>
                        <li><a href="#1" role="tab" data-toggle="tab">1 Bulan</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="12">
                            <div class="col-md-12">
                                <table style="min-width: 100%;" class="table table-striped  table-hover table-bordered datatable-Exnormal">
                                    <thead>
                                        <tr>
                                            <th width="5px">No.</th>
                                            <th width="150px">NIP</th>
                                            <th>Nama</th>
                                            <th>Golongan Terakhir</th>
                                            <th>Bidang/Bagian</th>
                                            <th>Subbidang/Seksi</th>
                                            <th width="30px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($data_pegawai_12 as $data_pegawai_12): ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$data_pegawai_12->nip?></td>
                                            <td><?=$data_pegawai_12->nama_lengkap?></td>
                                            <td><?=$data_pegawai_12->jenis_pangkat?></td>
                                            <td><?=$data_pegawai_12->satuan_kerja?></td>
                                            <td><?=$data_pegawai_12->unit_kerja?></td>
                                            <td>
                                                <a href="<?=admin_url('DataPegawai/profil/').$data_pegawai_12->nip?>" class="btn btn-primary btn-xs"><span class="fa fa-eye"></span>Lihat </a>
                                            </td>

                                        </tr>
                                        <?php $i++; endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="9">
                            <div class="col-md-12">
                                <table style="min-width: 100%;" class="table table-striped  table-hover table-bordered datatable-Exnormal">
                                    <thead>
                                        <tr>
                                            <th >No.</th>
                                            <th >NIP</th>
                                            <th>Nama</th>
                                            <th>Golongan Terakhir</th>
                                            <th>Bidang/Bagian</th>
                                            <th>Subbidang/Seksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($data_pegawai_9 as $data_pegawai_9): ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$data_pegawai_9->nip?></td>
                                            <td><?=$data_pegawai_9->nama_lengkap?></td>
                                            <td><?=$data_pegawai_9->jenis_pangkat?></td>
                                            <td><?=$data_pegawai_9->satuan_kerja?></td>
                                            <td><?=$data_pegawai_9->unit_kerja?></td>
                                            <td>
                                                <a href="<?=admin_url("DataPegawai/Profil/").$data_pegawai_9->nip?>" class="btn btn-primary btn-xs"><span class="fa fa-eye"></span>Lihat </a>
                                            </td>

                                        </tr>
                                        <?php $i++; endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="6">
                            <div class="col-md-12">
                                <table style="min-width: 100%;" class="table table-striped  table-hover table-bordered datatable-Exnormal">
                                    <thead>
                                        <tr>
                                            <th >No.</th>
                                            <th >NIP</th>
                                            <th>Nama</th>
                                            <th>Golongan Terakhir</th>
                                            <th>Bidang/Bagian</th>
                                            <th>Subbidang/Seksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($data_pegawai_6 as $data_pegawai_6): ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$data_pegawai_6->nip?></td>
                                            <td><?=$data_pegawai_6->nama_lengkap?></td>
                                            <td><?=$data_pegawai_6->jenis_pangkat?></td>
                                            <td><?=$data_pegawai_6->satuan_kerja?></td>
                                            <td><?=$data_pegawai_6->unit_kerja?></td>
                                            <td>
                                                <a href="<?=admin_url("DataPegawai/Profil/").$data_pegawai_6->nip?>" class="btn btn-primary btn-xs"><span class="fa fa-eye"></span>Lihat </a>
                                            </td>

                                        </tr>
                                        <?php $i++; endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="3">
                            <div class="col-md-12">
                                <table style="min-width: 100%;" class="table table-striped  table-hover table-bordered datatable-Exnormal">
                                    <thead>
                                        <tr>
                                            <th >No.</th>
                                            <th >NIP</th>
                                            <th>Nama</th>
                                            <th>Golongan Terakhir</th>
                                            <th>Bidang/Bagian</th>
                                            <th>Subbidang/Seksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($data_pegawai_3 as $data_pegawai_3): ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$data_pegawai_3->nip?></td>
                                            <td><?=$data_pegawai_3->nama_lengkap?></td>
                                            <td><?=$data_pegawai_3->jenis_pangkat?></td>
                                            <td><?=$data_pegawai_3->satuan_kerja?></td>
                                            <td><?=$data_pegawai_3->unit_kerja?></td>
                                            <td>
                                                <a href="<?=admin_url("DataPegawai/Profil/").$data_pegawai_3->nip?>" class="btn btn-primary btn-xs"><span class="fa fa-eye"></span>Lihat </a>
                                            </td>

                                        </tr>
                                        <?php $i++; endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="1">
                            <div class="col-md-12">
                                <table style="min-width: 100%;" class="table table-striped  table-hover table-bordered datatable-Exnormal">
                                    <thead>
                                        <tr>
                                            <th >No.</th>
                                            <th >NIP</th>
                                            <th>Nama</th>
                                            <th>Golongan Terakhir</th>
                                            <th>Bidang/Bagian</th>
                                            <th>Subbidang/Seksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($data_pegawai_1 as $data_pegawai_1): ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$data_pegawai_1->nip?></td>
                                            <td><?=$data_pegawai_1->nama_lengkap?></td>
                                            <td><?=$data_pegawai_1->jenis_pangkat?></td>
                                            <td><?=$data_pegawai_1->satuan_kerja?></td>
                                            <td><?=$data_pegawai_1->unit_kerja?></td>
                                            <td>
                                                <a href="<?=admin_url("DataPegawai/Profil/").$data_pegawai_1->nip?>" class="btn btn-primary btn-xs"><span class="fa fa-eye"></span>Lihat </a>
                                            </td>

                                        </tr>
                                        <?php $i++; endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- END OVERVIEW  -->

<script type="text/javascript">
 $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
        .columns.adjust()
        // .responsive.recalc();
    });
    $('.panel-collapse').on('shown.bs.collapse', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
        .columns.adjust()
        // .responsive.recalc();
    });

</script>
