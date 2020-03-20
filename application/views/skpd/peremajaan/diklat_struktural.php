<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel">
      <div class="panel-heading panel-danger">
        <h3 class="panel-title font-white">Verifikasi Data Diklat Struktural</h3>
      </div>
      <div class="panel-body">
       <table id="tbl_riwayat_diklat_struktural" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
        <thead>
          <tr >
            <th>No.</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Nama Diklat</th>
            <th>Jumlah Jam</th>
            <th>Penyelenggara</th>
            <th>Tempat</th>
            <th>Angkatan</th>
            <th>Tahun</th>
            <th>No. STTP</th>
            <th>Tgl. STTP</th>
            <th style="display: none;">Jenis Diklat</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($riwayat_struktural_notverified != NULL): ?>
            <?php $i = 1; ?>
            <?php foreach ($riwayat_struktural_notverified as $riwayat_struktural_notverified): ?>
              <?php if ($riwayat_struktural_notverified->jenis_diklat == 'struktural'): ?>
                <tr class="data-itemriwayatdiklat" data-id="<?=$riwayat_struktural_notverified->id_riwayat?>">
                  <td><?=$i?></td>
                  <td><?=$riwayat_struktural_notverified->nip?></td>
                  <td><?=$riwayat_struktural_notverified->nama_lengkap?></td>
                  <td><?=$riwayat_struktural_notverified->nama_diklat?></td>
                  <td><?=$riwayat_struktural_notverified->jumlah_jam?></td>
                  <td><?=$riwayat_struktural_notverified->penyelenggara?></td>
                  <td><?=$riwayat_struktural_notverified->tempat?></td>
                  <td><?=$riwayat_struktural_notverified->angkatan?></td>
                  <td><?=$riwayat_struktural_notverified->tahun?></td>
                  <td><?=$riwayat_struktural_notverified->no_sttp?></td>
                  <td><?=$riwayat_struktural_notverified->tanggal_sttp?></td>
                  <td style="display: none;"><?=$riwayat_struktural_notverified->jenis_diklat?></td>
                </tr>
                <?php $i++; ?>
              <?php endif ?>
            <?php endforeach ?>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">Riwayat Diklat Struktural</h3>
    </div>
    <div class="panel-body">
        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_diklat_struktural"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
        <hr>
     <table id="tbl_riwayat_diklat_struktural" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
      <thead>
        <tr >
          <th>No.</th>
          <th>NIP</th>
          <th>Nama Pegawai</th>
          <th>Nama Diklat</th>
          <th>Jumlah Jam</th>
          <th>Penyelenggara</th>
          <th>Tempat</th>
          <th>Angkatan</th>
          <th>Tahun</th>
          <th>No. STTP</th>
          <th>Tgl. STTP</th>
          <th>Admin</th>
          <th></th>
          <th style="display: none;">Jenis Diklat</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($riwayat_struktural_verified != NULL): ?>
          <?php $i = 1; ?>
          <?php foreach ($riwayat_struktural_verified as $riwayat_struktural_verified): ?>
            <?php if ($riwayat_struktural_verified->jenis_diklat == 'struktural'): ?>
              <tr class="data-itemriwayatdiklat" data-id="<?=$riwayat_struktural_verified->id_riwayat?>">
                <td><?=$i?></td>
                <td><?=$riwayat_struktural_verified->nip?></td>
                <td><?=$riwayat_struktural_verified->nama_lengkap?></td>
                <td><?=$riwayat_struktural_verified->nama_diklat?></td>
                <td><?=$riwayat_struktural_verified->jumlah_jam?></td>
                <td><?=$riwayat_struktural_verified->penyelenggara?></td>
                <td><?=$riwayat_struktural_verified->tempat?></td>
                <td><?=$riwayat_struktural_verified->angkatan?></td>
                <td><?=$riwayat_struktural_verified->tahun?></td>
                <td><?=$riwayat_struktural_verified->no_sttp?></td>
                <td><?=$riwayat_struktural_verified->tanggal_sttp?></td>
                <td><?=$riwayat_struktural_verified->admin?></td>
                <td>
                  <a onclick="editData('diklat',<?=$riwayat_struktural_verified->id_riwayat?>);" data-toggle="modal" data-target="#edit_diklat_struktural" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                  <a onclick="hapusRiwayat('diklat',<?=$riwayat_struktural_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                </td>
                <td style="display: none;"><?=$riwayat_struktural_verified->jenis_diklat?></td>
              </tr>
              <?php $i++; ?>
            <?php endif ?>
          <?php endforeach ?>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</div>
<!-- END PANEL DEFAULT -->
</div>
</div>


