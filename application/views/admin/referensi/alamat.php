<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Provinsi</h3>
      </div>
      <div class="panel-body">
        <a data-toggle="modal" data-target="#tambah_provinsi_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Provinsi</a>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <table id="tbl_provinsi" style="min-width: 100%" class="table table-bordered datatable-Exnormal">
              <thead>
                <tr>
                  <th width="50px;">No.</th>
                  <th>Provinsi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($data_provinsi as $data_provinsi1) { ?>
                  <tr data-id="<?=$data_provinsi1->id_provinsi?>">
                    <td class="text-center"><?=$i?></td>
                    <td data-value="<?=$data_provinsi1->nama_provinsi?>"><?=$data_provinsi1->nama_provinsi?></td>
                    <td>
                      <a data-toggle="modal" data-target="#edit_provinsi_modal" class="btn btn-primary btn-xs" onclick="editData('provinsi','<?=$data_provinsi1->id_provinsi?>','<?=$data_provinsi1->nama_provinsi?>');"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                      <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('provinsi','<?=$data_provinsi1->id_provinsi?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Data Kabupaten/Kota</h3>
        </div>
        <div class="panel-body">
          <a data-toggle="modal" data-target="#tambah_kab_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Kabupaten/Kota</a>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <table id="tbl_kab" class="table table-bordered">
                <thead>
                  <tr>
                    <th width="50px;">No.</th>
                    <th>Provinsi</th>
                    <th>Total Kabupaten/Kota</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; foreach ($data_kabupaten as $data_kabupaten1) { ?>
                    <tr>
                      <td class="text-center"><?=$i?></td>
                      <td data-value1="<?=$data_kabupaten1->nama_provinsi?>"><?=$data_kabupaten1->nama_provinsi?></td>
                      <td ><?=$data_kabupaten1->total?></td>
                      <td>
                        <a class="btn btn-primary btn-xs" onclick="lihatData('nama_provinsi','<?=$data_kabupaten1->nama_provinsi?>');"><i class="fa fa-eye" ></i>&nbsp;Lihat</a>
<!--                        <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('kabupaten','<?=$data_kabupaten1->id_kabupaten?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a> -->
                      </td>
                    </tr>
                    <?php $i++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Data Kecamatan</h3>
          </div>
          <div class="panel-body">
            <a data-toggle="modal" data-target="#tambah_kec_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Kecamatan</a>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <table id="tbl_kec" class="table table-bordered">
                  <thead>
                    <tr>
                      <th width="50px;">No.</th>
                      <th>Kabupaten</th>
                      <th>Total Kecamatan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; foreach ($data_kecamatan as $data_kecamatan1) { ?>
                      <tr>
                        <td class="text-center"><?=$i?></td>
                        <td data-value1="<?=$data_kecamatan1->nama_kabupaten?>"><?=$data_kecamatan1->nama_kabupaten?></td>
                        <td ><?=$data_kecamatan1->total?></td>
                        <td>
                          <a class="btn btn-primary btn-xs" onclick="lihatData('nama_kabupaten','<?=$data_kecamatan1->nama_kabupaten?>');"><i class="fa fa-eye" ></i>&nbsp;Lihat</a>
<!--                          <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('kecamatan','<?=$data_kecamatan1->id_kecamatan?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a> -->
                        </td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Data Kelurahan</h3>
            </div>
            <div class="panel-body">
              <a data-toggle="modal" data-target="#tambah_kel_modal" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>&nbsp;Tambah Data Kelurahan</a>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <table id="tbl_kel" class="table table-bordered">
                    <thead>
                      <tr>
                        <th width="50px;">No.</th>
                        <th>Kecamatan</th>
                        <th>Total Kelurahan</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; foreach ($data_kelurahan as $data_kelurahan1) { ?>
                        <tr>
                          <td class="text-center"><?=$i?></td>
                          <td data-value1="<?=$data_kelurahan1->nama_kecamatan?>"><?=$data_kelurahan1->nama_kecamatan?></td>
                          <td ><?=$data_kelurahan1->total?></td>
                          <td>
                            <a class="btn btn-primary btn-xs" onclick="lihatData('nama_kecamatan','<?=$data_kelurahan1->nama_kecamatan?>');"><i class="fa fa-eye" ></i>&nbsp;Lihat</a>
<!--                            <a href="#" class="btn btn-danger btn-xs" onclick="hapusData('kelurahan','<?=$data_kelurahan1->id_kelurahan?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a> -->
                          </td>
                        </tr>
                        <?php $i++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        <!-- END PANEL DEFAULT -->
      </div>
    </div>
    <div id="tambah_provinsi_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Tambah Data Provinsi</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Provinsi</label>
                <div class="col-sm-9">
                  <input type="text" id="tambah_provinsi" class="form-control" >
                  <p class="error_provinsi"></p>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('provinsi')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="edit_provinsi_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Data Provinsi</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Provinsi</label>
                <div class="col-sm-9">
                  <input type="text" id="value_provinsi" class="form-control" >
                  <p class="error_provinsi"></p>
                  <input type="hidden" id="id_provinsi" class="form-control" >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="editData_send('provinsi');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="tambah_kab_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Tambah Data Kabupaten/Kota</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Provinsi</label>
                <div class="col-sm-9">
                  <select class="swal2-select select-2 form-control" id="tambah_selprovinsi" style="display: block;">
                    <option value="" selected disabled="">Pilih Provinsi</option>
                    <?php foreach ($data_provinsi as $data_provinsi2): ?>
                      <option value="<?=$data_provinsi2->nama_provinsi?>"><?=$data_provinsi2->nama_provinsi?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kabupaten/Kota</label>
                <div class="col-sm-9">
                  <input type="text" id="tambah_kab" class="form-control" >
                  <p class="error_kab"></p>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('kab')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="daftar_kab" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Daftar Kabupaten/Kota</h4>
          </div>
          <div class="modal-body">
            <table id="tbl_daftar-kab" class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px;">No.</th>
                  <th>Kabupaten/Kota </br> (Klik Nama Kabupaten/Kota Untuk Mengedit)</th>
                  <th width="100px;"></th>
                </tr>
              </thead>
              <tbody id="body-daftar-kab">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div id="edit_kab_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Data Kabupaten/Kota</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Provinsi</label>
                <div class="col-sm-9">
                  <select class="swal2-select select-2 form-control" id="value_selprovinsi" style="display: block;">
                    <option value="" disabled="">Pilih Provinsi</option>
                    <?php foreach ($data_provinsi as $data_provinsi3): ?>
                      <option value="<?=$data_provinsi3->nama_provinsi?>"><?=$data_provinsi3->nama_provinsi?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kabupaten/Kota</label>
                <div class="col-sm-9">
                 <input type="text" id="value_kab" class="form-control" >
                 <p class="error_kab"></p>
                 <input type="hidden" id="id_kab" class="form-control" >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="editData_send('kab');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="tambah_kec_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Tambah Data Kecamatan</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kabupaten/Kota</label>
                <div class="col-sm-9">
                  <select class="swal2-select select-2 form-control" id="tambah_selkabupaten" style="display: block;">
                    <option value="" selected disabled="">Pilih Kabupaten/Kota</option>
                    <?php foreach ($datalist_kabupaten as $datalist_kabupaten2): var_dump($datalist_kabupaten2);?>

                      <option value="<?=$datalist_kabupaten2->nama_kabupaten?>"><?=$datalist_kabupaten2->nama_kabupaten?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kecamatan</label>
                <div class="col-sm-9">
                  <input type="text" id="tambah_kec" class="form-control" >
                  <p class="error_kec"></p>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('kec')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="daftar_kec" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Daftar Kecamatan</h4>
          </div>
          <div class="modal-body">
            <table id="tbl_daftar-kec" class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px;">No.</th>
                  <th>Kecamatan </br> (Klik Nama Kecamatan Untuk Mengedit)</th>
                  <th width="100px;"></th>
                </tr>
              </thead>
              <tbody id="body-daftar-kec">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div id="edit_kec_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Data Kecamatan</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kabupaten/Kota</label>
                <div class="col-sm-9">
                  <select class="swal2-select select-2 form-control" id="value_selkabupaten" style="display: block;">
                    <option value="" disabled="">Pilih Kabupaten/Kota</option>
                    <?php foreach ($datalist_kabupaten as $datalist_kabupaten3): ?>
                      <option value="<?=$datalist_kabupaten3->nama_kabupaten?>"><?=$datalist_kabupaten3->nama_kabupaten?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kecamatan</label>
                <div class="col-sm-9">
                 <input type="text" id="value_kec" class="form-control" >
                 <p class="error_kec"></p>
                 <input type="hidden" id="id_kec" class="form-control" >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="editData_send('kec');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="tambah_kel_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Tambah Data Kelurahan</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kecamatan</label>
                <div class="col-sm-9">
                  <select class="swal2-select select-2 form-control" id="tambah_selkecamatan" style="display: block;">
                    <option value="" selected disabled="">Pilih Kecamatan</option>
                    <?php foreach ($datalist_kecamatan as $datalist_kecamatan2): var_dump($datalist_kecamatan)?>
                      <option value="<?=$datalist_kecamatan2->nama_kecamatan?>"><?=$datalist_kecamatan2->nama_kecamatan?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kelurahan</label>
                <div class="col-sm-9">
                  <input type="text" id="tambah_kel" class="form-control" >
                  <p class="error_kel"></p>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="refrensidata_send('kel')"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="daftar_kel" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Daftar Kelurahan</h4>
          </div>
          <div class="modal-body">
            <table id="tbl_daftar-kel" class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px;">No.</th>
                  <th>Kelurahan </br> (Klik Nama Kelurahan Untuk Mengedit)</th>
                  <th width="100px;"></th>
                </tr>
              </thead>
              <tbody id="body-daftar-kel">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div id="edit_kel_modal" class="modal fade " role="dialog">
      <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Data Kelurahan</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kecamatan</label>
                <div class="col-sm-9">
                  <select class="swal2-select select-2 form-control" id="value_selkecamatan" style="display: block;">
                    <option value="" disabled="">Pilih Kecamatan</option>
                    <?php foreach ($data_kecamatan as $data_kecamatan3): ?>
                      <option value="<?=$data_kecamatan3->nama_kecamatan?>"><?=$data_kecamatan3->nama_kecamatan?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bahan" class="col-sm-3 control-label">Kelurahan</label>
                <div class="col-sm-9">
                 <input type="text" id="value_kel" class="form-control" >
                 <p class="error_kel"></p>
                 <input type="hidden" id="id_kel" class="form-control" >
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-3 col-md-offset-5">
                  <a  class="btn btn-primary btn-sm" onclick="editData_send('kel');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
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
      var valGlob2;
      var valGlob3;
      var valGlob4;
      var totaldatakab;
      var totaldatakec;
      var totaldatakel;

    function editData(method,id,value) {
        idGlob = id;
        valGlob = value;
        switch (method) {
          case 'provinsi':
          $('#id_provinsi').val(idGlob);
          $('#value_provinsi').val($("td[data-value='"+value+"']").text());
        // console.log($('#valueAgama').val());
        break;
      }

    }

    function refrensidata_send(method) {
      switch (method) {
        case 'provinsi':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/tambah_provinsi')?>',
          data: {
            nama_provinsi: $('#tambah_provinsi').val()
          }
        }).done(function(response) {
          if (response.success) {
            $('#tbl_provinsi').append('<tr data-id="' + response.data.id_provinsi + '"><td class="text-center">.</td><td>' + response.data.nama_provinsi + '</td><td ><a  data-toggle="modal" data-target="#edit_provinsi_modal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
            $('.error_provinsi').html('');
            $('#tambah_provinsi').val('');
            $('#tambah_provinsi_modal').modal('hide');
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data Provinsi kerja berhasil ditambah.', 'success');
          } else {
            swal('Gagal', 'Data Provinsi kerja gagal ditambah.', 'error');
          // $('#tambah_provinsi').modal('hide');
          $('.error_provinsi').html(response.error);
        }
      });
        break;

        case 'kab':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/tambah_kab')?>',
          data: {
            nama_kabupaten: $('#tambah_kab').val(),
            nama_provinsi: $('#tambah_selprovinsi').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            $('.error_kab').html('');
            $('#tambah_kab').val('');
            $('#tambah_kab').val('');
            $('#tambah_kab_modal').modal('hide');
            swal('Sukses', 'Data kabupaten/kota kerja berhasil ditambah.', 'success');
          } else
          {
            swal('Gagal', 'Data kabupaten/kote kerja gagal ditambah.', 'error');
            $('.error_kab').html(response.error);
           // $('#tambah_kab_modal').modal('hide');
         }
       });
        break;

        case 'kec':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/tambah_kec')?>',
          data: {
            nama_kecamatan: $('#tambah_kec').val(),
            nama_kabupaten: $('#tambah_selkabupaten').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            $('.error_kec').html('');
            $('#tambah_kec').val('');
            $('#tambah_kec').val('');
            $('#tambah_kec_modal').modal('hide');
            swal('Sukses', 'Data kecamatan kerja berhasil ditambah.', 'success');
          } else
          {
            swal('Gagal', 'Data kecamatan kerja gagal ditambah.', 'error');
            $('.error_kec').html(response.error);
           // $('#tambah_kab_modal').modal('hide');
         }
       });
        break;

        case 'kel':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/tambah_kel')?>',
          data: {
            nama_kelurahan: $('#tambah_kel').val(),
            nama_kecamatan: $('#tambah_selkecamatan').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            $('.error_kel').html('');
            $('#tambah_kel').val('');
            $('#tambah_kel').val('');
            $('#tambah_kel_modal').modal('hide');
            swal('Sukses', 'Data Kelurahan kerja berhasil ditambah.', 'success');
          } else
          {
            swal('Gagal', 'Data Kelurahan kerja gagal ditambah.', 'error');
            $('.error_kel').html(response.error);
           // $('#tambah_kab_modal').modal('hide');
         }
       });
        break;
      }
    }

    function editData_send(method){
      switch (method) {
        case 'provinsi':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/edit_provinsi/')?>'+idGlob,
          data: {
            id_provinsi: idGlob,
            nama_provinsi: $('#value_provinsi').val()
          }
        }).done(function(response) {
          if (response.success) {
            $("td[data-value='"+valGlob+"']").html(response.data.nama_provinsi);
            $('.error_provinsi').html('');
            $('#edit_provinsi_modal').modal('hide');
            swal('Sukses', 'Data Provinsi berhasil diedit.', 'success');
          } else {
            $('.error_provinsi').html(response.error);
            swal('Gagal', 'Data Provinsi gagal diedit.', 'error');
          }
        });
        break;

        case 'kab':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/edit_kab/')?>'+idGlob,
          data: {
            id_kab: idGlob,
            nama_kabupaten: $('#value_kab').val(),
            nama_provinsi: $('#value_selprovinsi').val()
          }
        }).done(function(response) {
          if (response.success) {
            $("td[data-value1='"+valGlob2+"']").html(response.data.nama_provinsi);
            $("td[data-value2='"+valGlob+"']").html(response.data.nama_kabupaten);
            $('.error_kab').html(response.error);
            $('#edit_kab_modal').modal('hide');
            swal('Sukses', 'Data Kabupaten berhasil diedit.', 'success');
          } else
          {
            $('.error_kab').html(response.error);
            swal('Gagal', 'Data Kabupaten gagal diedit.', 'error');
          }
        });
        break;

        case 'kec':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/edit_kec/')?>'+idGlob,
          data: {
            id_kec: idGlob,
            nama_kecamatan: $('#value_kec').val(),
            nama_kabupaten: $('#value_selkabupaten').val()
          }
        }).done(function(response) {
          if (response.success) {
            $("td[data-value1='"+valGlob3+"']").html(response.data.nama_kecamatan);
            $("td[data-value2='"+valGlob2+"']").html(response.data.nama_kecamatan);
            $('.error_kec').html(response.error);
            $('#edit_kec_modal').modal('hide');
            swal('Sukses', 'Data Kecamatan berhasil diedit.', 'success');
          } else
          {
            $('.error_kec').html(response.error);
            swal('Gagal', 'Data Kecamatan gagal diedit.', 'error');
          }
        });
        break;

        case 'kel':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('referensiAjax/edit_kel/')?>'+idGlob,
          data: {
            id_kel: idGlob,
            nama_kelurahan: $('#value_kel').val(),
            nama_kecamatan: $('#value_selkecamatan').val()
          }
        }).done(function(response) {
          if (response.success) {
            $("td[data-value1='"+valGlob4+"']").html(response.data.nama_kelurahan);
            $("td[data-value2='"+valGlob3+"']").html(response.data.nama_kelurahan);
            $('.error_kel').html(response.error);
            $('#edit_kel_modal').modal('hide');
            swal('Sukses', 'Data Kelurahan berhasil diedit.', 'success');
          } else
          {
            $('.error_kel').html(response.error);
            swal('Gagal', 'Data Kelurahan gagal diedit.', 'error');
          }
        });
        break;
      }
    }

    function lihatData(kategori,data_get){
        switch (kategori) {
          case 'nama_provinsi':
              $.ajax({
                type: 'POST',
                url: '<?=admin_url('referensiAjax/getKabByProvinsi/')?>',
                data:{
                  nama_provinsi : data_get
                }
              }).done(function(response) {
                if (response.success) {
                  data = response.data;
                  $('#body-daftar-kab').empty();
                  totaldatakab = data.length;
                  var j = 1;
                  for (var i = data.length - 1; i >= 0; i--) {
                    $("#body-daftar-kab").append('<tr><td>'+j+'</td><td><a href="#" id="edit_namakab'+i+'" data-type="text" data-pk="'+data[i].id_kabupaten+'" data-title="Edit Nama Kabupaten/Kota" class="editable editable-click">'+data[i].nama_kabupaten+'</a></td><td><a  onclick="hapusData(\'kabupaten\','+data[i].id_kabupaten+');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                    j++;
                    $('#daftar_kab').modal('show');

                  }
                  $.fn.editable.defaults.url = '<?=admin_url('referensiAjax/editKab/')?>';
                  for (var i = totaldatakab - 1; i >= 0; i--) {

                   $("#edit_namakab"+i).editable(
                   {
                    validate: function(value)
                    {
                      if ($.trim(value) === '') return 'This field is required';
                    }
                  });

                 }

               } else swal('Gagal', 'Terjadi Kesalahan!.', 'error');
             });
            break;

            case 'nama_kabupaten':
                $.ajax({
                  type: 'POST',
                  url: '<?=admin_url('referensiAjax/getKecByKabupaten/')?>',
                  data:{
                    nama_kabupaten : data_get
                  }
                }).done(function(response) {
                  if (response.success) {
                    data = response.data;
                    $('#body-daftar-kec').empty();
                    totaldatakec = data.length;
                    var j = 1;
                    for (var i = data.length - 1; i >= 0; i--) {
                      $("#body-daftar-kec").append('<tr><td>'+j+'</td><td><a href="#" id="edit_namakec'+i+'" data-type="text" data-pk="'+data[i].id_kecamatan+'" data-title="Edit Nama Kecamatan" class="editable editable-click">'+data[i].nama_kecamatan+'</a></td><td><a  onclick="hapusData(\'kecamatan\','+data[i].id_kecamatan+');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                      j++;
                      $('#daftar_kec').modal('show');

                    }
                    $.fn.editable.defaults.url = '<?=admin_url('referensiAjax/editKec/')?>';
                    for (var i = totaldatakec - 1; i >= 0; i--) {

                     $("#edit_namakec"+i).editable(
                     {
                      validate: function(value)
                      {
                        if ($.trim(value) === '') return 'This field is required';
                      }
                    });

                   }

                 } else swal('Gagal', 'Terjadi Kesalahan!.', 'error');
               });
              break;

            case 'nama_kecamatan':
                $.ajax({
                  type: 'POST',
                  url: '<?=admin_url('referensiAjax/getKelByKecamatan/')?>',
                  data:{
                    nama_kecamatan : data_get
                  }
                }).done(function(response) {
                  if (response.success) {
                    data = response.data;
                    $('#body-daftar-kel').empty();
                    totaldatakel = data.length;
                    var j = 1;
                    for (var i = data.length - 1; i >= 0; i--) {
                      $("#body-daftar-kel").append('<tr><td>'+j+'</td><td><a href="#" id="edit_namakel'+i+'" data-type="text" data-pk="'+data[i].id_kelurahan+'" data-title="Edit Nama Kelurahan" class="editable editable-click">'+data[i].nama_kelurahan+'</a></td><td><a  onclick="hapusData(\'kelurahan\','+data[i].id_kelurahan+');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a></td></tr>');
                      j++;
                      $('#daftar_kel').modal('show');

                    }
                    $.fn.editable.defaults.url = '<?=admin_url('referensiAjax/editKel/')?>';
                    for (var i = totaldatakel - 1; i >= 0; i--) {

                     $("#edit_namakel"+i).editable(
                     {
                      validate: function(value)
                      {
                        if ($.trim(value) === '') return 'This field is required';
                      }
                    });

                   }

                 } else swal('Gagal', 'Terjadi Kesalahan!.', 'error');
               });
              break;

        }
    }

    function hapusData(method,id) {
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
            url: '<?=admin_url('referensiAjax/hapusData/')?>'+method+'/'+id
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

  </script>
