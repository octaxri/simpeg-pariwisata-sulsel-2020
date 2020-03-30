          <?=($this->session->flashdata('passsukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('passsukses').'</div>': '')?>
          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DEFAULT -->
              <div class="panel">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <table style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                        <thead>
                          <tr>
                            <th width="20px;"> No.</th>
                            <th> Nama </th>
                            <th> NIP</th>
                            <th> E-mail</th>
                            <th>  </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; foreach ($data_pegawai as $data_pegawai): ?>
                          <tr data-id="<?=$data_pegawai->id_user?>">
                            <td><?=$i?></td>
                            <td><?=$data_pegawai->fullname?></td>
                            <td><?=$data_pegawai->nip?></td>
                            <td><?=$data_pegawai->email?></td>
                            <td style="width: 1px">
                              <a  class="btn btn-success btn-xs" onclick="resetPass('<?=$data_pegawai->id_user?>')"><i class="fa fa-warning"></i>&nbsp;Reset Password</a>
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
          <script type="text/javascript">
            function hapusData(type,id) {
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
                      url: '<?=admin_url('pengaturan/hapusData/')?>'+id+'/'+type
                    }).done(function(response) {
                      if (response.success) {
                        $("tr[data-id='"+id+"']").remove();
                        swal('Sukses', 'Data berhasil dihapus', 'success');
                        setTimeout(function() { location.reload() },1500);
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

            function resetPass(id) {
              swal({
                title: 'Apakah Anda Yakin?',
                text: "Anda tidak dapat mengembalikan password yang telah direset",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Reset',
                cancelButtonText: 'Batalkan',
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
                        swal('Sukses', 'Password berhasil direset', 'success');
                        setTimeout(function() { location.reload() },1500);
                      } else swal('Gagal', 'password gagal direset', 'error');
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
          </script>
