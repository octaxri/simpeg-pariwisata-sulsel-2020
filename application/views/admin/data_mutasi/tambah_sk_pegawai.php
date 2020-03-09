<div class="row">
	<div class="col-md-4 col-sm-4">
	    <div class="widget widget-metric_1 animate">
	        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-envelope-open"></i></span>
	        <div class="right">
	            <span class="value">Nomor SK</span>
	            <span class="title"><?=$this->input->get('no_sk')?>
	            </span>
	        </div>
	    </div>
	</div>

	<div class="col-md-4 col-sm-4">
	    <div class="widget widget-metric_1 animate">
	        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
	        <div class="right">
	            <span class="value">Tanggal SK</span>
	            <span class="title"><?=$this->input->get('tgl_sk')?>
	            </span>
	        </div>
	    </div>
	</div>

	<!-- <div class="col-md-4 col-sm-4">
	    <div class="widget widget-metric_1 animate">
	        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-wheelchair" aria-hidden="true"></i></span>
	        <div class="right">
	            <span class="value">Nama Pejabat</span>
	            <span class="title"><?=$this->input->get('pejabat')?>
	            </span>
	        </div>
	    </div>
	</div>

	<div class="col-md-12 col-sm-12">
	    <div class="widget widget-metric_1 animate">
	        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-file-text" aria-hidden="true"></i></span>
	        <div class="right">
	            <span class="value">Tentang</span>
	            <span class="title"><?=$this->input->get('tentang')?>
	            </span>
	        </div>
	    </div>
	</div> -->

</div>

  <!-- PANEL DEFAULT -->

    <div class="panel panel-tab">
      <div class="panel-heading">
        <h3 class="panel-title"><a href="<?=admin_url('DataMutasi/details?id=').$this->input->get('id').'&no_sk='.$this->input->get('no_sk').'&tgl_sk='.$this->input->get('tgl_sk').'&pejabat='.$this->input->get('pejabat').'&tentang='.$this->input->get('tentang')?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali ke Details SK Mutasi</a></h3>
        <ul class="nav nav-tabs pull-right">
         <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user-circle-o"></i> Data Pegawai</a></li>
         <li><a href="#tab2" data-toggle="tab"><i class="fa fa-drivers-license-o"></i> Tempat Tugas Baru</a></li>
       </ul>
     </div>

    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">

        <form>

        <div class="tab-content no-padding">
        	<!-- tab 1 -->
			<div class="tab-pane fade in active" id="tab1">

				<input type="hidden" name="id_mutasi_sk" value="<?=$this->input->get('id')?>">

				<div class="row">

					<div class="col-md-6">
				      <div class="form-group">
				        <label for="exampleInputEmail1">NIP</label>
				        <input type="text" class="form-control" placeholder="NIP" name="nip" required>
				      </div>
				      <div class="form-group">
				        <label for="exampleInputEmail1">Nama Lengkap</label>
				        <input type="text" readonly class="form-control" placeholder="Nama lengkap" name="nama">
				      </div>

				      <div class="form-group">
				        <label for="exampleInputEmail1">Pangkat Golongan</label>
				        <input type="text" readonly class="form-control" placeholder="Pangkat Golongan" name="pangkat_gol">
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
			          <label for="exampleInputEmail1">Pada Bidang</label>
			          <input type="text" readonly class="form-control" name="satker_lama">
			        </div>
			        <div class="form-group">
			           <!-- unit_kerja --> 
			          <label for="exampleInputEmail1">di Subbidang/Seksi</label>
			          <input type="text" readonly class="form-control" name="unker_lama">
			        </div> 
			      </div>

			    </div>

				<div class="col-md-12 text-center">
	              <hr>
	              <center>
	                <a class="btn btn-primary btn-sm btnNext" href="#tab2" data-toggle="tab" role="button">BERIKUTNYA &emsp; <i class="fa fa-arrow-right"></i></a>
	              </center>
	            </div>

			</div>

			<!-- tab 2 -->
			<div class="tab-pane fade in" id="tab2">
		        <div class="row">
			        <div class="col-md-12 form-group">
			           <!-- nama_jabatan --> 
			          <label for="exampleInputEmail1">Jabatan</label>
			          <select class="form-control select-2" name="jabatan_baru" required>
			            <option value="">-- Jabatan --</option>
			            <?php foreach ($jabatan as $jabatan): ?>
			              <option value="<?=$jabatan->nama_jabatan?>"><?=$jabatan->nama_jabatan?></option>
			            <?php endforeach ?>
			          </select>
			        </div>
			        <div class="col-md-6 form-group">
			           <!-- data_satker --> 
			          <label for="exampleInputEmail1">Pada Bidang</label>
			          <select class="form-control select-2" name="satker_baru">
			            <option value="">-- Bidang/Bagian --</option>
			            <?php foreach ($satker as $satker): ?>
			              <option value="<?=$satker->nama_satker?>"><?=$satker->nama_satker?></option>
			            <?php endforeach ?>
			          </select>
			        </div>
			        <div class="col-md-6 form-group">
			           <!-- unit_kerja --> 
			          <label for="exampleInputEmail1">di Subbidang/Seksi</label>
			          <select class="form-control select-2" name="unker_baru">
			            <option value="">-- Subbidang/Seksi --</option>
			            <?php foreach ($unker as $unker): ?>
			              <option value="<?=$unker->nama_unit?>"><?=$unker->nama_unit?></option>
			            <?php endforeach ?>
			          </select>
			        </div>                
		    	</div>
		    	<input type="hidden" name="no_sk" value="<?=$this->input->get('no_sk')?>">
		      	<input type="hidden" name="tgl_sk" value="<?=$this->input->get('tgl_sk')?>">

		    	

				<div class="col-md-12 text-center">
	              <hr>
	              <center>
	                <a class="btn btn-primary btn-sm btnNext" href="#tab1" data-toggle="tab" role="button"><i class="fa fa-arrow-left"></i>SEBELUMNYA</a>
	                <button type="submit" class="btn btn-success btn-sm"> <i class="fa fa-save" aria-hidden="true"></i>SIMPAN</button>
	              </center>
	            </div>

			</div>

	    </div>

	 	 </form>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
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

      $('form').on('submit', function(e){
        e.preventDefault()
        $.ajax({
          url : '<?=admin_url('referensiAjax/add_mutasi_data')?>',
          method : 'post',
          data : new FormData(this),
              processData:false,
              contentType:false,
              cache:false,
              async:false,
              success:function(data){
                if(data.stat == 'sukses'){
                  swal(data.stat, data.res, 'success') 
                  window.location.replace("<?=admin_url('DataMutasi/details?id=').$this->input->get('id').'&no_sk='.$this->input->get('no_sk').'&tgl_sk='.$this->input->get('tgl_sk').'&pejabat='.$this->input->get('pejabat').'&tentang='.$this->input->get('tentang')?>")
                    //mutasi_data.ajax.reload()
                }
              }         
        })
      })

      $(".btnNext").on('click', function(e){
      	e.preventDefault();
    	$('.nav-tabs').find('a[href="' + $(this).attr('href') + '"]').click();
      })

</script>
