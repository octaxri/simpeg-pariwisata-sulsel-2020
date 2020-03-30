<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Perizinan Cuti</h3>
            </div>
            <div class="panel-body">
            <table id="tbl_riwayat_cuti_notverivied" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable">
                <thead>
                    <tr >
                        <th> No.</th>
                        <th> NIP</th>
                        <th> Nama Pegawai</th>
                        <th> Jenis Cuti </th>
                        <th> Tanggal Awal</th>
                        <th> Tanggal Akhir</th>
                        <th> Tanggal Aktif</th>
                        <th style="display: none"> Admin</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($permohonan_cuti != NULL): ?>
                        <?php $i=1; foreach ($permohonan_cuti as $permohonan_cuti1): ?>
                            <tr class="data-itemriwayatcutipemohon" data-id="<?=$permohonan_cuti1->id?>">
                                <td><?=$i?></td>
                                <td><?=$permohonan_cuti1->nip?></td>
                                <td><?=$permohonan_cuti1->nama_lengkap?></td>
                                <td><?=$permohonan_cuti1->jenis_cuti?></td>
                                <td><?=$permohonan_cuti1->tanggal_awal?></td>
                                <td><?=$permohonan_cuti1->tanggal_akhir?></td>
                                <td><?=$permohonan_cuti1->tanggal_aktif?></td>
                                <td style="display: none"><?=$permohonan_cuti1->admin?></td>
                                <td style="width: 1px">
                                    <a data-toggle="modal" data-target="#edit_cutiPemohon" onclick="editDataPemohon('cuti',<?=$permohonan_cuti1->id?>);" class="btn btn-primary btn-xs" data-value="Diterima"><i class="fa fa-check"></i>&nbsp;Terima</a>
                                    <a href="#" onclick="hapusRiwayatPemohon('permohonan_cuti',<?=$permohonan_cuti1->id?>)" class="btn btn-danger btn-xs" data-value="Ditolak" id="tolak"><i class="fa fa-remove"></i>&nbsp;Tolak</a>
                                </td>
                            </tr>
                            <?php $i++; endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Riwayat Cuti</h3>

            </div>
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_cuti"><i class="glyphicon glyphicon-plus"></i> Tambah Data Cuti</a>
                <hr>
                <table id="tbl_riwayat_cuti" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama </th>
                            <th> Jenis Cuti </th>
                            <th> Nomor SK Cuti</th>
                            <th> Tanggal SKEP</th>
                            <th> Tanggal Awal</th>
                            <th> Tanggal Akhir</th>
                            <th> Tanggal Aktif</th>
                            <th> Nomor BKN</th>
                            <th> Tanggal BKN</th>
                            <th> Admin</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_cuti_verified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_cuti_verified as $riwayat_cuti_verified): ?>
                                <tr class="data-itemriwayatcuti" data-id="<?=$riwayat_cuti_verified->id_riwayat?>">
                                    <td><?=$i?></td>
                                    <td><?=$riwayat_cuti_verified->nip?></td>
                                    <td><?=$riwayat_cuti_verified->nama_lengkap?></td>
                                    <td><?=$riwayat_cuti_verified->jenis_cuti?></td>
                                    <td><?=$riwayat_cuti_verified->no_sk?></td>
                                    <td><?=$riwayat_cuti_verified->tanggal_skep?></td>
                                    <td><?=$riwayat_cuti_verified->tanggal_awal?></td>
                                    <td><?=$riwayat_cuti_verified->tanggal_akhir?></td>
                                    <td><?=$riwayat_cuti_verified->tanggal_aktif?></td>
                                    <td><?=$riwayat_cuti_verified->no_bkn?></td>
                                    <td><?=$riwayat_cuti_verified->tanggal_bkn?></td>
                                    <td><?=$riwayat_cuti_verified->admin?></td>
                                    <td style="width: 1px">
                                        <a data-toggle="modal" data-target="#edit_cuti" onclick="editData('cuti',<?=$riwayat_cuti_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a href="#" onclick="hapusRiwayat('cuti',<?=$riwayat_cuti_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                    </td>
                                </tr>
                            <?php $i++; endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- END PANEL DEFAULT -->
    </div>
