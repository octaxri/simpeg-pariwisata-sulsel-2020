<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Agama</h3>
      </div>
      <div class="panel-body">
        <a data-toggle="modal" data-target="#tambah_agama" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Agama</a>
        <hr>
        <div class="row">
          <div class="col-md-12">
<!--            <table class="table table-bordered table-sorting table-hover tablenormal no-footer">-->
                <table style="min-width: 100%;"  class="table table-striped datatable-Exnormal table-hover table-bordered">
              <thead>
                <tr>
                  <th width="20px;">No.</th>
                  <th class="text-center">Agama</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="tbl_agama" >
                 <?php $i = 1; foreach ($data_agama as $data_agama) { ?>
                    <tr data-id="<?=$data_agama->id_agama?>">
                        <td class="text-center"><?=$i?></td>
                        <td class="text-center" data-value="<?=$data_agama->nama_agama?>"><?=$data_agama->nama_agama?></td>
                        <td style="width: 1px;">
                          <a data-toggle="modal" data-target="#edit_agama" class="btn btn-primary btn-xs" role="button" onclick="editData('agama','<?=$data_agama->id_agama?>','<?=$data_agama->nama_agama?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                            <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('agama','<?=$data_agama->id_agama?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
        <h3 class="panel-title">Data Pendidikan</h3>
      </div>
      <div class="panel-body">
        <a data-toggle="modal" data-target="#tambah_pendidikan" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Pendidikan</a>
        <hr>
        <div class="row">
          <div class="col-md-12">
<!--            <table class="table table-bordered table-sorting table-hover tablenormal  no-footer">-->
                <table style="min-width: 100%;"  class="table table-striped datatable-Exnormal table-hover table-bordered">
              <thead>
                <tr>
                  <th width="20px;">No.</th>
                  <th class="text-center">Pendidikan</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="tbl_pendidikan">
                <?php $i = 1; foreach ($data_pendidikan as $data_pendidikan) { ?>
                    <tr data-id="<?=$data_pendidikan->id_pendidikan?>">
                        <td class="text-center"><?=$i?></td>
                        <td class="text-center" data-value="<?=$data_pendidikan->nama_pendidikan?>"><?=$data_pendidikan->nama_pendidikan?></td>
                        <td style="width: 1px;">
                          <a data-toggle="modal" data-target="#edit_pendidikan" class="btn btn-primary btn-xs" onclick="editData('pendidikan','<?=$data_pendidikan->id_pendidikan?>','<?=$data_pendidikan->nama_pendidikan?>');"><i class="fa fa-pencil" ></i>&nbsp;Edit</a>
                            <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('pendidikan','<?=$data_pendidikan->id_pendidikan?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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

<div id="tambah_agama" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Data Agama</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Agama</label>
            <div class="col-sm-9">
              <input type="text" id="agama" class="form-control" >
              <p class="error_agama"></p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm " onclick="refrensidata_send('agama')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_agama" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Data Agama</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Agama</label>
            <div class="col-sm-9">
              <input type="text" id="valueAgama"  class="form-control" >
              <p class="error_agama"></p>
              <input type="hidden" id="idAgama" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm " onclick="editData_send('agama');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="tambah_pendidikan" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Data Pendidikan</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pendidikan</label>
            <div class="col-sm-9">
              <input type="text" id="pendidikan" class="form-control" >
              <p class="error_pendidikan"></p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm " onclick="refrensidata_send('pendidikan')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_pendidikan" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Data Pendidikan</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Pendidikan</label>
            <div class="col-sm-9">
              <input type="text" id="valueJenjang"  class="form-control" >
              <p class="error_pendidikan"></p>
              <input type="hidden" id="idJenjang" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm" onclick="editData_send('pendidikan');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END MAIN -->
<script>
function refrensidata_send(method) {
    switch (method) {
      case 'agama':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_agama')?>',
        data: {
          nama_agama: $('#agama').val()
        }
      }).done(function(response) {
        if (response.success) {
          $('#tbl_agama').append('<tr data-id="' + response.data.id_agama + '"><td class="text-center">.</td><td>' + response.data.nama_agama + '</td><td><a  data-toggle="modal" data-target="#edit_agama" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          $('.error_agama').html('');
          $('#agama').val('');
          $('#tambah_agama').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else {
          swal('Gagal', 'Data gagal disimpan', 'error');
          // $('#tambah_agama').modal('hide');
           $('.error_agama').html(response.error);
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      break;

      case 'pendidikan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_pendidikan')?>',
        data: {
          nama_pendidikan: $('#pendidikan').val()
        }
      }).done(function(response) {
        if (response.success) {
          $('#tbl_pendidikan').append('<tr data-id="' + response.data.id_pendidikan + '"><td class="text-center">.</td><td>' + response.data.nama_pendidikan + '</td><td><a  data-toggle="modal" data-target="#edit_pendidikan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          $('.error_pendidikan').html('');
          $('#pendidikan').val('');
          $('#tambah_pendidikan').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else 
        {
          swal('Gagal', 'Data gagal disimpan', 'error');
           $('.error_pendidikan').html(response.error);
           // $('#tambah_pendidikan').modal('hide');
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      break;
    }
}
</script>
<script>
var idGlob;
var valGlob;
function editData(method,id,value) {
  idGlob = id;
  valGlob = value;
    switch (method) {
      case 'agama':
        $('#idAgama').val(idGlob);
        $('#valueAgama').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
      break;
       case 'pendidikan':
        $('#idJenjang').val(idGlob);
        $('#valueJenjang').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
      break;
    }

}

function editData_send(method){
  switch (method) {
      case 'agama':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_agama/')?>'+idGlob,
        data: {
          id_agama: idGlob,
          nama_agama: $('#valueAgama').val()
        }
      }).done(function(response) {
        if (response.success) {
          $("td[data-value='"+valGlob+"']").html(response.data.nama_agama);
          $('#agama').val('');
          $('.error_agama').html('');
          $('#edit_agama').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else {
          $('.error_agama').html(response.error);
          swal('Gagal', 'Data gagal disimpan', 'error');
        }
      });$(document).ajaxStop(function(){
          window.location.reload();
      });
      break;

      case 'pendidikan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_pendidikan/')?>'+idGlob,
        data: {
          id_pendidikan: idGlob,
          nama_pendidikan: $('#valueJenjang').val()
        }
      }).done(function(response) {
        if (response.success) {
          $("td[data-value='"+valGlob+"']").html(response.data.nama_pendidikan);
          $('.error_pendidikan').html(response.error);
          $('#pendidikan').val('');
          $('#edit_pendidikan').modal('hide');
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else 
        {
          $('.error_pendidikan').html(response.error);
          swal('Gagal', 'Data gagal disimpan', 'error');
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
      break;
    }
}
</script>
<script>
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
    $(document).ajaxStop(function(){
        window.location.reload();
    });
}
</script>
