<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Riwayat Kenaikan Pangkat</h3>
      </div>
      <div class="panel-body">
          <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pangkat"><i class="glyphicon glyphicon-plus"></i> Tambah Data Kenaikan Pangkat</a>
          <hr>
        <table style="min-width:100% !important;" id="tbl_riwayat_kenaikan_pangkat" class="display table table-bordered table-sorting datatable-Exnormal no-footer" role="grid">
            <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">NIP</th>
                <th rowspan="2">Nama</th>
                <th rowspan="2">Jenis Kelamin</th>
                <th colspan="2" class="text-center">Pangkat Sebelumnya</th>
                <th colspan="2" class="text-center">Pangkat Sesudah Kenaikan</th>
                <th rowspan="2"> </th>
            </tr>
            <tr>
                <th>Pangkat/Golongan/Ruang</th>
                <th>TMT</th>
                <th>Pangkat/Golongan/Ruang</th>
                <th>TMT</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach ($data_kenaikanpangkat as $data_kenaikanpangkat) { ?>
                <tr class="data-kenaikanpangkat" data-id="<?=$data_kenaikanpangkat->id_data?>">
                    <td class="text-center"><?=$i?></td>
                    <td ><?=$data_kenaikanpangkat->nip?></td>
                    <td ><?=$data_kenaikanpangkat->nama_lengkap?></td>
                    <td ><?=$data_kenaikanpangkat->jenis_kelamin?></td>
                    <td ><?=$data_kenaikanpangkat->spangkat?></td>
                    <td ><?=$data_kenaikanpangkat->stmt?></td>
                    <td ><?=$data_kenaikanpangkat->kpangkat?></td>
                    <td ><?=$data_kenaikanpangkat->ktmt?></td>
                    <td style="width: 1px">
                        <a data-toggle="modal" data-target="#edit_pangkat" class="btn btn-primary btn-xs" onclick="editKenaikanPangkat('<?=$data_kenaikanpangkat->id_data?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        <a class="btn btn-danger btn-xs" onclick="hapusRiwayat('kenaikanpangkat', '<?=$data_kenaikanpangkat->id_data?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
      </div>
    </div>
    <!-- END PANEL DEFAULT -->
  </div>
</div>

<!-- Tambah Pangkat -->
<div id="tambah_pangkat" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center" >Tambah Data Kenaikan Pangkat</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="add_select2" class="form-control"  style="width: 100%"></select>
                            <input type="hidden" id="add_namalengkap" class="form-control" >
                            <input type="hidden" id="add_nip" class="form-control" >
                        </div>
                    </div>
                    <!-- <div class="form-group"> -->
                    <!-- <label for="bahan" class="col-sm-3 control-label">NIP</label> -->
                    <!-- <div class="col-sm-9"> -->
                    <!-- <input type="hidden" id="add_nip" class="form-control" > -->
                    <!-- </div> -->
                    <!-- </div> -->
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select id="add_jeniskelamin" class="form-control select2" >
                                <option value="">-Daftar Pangkat-</option>
                                <option value="wanita">Perempuan</option>
                                <option value="pria">Laki-Laki</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/Ruang (Saat Ini)</label>
                        <div class="col-sm-9">
<!--                            <input id="add_spangkat" class="form-control " >-->
                            <select id="add_spangkat" class="form-control select2">
                                <option value="">-Pangkat/Golongan/Ruang-</option>
                                <?php foreach ($data_golongan as $data_golongan2): ?>
                                    <option value="<?=$data_golongan2->nama_pangkat?> - <?=$data_golongan2->nama_golongan?> <?=$data_golongan2->nama_ruang?>"><?=$data_golongan2->nama_pangkat?> - <?=$data_golongan2->nama_golongan?> <?=$data_golongan2->nama_ruang?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Pangkat/Golongan/Ruang (Saat Ini)</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="add_stmt" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/Ruang (Kenaikan Pangkat)</label>
                        <div class="col-sm-9">
                            <select id="add_kpangkat" class="form-control select2">
                                <option value="">-Pangkat/Golongan/Ruang-</option>
                                <?php foreach ($data_golongan as $data_golongan2): ?>
                                    <option value="<?=$data_golongan2->nama_pangkat?> - <?=$data_golongan2->nama_golongan?> <?=$data_golongan2->nama_ruang?>"><?=$data_golongan2->nama_pangkat?> - <?=$data_golongan2->nama_golongan?> <?=$data_golongan2->nama_ruang?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Pangkat/Golongan/Ruang (Kenaikan Pangkat)</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="add_ktmt" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="add_data()"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Pangkat  -->
<div id="edit_pangkat" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Kenaikan Pangkat</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
<!--                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>-->
                        <div class="col-sm-9">
<!--                            <select id="edit_select2" class="form-control"  style="width: 100%"></select>-->
                            <input type="hidden" id="edit_namalengkap" class="form-control" >
                            <input type="hidden" id="edit_nip" class="form-control" >
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select id="edit_jeniskelamin" class="form-control select2" disabled>
                                <option value=""></option>
                                <option value="wanita">Perempuan</option>
                                <option value="pria">Laki-Laki</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/Ruang (Saat Ini)</label>
                        <div class="col-sm-9">
                            <select id="edit_spangkat" class="form-control select2" disabled>
                                <option value="">-Pangkat/Golongan/Ruang-</option>
                                <?php foreach ($data_golongan as $data_golongan3): ?>
                                    <option value="<?=$data_golongan3->id_golongan?>"><?=$data_golongan3->nama_pangkat?> - <?=$data_golongan3->nama_golongan?> <?=$data_golongan3->nama_ruang?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Pangkat/Golongan/Ruang (Saat Ini)</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" >
                                <input type="text" id="edit_stmt" class="form-control" disabled>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat/Golongan/Ruang (Kenaikan Pangkat)</label>
                        <div class="col-sm-9">
                            <select id="edit_kpangkat" class="form-control select2">
                                <option value="">-Pangkat/Golongan/Ruang-</option>
                                <?php foreach ($data_golongan as $data_golongan4): ?>
                                    <option value="<?=$data_golongan4->nama_pangkat?> - <?=$data_golongan4->nama_golongan?> <?=$data_golongan4->nama_ruang?>"><?=$data_golongan4->nama_pangkat?> - <?=$data_golongan4->nama_golongan?> <?=$data_golongan4->nama_ruang?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT Pangkat/Golongan/Ruang (Kenaikan Pangkat)</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_ktmt" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" id="edit_pangkatSend" onclick="edit_data_send();"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <script>

      var select2Options = {
          width: 'resolve',
          placeholder: "- Pilih -",
          triggerChange: true,
          allowClear: true
      };

      $('select').select2(select2Options);

      var idGlob;
      var valGlob;

      function add_data() {
          $.ajax({
              type: 'POST',
              url: '<?=admin_url('MigrasiPegawai/tambah_kenaikanpangkat')?>',
              data: {
                  nama_lengkap: $("#add_namalengkap").val(),
                  nip: $("#add_nip").val(),
                  jenis_kelamin: $("#add_jeniskelamin").val(),
                  spangkat: $("#add_spangkat").val(),
                  kpangkat: $("#add_kpangkat").val(),
                  stmt: $("#add_stmt").val(),
                  ktmt: $("#add_ktmt").val()
              }
          }).done(function(response) {
              if (response.success) {
                  // $("td[data-value='"+valGlob+"']").html(response.data.nama_golongan);
                  $('#tambah_pangkat').modal('hide');
                  swal('Sukses', 'Data berhasil disimpan', 'success');
                  setTimeout(function() { location.reload() },1500);
              } else {
                  // $('.error_golongan').html(response.error);
                  swal('Gagal', 'Data gagal disimpan', 'error');
              }
          });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      }

      function edit_data_send() {
          $.ajax({
              type: 'POST',
              url: '<?=admin_url('MigrasiPegawai/edit_kenaikanpangkat/')?>' + idGlob,
              data: {
                  jenis_kelamin: $("#edit_jeniskelamin").val(),
                  spangkat: $("#edit_spangkat").val(),
                  kpangkat: $("#edit_kpangkat").val(),
                  stmt: $("#edit_stmt").val(),
                  ktmt: $("#edit_ktmt").val()
              }
          }).done(function (response) {
              if (response.success) {
                  // $("td[data-value='"+valGlob+"']").html(response.data.nama_golongan);
                  $('#edit_pangkat').modal('hide');
                  swal('Sukses', 'Data berhasil disimpan', 'success');
                  setTimeout(function () {
                      location.reload()
                  }, 500);
              } else {
                  // $('.error_golongan').html(response.error);
                  swal('Gagal', 'Data gagal disimpan', 'error');
              }
          });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      }

      function editKenaikanPangkat(id){
          //$.post("<?//=admin_url('MigrasiPegawai/getDataAjax/')?>//"+id+'/'+'kenaikanpangkat', function(result){
          //    if (result.success) {
          //        $("#edit_namalengkap").val(result.data.nama_lengkap);
          //        $("#edit_nip").val(result.data.nip);
          //        var data = {
          //            id: result.data.nip,
          //            text: result.data.nama_lengkap
          //        }
          //        var newOption = new Option(data.name, data.id, false, false);
          //        $('#edit_select2').append(newOption).trigger('change');
          //        $("#edit_jeniskelamin").val(result.data.jenis_kelamin);
          //        $("#edit_spangkat").val(result.data.spangkat);
          //        $("#edit_stmt").val(result.data.stmt);
          //        $("#edit_kpangkat").val(result.data.kpangkat);
          //        $("#edit_ktmt").val(result.data.ktmt);
          //        $("#edit_pangkatSend").attr("onclick","edit_data("+result.data.id_data+")");
          //        // console.log(result.data.fullname);
          //    }
          //});
          $('#edit_nip').val($(".data-kenaikanpangkat[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
          $('#edit_namalengkap').val($(".data-kenaikanpangkat[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
          $('#edit_jeniskelamin').val($(".data-kenaikanpangkat[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
          $('#edit_spangkat').val($(".data-kenaikanpangkat[data-id='" + id + "']>td:eq(4)").text()).trigger('change');
          $('#edit_stmt').val($(".data-kenaikanpangkat[data-id='" + id + "']>td:eq(5)").text()).trigger('change');
          $('#edit_kpangkat').val($(".data-kenaikanpangkat[data-id='" + id + "']>td:eq(6)").text()).trigger('change');
          $('#edit_ktmt').val($(".data-kenaikanpangkat[data-id='" + id + "']>td:eq(7)").text()).trigger('change');
          idGlob = id;

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
                    url: '<?=admin_url('MigrasiPegawai/hapusDaftarKenaikanPangkat/')?>'+method+'/'+id
                }).done(function(response) {
                    if (response.success) {
                        setTimeout(function() { location.reload() },100);
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
        $(document).ajaxStop(function(){
            window.location.reload();
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
    }

    function formatResultSelection (data) {
      if (data.gambar == null) {
          data.gambar = 'no_image.jpg';
      }
        // console.log(data);
        $('#add_jeniskelamin').val(data.jenis_kelamin).trigger('change');
        $('#add_spangkat').val(data.jenis_pangkat).trigger('change');
        $('#add_stmt').val(data.tmt_jabatan);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' + '<span>'+ data.text+'</span>';

        return markup;
    }

      function formatResultSelectionEdit (data) {
          if (data.gambar == null) {
              data.gambar = 'no_image.jpg';
          }
          // console.log(data);
          $('#edit_jeniskelamin').val(data.jenis_kelamin).trigger('change');
          $('#edit_spangkat').val(data.jenis_pangkat).trigger('change');
          $('#edit_stmt').val(data.tmt_jabatan);

          var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' + '<span>'+ data.text+'</span>';

          return markup;
      }

      $('#add_select2').on('change', function(){
          $('#add_select2').prop("disabled", true);
      });

      $('#tambah_pangkat').on('hidden.bs.modal', function () {
          location.reload();
      });

      $("#add_select2").select2({
          ajax: {
              url: "<?=admin_url('MigrasiPegawai/getDataPegawaiAjax/')?>",
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
                              tmt_jabatan: item.tmt_jabatan
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
          $("#add_namalengkap").val($("#add_select2").text());
          $("#add_nip").val($("#add_select2").val());
          // $("#add_nip").val($("#add_select2").val());
          // console.log($("#add_namalengkap").val());
      });


      $("#edit_select2").select2({
          ajax: {
              url: "<?=admin_url('MigrasiPegawai/getDataPegawaiAjax/')?>",
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
          templateSelection: formatResultSelectionEdit,
          minimumInputLength: 1
      });

      $("#edit_select2").on("select2:select", function (e) {
          $("#edit_namalengkap").val($("#edit_select2").text());
          $("#edit_nip").val($("#edit_select2").val());
          // console.log($("#add_namalengkap").val());
      });

</script>
