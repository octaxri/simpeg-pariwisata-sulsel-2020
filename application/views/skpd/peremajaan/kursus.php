<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel">
      <div class="panel-heading panel-danger">
        <h3 class="panel-title font-white">Verifikasi Data Kursus</h3>
      </div>
      <div class="panel-body">
        <table id="tbl_riwayat_kursus" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
          <thead>
            <tr >
              <th> No.</th>
              <th> NIP</th>
              <th> Nama Pegawai</th>
              <th> Tipe Kursus </th>
              <th> Instansi</th>
              <th> Jenis Kursus</th>
              <th> Nama Kursus</th>
              <th> Tahun</th>
              <th> Lama Kursus (Hari) </th>
              <th> Nomor Sertifikasi </th>
              <th> Institusi Penyelenggara</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($riwayat_kursus_notverified != NULL): ?>
              <?php $i=1; foreach ($riwayat_kursus_notverified as $riwayat_kursus_notverified): ?>
              <tr class="data-itemriwayatkursus" data-id="<?=$riwayat_kursus_notverified->id_riwayat?>">
                <td><?=$i?></td>
                <td><?=$riwayat_kursus_notverified->nip?></td>
                <td><?=$riwayat_kursus_notverified->nama_lengkap?></td>
                <td><?=$riwayat_kursus_notverified->tipe_kursus?></td>
                <td><?=$riwayat_kursus_notverified->instansi_kursus?></td>
                <td><?=$riwayat_kursus_notverified->jenis_kursus?></td>
                <td><?=$riwayat_kursus_notverified->nama_kursus?></td>
                <td><?=$riwayat_kursus_notverified->tahun_kursus?></td>
                <td><?=$riwayat_kursus_notverified->lama_kursus?></td>
                <td><?=$riwayat_kursus_notverified->no_sertifikat_kursus?></td>
                <td><?=$riwayat_kursus_notverified->institusi_kursus?></td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">Riwayat Kursus</h3>

    </div>
    <div class="panel-body">
        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_kursus"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
        <hr>
      <table id="tbl_riwayat_kursus" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
        <thead>
          <tr >
            <th> No.</th>
            <th> NIP</th>
            <th> Nama Pegawai</th>
            <th> Tipe Kursus </th>
            <th> Instansi</th>
            <th> Jenis Kursus</th>
            <th> Nama Kursus</th>
            <th> Tahun</th>
            <th> Lama Kursus (Hari) </th>
            <th> Nomor Sertifikasi </th>
            <th> Institusi Penyelenggara</th>
            <th> Admin</th>
            <th> </th>
          </tr>
        </thead>
        <tbody>
          <?php if ($riwayat_kursus_verified != NULL): ?>
            <?php $i=1; foreach ($riwayat_kursus_verified as $riwayat_kursus_verified): ?>
            <tr class="data-itemriwayatkursus" data-id="<?=$riwayat_kursus_verified->id_riwayat?>">
              <td><?=$i?></td>
              <td><?=$riwayat_kursus_verified->nip?></td>
              <td><?=$riwayat_kursus_verified->nama_lengkap?></td>
              <td><?=$riwayat_kursus_verified->tipe_kursus?></td>
              <td><?=$riwayat_kursus_verified->instansi_kursus?></td>
              <td><?=$riwayat_kursus_verified->jenis_kursus?></td>
              <td><?=$riwayat_kursus_verified->nama_kursus?></td>
              <td><?=$riwayat_kursus_verified->tahun_kursus?></td>
              <td><?=$riwayat_kursus_verified->lama_kursus?></td>
              <td><?=$riwayat_kursus_verified->no_sertifikat_kursus?></td>
              <td><?=$riwayat_kursus_verified->institusi_kursus?></td>
              <td><?=$riwayat_kursus_verified->admin?></td>
              <td>
                <a data-toggle="modal" data-target="#edit_kursus" onclick="editData('kursus',<?=$riwayat_kursus_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                <a href="#" onclick="hapusRiwayat('kursus',<?=$riwayat_kursus_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- END PANEL DEFAULT -->
</div>
</div>
<!-- Tambah Kursus -->
<div id="tambah_kursus" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Data Kursus</h4>
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
            <label  class="col-sm-3 control-label">Tipe Kursus</label>
            <div class="col-sm-9">
              <select id="tipe_kursus" class="form-control select-2">
                <option value=""></option>
                <option value="sertifikat">Sertifikat</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Jenis Kursus</label>
            <div class="col-sm-9">
              <input id="jenis_kursus" type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Nama Kursus</label>
            <div class="col-sm-9">
              <input id="nama_kursus" type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Lama Kursus</label>
            <div class="col-sm-9">
              <div class="input-group">
                <input id="lama_kursus" type="text" class="form-control" aria-describedby="basic-addon2" >
                <span class="input-group-addon" id="basic-addon2">Hari</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Tahun Kursus</label>
            <div class="col-sm-9">
              <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                <input id="tahun_kursus" type="text" class="form-control" >
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">No. Sertifikat</label>
            <div class="col-sm-9">
              <input id="no_sertifikat_kursus" type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label  type="date" class="col-sm-3 control-label">Instansi</label>
            <div class="col-sm-9">
              <select id="instansi_kursus" class="form-control select-2">
                <option value=""></option>
                <<?php foreach ($data_satker as $satker): ?>
                <option value="<?=$satker->nama_satker?>"><?=$satker->nama_satker?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label  type="date" class="col-sm-3 control-label">Penyelenggara</label>
          <div class="col-sm-9">
            <input id="institusi_kursus" type="text" class="form-control" >
          </div>
        </div>
        <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_kursus','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Edit  Kursus -->
