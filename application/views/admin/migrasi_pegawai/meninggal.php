<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
        <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Riwayat Pegawai Meninggal</h3>
      </div>
      <div class="panel-body">
          <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_meninggal"><i class="glyphicon glyphicon-plus"></i> Tambah Data Pegawai Meninggal</a>
          <hr>
        <table style="min-width:100% !important;" id="tbl_riwayat_meninggal" class="display table table-bordered table-sorting datatable-Exnormal no-footer" role="grid">
          <thead>
            <tr class="data-item" data-id="">
              <th  rowspan="2" >No.</th>
              <th  rowspan="2" >NIP </th>
              <th  rowspan="2" >Nama </th>
              <th rowspan="2">Jenis Kelamin</th>
              <th rowspan="2" >Pangkat/Golongan/Ruang</th>
              <th rowspan="2" >Jabatan</th>
              <th colspan="6" class="text-center">Akta Meninggal</th>
              <th rowspan="2"></th>
            </tr>
            <tr class="data-item" data-id="">
                <th>Tanggal Wafat</th>
                <th>Tanggal Akta</th>
                <th>No. Akta</th>
                <th>Penandatangan</th>
                <th>Keterangan</th>
                <th>Lampiran</th>
            </tr>
          </thead>
          <tbody >
              <?php $i = 1; foreach ($daftar_meninggal as $data_meninggal): ?>
              <tr class="data-item" data-id="">
                <td><?=$i?></td>
                <td data-nip='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->nip?></td>
                <td data-namalengkap='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->nama_lengkap?></td>
                <td data-jeniskelamin='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->	jenis_kelamin?></td>
                <td data-pangkat='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->pangkat?></td>
                <td data-jabatan='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->jabatan?></td>
                <td data-tanggalwafat='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->tgl_wafat?></td>
                  <td data-tanggalakta='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->tgl_akta?></td>
                  <td data-noakta='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->no_akta?></td>
                  <td data-penandatangan='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->penandatangan?></td>
                  <td data-keterangan='<?=$data_meninggal->id_data?>' ><?=$data_meninggal->keterangan?></td>
                  <td><a target="_blank" href="<?=upload_url('informasi/').$data_meninggal->files?>"><?=$data_meninggal->files?></a></td>
                <td style="width: 1px">
                  <a style="" onclick="getData('<?=$data_meninggal->id_data?>')" data-toggle="modal" data-target="#edit_meninggal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>
                  <a style="" onclick="hapusRiwayat('<?=$data_meninggal->id_data?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
              <?php $i++; endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- END PANEL DEFAULT -->
  </div>
</div>

<div id="tambah_meninggal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg"><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Data Pegawai Meninggal</h4>
      </div>
      <div class="modal-body">
        <form id="add_form" class="form-horizontal" enctype="multipart/form-data">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
            <div class="col-sm-8">
              <select id="add_select2" class="form-control select2"  style="width: 100%"></select>
              <input type="hidden" id="nama_lengkap" name="nama_lengkap" class="form-control" >
              <input type="hidden" id="nip" name="nip" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Jenis Kelamin</label>
            <div class="col-sm-8">
              <select id="jenis_kelamin" name="jenis_kelamin" class="select2 form-control"  >
                <option value=""></option>
                  <option value="wanita">Perempuan</option>
                  <option value="pria">Laki-Laki</option>
              </select>
            </div>
          </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Pangkat/Golongan/Ruang</label>
                <div class="col-sm-8">
                    <select id="pangkat" name="pangkat" class="form-control select-2" >
                        <option value="">-Pangkat/Golongan/Ruang-</option>
                        <?php foreach ($data_golongan as $data_golongan1): ?>
                            <option data-id="<?=$data_golongan1->id_golongan?>" value="<?=$data_golongan1->nama_pangkat. ' - ' .$data_golongan1->nama_golongan. ' ' .$data_golongan1->nama_ruang?>"><?=$data_golongan1->nama_pangkat. ' - ' .$data_golongan1->nama_golongan. ' ' .$data_golongan1->nama_ruang?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Jabatan</label>
            <div class="col-sm-8">
