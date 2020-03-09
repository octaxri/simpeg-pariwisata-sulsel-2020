<a class="btn btn-primary btn-sm" href="<?=admin_url('pegawai/tambah')?>" type="button"><i class="fa fa-plus"></i>Tambah Data Pegawai</a>
<hr>

<?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
<?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-search"></i> Pencarian Data</h3>
        <div class="right">
          <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
          <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
      </div>
      <div class="panel-body">
        <p>Silahkan isi beberapa option atau keseluruhan form untuk menampilkan data secara spesifik.</p>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group col-sm-4">
              <label class=" control-label">Pegawai</label>
              <input type="text" id="identifier" class="form-control" placeholder="Masukkan NIP/Nama Pegawai">
            </div>
            <div class="form-group col-sm-4">
              <label class=" control-label">Jenis Kelamin</label>
              <select id="jenis_kelamin" class="form-control select-2">
                <option value="all">-Semua Jenis-</option>
                <option value="wanita">Perempuan</option>
                <option value="pria">Laki-laki</option>
              </select>
            </div>
            <div class="form-group col-sm-4">
              <label class=" control-label">Agama</label>
              <select  id="agama" class="form-control select-2">
                <option value="all">-Semua Agama-</option>
                <?php foreach ($data_agama as $data_agama): ?>
                  <option value="<?=$data_agama->nama_agama?>"><?=$data_agama->nama_agama?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-sm-4">
              <label class=" control-label">Pangkat/Golongan/Ruang</label>
              <select id="eselon" class="form-control select-2">
                <option value="all">-Semua Pangkat/Golongan/Ruang-</option>
                <?php foreach ($data_eselon as $data_eselon): ?>
                  <option value="<?=$data_eselon->nama_eselon?>"><?=$data_eselon->nama_eselon?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group col-sm-8">
              <label class=" control-label">Bidang/Bagian</label>
              <select id="satker" class="form-control select-2">
                <option value="all">-Semua Bidang-</option>
                <?php foreach ($data_satker as $data_satker): ?>
                  <option value="<?=$data_satker->nama_satker?>"><?=$data_satker->nama_satker?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
        </div>
        <center>
          <button class="btn btn-primary btn-sm" id="filter" type="button"><i class="fa fa-filter"></i>Filter</button>
          <button class="btn btn-danger" type="button"><i class="fa fa-close"></i>Reset</button>
        </center>
      </div>
    </div>

  <div tabindex='1' id="ajaxResult">

  </div>
</div>
  <script>
function hapusData(id) {
    var d = id;
    
    // console.log(d);
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
            url: '<?=admin_url('DataPegawai/hapusAjax/')?>'+id
          }).done(function(response) {
            if (response.success) {
              $("tr[data-id='"+id+"']").remove();
              swal('Sukses', 'Data berhasil dihapus.', 'success');
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
<script type="text/javascript">
    $("#filter").on('click', function(event) {
    $.ajax({
        type: 'POST',
        url: '<?=admin_url("DataPegawai/FilterAjax/")?>',
        data: {
          identifier: $('#identifier').val(),
          jenis_kelamin: $('#jenis_kelamin').val(),
          agama: $('#agama').val(),
          eselon: $('#eselon').val(),
          satker: $('#satker').val()
        }
        }).done(function(response) {
            if (response.success) {
                if (response.data.length != 0) {
                var div  = `<h4>Data Pegawai (`+response.data.length+` Orang)</h4><br>
                           <div class="panel">
                            <div class="panel-body">
                              <table id="normal" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer" style="min-width: 100%;">
                                <thead>
                                <tr>
                                    <th>Foto Pegawai</th>
                                    <th>NIP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Eselon</th>
                                    <th>Pangkat</th>
                                    <th>Jabatan</th>
                                    <th>Tgl Lahir</th>
                                    <th>Subbidang/Seksi</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>`;
                    for(var i =0;i <= response.data.length-1;i++)
                    {
                        // console.log(i);
                      var item = response.data[i];
                      if (item.gambar != '') {
                        item.gambar = '<?=upload_url('fotopegawai')?>'+item.gambar;
                      }else{
                        item.gambar = '<?=upload_url('fotopegawai')?>no_image.jpg';
                      }

                      var div = div+ `
                                  <tr data-id="`+item.nip+`">
                                    <td><img src="`+item.gambar+`" class="img-thumbnail loaded-image" style="width:100%"></td>
                                    <td>`+item.nip+`</td>
                                    <td>`+item.nama_lengkap+`</td>
                                    <td>`+item.jenis_kelamin+`</td>
                                    <td>`+item.agama+`</td>
                                    <td>`+item.eselon+`</td>
                                    <td>`+item.jenis_pangkat+`</td>
                                    <td>`+item.nama_jabatan+`</td>
                                    <td>`+item.tanggal_lahir+`</td>
                                    <td>`+item.unit_kerja+`</td>
                                    <td>
                                        <a href="<?=admin_url('DataPegawai/profil/')?>`+item.nip+`" class="btn btn-default btn-xs  btn-block" > <i class="fa fa-arrow-circle-right"></i> Profil</a>
                                        <a href="<?=admin_url('DataPegawai/edit/')?>`+item.nip+`" class="btn btn-success btn-xs btn-block" > <i class="fa fa-edit"></i> Edit </a>
                                        <button  title="Delete" class="btn btn-danger btn-xs btn-block" onclick="hapusData('`+item.nip+`');"> <i class="fa fa-times"></i> Hapus </button>
                                    </td>
                                  </tr>
                      `;
                      $("#ajaxResult").html
                      (`</tbody>
                              </table>
                              <hr>
                            </div>
                        </div>`+div
                      );
                      var Exnormal = $('#normal').removeAttr('width').DataTable({
                            "language": {
                               "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                               "sEmptyTable": "Tidak ada data di database"
                           },
                           // scrollY:        "300px",
                          scrollX:        true,
                          scrollCollapse: true,
                          // paging:         false,
                           columnDefs: [
                              { width: 100, targets: [1,2] }
                          ]
                          // fixedColumns: true
                        });

                    }

                }else{
                    var div = `
                    <div align="center">
                       
                            <h4>Data Tidak Ditemukan</h4>
                        
                    </div>
                `;
                $("#ajaxResult").html(div);
                }
            }
        });

      
});
</script>

