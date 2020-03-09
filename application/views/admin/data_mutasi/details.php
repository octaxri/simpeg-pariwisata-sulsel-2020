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
</div> -->

<!-- <div class="col-md-12 col-sm-12">
    <div class="widget widget-metric_1 animate">
        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-file-text" aria-hidden="true"></i></span>
        <div class="right">
            <span class="value">Tentang</span>
            <span class="title"><?=$this->input->get('tentang')?>
            </span>
        </div>
    </div>
</div> -->

<div class="col-md-12">
  <!-- PANEL DEFAULT -->

  <div class="panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">

          <table id="<?=$table?>" style="min-width: 100%;"  class="text-center table table-bordered">
            <thead>
              <tr>
                <th  style="vertical-align : middle;text-align:center;" rowspan="2"> ID</th>
                <th style="vertical-align : middle;text-align:center;" rowspan="2"> NIP</th>
                <th  style="vertical-align : middle;text-align:center;" rowspan="2"> PANGKAT/GOLONGAN/RUANG</th>
                <th style="vertical-align : middle;text-align:center;" rowspan="2"> STATUS</th>
                <th  style="vertical-align : middle;text-align:center;" colspan="2"> Tempat Tugas</th>
                <th width="10%" style="vertical-align : middle;text-align:center;" rowspan="2"></th>
              </tr>
              <tr>
                <th   style="vertical-align : middle;text-align:center;">Lama</th>
                <th style="vertical-align : middle;text-align:center;">Baru</th>
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

