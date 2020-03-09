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
        <p>Silahkan isi satuan kerja terlebih dahulu.</p>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class=" control-label">Satuan Kerja</label>
              <select id="satker" class="form-control select-2">
                <?php foreach ($data_satker as $data_satker): ?>
                  <option value="<?=$data_satker->nama_satker?>"><?=$data_satker->nama_satker?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
        </div>
        <center>
          <button class="btn btn-primary btn-sm" id="filter_duk" type="button"><i class="fa fa-filter"></i>Filter</button>
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
  $(document).ready(function(){
      $("#filter_duk").on('click', function(event) {
        var i = 1;
         var div  = 
         `
          <div class="panel">
              <div class="panel-body">
                <table id="normal" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer" style="min-width: 100%;">
                  <thead>
                    <tr>
                        <th>DUK</th>                                 
                        <th>NIP</th>                      
                        <th>Pangkat</th>                      
                        <th>Jabatan</th>                      
                        <th>Masa Kerja (hari)</th>                      
                        <th>Usia</th>                      
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
              "url": '<?=admin_url("DataDuk/filterAjax/")?>',
              "type": "get",
              "data": {
                  "satker": $('#satker').val()
              },           
          },
          dom: 'Bfrtip',
          lengthMenu: [[10, 50, -1], [ 'tampilkan 10 data', 'tampilkan 50 data', 'tampilkan semua' ]],
      buttons: [
          'pageLength', 'csv'
      ],
          // "order": [[ 9, "asc" ]],
          scrollX:        true,
          scrollCollapse: true,
        });

  });    
  })
//console.log(a.aoData.slice(-1).pop()._aData[0]) ;
</script>

