<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Pasangan Suami Istri</h3>

      </div>
      <div class="panel-body">
          <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pasangan"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
          <hr>
        <table  id="tbl_pasangan" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable ">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pegawai</th>
                    <th>Jenis </th>
                    <th>Nama</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Nomor Akta Nikah</th>
                    <th>Tanggal Akta Nikah</th>
                    <th>Pekerjaan</th>
                    <th>Keterangan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($data_pasangan != NULL): ?>
                    <?php $i = 1; foreach ($data_pasangan as $data_pasangan): ?>
                        <tr class="data-itempasangan" data-id="<?=$data_pasangan->id_pasangan?>">
                            <td><?=$i?></td>
                            <td><?=$data_pasangan->nama_lengkap?></td>
                            <td><?=$data_pasangan->jenis?></td>
                            <td><?=$data_pasangan->nama?></td>
                            <td><?=$data_pasangan->ttl?></td>
                            <td><?=$data_pasangan->akta_nikah?></td>
                            <td><?=$data_pasangan->tanggal_nikah?></td>
                            <td><?=$data_pasangan->pekerjaan?></td>
                            <td><?=($data_pasangan->meninggal == '0') ? 'Hidup' : 'Meninggal'?></td>
                            <td>
                                <a data-toggle="modal" data-target="#edit_pasangan" class="btn btn-primary btn-xs" onclick="editData('data_pasangan','<?=$data_pasangan->id_pasangan?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                <a onclick="hapusData('pasangan','<?=$data_pasangan->id_pasangan?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    <!-- END PANEL DEFAULT -->
  </div>
</div>

<!-- Tambah Istri/Suami ? -->
<div id="tambah_pasangan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Istri/Suami</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-3 control-label" >Nama Pegawai</label>
                      <div class="col-sm-9">
                        <select id="add_select2" class="form-control select2"  style="width: 100%"></select>
                        <input type="hidden" id="nip" class="form-control" >
                        <input type="hidden" id="sub_instansi" class="form-control" >
                        <input type="hidden" id="nama_lengkap" class="form-control" >
                        <input type="hidden" id="admin" value="<?=$this->session->fullname?>" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Jenis</label>
                        <div class="col-sm-9">
                            <select id="jenis_pasangan" class="form-control select-2" >
                              <option value=""></option>
                              <option value="Suami">Suami</option>
                              <option value="Istri">Istri</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">No. Akta Nikah</label>
                        <div class="col-sm-9">
                            <input type="text" id="akta_nikah" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Tanggal Akta</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                <input type="text" id="tanggal_nikah" class="form-control" required>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="ttl_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="pekerjaan_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('data_pasangan','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Istri  -->
<div id="edit_pasangan" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Istri/Suami</h4>
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
                        <label for="bahan"  class="col-sm-3 control-label">Jenis</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_pasangan" class="form-control select-2" >
                              <option value=""></option>
                              <option value="Suami">Suami</option>
                              <option value="Istri">Istri</option>
                            </select>
                        </div>
                    </div>                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">No. Akta Nikah</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_akta_nikah" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan"  class="col-sm-3 control-label">Tanggal Akta</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                                <input type="text" id="edit_tanggal_nikah" class="form-control" required>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_ttl_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_pekerjaan_pasangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('data_pasangan');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
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
        case 'data_pasangan':
        $.ajax({
          type: 'POST',
          url: '<?=skpd_url('PeremajaanData/addData/')?>'+tipe,
          data: {
            nip: $('#nip').val(),
            nama_lengkap: $('#nama_lengkap').val(),
            sub_instansi: $('#sub_instansi').val(),
            jenis: $('#jenis_pasangan').val(),
            akta_nikah: $('#akta_nikah').val(),
            tanggal_nikah: $('#tanggal_nikah').val(),
            nama: $('#nama_pasangan').val(),
            ttl: $('#ttl_pasangan').val(),
            pekerjaan: $('#pekerjaan_pasangan').val(),
            admin: $('#admin').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data Pasangan berhasil ditambah.', 'success');
          } else {
            swal('Gagal', 'Data Pasangan Kepegawaian gagal ditambah.', 'error');
          }
        });
        break;
      }
    }

    function editData_send(model){
      switch (model) {
        case 'data_pasangan':
        $.ajax({
          type: 'POST',
          url: '<?=skpd_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
          data: {
            jenis: $('#edit_jenis_pasangan').val(),
            nama: $('#edit_nama_pasangan').val(),
            sub_instansi: $('#edit_sub_instansi').val(),
            akta_nikah: $('#edit_akta_nikah').val(),
            tanggal_nikah: $('#edit_tanggal_nikah').val(),
            ttl: $('#edit_ttl_pasangan').val(),
            pekerjaan: $('#edit_pekerjaan_pasangan').val(),
            admin : $('#edit_admin').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data Pasangan berhasil diperbaharui.', 'success');
          } else {
            swal('Gagal', 'Data Pasangan gagal diperbaharui.', 'error');
          }
        });
        break;
        default:
      }
    }

    function editData(model,id){
      switch (model) {
        case 'data_pasangan':
        $('#edit_jenis_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(2)").text()).change();
        $('#edit_nama_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(3)").text());
        $('#edit_ttl_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(4)").text());
        $('#edit_akta_nikah').val($(".data-itempasangan[data-id='" + id + "']>td:eq(5)").text());
        $('#edit_tanggal_nikah').val($(".data-itempasangan[data-id='" + id + "']>td:eq(6)").text());
        $('#edit_pekerjaan_pasangan').val($(".data-itempasangan[data-id='" + id + "']>td:eq(7)").text());
        idGlob = id;
        break;
        default:

      }
    }

    function hapusData(method,id) {
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
