<div class="row">
  <div class="col-md-12">
    <!-- PANEL DEFAULT -->
    <!--<div class="panel">
      <div class="panel-heading panel-danger">
        <h3 class="panel-title font-white">Verifikasi Data PNS</h3>
      </div>
      <div class="panel-body">
       <table style="min-width:100% !important;" id="tbl_riwayat_kepegawaian_pns" class="display table table-bordered table-sorting datatable-Exnormal no-footer" role="grid">
          <thead>
            <tr class="data-item" data-id="">
              <th  rowspan="2" >No.</th>
              <th  rowspan="2" >NIP </th>
              <th  rowspan="2" >Nama </th>
              <th  rowspan="2" >Pejabat Pengambil Sumpah</th>
              <th colspan="2" class="text-center">Surat Keputusan</th>
              <th rowspan="2" >Pangkat/Golongan/Ruang</th>
              <th rowspan="2" > TMT</th>
              <th colspan="3" class="text-center">Lokasi Kerja</th>
              <th rowspan="2" width="98px;">Sumpah/Janji</th>
              <th rowspan="2">Pengambil Sumpah</th>
              <th colspan="2" class="text-center">Berita Acara</th>
              <th rowspan="2">Verifikasi</th>
            </tr>
            <tr class="data-item" data-id="">
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Instansi Induk</th>
              <th>Unor Induk</th>
              <th>Unor</th>
              <th>Nomor</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody >
            <?php if ($riwayat_pns_notverified != NULL): ?>
              <?php $i = 1; foreach ($riwayat_pns_notverified as $riwayat_pns_notverified): ?>
              <tr class="data-item" data-id="">
                <td><?=$i?></td>
                <td data-nip='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->nip?></td>
                <td data-namalengkap='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->nama_lengkap?></td>
                <td data-pejabat='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->pejabat?></td>
                <td data-nosk='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->no_sk?></td>
                <td data-tanggalsk='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->tanggal_sk?></td>
                <td data-pangkat='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->pangkat?></td>
                <td data-tanggaltmt='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->tanggal_tmt?></td>
                <td data-instansi='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->instansi?></td>
                <td data-subinstansi='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->sub_instansi?></td>
                <td data-unker='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->unit_kerja?></td>
                <td data-sumpah='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->sumpah?></td>
                <td data-pengambilsumpah='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->pengambil_sumpah?></td>
                <td data-noberita='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->no_berita?></td>
                <td data-tanggalberita='<?=$riwayat_pns_notverified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_notverified->tanggal_berita?></td>
                <td align="center" >
                  <a style="" onclick="isVerified('yes', '<?=$riwayat_pns_notverified->id_riwayat?>')" class="btn btn-success btn-xs"><i class="fa fa-check-circle"></i>Ya</a>
                  <a style="" onclick="isVerified('no','<?=$riwayat_pns_notverified->id_riwayat?>');" class="btn btn-danger btn-xs"><i class="fa fa-times-circle"></i>Tidak</a>
                </td>
              </tr>
              <?php $i++; endforeach ?>
            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>-->
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Riwayat Kepegawaian PNS</h3>
      </div>
      <div class="panel-body">
          <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_kepegawaian"><i class="glyphicon glyphicon-plus"></i> Tambah Data Kepegawaian PNS</a>
          <hr>
        <table style="min-width:100% !important;" id="tbl_riwayat_kepegawaian_pns" class="display table table-bordered table-sorting datatable-Exnormal no-footer" role="grid">
          <thead>
            <tr class="data-item" data-id="">
              <th  rowspan="2" >No.</th>
              <th  rowspan="2" >NIP </th>
              <th  rowspan="2" >Nama </th>
              <th colspan="3" class="text-center">Surat Keputusan</th>
              <th rowspan="2" >Pangkat/Golongan/Ruang</th>
              <th rowspan="2" > TMT</th>
              <th colspan="3" class="text-center">Lokasi Kerja</th>
              <th rowspan="2" width="98px;">Sumpah/Janji PNS</th>
              <th rowspan="2">Pengambil Sumpah</th>
              <th colspan="2" class="text-center">Berita Acara</th>
              <th rowspan ="2" >Admin</th>
              <th rowspan="2"></th>
            </tr>
            <tr class="data-item" data-id="">
              <th>Pejabat Yang Menetapkan</th>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Instansi Induk</th>
              <th>Bidang/Bagian</th>
              <th>Subbidang/Seksi</th>
              <th>Nomor</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody >
            <?php if ($riwayat_pns_verified != NULL): ?>
              <?php $i = 1; foreach ($riwayat_pns_verified as $riwayat_pns_verified): ?>
              <tr class="data-item" data-id="">
                <td><?=$i?></td>
                <td data-nip='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->nip?></td>
                <td data-namalengkap='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->nama_lengkap?></td>
                <td data-pejabat='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->pejabat?></td>
                <td data-nosk='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->no_sk?></td>
                <td data-tanggalsk='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->tanggal_sk?></td>
                <td data-pangkat='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->pangkat?></td>
                <td data-tanggaltmt='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->tanggal_tmt?></td>
                <td data-instansi='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->instansi?></td>
                <td data-subinstansi='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->sub_instansi?></td>
                <td data-unker='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->unit_kerja?></td>
                <td data-sumpah='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->sumpah?></td>
                <td data-pengambilsumpah='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->pengambil_sumpah?></td>
                <td data-noberita='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->no_berita?></td>
                <td data-tanggalberita='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->tanggal_berita?></td>
                 <td data-admin='<?=$riwayat_pns_verified->id_riwayat?>' style="font-size: 0.8em;"><?=$riwayat_pns_verified->admin?></td>
                <td style="width: 1px">
                  <a style="" onclick="editData('pns', '<?=$riwayat_pns_verified->id_riwayat?>')" data-toggle="modal" data-target="#edit_kepegawaian" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit</a>
                  <a style="" onclick="hapusRiwayat('pegawai_pns','<?=$riwayat_pns_verified->id_riwayat?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
              <?php $i++; endforeach ?>
            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- END PANEL DEFAULT -->
  </div>
