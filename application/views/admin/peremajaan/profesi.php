<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Verikasi Data Profesi</h3>
            </div>
            <div class="panel-body">
                <table id="tbl_riwayat_profesi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama Pegawai</th>
                            <th> Profesi </th>
                            <th> Penyelenggara</th>
                            <th> Tahun Lulus</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_profesi_notverified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_profesi_notverified as $riwayat_profesi_notverified): ?>
                                <tr class="data-itemriwayatprofesi" data-id="<?=$riwayat_profesi_notverified->id_riwayat?>">
                                    <td><?=$i?></td>
                                    <td><?=$riwayat_profesi_notverified->nip?></td>
                                    <td><?=$riwayat_profesi_notverified->nama_lengkap?></td>
                                    <td><?=$riwayat_profesi_notverified->profesi?></td>
                                    <td><?=$riwayat_profesi_notverified->penyelenggara?></td>
                                    <td><?=$riwayat_profesi_notverified->tahun_lulus?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#edit_profesi" onclick="editData('profesi',<?=$riwayat_profesi_notverified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a href="#" onclick="hapusRiwayat('profesi',<?=$riwayat_profesi_notverified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
                <h3 class="panel-title">Riwayat Profesi</h3>

            </div>
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_profesi"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                <hr>
                <table id="tbl_riwayat_profesi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama Pegawai</th>
                            <th> Profesi </th>
                            <th> Penyelenggara</th>
                            <th> Tahun Lulus</th>
                            <th> Admin</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_profesi_verified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_profesi_verified as $riwayat_profesi_verified): ?>
                                <tr class="data-itemriwayatprofesi" data-id="<?=$riwayat_profesi_verified->id_riwayat?>">
                                    <td><?=$i?></td>
                                    <td><?=$riwayat_profesi_verified->nip?></td>
                                    <td><?=$riwayat_profesi_verified->nama_lengkap?></td>
                                    <td><?=$riwayat_profesi_verified->profesi?></td>
                                    <td><?=$riwayat_profesi_verified->penyelenggara?></td>
                                    <td><?=$riwayat_profesi_verified->tahun_lulus?></td>
                                    <td><?=$riwayat_profesi_verified->admin?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#edit_profesi" onclick="editData('profesi',<?=$riwayat_profesi_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a href="#" onclick="hapusRiwayat('profesi',<?=$riwayat_profesi_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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

<div id="tambah_profesi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Profesi</h4>
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
                        <label  class="col-sm-3 control-label">Jenis Profesi</label>
                        <div class="col-sm-9">
                            <input id="jenis_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input id="penyelenggara_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Lulus</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tahun_profesi" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_profesi','');" ><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profesi -->
<div id="edit_profesi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Profesi</h4>
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
                        <label  class="col-sm-3 control-label">Jenis Profesi</label>
                        <div class="col-sm-9">
                            <input id="edit_jenis_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input id="edit_penyelenggara_profesi" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Lulus</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tahun_profesi" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_profesi');" ><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
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
            case 'riwayat_profesi':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
                data: {
                    nip: $('#nip').val(),
                    nama_lengkap: $('#nama_lengkap').val(),
                    profesi: $('#jenis_profesi').val(),
                    penyelenggara: $('#penyelenggara_profesi').val(),
                    tahun_lulus: $('#tahun_profesi').val(),
                    admin: $('#admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat Profesi berhasil ditambah.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat Profesi gagal ditambah.', 'error');
                }
            });
            break;
        }
    }

    function editData_send(model){
        switch (model) {
            case 'riwayat_profesi':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    profesi: $('#edit_jenis_profesi').val(),
                    penyelenggara: $('#edit_penyelenggara_profesi').val(),
                    tahun_lulus: $('#edit_tahun_profesi').val(),
                    admin: $('#edit_admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat Kepegawaian berhasil diperbaharui.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat Kepegawaian gagal diperbaharui.', 'error');
                }
            });
            break;
            default:
        }
    }

    function editData(model,id){
        switch (model) {
            case 'profesi':
            $('#edit_jenis_profesi').val($(".data-itemriwayatprofesi[data-id='" + id + "']>td:eq(3)").text());
            $('#edit_penyelenggara_profesi').val($(".data-itemriwayatprofesi[data-id='" + id + "']>td:eq(4)").text());
            $('#edit_tahun_profesi').val($(".data-itemriwayatprofesi[data-id='" + id + "']>td:eq(5)").text());
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
    function formatResultSelection (data) {
        if (data.gambar == null) 
            {data.gambar = 'no_image.jpg';
    }
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
}

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
