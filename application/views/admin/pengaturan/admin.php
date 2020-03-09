          <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
          <?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
          <?=($this->session->flashdata('passsukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('passsukses').'</div>': '')?>
          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DEFAULT -->
              <div class="panel">
                <div class="panel-body">
                  <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_user_admin"><i class="glyphicon glyphicon-plus"></i> Tambah Akun ADMIN</a>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <table style="min-width: 100%;"  class="table table-striped datatable-Exnormal table-hover table-bordered">
                        <thead>
                          <tr>
                            <th> No.</th>
                            <th> Nama Lengkap</th>
                            <th> E-mail</th>
                            <th>  </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; foreach ($data_admin as $data_admin): ?>
                          <tr data-id="<?=$data_admin->id_user?>">
                            <td><?=$i?></td>
                            <td><?=$data_admin->fullname?></td>
                            <td><?=$data_admin->email?></td>
                            <td>
                              <a data-toggle="modal" data-target="#edit_user_admin" class="btn btn-primary btn-xs" onclick="editAdmin('<?=$data_admin->id_user?>')"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                              <a  class="btn btn-success btn-xs" onclick="resetPass('<?=$data_admin->id_user?>')"><i class="fa fa-warning"></i>&nbsp;Reset Password</a>
                              <a onclick="hapusData('<?=$data_admin->id_user?>','admin')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                            </td>
                          </tr>
                          <?php $i++; endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <!-- END PANEL DEFAULT -->
            </div>
          </div>
          <div id="tambah_user_admin" class="modal fade " role="dialog">
            <div class="modal-dialog modal-lg "><!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Tambah Akun ADMIN</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                          <input type="text" id="fullname" class="form-control"  required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" id="add_username" class="form-control"  required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Password</label>
                         <div class="col-sm-8">
                          <input type="password" id="add_password" class="form-control" required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Ulang Password</label>
                         <div class="col-sm-8">
                          <input type="password" id="repassword" class="form-control" required >

                          <p id="repass_result" style="font-size: 0.7em;"></p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Email</label>
                         <div class="col-sm-8">
                          <input type="text" id="email" class="form-control" required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. Telepon</label>
                         <div class="col-sm-8">
                          <input type="text" id="add_notelp" class="form-control" required >

                        </div>
                      </div>
                      <div class="form-group ">
                        <div class="col-md-3 col-md-offset-8">
                            <div class="col-sm-8">
                              <a  class="btn btn-primary btn-sm" id="add_akun" onclick="add_user('admin')" ><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                            </div>

                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div id="edit_user_admin" class="modal fade " role="dialog">
            <div class="modal-dialog modal-lg"><!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Edit Akun Admin</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                          <input type="text" id="edit_fullname" class="form-control"  required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" id="edit_username" class="form-control"  required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Email</label>
                         <div class="col-sm-8">
                          <input type="text" id="edit_email" class="form-control" required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. Telepon</label>
                         <div class="col-sm-8">
                          <input type="text" id="edit_notelp" class="form-control" required >

                        </div>
                      </div>
                     <div class="form-group ">
                        <div class="col-md-3 col-md-offset-8">
                            <div class="col-sm-8">
                              <a  class="btn btn-primary btn-sm" id="edit_akun"  ><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                            </div>

                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            function add_user(type) {
               $.ajax({
                  type: 'POST',
                  url: '<?=admin_url('pengaturan/tambah_akunAdmin/')?>'+type,
                  data: {
                    fullname: $("#fullname").val(),
                    username: $("#add_username").val(),
                    password: $("#add_password").val(),
                    notelp: $("#add_notelp").val(),
                    email: $("#email").val()
                  }
                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    $('#tambah_akun').modal('hide');
                    swal('Sukses', 'Tambah Akun berhasil.', 'success');
                    setTimeout(function() { location.reload() },1500);
                  } else {
                    // $('.error_eselon').html(response.error);
                    swal('Gagal', 'Tambah Akun gagal.', 'error');
                  }
                });
            }

            function edit_user(id) {
               $.ajax({
                  type: 'POST',
                  url: '<?=admin_url('pengaturan/edit_akun/')?>'+id,
                  data: {
                    fullname: $("#edit_fullname").val(),
                    username: $("#edit_username").val(),
                    notelp: $("#edit_notelp").val(),
                    email: $("#edit_email").val()
                  }
                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    $('#edit_user_admin').modal('hide');
                    swal('Sukses', 'Edit Akun berhasil.', 'success');
                    // setTimeout(function() { location.reload() },1500);
                  } else {
                    // $('.error_eselon').html(response.error);
                    swal('Gagal', 'Edit Akun gagal.', 'error');
                  }
                });
            }

            function hapusData(id,type) {
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
                      url: '<?=admin_url('pengaturan/hapusData/')?>'+id+'/'+type
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
                    'Proses Hapus Data dibatalkan! :)',
                    'error'
                  )
                }
              });
            }

            function resetPass(id) {
              swal({
                title: 'Apakah Anda Yakin?',
                text: "Anda tidak dapat mengembalikan password yang telah direset!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Reset!',
                cancelButtonText: 'Batalkan!',
                closeOnConfirm: false,
                closeOnCancel: false
              },
              function(isConfirm){
                if (isConfirm) {
                  $.ajax({
                      type: 'POST',
                      url: '<?=admin_url('pengaturan/resetPass/')?>'+id
                    }).done(function(response) {
                      if (response.success) {
                        swal('Sukses', 'Password berhasil direset.', 'success');
                        setTimeout(function() { location.reload() },1500);
                      } else swal('Gagal', 'password gagal direset.', 'error');
                   });
                } else {
                  swal(
                    'Batal',
                    'Proses reset Data dibatalkan! :)',
                    'error'
                  )
                }
              });
            }

            function editAdmin(id){
                $.post("<?=admin_url('pengaturan/getDataAjax/')?>"+id, function(result){
                      if (result.success) {
                        $("#edit_username").val(result.data.username);
                        $("#edit_fullname").val(result.data.fullname);
                        $("#edit_email").val(result.data.email);
                        $("#edit_notelp").val(result.data.notelp);
                        $("#daftar_edit_admin").val(result.data.fullname).change();
                        $("#edit_akun").attr("onclick","edit_user("+result.data.id_user+")");
                        // console.log(result.data.fullname);
                      }
                });
            }

       

            $("#repassword").keyup(function(event) {
                if ($("#add_password").val() != $("#repassword").val()) {
                  $("#repass_result").text("Password Tidak Sama!");
                  $("#repass_result").css("color", "red");
                }else{
                  $("#repass_result").text("Password Sama!");
                  $("#repass_result").css("color", "green");
                }
            });

            $("#edit_repassword").keyup(function(event) {
                if ($("#edit_password").val() != $("#edit_repassword").val()) {
                  $("#repass_edit_result").text("Password Tidak Sama!");
                  $("#repass_edit_result").css("color", "red");
                }else{
                  $("#repass_edit_result").text("Password Sama!");
                  $("#repass_edit_result").css("color", "green");
                }
            });

        </script>