</div>

<div id="tambah_kepegawaian" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg"><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Data Kepegawaian PNS</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
            <div class="col-sm-9">
              <select id="add_select2" class="form-control select2"  style="width: 100%"></select>
              <input type="hidden" id="nama_lengkap" class="form-control" >
              <input type="hidden" id="nip" class="form-control" >
              <input type="hidden" id="admin" value="<?=$this->session->fullname?>" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Status Kepegawaian</label>
            <div class="col-sm-9">
              <select id="nama_statuskepegawaian" class="select2 form-control" required disabled>
                <option value=""></option>
                <option value="pns" selected>PNS</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Pejabat Yang Menetapkan</label>
            <div class="col-sm-9">
              <input type="text" id="nama_pejabat_kepegawaian" class="form-control"  required>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Nomor SK</label>
            <div class="col-sm-9">
              <input type="text" id="no_sk_kepegawaian" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tanggal SK</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                <input type="text" id="tanggal_sk_kepegawaian" class="form-control" required>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Pangkat/Golongan/Ruang</label>
            <div class="col-sm-9">
               <select id="pangkat_kepegawaian" class="form-control select-2" required>
                <option value="">-Pangkat/Golongan/Ruang-</option>
                <?php foreach ($data_golongan as $data_golongan1): ?>
                  <option data-id="<?=$data_golongan1->id_golongan?>" value="<?=$data_golongan1->nama_pangkat. ' - ' .$data_golongan1->nama_golongan. ' ' .$data_golongan1->nama_ruang?>"><?=$data_golongan1->nama_pangkat. ' - ' .$data_golongan1->nama_golongan. ' ' .$data_golongan1->nama_ruang?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">TMT</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                <input type="text" id="tmt_kepegawaian" class="form-control" required>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <hr>
            <div class="alert alert-info" style="text-transform: uppercase;"> Lokasi Kerja</div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Instansi Induk</label>
            <div class="col-sm-9">
              <textarea style="resize: none; text-transform: uppercase;" id="instansi_kepegawaian" class="form-control" required>Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</textarea>
              <p class="small"><i>Semuanya dengan Huruf Kapital</i></p>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Bidang/Bagian</label>
            <div class="col-sm-9">
              <select id="sub_kepegawaian" class="form-control select-2" required>
                <option value=""></option>
                <?php foreach ($data_satker as $data_satker1): ?>
                  <option value="<?=$data_satker1->nama_satker?>"><?=$data_satker1->nama_satker?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Subbidang/Seksi</label>
            <div class="col-sm-9">
               <select name="unit_kerja" id="unit_kerja_kepegawaian" class="form-control select-2" >
                 <option value="">-Subbidang/Seksi-</option>
                 <?php foreach ($data_unit as $data_unit1): ?>
                    <option value="<?=$data_unit1->nama_unit?>"><?=$data_unit1->nama_unit?></option>
                  <?php endforeach ?>
              </select>

            </div>
          </div>
          <div id="pns_berita">
              <div class="col-md-12">
                  <hr>
                  <div class="alert alert-info" style="text-transform: uppercase;"> Sumpah Jabatan</div>
              </div>
              <div class="form-group">
                  <label for="bahan" class="col-sm-3 control-label">Sumpah/Janji PNS</label>
                  <div class="col-sm-9">
                      <label class="fancy-radio">
                          <input id="" name="sumpah_kepegawaian" value="Sudah"  class="form-control" type="radio"  required>
                          <span><i></i>Sudah</span>
                      </label>
                      <label class="fancy-radio">
                          <input id="" name="sumpah_kepegawaian" value="Belum"  class="form-control" type="radio" required>
                          <span><i></i>Belum</span>
                      </label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="bahan" class="col-sm-3 control-label">Pengambil Sumpah</label>
                  <div class="col-sm-9">
                      <input type="text" id="pejabat_sumpah_kepegawaian" class="form-control" >
                  </div>
              </div>
              <div class="col-md-12">
                  <hr>
                  <div class="alert alert-info" style="text-transform: uppercase;"> Berita Acara</div>
              </div>
              <div class="form-group">
                  <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                  <div class="col-sm-9">
                      <input type="text" id="nomor_berita_acara_kepegawaian" class="form-control" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="bahan"  class="col-sm-3 control-label">Tanggal</label>
                  <div class="col-sm-9">
                      <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                          <input type="text" id="tanggal_berita_acara_kepegawaian" class="form-control">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_kepegawaian','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Kepegawaian  -->
