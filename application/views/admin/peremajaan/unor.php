<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <!--<div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Verifikasi Data PNS Unor</h3>
            </div>
            <div class="panel-body">
                <table id="tbl_riwayat_unor" style="min-width: 100%;" class="table table-bordered  table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama Pegawai</th>
                            <th> Instansi </th>
                            <th> Nama Unor</th>
                            <th> Nomor SK</th>
                            <th> Tanggal SK</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_unor_notverified != NULL): ?>
                        <?php $i=1; foreach ($riwayat_unor_notverified as $riwayat_unor_notverified): ?>
                            <tr class="data-itemriwayatunor" data-id="<?=$riwayat_unor_notverified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_unor_notverified->nip?></td>
                                <td><?=$riwayat_unor_notverified->nama_lengkap?></td>
                                <td><?=$riwayat_unor_notverified->instansi?></td>
                                <td><?=$riwayat_unor_notverified->nama_unor?></td>
                                <td><?=$riwayat_unor_notverified->no_sk?></td>
                                <td><?=$riwayat_unor_notverified->tanggal_sk?></td>
                                <td align="center">
                                    <a data-toggle="modal" data-target="#edit_unor" onclick="editData('unor',<?=$riwayat_unor_notverified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                    <a href="#" onclick="hapusRiwayat('unor',<?=$riwayat_unor_notverified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Riwayat PNS Unor</h3>
            </div>
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_unor"><i class="glyphicon glyphicon-plus"></i> Tambah Data PNS Unor</a>
                <hr>
                <table id="tbl_riwayat_unor" style="min-width: 100%;" class="table table-bordered  table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th rowspan="2"> No.</th>
                            <th rowspan="2"> NIP</th>
                            <th rowspan="2"> Nama </th>
                            <th rowspan="2"> Instansi </th>
                            <th rowspan="2"> Bidang/Bagian</th>
                            <th colspan="2"  class="text-center"> Surat Keputusan</th>
                            <th rowspan="2"> Admin </th>
                            <th rowspan="2"> </th>
                        </tr>
                        <tr>
                            <th> Nomor </th>
                            <th> Tanggal </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_unor_verified != NULL): ?>
                        <?php $i=1; foreach ($riwayat_unor_verified as $riwayat_unor_verified): ?>
                            <tr class="data-itemriwayatunor" data-id="<?=$riwayat_unor_verified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_unor_verified->nip?></td>
                                <td><?=$riwayat_unor_verified->nama_lengkap?></td>
                                <td><?=$riwayat_unor_verified->instansi?></td>
                                <td><?=$riwayat_unor_verified->nama_unor?></td>
                                <td><?=$riwayat_unor_verified->no_sk?></td>
                                <td><?=$riwayat_unor_verified->tanggal_sk?></td>
                                <td><?=$riwayat_unor_verified->admin?></td>
                                <td align="center">
                                    <a data-toggle="modal" data-target="#edit_unor" onclick="editData('unor',<?=$riwayat_unor_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                    <a href="#" onclick="hapusRiwayat('unor',<?=$riwayat_unor_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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

<!-- Tambah PNS Unor -->
<div id="tambah_unor" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data PNS Unor</h4>
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
                        <label  class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <textarea style="resize: none; text-transform: uppercase;" id="instansi_unor" class="form-control" readonly>Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bidang/Bagian</label>
                        <div class="col-sm-9">
                            <select id="unor_unor" class="form-control select-2">
                                <option value=""></option>
                                <?php foreach ($data_satker as $satker2): ?>
                                    <option value="<?=$satker2->nama_satker?>"><?=$satker2->nama_satker?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input id="no_sk_unor" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_sk_unor" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_unor','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit PNS Unor -->
<div id="edit_unor" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data PNS Unor</h4>
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
                        <label  class="col-sm-3 control-label">Instansi</label>
                        <div class="col-sm-9">
                            <textarea style="resize: none; text-transform: uppercase;" id="edit_instansi_unor" class="form-control" readonly>Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bidang/Bagian</label>
                        <div class="col-sm-9">
                            <select id="edit_unor_unor" class="form-control select2-2">
                                <option value=""></option>
                                <?php foreach ($data_satker as $satker3): ?>
                                    <option value="<?=$satker3->nama_satker?>"><?=$satker3->nama_satker?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_unor" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_sk_unor" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_unor');" ><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
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
            case 'riwayat_unor':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
                data: {
                    nip: $('#nip').val(),
                    nama_lengkap: $('#nama_lengkap').val(),
                    instansi: $('#instansi_unor').val(),
                    nama_unor: $('#unor_unor').val(),
                    no_sk: $('#no_sk_unor').val(),
                    tanggal_sk: $('#tanggal_sk_unor').val(),
                    admin: $('#admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat unor berhasil ditambah.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat unor gagal ditambah.', 'error');
                }
            });
            break;
        }
    }

    function editData_send(model){
        switch (model) {
            case 'riwayat_unor':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    instansi: $('#edit_instansi_unor').val(),
                    nama_unor: $('#edit_unor_unor').val(),
                    no_sk: $('#edit_no_sk_unor').val(),
                    tanggal_sk: $('#edit_tanggal_sk_unor').val(),
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
            case 'unor':
            $('#edit_instansi_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(3)").text());
            $('#edit_unor_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(4)").text()).trigger('change');
            $('#edit_no_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_tanggal_sk_unor').val($(".data-itemriwayatunor[data-id='" + id + "']>td:eq(6)").text());
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

    $('#add_select2').on('change', function(){
        $('#add_select2').prop("disabled", true);

    });

    $('#tambah_unor').on('hidden.bs.modal', function () {
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
