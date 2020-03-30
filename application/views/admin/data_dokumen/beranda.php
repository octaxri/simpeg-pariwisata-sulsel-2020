<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-search"></i> Pencarian Dokumen Pegawai</h3>
        <div class="right">
          <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
          <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
      </div>
      <div class="panel-body">
<!--          <div class="alert alert-warning alert-dismissible" role="alert">-->
<!--            <p>Silahkan pilih bidang/bagian untuk pencarian data</p>-->
<!--          </div>-->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group col-sm-12">
              <label class=" control-label">Bidang/Bagian</label>
              <select id="satker" class="form-control select-2">
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

    <div class="row" id="result">
        <div class="col-md-12">
            <!-- PANEL DEFAULT -->
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
<!--                            <table id="data_pegawai" class="table table-bordered table-sorting table-hover datatable-data_dokumen dataTable no-footer" style="min-width: 100%;">-->
                                <table style="min-width: 100%;" id="data_pegawai"  class="table table-striped datatable-Exnormal datatable-data_dokumen table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Nama</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
$("#result").hide()
$(document).ready(function(){
  //mengambil dan menampilkan data table

  $("#filter").on('click', function(){
    var data_dokumen = $('#<?=$table?>').DataTable({
      destroy: true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        },
        "processing": true,
        "serverSide": true,
        "order": [1, "asc"],
        "ajax": {
            "url": '<?=admin_url("ReferensiAjax/get_data")?>',
            "type": "POST",
            "data": {
              "identifier": $('#identifier').val(),
              "jenis_kelamin": $('#jenis_kelamin').val(),
              "agama": $('#agama').val(),
              "eselon": $('#eselon').val(),
              "satker": $('#satker').val(),              
              "table" : '<?=$table?>',
              "select" : 'nip, nama_lengkap' // yang perlu di setup
            },
        },
       "columns": [ // yang perlu di setup
            {"data": "nip"},
            {"data": "nama_lengkap"},
            { "data": function(data){
                return "<a class='btn btn-primary btn-xs' href='<?=admin_url('dokumen/lihat?nip=')?>"+data.nip+"'><i class='fa fa-eye'></i> Lihat Dokumen</a>"
            },
          }
        ],
    dom: 'Bfrtip',
        buttons: [],
        // "order": [[ 9, "asc" ]],
        scrollX:        true,
        scrollCollapse: true,
      });  

      data_dokumen.draw();
      $("#result").show()
  })   


  $("form").on('submit', function(e){
      e.preventDefault()
      var table = $(this).data('table')
      var type = $(this).data('type')

      var formData = new FormData(this)
      formData.append('type', type)

      $.ajax({
        url : '<?=admin_url('referensiAjax/')?>' + table,
        method : "POST",
        data : formData,
        processData:false,
            contentType:false,
            cache:false,
            async:false,
            complete:function(data){
              json = JSON.parse(data.responseText)
          if(json.stat == 'sukses'){
            $('#' + table).DataTable().ajax.reload()
            $(".modal").modal('hide')
            $('form').trigger("reset")
            swal(json.stat, json.res, 'success')  
          }else{
            swal(json.stat, json.res, 'error')  
          }
            }
      })
    })

  // yang perlu di setup
  $('#<?=$table?> tbody').on( 'click', '.lihat_dokumen', function () {
        var edit = data_dokumen.row( $(this).parents('tr') ).data();
        var html = ""
        for(x in edit){
          if(x == 'id'){
            type = 'hidden'
          }else{
            type = 'text'
          }
          html += 
          '<div class="form-group col-sm-12 '+type+'">' +
              '<label class="col-sm-3 control-label">Nama Dokumen</label>' +
              '<div class="col-sm-9">' +
                '<input type="'+type+'" name="'+x+'" class="form-control" value="'+edit[x]+'">' +
              '</div>' +
            '</div>' }

      $(".data-edit").empty().html(html)      
      $("#lihat_dokumen_modal").modal('show')
    })

  $('#<?=$table?> tbody').on( 'click', '.delete_<?=$table?>', function () {
    var delet = data_dokumen.row( $(this).parents('tr') ).data();
    var table = $(this).data('table')
    var type = $(this).data('type') 

        $.ajax({
          url : '<?=admin_url("ReferensiAjax/data/")?><?=$table?>',
          method : "POST",
          data : {
            type : type,
            id : delet['id']
          },
          complete:function(data){
        json = JSON.parse(data.responseText)
        if(json.stat == 'sukses'){
          $('#' + table).DataTable().ajax.reload()
          $(".modal").modal('hide')
          $('form').trigger("reset")
          swal(json.stat, json.res, 'success')  
        }else{
          swal(json.stat, json.res, 'error')  
        }           
          }

        })
    })

})

</script>