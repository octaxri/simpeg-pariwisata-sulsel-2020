          <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
          <?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
          <?=($this->session->flashdata('passsukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('passsukses').'</div>': '')?>
          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DEFAULT -->
              <div class="panel">
                <div class="panel-body">
                  <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_informasi"><i class="glyphicon glyphicon-plus"></i> Tambah Informasi</a>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <table style="min-width: 100%;"  class="table table-striped datatable-Exnormal table-hover table-bordered">
                        <thead>
                          <tr>
                            <th> No.</th>
                            <th> Terakhir Diperbaharui</th>
                            <th> Diperbaharui Oleh</th>
                            <th> Ditujukan Untuk</th>
                            <th> Pesan Informasi</th>
                            <th> Berkas Yang Perlu Diunduh</th>
                            <th> </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; foreach ($data_informasi as $data_informasi): ?>
                            <tr data-id="<?=$data_informasi->id_informasi?>">
                              <td><?=$i?></td>
                              <td><?=date('d M Y',strtotime($data_informasi->uat))?></td>
                              <td><?=$data_informasi->nama_lengkap?></td>
                              <td><?=$data_informasi->ditujukan?></td>
                              <td><?=$data_informasi->isi?></td>
                              <td><a target="_blank" href="<?=upload_url('informasi/').$data_informasi->files?>"><?=$data_informasi->files?></a></td>
                              <td>
                                <a data-toggle="modal" data-target="#edit_informasi" class="btn btn-primary btn-xs" onclick="getData('<?=$data_informasi->id_informasi?>')"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                 <a onclick="hapus('<?=$data_informasi->id_informasi?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
          <div id="tambah_informasi" class="modal fade " role="dialog">
            <div class="modal-dialog modal-lg "><!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Tambah Informasi</h4>
                </div>
                <div class="modal-body">
                  <form id="add_form" class="form-horizontal" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Ditujukan Untuk</label>
                        <div class="col-sm-8">
                          <input type="text" name="ditujukan" id="ditujukan" class="form-control"  required >

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pesan Informasi</label>
                        <div class="col-sm-8">
                          <!-- <input type="text" id="Isi" class="form-control"  required > -->
                          <textarea id="isi" name="isi" class="form-control"></textarea>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Berkas (Jika Diperlukan)</label>
                         <div class="col-sm-8">
                          <input type="file" name="files" id="files" class="form-control">
                        </div>
                      </div>
                      <div class="form-group ">
                        <div class="col-md-3 col-md-offset-8">
                            <div class="col-sm-8">
                              <a  class="btn btn-primary btn-sm" id="add" onclick="add()" ><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                            </div>

                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div id="edit_informasi" class="modal fade " role="dialog">
            <div class="modal-dialog modal-lg"><!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Edit Informasi</h4>
                </div>
                <div class="modal-body">
                  <form id="edit_form" class="form-horizontal" enctype="multipart/form-data">
                      <!-- <div class="form-control"> -->
                          <div id="error_edit" class="col-sm-8 col-sm-offset-3">
                          </div>
                          <br>
                      <!-- </div> -->
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Ditujukan Untuk</label>
                        <div class="col-sm-8">
                          <input type="text" name="ditujukan" id="edit_ditujukan" class="form-control"  required >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pesan Informasi</label>
                        <div class="col-sm-8">
                          <!-- <input type="text" id="edit_Isi" class="form-control"  required > -->
                          <textarea id="edit_isi" name="isi" class="form-control"></textarea>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Berkas (Kosongkan Jika Tidak Ingin Diubah)</label>
                         <div class="col-sm-8">
                          <input type="file" name="files" id="edit_files" class="form-control">
                        </div>
                      </div>
                     <div class="form-group ">
                        <div class="col-md-3 col-md-offset-8">
                            <div class="col-sm-8">
                              <a  class="btn btn-primary btn-sm " id="edit"  ><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                            </div>

                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            function add() {
              var form = $('#add_form')[0]; // You need to use standard javascript object here
              var formData = new FormData(form);
               $.ajax({
                  type: 'POST',
                  url: '<?=admin_url('informasi/tambah_informasi/')?>',
                  data: formData,
                  type: 'POST',
                  contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                  processData: false, // NEEDED, DON'T OMIT THIS
                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    $('#tambah_informasi').modal('hide');
                    swal('Sukses', 'Tambah Informasi berhasil.', 'success');
                    setTimeout(function() { location.reload() },1500);
                  } else {
                    // $('.error_eselon').html(response.error);
                    swal('Gagal', response.error != null ? response.error : 'Tambah Informasi gagal', 'error');
                  }
                });
            }

            function edit(id) {
              var form = $('#edit_form')[0]; // You need to use standard javascript object here
              var formData = new FormData(form);
               $.ajax({
                  type: 'POST',
                  url: '<?=admin_url('informasi/edit_informasi/')?>'+id,
                  data: formData,
                  type: 'POST',
                  contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                  processData: false, // NEEDED, DON'T OMIT THIS
                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    swal({
                      type: 'success',
                      title: 'Sukses',
                      text: 'Edit Informasi Berhasil!',
                    },
                    function(){
                       $('#edit_informasi').modal('hide');
                       location.reload();
                    });
                  } else {
                    $('#error_edit').html(response.error);
                    swal('Gagal', 'Tambah Informasi gagal', 'error');
                  }
                });
            }

            function hapus(id) {
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
                      url: '<?=admin_url('informasi/hapus/')?>'+id
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
            function getData(id){
                $.post("<?=admin_url('informasi/getDataAjax/')?>"+id, function(result){
                      if (result.success) {
                        $("#edit_ditujukan").val(result.data.ditujukan);
                        $("#edit_isi").val(result.data.isi);
                        $("#edit").attr("onclick","edit("+result.data.id_informasi+")");
                      }
                });
            }

        </script>
