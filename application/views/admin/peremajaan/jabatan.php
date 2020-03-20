<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <!--<div class="panel">
      <div class="panel-heading panel-danger">
        <h3 class="panel-title font-white">Verifikasi Data Jabatan</h3>
    </div>
    <div class="panel-body">
        <table id="tbl_riwayat_jabatan" cellspacing="0" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal">
            <thead>
                <tr class="data-item" data-id="">
                    <th rowspan="2">No.</th>
                    <th rowspan="2">NIP</th>
                    <th rowspan="2" width="100">Nama Lengkap</th>
                    <th colspan="2" class="text-center">Jabatan </th>
                    <th colspan="3" class="text-center">Lokasi Kerja</th>
                    <th colspan="2" class="text-center">TMT</th>
                    <th rowspan="2">Eselon</th>
                    <th colspan="3" class="text-center">Surat Keputusan</th>
                    <th rowspan="2">Admin</th>
                    <th rowspan="2"></th>
                </tr>
                <tr>
                    <th width="40">Jenis</th>
                    <th width="700">Nama</th>
                    <th width="200">Instansi Induk</th>
                    <th width="200">Unor Induk</th>
                    <th width="200">Unor</th>
                    <th>Jabatan</th>
                    <th>Pelantikan</th>
                    <th width="65px;">Pejabat Yang Menandatangani</th>
                    <th width="65px;">Nomor</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($riwayat_jabatan_notverified != NULL): ?>
                    <?php foreach ($riwayat_jabatan_notverified as $riwayat_jabatan_notverified): ?>
                        <?php $i = 1; ?>
                        <tr class="data-itemriwayatjabatan" data-id="<?=$riwayat_jabatan_notverified->id_riwayat?>">
                            <td><?=$i?></td>
                            <td><?=$riwayat_jabatan_notverified->nip?></td>
                            <td><?=$riwayat_jabatan_notverified->nama_lengkap?></td>
                            <td><?=$riwayat_jabatan_notverified->jenis?></td>
                            <td><?=$riwayat_jabatan_notverified->nama_jabatan?></td>
                            <td><?=$riwayat_jabatan_notverified->instansi_induk?></td>
                            <td><?=$riwayat_jabatan_notverified->unor_induk?></td>
                            <td><?=$riwayat_jabatan_notverified->unor?></td>
                            <td><?=$riwayat_jabatan_notverified->tmt_jabatan?></td>
                            <td><?=$riwayat_jabatan_notverified->tmt_pelantikan?></td>
                            <td><?=$riwayat_jabatan_notverified->eselon?></td>
                            <td><?=$riwayat_jabatan_notverified->pejabat?></td>
                            <td><?=$riwayat_jabatan_notverified->nomor?></td>
                            <td><?=$riwayat_jabatan_notverified->tanggal?></td>
                            <td><?=$riwayat_jabatan_notverified->admin?></td>
                            <td>
                                <a data-toggle="modal" data-target="#edit_jabatan" onclick="editData('jabatan',<?=$riwayat_jabatan_notverified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                <a onclick="hapusRiwayat('jabatan',<?=$riwayat_jabatan_notverified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>-->
</div>
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Riwayat Jabatan</h3>

</div>
<div class="panel-body">
    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_jabatan"><i class="glyphicon glyphicon-plus"></i> Tambah Data Jabatan</a>
    <hr>
    <table id="tbl_riwayat_jabatan" cellspacing="0" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal">
        <thead>
            <tr class="data-item" data-id="">
                <th rowspan="2">No.</th>
                <th rowspan="2">NIP</th>
                <th rowspan="2" width="100">Nama </th>
                <th rowspan="2">Jenis Jabatan</th>
                <th rowspan="2">Nama Jabatan</th>
<!--                <th colspan="2" class="text-center">Jabatan </th>-->
                <th colspan="3" class="text-center">Lokasi Kerja</th>
                <th colspan="2" class="text-center">Tanggal TMT</th>
                <th rowspan="2">Eselon</th>
                <th colspan="3" class="text-center">Surat Keputusan</th>
                <th rowspan="2">Admin</th>
                <th rowspan="2"></th>
            </tr>
            <tr>
                <th width="200">Instansi Induk</th>
                <th width="200">Bidang/Bagian</th>
                <th width="200">Subbidang/Seksi</th>
                <th>Jabatan</th>
                <th>Pelantikan</th>
                <th>Pejabat Yang Menetapkan</th>
                <th>Nomor </th>
                <th>Tanggal </th>
            </tr>
        </thead>
        <tbody>
            <?php if ($riwayat_jabatan_verified != NULL): ?>
                <?php $i = 1; ?>
                <?php foreach ($riwayat_jabatan_verified as $riwayat_jabatan_verified): ?>
                    <tr class="data-itemriwayatjabatan" data-id="<?=$riwayat_jabatan_verified->id_riwayat?>">
                        <td><?=$i?></td>
                        <td><?=$riwayat_jabatan_verified->nip?></td>
                        <td><?=$riwayat_jabatan_verified->nama_lengkap?></td>
                        <td><?=$riwayat_jabatan_verified->jenis?></td>
                        <td><?=$riwayat_jabatan_verified->nama_jabatan?></td>
                        <td><?=$riwayat_jabatan_verified->instansi_induk?></td>
                        <td><?=$riwayat_jabatan_verified->unor_induk?></td>
                        <td><?=$riwayat_jabatan_verified->unor?></td>
                        <td><?=$riwayat_jabatan_verified->tmt_jabatan?></td>
                        <td><?=$riwayat_jabatan_verified->tmt_pelantikan?></td>
                        <td><?=$riwayat_jabatan_verified->eselon?></td>
                        <td><?=$riwayat_jabatan_verified->pejabat?></td>
                        <td><?=$riwayat_jabatan_verified->nomor?></td>
                        <td><?=$riwayat_jabatan_verified->tanggal?></td>
                        <td><?=$riwayat_jabatan_verified->admin?></td>
                        <td>
                            <a data-toggle="modal" data-target="#edit_jabatan" onclick="editData('jabatan',<?=$riwayat_jabatan_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                            <a onclick="hapusRiwayat('jabatan',<?=$riwayat_jabatan_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>
</div>
<!-- END PANEL DEFAULT -->
</div>
</div>

<!-- Tambah Jabatan -->
<div id="tambah_jabatan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Jabatan</h4>
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
                    <label for="bahan" class="col-sm-3 control-label">Jenis Jabatan</label>
                    <div class="col-sm-9">
                        <select type="text" id="jenis_jabatan" class="form-control select-2 " >
                            <option value=""></option>
                            <?php foreach ($data_jenisjabatan as $data_jenisjabatan1): ?>
                                <option value="<?=$data_jenisjabatan1->nama_jenisjabatan?>"><?=$data_jenisjabatan1->nama_jenisjabatan?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Nama Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" id="nama_jabatan" class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Eselon</label>
                    <div class="col-sm-9">
                        <select type="text" id="eselon_jabatan" class="form-control select-2" >
                            <option value=""></option>
                            <?php foreach ($data_eselon as $data_eselon1): ?>
                                <option value="<?=$data_eselon1->nama_eselon?>"><?=$data_eselon1->nama_eselon?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT Jabatan</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="tmt_jabatan" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="alert alert-info" style="text-transform: uppercase;"> Lokasi Kerja</div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Instansi Induk</label>
                    <div class="col-sm-9">
                        <textarea rows="2" style="resize: none; text-transform: uppercase;" id="instansi_jabatan" class="form-control" required>Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</textarea>
                        <p class="small"><i>Semuanya dengan Huruf Kapital</i></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Bidang/Bagian</label>
                    <div class="col-sm-9">
                        <!-- <input type="text" id="sub_kepegawaian" readonly class="form-control"  required> -->
                        <select  id="unor_induk_jabatan" class="form-control select-2" required readonly>
                            <option value=""></option>
                            <?php foreach ($data_satker as $data_satker1): ?>
                                <option value="<?=$data_satker1->nama_satker?>"><?=$data_satker1->nama_satker?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Subbidang/Seksi</label>
                    <div class="col-sm-9">
                        <select id="unor_jabatan" class="form-control select-2" readonly required>
                            <option value=""></option>
                            <?php foreach ($data_unit as $data_unit1): ?>
                                <option value="<?=$data_unit1->nama_unit?>"><?=$data_unit1->nama_unit?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="alert alert-info" style="text-transform: uppercase;"> Informasi Pelantikan</div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT Pelantikan</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="tmt_pelantikan" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pejabat Yang Menetapkan</label>
                    <div class="col-sm-9">
                        <input type="text" id="pejabat_jabatan" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Nomor SK</label>
                    <div class="col-sm-9">
                        <input type="text" id="nomor_jabatan" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal SK</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="tanggal_jabatan" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div id="add_error_messages">
                </div>
                <div class="form-group ">
                    <div class="col-md-3 col-md-offset-5">
                        <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_jabatan','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Edit jabatan  -->
<div id="edit_jabatan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Jabatan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                      <!-- <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label> -->
                      <div class="col-sm-9">
                        <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
                        <input type="hidden" id="edit_nama_lengkap" class="form-control" >
                        <input type="hidden" id="edit_nip" class="form-control" >
                        <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Jenis Jabatan</label>
                    <div class="col-sm-9">
                        <select type="text" id="edit_jenis_jabatan" class="form-contro select-2" >
                            <option value=""></option>
                            <?php foreach ($data_jenisjabatan as $data_jenisjabatan1): ?>
                                <option value="<?=$data_jenisjabatan1->nama_jenisjabatan?>"><?=$data_jenisjabatan1->nama_jenisjabatan?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Nama Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" id="edit_nama_jabatan" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Eselon</label>
                    <div class="col-sm-9">
                        <select type="text" id="edit_eselon_jabatan" class="form-control select-2" >
                            <option value=""></option>
                            <?php foreach ($data_eselon as $data_eselon2): ?>
                                <option value="<?=$data_eselon2->nama_eselon?>"><?=$data_eselon2->nama_eselon?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT Jabatan</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="edit_tmt_jabatan" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="alert alert-info" style="text-transform: uppercase;"> Lokasi Kerja</div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Instansi Induk</label>
                    <div class="col-sm-9">
                        <textarea rows="2" style="resize: none; text-transform: uppercase;" id="edit_instansi_jabatan" class="form-control" required>Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</textarea>
                        <p class="small"><i>Semuanya dengan Huruf Kapital</i></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Bidang/Bagian</label>
                    <div class="col-sm-9">
                        <!-- <input type="text" id="sub_kepegawaian" readonly class="form-control"  required> -->
                        <select  id="edit_unor_induk_jabatan" class="form-control select-2" required >
                            <option value=""></option>
                            <?php foreach ($data_satker as $data_satker2): ?>
                                <option value="<?=$data_satker2->nama_satker?>"><?=$data_satker2->nama_satker?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Subbidang/Seksi</label>
                    <div class="col-sm-9">
                        <select id="edit_unor_jabatan" class="form-control select-2"  required>
                            <option value=""></option>
                            <?php foreach ($data_unit as $data_unit2): ?>
                                <option value="<?=$data_unit2->nama_unit?>"><?=$data_unit2->nama_unit?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="alert alert-info" style="text-transform: uppercase;"> Informasi Pelantikan</div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT Pelantikan</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="edit_tmt_pelantikan" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pejabat Yang Menetapkan</label>
                    <div class="col-sm-9">
                        <input type="text" id="edit_pejabat_jabatan" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Nomor SK</label>
                    <div class="col-sm-9">
                        <input type="text" id="edit_nomor_jabatan" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal SK</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="edit_tanggal_jabatan" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div id="edit_error_messages">
                </div>
                <div class="form-group ">
                    <div class="col-md-3 col-md-offset-5">
                        <a  class="btn btn-primary btn-sm" onclick="editData_send('jabatan')"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
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
        case 'riwayat_jabatan':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
          data: {
            nip: $('#nip').val(),
            nama_lengkap: $('#nama_lengkap').val(),
            tingkat: $('#tingkat').val(),
            jenis: $('#jenis_jabatan').val(),
            nama_jabatan: $('#nama_jabatan').val(),
            instansi_induk: $('#instansi_jabatan').val(),
            unor_induk: $('#unor_induk_jabatan').val(),
            unor: $('#unor_jabatan').val(),
            tmt_jabatan: $('#tmt_jabatan').val(),
            tmt_pelantikan: $('#tmt_pelantikan').val(),
            eselon: $('#eselon_jabatan').val(),
            pejabat: $('#pejabat_jabatan').val(),
            nomor: $('#nomor_jabatan').val(),
            tanggal: $('#tanggal_jabatan').val(),
            admin: $('#admin').val()
        }
    }).done(function(response) {
      if (response.success) {
        setTimeout(function() { location.reload() },1500);
        swal('Sukses', 'Data Riwayat Jabatan berhasil ditambah.', 'success');
    } else {
        swal('Gagal', 'Data Riwayat Jabatan gagal ditambah.', 'error');
        $("#add_error_messages").html(response.error);
    }
});
    break;
}
}

