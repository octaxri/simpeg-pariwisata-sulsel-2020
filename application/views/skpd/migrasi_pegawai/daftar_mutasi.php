<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_mutasi_modal"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable-data-export" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Nama Lengkap</th>
                                    <th rowspan="2">NIP</th>
                                    <th rowspan="2">Jenis Kelamin</th>
                                    <th rowspan="2">Pangkat/Golongan/Ruang</th>
                                    <th rowspan="2">Jabatan</th>
                                    <th colspan="6">SK Mutasi</th>
                                    <th rowspan="2"></th>
                                </tr>
                                <tr>
                                    <th>TMT</th>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Penandatangan</th>
                                    <th>Tujuan Mutasi</th>
                                    <th>Lampiran</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; foreach ($daftar_mutasi as $daftar_mutasi): ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$daftar_mutasi->nama_lengkap?></td>
                                    <td><?=$daftar_mutasi->nip?></td>
                                    <td><?=$daftar_mutasi->jenis_kelamin?></td>
                                    <td><?=$daftar_mutasi->nama_eselon?></td>
                                    <td><?=$daftar_mutasi->nama_jabatan?></td>
                                    <td><?=date('d M Y',strtotime($daftar_mutasi->tmt_sk))?></td>
                                    <td><?=$daftar_mutasi->no_sk?></td>
                                    <td><?=date('d M Y',strtotime($daftar_mutasi->tanggal_sk))?></td>
                                    <td><?=$daftar_mutasi->penandatangan?></td>
                                    <td><?=$daftar_mutasi->tujuan_mutasi?></td>
                                    <td><a href="<?=upload_url('lampiranpegawai').$daftar_mutasi->lampiran?>"><?=$daftar_mutasi->lampiran?></a></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#edit_mutasi_modal" onclick="editData(<?=$daftar_mutasi->id_data?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a onclick="hapusData("<?=$daftar_mutasi->id_data?>")" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
<div id="tambah_mutasi_modal" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Mutasi</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="data_mutasi_add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="add_select2"  class="form-control"  style="width: 100%"></select>
                            <input type="hidden" name="nama_lengkap" id="add_namalengkap" class="form-control" >
                            <input type="hidden"  name="nip" id="add_nip" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select id="add_jeniskelamin" name="jenis_kelamin" class="form-control" >
                                <option value="-">-Daftar Jenis Kelamin-</option>
                                <option value="wanita">Perempuan</option>
                                <option value="pria">Laki-Laki</option>        
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
                        <div class="col-sm-9">
                            <select name="nama_eselon" id="add_pangkat" class="form-control">
                                <option value="">-Daftar Pangkat-</option>
                                <?php foreach ($data_eselon as $data_eselon1): ?>
                                    <option value="<?=$data_eselon1->nama_eselon?>"><?=$data_eselon1->nama_eselon?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <select id="add_jabatan" name="nama_jabatan" class="form-control">
                                <option value="">-Daftar Jabatan-</option>
                                <?php foreach ($data_jabatan as $data_jabatan1): ?>
                                    <option value="<?=$data_jabatan1->nama_jabatan?>"><?=$data_jabatan1->nama_jabatan?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT SK Mutasi</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="add_tmt" name="tmt_sk" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. SK Mutasi</label>
                        <div class="col-sm-9">
                            <input type="text" id="add_no_sk" name="no_sk" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal SK Mutasi</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="add_tanggal_sk" name="tanggal_sk" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Penandatangan</label>
                        <div class="col-sm-9">
                            <input type="text" id="add_penandatangan" name="penandatangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tujuan Mutasi</label>
                        <div class="col-sm-9">
                            <input type="text" id="add_tujuan" name="tujuan_mutasi" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Lampiran</label>
                        <div class="col-sm-9">
                            <input id="add_lampiran" type="file" name="lampiran" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" id="tambah_mutasi" onclick="add_data()"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="edit_mutasi_modal" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Mutasi</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="edit_select2" class="form-control"  style="width: 100%"></select>
                            <input type="hidden" id="edit_namalengkap" class="form-control" >
                            <input type="hidden" id="edit_nip" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select id="edit_jeniskelamin" class="form-control" >
                                <option value="-">-Daftar Jenis Kelamin-</option>
                                <option value="wanita">Perempuan</option>
                                <option value="pria">Laki-Laki</option>        
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Pangkat</label>
                        <div class="col-sm-9">
                            <select id="edit_pangkat" class="form-control">
                                <option value="">-Daftar Pangkat-</option>
                                <?php foreach ($data_eselon as $data_eselon1): ?>
                                    <option value="<?=$data_eselon1->nama_eselon?>"><?=$data_eselon1->nama_eselon?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <select id="edit_jabatan" class="form-control">
                                <option value="">-Daftar Jabatan-</option>
                                <?php foreach ($data_jabatan as $data_jabatan1): ?>
                                    <option value="<?=$data_jabatan1->nama_jabatan?>"><?=$data_jabatan1->nama_jabatan?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">TMT SK Mutasi</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tmt" name="tmt_sk" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">No. SK Mutasi</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_no_sk" name="no_sk" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tanggal SK Mutasi</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_sk" name="tanggal_sk" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Penandatangan</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_penandatangan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tujuan Mutasi</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_tujuan" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Lampiran</label>
                        <div class="col-sm-9">
                            <input id="edit_lampiran" type="file" name="lampiran" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" id="editMutasi()"><i class="glyphicon glyphicon-plus"></i>  Edit </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        <script type="text/javascript">
            function add_data() {
                var formData = new FormData($('#data_mutasi_add')[0]);
                formData.append('tax_file', $('input[type=file]')[0].files[0]); 
               $.ajax({
                  type: 'POST',
                  url: '<?=skpd_url('MigrasiPegawai/tambah_mutasi')?>',
                  data: new FormData($('#data_mutasi_add')[0]),
                    cache: false,
                    contentType: false,
                    processData: false

                }).done(function(response) {
                  if (response.success) {
                    // $("td[data-value='"+valGlob+"']").html(response.data.nama_eselon);
                    $('#tambah_mutasi_modal').modal('hide');
                    swal('Sukses', 'Tambah Mutasi berhasil.', 'success');
                    setTimeout(function() { location.reload() },1500);
                  } else {
                    // $('.error_eselon').html(response.error);
                    swal('Gagal', 'Tambah Mutasi gagal.', 'error');
                  }
                });
            }

             function editSend(id) {
               $.ajax({
                  type: 'POST',
                  url: '<?=skpd_url('MigrasiPegawai/tambah_mutasi')?>'+id,
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
                      url: '<?=skpd_url('MigrasiPegawai/tambah_mutasi')?>'+id+'/'+type
                    }).done(function(response) {
                      if (response.success) {
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

            function editData(id){
                $.post("<?=skpd_url('MigrasiPegawai/getDataAjax/')?>"+id+'/'+'mutasi', function(result){
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