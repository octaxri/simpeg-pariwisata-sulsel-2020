<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel">
      <div class="panel-heading panel-danger">
        <h3 class="panel-title font-white">Verikasi Data Pendidikan</h3>
      </div>
      <div class="panel-body">
       <table style="min-width:100% !important;" id="tbl_riwayat_pendidikan" class="display table table-bordered table-sorting datatable-Exnormal no-footer" role="grid">
        <thead>
          <tr class="data-item" data-id="">
            <th>No.</th>
            <th>NIP Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Tingkat </th>
            <th>Pendidikan</th>
            <th>Instansi</th>
            <th>No. Ijazah</th>
            <th>Tgl. Lulus</th>
          </tr>
        </thead>
        <tbody >
          <?php if ($riwayat_pendidikan_notverified != NULL): ?>
            <?php $i = 1; foreach ($riwayat_pendidikan_notverified as $riwayat_pendidikan_notverified): ?>
            <tr class="data-itemriwayatpendidikan" data-id="<?=$riwayat_pendidikan_notverified->id_riwayat?>">
              <td><?=$i?></td>
              <td data-nip='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->nip?></td>
              <td data-namalengkap='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->nama_lengkap?></td>
              <td data-tingkat='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->tingkat?></td>
              <td data-namaprodi='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->nama_prodi?></td>
              <td data-namajurusan='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->nama_jurusan?></td>
              <td data-namasekolah='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->nama_sekolah?></td>
              <td data-noijazah='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->no_ijazah?></td>
              <td data-tahunlulus='<?=$riwayat_pendidikan_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->tahun_lulus?></td>
              <td style="font-size: 0.8em;"><?=$riwayat_pendidikan_notverified->admin?></td>
            </tr>
            <?php $i++; endforeach ?>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">Riwayat Pendidikan</h3>

    </div>
    <div class="panel-body">
        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pendidikan"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
        <hr>
      <table style="min-width:100% !important;" id="tbl_riwayat_pendidikan" class="display table table-bordered table-sorting datatable-Exnormal no-footer" role="grid">
        <thead>
          <tr class="data-item" data-id="">
            <th>No.</th>
            <th>NIP Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Tingkat </th>
            <th>Program Studi</th>
            <th>Jurusan</th>
            <th>Nama Sekolah</th>
            <th>No. Ijazah</th>
            <th>Tahun Lulus</th>
            <th width="95">Status Pendidikan</th>
            <th>Admin</th>
            <th></th>
          </tr>
        </thead>
        <tbody >
          <?php if ($riwayat_pendidikan_verified != NULL): ?>
            <?php $i = 1; foreach ($riwayat_pendidikan_verified as $riwayat_pendidikan_verified): ?>
            <tr class="data-itemriwayatpendidikan" data-id="<?=$riwayat_pendidikan_verified->id_riwayat?>">
              <td><?=$i?></td>
              <td data-nip='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->nip?></td>
              <td data-namalengkap='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->nama_lengkap?></td>
              <td data-tingkat='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->tingkat?></td>
              <td data-namaprodi='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->nama_prodi?></td>
              <td data-namajurusan='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->nama_jurusan?></td>
              <td data-namasekolah='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->nama_sekolah?></td>
              <td data-noijazah='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->no_ijazah?></td>
              <td data-tahunlulus='<?=$riwayat_pendidikan_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->tahun_lulus?></td>
              <td style="font-size: 0.8em;">
                <label class="switch-input">
                  <input type="radio" class="saat_ini" data-nipstatus='<?=$riwayat_pendidikan_verified->nip?>' data-idriwayatstatus='<?=$riwayat_pendidikan_verified->id_riwayat?>' name="switch-radio-<?=$riwayat_pendidikan_verified->nip?>" <?=$riwayat_pendidikan_verified->saat_ini == '1' ? 'checked' : ''?>>
                  <i data-swon-text="YES" data-swoff-text="NO"></i> Saat Ini
                  </label
                </td>
                <td style="font-size: 0.8em;"><?=$riwayat_pendidikan_verified->admin?></td>
                <td>
                  <a style="" data-toggle="modal" data-target="#edit_pendidikan" onclick="editData('pendidikan',<?=$riwayat_pendidikan_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                  <a style="" onclick="hapusRiwayat('pendidikan',<?=$riwayat_pendidikan_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                </td>
              </tr>
              <?php $i++; endforeach ?>
            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- END PANEL DEFAULT -->
  </div>
</div>

<!-- Tambah Pendidikan -->
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
            <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
            <div class="col-sm-9">
              <select id="add_select2" class="form-control select2"  style="width: 100%"></select>
              <input type="hidden" id="nama_lengkap" class="form-control" >
              <input type="hidden" id="nip" class="form-control" >
              <input type="hidden" id="admin" value="<?=$this->session->fullname?>" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tingkat</label>
            <div class="col-sm-9">
              <select id="tingkat" class="select-2 form-control" >
                <option value=""></option>
                <?php foreach ($data_pendidikan as $data_pendidikan2): ?>
                  <option value="<?=$data_pendidikan2->nama_pendidikan?>"><?=$data_pendidikan2->nama_pendidikan?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama Program Studi</label>
            <div class="col-sm-9">
              <input type="text" id="nama_prodi" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Nama Jurusan</label>
            <div class="col-sm-9">
              <input type="text"  id="nama_jurusan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Nama Sekolah</label>
            <div class="col-sm-9">
              <input type="text"  id="nama_sekolah" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">No. Ijazah</label>
            <div class="col-sm-9">
              <input type="text" id="no_ijazah" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tahun Lulus</label>
            <div class="col-sm-9">
              <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                <input type="text" id="tahun_lulus" class="form-control">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>

          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_pendidikan','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Pendidikan  -->
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
            <!-- <label for="bahan" class="col-sm-3 control-label" >Pilih Pegawai</label> -->
            <div class="col-sm-9">
              <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
              <input type="hidden" id="edit_nama_lengkap" class="form-control" >
              <input type="hidden" id="edit_nip" class="form-control" >
              <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tingkat</label>
            <div class="col-sm-9">
              <select id="edit_tingkat" class="select-2 form-control" >
                <option value=""></option>
                <?php foreach ($data_pendidikan as $data_pendidikan2): ?>
                  <option value="<?=$data_pendidikan2->nama_pendidikan?>"><?=$data_pendidikan2->nama_pendidikan?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Nama Program Studi</label>
            <div class="col-sm-9">
              <input type="text" id="edit_nama_prodi" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Nama Jurusan</label>
            <div class="col-sm-9">
              <input type="text"  id="edit_nama_jurusan" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Nama Sekolah</label>
            <div class="col-sm-9">
              <input type="text"  id="edit_nama_sekolah" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">No. Ijazah</label>
            <div class="col-sm-9">
              <input type="text" id="edit_no_ijazah" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tgl. Lulus</label>
            <div class="col-sm-9">
              <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                <input type="text" id="edit_tahun_lulus" class="form-control">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
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

<script>
  var idGlob;
  var valGlob;


  function addData_send(tipe, jenis_diklat) {
    switch (tipe) {
      case 'riwayat_pendidikan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
        data: {
          nip: $('#nip').val(),
          nama_lengkap: $('#nama_lengkap').val(),
          tingkat: $('#tingkat').val(),
          nama_prodi: $('#nama_prodi').val(),
          nama_jurusan: $('#nama_jurusan').val(),
          nama_sekolah: $('#nama_sekolah').val(),
          no_ijazah: $('#no_ijazah').val(),
          tahun_lulus: $('#tahun_lulus').val(),
          admin: $('#admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data Riwayat Pendidikan berhasil ditambah.', 'success');
        } else {
          swal('Gagal', 'Data Riwayat Pendidikan gagal ditambah.', 'error');
        }
      });
      break;
    }
  };

  function editData_send(model){
    switch (model) {
      case 'pendidikan':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
        data: {
          tingkat: $('#edit_tingkat').val(),
          nama_prodi: $('#edit_nama_prodi').val(),
          nama_jurusan: $('#edit_nama_jurusan').val(),
          nama_sekolah: $('#edit_nama_sekolah').val(),
          no_ijazah: $('#edit_no_ijazah').val(),
          tahun_lulus: $('#edit_tahun_lulus').val(),
          admin: $('#edit_admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data Riwayat Pendidikan berhasil diperbaharui.', 'success');
        } else {
          swal('Gagal', 'Data Riwayat Pendidikan gagal diperbaharui.', 'error');
        }
      });
      break;
      default:
    }
  };

  function editData(model,id){
    switch (model) {
      case 'pendidikan':
      $('#edit_tingkat').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
      $('#edit_nama_prodi').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(4)").text());
      $('#edit_nama_jurusan').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(5)").text());
      $('#edit_nama_sekolah').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(6)").text());
      $('#edit_no_ijazah').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(7)").text());
      $('#edit_tahun_lulus').val($(".data-itemriwayatpendidikan[data-id='" + id + "']>td:eq(8)").text());
      idGlob = id;
      break;
      default:

    }
  };

  function hapusRiwayat(method,id) {
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
          url: '<?=admin_url('PeremajaanData/hapusRiwayat/')?>'+method+'/'+id
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data Riwayat berhasil dihapus.', 'success');
          } else swal('Gagal', 'Data Riwayat Gagal dihapus.', 'error');
        });
      } else {
        swal(
             'Batal',
             'Proses Hapus Data dibatalkan! :)',
             'error'
             )
      }
    });
  };

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
    if (data.gambar == null) 
    {
      data.gambar = 'no_image.jpg';
    }
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
  };

  $("#add_select2").select2({
    ajax: {
      url: "<?=admin_url('PeremajaanData/getDataPegawaiAjax/')?>",
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
    $("#nama_lengkap").val($("#add_select2").text());
    $("#nip").val($("#add_select2").val());
  });

  $("#edit_select2").select2({
    ajax: {
      url: "<?=admin_url('PeremajaanData/getDataPegawaiAjax/')?>",
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
    escapeMarkup: function (markup) { return markup; }, 
    placeholder: 'Pilih Pegawai',
    templateResult: formatResult,
    templateSelection: formatResultSelection,
    minimumInputLength: 1
  });

  $("#edit_select2").on("select2:select", function (e) {
    $("#edit_namalengkap").val($("#edit_select2").text());
    $("#edit_nip").val($("#edit_select2").val());
  });

  $('.saat_ini').on('change', function()
  {
    var nip =$(this).data("nipstatus");
    var id =$(this).data("idriwayatstatus");
    $.ajax({
            type : "POST",
            url : "<?=skpd_url('PeremajaanData/changePendidikanStatus')?>",
            data : {
              nip : nip,
              id  : id
            }
    }).done(function(response) {
        if (response.success) {
          console.log(response.data);
          for (var i = response.data.all.length - 1; i >= 0; i--) {
            $(".saat_ini[data-nipstatus='" + response.data.all[i].nip + "']").removeAttr('checked');
          };
          $(".saat_ini[data-idriwayatstatus='" + response.data.changed[0].id_riwayat + "']").prop('checked', true);
        } else {

          $(".saat_ini[data-idriwayatstatus='" + id + "']").prop('checked', false);
          swal('Gagal', 'Perubahan Status Pendidikan gagal, mohon cek koneksi anda.', 'error');

        };
    }).fail(function(xhr, status, error){
         $(".saat_ini[data-idriwayatstatus='" + id + "']").prop('checked', false);
         swal('Gagal', 'Perubahan Status Pendidikan gagal, mohon cek koneksi anda.', 'error');
    });
  });

</script>
