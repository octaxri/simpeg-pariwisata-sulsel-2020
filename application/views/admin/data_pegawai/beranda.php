<a class="btn btn-primary btn-sm" href="<?=admin_url('pegawai/tambah')?>" type="button"><i class="fa fa-plus"></i>Tambah Data Pegawai</a>
<hr>

<?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
<?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-search"></i> Pencarian Data Pegawai</h3>
        <div class="right">
          <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
          <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
      </div>
      <div class="panel-body">
          <div class="alert alert-warning alert-dismissible" role="alert">
            <p>Silahkan isi opsi yang diinginkan untuk menampilkan data secara spesifik. Jangan lupa untuk mengisi opsi <strong>"Bidang/Bagian"</strong> terlebih dahulu jika ingin melakukan <strong>Ekspor Data ke File Excel</strong>.</p>
          </div>
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
                <option value="all">-Semua Jenis Kelamin-</option>
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
              <label class=" control-label">Eselon</label>
              <select id="eselon" class="form-control select-2">
                <option value="all">-Semua Eselon-</option>
                <?php foreach ($data_eselon as $data_eselon): ?>
                  <option value="<?=$data_eselon->nama_eselon?>"><?=$data_eselon->nama_eselon?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group col-sm-8">
              <label class=" control-label">Bidang/Bagian</label>
              <select id="satker" class="form-control select-2">
                <option value="all">-Semua Bidang/Bagian-</option>
                <?php foreach ($data_satker as $data_satker): ?>
                  <option value="<?=$data_satker->nama_satker?>"><?=$data_satker->nama_satker?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
        </div>
        <center>
          <button class="btn btn-primary btn-sm" id="filter" type="button"><i class="fa fa-search"></i>Cari</button>
<!--          <button class="btn btn-danger btn-sm" type="button"><i class="fa fa-close"></i>Reset</button>-->
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
            url: '<?=admin_url('DataPegawai/hapusAjax/')?>'+id
          }).done(function(response) {
            if (response.success) {
              $("tr[data-id='"+id+"']").remove();
              swal('Sukses', 'Data berhasil dihapus', 'success');
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
</script>
<script type="text/javascript">
    $("#filter").on('click', function(event) {
      var satker = $('#satker').val()
       var div  = 
       `
        <div class="panel">
            <div class="panel-body">
              <table id="normal" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer" style="min-width: 100%; white-space: nowrap;">
                <thead>
                  <tr>
                      <th>Foto Pegawai</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tgl. Lahir</th>
                      <th>Agama</th>
                      <th>Jabatan</th>
                      <th>Eselon</th>
                      <th>Pangkat/Golongan/Ruang</th>
                      <th>Bidang</th>
                      <th>Subbidang/Seksi</th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
              <hr>
            </div>
        </div>`;
      $("#ajaxResult").html(div);

      var Exnormal = $('#normal').removeAttr('width').DataTable({
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        },
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": '<?=admin_url("DataPegawai/filterAjax/")?>',
            "type": "POST",
            "data": {
                "identifier": $('#identifier').val(),
                "jenis_kelamin": $('#jenis_kelamin').val(),
                "agama": $('#agama').val(),
                "eselon": $('#eselon').val(),
                "satker": $('#satker').val()
            }
        },
        // "order": [[ 9, "asc" ]],

        columnsDefs: [
            {"data": "gambar"},
            {"data": "nip"},
            {"data": "nama_lengkap"},
            {"data": "jenis_kelamin"},
            {"data": "tanggal_lahir"},
            {"data": "agama"},
            {"data": "nama_jabatan"},
            {"data": "eselon"},
            {"data": "jenis_pangkat"},
            {"data": "satuan_kerja"},
            {"data": "unit_kerja"},
        ],
        columnDefs : [
          { targets : [0],
            render : function(data, type, row) {
                return '<img src="<?=upload_url('fotopegawai')?>'+data+'" class="img-thumbnail loaded-image" style="width:60px; height: 70px;">'
            }
          },
          {
            targets : [11],
            render : function(data, type, row) {
                return '<a href="<?=admin_url('DataPegawai/profil/')?>'+row[1]+'" class="btn btn-success btn-xs  btn-block" > <i class="fa fa-eye"></i> Profil</a><a href="<?=admin_url('DataPegawai/edit/')?>'+row[1]+'" class="btn btn-primary btn-xs btn-block" > <i class="fa fa-pencil"></i> Edit </a><button  title="Delete" class="btn btn-danger btn-xs btn-block" onclick="hapusData('+row[1]+');"> <i class="fa fa-trash"></i> Hapus </button>'
            }   
          }
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                text : '<i class="fa fa-download"></i>Ekspor Data ke File Excel' ,
                className: 'btn btn-primary btn-sm',
                action: function ( e, dt, node, config ) {
                    window.open("<?=admin_url('pegawai/exportexcel?satker=')?>" + satker, '_blank');
                }
            }
        ],
        scrollX:        true,
        scrollCollapse: true,
          "sScrollX": "100%",
          "sScrollXInner": "100%",
          "bScrollCollapse": true,
          "colReorder": true
      });
});
</script>

