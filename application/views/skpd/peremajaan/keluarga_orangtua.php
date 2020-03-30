<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Keluarga - Orang Tua</h3>
      </div>
      <div class="panel-body">
          <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_ortu"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
          <hr>
        <table  id="tbl_ortu" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
            <thead>
                <tr >
                    <th>No.</th>
                    <th>Status (Kandung/Angkat) </th>
                    <th>Nama</th>
                    <th>Dari Pegawai</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Pekerjaan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($data_orangtua != NULL): ?>
                    <?php $i = 1; ?>
                    <?php foreach ($data_orangtua as $data_orangtua): ?>
                        <tr class="data-itemorangtua" data-id="<?=$data_orangtua->id_orangtua?>">
                            <td><?=$i?></td>
                            <td><?=$data_orangtua->status_ortu?></td>
                            <td><?=$data_orangtua->nama?></td>
                            <td><?=$data_orangtua->nama_lengkap?></td>
                            <td><?=$data_orangtua->ttl?></td>
                            <td><?=$data_orangtua->pekerjaan?></td>
                            <td>
                                <a data-toggle="modal"  onclick="editData('data_ortu','<?=$data_orangtua->id_orangtua?>');" data-target="#edit_ortu" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                <a href="#" onclick="hapusData('orangtua','<?=$data_orangtua->id_orangtua?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
        </div>
      </div>
    </div>
    <!-- END PANEL DEFAULT -->
  </div>
</div>

<div id="tambah_ortu" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Orang Tua</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-3 control-label" >Nama Pegawai</label>
                      <div class="col-sm-9">
                        <select id="add_select2" class="form-control select2"  style="width: 100%"></select>
                        <input type="hidden" id="nama_lengkap" class="form-control" >
                        <input type="hidden" id="nip" class="form-control" >
                        <input type="hidden" id="sub_instansi" class="form-control" >
                        <input type="hidden" id="admin" value="<?=$this->session->fullname?>" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status (Kandung/Angkat)</label>
                        <div class="col-sm-9">
                            <input type="text" id="status_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="ttl_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="pekerjaan_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('data_ortu','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Istri  -->
<div id="edit_ortu" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Orang Tua</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                      <div class="col-sm-9">
                        <input type="hidden" id="edit_nama_lengkap" class="form-control" >
                        <input type="hidden" id="edit_nip" class="form-control" >
                        <input type="hidden" id="edit_sub_instansi" class="form-control" >
                        <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Status (Kandung/Angkat)</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_status_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_ttl_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pekerjaan_ortu" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('data_ortu');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <!-- END MAIN -->
  <script>
    var idGlob;
    var valGlob;

   function addData_send(tipe, jenis_diklat) {
    switch (tipe) {
      case 'data_ortu' :
      $.ajax({
        type: 'POST',
        url: '<?=skpd_url('PeremajaanData/addData/')?>'+tipe,
        data: {
          nip: $('#nip').val(),
          nama_lengkap: $('#nama_lengkap').val(),
          sub_instansi: $('#sub_instansi').val(),
          status_ortu: $('#status_ortu').val(),
          nama: $('#nama_ortu').val(),
          ttl: $('#ttl_ortu').val(),
          pekerjaan: $('#pekerjaan_ortu').val(),
          admin: $('#admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data Orang Tua berhasil ditambah.', 'success');
        } else {
          swal('Gagal', 'Data Orang Tua gagal ditambah.', 'error');
      // $('#tambah_eselon').modal('hide');
      // $('.error_pasangan').html(response.error);
    }
  });
      break;
    }
  }

  function editData_send(model){
    switch (model) {
      case 'data_ortu':
      $.ajax({
        type: 'POST',
        url: '<?=skpd_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
        data: {
          status_ortu: $('#edit_status_ortu').val(),
          nama: $('#edit_nama_ortu').val(),
          ttl: $('#edit_ttl_ortu').val(),
          pekerjaan: $('#edit_pekerjaan_ortu').val(),
          sub_instansi: $('#edit_sub_instansi').val(),
          admin: $('#admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data Orang Tua berhasil diperbaharui.', 'success');
        } else {
          swal('Gagal', 'Data Orang Tua gagal diperbaharui.', 'error');
        }
      });
      break;
    }
  }

  function editData(model,id){
    switch (model) {
      case 'data_ortu':
        $('#edit_status_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(1)").text());
        $('#edit_nama_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(2)").text());
        $('#edit_ttl_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_pekerjaan_ortu').val($(".data-itemorangtua[data-id='" + id + "']>td:eq(5)").text());
      idGlob = id;
      break;
      default:

    }
  }

  function hapusData(method,id) {
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
          url: '<?=skpd_url('PeremajaanData/hapusData/')?>'+method+'/'+id
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data  berhasil dihapus.', 'success');
          } else swal('Gagal', 'Data  Gagal dihapus.', 'error');
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
  function formatResultSelectionAdd (data) {
    if (data.gambar == null) 
    {
      data.gambar = 'no_image.jpg';
    }
    $("#sub_instansi").val(data.satuan_kerja);
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
  }

  function formatResultSelectionEdit (data) {
    if (data.gambar == null) 
    {
      data.gambar = 'no_image.jpg';
    }

    $("#edit_sub_instansi").val(data.satuan_kerja);

    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
  }

  $("#add_select2").select2({
    ajax: {
      url: "<?=skpd_url('PeremajaanData/getDataPegawaiAjax/')?>",
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
              satuan_kerja: item.satuan_kerja
            }
          })
        };
      },
      cache: true
    },
    escapeMarkup: function (markup) { return markup; }, 
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
      url: "<?=skpd_url('PeremajaanData/getDataPegawaiAjax/')?>",
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
              satuan_kerja: item.satuan_kerja
            }
          })
        };
      },
      cache: true
    },
    escapeMarkup: function (markup) { return markup; }, 
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