</div>

<div id="tambah_cuti" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Cuti</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                      <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                      <div class="col-sm-9">
                        <select id="add_select2" class="form-control select2"  style="width: 100%"></select>
                        <input type="hidden" id="nama_lengkap" class="form-control" >
                        <input type="hidden" id="nip" class="form-control" >
                        <input type="hidden" id="admin" value="<?=$this->session->fullname?>" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Cuti</label>
                        <div class="col-sm-9">
                            <select id="jenis_cuti" class="form-control select-2" >
                                <option value=""></option>
                                <option value="Cuti Tahunan">Cuti Tahunan</option>
                                <option value="Cuti Besar">Cuti Besar</option>
                                <option value="Cuti Sakit">Cuti Sakit</option>
                                <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                <option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
                                <option value="Cuti Bersama">Cuti Bersama</option>
                                <option value="Cuti CLTN">Cuti CLTN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK Cuti</label>
                        <div class="col-sm-9">
                            <input id="no_sk_cuti" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SKEP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_skep_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Awal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_awal_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Akhir</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_akhir_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Aktif</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_aktif_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor BKN</label>
                        <div class="col-sm-9">
                            <input id="no_bkn_cuti" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal BKN</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_bkn_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_cuti','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit CUTI -->
<div id="edit_cuti" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Cuti</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                      <!-- <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label> -->
                      <div class="col-sm-9">
                        <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
                        <input type="hidden" id="nama_lengkap" class="form-control" >
                        <input type="hidden" id="nip" class="form-control" >
                        <input type="hidden" id="admin" value="<?=$this->session->fullname?>" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Cuti</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_cuti" class="form-control select-2" >
                                <option value=""></option>
                                <option value="Cuti Tahunan">Cuti Tahunan</option>
                                <option value="Cuti Besar">Cuti Besar</option>
                                <option value="Cuti Sakit">Cuti Sakit</option>
                                <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                <option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
                                <option value="Cuti Bersama">Cuti Bersama</option>
                                <option value="Cuti CLTN">Cuti CLTN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK Cuti</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_cuti" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SKEP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_skep_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Awal</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_awal_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Akhir</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_akhir_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Aktif</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_aktif_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor BKN</label>
                        <div class="col-sm-9">
                            <input id="edit_no_bkn_cuti" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal BKN</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_bkn_cuti" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_cuti');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit CUTI PEMOHON -->
