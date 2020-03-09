<a class="btn btn-primary btn-sm" href="<?=admin_url('DataPegawai/tambah')?>" type="button"><i class="fa fa-plus"></i>Tambah Data Pegawai</a>
<hr>

 <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
<?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-search"></i> Pencarian Data</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
                </div>
            </div>
            <div class="panel-body">
                <p>Silahkan isi beberapa option atau keseluruhan form untuk menampilkan data secara spesifik.</p>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class=" control-label">Pegawai</label>
                            <input type="text" id="identifier" class="form-control" placeholder="Masukkan NIP/Nama Pegawai">
                        </div>
                        <div class="form-group">
                            <label class=" control-label">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control">
                                <option value="all">-Semua Jenis-</option>
                                <option value="wanita">Perempuan</option>
                                <option value="pria">Laki-laki</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class=" control-label">Agama</label>
                            <select  id="agama" class="form-control">
                                <option value="all">-Semua Agama-</option>
                                <?php foreach ($data_agama as $data_agama): ?>
                                    <option value="<?=$data_agama->nama_agama?>"><?=$data_agama->nama_agama?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class=" control-label">Pangkat/Golongan</label>
                            <select id="eselon" class="form-control">
                                <option value="all">-semua pangkat-</option>
                                <?php foreach ($data_eselon as $data_eselon): ?>
                                    <option value="<?=$data_eselon->nama_eselon?>"><?=$data_eselon->nama_eselon?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class=" control-label">Pendidikan</label>
                            <select id="pendidikan" class="form-control">
                                <option value="all">-semua pendidikan</option>
                                <?php foreach ($data_pendidikan as $data_pendidikan): ?>
                                    <option value="<?=$data_pendidikan->nama_pendidikan?>"><?=$data_pendidikan->nama_pendidikan?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class=" control-label">Satuan Kerja</label>
                            <select id="satker" class="form-control">
                                <option value="all">-Semua satuan Kerja-</option>
                                <?php foreach ($data_satker as $data_satker): ?>
                                    <option value="<?=$data_satker->nama_satker?>"><?=$data_satker->nama_satker?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <center>
                <button class="btn btn-primary btn-sm" id="filter" type="button"><i class="fa fa-filter"></i>Filter</button>
                <button class="btn btn-danger" type="button"><i class="fa fa-close"></i>Reset</button>
                </center>
            </div>
        </div>
        <!-- END PANEL DEFAULT -->
    </div>
</div>
<!-- OVERVIEW -->
<div tabindex='1' id="ajaxResult">

</div>
<div style="display: none" class="panel panel-headline">
    <div class="panel-heading">
        <h4 class="panel-title">Data Pegawai (<?=$total_pegawai?> Orang)</h4>
    </div>
    <div class="panel-body">
    <hr>
         <?php foreach ($data_pegawai as $data_pegawai): ?>
             <div class="row">

                    <div class="col-md-2 text-center">
                        <img src="<?=$data_pegawai->gambar != null ? upload_url('fotopegawai').$data_pegawai->gambar : upload_url('fotopegawai').'no_image.jpg'?>" class="img-thumbnail loaded-image" style="width:100%">
                    </div>
                    <div class="col-md-5">
                        <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                                <td colspan="3"> <strong> <?=$data_pegawai->nama_lengkap?> </strong></td>
                            </tr>
                            <tr>
                                <td width="100">NIP</td>
                                <td width="10px" style="color: #848484;">:</td>
                                <td><?=$data_pegawai->nip?> </td>
                            </tr>
                            <tr>
                                <td width="100">NIP Lama</td>
                                <td width="10px" style="color: #848484;">:</td>
                                <td><?=$data_pegawai->niplama?> </td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td width="10px" style="color: #848484;">:</td>
                                <td> <?=$data_pegawai->tempat_lahir?> </td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td width="10px" style="color: #848484;">:</td>
                                <td><?=date('d F Y',strtotime($data_pegawai->tanggal_lahir))?></td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td width="10px" style="color: #848484;">:</td>
                                <td> <?php
                                    $akhir = new DateTime(date('m/d/Y'));
                                    $awal = new DateTime($data_pegawai->tanggal_lahir);
                                echo $akhir->diff($awal)->format("%y Thn %m Bln %d Hr")?> </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td> <?=$data_pegawai->agama?> </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td> <?=$data_pegawai->jenis_kelamin?> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                                <td colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="150">Pangkat/Golongan/Ruang</td>
                                <td width="1">:</td>
                                <td><?=$data_pegawai->jenis_pangkat?></td>
                            </tr>
                            <tr>
                                <td>Eselon</td>
                                <td>:</td>
                                <td> <?=$data_pegawai->eselon?> </td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td><?=$data_pegawai->nama_jabatan?></td>
                            </tr>
                            <tr>
                                <td>Satuan Kerja</td>
                                <td>:</td>
                                <td> <?=$data_pegawai->satuan_kerja?></td>
                            </tr>
                            <tr>
                                <td>Unit Kerja</td>
                                <td>:</td>
                                <td> <?=$data_pegawai->unit_kerja?> </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                <br>
                                <a href="<?=admin_url('DataPegawai/profil/'.$data_pegawai->nip)?>" class="btn btn-default btn-xs btn-mini btn-block" > <i class="fa fa-arrow-circle-right"></i> Profil Selengkapnya </a> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-3 text-center"> <div class="clearfix visible-xs">&nbsp;</div> <a  class="btn btn-success btn-xs btn-mini" href="<?=admin_url('DataPegawai/edit/'.$data_pegawai->nip)?>"  > <i class="fa fa-edit"></i> Edit </a> <button  title="Delete" class="btn btn-danger btn-xs btn-mini" > <i class="fa fa-times"></i> Hapus </button> </div>

                    </div>
                    <hr>
            <?php endforeach ?>
            </div>