<!-- Modal -->
<div class="modal fade" id="tambahPegawai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Pegawai</h4>
      </div>
      <form>
      <div class="modal-body">
        
        <input type="hidden" name="id_mutasi_sk" value="<?=$this->input->get('id')?>">

      <div class="form-group">
        <label for="exampleInputEmail1">NIP</label>
        <input type="text" class="form-control" placeholder="NIP" name="nip">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="text" readonly class="form-control" placeholder="Nama lengkap" name="nama">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Pangkat Golongan</label>
        <input type="text" readonly class="form-control" placeholder="Pangkat Golongan" name="pangkat_gol">
      </div>

        <label>Tempat Tugas Lama</label>
      
        <div class="form-group">
           <!-- nama_jabatan --> 
          <p class="help-block">Jabatan</p>
          <input type="text" readonly class="form-control" name="jabatan_lama">
        </div>
        <div class="form-group">
           <!-- data_satker --> 
          <p class="help-block">Pada Bidang/Bagian</p>
          <input type="text" readonly class="form-control" name="satker_lama">
        </div>
        <div class="form-group">
           <!-- unit_kerja --> 
          <p class="help-block">di Subbidang/Seksi</p>
          <input type="text" readonly class="form-control" name="unker_lama">
        </div>                
      <!-- Tempat Tugas Lama (nama_jabatan pada tabel data_satker - unit_kerja ) -->

        <label>Tempat Tugas Baru</label>

        <div class="form-group">
           <!-- nama_jabatan --> 
          <p class="help-block">Jabatan</p>
          <select class="form-control select-2" name="jabatan_baru">
            <option>-- Jabatan --</option>
            <?php foreach ($jabatan as $jabatan): ?>
              <option value="<?=$jabatan->nama_jabatan?>"><?=$jabatan->nama_jabatan?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
           <!-- data_satker --> 
          <p class="help-block">Pada Bidang</p>
          <select class="form-control select-2" name="satker_baru">
            <option>-- Bidang/Bagian --</option>
            <?php foreach ($satker as $satker): ?>
              <option value="<?=$satker->nama_satker?>"><?=$satker->nama_satker?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
           <!-- unit_kerja --> 
          <p class="help-block">di Subbidang/Seksi</p>
          <select class="form-control select-2" name="unker_baru">
            <option>-- Subbidang/Seksi --</option>
            <?php foreach ($unker as $unker): ?>
              <op
              <option value="<?=$unker->nama_unit?>"><?=$unker->nama_unit?></option>
            <?php endforeach ?>
          </select>
        </div>                
    
      <input type="hidden" name="no_sk" value="<?=$this->input->get('no_sk')?>">
      <input type="hidden" name="tgl_sk" value="<?=$this->input->get('tgl_sk')?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

      mutasi_data = $('#<?=$table?>').DataTable( {
          "processing": true,
          scrollX : true,
          "ajax": {
              "url":  "<?=admin_url('referensiAjax/get_mutasi_data')?>",
              "type": "POST",
              "data" : {
                id : "<?=$this->input->get('id')?>"
              }
          },
          "columns": [
              { "data": "id" },
              { "data": "nip" },
              { "data": "pangkat_gol" },
              { "data": "status" },
              {
                 sortable: false,
                 "render": function ( data, type, full, meta ) {
                         return "Jabatan " + full.jabatan_lama + " pada bidang " + full.satker_lama + " di Subbidang/Seksi " + full.unker_lama;
                 }
              },
              {
                 sortable: false,
                 "render": function ( data, type, full, meta ) {
                         return "Jabatan " + full.jabatan_baru + " pada bidang " + full.satker_baru + " di Subbidang/Seksi " + full.unker_baru;
                 }
              },
              {
                 sortable: false,
                 "render": function ( data, type, full, meta ) {
                     return "<button class='btn btn-danger btn-xs hapus'><i class='fa fa-trash'></i>Hapus</button> <button class='btn btn-primary btn-xs valid'><i class='fa fa-check-circle'></i>Valid</button> <button class='print btn btn-success btn-xs'><i class='fa fa-print'></i>Petikan</button>";
                 }
             },
          ],
          dom: 'Bfrtip',
          buttons: [
              {
                text : '<i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali',
                className : 'btn btn-sm btn-default',
                action : function() {
                  window.location.replace("<?=admin_url('DataMutasi/kelompok')?>")
                }
              },
              {
                  text: '<i class="fa fa-plus" aria-hidden="true"></i> Tambah Pegawai',
                  className : 'btn btn-sm btn-primary',
                  action : function() {
                     // $('#tambahPegawai').modal('show')
                     window.location.replace("<?=admin_url('DataMutasi/tambah_sk_pegawai?id=').$this->input->get('id').'&no_sk='.$this->input->get('no_sk').'&tgl_sk='.$this->input->get('tgl_sk').'&pejabat='.$this->input->get('pejabat').'&tentang='.$this->input->get('tentang')?>")
                  }
              }            
          ],          
      } ); 

      $("#<?=$table?> tbody").on('click', 'button.hapus', function(){

        data = mutasi_data.row( $(this).parents('tr') ).data();

        var r = confirm("apakah anda yakin ingin menghapus data ini ?");
        if (r == true) {
          $.ajax({
            url : '<?=admin_url('referensiAjax/delete_mutasi_data')?>',
            method : 'post',
            data : {
              id : data.id
            },
                success:function(data){
                  if(data.stat == 'sukses'){
                    swal(data.stat, data.res, 'success') 
                      mutasi_data.ajax.reload()
                  }
                }         
          })
        }

      })

      $("#<?=$table?> tbody").on('click', 'button.print', function(){

        $data = mutasi_data.row( $(this).parents('tr') ).data()
        // console.log($data)
        window.open('<?=site_url("admin/DataMutasi/print_petikan/")?>' + $data.id +  '/' + $data.id_mutasi_sk, '_blank')
        mutasi_data.ajax.reload()
      })

      $("#<?=$table?> tbody").on('click', 'button.valid', function(){

        $data = mutasi_data.row( $(this).parents('tr') ).data()
        $.ajax({
            url : '<?=admin_url('DataMutasi/data_valid/')?>' + $data.id,
            success:function(data){
              if(data.stat == 'sukses'){
                swal(data.stat, data.res, 'success') 
                  mutasi_data.ajax.reload()
              }
            }         
          })
      })

  })
</script>