<div id="edit_cutiPemohon" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Nomor dan Tanggal SK Cuti</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <!-- <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label> -->
                        <div class="col-sm-9">
                            <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
                            <input type="hidden" id="edit_nama_lengkap_pemohon" class="form-control" >
                            <input type="hidden" id="edit_nip_pemohon" class="form-control" >
                            <input type="hidden" id="edit_admin_pemohon" class="form-control" >
                            <input type="hidden" id="edit_jenis_cuti_pemohon" class="form-control " >
                            <input type="hidden" id="edit_tanggal_awal_cuti_pemohon" type="text" class="form-control" >
                            <input type="hidden" id="edit_tanggal_akhir_cuti_pemohon" type="text" class="form-control" >
                            <input type="hidden" id="edit_tanggal_aktif_cuti_pemohon" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK Cuti</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_cuti_pemohon" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SKEP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_skep_cuti_pemohon" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor BKN</label>
                        <div class="col-sm-9">
                            <input id="edit_no_bkn_cuti_pemohon" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal BKN</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_bkn_cuti_pemohon" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editDataPemohon_send('riwayat_cuti');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var idGlob;
    var valGlob;

    function addData_send(tipe, jenis_diklat) {
        switch (tipe) {
            case 'riwayat_cuti':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
                data: {
                    nip: $('#nip').val(),
                    nama_lengkap: $('#nama_lengkap').val(),
                    jenis_cuti: $('#jenis_cuti').val(),
                    no_sk: $('#no_sk_cuti').val(),
                    tanggal_skep: $('#tanggal_skep_cuti').val(),
                    tanggal_awal: $('#tanggal_awal_cuti').val(),
                    tanggal_akhir: $('#tanggal_akhir_cuti').val(),
                    tanggal_aktif: $('#tanggal_aktif_cuti').val(),
                    no_bkn: $('#no_bkn_cuti').val(),
                    tanggal_bkn: $('#tanggal_bkn_cuti').val(),
                    admin: $('#admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data berhasil disimpan', 'success');
                } else {
                    swal('Gagal', 'Data gagal disimpan', 'error');
                }
            });
            break;
        }
    }

    function editData_send(model){
        switch (model) {
            case 'riwayat_cuti':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    jenis_cuti: $('#edit_jenis_cuti').val(),
                    no_sk: $('#edit_no_sk_cuti').val(),
                    tanggal_skep: $('#edit_tanggal_skep_cuti').val(),
                    tanggal_awal: $('#edit_tanggal_awal_cuti').val(),
                    tanggal_akhir: $('#edit_tanggal_akhir_cuti').val(),
                    tanggal_aktif: $('#edit_tanggal_aktif_cuti').val(),
                    no_bkn: $('#edit_no_bkn_cuti').val(),
                    tanggal_bkn: $('#edit_tanggal_bkn_cuti').val(),
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data berhasil disimpan', 'success');
                } else {
                    swal('Gagal', 'Data gagal disimpan', 'error');
                }
            });
            break;
            default:
        }
    }

    function editDataPemohon_send(model){
        switch (model) {
            case 'riwayat_cuti':
                $.ajax({
                    type: 'POST',
                    url: '<?=admin_url('PeremajaanData/editDataPemohon/')?>'+idGlob+'/'+model,
                    data: {
                        nip: $('#edit_nama_lengkap_pemohon').val(),
                        nama_lengkap: $('#edit_nip_pemohon').val(),
                        jenis_cuti: $('#edit_jenis_cuti_pemohon').val(),
                        no_sk: $('#edit_no_sk_cuti_pemohon').val(),
                        tanggal_skep: $('#edit_tanggal_skep_cuti_pemohon').val(),
                        tanggal_awal: $('#edit_tanggal_awal_cuti_pemohon').val(),
                        tanggal_akhir: $('#edit_tanggal_akhir_cuti_pemohon').val(),
                        tanggal_aktif: $('#edit_tanggal_aktif_cuti_pemohon').val(),
                        no_bkn: $('#edit_no_sk_cuti_pemohon').val(),
                        tanggal_bkn: $('#edit_tanggal_bkn_cuti_pemohon').val(),
                        admin: $('#edit_admin_pemohon').val(),
                    },
                }).done(function(response) {
                    if (response.success) {
                        setTimeout(function() { location.reload() },1500);
                        swal('Sukses', 'Data berhasil disimpan', 'success');
                    } else {
                        swal('Gagal', 'Data gagal disimpan', 'error');
                    }
                });
                break;
            default:
        }
    }

    function editData(model,id){
        switch (model) {
            case 'cuti':
            $('#edit_jenis_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
            $('#edit_no_sk_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(4)").text());
            $('#edit_tanggal_skep_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_tanggal_awal_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(6)").text());
            $('#edit_tanggal_akhir_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(7)").text());
            $('#edit_tanggal_aktif_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(8)").text());
            $('#edit_no_bkn_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(9)").text());
            $('#edit_tanggal_bkn_cuti').val($(".data-itemriwayatcuti[data-id='" + id + "']>td:eq(10)").text());
            idGlob = id;
            break;
            default:

        }
    }

    function editDataPemohon(model,id){
        switch (model) {
            case 'cuti':
                $('#edit_nama_lengkap_pemohon').val($(".data-itemriwayatcutipemohon[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
                $('#edit_nip_pemohon').val($(".data-itemriwayatcutipemohon[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
                $('#edit_jenis_cuti_pemohon').val($(".data-itemriwayatcutipemohon[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
                $('#edit_tanggal_awal_cuti_pemohon').val($(".data-itemriwayatcutipemohon[data-id='" + id + "']>td:eq(4)").text());
                $('#edit_tanggal_akhir_cuti_pemohon').val($(".data-itemriwayatcutipemohon[data-id='" + id + "']>td:eq(5)").text());
                $('#edit_tanggal_aktif_cuti_pemohon').val($(".data-itemriwayatcutipemohon[data-id='" + id + "']>td:eq(6)").text());
                $('#edit_admin_pemohon').val($(".data-itemriwayatcutipemohon[data-id='" + id + "']>td:eq(7)").text()).trigger('change');
                idGlob = id;
                break;
            default:

        }
    }

    function hapusRiwayat(method,id) {
        swal({
            title: 'Apakah Anda Yakin?',
            text: "Anda tidak dapat mengembalikan data yang telah dihapus",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batalkan',
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: '<?=admin_url('PeremajaanData/hapusRiwayat/')?>'+method+'/'+id
                }).done(function(response) {
                    if (response.success) {
                        setTimeout(function() { location.reload() },1500);
                        swal('Sukses', 'Data berhasil dihapus', 'success');
                    } else swal('Gagal', 'Data gagal dihapus', 'error');
                });
            } else {
                swal(
                     'Batal',
                     'Proses dibatalkan',
                     'error'
                     )
            }
        });
    }

    function hapusRiwayatPemohon(method,id) {
        swal({
                title: 'Apakah Anda Yakin?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tolak',
                cancelButtonText: 'Batalkan',
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    $.ajax({
                        type: 'POST',
                        url: '<?=admin_url('PeremajaanData/hapusRiwayatPemohon/')?>'+method+'/'+id,
                        data: {
                            keterangan: $('#tolak').data("value"),
                        },
                    }).done(function(response) {
                        if (response.success) {
                            setTimeout(function() { location.reload() },1500);
                            swal('Sukses', 'Data berhasil dihapus', 'success');
                        } else swal('Gagal', 'Data gagal dihapus', 'error');
                    });
                } else {
                    swal(
                        'Batal',
                        'Proses dibatalkan',
                        'error'
                    )
                }
            });
    }

    function formatResult (data) {
        if (!data.id) { return data.text; }
        if (data.gambar == '') {
            data.gambar = 'no_image.jpg';
        }
        var markup = '<img style="margin-right : 10px;" width="25px" height="25px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>' +
        '<span> (NIP: '+ data.id+') </span>'
        return markup;
    };
    function formatResultSelection (data) {
        if (data.gambar == null) 
            {data.gambar = 'no_image.jpg';
    }
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
}

    $('#add_select2').on('change', function(){
        $('#add_select2').prop("disabled", true);

    });

    $('#tambah_cuti').on('hidden.bs.modal', function () {
        location.reload();
    });

$("#add_select2").select2({
    ajax: {
        url: "<?=admin_url('PeremajaanData/getDataPegawaiAjax/')?>",
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                q: params.term
            };
        },
        processResults: function (data) {
            return {
                results: $.map(data.data_pegawai, function (item) {
                    return {
                        id: item.nip,
                        text: item.nama_lengkap,
                        gambar: item.gambar
                    }
                })
            };
        },
        cache: true
    },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResult,
templateSelection: formatResultSelection,
minimumInputLength: 1
});

$("#add_select2").on("select2:select", function (e) {
    $("#nama_lengkap").val($("#add_select2").text());
    $("#nip").val($("#add_select2").val());
// $("#add_nip").val($("#add_select2").val());
// console.log($("#add_namalengkap").val());
});

$("#edit_select2").select2({
    ajax: {
        url: "<?=admin_url('PeremajaanData/getDataPegawaiAjax/')?>",
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                q: params.term
            };
        },
        processResults: function (data) {
            return {
                results: $.map(data.data_pegawai, function (item) {
                    return {
                        id: item.nip,
                        text: item.nama_lengkap,
                        gambar: item.gambar
                    }
                })
            };
        },
        cache: true
    },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResult,
templateSelection: formatResultSelection,
minimumInputLength: 1
});
$("#edit_select2").on("select2:select", function (e) {
    $("#edit_namalengkap").val($("#edit_select2").text());
    $("#edit_nip").val($("#edit_select2").val());
});

</script>
