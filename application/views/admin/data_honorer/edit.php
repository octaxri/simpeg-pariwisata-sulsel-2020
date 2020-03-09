<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>PERHATIAN!</strong> Inputan dengan tanda <strong style="color: red;">(*)</strong>  , Wajib untuk diisi (<a role="button" data-dismiss="alert" aria-label="Close" >Tutup</a>)
    </div>
      <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>    

    <div class="panel panel-tab">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-plus"></i> Tambah Data Honorer</h3>
        <ul class="nav nav-tabs pull-right">
         <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user-circle-o"></i> Data Pribadi</a></li>
         <li><a href="#tab2" data-toggle="tab"><i class="fa fa-briefcase"></i> Pendidikan</a></li>
         <li><a href="#tab3" data-toggle="tab"><i class="fa fa-drivers-license-o"></i> Data Tambahan</a></li>
       </ul>
     </div>

      <div class="panel-body">
      	<?php foreach ($data as $key => $value): ?>	
		<form id="edit-honorer" class="form_horizontal">

			<input type="hidden" name="id" value="<?=$this->input->get('id')?>">
			
        <div class="row">
			<div class="tab-content no-padding">
           		<div class="tab-pane fade in active" id="tab1">

		        	<div class="col-md-6">
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Nama Lengkap <strong style="color: red;">(*)</strong></label>
		                  <div id="namaStatus" class="col-md-8">
		                    <input type="text" name="nama" id="nama" class="form-control" placeholder="" data-parsley-type="digits" value="<?=$value->nama?>">
		                    <p class="help-block" id="namaStatusText"></p>
		                    <div id="namaStatusIcon">

		                    </div>
		                   <div class="nama"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">NIK <strong style="color: red;">(*)</strong></label>
		                  <div id="nipStatus" class="col-md-8">
		                    <input type="text" name="nip" id="nip" class="form-control" placeholder="NIK (16 Digit Angka)" data-parsley-type="digits"  maxlength="16" minlength="16" value="<?=$value->nip?>">
		                    <p class="help-block" id="nipStatusText"></p>
		                    <div id="nipStatusIcon">
		                    </div>
		                    <div class="nip"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Tempat Lahir <strong style="color: red;">(*)</strong></label>
		                  <div id="tempat_lahirStatus" class="col-md-8">
		                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="" data-parsley-type="digits" value="<?=$value->tempat_lahir?>">
		                    <p class="help-block" id="tempat_lahirStatusText"></p>
		                    <div id="tempat_lahirStatusIcon">
		                    </div>
		                    <div class="tempat_lahir"></div>
		                  </div>
		                </div>
		            </div>

		            <div class="col-md-6">
		                <div class="form-group date">
		                  <label class="col-md-4 control-label">Tanggal lahir <strong style="color: red;">(*)</strong></label>
		                  <div id="tanggal_lahirStatus" class="col-md-8">
		                    <div class="input-group date">
							    <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?=$value->tanggal_lahir?>">
							    <div class="input-group-addon">
							        <span class="glyphicon glyphicon-th"></span>
							    </div>
							</div>
		                    <p class="help-block" id="tanggal_lahirStatusText"></p>
		                    <div id="tanggal_lahirStatusStatusIcon">
		                    </div>
		                    <div class="tanggal_lahir"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Alamat <strong style="color: red;">(*)</strong></label>
		                  <div id="alamatStatus" class="col-md-8">
		                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Sesuai KTP" data-parsley-type="digits" value="<?=$value->alamat?>">
		                    <p class="help-block" id="alamatStatusText"></p>
		                    <div id="alamatStatusIcon">
		                    </div>
		                    <div class="alamat"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Jenis Kelamin <strong style="color: red;">(*)</strong></label>
		                  <div id="jenis_kelaminStatus" class="col-md-8">
							<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
							  <option value="" readonly>- Pilih -</option>
							  <option value="laki-laki" <?php if ($value->jenis_kelamin == 'laki-laki'): echo 'selected' ?><?php endif ?>>Laki-laki</option>
							  <option value="perempuan" <?php if ($value->jenis_kelamin == 'perempuan'): echo 'selected' ?><?php endif ?>>Perempuan</option>
							</select>

		                    <p class="help-block" id="jenis_kelaminStatusText"></p>
		                    <div id="jenis_kelaminStatusIcon">
		                    </div>
		                    <div class="jenis_kelamin"></div>
		                  </div>
		                </div>
		            </div>

		            <div class="col-md-12 text-center">
		              <hr>
		              <center>
		                <a class="btn btn-primary btn-sm btnNext" href="#tab2" data-toggle="tab" role="button"><i class="fa fa-arrow-right"></i>BERIKUTNYA</a>
		              </center>
		            </div>

		        </div>

           		<div class="tab-pane fade in" id="tab2">
		        	<div class="col-md-6">
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Pendidikan <strong style="color: red;">(*)</strong></label>
		                  <div id="pendidikan_trakhirStatus" class="col-md-8">
							<select class="form-control" name="pendidikan_trakhir" id="pendidikan_trakhir">
							  <option value="" readonly>- Pilih -</option>
							  <option value="SMA" <?php if ($value->pendidikan_trakhir == 'SMA'): echo 'selected' ?><?php endif ?>>SMA</option>
							  <option value="D1" <?php if ($value->pendidikan_trakhir == 'D1'): echo 'selected' ?><?php endif ?>>D-1</option>
							  <option value="D2" <?php if ($value->pendidikan_trakhir == 'D2'): echo 'selected' ?><?php endif ?>>D-2</option>
							  <option value="D3" <?php if ($value->pendidikan_trakhir == 'D3'): echo 'selected' ?><?php endif ?>>D-3</option>
							  <option value="s1" <?php if ($value->pendidikan_trakhir == 's1'): echo 'selected' ?><?php endif ?>>Strata 1</option>
							  <option value="s2" <?php if ($value->pendidikan_trakhir == 's2'): echo 'selected' ?><?php endif ?>>Strata 2</option>
							  <option value="s3" <?php if ($value->pendidikan_trakhir == 's3'): echo 'selected' ?><?php endif ?>>Strata 3</option>
							</select>
		                    <p class="help-block" id="jenis_kelaminStatusText"></p>
		                    <div id="jenis_kelaminStatusIcon">
		                    </div>
		                    <div class="pendidikan_trakhir"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">No. Ijazah <strong style="color: red;">(*)</strong></label>
		                  <div id="nomor_ijazahStatus" class="col-md-8">
		                    <input type="text" name="nomor_ijazah" id="nomor_ijazah" class="form-control" placeholder="" data-parsley-required value="<?=$value->nomor_ijazah?>">
		                    <p class="help-block" id="nipStatusText"></p>
		                    <div id="nomor_ijazahStatusIcon">
		                    </div>
		                    <div class="nomor_ijazah"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Tanggal Ijazah <strong style="color: red;">(*)</strong></label>
		                  <div id="tanggal_ijazahStatus" class="col-md-8">
		                    <div class="input-group date">
							    <input type="text" id="tanggal_ijazah" name="tanggal_ijazah" class="form-control" value="<?=$value->tanggal_ijazah?>">
							    <div class="input-group-addon">
							        <span class="glyphicon glyphicon-th"></span>
							    </div>
							</div>
		                    <p class="help-block" id="tanggal_ijazahStatusText"></p>
		                    <div id="tanggal_ijazahStatusIcon">
		                    </div>
		                    <div class="tanggal_ijazah"></div>
		                  </div>
		                </div>		                
		            </div>

		            <div class="col-md-6">
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Jurusan <strong style="color: red;">(*)</strong></label>
		                  <div id="jurusanStatus" class="col-md-8">
		                    <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Jurusan Sesuai Ijazah" data-parsley-required value="<?=$value->jurusan?>">
		                    <p class="help-block" id="jurusanStatusText"></p>
		                    <div id="jurusanStatusIcon">
		                    </div>
		                    <div class="jurusan"></div>
		                  </div>
		                </div>
