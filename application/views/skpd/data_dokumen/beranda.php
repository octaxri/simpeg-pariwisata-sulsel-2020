<div class="row">
  <div class="col-md-12">

    <div class="row" id="hidden">
        <div class="col-md-12">
            <!-- PANEL DEFAULT -->
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="data_pegawai" class="table table-bordered table-sorting table-hover datatable-data_dokumen dataTable no-footer" style="min-width: 100%;">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama lengkap</th>
                                        <th width="10%"></th>
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
$("#hidden").hide()
$(document).ready(function(){
  //mengambil dan menampilkan data table
    var data_dokumen = $('#<?=$table?>').DataTable({
      destroy: true,
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        },
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": '<?=skpd_url("Ajax/get_data")?>',
            "type": "POST",
            "data": {
              "satker": '<?=$satker?>',              
              "table" : '<?=$table?>',
              "select" : 'nip, nama_lengkap' // yang perlu di setup
            },
        },
       "columns": [ // yang perlu di setup
            {"data": "nip"},
            {"data": "nama_lengkap"},
            { "data": function(data){
                return "<a class='btn btn-primary btn-xs' href='<?=skpd_url('dokumen/lihat?nip=')?>"+data.nip+"'><i class='fa fa-eye'></i>Lihat dokumen</a>"
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
      $("#hidden").show()   


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
              '<label class="col-sm-3 control-label">'+x+'</label>' +
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