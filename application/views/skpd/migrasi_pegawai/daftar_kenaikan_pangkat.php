                    <div class="row">
                        <div class="col-md-12">
                            <!-- PANEL DEFAULT -->
                            <div class="panel">
                                <div class="panel-body">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pangkat"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table style="min-width: 100%;" class="table table-striped table-hover table-bordered datatable-Exnormal">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">No.</th>
                                                        <th rowspan="2">Nama Lengkap</th>
                                                        <th rowspan="2">NIP</th>
                                                        <th rowspan="2">Jenis Kelamin</th>
                                                        <th colspan="2" class="text-center">Pangkat Saat Ini</th>
                                                        <th colspan="2" class="text-center">Kenaikan Pangkat</th>
                                                        <th rowspan="2"> </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Pangkat/Golongan/Ruang</th>
                                                        <th>TMT</th>
                                                        <th>Pangkat/Golongan/Ruang</th>
                                                        <th>TMT</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i = 1; foreach ($data_kenaikanpangkat as $data_kenaikanpangkat) { ?>
                                                    <tr data-id="<?=$data_kenaikanpangkat->id_data?>">
                                                        <td class="text-center"><?=$i?></td>
                                                        <td ><?=$data_kenaikanpangkat->nama_lengkap?></td>
                                                        <td ><?=$data_kenaikanpangkat->nip?></td>
                                                        <td ><?=$data_kenaikanpangkat->jenis_kelamin?></td>
                                                        <td ><?=$data_kenaikanpangkat->spangkat?></td>
                                                        <td ><?=$data_kenaikanpangkat->stmt?></td>
                                                        <td ><?=$data_kenaikanpangkat->kpangkat?></td>
                                                        <td ><?=$data_kenaikanpangkat->ktmt?></td>
                                                        <td>
                                                          <a data-toggle="modal" data-target="#edit_pangkat" class="btn btn-primary btn-xs" onclick="editKenaikanPangkat('<?=$data_kenaikanpangkat->id_data?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                          <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('<?=$data_kenaikanpangkat->id_data?>','kenaikanpangkat');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
                            <!-- END PANEL DEFAULT -->
                        </div>
                    </div>
        <div id="tambah_pangkat" class="modal fade " role="dialog">
          <div class="modal-dialog "><!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center" >Tambah Data Kenaikan Pangkat</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                    <div class="col-sm-9">
                      <select id="add_select2" class="form-control"  style="width: 100%"></select>
                      <input type="hidden" id="add_namalengkap" class="form-control" >
                      <input type="hidden" id="add_nip" class="form-control" >
                    </div>
                  </div>
                  <!-- <div class="form-group"> -->
                    <!-- <label for="bahan" class="col-sm-3 control-label">NIP</label> -->
                    <!-- <div class="col-sm-9"> -->
                      <!-- <input type="hidden" id="add_nip" class="form-control" > -->
                    <!-- </div> -->
                  <!-- </div> -->
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <select id="add_jeniskelamin" class="form-control" >
                        <option value="-">-Pilih Jenis Kelamin-</option>
                        <option value="wanita">Perempuan</option>
                        <option value="pria">Laki-Laki</option>
                          
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pangkat (Saat Ini)</label>
                    <div class="col-sm-9">
                        <select id="add_spangkat" class="form-control">
                            <option value="">-Pilih Pangkat-</option>
                            <?php foreach ($data_eselon as $data_eselon1): ?>
                                <option value="<?=$data_eselon1->nama_eselon?>"><?=$data_eselon1->nama_eselon?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT (Saat Ini)</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="add_stmt" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pangkat (Kenaikan Pangkat)</label>
                    <div class="col-sm-9">
                        <select id="add_kpangkat" class="form-control">
                            <option value="">-Pilih Pangkat-</option>
                            <?php foreach ($data_eselon as $data_eselon2): ?>
                                <option value="<?=$data_eselon2->nama_eselon?>"><?=$data_eselon2->nama_eselon?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT (Kenaikan Pangkat)</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="add_ktmt" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class="form-group ">
                  <div class="col-md-3 col-md-offset-5">
                    <a  class="btn btn-primary btn-sm" onclick="add_data()"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div id="edit_pangkat" class="modal fade " role="dialog">
          <div class="modal-dialog "><!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Kenaikan Pangkat</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                    <div class="col-sm-9">
                      <select id="edit_select2" class="form-control"  style="width: 100%">
                           <option value="" selected="selected"></option>
                      </select>
                      <input type="hidden" id="edit_namalengkap" class="form-control" >
                      <input type="hidden" id="edit_nip" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <select id="edit_jeniskelamin" class="form-control" >
                        <option value="-">-Daftar Pangkat-</option>
                        <option value="wanita">Perempuan</option>
                        <option value="pria">Laki-Laki</option>
                          
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pangkat (Saat Ini)</label>
                    <div class="col-sm-9">
                        <select id="edit_spangkat" class="form-control">
                            <option value="">-Daftar Pangkat-</option>
                            <?php foreach ($data_eselon as $data_eselon3): ?>
                                <option value="<?=$data_eselon3->nama_eselon?>"><?=$data_eselon3->nama_eselon?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT (Saat Ini)</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="edit_stmt" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">Pangkat (Kenaikan Pangkat)</label>
                    <div class="col-sm-9">
                        <select id="edit_kpangkat" class="form-control">
                            <option value="">-Daftar Pangkat-</option>
                            <?php foreach ($data_eselon as $data_eselon4): ?>
                                <option value="<?=$data_eselon4->nama_eselon?>"><?=$data_eselon4->nama_eselon?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bahan" class="col-sm-3 control-label">TMT (Kenaikan Pangkat)</label>
                    <div class="col-sm-9">
                        <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" id="edit_ktmt" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class="form-group ">
                  <div class="col-md-3 col-md-offset-5">
                    <a  class="btn btn-primary btn-sm" id="edit_pangkatSend"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
            function add_data() {
               $.ajax({
                  type: 'POST',
                  url: '<?=skpd_url('MigrasiPegawai/tambah_kenaikanpangkat')?>',
                  data: {
                    nama_lengkap: $("#add_namalengkap").val(),
                    nip: $("#add_nip").val(),
                    jenis_kelamin: $("#add_jeniskelamin").val(),
                    spangkat: $("#add_spangkat").val(),
                    kpangkat: $("#add_kpangkat").val(),
                    stmt: $("#add_stmt").val(),
                    ktmt: $("#add_ktmt").val()
                  }
                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    $('#tambah_pangkat').modal('hide');
                    swal('Sukses', 'Tambah Pangkat berhasil.', 'success');
                    setTimeout(function() { location.reload() },1500);
                  } else {
                    // $('.error_eselon').html(response.error);
                    swal('Gagal', 'Tambah Pangkat gagal.', 'error');
                  }
                });
            }

            function edit_data(id) {
               $.ajax({
                  type: 'POST',
                  url: '<?=skpd_url('MigrasiPegawai/edit_kenaikanpangkat/')?>'+id,
                  data: {
                    nama_lengkap: $("#edit_namalengkap").val(),
                    nip: $("#edit_nip").val(),
                    jenis_kelamin: $("#edit_jeniskelamin").val(),
                    spangkat: $("#edit_spangkat").val(),
                    kpangkat: $("#edit_kpangkat").val(),
                    stmt: $("#edit_stmt").val(),
                    ktmt: $("#edit_ktmt").val()
                  }
                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    $('#edit_pangkat').modal('hide');
                    swal('Sukses', 'Edit Data berhasil.', 'success');
                    // setTimeout(function() { location.reload() },1500);
                  } else {
                    // $('.error_eselon').html(response.error);
                    swal('Gagal', 'Edit Data gagal.', 'error');
                  }
                });
            }

            function hapusData(id,type) {
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
                      url: '<?=skpd_url('MigrasiPegawai/hapusData/')?>'+id+'/'+type
                    }).done(function(response) {
                      if (response.success) {
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

            function editKenaikanPangkat(id){
                $.post("<?=skpd_url('MigrasiPegawai/getDataAjax/')?>"+id+'/'+'kenaikanpangkat', function(result){
                      if (result.success) {
                        $("#edit_namalengkap").val(result.data.nama_lengkap);
                        $("#edit_nip").val(result.data.nip);
                        var data = {
                            id: result.data.nip,
                            text: result.data.nama_lengkap
                        }
                        var newOption = new Option(data.name, data.id, false, false);
                        $('#edit_select2').append(newOption).trigger('change');
                        $("#edit_jeniskelamin").val(result.data.jenis_kelamin);
                        $("#edit_spangkat").val(result.data.spangkat);
                        $("#edit_stmt").val(result.data.stmt);
                        $("#edit_kpangkat").val(result.data.kpangkat);
                        $("#edit_ktmt").val(result.data.ktmt);
                        $("#edit_pangkatSend").attr("onclick","edit_data("+result.data.id_data+")");
                        // console.log(result.data.fullname);
                      }
                });
                
            }

            function formatResult (data) {
              if (!data.id) { return data.text; }
              if (data.gambar == '') {
                    data.gambar = 'no_image.jpg';
              }
              var markup = '<img style="margin-right : 10px;" width="25px" height="25px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
                '<span>'+ data.text+'</span>' +
                '<span> (NIP: '+ data.id+') </span>'
              return markup;
            };
            function formatResultSelection (data) {
               if (data.gambar == null) {
                    data.gambar = 'no_image.jpg';
              }
              var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
                '<span>'+ data.text+'</span>';
              return markup;
            }

            $("#add_select2").select2({
                  ajax: {
                    url: "<?=skpd_url('MigrasiPegawai/getDataPegawaiAjax/')?>",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                      return {
                        q: params.term
                      };
                    },
                     processResults: function (data) {
                        return {
                            results: $.map(data.data_pegawai, function (item) {
                                return {
                                    id: item.nip,
                                    text: item.nama_lengkap,
                                    gambar: item.gambar
                                }
                            })
                        };
                    },
                    cache: true
                  },
                  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
                  placeholder: 'Pilih Pegawai',
                  templateResult: formatResult,
                  templateSelection: formatResultSelection,
                  minimumInputLength: 1
                });
            $("#add_select2").on("select2:select", function (e) { 
               $("#add_namalengkap").val($("#add_select2").text());
               $("#add_nip").val($("#add_select2").val());
               // console.log($("#add_namalengkap").val());
             });

            $("#edit_select2").select2({
                  ajax: {
                    url: "<?=skpd_url('MigrasiPegawai/getDataPegawaiAjax/')?>",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                      return {
                        q: params.term
                      };
                    },
                     processResults: function (data) {
                        return {
                            results: $.map(data.data_pegawai, function (item) {
                                return {
                                    id: item.nip,
                                    text: item.nama_lengkap,
                                    gambar: item.gambar
                                }
                            })
                        };
                    },
                    cache: true
                  },
                  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
                  placeholder: 'Pilih Pegawai',
                  templateResult: formatResult,
                  templateSelection: formatResultSelection,
                  minimumInputLength: 1
                });
            $("#edit_select2").on("select2:select", function (e) { 
               $("#edit_namalengkap").val($("#edit_select2").text());
               $("#edit_nip").val($("#edit_select2").val());
               // console.log($("#add_namalengkap").val());
             });
            
        </script>
