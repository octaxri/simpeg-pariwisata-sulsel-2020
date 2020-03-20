<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <!--<div class="panel">
      <div class="panel-heading panel-danger">
        <h3 class="panel-title font-white">Verifikasi Data Mutasi</h3>
      </div>
      <div class="panel-body">
        <table id="tbl_riwayat_mutasi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
            <thead>
                <tr class="data-item" data-id="">
                    <th rowspan="2">No.</th>
                    <th rowspan="2">NIP</th>
                    <th rowspan="2">Nama Pegawai</th>
                    <th rowspan="2">Jabatan </th>
                    <th rowspan="2">Pangkat/Golongan/Ruang </th>
                    <th rowspan="2">TMT</th>
                    <th colspan="3" class="text-center">Surat Keputusan</th>
                    <th rowspan="2"></th>
                </tr>
                <tr>
                    <th>Pejabat</th>
                    <th>Nomor</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($riwayat_mutasi_notverified != NULL): ?>
                    <?php foreach ($riwayat_mutasi_notverified as $riwayat_mutasi_notverified): ?>
                        <?php $i = 1; ?>
                        <tr class="data-itemriwayatmutasi" data-id="<?=$riwayat_mutasi_notverified->id_riwayat?>">
                            <td><?=$i?></td>
                            <td><?=$riwayat_mutasi_notverified->nip?></td>
                            <td><?=$riwayat_mutasi_notverified->nama_lengkap?></td>
                            <td><?=$riwayat_mutasi_notverified->jabatan?></td>
                            <td><?=$riwayat_mutasi_notverified->pangkat?></td>
                            <td><?=$riwayat_mutasi_notverified->tmt?></td>
                            <td><?=$riwayat_mutasi_notverified->pejabat?></td>
                            <td><?=$riwayat_mutasi_notverified->nomor?></td>
                            <td><?=$riwayat_mutasi_notverified->tanggal?></td>
                            <td align="center">
                                <a data-toggle="modal" onclick="editData('mutasi',<?=$riwayat_mutasi_notverified->id_riwayat?>);" data-target="#edit_mutasi" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                <a onclick="hapusRiwayat('mutasi',<?=$riwayat_mutasi_notverified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
      </div>
    </div>-->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Riwayat Mutasi</h3>

      </div>
      <div class="panel-body">
          <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_mutasi"><i class="glyphicon glyphicon-plus"></i> Tambah Data Mutasi</a>
          <hr>
        <table id="tbl_riwayat_mutasi" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
            <thead>
                <tr class="data-item" data-id="">
                    <th rowspan="2">No.</th>
                    <th rowspan="2">NIP</th>
                    <th rowspan="2">Nama </th>
                    <th rowspan="2">Jabatan </th>
                    <th rowspan="2">Pangkat/Golongan/Ruang </th>
                    <th rowspan="2">Tanggal TMT</th>
                    <th colspan="3" class="text-center">Surat Keputusan</th>
                    <th rowspan="2" >Admin</th>
                    <th rowspan="2"></th>
                </tr>
                <tr>
                    <th>Pejabat Yang Menetapkan</th>
                    <th>Nomor</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($riwayat_mutasi_verified != NULL): ?>
                        <?php $i = 1; ?>
                    <?php foreach ($riwayat_mutasi_verified as $riwayat_mutasi_verified): ?>
                        <tr class="data-itemriwayatmutasi" data-id="<?=$riwayat_mutasi_verified->id_riwayat?>">
                            <td><?=$i?></td>
                            <td><?=$riwayat_mutasi_verified->nip?></td>
                            <td><?=$riwayat_mutasi_verified->nama_lengkap?></td>
                            <td><?=$riwayat_mutasi_verified->jabatan?></td>
                            <td><?=$riwayat_mutasi_verified->pangkat?></td>
                            <td><?=$riwayat_mutasi_verified->tmt?></td>
                            <td><?=$riwayat_mutasi_verified->pejabat?></td>
                            <td><?=$riwayat_mutasi_verified->nomor?></td>
                            <td><?=$riwayat_mutasi_verified->tanggal?></td>
                            <td><?=$riwayat_mutasi_verified->admin?></td>
                            <td align="center">
                                <a data-toggle="modal" onclick="editData('mutasi',<?=$riwayat_mutasi_verified->id_riwayat?>);" data-target="#edit_mutasi" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                <a onclick="hapusRiwayat('mutasi',<?=$riwayat_mutasi_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
<div id="tambah_mutasi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Mutasi</h4>
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
                        <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" id="jabatan_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/<br>Ruang</label>
                        <div class="col-sm-9">
                            <input type="text" id="pangkat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal TMT</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tmt_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
                        <div class="col-sm-9">
                            <input type="text" id="pejabat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input type="text" id="nomor_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_mutasi','')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit jabatan  -->
<div id="edit_mutasi" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Mutasi</h4>
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
                        <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_jabatan_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/<br>Ruang</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pangkat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal TMT</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tmt_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pejabat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pejabat_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nomor_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_mutasi" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('mutasi')"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
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
        case 'riwayat_mutasi':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
          data: {
            nip: $('#nip').val(),
            nama_lengkap: $('#nama_lengkap').val(),
            jabatan: $('#jabatan_mutasi').val(),
            pangkat: $('#pangkat_mutasi').val(),
            tmt: $('#tmt_mutasi').val(),
            pejabat: $('#pejabat_mutasi').val(),
            nomor: $('#nomor_mutasi').val(),
            tanggal: $('#tanggal_mutasi').val(),
            admin: $('#admin').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data Riwayat Mutasi berhasil ditambah.', 'success');
          } else {
            swal('Gagal', 'Data Riwayat Mutasi gagal ditambah.', 'error');
          }
        });
        break;
      }
    }

    function editData_send(model){
      switch (model) {
        case 'mutasi':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
          data: {
            jabatan: $('#edit_jabatan_mutasi').val(),
            pangkat: $('#edit_pangkat_mutasi').val(),
            tmt: $('#edit_tmt_mutasi').val(),
            pejabat: $('#edit_pejabat_mutasi').val(),
            nomor: $('#edit_nomor_mutasi').val(),
            tanggal: $('#edit_tanggal_mutasi').val(),   
            admin: $('#edit_admin').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data Riwayat Mutasi berhasil diperbaharui.', 'success');
          } else {
            swal('Gagal', 'Data Riwayat Mutasi gagal diperbaharui.', 'error');
          }
        });
        break;
        default:
      }
    }

    function editData(model,id){
      switch (model) {
        case 'mutasi':
        $('#edit_jabatan_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_pangkat_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_tmt_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_pejabat_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(6)").text());
        $('#edit_nomor_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(7)").text());
        $('#edit_tanggal_mutasi').val($(".data-itemriwayatmutasi[data-id='" + id + "']>td:eq(8)").text())
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

    $('#tambah_mutasi').on('hidden.bs.modal', function () {
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