<div id="edit_kursus" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Data Kursus</h4>
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
            <label  class="col-sm-3 control-label">Tipe Kursus</label>
            <div class="col-sm-9">
              <select id="edit_tipe_kursus" class="form-control select-2">
                <option value=""></option>
                <option value="sertifikat">Sertifikat</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Jenis Kursus</label>
            <div class="col-sm-9">
              <input id="edit_jenis_kursus" type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Nama Kursus</label>
            <div class="col-sm-9">
              <input id="edit_nama_kursus" type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Lama Kursus</label>
            <div class="col-sm-9">
              <div class="input-group">
                <input id="edit_lama_kursus" type="text" class="form-control" aria-describedby="basic-addon2" >
                <span class="input-group-addon" id="basic-addon2">Hari</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">Tahun Kursus</label>
            <div class="col-sm-9">
              <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                <input id="edit_tahun_kursus" type="text" class="form-control" >
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-3 control-label">No. Sertifikat</label>
            <div class="col-sm-9">
              <input id="edit_no_sertifikat_kursus" type="text" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label  type="date" class="col-sm-3 control-label">Instansi</label>
            <div class="col-sm-9">
              <select id="edit_instansi_kursus" class="form-control select-2">
                <option value=""></option>
                <<?php foreach ($data_satker as $satker1): ?>
                <option value="<?=$satker1->nama_satker?>"><?=$satker1->nama_satker?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label  type="date" class="col-sm-3 control-label">Penyelenggara</label>
          <div class="col-sm-9">
            <input id="edit_institusi_kursus" type="text" class="form-control" >
          </div>
        </div>
        <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_kursus');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
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
      case 'riwayat_kursus':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
        data: {
          nip: $('#nip').val(),
          nama_lengkap: $('#nama_lengkap').val(),
          tipe_kursus: $('#tipe_kursus').val(),
          jenis_kursus: $('#jenis_kursus').val(),
          nama_kursus: $('#nama_kursus').val(),
          lama_kursus: $('#lama_kursus').val(),
          tahun_kursus: $('#tahun_kursus').val(),
          no_sertifikat_kursus: $('#no_sertifikat_kursus').val(),
          instansi_kursus: $('#instansi_kursus').val(),
          institusi_kursus: $('#institusi_kursus').val(),
          admin: $('#admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else {
          swal('Gagal', 'Data gagal disimpan', 'error');
        }
      });
      break;
    }
  }

  function editData_send(model){
    switch (model) {
      case 'riwayat_kursus':
      $.ajax({
        type: 'POST',
        url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
        data: {
          tipe_kursus: $('#edit_tipe_kursus').val(),
          jenis_kursus: $('#edit_jenis_kursus').val(),
          nama_kursus: $('#edit_nama_kursus').val(),
          lama_kursus: $('#edit_lama_kursus').val(),
          tahun_kursus: $('#edit_tahun_kursus').val(),
          no_sertifikat_kursus: $('#edit_no_sertifikat_kursus').val(),
          instansi_kursus: $('#edit_instansi_kursus').val(),
          institusi_kursus: $('#edit_institusi_kursus').val(),
          admin: $('#edit_admin').val()
        }
      }).done(function(response) {
        if (response.success) {
          setTimeout(function() { location.reload() },1500);
          swal('Sukses', 'Data berhasil disimpan', 'success');
        } else {
          swal('Gagal', 'Data gagal disimpan', 'error');
        }
      });
      break;
      default:
    }
  }

  function editData(model,id){
    switch (model) {
      case 'kursus':
      $('#edit_tipe_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
      $('#edit_instansi_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(4)").text()).trigger('change');
      $('#edit_jenis_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(5)").text());
      $('#edit_nama_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(6)").text());
      $('#edit_tahun_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(7)").text());
      $('#edit_lama_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(8)").text());
      $('#edit_no_sertifikat_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(9)").text());
      $('#edit_institusi_kursus').val($(".data-itemriwayatkursus[data-id='" + id + "']>td:eq(10)").text());
      idGlob = id;
      break;
      default:

    }
  }

  function hapusRiwayat(method,id) {
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
             'Proses dibatalkan',
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
    {
      data.gambar = 'no_image.jpg';
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
    escapeMarkup: function (markup) { return markup; },
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

</script>