function editData_send(model){
  switch (model) {
    case 'jabatan':
    $.ajax({
      type: 'POST',
      url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
      data: {
        tingkat: $('#edit_tingkat').val(),
        jenis: $('#edit_jenis_jabatan').val(),
        nama_jabatan: $('#edit_nama_jabatan').val(),
        instansi_induk: $('#edit_instansi_jabatan').val(),
        unor_induk: $('#edit_unor_induk_jabatan').val(),
        unor: $('#edit_unor_jabatan').val(),
        tmt_jabatan: $('#edit_tmt_jabatan').val(),
        tmt_pelantikan: $('#edit_tmt_pelantikan').val(),
        eselon: $('#edit_eselon_jabatan').val(),
        pejabat: $('#edit_pejabat_jabatan').val(),
        nomor: $('#edit_nomor_jabatan').val(),
        tanggal: $('#edit_tanggal_jabatan').val(),
        admin: $('#edit_admin').val()
    }
}).done(function(response) {
  if (response.success) {
    setTimeout(function() { location.reload() },1500);
    swal('Sukses', 'Data Riwayat Jabatan berhasil diperbaharui.', 'success');
} else {
    swal('Gagal', 'Data Riwayat Jabatan gagal diperbaharui.', 'error');
    $("#edit_error_messages").html(response.error);
}
});
break;
default:
}
}

