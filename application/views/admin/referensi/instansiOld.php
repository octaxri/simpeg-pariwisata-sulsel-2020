<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Unit Organisasi Induk</h3>
      </div>
      <div class="panel-body">
        <a data-toggle="modal" data-target="#tambah_satker_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Unit Organisasi Induk</a>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <table id="tbl_satker" class="table table-bordered table-sorting table-hover tablenormal dataTable no-footer">
              <thead>
                <tr>
                  <th width="50px;">No.</th>
                  <th>Unit Organisasi Induk</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($data_satker as $data_satker1) { ?>
                  <tr data-id="<?=$data_satker1->id_satker?>">
                    <td class="text-center"><?=$i?></td>
                    <td data-value="<?=$data_satker1->nama_satker?>"><?=$data_satker1->nama_satker?></td>
                    <td align="center">
                      <a data-toggle="modal" data-target="#edit_satker_modal" class="btn btn-primary btn-xs" onclick="editData('satker','<?=$data_satker1->id_satker?>','<?=$data_satker1->nama_satker?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                      <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('satker','<?=$data_satker1->id_satker?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Data Unit Organisasi</h3>
        </div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#tambah_unit_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Unit Organisasi</a>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <table id="tbl_unit" class="table table-bordered table-sorting table-hover tablenormal dataTable no-footer">
                <thead>
                  <tr>
                    <th width="50px;">No.</th>
                    <th>Unit Organisasi Induk</th>
                    <th>Total Unit Organisasi</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; foreach ($data_unit as $data_unit) { ?>
                    <tr>
                      <td class="text-center"><?=$i?></td>
                      <td data-value1="<?=$data_unit->nama_satker?>"><?=$data_unit->nama_satker?></td>
                      <td ><?=$data_unit->total?></td>
                      <td align="center">
                        <a class="btn btn-primary btn-xs" onclick="lihatData('<?=$data_unit->nama_satker?>');"><i class="fa fa-pencil" ></i>&nbsp;Lihat Unit</a>
                        <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('unit');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- END PANEL DEFAULT -->
      </div>
    </div>
    <div id="tambah_satker_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Tambah Data Unit Organisasi Induk</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Unit Organisasi Induk</label>
                <div class="col-sm-9">
                  <input type="text" id="tambah_satker" class="form-control" >
                  <p class="error_satker"></p>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('satker')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="edit_satker_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Data Unit Organisasi Induk</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Unit Organisasi Induk</label>
                <div class="col-sm-9">
                  <input type="text" id="value_satker" class="form-control" >
                  <p class="error_satker"></p>
                  <input type="hidden" id="id_satker" class="form-control" >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="editData_send('satker');"><i class="glyphicon glyphicon-save"></i>  Simpan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="tambah_unit_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Tambah Data Unit Organisasi</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Unit Organisasi Induk</label>
                <div class="col-sm-9">
                  <select class="swal2-select form-control" id="tambah_selsatker" style="display: block;">
                    <option value="" selected disabled="">Pilih Unit Organisasi Induk</option>
                    <?php foreach ($data_satker as $data_satker2): ?>
                      <option value="<?=$data_satker2->nama_satker?>"><?=$data_satker2->nama_satker?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Unit Organisasi</label>
                <div class="col-sm-9">
                  <input type="text" id="tambah_unit" class="form-control" >
                  <p class="error_unit"></p>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('unit')"><i class="glyphicon glyphicon-plus"></i>  Tambah </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="daftar_unit" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Daftar Unit Organisasi</h4>
          </div>
          <div class="modal-body">
            <table id="tbl_daftar-unit" class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px;">No.</th>
                  <th>Unit Organisasi </br> (Klik Nama Unit Untuk Mengedit)</th>
                  <th width="100px;"></th>
                </tr>
              </thead>
              <tbody id="body-daftar-unit">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <div id="edit_unit_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Data Unit Organisasi</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Unit Organisasi Induk</label>
                <div class="col-sm-9">
                  <select class="swal2-select form-control" id="value_selsatker" style="display: block;">
                    <option value="" disabled="">Pilih Unit Organisasi Induk</option>
                    <?php foreach ($data_satker as $data_satker3): ?>
                      <option value="<?=$data_satker3->nama_satker?>"><?=$data_satker3->nama_satker?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Unit Organisasi</label>
                <div class="col-sm-9">
                 <input type="text" id="value_unit" class="form-control" >
                 <p class="error_unit"></p>
                 <input type="hidden" id="id_unit" class="form-control" >
               </div>
             </div>
             <div class="form-group ">
              <div class="col-md-3 col-md-offset-5">
                <a  class="btn btn-primary btn-sm" onclick="editData_send('unit');"><i class="glyphicon glyphicon-save"></i>  Simpan </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      var idGlob;
      var valGlob;
      var valGlob2;
      var totaldataunit;

      var select2Options = { width: 'resolve',
      placeholder: "- Pilih -",
      triggerChange: true,
      allowClear: true};



      $('select').select2(select2Options);

      function editData(method,id,value) {
        idGlob = id;
        valGlob = value;
        switch (method) {
          case 'satker':
          $('#id_satker').val(idGlob);
          $('#value_satker').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
        break;
      }

    }
    function editDataUnit(id,valunit, valsatker){
      idGlob = id;
      valGlob = valunit;
      valGlob2 = valsatker;
      $('#id_unit').val(idGlob);
      $('#value_selsatker').val($("td[data-value1='"+valsatker+"']").text());
      $('#value_unit').val($("td[data-value2='"+valunit+"']").text());
    }
    function refrensidata_send(method) {
      switch (method) {
        case 'satker':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/tambah_satker')?>',
          data: {
            nama_satker: $('#tambah_satker').val()
          }
        }).done(function(response) {
          if (response.success) {
            // $('#tbl_satker').append('<tr data-id="' + response.data.id_satker + '"><td class="text-center">.</td><td>' + response.data.nama_satker + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_satker_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
            // $('.error_satker').html('');
            // $('#tambah_satker').val('');
            // $('#tambah_satker_modal').modal('hide');
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data bidang berhasil ditambah.', 'success');
          } else {
            swal('Gagal', 'Data bidang gagal ditambah.', 'error');
          // $('#tambah_satker').modal('hide');
          $('.error_satker').html(response.error);
        }
      });
        break;

        case 'unit':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/tambah_unit')?>',
          data: {
            nama_unit: $('#tambah_unit').val(),
            nama_satker: $('#tambah_selsatker').val()
          }
        }).done(function(response) {
          if (response.success) {
            // $('#tbl_unit').append('<tr data-id="' + response.data.id_unit + '"><td class="text-center">.</td><td>' + response.data.nama_satker + '</td><td class="text-center">.</td><td>' + response.data.nama_unit + '</td><td align="center"><a  data-toggle="modal" data-target="#edit_unit_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
            // $('.error_unit').html('');
            // $('#tambah_unit').val('');
            // $('#tambah_unit').val('');
            // $('#tambah_unit_modal').modal('hide');
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data unit kerja berhasil ditambah.', 'success');
          } else
          {
            swal('Gagal', 'Data unit kerja gagal ditambah.', 'error');
            $('.error_unit').html(response.error);
           // $('#tambah_unit_modal').modal('hide');
         }
       });
        break;
      }
    }

    function editData_send(method){
      switch (method) {
        case 'satker':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/edit_satker/')?>'+idGlob,
          data: {
            id_satker: idGlob,
            nama_satker: $('#value_satker').val()
          }
        }).done(function(response) {
          if (response.success) {
            // $("td[data-value='"+valGlob+"']").html(response.data.nama_satker);
            // $('.error_satker').html('');
            // $('#edit_satker_modal').modal('hide');
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data bidang berhasil diedit.', 'success');
          } else {
            $('.error_satker').html(response.error);
            swal('Gagal', 'Data bidang gagal diedit.', 'error');
          }
        });
        break;

        case 'unit':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/edit_unit/')?>'+idGlob,
          data: {
            id_unit: idGlob,
            nama_unit: $('#value_unit').val(),
            nama_satker: $('#value_selsatker').val()
          }
        }).done(function(response) {
          if (response.success) {
            // $("td[data-value1='"+valGlob2+"']").html(response.data.nama_satker);
            // $("td[data-value2='"+valGlob+"']").html(response.data.nama_unit);
            // $('.error_unit').html(response.error);
            // $('#edit_unit_modal').modal('hide');
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data unit berhasil diedit.', 'success');
          } else
          {
            $('.error_unit').html(response.error);
            swal('Gagal', 'Data unit gagal diedit.', 'error');
          }
        });
        break;
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
            url: '<?=admin_url('referensiAjax/hapusData/')?>'+method+'/'+id
          }).done(function(response) {
            if (response.success) {
              $("tr[data-id='"+id+"']").remove();
              swal('Sukses', 'Data berhasil dihapus.', 'success');
              setTimeout(function() { location.reload() },1500);
            } else swal('Gagal', 'Data gagal dihapus.', 'error');
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

    function lihatData(nama_satker){
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/getUnitBySatker/')?>',
        data:{
          nama_satker : nama_satker
        }
      }).done(function(response) {
        if (response.success) {
          data = response.data;
          $('#body-daftar-unit').empty();
          totaldataunit = data.length;
          var j = 1;
          for (var i = data.length - 1; i >= 0; i--) {
            $("#body-daftar-unit").append('<tr><td>'+j+'</td><td><a href="#" id="edit_namaunit'+i+'" data-type="text" data-pk="'+data[i].id_unit+'" data-title="Edit Nama Unit Kerja" class="editable editable-click">'+data[i].nama_unit+'</a></td><td><a  onclick="hapusData(\'unit\','+data[i].id_unit+');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
            j++;
            $('#daftar_unit').modal('show');

          }
          $.fn.editable.defaults.url = '<?=admin_url('referensiAjax/editUnit/')?>';
          for (var i = totaldataunit - 1; i >= 0; i--) {

           $("#edit_namaunit"+i).editable(
           {
            validate: function(value)
            {
              if ($.trim(value) === '') return 'This field is required';
            }
          });

         }

       } else swal('Gagal', 'Terjadi Kesalahan!.', 'error');
     });
    }

  </script>
