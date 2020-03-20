<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Jenis Dokumen</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="data_dokumen" class="table" style="min-width: 100%;">
                            <thead>
                                <tr>
                                    <th width="50px;">No.</th>
                                    <th>Jenis Dokumen</th>
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

<div id="tambah_dokumen_modal" class="modal fade " role="dialog">
  <div class="modal-dialog "><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Jenis Dokumen</h4>
    </div>
      <div class="modal-body">
        <form class="form-horizontal" data-type="insert" data-table="<?=$table?>" autocomplete="off">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Jenis Dokumen</label>
            <div class="col-sm-9">
              <input autofocus type="text" name="jenis_dokumen" class="form-control" >
              <p class="error_eselon"></p>
            </div>
          </div>
          <div class="form-group ">
          <div class="col-md-3 col-md-offset-5">
            <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="edit_dokumen_modal" class="modal fade " role="dialog">
	<div class="modal-dialog ">
	    <div class="modal-content">
	    <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title" align="center">Edit Jenis Dokumen</h4>
	    </div>
	      <div class="modal-body">
	        <form data-type="update" data-table="<?=$table?>" autocomplete="off">
		      	<div class="row data-edit">

		      	</div>
                <center>
                    <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Simpan Perubahan</button>
                </center>
	        </form>
	      </div>
	    </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	//mengambil dan menampilkan data table
    var data_dokumen = $('#<?=$table?>').DataTable({
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        },
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": '<?=admin_url("ReferensiAjax/get_data")?>',
            "type": "POST",
            "data": {
            	"table" : '<?=$table?>',
            	"select" : 'id, jenis_dokumen' // yang perlu di setup
            },
        },
       "columns": [ // yang perlu di setup
            {"data": "id", render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;}},
            {"data": "jenis_dokumen"},
            { "data": null, "defaultContent": "<button class='edit_<?=$table?> btn btn-primary btn-xs'><i class='fa fa-pencil'></i>Edit</button> <button class='delete_<?=$table?> btn btn-danger btn-xs' data-type='delete' data-table='<?=$table?>'><i class='fa fa-trash'></i>Hapus</button>"}
        ],
		dom: 'Bfrtip',
        buttons: [
            {
                text: '<i class="fa fa-plus"></i>&nbsp;Tambah Jenis Dokumen',
                className: 'btn btn-primary btn-sm',
                action: function ( e, dt, node, config ) {
                    $("#tambah_dokumen_modal").modal('show')
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

			var formData = new FormData(this)
			formData.append('type', type)

			$.ajax({
				url : '<?=admin_url('referensiAjax/data/')?>' + table,
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
        for(x in edit){
        	if(x == 'id'){
        		type = 'hidden'
        	}else{
        		type = 'text'
        	}
        	html += 
        	'<div class="form-group col-sm-12 '+type+'">' +
	            '<label class="col-sm-3 control-label">Jenis Dokumen</label>' +
	            '<div class="col-sm-9">' +
	              '<input type="'+type+'" name="'+x+'" class="form-control" value="'+edit[x]+'">' +
	            '</div>' +
	          '</div>' }

	    $(".data-edit").empty().html(html)      
	    $("#edit_dokumen_modal").modal('show')
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
