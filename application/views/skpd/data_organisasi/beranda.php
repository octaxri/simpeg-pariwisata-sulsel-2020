  <div class="panel">
      <div class="panel-body">
        <table id="<?=$table?>" class="table" style="min-width: 100%;">
          <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>jabatan</th>
                <th>parent</th>
                <th width="15%">#</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <hr>
      </div>
  </div>

<div id="tambah_<?=$table?>_modal" class="modal fade " role="dialog">
  <div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Data Organisasi</h4>
    </div>
      <div class="modal-body">
        <form data-type="insert" data-table="<?=$table?>" data-satker="<?=$satker?>" autocomplete="off">
          <div class="row">

            <div class="form-group col-sm-12">
              <label class="col-sm-3 control-label">Nama Lengkap</label>
              <div class="col-sm-9">
                
                <select name="nip" class="form-control select-nip">
                  
                </select>

              </div>
            </div> 

            <div class="form-group col-sm-12">
              <label class="col-sm-3 control-label">Jabatan</label>
              <div class="col-sm-9">
                <input type="text" name="jabatan" class="form-control" value="">
              </div>
            </div>

            <div class="form-group col-sm-12">
              <label class="col-sm-3 control-label">Parent</label>
              <div class="col-sm-9">

                <select name="parent" class="form-control select-parent">
                  
                </select>

              </div>
            </div> 

          </div>
            <center>
          <button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
            </center>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="edit_<?=$table?>_modal" class="modal fade " role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Data Organisasi</h4>
        </div>
          <div class="modal-body">
            <form data-type="update" data-table="<?=$table?>" data-satker="<?=$satker?>" autocomplete="off">

                <div class="row data-edit">

                </div>

                <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Simpan Perubahan</button>
            </form>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  
