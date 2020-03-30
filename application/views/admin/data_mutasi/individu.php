<div class="row">
<div class="col-md-12">
  <!-- PANEL DEFAULT -->
  <div class="panel">
    <div class="panel-body">
          <table id="<?=$table?>" style="min-width: 100%;"  class="table table-bordered table-sorting table-hover no-footer">
            <thead>
              <tr>
                  <th rowspan="2" class="text-center" > No.</th>
                  <th rowspan="2" class="text-center" > NIP</th>
                  <th rowspan="2" class="text-center"> Nama </th>
                  <th rowspan="2" class="text-center"> Pangkat/Golongan/Ruang</th>
                <th colspan="2" class="text-center"> Surat Keputusan</th>
<!--                <th rowspan="2" class="text-center"> Status-->
                  <th colspan="2" class="text-center">Jabatan</th>
                <th rowspan="2"></th>
              </tr>
              <tr>
                  <th class="text-center">Nomor</th>
                  <th class="text-center">Tanggal</th>
                <th class="text-center">Lama</th>
                <th class="text-center">Baru</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
    </div>
  </div>
</div>
</div> 

<!-- Modal -->
<div class="modal fade" id="tambahSK" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah SK Individu</h4>
      </div>
      <div class="modal-body">

        <ul class="nav nav-tabs">
         <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user-circle-o"></i> Data SK</a></li>
         <li><a href="#tab2" data-toggle="tab"><i class="fa fa-drivers-license-o"></i> Tempat Tugas Lama</a></li>
         <li><a href="#tab3" data-toggle="tab"><i class="fa fa-drivers-license-o"></i> Tempat Tugas Baru</a></li>
       </ul>

      <form id="tambah">
		
        <div class="tab-content no-padding">
        	<!-- tab 1 -->

        	<div class="tab-pane fade in active" id="tab1">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nomor SK</label>
			    <input type="text" class="form-control" placeholder="" name="no_sk">
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

				<div class="text-center">
	              <hr>
	              <center>
	                <a class="btn btn-primary btn-sm btnNext" href="#tab2" data-toggle="tab" role="button">BERIKUTNYA &emsp; <i class="fa fa-arrow-right"></i></a>
	              </center>
	            </div>

        	</div>

			<div class="tab-pane fade in" id="tab2">

				<div class="row">

					<div class="col-md-6">
				      <div class="form-group">
				        <label for="exampleInputEmail1">NIP</label>
				        <input type="text" class="form-control" placeholder="" name="nip" required>
				      </div>
				      <div class="form-group">
				        <label for="exampleInputEmail1">Nama Lengkap</label>
				        <input type="text" readonly class="form-control" placeholder="" name="nama">
				      </div>

				      <div class="form-group">
				        <label for="exampleInputEmail1">Pangkat/Golongan/Ruang</label>
				        <input type="text" readonly class="form-control" placeholder="" name="pangkat_gol">
				      </div>
				    </div>

			      <div class="col-md-6">
			        <div class="form-group">
			           <!-- nama_jabatan --> 
			          <label for="exampleInputEmail1">Jabatan</label>
			          <input type="text" readonly class="form-control" name="jabatan_lama">
			        </div>
			        <div class="form-group">
			           <!-- data_satker --> 
			          <label for="exampleInputEmail1">Bidang/Bagian</label>
			          <input type="text" readonly class="form-control" name="satker_lama">
			        </div>
			        <div class="form-group">
			           <!-- unit_kerja --> 
			          <label for="exampleInputEmail1">Subbidang/Seksi</label>
			          <input type="text" readonly class="form-control" name="unker_lama">
			        </div> 
			      </div>

			    </div>

				<div class="text-center">
	              <hr>
	              <center>
	              	<a class="btn btn-primary btn-sm btnNext" href="#tab1" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>&emsp; SEBELUMNYA</a>
	                <a class="btn btn-primary btn-sm btnNext" href="#tab3" data-toggle="tab" role="button">BERIKUTNYA &emsp; <i class="fa fa-arrow-right"></i></a>
	              </center>
	            </div>

			</div>

			<!-- tab 2 -->
			<div class="tab-pane fade in" id="tab3">
		        <div class="row">
			        <div class="col-md-12 form-group">
			           <!-- nama_jabatan --> 
			          <label for="exampleInputEmail1">Jabatan</label>
			          <select class="form-control select-2" name="jabatan_baru" required>
			            <option value="">-- Jabatan --</option>
			            <?php foreach ($jabatan as $a): ?>
			              <option value="<?=$a->nama_jabatan?>"><?=$a->nama_jabatan?></option>
			            <?php endforeach ?>
			          </select>
			        </div>
			        <div class="col-md-6 form-group">
			           <!-- data_satker --> 
			          <label for="exampleInputEmail1">Bidang/Bagian</label>
			          <select class="form-control select-2" name="satker_baru" required>
			            <option value="">-- Bidang/Bagian --</option>
			            <?php foreach ($satker as $b): ?>
			              <option value="<?=$b->nama_satker?>"><?=$b->nama_satker?></option>
			            <?php endforeach ?>
			          </select>
			        </div>
			        <div class="col-md-6 form-group">
			           <!-- unit_kerja --> 
			          <label for="exampleInputEmail1">Subbidang/Seksi</label>
			          <select class="form-control select-2" name="unker_baru" required>
			            <option value="">-- Subbidang/Seksi --</option>
			            <?php foreach ($unker as $c): ?>
			              <option value="<?=$c->nama_unit?>"><?=$c->nama_unit?></option>
			            <?php endforeach ?>
			          </select>
			        </div>                
		    	</div>

				<div class="text-center">
	              <hr>
	              <center>
	                <a class="btn btn-primary btn-sm btnNext" href="#tab2" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i> &emsp; SEBELUMNYA</a>
	                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save" aria-hidden="true"></i>SIMPAN</button>
	              </center>
	            </div>

			</div>

	    </div>

      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editSK" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit SK Individu</h4>
      </div>
      <div class="modal-body">

        <ul class="nav nav-tabs">
         <li class="active"><a href="#e1" data-toggle="tab"><i class="fa fa-user-circle-o"></i> Data SK</a></li>
         <li><a href="#e2" data-toggle="tab"><i class="fa fa-drivers-license-o"></i> Tempat Tugas Lama</a></li>
         <li><a href="#e3" data-toggle="tab"><i class="fa fa-drivers-license-o"></i> Tempat Tugas Baru</a></li>
       </ul>

      <form id="edit">
		
        <div class="tab-content no-padding">
        	<!-- tab 1 -->

        	<div class="tab-pane fade in active" id="e1">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nomor SK</label>
			    <input type="text" class="form-control" placeholder="" name="no_sk">
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

				<div class="text-center">
	              <hr>
	              <center>
	                <a class="btn btn-primary btn-sm btnNext" href="#e2" data-toggle="tab" role="button">BERIKUTNYA &emsp; <i class="fa fa-arrow-right"></i></a>
	              </center>
	            </div>

        	</div>

			<div class="tab-pane fade in" id="e2">

				<div class="row">

					<div class="col-md-6">
				      <div class="form-group">
				        <label for="exampleInputEmail1">NIP</label>
				        <input type="text" class="form-control" placeholder="" name="nip" required>
				      </div>
				      <div class="form-group">
				        <label for="exampleInputEmail1">Nama Lengkap</label>
				        <input type="text" readonly class="form-control" placeholder="" name="nama">
				      </div>

				      <div class="form-group">
				        <label for="exampleInputEmail1">Pangkat/Golongan/Ruang</label>
				        <input type="text" readonly class="form-control" placeholder="" name="pangkat_gol">
				      </div>
				    </div>

			      <div class="col-md-6">
			        <div class="form-group">
			           <!-- nama_jabatan --> 
			          <label for="exampleInputEmail1">Jabatan</label>
			          <input type="text" readonly class="form-control" name="jabatan_lama">
			        </div>
			        <div class="form-group">
			           <!-- data_satker --> 
			          <label for="exampleInputEmail1">Bidang/Bagian</label>
			          <input type="text" readonly class="form-control" name="satker_lama">
			        </div>
			        <div class="form-group">
			           <!-- unit_kerja --> 
			          <label for="exampleInputEmail1">Subbidang/Seksi</label>
			          <input type="text" readonly class="form-control" name="unker_lama">
			        </div> 
			      </div>

			    </div>

				<div class="text-center">
	              <hr>
	              <center>
	              	<a class="btn btn-primary btn-sm btnNext" href="#e1" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i> &emsp; SEBELUMNYA</a>
	                <a class="btn btn-primary btn-sm btnNext" href="#e3" data-toggle="tab" role="button">BERIKUTNYA &emsp; <i class="fa fa-arrow-right"></i></a>
	              </center>
	            </div>

			</div>

			<!-- tab 2 -->
			<div class="tab-pane fade in" id="e3">

			<div class="form-group">
	           <!-- nama_jabatan --> 
	          <label for="exampleInputEmail1">Jabatan</label>
	          <select class="form-control select-2" name="jabatan_baru" required>
	            <option value="">-- Jabatan --</option>
	            <?php foreach ($jabatan as $d): ?>
	              <option value="<?=$d->nama_jabatan?>"><?=$d->nama_jabatan?></option>
	            <?php endforeach ?>
	          </select>
	        </div>

	        <div class="form-group">
	           <!-- data_satker --> 
	          <label for="exampleInputEmail1">Bidang/Bagian</label>
	          <select class="form-control select-2" name="satker_baru" required>
	            <option value="">-- Bidang/Bagian --</option>
	            <?php foreach ($satker as $e): ?>
	              <option value="<?=$e->nama_satker?>"><?=$e->nama_satker?></option>
	            <?php endforeach ?>
	          </select>
	        </div>

	        <div class="form-group">
	           <!-- unit_kerja --> 
	          <label for="exampleInputEmail1">Subbidang/Seksi</label>
	          <select class="form-control select-2" name="unker_baru" required>
	            <option value="">-- Subbidang/Seksi --</option>
	            <?php foreach ($unker as $f): ?>
	              <option value="<?=$f->nama_unit?>"><?=$f->nama_unit?></option>
	            <?php endforeach ?>
	          </select>
	        </div>

			<div class="text-center">
              <hr>
              <center>
                <a class="btn btn-primary btn-sm btnNext" href="#e2" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>SEBELUMNYA</a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save" aria-hidden="true"></i>SIMPAN</button>
              </center>
            </div>

			</div>

	    </div>

      </form>
      </div>
    </div>
  </div>
