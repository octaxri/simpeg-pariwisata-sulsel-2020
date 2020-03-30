<hr>
<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Status Pegawai</h3>
            </div>
            <div class="panel-body">
                <a data-toggle="modal" data-target="#tambah_statuspegawai_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Status Pegawai</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
<!--                        <table id="tbl_statuspegawai" class="table table-bordered">-->
                        <table style="min-width: 100%;" id="tbl_statuspegawai" class="table table-striped datatable-Exnormal table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px;" class="text-center">No.</th>
                                    <th class="text-center">Status Pegawai</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; foreach ($data_statuspegawai as $data_statuspegawai) { ?>
                                <tr data-id="<?=$data_statuspegawai->id_statuspegawai?>">
                                    <td class="text-center" class="text-center"><?=$i?></td>
                                    <td class="text-center" data-value="<?=$data_statuspegawai->nama_statuspegawai?>"><?=$data_statuspegawai->nama_statuspegawai?></td>
                                    <td style="width: 1px">
                                      <a data-toggle="modal" data-target="#edit_statuspegawai_modal" class="btn btn-primary btn-xs" onclick="editData('statuspegawai','<?=$data_statuspegawai->id_statuspegawai?>','<?=$data_statuspegawai->nama_statuspegawai?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                      <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('statuspegawai','<?=$data_statuspegawai->id_statuspegawai?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
                <h3 class="panel-title">Jenis Pegawai</h3>
            </div>
            <div class="panel-body">
                <a data-toggle="modal" data-target="#tambah_jenispegawai_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Jenis Pegawai</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
<!--                        <table id="tbl_jenispegawai" class="table table-bordered">-->
                        <table style="min-width: 100%;" id="tbl_jenispegawai" class="table table-striped datatable-Exnormal table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px;" class="text-center">No.</th>
                                    <th class="text-center">Jenis Pegawai</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; foreach ($data_jenispegawai as $data_jenispegawai) { ?>
                                <tr data-id="<?=$data_jenispegawai->id_jenispegawai?>">
                                    <td class="text-center" class="text-center"><?=$i?></td>
                                    <td class="text-center" data-value="<?=$data_jenispegawai->nama_jenispegawai?>"><?=$data_jenispegawai->nama_jenispegawai?></td>
                                    <td style="width: 1px">
                                      <a data-toggle="modal" data-target="#edit_jenispegawai_modal" class="btn btn-primary btn-xs" onclick="editData('jenispegawai','<?=$data_jenispegawai->id_jenispegawai?>','<?=$data_jenispegawai->nama_jenispegawai?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                      <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('jenispegawai','<?=$data_jenispegawai->id_jenispegawai?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
                <h3 class="panel-title">Kedudukan Pegawai</h3>
            </div>
            <div class="panel-body">
                <a data-toggle="modal" data-target="#tambah_kedudukanpegawai_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Kedudukan Pegawai</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
<!--                        <table id="tbl_kedudukanpegawai" class="table table-bordered">-->
                            <table style="min-width: 100%;" id="tbl_kedudukanpegawai" class="table table-striped datatable-Exnormal table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px;" class="text-center">No.</th>
                                    <th class="text-center">Kedudukan Pegawai</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; foreach ($data_kedudukanpegawai as $data_kedudukanpegawai) { ?>
                                <tr data-id="<?=$data_kedudukanpegawai->id_kedudukanpegawai?>">
                                    <td class="text-center" class="text-center"><?=$i?></td>
                                    <td class="text-center" data-value="<?=$data_kedudukanpegawai->nama_kedudukanpegawai?>"><?=$data_kedudukanpegawai->nama_kedudukanpegawai?></td>
                                    <td style="width: 1px">
                                      <a data-toggle="modal" data-target="#edit_kedudukanpegawai_modal" class="btn btn-primary btn-xs" onclick="editData('kedudukanpegawai','<?=$data_kedudukanpegawai->id_kedudukanpegawai?>','<?=$data_kedudukanpegawai->nama_kedudukanpegawai?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                      <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('kedudukanpegawai','<?=$data_kedudukanpegawai->id_kedudukanpegawai?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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

<div id="tambah_statuspegawai_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Status Pegawai</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Status Pegawai</label>
            <div class="col-sm-9">
              <input type="text" id="tambah_statuspegawai" class="form-control" >
              <p class="error_statuspegawai"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('statuspegawai')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_statuspegawai_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Status Pegawai</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Status Pegawai</label>
            <div class="col-sm-9">
              <input type="text" id="value_statuspegawai" class="form-control" >
              <p class="error_statuspegawai"></p>
              <input type="hidden" id="id_statuspegawai" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="editData_send('statuspegawai');" ><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="tambah_jenispegawai_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Jenis Pegawai</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis Pegawai</label>
            <div class="col-sm-9">
              <input type="text" id="tambah_jenispegawai" class="form-control" >
              <p class="error_jenispegawai"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('jenispegawai');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_jenispegawai_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Jenis Pegawai</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis Pegawai</label>
            <div class="col-sm-9">
              <input type="text" id="value_jenispegawai" class="form-control" >
              <p class="error_jenispegawai"></p>
              <input type="hidden" id="id_jenispegawai" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="editData_send('jenispegawai');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="tambah_kedudukanpegawai_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Kedudukan Pegawai</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Kedudukan Pegawai</label>
            <div class="col-sm-9">
              <input type="text" id="tambah_kedudukanpegawai" class="form-control" >
              <p class="error_kedudukanpegawai"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('kedudukanpegawai');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_kedudukanpegawai_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Kedudukan Pegawai</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Kedudukan Pegawai</label>
            <div class="col-sm-9">
              <input type="text" id="value_kedudukanpegawai" class="form-control" >
              <p class="error_kedudukanpegawai"></p>
              <input type="hidden" id="id_kedudukanpegawai" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="editData_send('kedudukanpegawai');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
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
var idGolGlob;
var valGolGlob;
var valruangGlob;
function editData(method,id,value) {
  idGlob = id;
  valGlob = value;
    switch (method) {
      case 'statuspegawai':
        $('#id_statuspegawai').val(idGlob);
        $('#value_statuspegawai').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
      break;
       case 'jenispegawai':
        $('#id_jenispegawai').val(idGlob);
        $('#value_jenispegawai').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
      break;
      case 'kedudukanpegawai':
       $('#id_kedudukanpegawai').val(idGlob);
       $('#value_kedudukanpegawai').val($("td[data-value='"+value+"']").text());
       // console.log($('#valueAgama').val());
     break;

    }

}


function refrensidata_send(method) {
    switch (method) {
       case 'jenispegawai':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_jenispegawai')?>',
        data: {
          nama_jenispegawai: $('#tambah_jenispegawai').val()
        }
      }).done(function(response) {
        if (response.success) {
          $('#tbl_jenispegawai').append('<tr data-id="' + response.data.id_jenispegawai + '"><td class="text-center">.</td><td>' + response.data.nama_jenispegawai + '</td><td ><a  data-toggle="modal" data-target="#edit_jenispegawai_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          $('.error_jenispegawai').html('');
          $('#tambah_jenispegawai').val('');
          $('#tambah_jenispegawai_modal').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else
        {
          swal('Gagal', 'Data gagal disimpan', 'error');
           $('.error_jenispegawai').html(response.error);
           // $('#tambah_statuspegawai_modal').modal('hide');
        }
      });
           $(document).ajaxStop(function(){
               window.location.reload();
           });
      break;

      case 'statuspegawai':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_statuspegawai')?>',
        data: {
          nama_statuspegawai: $('#tambah_statuspegawai').val()
        }
      }).done(function(response) {
        if (response.success) {
          $('#tbl_statuspegawai').append('<tr data-id="' + response.data.id_statuspegawai + '"><td class="text-center">.</td><td>' + response.data.nama_statuspegawai + '</td><td ><a  data-toggle="modal" data-target="#edit_statuspegawai_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          $('.error_statuspegawai').html('');
          $('#tambah_statuspegawai').val('');
          $('#tambah_statuspegawai_modal').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else
        {
          swal('Gagal', 'Data gagal disimpan', 'error');
           $('.error_statuspegawai').html(response.error);
           // $('#tambah_statuspegawai_modal').modal('hide');
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      break;

      case 'kedudukanpegawai':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_kedudukanpegawai')?>',
        data: {
          nama_kedudukanpegawai: $('#tambah_kedudukanpegawai').val()
        }
      }).done(function(response) {
        if (response.success) {
          $('#tbl_kedudukanpegawai').append('<tr data-id="' + response.data.id_kedudukanpegawai + '"><td class="text-center">.</td><td>' + response.data.nama_kedudukanpegawai + '</td><td ><a  data-toggle="modal" data-target="#edit_kedudukanpegawai_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          $('.error_kedudukanpegawai').html('');
          $('#tambah_kedudukanpegawai').val('');
          $('#tambah_kedudukanpegawai_modal').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else
        {
          swal('Gagal', 'Data gagal disimpan', 'error');
           $('.error_kedudukanpegawai').html(response.error);
           // $('#tambah_statuspegawai_modal').modal('hide');
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      break;

    }
}

function editData_send(method){
  switch (method) {
      case 'jenispegawai':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_jenispegawai/')?>'+idGlob,
        data: {
          id_jenispegawai: idGlob,
          nama_jenispegawai: $('#value_jenispegawai').val()
        }
      }).done(function(response) {
        if (response.success) {
          $("td[data-value='"+valGlob+"']").html(response.data.nama_jenispegawai);
          $('.error_jenispegawai').html('');
          $('#edit_jenispegawai_modal').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else {
          $('.error_jenispegawai').html(response.error);
          swal('Gagal', 'Data gagal disimpan', 'error');
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      break;

      case 'statuspegawai':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_statuspegawai/')?>'+idGlob,
        data: {
          id_statuspegawai: idGlob,
          nama_statuspegawai: $('#value_statuspegawai').val()
        }
      }).done(function(response) {
        if (response.success) {
          $("td[data-value='"+valGlob+"']").html(response.data.nama_statuspegawai);
          $('.error_statuspegawai').html(response.error);
          $('#edit_statuspegawai_modal').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else
        {
          $('.error_statuspegawai').html(response.error);
          swal('Gagal', 'Data gagal disimpan', 'error');
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      break;

      case 'kedudukanpegawai':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_kedudukanpegawai/')?>'+idGlob,
        data: {
          id_kedudukanpegawai: idGlob,
          nama_kedudukanpegawai: $('#value_kedudukanpegawai').val()
        }
      }).done(function(response) {
        if (response.success) {
          $("td[data-value='"+valGlob+"']").html(response.data.nama_kedudukanpegawai);
          $('.error_kedudukanpegawai').html(response.error);
          $('#edit_kedudukanpegawai_modal').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else
        {
          $('.error_kedudukanpegawai').html(response.error);
          swal('Gagal', 'Data gagal disimpan', 'error');
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
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

</script>