$(document).ready(function(){
    var data_dokumen = $('#<?=$table?>').DataTable({
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        },
        destroy: true,
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": '<?=skpd_url("Ajax/get_data")?>',
            "type": "POST",
            "data": {        

              "table" : '<?=$table?>',
              "satker" : '<?=$satker?>',

              "select" : '*' // yang perlu di setup

            },
        },
       "columns": [ // yang perlu di setup
            {"data": "id"},
            {"data": "nip"},
            {"data": "jabatan"},
            {"data": "parent"},
            { "data": function(data){
                return "<button class='edit_<?=$table?> btn btn-primary btn-xs'>edit</button> <button class='delete_<?=$table?> btn btn-danger btn-xs' data-type='delete' data-table='<?=$table?>'>delete</button>"
            },
          }
        ], 

        columnDefs : [
          { targets : [1],
            render : function(data, type, full, meta) {
                var currentCell = $("#<?=$table?>").DataTable().cells({"row":meta.row, "column":meta.col}).nodes(0);
                $.ajax({
                  url : '<?=skpd_url("Ajax/get_nip_nama")?>',
                  method : 'GET',
                  data : {
                    nip : data
                  },
                  complete:function(data){
                    $(currentCell).text(data.responseText);
                  }
                })
                return null;
            }
          }
        ],

        dom: 'Bfrtip',
        buttons: [
            {
                text: '<i class="fa fa-plus"></i>&nbsp;Tambah Data Organisasi',
                className: 'btn btn-primary btn-sm',
                action: function ( e, dt, node, config ) {

                    var html = ""
                    select = ""
                    parent = ""
                    $.ajax({
                      url : '<?=skpd_url('DataOrganisasi/get_data_nip_parent')?>',
                      method : "GET",
                      data : {
                        id_satker : '<?=$satker?>'
                      },
                      complete:function(data){
                        if(data.responseText){
                          json = JSON.parse(data.responseText)
                          json.nip.forEach(function(entry){
                            select += "<option value='"+entry.nip+"' >"+entry.nama_lengkap+"</option>" 
                          })
                          parent = ""
                          if(json.parent.length > 0){
                            json.parent.forEach(function(entry){
                                parent += "<option value='"+entry.id+"' >"+entry.jabatan+"</option>"
                            })
                          }else{
                            parent += "<option disabled selected>Tertinggi</option>"
                          }
                          

                            $(".select-nip").empty().html(select)   
                            $(".select-parent").empty().html(parent)   
                            $("select").select2();   
                            $("#tambah_<?=$table?>_modal").modal('show')

                        }

                      }
                    })

                    
                }
            },
            {
                text: '<i class="fa fa-th" aria-hidden="true"></i> Lihat Struktur Organisasi',
                className: 'btn btn-default',
                action: function ( e, dt, node, config ) {
                  window.location.href = '<?=skpd_url("DataOrganisasi/struktur_organisasi")?>';
                }
            }            
        ],                       
        // "order": [[ 9, "asc" ]],
        scrollX:        true,
        scrollCollapse: true,
      }); 

      $("form").on('submit', function(e){
          e.preventDefault()
          var table = $(this).data('table')
          var type = $(this).data('type')

          var satker = $(this).data('satker')

          var formData = new FormData(this)
          formData.append('type', type)
          formData.append('satker', satker)

          $.ajax({
              url : '<?=skpd_url('Ajax/data/')?>' + table,
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
      $('#<?=$table?> tbody').on( 'click', '.edit_<?=$table?>', function () {
          var edit = data_dokumen.row( $(this).parents('tr') ).data();
          var html = ""
          select = ""
          parent = ""
          $.ajax({
            url : '<?=skpd_url('DataOrganisasi/get_data_nip_parent')?>',
            method : "GET",
            data : {
              id_satker : '<?=$satker?>',
              parent : edit['parent']
            },
            complete:function(data){
              if(data.responseText){
                json = JSON.parse(data.responseText)
                json.nip.forEach(function(entry){
                  if(edit['nip'] == entry.nip){
                    select += "<option value='"+entry.nip+"' selected>"+entry.nip+"</option>"
                  }else{
                    select += "<option value='"+entry.nip+"' >"+entry.nip+"</option>"
                  } 
                })
                parent = ""
                json.parent.forEach(function(entry){
                      

                      if(edit['id'] != entry.id && edit['parent'] != 0){
                        if(edit['parent'] == entry.id){
                          parent += "<option value='"+entry.id+"' selected>"+entry.jabatan+"</option>"
                        }else{
                          parent += "<option value='"+entry.id+"' >"+entry.jabatan+"</option>"
                        }
                      }

                })

                  for(x in edit){
                      if(x == 'nip'){ // select

                        html +=
                        '<div class="form-group col-sm-12">' +
                          '<label class="col-sm-3 control-label">'+x+'</label>' +
                          '<div class="col-sm-9">' +
                            
                            '<select name="'+x+'" class="form-control">' +
                              select +
                            '</select>' +

                          '</div>' +
                        '</div>' 

                      }else if(x == 'parent'){ // number 

                        html +=
                        '<div class="form-group col-sm-12">' +
                          '<label class="col-sm-3 control-label">'+x+'</label>' +
                          '<div class="col-sm-9">' +
                            
                            '<select name="'+x+'" class="form-control">' +
                            
                              parent +
                            '</select>' +

                          '</div>' +
                        '</div>'  

                      }else if(x == 'satker' || x == 'id'){ // hidden

                        html += 
                        '<div class="form-group col-sm-12 hidden">' +
                          '<label class="col-sm-3 control-label">'+x+'</label>' +
                          '<div class="col-sm-9">' +
                            '<input type="hidden" name="'+x+'" class="form-control" value="'+edit[x]+'">' +
                          '</div>' +
                        '</div>' 

                      }else{ // text

                        html += 
                        '<div class="form-group col-sm-12">' +
                          '<label class="col-sm-3 control-label">'+x+'</label>' +
                          '<div class="col-sm-9">' +
                            '<input type="text" name="'+x+'" class="form-control" value="'+edit[x]+'">' +
                          '</div>' +
                        '</div>' 

                      }
                  }

                  $(".data-edit").empty().html(html)   
                  $("select").select2();   
                  $("#edit_<?=$table?>_modal").modal('show')

              }

            }
          })
          
      })

      $('#<?=$table?> tbody').on( 'click', '.delete_<?=$table?>', function () {
          var delet = data_dokumen.row( $(this).parents('tr') ).data();
          var table = $(this).data('table')
          var type = $(this).data('type') 

          $.ajax({
              url : '<?=skpd_url("Ajax/data/")?><?=$table?>',
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