<!-- 		                <div class="form-group">
		                  <label class="col-md-4 control-label">prodi <strong style="color: red;">(*)</strong></label>
		                  <div id="prodiStatus" class="col-md-8">
		                    <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Program studi sesuai ijazah" data-parsley-required>
		                    <p class="help-block" id="prodiStatusText"></p>
		                    <div id="prodiStatusIcon">
		                    </div>
		                    <div class="prodi"></div>
		                  </div>
		                </div> -->		            	
		            </div>

		            <div class="col-md-12 text-center">
		              <hr>
		              <center>
		              	<a class="btn btn-primary btn-sm btnNext" href="#tab1" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>SEBELUMNYA</a>
		                <a class="btn btn-primary btn-sm btnNext" href="#tab3" data-toggle="tab" role="button"><i class="fa fa-arrow-right"></i>BERIKUTNYA</a>
		              </center>
		            </div>

		        </div>		        

           		<div class="tab-pane fade in" id="tab3">
		        	<div class="col-md-6">
		        		<p style="text-transform: uppercase">riwayat tenaga honorer</p>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Nomor <strong style="color: red;">(*)</strong></label>
		                  <div id="no_sk_honorerStatus" class="col-md-8">
		                    <input type="text" name="no_sk_honorer" id="no_sk_honorer" class="form-control" placeholder="Nomor Riwayat Tenaga Honorer" data-parsley-type="digits" value="<?=$value->no_sk_honorer?>">
		                    <p class="help-block" id="no_sk_honorerStatusText"></p>
		                    <div id="no_sk_honorerStatusIcon">
		                    </div>
		                    <div class="no_sk_honorer"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Tahun <strong style="color: red;">(*)</strong></label>
		                  <div id="tmt_honorerStatus" class="col-md-8">
		                    <input type="text" name="tmt_honorer" id="tmt_honorer" class="form-control" placeholder="TMT Honorer" data-parsley-type="digits" value="<?=$value->tmt_honorer?>">
		                    <p class="help-block" id="tmt_honorerStatusText"></p>
		                    <div id="tmt_honorerStatusIcon">
		                    </div>
		                    <div class="tmt_honorer"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Tanggal SK <strong style="color: red;">(*)</strong></label>
		                  <div id="tanggal_sk_honorerStatus" class="col-md-8">
		                    <input type="text" name="tanggal_sk_honorer" id="tanggal_sk_honorer" class="form-control" placeholder="" data-parsley-type="digits" value="<?=$value->tanggal_sk_honorer?>">
		                    <p class="help-block" id="tanggal_sk_honorerStatusText"></p>
		                    <div id="tanggal_sk_honorerStatusIcon">
		                    </div>
		                   <div class="tanggal_sk_honorer"></div>
		                  </div>
		                </div>
		            </div>

		            <div class="col-md-6">
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Jabatan <strong style="color: red;">(*)</strong></label>
		                  <div id="jabatan_honorerStatus" class="col-md-8">
		                    <input type="text" name="jabatan_honorer" id="jabatan_honorer" class="form-control" placeholder="Jabatan Sebagai Honorer" data-parsley-type="digits" value="<?=$value->jabatan_honorer?>">
		                    <p class="help-block" id="jabatan_honorerStatusText"></p>
		                    <div id="jabatan_honorerStatusIcon">
		                    </div>
		                    <div class="jabatan_honorer"></div>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Kursus Pelatihan <strong style="color: red;">(*)</strong></label>
		                  <div id="kursus_pelatihanStatus" class="col-md-8">
		                    <input type="text" name="kursus_pelatihan" id="kursus_pelatihan" class="form-control" placeholder="" data-parsley-type="digits" value="<?=$value->kursus_pelatihan?>">
		                    <p class="help-block" id="kursus_pelatihanStatusText"></p>
		                    <div id="kursus_pelatihanStatusIcon">
		                    </div>
		                    <div class="kursus_pelatihan"></div>
		                  </div>
		                </div>	
		                <div class="form-group">
		                  <label class="col-md-4 control-label">Status Honorer <strong style="color: red;">(*)</strong></label>
		                  <div id="statusStatus" class="col-md-8">
		                    <select class="form-control" name="status" id="jenis_kelamin">
							  <option value="" readonly>- Pilih -</option>
							  <option value="aktif" <?php if ($value->status == 'aktif'): echo 'selected' ?><?php endif ?>>Aktif</option>
							  <option value="nonaktif" <?php if ($value->status == 'nonaktif'): echo 'selected' ?><?php endif ?>>Nonaktif</option>
							</select>
		                    <p class="help-block" id="statusStatusText"></p>
		                    <div id="statusStatusIcon">
		                    </div>
		                    <div class="status"></div>
		                  </div>
		                </div>		                	                
		            </div>

		            <div class="col-md-12 text-center">
		              <hr>
		              <center>
		              	<a class="btn btn-primary btn-sm btnNext" href="#tab2" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>SEBELUMNYA</a>
		              	<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i>SIMPAN</button>
		              </center>
		            </div>

		        </div>
		    </div>
          </div>
		</form>
		<?php endforeach ?>
      </div>
    </div>
  </div>
