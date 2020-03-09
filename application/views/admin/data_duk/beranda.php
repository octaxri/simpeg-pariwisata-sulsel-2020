  <div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-search"></i> Pencarian Data DUK</h3>
        <div class="right">
          <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
          <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
      </div>
      <form action="<?=admin_url("DataDuk/")?>" method="GET">
      <div class="panel-body">
        <p>Silahkan isi bidang/bagian terlebih dahulu</p>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class=" control-label">Bidang/Bagian</label>
              <?php $satker = $this->input->get('satker'); ?>
              <select name="satker" id="satker" class="form-control select-2">
                <?php foreach ($data_satker as $data_satker): ?>
                  <option value="<?=$data_satker->nama_satker?>"

                    <?php 
                      if($satker == $data_satker->nama_satker){
                        echo 'selected';
                      };
                    ?>

                  ><?=$data_satker->nama_satker?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
        </div>
        <center>
          <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-search"></i>Cari</button>
<!--          <button class="btn btn-danger btn-sm" type="button"><i class="fa fa-close"></i>Reset</button>-->
        </center>
      </div>
    </form>
    </div>

<?php $satker=$this->input->get('satker'); if($satker){ ?>
  <div tabindex='1' id="ajaxResult">
  <div class="panel">
    <div class="panel-body">
      <table class="table table-bordered hahaha" style="min-width: 100%;">
          <thead>
            <tr>
              <th style="text-align: center;" width="5%">DUK</th>
              <th style="text-align: center;">NIP</th>
              <th style="text-align: center;">NAMA</th>
              <th style="text-align: center;">PANGKAT/GOLONGAN/RUANG</th>
              <th style="text-align: center;">ESELON</th>
              <th style="text-align: center;">JENIS JABATAN</th>
              <th style="text-align: center;">JABATAN</th>
              <th style="text-align: center;">TMT CPNS</th>
              <th style="text-align: center;">PENDIDIKAN</th>
              <th style="text-align: center;">TANGGAL LAHIR</th>
              <th style="text-align: center;">TEMPAT LAHIR</th>
              <th style="text-align: center;">ALAMAT</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; $nilai=0; foreach ($duk as $key => $value): ?>
              <tr class="text-center">
                <td>
                  <?php
                    if($value->total == $nilai){
                      echo $i;
                    }else{
                      $nilai = $value->total;
                      $i = $i + 1;
                      echo $i;
                    }
                  ?>  
                </td>
                <td><?=$value->nip?></td>
                <td><?=(($value->gelar_depan == '') ? '' : $value->gelar_depan.'.').' '.$value->nama_lengkap.(($value->gelar_belakang == '') ? '' : ', '.$value->gelar_belakang)?></td>
                <td><?=$value->tbl_pangkat?></td>
                <td><?=$value->tbl_jabatan?></td>
                <td><?=$value->jenis_jabatan?></td>
                <td><?=$value->nama_jabatan?></td>
                <td><?=$value->tbl_masa_kerja == NULL ? '-' : $value->tbl_masa_kerja?></td>
                <td><?=$value->tbl_pendidikan?></td>
                <td><?=$value->tbl_umur?></td>
                <td><?=$value->tempat_lahir?></td>
                <td><?=$value->alamat?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        </div>
    </div>    
  </div>
  <?php } ?>
</div>
<script type="text/javascript">

  $(document).ready(function(){
    var Exnormal = $('.hahaha').DataTable({
      scrollX: true,
      responsive: true,
      "autoWidth": true,
      "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        },
      dom: 'Bfrtip',
        buttons: [
           { 
            extend: 'csv', 
            text : '<i class="fa fa-download"></i>Ekspor Data ke File Excel' ,
            className: 'btn btn-primary btn-sm'
          }
        ],
    })     
  })

</script>