<!--              <input type="text" id="jabatan" name="jabatan" class="form-control"  >-->
                <select type="text" id="jabatan" name="jabatan" class="form-control select-2" >
                    <option value=""></option>
                    <?php foreach ($data_jabatan as $data_jabatan2): ?>
                        <option value="<?=$data_jabatan2->nama_jabatan?>"><?=$data_jabatan2->nama_jabatan?></option>
                    <?php endforeach; ?>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tanggal Wafat</label>
            <div class="col-sm-8">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" >
                <input type="text" id="tgl_wafat" name="tgl_wafat" class="form-control" >
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Tanggal Akta</label>
            <div class="col-sm-8">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" >
                <input type="text" id="tgl_akta" name="tgl_akta" class="form-control" >
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">No. Akta</label>
                <div class="col-sm-8">
                    <input type="text"  id="no_akta" name="no_akta" class="form-control"  >
                </div>
            </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Penandatangan</label>
                <div class="col-sm-8">
                    <input type="text"  id="penandatangan" name="penandatangan" class="form-control"  >
                </div>
            </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text"  id="keterangan" name="keterangan" class="form-control"  >
                </div>
            </div>
            <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Lampiran</label>
                <div class="col-sm-8">
                    <input type="file" name="files" id="files" class="form-control">
                </div>
            </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm" onclick="addData_send();"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Kepegawaian  -->
