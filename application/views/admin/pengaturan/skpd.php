          <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
          <?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
          <?=($this->session->flashdata('passsukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('passsukses').'</div>': '')?>
          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DEFAULT -->
              <div class="panel">
                <div class="panel-body">
                  <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_user_skpd"><i class="glyphicon glyphicon-plus"></i> Tambah Akun Bidang/Bagian</a>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <table style="min-width: 100%;"  class="table table-striped datatable-Exnormal table-hover table-bordered">
                        <thead>
                          <tr>
                            <th> No.</th>
                            <th> Nama Bidang/Bagian</th>
                            <th> E-mail</th>
                            <th>  </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; foreach ($data_skpd as $data_skpd): ?>
                          <tr data-id="<?=$data_skpd->id_user?>">
                            <td><?=$i?></td>
                            <td><?=$data_skpd->fullname?></td>
                            <td><?=$data_skpd->email?></td>
                            <td>
                              <a data-toggle="modal" data-target="#edit_user_skpd" class="btn btn-primary btn-xs" onclick="editSkpd('<?=$data_skpd->id_user?>')"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                              <a  class="btn btn-success btn-xs" onclick="resetPass('<?=$data_skpd->id_user?>')"><i class="fa fa-warning"></i>&nbsp;Reset Password</a>
                              <a onclick="hapusData('<?=$data_skpd->id_user?>','skpd')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
          <div id="tambah_user_skpd" class="modal fade " role="dialog">
            <div class="modal-dialog modal-lg "><!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Tambah Akun Bidang/Bagian</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                      <div class="form-group">
                        <label id="pilih-skpd" class="col-sm-3 control-label" >Daftar Bidang/Bagian</label>
                        <div class="col-sm-8">
                          <select id="daftar_skpd" class="form-control select-2">
                            <option value="-">Pilih Bidang/Bagian</option>
                            <?php foreach ($list_skpd as $list_skpd1): ?>
                              <option value="<?=$list_skpd1->nama_satker?>"><?=$list_skpd1->nama_satker?></option>

                            <?php endforeach ?>
                          </select>
                          <p class="error_satker"></p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" id="add_username" class="form-control" disabled required >
                          <p><span id="error_username" class="label label-danger"></span></p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Password</label>
                         <div class="col-sm-8">
                          <input type="password" id="add_password" class="form-control" required disabled>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Ulang Password</label>
                         <div class="col-sm-8">
                          <input type="password" id="repassword" class="form-control" required disabled>

                          <p id="repass_result" style="font-size: 0.7em;"></p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Email</label>
                         <div class="col-sm-8">
                          <input type="text" id="email" class="form-control" required disabled>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. Telepon</label>
                         <div class="col-sm-8">
                          <input type="text" id="add_notelp" class="form-control" required disabled>

                        </div>
                      </div>
                      <div class="form-group ">
                        <div class="col-md-3 col-md-offset-8">
                            <div class="col-sm-8">
                              <a  class="btn btn-primary btn-sm" id="add_akun" onclick="add_user('skpd')" disabled><i class="glyphicon glyphicon-plus"></i>  Buat Akun </a>
                            </div>

                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div id="edit_user_skpd" class="modal fade " role="dialog">
            <div class="modal-dialog modal-lg"><!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Edit Akun Bidang/Bagian</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                      <div class="form-group">
                        <label id="pilih-skpd" class="col-sm-3 control-label" >Daftar Bidang/Bagian</label>
                        <div class="col-sm-8">
                          <select id="daftar_edit_skpd" class="form-control selec-2">
                            <option value="-">Pilih Bidang/Bagian</option>
                             <?php foreach ($list_skpd as $list_skpd2): ?>
                              <option value="<?=$list_skpd2->nama_satker?>"><?=$list_skpd2->nama_satker?></option>

                            <?php endforeach ?>
                          </select>
                          <p class="error_satker"></p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" id="edit_username" class="form-control" disabled required >
                          <p><span id="error_edit_username" class="label label-danger"></span></p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">E-mail</label>
                         <div class="col-sm-8">
                          <input type="text" id="edit_email" class="form-control" required disabled>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. Telepon</label>
                         <div class="col-sm-8">
                          <input type="text" id="edit_notelp" class="form-control" required disabled>

                        </div>
                      </div>
                     <div class="form-group ">
                        <div class="col-md-3 col-md-offset-8">
                            <div class="col-sm-8">
                              <a  class="btn btn-primary btn-sm" id="edit_akun"  disabled><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
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
                  url: '<?=admin_url('pengaturan/tambah_akun/')?>'+type,
                  data: {
                    fullname: $("#daftar_skpd").val(),
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
                    $('#'+response.error.element).html(response.error.isi);
                    swal('Gagal', 'Tambah Akun gagal.', 'error');
                  }
                });
            }

            function edit_user(id) {
               $.ajax({
                  type: 'POST',
                  url: '<?=admin_url('pengaturan/edit_akun/')?>'+id,
                  data: {
                    fullname: $("#daftar_edit_skpd").val(),
                    username: $("#edit_username").val(),
                    notelp: $("#edit_notelp").val(),
                    email: $("#edit_email").val()
                  }
                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    $('#edit_user_skpd').modal('hide');
                    swal('Sukses', 'Edit Akun berhasil.', 'success');
                    // setTimeout(function() { location.reload() },1500);
                  } else {
                    $('#'+response.error.element).html(response.error.isi);
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

            function editSkpd(id){
                $.post("<?=admin_url('pengaturan/getDataAjax/')?>"+id, function(result){
                      if (result.success) {
                        $("#edit_username").val(result.data.username);
                        $("#error_edit_username").html('');
                        $("#edit_fullname").val(result.data.fullname);
                        $("#edit_email").val(result.data.email);
                        $("#edit_notelp").val(result.data.notelp);
                        $("#daftar_edit_skpd").val(result.data.fullname).change();
                        $("#edit_akun").attr("onclick","edit_user("+result.data.id_user+")");
                        // console.log(result.data.fullname);
                      }
                });
            }

            $("#daftar_skpd").change(function(){
                if ($("#daftar_skpd").val() != '-') {
                  $("#add_username").attr("disabled",false);
                  $("#add_password").attr("disabled",false);
                  $("#repassword").attr("disabled",false);
                  $("#email").attr("disabled",false);
                  $("#add_notelp").attr("disabled",false);
                  $("#add_akun").attr("disabled",false);
                  $("#gambar").attr("disabled",false);
                }else {
                  $("#add_username").attr("disabled",true);
                  $("#add_password").attr("disabled",true);
                  $("#repassword").attr("disabled",true);
                  $("#email").attr("disabled",true);
                  $("#add_notelp").attr("disabled",true);
                  $("#gambar").attr("disabled",true);
                  $("#add_akun").attr("disabled",true);
                }

            });

            $("#repassword").keyup(function(event) {
                if ($("#add_password").val() != $("#repassword").val()) {
                  $("#repass_result").text("Password Tidak Sama!");
                  $("#repass_result").css("color", "red");
                }else{
                  $("#repass_result").text("Password Sama!");
                  $("#repass_result").css("color", "green");
                }
            });

            $("#daftar_edit_skpd").change(function(){
                if ($("#daftar_edit_skpd").val() != '-') {
                  $("#edit_username").attr("disabled",false);
                  $("#edit_password").attr("disabled",false);
                  $("#edit_repassword").attr("disabled",false);
                  $("#edit_email").attr("disabled",false);
                  $("#edit_notelp").attr("disabled",false);
                  $("#edit_akun").attr("disabled",false);
                  $("#gambar").attr("disabled",false);
                }else {
                  $("#edit_username").attr("disabled",true);
                  $("#edit_password").attr("disabled",true);
                  $("#edit_repassword").attr("disabled",true);
                  $("#edit_email").attr("disabled",true);
                  $("#edit_notelp").attr("disabled",true);
                  $("#gambar").attr("disabled",true);
                  $("#edit_akun").attr("disabled",true);
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