function editData(model,id){
      switch (model) {
        case 'jabatan':
        $('#edit_jenis_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
        $('#edit_nama_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_instansi_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_unor_induk_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(6)").text()).trigger('change');
        $('#edit_unor_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(7)").text()).trigger('change');
        $('#edit_tmt_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(8)").text());
        $('#edit_tmt_pelantikan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(9)").text());
        $('#edit_eselon_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(10)").text()).trigger('change');
        $('#edit_pejabat_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(11)").text());
        $('#edit_nomor_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(12)").text());
        $('#edit_tanggal_jabatan').val($(".data-itemriwayatjabatan[data-id='" + id + "']>td:eq(13)").text());
        idGlob = id;
        break;
        default:

    }
}

function hapusRiwayat(method,id) {
    swal({
        title: 'Apakah Anda Yakin?',
        text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!',
        cancelButtonText: 'Batalkan!',
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
                    swal('Sukses', 'Data Riwayat berhasil dihapus.', 'success');
                } else swal('Gagal', 'Data Riwayat Gagal dihapus.', 'error');
            });
        } else {
            swal(
                 'Batal',
                 'Proses Hapus Data dibatalkan! :)',
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


function formatResultSelectionAdd (data) {
    if (data.gambar == null) 
    {
        data.gambar = 'no_image.jpg';
    }
    $("#jenis_jabatan").val(data.jenis_jabatan).change();
    $("#eselon_jabatan").val(data.eselon).change();
    $("#unor_induk_jabatan").val(data.satuan_kerja).change();
    $("#unor_jabatan").val(data.unit_kerja).change();

    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
}

function formatResultSelectionEdit (data) {
    if (data.gambar == null) 
    {
        data.gambar = 'no_image.jpg';
    }
    $("#edit_jenis_jabatan").val(data.jenis_jabatan).change();
    $("#edit_eselon_jabatan").val(data.eselon).change();
    $("#edit_unor_induk_jabatan").val(data.satuan_kerja).change();
    $("#edit_unor_jabatan").val(data.unit_kerja).change();
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
}

    $('#add_select2').on('change', function(){
        $('#add_select2').prop("disabled", true);

    });

    $('#tambah_jabatan').on('hidden.bs.modal', function () {
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
                        gambar: item.gambar,
                        eselon: item.eselon,
                        satuan_kerja : item.satuan_kerja,
                        unit_kerja : item.unit_kerja,
                        jenis_jabatan : item.jenis_jabatan
                    }
                })
            };
        },
        cache: true
    },
    escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
    placeholder: 'Pilih Pegawai',
    templateResult: formatResult,
    templateSelection: formatResultSelectionAdd,
    minimumInputLength: 1
});

$("#add_select2").on("select2:select", function (e) {
    $("#nama_lengkap").val($("#add_select2").text());
    $("#nip").val($("#add_select2").val());
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
          gambar: item.gambar,
          eselon: item.eselon,
          satuan_kerja : item.satuan_kerja,
          unit_kerja : item.unit_kerja,
          jenis_jabatan : item.jenis_jabatan
      }
  })
  };
},
cache: true
},
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResult,
templateSelection: formatResultSelectionEdit,
minimumInputLength: 1
});
$("#edit_select2").on("select2:select", function (e) {
    $("#edit_namalengkap").val($("#edit_select2").text());
    $("#edit_nip").val($("#edit_select2").val());
});

 

</script>
