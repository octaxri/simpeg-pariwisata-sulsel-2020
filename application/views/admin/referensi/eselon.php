<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Data Eselon</h3>
            </div>
            <div class="panel-body">
                <a data-toggle="modal" data-target="#tambah_eselon_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Eselon</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="tbl_eselon" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="50px;">No.</th>
                                    <th class="text-center">Tingkat Eselon</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tbody>
                                <?php $i = 1; foreach ($data_eselon as $data_eselon) { ?>
                                  <tr data-id="<?=$data_eselon->id_eselon?>">
                                      <td class="text-center"><?=$i?></td>
                                      <td class="text-center" data-value="<?=$data_eselon->nama_eselon?>"><?=$data_eselon->nama_eselon?></td>
                                      <td>
                                        <a data-toggle="modal" data-target="#edit_eselon_modal" class="btn btn-primary btn-xs" onclick="editData('eselon','<?=$data_eselon->id_eselon?>','<?=$data_eselon->nama_eselon?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('eselon','<?=$data_eselon->id_eselon?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
<div id="tambah_eselon_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Data Eselon</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tingkat Eselon</label>
            <div class="col-sm-9">
              <input type="text" id="tambah_eselon" class="form-control" >
              <p class="error_eselon"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm"  onclick="refrensidata_send('eselon')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_eselon_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Data Eselon</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tingkat Eselon</label>
            <div class="col-sm-9">
              <input type="text" id="value_eselon" class="form-control" >
              <p class="error_eselon"></p>
              <input type="hidden" id="id_eselon" class="form-control" >
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="editData_send('eselon');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
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

function refrensidata_send(method) {
    switch (method) {
      case 'eselon':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/tambah_eselon')?>',
        data: {
          nama_eselon: $('#tambah_eselon').val()
        }
      }).done(function(response) {
        if (response.success) {
          $('#tbl_eselon').append('<tr data-id="' + response.data.id_eselon + '"><td class="text-center">0</td><td class="text-center">' + response.data.nama_eselon + '</td><td><a  data-toggle="modal" data-target="#edit_eselon_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
          $('.error_eselon').html('');
          $('#tambah_eselon').val('');
          $('#tambah_eselon_modal').modal('hide');
          swal('Sukses', 'Data Eselon berhasil ditambah.', 'success');
        } else {
          swal('Gagal', 'Data Eselon gagal ditambah.', 'error');
          // $('#tambah_eselon').modal('hide');
           $('.error_eselon').html(response.error);
        }
      });
          $(document).ajaxStop(function(){
              window.location.reload();
          });
          break;
      break;
    }
}
function editData(method,id,value) {
  idGlob = id;
  valGlob = value;
    switch (method) {
      case 'eselon':
        $('#id_eselon').val(idGlob);
        $('#value_eselon').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
      break;
    }

}
function editData_send(method){
  switch (method) {
      case 'eselon':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('referensiAjax/edit_eselon/')?>'+idGlob,
        data: {
          id_eselon: idGlob,
          nama_eselon: $('#value_eselon').val()
        }
      }).done(function(response) {
        if (response.success) {
          $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
          $('.error_eselon').html('');
          $('#edit_eselon_modal').modal('hide');
          swal('Sukses', 'Data Eselon berhasil diedit.', 'success');
        } else {
          $('.error_eselon').html(response.error);
          swal('Gagal', 'Data Eselon gagal diedit.', 'error');
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
              $("tr[data-id='"+id+"']").remove();
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
    $(document).ajaxStop(function(){
        window.location.reload();
    });

}
</script>