</div>


<!-- validasi data -->
<script type="text/javascript">

	$("#ijazah_lengkap").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(valid.test(value) && value != ""){
		  SuccessValid($(this).attr('id'))
		}else{
		  FailedValid($(this).attr('id'), 'jangan memakai angka')
		}
	})

	$("#nip").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[0-9])/
		if(valid.test(value) && value != "" && value.length == 16){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'harus memakai dikit angka dan 16 dikit angka')
		}
	})

	$("#tempat_lahir").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(valid.test(value) && value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'harus memakai huruf')
		}
	})

	
	$("#alamat").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(valid.test(value) && value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'alamat harus diisi')
		}
	})	

	$("#nomor_ijazah").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'nomor ijazah tidak boleh kosong')
		}
	})

	$("#jurusan").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'jurusan tidak boleh kosong')
		}
	})

	$("#prodi").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'program studi tidak boleh kosong')
		}
	})

	$("#no_sk_honorer").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'No SK Honorer tidak boleh kosong')
		}
	})

	$("#tmt_honorer").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'Tahun SK Honorer tidak boleh kosong')
		}
	})

	$("#tanggal_sk_honorer").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'Tanggal SK Honorer tidak boleh kosong')
		}
	})

	$("#jabatan_honorer").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'Jabatan Honorer tidak boleh kosong')
		}
	})

	$("#kursus_pelatihan").on('change', function(){
		var value = $(this).val()
		var valid = /(?:[a-zA-Z])/
		if(value != ""){
			SuccessValid($(this).attr('id'))
		}else{
			FailedValid($(this).attr('id'), 'Jabatan Honorer tidak boleh kosong')
		}
	})

	function SuccessValid(id){
	  $("#"+id+"StatusText").text('')
	  $("#"+id+"Status").removeClass('has-error has-feedback');
      $("#"+id+"Status").addClass('has-success has-feedback');
      $("#"+id+"StatusIcon").empty();
      $("#"+id+"StatusIcon").html('<span class="fa fa-check form-control-feedback" aria-hidden="true"></span>');
      $("#submit").prop("disabled", false); }
	function FailedValid(id, text){
	  $("#"+id+"StatusText").text(text)
      $("#"+id+"Status").removeClass('has-success has-feedback');
      $("#"+id+"Status").addClass('has-error has-feedback');
      $("#"+id+"StatusIcon").empty();
      $("#"+id+"StatusIcon").html('<span class="fa fa-close form-control-feedback" aria-hidden="true"></span>');
      $("#submit").prop("disabled", true); }

      $(".btnNext").on('click', function(e){
      	e.preventDefault();
    	$('.nav-tabs').find('a[href="' + $(this).attr('href') + '"]').click();
      })

    $("#edit-honorer").on('submit', function(e){
    	e.preventDefault()
    	$.ajax({
    		url : "<?=admin_url('honorer/edit_data_honorer')?>",
    		method : "POST",
    		data : new FormData(this),
			processData:false,
            contentType:false,
            cache:false,
            async:false,
            complete:function(data){
            	json = JSON.parse(data.responseText)
            	if(json.stat =='gagal'){
            		for(x in json.res){
            			if(json.res[x] != ""){
	            			$("."+x).html(json.res[x])
	            			$("#"+x+"Status").addClass("has-error has-feedback")
            			}
            		}
            		console.log(json.res)
            	}else{
            		$("body").load(json.url)
					window.history.pushState('page2', 'Title', json.url)
            	}
            	
				
            }    		
    	})
    })

</script>