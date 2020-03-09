<div class="row">
<div class="col-md-12">
  <!-- PANEL DEFAULT -->
  <div class="panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <table id="<?=$table?>" style="min-width: 100%;"  class="table table-bordered">
            <thead>
              <tr>
                <th width="5%" style="vertical-align : middle;text-align:center;"> ID</th>
                <th width="20%" style="vertical-align : middle;text-align:center;"> Nomor SK</th>
                <th width="20%" style="vertical-align : middle;text-align:center;"> Tanggal SK</th>
                <th width="25%" style="vertical-align : middle;text-align:center;"></th>
              </tr>
            </thead>
            <tbody class="text-center">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div> 

<!-- Modal -->
<div class="modal fade" id="tambahSK" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah SK</h4>
      </div>
      <form id="tambah">
      <div class="modal-body">
        
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor SK</label>
		    <input type="text" class="form-control" placeholder="Nomor SK" name="no_sk">
		  </div>
		  <div class="row">
					<div class="col-md-6 form-group date">
							<label for="exampleInputEmail1">Tanggal SK</label>
								<div class="input-group date">
							<input type="text" name="tgl_sk" class="form-control">
							<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
							</div>
					</div>
	        </div>
		</div>
		
      </div>
      <div class="modal-footer">
<!--        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-floppy-save"></i>Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editSK" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit SK</h4>
      </div>
      <form id="edit">
      <div class="modal-body">
        
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor SK</label>
		    <input type="text" class="form-control" placeholder="Nomor SK" name="no_sk">
		  </div>

		<div class="row">

		  <div class="col-md-6 form-group date">
          <label for="exampleInputEmail1">Tanggal SK</label>
            <div class="input-group date">
			    <input type="text" name="tgl_sk" class="form-control">
			    <div class="input-group-addon">
			        <span class="glyphicon glyphicon-th"></span>
			    </div>
			</div>
        </div>

		</div>
		
      </div>
      <div class="modal-footer">
<!--        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
          <button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i>Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip()
	    mutasi_sk = $('#<?=$table?>').DataTable( {
	        "processing": true,
	        "ajax": {
	            "url":  "<?=admin_url('referensiAjax/get_mutasi_sk')?>",
	            "type": "POST"
	        },
	        "columns": [
	            { "data": "id" },
	            { "data": "no_sk" },
	            { "data": "tgl_sk" },
	            {
                 sortable: false,
                 "render": function ( data, type, full, meta ) {
                    //  return "<button class='edit btn btn-default btn-xs'>edit</button> <a class='btn btn-primary btn-xs' href='<?=admin_url('DataMutasi/details?')?>id="+full.id+"&no_sk="+full.no_sk+"&tgl_sk="+full.tgl_sk+"&pejabat="+full.pejabat+"&tentang="+full.tentang+"'>lampiran</a> <button class='print btn btn-danger btn-xs'>cetak</button> <button class='hapus btn btn-default btn-xs'>hapus</button>";
                     return "<a class='btn btn-primary btn-xs' href='<?=admin_url('DataMutasi/details?')?>id="+full.id+"&no_sk="+full.no_sk+"&tgl_sk="+full.tgl_sk+"'><i class='fa fa-eye'></i>Lampiran</a> <button class='print btn btn-success btn-xs'><i class='fa fa-print'></i>Cetak</button> <button class='hapus btn btn-danger btn-xs'>Hapus</button>";
                 	
                 	
                 }
             },
	        ],
	        dom: 'Bfrtip',
	        buttons: [
	            {
	                text: '<i class="fa fa-plus" aria-hidden="true"></i> Tambah SK',
	                className : 'btn btn-sm btn-primary',
	                action : function() {
	                    $('#tambahSK').modal('show')
	                    $('input[name=no_sk]').focus()
	                }
	            }            
	        ],	        
	    } );

	    $('#tambah').on('submit', function(e){
	    	e.preventDefault()
	    	$.ajax({
	    		url : '<?=admin_url('referensiAjax/add_mutasi_sk')?>',
	    		method : 'post',
	    		data : new FormData(this),
	            processData:false,
	            contentType:false,
	            cache:false,
	            async:false,
	            success:function(data){
	            	if(data.stat == 'sukses'){
	            		swal(data.stat, data.res, 'success') 
	            		$('#tambahSK').modal('hide')
	            		$("#tambah")[0].reset()
              			mutasi_sk.ajax.reload()
	            	}
	            }	    		
	    	})
	    })

      $("#<?=$table?> tbody").on('click', 'button.edit', function(){

        $data = mutasi_sk.row( $(this).parents('tr') ).data()

        $('#editSK').modal('show')

        for(x in $data){
        	$('input[name='+x+']').val($data[x])
        	$('textarea[name='+x+']').text($data[x])
        }

	    $('#edit').on('submit', function(e){
	    	e.preventDefault()
	    	$.ajax({
	    		url : '<?=admin_url('referensiAjax/edit_mutasi_sk/')?>'+$data.id,
	    		method : 'post',
	    		data : new FormData(this),
	            processData:false,
	            contentType:false,
	            cache:false,
	            async:false,
	            success:function(data){
	            	if(data.stat == 'sukses'){
	            		swal(data.stat, data.res, 'success') 
	            		$('#editSK').modal('hide')
              			mutasi_sk.ajax.reload()
	            	}
	            }	    		
	    	})
	    })        
      })	    

      $("#<?=$table?> tbody").on('click', 'button.hapus', function(){

      	$data = mutasi_sk.row( $(this).parents('tr') ).data()

			  var r = confirm("apakah anda yakin ingin menghapus data ini ?");
			  if (r == true) {
				$.ajax({
					url : '<?=admin_url('referensiAjax/hapus_mutasi_sk/')?>'+$data.id,
					method : 'post',
					data : new FormData(this),
			        processData:false,
			        contentType:false,
			        cache:false,
			        async:false,
			        success:function(data){
			        	if(data.stat == 'sukses'){
			        		swal(data.stat, data.res, 'success') 
			      			mutasi_sk.ajax.reload()
			        	}
			        }	    		
				})
			  }

      })

      $("#<?=$table?> tbody").on('click', 'button.print', function(){

        $data = mutasi_sk.row( $(this).parents('tr') ).data()
        window.open('<?=site_url("admin/DataMutasi/print_sk_kelompok/")?>' + $data.id, '_blank')
      })

	})

</script>
