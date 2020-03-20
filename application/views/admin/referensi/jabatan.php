<hr>
<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Jenis Jabatan</h3>
            </div>
            <div class="panel-body">
                <a data-toggle="modal" data-target="#tambah_jenisjabatan_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Jenis Jabatan</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="tbl_jenisjabatan" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="50px;">No.</th>
                                    <th>Jenis Jabatan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; foreach ($data_jenisjabatan as $data_jenisjabatan1) { ?>
                                <tr data-id="<?=$data_jenisjabatan1->id_jenisjabatan?>">
                                    <td class="text-center"><?=$i?></td>
                                    <td data-value="<?=$data_jenisjabatan1->nama_jenisjabatan?>"><?=$data_jenisjabatan1->nama_jenisjabatan?></td>
                                    <td>
                                      <a data-toggle="modal" data-target="#edit_jenisjabatan_modal" class="btn btn-primary btn-xs" onclick="editData('jenisjabatan','<?=$data_jenisjabatan1->id_jenisjabatan?>','<?=$data_jenisjabatan1->nama_jenisjabatan?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                      <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('jenisjabatan','<?=$data_jenisjabatan1->id_jenisjabatan?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
                <h3 class="panel-title">Jabatan</h3>
            </div>
            <div class="panel-body">
                <a data-toggle="modal" data-target="#tambah_jabatan_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Jabatan</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="tbl_jabatan" class="table table-bordered">
                          <thead>
                            <tr>
                              <th width="50px;">No.</th>
                              <th>Jenis Jabatan</th>
                              <th>Jumlah Jabatan</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1; foreach ($data_jabatan as $data_jabatan) { ?>
                              <tr>
                                <td class="text-center"><?=$i?></td>
                                <td data-value1="<?=$data_jabatan->jenis_jabatan?>"><?=$data_jabatan->jenis_jabatan?></td>
                                <td ><?=$data_jabatan->total?></td>
                                <td>
                                  <a class="btn btn-primary btn-xs" onclick="lihatData('<?=$data_jabatan->jenis_jabatan?>');"><i class="fa fa-eye" ></i>&nbsp;Lihat</a>
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
                <h3 class="panel-title">Pangkat/Golongan/Ruang</h3>
            </div>
            <div class="panel-body">
                <a data-toggle="modal" data-target="#tambah_golongan_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Pangkat/Golongan/Ruang</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="tbl_golongan" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="50px;">No.</th>
                                    <th>Pangkat</th>
                                    <th>Golongan</th>
                                    <th>Ruang</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php $i = 1; foreach ($data_golongan as $data_golongan) { ?>
                                <tr data-id="<?=$data_golongan->id_golongan?>">
                                    <td class="text-center"><?=$i?></td>
                                    <td data-valuepangkat="<?=$data_golongan->id_golongan?>"><?=$data_golongan->nama_pangkat?></td>
                                    <td data-valuegolongan="<?=$data_golongan->id_golongan?>"><?=$data_golongan->nama_golongan?></td>
                                    <td data-valueruang="<?=$data_golongan->id_golongan?>"><?=$data_golongan->nama_ruang?></td>
                                    <td>
                                      <a data-toggle="modal" data-target="#edit_golongan_modal" class="btn btn-primary btn-xs" onclick="editDataGolongan('<?=$data_golongan->id_golongan?>','<?=$data_golongan->nama_pangkat?>','<?=$data_golongan->nama_golongan?>','<?=$data_golongan->nama_ruang?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                      <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('golongan','<?=$data_golongan->id_golongan?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                    </td>
                                </tr>
                              <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah_jenisjabatan_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Jenis Jabatan</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis Jabatan</label>
            <div class="col-sm-9">
              <input type="text" id="tambah_jenisjabatan" class="form-control" >
              <p class="error_jenisjabatan"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('jenisjabatan')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_jenisjabatan_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Jenis Jabatan</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis Jabatan</label>
            <div class="col-sm-9">
              <input type="text" id="value_jenisjabatan" class="form-control" >
              <p class="error_jenisjabatan"></p>
              <input type="hidden" id="id_jenisjabatan" class="form-control" >
            </div>
          </div>
          <center>
            <a  class="btn btn-primary btn-sm" onclick="editData_send('jenisjabatan');" ><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
          </center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="tambah_jabatan_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Jabatan</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis Jabatan</label>
            <div class="col-sm-9">
              <select id="tambah_jenisjabatan2" class="form-control select-2" required>
                <option value=""></option>
                 <?php foreach ($data_jenisjabatan as $data_jenisjabatan2): ?>
                      <option value="<?=$data_jenisjabatan2->nama_jenisjabatan?>"><?=$data_jenisjabatan2->nama_jenisjabatan?></option>
                  <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Eselon</label>
            <div class="col-sm-9">
              <select id="tambah_eselon" class="form-control select-2" required>
                <option value=""></option>
                 <?php foreach ($data_eselon as $data_eselon): ?>
                      <option value="<?=$data_eselon->nama_eselon?>"><?=$data_eselon->nama_eselon?></option>
                  <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama Jabatan</label>
            <div class="col-sm-9">
              <input type="text" id="tambah_jabatan" class="form-control" >
              <p class="error_jabatan"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('jabatan');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_jabatan_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Jabatan</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
            <div class="col-sm-9">
              <input type="text" id="value_jabatan" class="form-control" >
              <p class="error_jabatan"></p>
              <input type="hidden" id="id_jabatan" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="editData_send('jabatan');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="tambah_golongan_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Pangkat/Golongan/Ruang</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
            <div class="col-sm-9">
             <input type="text" id="tambah_pangkat" class="form-control" >
              <p class="error_pangkat"></p>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Golongan</label>
            <div class="col-sm-9">
             <input type="text" id="tambah_golongan" class="form-control" >
              <p class="error_golongan"></p>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Ruang</label>
            <div class="col-sm-9">
             <input type="text" id="tambah_ruang" class="form-control" >
              <p class="error_ruang"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="refrensidatagolongan_send()"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_golongan_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Pangkat/Golongan/Ruang</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
            <div class="col-sm-9">
              <input type="text" id="value_pangkat" class="form-control" >
              <p class="error_pangkat"></p>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Golongan</label>
            <div class="col-sm-9">
              <input type="text" id="value_golongan" class="form-control" >
              <p class="error_golongan"></p>
              <input type="hidden" id="id_golongan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Ruang</label>
            <div class="col-sm-9">
              <input type="text" id="value_ruang" class="form-control" >
              <p class="error_ruang"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="editDataGolongan_send();"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="daftar_jabatan" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Daftar Jabatan</h4>
          </div>
          <div class="modal-body">
            <table id="tbl_daftar-jabatan" class="table table-bordered ">
              <thead>
                <tr>
                  <th width="50px;">No.</th>
                  <th>Jabatan </br> (Klik Nama Jabatan Untuk Mengedit)</th>
                  <th width="100px;"></th>
                </tr>
              </thead>
              <tbody id="body-daftar-jabatan">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
<script>
var idGlob;
var valGlob;
var idGolGlob;
var valGolGlob;
var valruangGlob;
var totaldatajabatan;

function lihatData(jenis_jabatan){
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/getJabatanByJenisJabatan/')?>',
        data:{
          jenis_jabatan : jenis_jabatan
        }
      }).done(function(response) {
        if (response.success) {
          data = response.data;
          $('#body-daftar-jabatan').empty();
          totaldatajabatan = data.length;
          
            console.log("hey");
          var j = 1;
          for (var i = data.length - 1; i >= 0; i--) {
            $("#body-daftar-jabatan").append('<tr><td>'+j+'</td><td><a href="#" id="edit_namajabatan'+i+'" data-type="text" data-pk="'+data[i].id_jabatan+'" data-title="Edit Nama Jabatan" class="editable editable-click">'+data[i].nama_jabatan+'</a></td><td><a  onclick="hapusData(\'jabatan\','+data[i].id_jabatan+');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
            j++;
            $('#daftar_jabatan').modal('show');

          }
          $.fn.editable.defaults.url = '<?=admin_url('referensiAjax/editJabatan/')?>';
          for (var i = totaldatajabatan - 1; i >= 0; i--) {

           $("#edit_namajabatan"+i).editable(
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

function editData(method,id,value) {
  idGlob = id;
  valGlob = value;
    switch (method) {
      case 'jenisjabatan':
        $('#id_jenisjabatan').val(idGlob);
        $('#value_jenisjabatan').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
      break;
       case 'jabatan':
        $('#id_jabatan').val(idGlob);
        $('#value_jabatan').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
      break;

    }

}
function editDataGolongan(id,pangkat,golongan,ruang) {
  idGolGlob = id;
  valPangGlob = pangkat;
  valGolGlob = golongan;
  valruangGlob = ruang;
  console.log(valruangGlob);
  $('#id_golongan').val(idGlob);
  $('#value_pangkat').val($("td[data-valuepangkat='"+idGolGlob+"']").text());
  $('#value_golongan').val($("td[data-valuegolongan='"+idGolGlob+"']").text());
  $('#value_ruang').val($("td[data-valueruang='"+idGolGlob+"']").text());


}

function refrensidatagolongan_send() {
    $.ajax({
      type: 'POST',
      url: '<?=admin_url('referensiAjax/tambah_golongan')?>',
      data: {
        nama_golongan: $('#tambah_golongan').val(),
        nama_ruang: $('#tambah_ruang').val(),
        nama_pangkat: $('#tambah_pangkat').val()
      }
    }).done(function(response) {
      if (response.success) {
        $('#tbl_golongan').append('<tr data-id="' + response.data.id_golongan + '"><td class="text-center">.</td><td>' + response.data.nama_pangkat + '</td><td>' + response.data.nama_golongan + '</td><td>' + response.data.nama_ruang + '</td><td ><a  data-toggle="modal" data-target="#edit_golongan_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
        $('.error_golongan').html('');
        $('.error_ruang').html('');
        $('#tambah_golongan').val('');
        $('#tambah_ruang').val('');
        $('#tambah_golongan_modal').modal('hide');
        // setTimeout(function() { location.reload() },1500);
        swal('Sukses', 'Data Golongan berhasil ditambah.', 'success');
      } else {
        swal('Gagal', 'Data Golongan gagal ditambah.', 'error');
        // $('#tambah_golongan').modal('hide');
         $('.error_golongan').html(response.error);
      }
    });
    $(document).ajaxStop(function(){
        window.location.reload();
    });
}

function editDataGolongan_send(){
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_golongan/')?>'+idGolGlob,
        data: {
          id_golongan: idGolGlob,
          nama_golongan: $('#value_golongan').val(),
          nama_ruang: $('#value_ruang').val(),
          nama_pangkat: $('#value_pangkat').val()
        }
      }).done(function(response) {
        if (response.success) {
          // $("td[data-valuegolongan='"+idGolGlob+"']").html(response.data.nama_golongan);
          // $("td[data-valueruang='"+idGolGlob+"']").html(response.data.nama_ruang);
          // $('.error_golongan').html('');
          // $('.error_ruang').html('');
          // $('#edit_golongan_modal').modal('hide');
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data Golongan berhasil diedit.', 'success');
        } else {
          $('.error_golongan').html(response.error);
          $('.error_ruang').html(response.error);
          swal('Gagal', 'Data Golongan gagal diedit.', 'error');
        }
      });

}

function refrensidata_send(method) {
    switch (method) {
       case 'jabatan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_jabatan')?>',
        data: {
          nama_jabatan: $('#tambah_jabatan').val(),
          nama_jenisjabatan: $('#tambah_jenisjabatan2').val(),
          nama_eselon: $('#tambah_eselon').val()
        }
      }).done(function(response) {
        if (response.success) {
          // $('#tbl_jabatan').append('<tr data-id="' + response.data.id_jabatan + '"><td class="text-center">.</td><td>' + response.data.nama_jabatan + '</td><td><a  data-toggle="modal" data-target="#edit_jabatan_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          // $('.error_jabatan').html('');
          // $('#tambah_jabatan').val('');
          // $('#tambah_jabatan_modal').modal('hide');
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data jabatan kerja berhasil ditambah.', 'success');
        } else 
        {
          swal('Gagal', 'Data jabatan kerja gagal ditambah.', 'error');
           $('.error_jabatan').html(response.error);
           // $('#tambah_jenisjabatan_modal').modal('hide');
        }
      });
      break;

      case 'jenisjabatan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_jenisjabatan')?>',
        data: {
          nama_jenisjabatan: $('#tambah_jenisjabatan').val()
        }
      }).done(function(response) {
        if (response.success) {
          // $('#tbl_jenisjabatan').append('<tr data-id="' + response.data.id_jenisjabatan + '"><td class="text-center">.</td><td>' + response.data.nama_jenisjabatan + '</td><td><a  data-toggle="modal" data-target="#edit_jenisjabatan_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          // $('.error_jenisjabatan').html('');
          // $('#tambah_jenisjabatan').val('');
          // $('#tambah_jenisjabatan_modal').modal('hide');
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data jenis jabatan kerja berhasil ditambah.', 'success');
        } else 
        {
          swal('Gagal', 'Data jenis jabatan kerja gagal ditambah.', 'error');
           $('.error_jenisjabatan').html(response.error);
           // $('#tambah_jenisjabatan_modal').modal('hide');
        }
      });
      break;
    }
}

function editData_send(method){
  switch (method) {
      case 'jabatan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_jabatan/')?>'+idGlob,
        data: {
          id_jabatan: idGlob,
          nama_jabatan: $('#value_jabatan').val()
        }
      }).done(function(response) {
        if (response.success) {
          // $("td[data-value='"+valGlob+"']").html(response.data.nama_jabatan);
          // $('.error_jabatan').html('');
          // $('#edit_jabatan_modal').modal('hide');
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data bidang berhasil diedit.', 'success');
        } else {
          $('.error_jabatan').html(response.error);
          swal('Gagal', 'Data bidang gagal diedit.', 'error');
        }
      });
      break;

      case 'jenisjabatan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_jenisjabatan/')?>'+idGlob,
        data: {
          id_jenisjabatan: idGlob,
          nama_jenisjabatan: $('#value_jenisjabatan').val()
        }
      }).done(function(response) {
        if (response.success) {
          // $("td[data-value='"+valGlob+"']").html(response.data.nama_jenisjabatan);
          // $('.error_jenisjabatan').html(response.error);
          // $('#edit_jenisjabatan_modal').modal('hide');
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data jenis jabatan berhasil diedit.', 'success');
        } else 
        {
          $('.error_jenisjabatan').html(response.error);
          swal('Gagal', 'Data jenis jabatan gagal diedit.', 'error');
        }
      });
      break;
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
            url: '<?=admin_url('referensiAjax/hapusData/')?>'+method+'/'+id
          }).done(function(response) {
            if (response.success) {
              // $("tr[data-id='"+id+"']").remove();
              setTimeout(function() { location.reload() },1500);
              swal('Sukses', 'Data berhasil dihapus.', 'success');
            } else swal('Gagal', 'Data gagal dihapus.', 'error');
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

</script>