</div>
<!-- END OVERVIEW -->
<script>
function hapusData(id) {
    swal({
      title: 'Apakah Anda Yakin?',
      text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus!',
      cancelButtonText: 'Batalkan!',
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        $.ajax({
            type: 'POST',
            url: '<?=admin_url('DataPegawai/hapusAjax/')?>'+id
          }).done(function(response) {
            if (response.success) {
              $("tr[data-id='"+id+"']").remove();
              swal('Sukses', 'Data berhasil dihapus.', 'success');
            } else swal('Gagal', 'Data gagal dihapus.', 'error');
         });
      } else {
        swal(
          'Batal',
          'Proses Hapus Data dibatalkan! :)',
          'error'
        )
      }
    });
}
</script>
<script type="text/javascript">
    $("#filter").on('click', function(event) {
    $.ajax({
        type: 'POST',
        url: '<?=admin_url("DataPegawai/FilterAjax/")?>',
        data: {
          identifier: $('#identifier').val(),
          jenis_kelamin: $('#jenis_kelamin').val(),
          agama: $('#agama').val(),
          eselon: $('#eselon').val(),
          pendidikan: $('#pendidikan').val(),
          satker: $('#satker').val()
        }
        }).done(function(response) {
            if (response.success) {
                // console.log(response.data);
                if (response.data.length != 0) {
                var div  = `<h4 class="panel-title">Data Pegawai (`+response.data.length+` Orang)</h4><br>`;
                    for(var i =0;i <= response.data.length-1;i++)
                    {
                        // console.log(i);
                      var item = response.data[i];
                      if (item.gambar != '') {
                        item.gambar = '<?=upload_url('fotopegawai')?>'+item.gambar;
                      }else{
                        item.gambar = '<?=upload_url('fotopegawai')?>no_image.jpg';
                      }

                      var div = div + `
                        <div class="panel panel-headline">
                            <div class="panel-body">
                            <hr>
                             <div class="row">
                                <div class="col-md-2 text-center">
                                    <img src="`+item.gambar+`" class="img-thumbnail loaded-image" style="width:100%">
                                </div>
                                <div class="col-md-5">
                                    <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td colspan="3"> <strong> `+item.nama_lengkap+` </strong></td>
                                        </tr>
                                        <tr>
                                            <td width="100">NIP</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td>`+item.nip+` </td>
                                        </tr>
                                        <tr>
                                            <td width="100">NIP Lama</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td>`+item.niplama+` </td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.tempat_lahir+` </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td>`+item.tanggal_lahir+`</td>
                                        </tr>
                                        <tr>
                                            <td>Usia</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.agama+` </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.jenis_kelamin+` </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-5">
                                    <table class="standard-table" width="100%" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="150">Pangkat/Golongan/Ruang</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td>`+item.jenis_pangkat+`</td>
                                        </tr>
                                        <tr>
                                            <td>Eselon</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.eselon+` </td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td>`+item.nama_jabatan+`</td>
                                        </tr>
                                        <tr>
                                            <td>Masa Kerja Total</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.masa_kerja_total+` Hr </td>
                                        </tr>
                                        <tr>
                                            <td>Masa Kerja Golongan</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.masa_kerja_golongan+` Hr</td>
                                        </tr>
                                        <tr>
                                            <td>Satuan Kerja</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.satuan_kerja+`</td>
                                        </tr>
                                        <tr>
                                            <td>Unit Kerja</td>
                                            <td width="10px" style="color: #848484;">:</td>
                                            <td> `+item.unit_kerja+`</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 5px"><br><a href="<?=admin_url('DataPegawai/profil/')?>`+item.nip+`" class="btn btn-default btn-xs  btn-block" > <i class="fa fa-arrow-circle-right"></i> Profil Selengkapnya </a> </td>
                                            <td style="padding: 0px 5px; width: 80px;"><br><a href="<?=admin_url('DataPegawai/edit/')?>`+item.nip+`" class="btn btn-success btn-xs btn-block" > <i class="fa fa-edit"></i> Edit </a></td>
                                            <td style="padding: 0px 5px"><br><button  title="Delete" class="btn btn-danger btn-xs btn-block" onclick="hapusData(`+item.nip+`);" style="width: 80px"> <i class="fa fa-times"></i> Hapus </button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            </div>
                        </div>
                      `;
                      $("#ajaxResult").html(div);
                      $('html,body').animate({scrollTop: $('input').offset().top}, 500, function() {
                        $('#ajaxResult').focus();
                      });

                      // console.log(div);
                    }

                }else{
                    var div = `
                    <div class="panel panel-headline" align="center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Data Tidak Ditemukan</h4>
                        </div>
                    </div>
                `;
                $("#ajaxResult").html(div);
                }
            }
        });
});
</script>
