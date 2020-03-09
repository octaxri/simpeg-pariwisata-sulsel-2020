        <div class="row">
            <div class="col-md-12">
              <!-- PANEL DEFAULT -->
              <div class="panel">
                <div class="panel-body">
                  <form class="form-horizontal">
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Password Baru</label>
                         <div class="col-sm-8">
                          <input type="password" id="new_password" class="form-control" required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Ulang Password</label>
                         <div class="col-sm-8">
                          <input type="password" id="repassword" class="form-control" required >

                          <p id="repass_result" style="font-size: 0.7em;"></p>
                        </div>
                      </div>
                      <div class="form-group ">
                        <div class="col-md-3 col-md-offset-8">
                            <div class="col-sm-8">
                              <a  class="btn btn-primary btn-sm" id="ubah_password"  onclick="ubah_password()"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                            </div>

                        </div>
                      </div>
                  </form>
                </div>
              </div>
              </div>
              <!-- END PANEL DEFAULT -->
            </div>
          </div>
          <script>
            function ubah_password() {
               swal({
                title: 'Apakah Anda Yakin?',
                text: "Anda tidak dapat mengembalikan password yang telah diubah. Setelah ganti password berhasil, anda harus masuk kembali menggunakan password baru!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ubah!',
                cancelButtonText: 'Batalkan!',
                closeOnConfirm: false,
                closeOnCancel: false
              },
              function(isConfirm){
                if (isConfirm) {
                  $.ajax({
                      type: 'POST',
                      url: '<?=pegawai_url('pengaturan/ubah_password/')?>',
                      data: {
                        password: $("#new_password").val(),
                      }
                    }).done(function(response) {
                      if (response.success) {
                        swal('Sukses', 'Password Berhasil Dirubah. Silahkan masuk kembali . . . .  .', 'success');
                        setTimeout(function() { location.reload() },1500);
                      } else swal('Gagal', 'Password Gagal Dirubah.', 'error');
                   });
                } else {
                  swal(
                    'Batal',
                    'Proses Ubah Password dibatalkan! :)',
                    'error'
                  )
                }
              });
            }

              $("#repassword").keyup(function(event) {
                if ($("#new_password").val() != $("#repassword").val()) {
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