<div id="edit_kepegawaian" class="modal fade " role="dialog">
  <div class="modal-dialog  modal-lg"><!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Edit Data Kepegawaian PNS</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <!-- <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label> -->
            <div class="col-sm-9">
              <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
              <input type="hidden" id="edit_nama_lengkap" class="form-control" >
              <input type="hidden" id="edit_nip" class="form-control" >
              <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Status Kepegawaian</label>
            <div class="col-sm-9">
              <select id="edit_nama_statuskepegawaian" class="select2 form-control" required disabled>
                <option value=""></option>
                <option value="pns" selected>PNS</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Pejabat Yang Menetapkan</label>
            <div class="col-sm-9">
              <input type="text" id="edit_nama_pejabat_kepegawaian" class="form-control"  required>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Nomor SK</label>
            <div class="col-sm-9">
              <input type="text" id="edit_no_sk_kepegawaian" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Tanggal SK</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                <input type="text" id="edit_tanggal_sk_kepegawaian" class="form-control" required>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">Pangkat/Golongan/Ruang</label>
            <div class="col-sm-9">
             <select id="edit_pangkat_kepegawaian" class="form-control select-2" required>
                <option value="">-Pangkat/Golongan/Ruang-</option>
                <?php foreach ($data_golongan as $data_golongan2): ?>
                  <option data-id="<?=$data_golongan2->id_golongan?>" value="<?=$data_golongan2->nama_pangkat. ' - ' .$data_golongan2->nama_golongan. ' ' .$data_golongan2->nama_ruang?>"  ><?=$data_golongan2->nama_pangkat. ' - ' .$data_golongan2->nama_golongan. ' ' .$data_golongan2->nama_ruang?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan"  class="col-sm-3 control-label">TMT</label>
            <div class="col-sm-9">
              <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                <input type="text" id="edit_tmt_kepegawaian" class="form-control" required>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <hr>
            <div class="alert alert-info" style="text-transform: uppercase;"> Lokasi Kerja</div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Instansi Induk</label>
            <div class="col-sm-9">
              <textarea style="resize: none; text-transform: uppercase;" id="edit_instansi_kepegawaian" class="form-control" required>Dinas Kebudayaan dan Kepariwisataan Provinsi Sulawesi Selatan</textarea>
              <p class="small"><i>Semuanya dengan Huruf Kapital</i></p>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Bidang/Bagian</label>
            <div class="col-sm-9">
              <select id="edit_sub_kepegawaian" class="form-control select-2" required>
                <option value=""></option>
                <?php foreach ($data_satker as $data_satker2): ?>
                  <option value="<?=$data_satker2->nama_satker?>"><?=$data_satker2->nama_satker?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="bahan" class="col-sm-3 control-label">Subbidang/Seksi</label>
            <div class="col-sm-9">
              <select name="unit_kerja" id="edit_unit_kerja_kepegawaian" class="form-control select-2" required>
               <option value="">-Subbidang/Seksi-</option>
               <?php foreach ($data_unit as $data_unit2): ?>
                  <option value="<?=$data_unit2->nama_unit?>"><?=$data_unit2->nama_unit?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div id="edit_pns_berita" >
              <div class="col-md-12">
                  <hr>
                  <div class="alert alert-info" style="text-transform: uppercase;">Sumpah Jabatan</div>
              </div>
              <div class="form-group">
                  <label for="bahan" class="col-sm-3 control-label">Sumpah/Janji PNS</label>
                  <div class="col-sm-9">
                      <label class="fancy-radio">
                          <input id="edit_sumpah_kepegawaian1" name="edit_sumpah_kepegawaian" value="Sudah"  class="form-control" type="radio"  required>
                          <span><i></i>Sudah</span>
                      </label>
                      <label class="fancy-radio">
                          <input id="edit_sumpah_kepegawaian0" name="edit_sumpah_kepegawaian" value="Belum"  class="form-control" type="radio"  required>
                          <span><i></i>Belum</span>
                      </label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="bahan" class="col-sm-3 control-label">Pengambil Sumpah</label>
                  <div class="col-sm-9">
                      <input type="text" id="edit_pejabat_sumpah_kepegawaian" class="form-control" >
                  </div>
              </div>
              <div class="col-md-12">
                  <hr>
                  <div class="alert alert-info" style="text-transform: uppercase;"> Berita Acara</div>
              </div>
              <div class="form-group">
                  <label for="bahan" class="col-sm-3 control-label">Nomor</label>
                  <div class="col-sm-9">
                      <input type="text" id="edit_nomor_berita_acara_kepegawaian" class="form-control" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="bahan"  class="col-sm-3 control-label">Tanggal</label>
                  <div class="col-sm-9">
                      <div class="input-group date" data-date-autoclose="true" data-provide="datepicker" required>
                          <input type="text" id="edit_tanggal_berita_acara_kepegawaian" class="form-control">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-group ">
            <div class="col-md-3 col-md-offset-5">
              <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_kepegawaian','');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN -->
  <script>
    var idGlob;
    var valGlob;

    function addData_send(tipe, jenis_diklat) {
      switch (tipe) {
        case 'riwayat_kepegawaian':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
          data: {
            nip: $('#nip').val(),
            nama_lengkap: $('#nama_lengkap').val(),
            nama_statuskepegawaian: $('#nama_statuskepegawaian').val(),
            nama_pejabat: $('#nama_pejabat_kepegawaian').val(),
            no_sk: $('#no_sk_kepegawaian').val(),
            tanggal_sk: $('#tanggal_sk_kepegawaian').val(),
            pangkat: $('#pangkat_kepegawaian').val(),
            tmt: $('#tmt_kepegawaian').val(),
            instansi: $('#instansi_kepegawaian').val(),
            sub: $('#sub_kepegawaian').val(),
            nomor_bkn: $('#nomor_bkn_kepegawaian').val(),
            tanggal_bkn: $('#tanggal_bkn_kepegawaian').val(),
            // sumpah: $('#sumpah_kepegawaian').val(),
            sumpah: $('input[name=sumpah_kepegawaian]:checked').val(),
            pejabat_sumpah: $('#pejabat_sumpah_kepegawaian').val(),
            nomor_berita_acara: $('#nomor_berita_acara_kepegawaian').val(),
            tanggal_berita_acara: $('#tanggal_berita_acara_kepegawaian').val(),
            unit_kerja: $('#unit_kerja_kepegawaian').val(),
            admin: $('#admin').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data berhasil disimpan', 'success');
          } else {
            swal('Gagal', 'Data gagal disimpan', 'error');
          }
        });
        break;
      }
    }

    function editData_send(model){
      switch (model) {
        case 'riwayat_kepegawaian':
        $.ajax({
          type: 'POST',
          url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
          data: {
            nama_statuskepegawaian: $('#edit_nama_statuskepegawaian').val(),
            nama_pejabat: $('#edit_nama_pejabat_kepegawaian').val(),
            no_sk: $('#edit_no_sk_kepegawaian').val(),
            tanggal_sk: $('#edit_tanggal_sk_kepegawaian').val(),
            pangkat: $('#edit_pangkat_kepegawaian').val(),
            tmt: $('#edit_tmt_kepegawaian').val(),
            instansi: $('#edit_instansi_kepegawaian').val(),
            sub: $('#edit_sub_kepegawaian').val(),
            nomor_bkn: $('#edit_nomor_bkn_kepegawaian').val(),
            tanggal_bkn: $('#edit_tanggal_bkn_kepegawaian').val(),
            // sumpah: $('#edit_sumpah_kepegawaian').val(),
            sumpah: $('input[name=edit_sumpah_kepegawaian]:checked').val(),
            pejabat_sumpah: $('#edit_pejabat_sumpah_kepegawaian').val(),
            nomor_berita_acara: $('#edit_nomor_berita_acara_kepegawaian').val(),
            tanggal_berita_acara: $('#edit_tanggal_berita_acara_kepegawaian').val(),
            unit_kerja: $('#edit_unit_kerja_kepegawaian').val(),
            admin : $('#edit_admin').val()
          }
        }).done(function(response) {
          if (response.success) {
            setTimeout(function() { location.reload() },1500);
            swal('Sukses', 'Data berhasil disimpan', 'success');
          } else {
            swal('Gagal', 'Data gagal disimpan', 'error');
          }
        });
        break;
        default:
      }
    }

    function editData(model,id){
      switch (model) {
        case 'pns':
        $('#edit_nip').val($("td[data-nip='"+id+"']").text());
        $('#edit_nama_lengkap').val($("td[data-namalengkap='"+id+"']").text());
        $('#edit_nama_statuskepegawaian').val('pns');
        $('#edit_nama_pejabat_kepegawaian').val($("td[data-pejabat='"+id+"']").text());
        $('#edit_no_sk_kepegawaian').val($("td[data-nosk='"+id+"']").text());
        $('#edit_tanggal_sk_kepegawaian').val($("td[data-tanggalsk='"+id+"']").text());
        $('#edit_pangkat_kepegawaian').val($("td[data-pangkat='"+id+"']").text()).change();
        $('#edit_tmt_kepegawaian').val($("td[data-tanggaltmt='"+id+"']").text());
        $('#edit_instansi_kepegawaian').val($("td[data-instansi='"+id+"']").text());
        $('#edit_sub_kepegawaian').val($("td[data-subinstansi='"+id+"']").text()).change();
        $('#edit_unit_kerja_kepegawaian').val($("td[data-unker='"+id+"']").text()).change();
        if ($("td[data-sumpah='"+id+"']").text() == "Sudah") {
            $('#edit_sumpah_kepegawaian1').prop("checked", true);
            $('#edit_sumpah_kepegawaian0').prop("checked", false);
        } else {
            $('#edit_sumpah_kepegawaian1').prop("checked", false);
            $('#edit_sumpah_kepegawaian0').prop("checked", true);
        }
        // $('#edit_sumpah_kepegawaian').val($("td[data-sumpah='"+id+"']").text()).attr('checked', 'true');

        $('#edit_pejabat_sumpah_kepegawaian').val($("td[data-pengambilsumpah='"+id+"']").text());
        $('#edit_nomor_berita_acara_kepegawaian').val($("td[data-noberita='"+id+"']").text());
        $('#edit_tanggal_berita_acara_kepegawaian').val($("td[data-tanggalberita='"+id+"']").text());
        idGlob = id;
        break;
        default:

      }
    }

    function hapusRiwayat(method,id) {
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
                    url: '<?=admin_url('PeremajaanData/hapusRiwayat/')?>'+method+'/'+id
                }).done(function(response) {
                    if (response.success) {
                        setTimeout(function() { location.reload() },1500);
                        swal('Sukses', 'Data berhasil dihapus', 'success');
                    } else swal('Gagal', 'Data gagal dihapus', 'error');
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

    function formatResult (data) {
      if (!data.id) { return data.text; }
      if (data.gambar == '') {
        data.gambar = 'no_image.jpg';
      }
      var markup = '<img style="margin-right : 10px;" width="25px" height="25px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
      '<span>'+ data.text+'</span>' +
      '<span> (NIP: '+ data.id+') </span>'
      return markup;
    };
    function formatResultSelectionAdd (data) {
      if (data.gambar == null)
        {data.gambar = 'no_image.jpg';
    }
    $("#sub_kepegawaian").val(data.satuan_kerja).change();
    $("#unit_kerja_kepegawaian").val(data.unit_kerja).change();
    $("#pangkat_kepegawaian").val(data.jenis_pangkat).change();
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
  }

  function formatResultSelectionEdit (data) {
      if (data.gambar == null)
        {data.gambar = 'no_image.jpg';
    }

    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
  }

    $('#add_select2').on('change', function(){
        $('#add_select2').prop("disabled", true);

    });

    $('#tambah_kepegawaian').on('hidden.bs.modal', function () {
        location.reload();
    });

  $("#add_select2").select2({
    ajax: {
      url: "<?=admin_url('PeremajaanData/getDataPegawaiAjax/')?>",
      dataType: 'json',
      delay: 250,
      data: function (params) {
        return {
          q: params.term
        };
      },
      processResults: function (data) {
        return {
          results: $.map(data.data_pegawai, function (item) {
            return {
              id: item.nip,
              text: item.nama_lengkap,
              gambar: item.gambar,
              satuan_kerja: item.satuan_kerja,
              unit_kerja: item.unit_kerja,
              jenis_pangkat: item.jenis_pangkat
            }
          })
        };
      },
      cache: true
    },
      escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
      placeholder: 'Pilih Pegawai',
      templateResult: formatResult,
      templateSelection: formatResultSelectionAdd,
      minimumInputLength: 1
    });

  $("#add_select2").on("select2:select", function (e) {
    $("#nama_lengkap").val($("#add_select2").text());
    $("#nip").val($("#add_select2").val());
// $("#add_nip").val($("#add_select2").val());
// console.log($("#add_namalengkap").val());
});

  $("#edit_select2").select2({
    ajax: {
      url: "<?=admin_url('PeremajaanData/getDataPegawaiAjax/')?>",
      dataType: 'json',
      delay: 250,
      data: function (params) {
        return {
          q: params.term
        };
      },
      processResults: function (data) {
        return {
          results: $.map(data.data_pegawai, function (item) {
            return {
              id: item.nip,
              text: item.nama_lengkap,
              gambar: item.gambar,
              satuan_kerja: item.satuan_kerja,
              unit_kerja: item.unit_kerja,
              jenis_pangkat: item.jenis_pangkat
            }
          })
        };
      },
      cache: true
    },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResult,
templateSelection: formatResultSelectionEdit,
minimumInputLength: 1
});
  $("#edit_select2").on("select2:select", function (e) {
    $("#edit_namalengkap").val($("#edit_select2").text());
    $("#edit_nip").val($("#edit_select2").val());
  });

  // var select2Options = { width: 'resolve',
  //       placeholder: "- Pilih -",
  //       triggerChange: true,
  //       allowClear: true};

  // var getUnker = '<?=admin_url('DataPegawai/getUnkerBySatker/')?>'+':parentId:';

  // var cascadLoading = new Select2Cascade($('#sub_kepegawaian'), $('#unit_kerja_kepegawaian'), getUnker, select2Options);
  //     cascadLoading.then( function(parent, child, items) {
  //       // Open the child listbox immediately
  //       // child.select2('open');
  // });

</script>