<!-- Tambah Diklat Struktural -->
<div id="tambah_diklat_struktural" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Diklat Struktural</h4>
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
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama_struktural" class="form-control" >
                        </div>
                    </div>          <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="jumlah_jam_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="penyelenggara_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="tempat_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="text" id="angkatan_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="number" id="tahun_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="no_sttp_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tanggal_sttp_struktural" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_diklat_struktural','struktural')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Diklat Struktural  -->
<div id="edit_diklat_struktural" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Diklat Struktural</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                      <!-- <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label> -->
                      <div class="col-sm-9">
                        <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
                        <input type="hidden" id="edit_nama_lengkap" class="form-control" >
                        <input type="hidden" id="edit_nip" class="form-control" >
                        <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_nama_struktural" class="form-control" >
                        </div>
                    </div>          <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Jumlah Jam</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_jumlah_jam_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_penyelenggara_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit_tempat_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_angkatan_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tahun_struktural" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">No. STTP</label>
                        <div class="col-sm-9">
                            <input type="number" id="edit_no_sttp_struktural" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahan" type="date" class="col-sm-3 control-label">Tgl. STTP</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tanggal_sttp_struktural" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_diklat')"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- END MAIN -->
<script>
  var idGlob;
  var valGlob;

  function addData_send(tipe, jenis_diklat) {
    switch (tipe) {
      case 'riwayat_diklat_struktural':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('PeremajaanData/addData/')?>'+'riwayat_diklat',
        data: {
          nip: $('#nip').val(),
          nama_lengkap: $('#nama_lengkap').val(),
          nama_diklat: $('#nama_struktural').val(),
          jumlah_jam: $('#jumlah_jam_struktural').val(),
          penyelenggara: $('#penyelenggara_struktural').val(),
          tempat: $('#tempat_struktural').val(),
          angkatan: $('#angkatan_struktural').val(),
          tahun: $('#tahun_struktural').val(),
          no_sttp: $('#no_sttp_struktural').val(),
          tanggal_sttp: $('#tanggal_sttp_struktural').val(),
          jenis_diklat: jenis_diklat,
          admin: $('#admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data Riwayat Diklat berhasil ditambah.', 'success');
        } else {
          swal('Gagal', 'Data Riwayat Diklat gagal ditambah.', 'error');
        }
      });
      break;
    }
  }

  function editData_send(model){
    switch (model) {
      case 'riwayat_diklat':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
        data: {
          nama_diklat: $('#edit_nama_struktural').val(),
          jumlah_jam: $('#edit_jumlah_jam_struktural').val(),
          penyelenggara: $('#edit_penyelenggara_struktural').val(),
          tempat: $('#edit_tempat_struktural').val(),
          angkatan: $('#edit_angkatan_struktural').val(),
          tahun: $('#edit_tahun_struktural').val(),
          no_sttp: $('#edit_no_sttp_struktural').val(),
          tanggal_sttp: $('#edit_tanggal_sttp_struktural').val(),
          admin : $('#edit_admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data Riwayat Diklat berhasil diperbaharui.', 'success');
        } else {
          swal('Gagal', 'Data Riwayat Diklat gagal diperbaharui.', 'error');
        }
      });
      break;
      default:
    }
  }

  function editData(model,id){
    switch (model) {
      case 'diklat':
      $('#edit_nip').val($("td[data-nip='"+id+"']").text());
      $('#edit_nama_lengkap').val($("td[data-namalengkap='"+id+"']").text());
      $('#edit_nama_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(3)").text());
      $('#edit_jumlah_jam_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(4)").text());
      $('#edit_penyelenggara_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(5)").text());
      $('#edit_tempat_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(6)").text());
      $('#edit_angkatan_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(7)").text());
      $('#edit_tahun_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(8)").text());
      $('#edit_no_sttp_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(9)").text());
      $('#edit_tanggal_sttp_struktural').val($(".data-itemriwayatdiklat[data-id='" + id + "']>td:eq(10)").text());
      idGlob = id;
      break;
      default:

    }
  }

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
    if (data.gambar == null) 
      {data.gambar = 'no_image.jpg';
  }
  var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
  '<span>'+ data.text+'</span>';
  return markup;
}

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
// $("#add_nip").val($("#add_select2").val());
// console.log($("#add_namalengkap").val());
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
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResult,
templateSelection: formatResultSelection,
minimumInputLength: 1
});
$("#edit_select2").on("select2:select", function (e) {
  $("#edit_namalengkap").val($("#edit_select2").text());
  $("#edit_nip").val($("#edit_select2").val());
});

</script>