<div id="edit_meninggal" class="modal fade " role="dialog">
  <div class="modal-dialog  modal-lg"><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Data Pegawai Meninggal</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="edit_form" enctype="multipart/form-data">
            <div id="error_edit" class="col-sm-8 col-sm-offset-3"></div>
            <br>
          <div class="form-group">
            <!-- <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label> -->
            <div class="col-sm-8">
              <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
              <input type="hidden" id="edit_nama_lengkap" name="nama_lengkap" class="form-control" >
              <input type="hidden" id="edit_nip" name="nip"  class="form-control" >
            </div>
          </div>
            <!--<div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                    <select id="edit_jenis_kelamin" name="jenis_kelamin" class="select2 form-control"  >
                        <option value=""></option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-Laki</option>
                    </select>
                </div>
            </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Pangkat/Golongan/Ruang</label>
            <div class="col-sm-8">
             <select id="edit_pangkat" name="pangkat" class="form-control select-2" required>
                <option value="">-Pangkat/Golongan/Ruang-</option>
                <?php foreach ($data_golongan as $data_golongan2): ?>
                  <option data-id="<?=$data_golongan2->id_golongan?>" value="<?=$data_golongan2->nama_pangkat. ' - ' .$data_golongan2->nama_golongan. ' ' .$data_golongan2->nama_ruang?>"  ><?=$data_golongan2->nama_pangkat. ' - ' .$data_golongan2->nama_golongan. ' ' .$data_golongan2->nama_ruang?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Jabatan</label>
                <div class="col-sm-8">
                    <input type="text"  id="edit_jabatan" name="jabatan"  class="form-control"  >
                </div>
            </div>-->
            <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Tanggal Wafat</label>
                <div class="col-sm-8">
                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" >
                        <input type="text"  id="edit_tgl_wafat" name="tgl_wafat"  class="form-control" >
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Tanggal Akta</label>
                <div class="col-sm-8">
                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" >
                        <input type="text"  id="edit_tgl_akta" name="tgl_akta"  class="form-control" >
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">No. Akta</label>
                <div class="col-sm-8">
                    <input type="text"  id="edit_no_akta" name="no_akta"  class="form-control"  >
                </div>
            </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Penandatangan</label>
                <div class="col-sm-8">
                    <input type="text"  id="edit_penandatangan" name="penandatangan"  class="form-control"  >
                </div>
            </div>
            <div class="form-group">
                <label for="bahan"  class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text"  id="edit_keterangan" name="keterangan"  class="form-control"  >
                </div>
            </div>
            <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Lampiran</label>
                <div class="col-sm-8">
                    <input type="file" name="files" id="edit_files" class="form-control">
                </div>
            </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm" id="editData_send"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN -->
  <script>
    var idGlob;
    var valGlob;

    var select2Options = {
        width: 'resolve',
        placeholder: "- Pilih -",
        triggerChange: true,
        allowClear: true
    };

    $('select').select2(select2Options);

    function addData_send() {
        var form = $('#add_form')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('MigrasiPegawai/addData/')?>',
            data: formData,
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
        }).done(function(response) {
            if (response.success) {
                // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                $('#tambah_meninggal').modal('hide');
                swal('Sukses', 'Data berhasil disimpan', 'success');
                setTimeout(function() { location.reload() },1500);
            } else {
                $('.error_eselon').html(response.error);
                swal('Gagal', 'Data gagal disimpan', 'error');
                $('.error_eselon').html(response.error);
            }
        });

    }

    function editData_send(id) {
        var form = $('#edit_form')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('MigrasiPegawai/editData/')?>'+id,
            data: formData,
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
        }).done(function(response) {
            if (response.success) {
                // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                swal({
                        type: 'success',
                        title: 'Sukses',
                        text: 'Data berhasil disimpan',
                    },
                    function(){
                        $('#edit_meninggal').modal('hide');
                        location.reload();
                    });
            } else {
                $('#error_edit').html(response.error);
                swal('Gagal', 'Data gagal disimpan', 'error');
            }
        });
    }

    function getData(id){
        $.post("<?=admin_url('MigrasiPegawai/getData/')?>"+id, function(result){
            if (result.success) {
                $("#edit_tgl_wafat").val(result.data.tgl_wafat);
                $("#edit_tgl_akta").val(result.data.tgl_akta);
                $("#edit_no_akta").val(result.data.no_akta);
                $("#edit_penandatangan").val(result.data.penandatangan);
                $("#edit_keterangan").val(result.data.keterangan);
                $("#editData_send").attr("onclick","editData_send("+result.data.id_data+")");
            }
        });
    }

    function hapusRiwayat(id) {
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
                    url: '<?=admin_url('MigrasiPegawai/hapusMeninggal/')?>'+id
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
    function formatResultSelectionAdd (data) {
      if (data.gambar == null)
        {data.gambar = 'no_image.jpg';
    }
    $("#jenis_kelamin").val(data.jenis_kelamin).change();
    $("#pangkat").val(data.jenis_pangkat).change();
    $("#jabatan").val(data.nama_jabatan).change();
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
  }

  function formatResultSelectionEdit (data) {
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

    $('#tambah_meninggal').on('hidden.bs.modal', function () {
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
              jenis_kelamin: item.jenis_kelamin,
              jenis_pangkat: item.jenis_pangkat,
              nama_jabatan: item.nama_jabatan
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
              gambar: item.gambar,
              satuan_kerja: item.satuan_kerja,
              unit_kerja: item.unit_kerja,
              jenis_pangkat: item.jenis_pangkat
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
    $("#edit_nama_lengkap").val($("#edit_select2").text());
    $("#edit_nip").val($("#edit_select2").val());
  });

  // var select2Options = { width: 'resolve',
  //       placeholder: "- Pilih -",
  //       triggerChange: true,
  //       allowClear: true};

  // var getUnker = '<?=admin_url('DataPegawai/getUnkerBySatker/')?>'+':parentId:';

  // var cascadLoading = new Select2Cascade($('#sub_kepegawaian'), $('#unit_kerja_kepegawaian'), getUnker, select2Options);
  //     cascadLoading.then( function(parent, child, items) {
  //       // Open the child listbox immediately
  //       // child.select2('open');
  // });

</script>
