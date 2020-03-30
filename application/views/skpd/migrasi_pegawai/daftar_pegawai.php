<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" href="<?=skpd_url('DataPegawai/tambah')?>" type="button"><i class="fa fa-plus"></i>Tambah Data Pegawai</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable-data-export" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIP</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Eselon</th>
                                    <th>Pangkat/Golongan/Ruang</th>
                                    <th>Jabatan</th>
                                    <th>Tgl Lahir</th>
                                    <th>Usia</th>
                                    <th>Subbidang/Seksi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i= 1; foreach ($data_pegawai as $data_pegawai): ?>
                                    <tr data-nip="<?=$data_pegawai->nip?>">
                                        <td><?=$i?></td>
                                        <td><?=$data_pegawai->nama_lengkap?></td>
                                        <td><?=$data_pegawai->nip?></td>
                                        <td><?=$data_pegawai->jenis_kelamin?></td>
                                        <td><?=$data_pegawai->agama?></td>
                                        <td><?=$data_pegawai->eselon?></td>
                                        <td><?=$data_pegawai->jenis_pangkat?></td>
                                        <td><?=$data_pegawai->nama_jabatan?></td>
                                        <td><?=date('d M Y',strtotime($data_pegawai->tanggal_lahir))?></td>
                                        <td>
                                            <?php  
                                                $akhir = new DateTime(date('m/d/Y'));
                                                $awal = new DateTime($data_pegawai->tanggal_lahir);
                                                echo $akhir->diff($awal)->format("%y Thn %m Bln %d Hr")
                                            ?>
                                        </td>
                                        <td><?=$data_pegawai->unit_kerja?></td>
                                        <td align="center">
                                            <a href="<?=skpd_url('DataPegawai/edit/').$data_pegawai->nip?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                            <a class="btn btn-primary btn-sm" onclick="hapusData('<?=$data_pegawai->nip?>');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                        </td>
                                    </tr>
                                <?php $i++; endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- END PANEL DEFAULT -->
    </div>
</div>
<script type="text/javascript">
    function hapusData(nip) {
        swal({
          title: 'Apakah Anda Yakin?',
          text: "Anda tidak dapat mengembalikan data yang telah dihapus",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus',
          cancelButtonText: 'Batalkan',
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm){
          if (isConfirm) {
            $.ajax({
                type: 'POST',
                url: '<?=skpd_url('referensiAjax/hapusData/')?>'+nip
              }).done(function(response) {
                if (response.success) {
                  $("tr[data-nip='"+nip+"']").remove();
                  swal('Sukses', 'Data berhasil dihapus.', 'success');
                } else swal('Gagal', 'Data gagal dihapus.', 'error');
             });
          } else {
            swal(
              'Batal',
              'Proses dibatalkan',
              'error'
            )
          }
        });
    }
</script>