</div>

<!-- Large modal -->
<div class="modal fade bs-example-modal-lg" id="modal_details" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Detail SK Individu</h4>
      </div>

      <div class="modal-body">

		<div class="col-md-6 col-sm-6">
		    <div class="widget widget-metric_1 animate">
		        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-envelope-open"></i></span>
		        <div class="right">
		            <span class="value">Nomor Surat Kerja</span>
		            <span class="title" id="no_sk">
		            </span>
		        </div>
		    </div>
		</div>

		<div class="col-md-6 col-sm-6">
		    <div class="widget widget-metric_1 animate">
		        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
		        <div class="right">
		            <span class="value">Tanggal Surat Kerja</span>
		            <span class="title" id="tgl_sk">
		            </span>
		        </div>
		    </div>
		</div>

		<div class="col-md-6 col-sm-6">
		    <div class="widget widget-metric_1 animate">
		        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-wheelchair" aria-hidden="true"></i></span>
		        <div class="right">
		            <span class="value">Nama Pejabat</span>
		            <span class="title" id="pejabat">
		            </span>
		        </div>
		    </div>
		</div>

		<div class="col-md-6 col-sm-6">
		    <div class="widget widget-metric_1 animate">
		        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-file-text" aria-hidden="true"></i></span>
		        <div class="right">
		            <span class="value">Tentang</span>
		            <span class="title" id="tentang">
		            </span>
		        </div>
		    </div>
		</div>

          <table style="min-width: 100%;" id="details_individu" class="text-center table table-bordered">
            <thead>
              <tr>
                <th width="5%" style="vertical-align : middle;text-align:center;" rowspan="2"> ID</th>
                <th width="15%" style="vertical-align : middle;text-align:center;" rowspan="2"> NIP</th>
                <th style="vertical-align : middle;text-align:center;" rowspan="2"> Pangkat/Golongan/Ruang</th>
                <th style="vertical-align : middle;text-align:center;" colspan="2"> Tempat Tugas</th>
                <th width="10%" style="vertical-align : middle;text-align:center;" rowspan="2">Keterangan</th>
              </tr>
              <tr>
                <th style="vertical-align : middle;text-align:center;">Lama</th>
                <th style="vertical-align : middle;text-align:center;">Baru</th>
              </tr>
            </thead>
            <tbody>
            	<tr>
            		
            	</tr>
            </tbody>
          </table>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){
	    mutasi_individu = $('#<?=$table?>').DataTable( {
	        "processing": true,
	        "ajax": {
	            "url":  "<?=admin_url('referensiAjax/get_mutasi_individu')?>",
	            "type": "POST"
	        },
			scrollX: true,
	        "columns": [
                // {"data": "id", render: function (data, type, row, meta) {
                //         return meta.row + meta.settings._iDisplayStart + 1;}},
                { "data": null },
                { "data": "nip" },
                { "data": "nama" },
                { "data": "pangkat_gol" },
                { "data": "no_sk" },
	            { "data": "tgl_sk" },
	            // { "data": "status" },
	             {
                 sortable: false,
                 "render": function ( data, type, full, meta ) {
                     return full.jabatan_lama + " pada " + full.satker_lama + " di " + full.unker_lama;
                 }
              },
              {
                 sortable: false,
                 "render": function ( data, type, full, meta ) {
                     return full.jabatan_baru + " pada " + full.satker_baru + " di " + full.unker_baru;
                 }
              },
	            {
                 sortable: false,
                 "render": function ( data, type, full, meta ) {
					return " <button class='print btn btn-success btn-xs'><i class='fa fa-print'></i>Cetak</button> <button class='btn btn-primary btn-xs edit'><i class='fa fa-pencil'></i>Edit</button> <button class='btn btn-danger btn-xs hapus'><i class='fa fa-trash'></i>Hapus</button>";
                 }
             },
	        ],
            columnDefs: [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [[ 2, "asc" ]],
	        dom: 'Bfrtip',
	        buttons: [
	            {
	                text: '<i class="fa fa-plus" aria-hidden="true"></i> Tambah SK Individu',
	                className : 'btn btn-sm btn-primary',
	                action : function() {
	                    $('#tambahSK').modal('show')
	                    $('input[name=no_sk]').focus()
	                }
	            }            
	        ],	        
	    } );

        mutasi_individu.on( 'order.dt search.dt', function () {
            mutasi_individu.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();

	    $('#tambah').on('submit', function(e){
	    	e.preventDefault()
	    	$.ajax({
	    		url : '<?=admin_url('referensiAjax/add_mutasi_individu')?>',
	    		method : 'post',
	    		data : new FormData(this),
	            processData:false,
	            contentType:false,
	            cache:false,
	            async:false,
	            success:function(data){
	            	if(data.stat == 'Berhasil'){
	            		swal(data.stat, data.res, 'success') 
	            		$('#tambahSK').modal('hide')
	            		$("#tambah")[0].reset()
              			mutasi_individu.ajax.reload()
	            	}
	            }	    		
	    	})
	    })

      $("#<?=$table?> tbody").on('click', 'button.edit', function(){

        $data = mutasi_individu.row( $(this).parents('tr') ).data()

        $('#editSK').modal('show')

        for(x in $data){
        	$('#editSK').find('input[name='+x+']').val($data[x])
        	$('#editSK').find('textarea[name='+x+']').text($data[x])
        }

        $.ajax({
        	url : "<?=admin_url('referensiAjax/get_data_mutasi_individu/')?>" + $data.id,
        	method : "GET",
        	success:function(data){
        		if(data){
        			json = JSON.parse(data)
        			for(b in json){
        				$('#editSK').find('select[name='+b+']').val(json[b]).change()
        			}
        		}
        		
        	}
        })


	    $('#edit').on('submit', function(e){
	    	e.preventDefault()
	    	$.ajax({
	    		url : '<?=admin_url('referensiAjax/edit_mutasi_sk_individu/')?>'+$data.id,
	    		method : 'post',
	    		data : new FormData(this),
	            processData:false,
	            contentType:false,
	            cache:false,
	            async:false,
	            success:function(data){
	            	if(data.stat == 'Berhasil'){
	            		swal(data.stat, data.res, 'success') 
	            		$('#editSK').modal('hide')
              			mutasi_individu.ajax.reload()
	            	}
	            }	    		
	    	})
	    })        
      })

      $('input[name=nip]').on('change', function(){
        $.ajax({
          url : '<?=admin_url('ReferensiAjax/get_data_byNIP')?>',
          method : 'get',
          data : {
            nip : $(this).val()
          },
          success:function(data){
            if(data != 'gagal'){
              json = JSON.parse(data)

              $('input[name=nama]').val(json.nama_lengkap)
              $('input[name=pangkat_gol]').val(json.jenis_pangkat)
              $('input[name=jabatan_lama]').val(json.nama_jabatan)
              $('input[name=satker_lama]').val(json.satuan_kerja)
              $('input[name=unker_lama]').val(json.unit_kerja)

            }else{
              $('input[name=nama]').val('')
              $('input[name=pangkat_gol]').val('')
              $('input[name=jabatan_lama]').val('')
              $('input[name=satker_lama]').val('')
              $('input[name=unker_lama]').val('')            	
            }
          }
        })
      })

      $("#<?=$table?> tbody").on('click', 'button.hapus', function(){

        $data = mutasi_individu.row( $(this).parents('tr') ).data()

        var r = confirm("Apakah Anda Yakin Ingin Menghapus Data Ini ?");
		if (r == true) {
	        $.ajax({
	        	url : "<?=admin_url('referensiAjax/delete_data_mutasi_individu/')?>" + $data.id,
	        	method : "POST",
	        	success:function(data){
	    			if(data.stat == 'Berhasil'){
	            		swal(data.stat, data.res, 'success') 
	          			mutasi_individu.ajax.reload()
	            	}	
	        	}
	        })
		}

      })

      $("#<?=$table?> tbody").on('click', 'button.print', function(){

        $data = mutasi_individu.row( $(this).parents('tr') ).data()
        window.open('<?=site_url("admin/DataMutasi/print_sk_individu/")?>' + $data.id, '_blank')
				mutasi_individu.ajax.reload()
      })

      $("#<?=$table?> tbody").on('click', 'button.details', function(){

        $data = mutasi_individu.row( $(this).parents('tr') ).data()

        $('#no_sk').text($data.no_sk)
        $('#tgl_sk').text($data.tgl_sk)
        $('#pejabat').text($data.pejabat)
        $('#tentang').text($data.tentang)

	    $.ajax({
	    	url : '<?=admin_url("ReferensiAjax/get_data_mutasi_individu_all/")?>' + $data.id,
	    	method : 'get',
	    	success:function(data){
	    		if(data){
	    			json = JSON.parse(data)
	    			td = ''
	    			td = '<td>'+json.id+'</td>' + 
	    					'<td>'+json.nip+'</td>' +
	    					'<td>'+json.pangkat_gol+'</td>' +
	    					'<td>Jabatan '+json.jabatan_lama+' pada bidang/bagian '+json.satker_lama+' di Subbidang/Seksi '+json.unker_lama+'</td>' +
	    					'<td>Jabatan '+json.jabatan_baru+' pada bidang/bagian '+json.satker_baru+' di Subbidang/Seksi '+json.unker_baru+'</td>' +
	    					'<td></td>'
	    			$('#modal_details tbody tr').empty().html(td)
	    		}
	    	}
	    })


        $('#modal_details').modal('show') 

      })

      $(".btnNext").on('click', function(e){
      	e.preventDefault();
    	$('.nav-tabs').find('a[href="' + $(this).attr('href') + '"]').click();
      })

			$("#<?=$table?> tbody").on('click', 'button.valid', function(){

        $data = mutasi_individu.row( $(this).parents('tr') ).data()
        $.ajax({
            url : '<?=admin_url('DataMutasi/data_valid_individu/')?>' + $data.id,
            success:function(data){
              if(data.stat == 'sukses'){
                swal(data.stat, data.res, 'success') 
                  mutasi_individu.ajax.reload()
              }
            }         
          })
      })

	})

</script>
