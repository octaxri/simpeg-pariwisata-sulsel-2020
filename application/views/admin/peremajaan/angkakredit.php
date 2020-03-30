<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <!--<div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Verifikasi Data Angka Kredit</h3>
            </div>
            <div class="panel-body">
                <table id="tbl_riwayat_angkakredit" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama Pegawai</th>
                            <th> No. SK </th>
                            <th> Tanggal SK</th>
                            <th> Kredit Utama</th>
                            <th> Kredit Penunjang</th>
                            <th> Total Kredit </th>
                            <th> Jabatan</th>
                            <th> Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_angkakredit_notverified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_angkakredit_notverified as $riwayat_angkakredit_notverified): ?>
                                <tr class="data-itemriwayatangkakredit" data-id="<?=$riwayat_angkakredit_notverified->id_riwayat?>">
                                    <td><?=$i?></td>
                                    <td><?=$riwayat_angkakredit_notverified->nip?></td>
                                    <td><?=$riwayat_angkakredit_notverified->nama_lengkap?></td>
                                    <td><?=$riwayat_angkakredit_notverified->no_sk?></td>
                                    <td><?=$riwayat_angkakredit_notverified->tanggal_sk?></td>
                                    <td><?=$riwayat_angkakredit_notverified->kredit_utama?></td>
                                    <td><?=$riwayat_angkakredit_notverified->kredit_penunjang?></td>
                                    <td><?=$riwayat_angkakredit_notverified->kredit_total?></td>
                                    <td><?=$riwayat_angkakredit_notverified->jabatan?></td>
                                    <td align="center">
                                        <a style="" onclick="isVerified('yes', '<?=$riwayat_angkakredit_notverified->id_riwayat?>')" class="btn btn-primary btn-xs"><i class="fa fa-check-circle"></i>Ya</a>
                                        <a style="" onclick="isVerified('no','<?=$riwayat_angkakredit_notverified->id_riwayat?>');" class="btn btn-danger btn-xs"><i class="fa fa-times-circle"></i>Tidak</a>
                                    </td>
                                </tr>
                            <?php $i++; endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Riwayat Angka Kredit </h3>

            </div>
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_angkakredit"><i class="glyphicon glyphicon-plus"></i> Tambah Data Angka Kredit</a>
                <hr>
                <table id="tbl_riwayat_angkakredit" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th rowspan="2"> No.</th>
                            <th rowspan="2"> NIP</th>
                            <th rowspan="2"> Nama</th>
                            <th colspan="2"  class="text-center"> Surat Keputusan</th>
                            <th rowspan="2" style="display: none"> Angka Kredit Pertama</th>
                            <th colspan="2"  class="text-center" style="display: none"> Mulai Penilaian</th>
                            <th colspan="2"  class="text-center" style="display: none"> Selesai Penilaian</th>
                            <th rowspan="2"> Kredit Utama</th>
                            <th rowspan="2"> Kredit Penunjang</th>
                            <th rowspan="2"> Total Kredit </th>
                            <th rowspan="2"> Jabatan</th>
                            <th rowspan="2"> Admin</th>
                            <th rowspan="2"> </th>
                        </tr>
                        <tr>
                            <th> Nomor </th>
                            <th> Tanggal </th>
                            <th style="display: none"> Bulan </th>
                            <th style="display: none"> Tahun </th>
                            <th style="display: none"> Bulan </th>
                            <th style="display: none"> Tahun </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_angkakredit_verified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_angkakredit_verified as $riwayat_angkakredit_verified): ?>
                                <tr class="data-itemriwayatangkakredit" data-id="<?=$riwayat_angkakredit_verified->id_riwayat?>">
                                    <td><?=$i?></td>
                                    <td><?=$riwayat_angkakredit_verified->nip?></td>
                                    <td><?=$riwayat_angkakredit_verified->nama_lengkap?></td>
                                    <td><?=$riwayat_angkakredit_verified->no_sk?></td>
                                    <td><?=$riwayat_angkakredit_verified->tanggal_sk?></td>
                                    <td style="display: none"><?=$riwayat_angkakredit_verified->pertama_angkakredit?></td>
                                    <td style="display: none"><?=$riwayat_angkakredit_verified->bulan_mulai?></td>
                                    <td style="display: none"><?=$riwayat_angkakredit_verified->tahun_mulai?></td>
                                    <td style="display: none"><?=$riwayat_angkakredit_verified->bulan_selesai?></td>
                                    <td style="display: none"><?=$riwayat_angkakredit_verified->tahun_selesai?></td>
                                    <td><?=$riwayat_angkakredit_verified->kredit_utama?></td>
                                    <td><?=$riwayat_angkakredit_verified->kredit_penunjang?></td>
                                    <td><?=$riwayat_angkakredit_verified->kredit_total?></td>
                                    <td><?=$riwayat_angkakredit_verified->jabatan?></td>
                                    <td><?=$riwayat_angkakredit_verified->admin?></td>
                                    <td style="width: 1px">
                                        <a data-toggle="modal" data-target="#edit_angkakredit" onclick="editData('angkakredit',<?=$riwayat_angkakredit_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        <a  onclick="hapusRiwayat('angkakredit',<?=$riwayat_angkakredit_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                    </td>
                                </tr>
                            <?php $i++; endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- END PANEL DEFAULT -->
    </div>
</div>

<!-- Tambah Angka Kredit -->
<div id="tambah_angkakredit" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Angka Kredit</h4>
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
                        <label  class="col-sm-3 control-label">Nomor SK PAK</label>
                        <div class="col-sm-9">
                            <input id="no_sk_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK PAK</label>
                        <div class="col-sm-4">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_sk_angkakredit" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label class="fancy-checkbox custom-bgcolor-blue">
                                <input id="pertama_angkakredit" type="checkbox">
                                <span class="text-muted">Angka Kredit Pertama</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="bulan_mulai_angkakredit" class="form-control select-2">
                                <option value=""></option>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tahun_mulai_angkakredit" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
<!--                            <input id="tahun_mulai_angkakredit" type="text" class="form-control onlyYears" >-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="bulan_selesai_angkakredit" class="form-control select-2">
                                <option value=""></option>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="tahun_selesai_angkakredit" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
<!--                            <input id="tahun_selesai_angkakredit" type="text" class="form-control onlyYears" >-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Utama Baru</label>
                        <div class="col-sm-9">
                            <input id="ku_baru_angkakredit" type="number"  value="0" placeholder="0" step="0.01" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Penunjang Baru</label>
                        <div class="col-sm-9">
                            <input id="kp_baru_angkakredit" type="number" value="0" placeholder="0" step="0.01" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Total Kredit Baru</label>
                        <div class="col-sm-9">
                            <input id="total_baru_angkakredit" type="number" class="form-control" value="0" step="0.01" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jabatan (Diambil Dari Riwayat Jabatan)</label>
                        <div class="col-sm-9">
                            <input type="hidden" id="nama_jabatan_angkakredit" class="form-control" >
                            <select id="id_jabatan_angkakredit" class="form-control select-2" disabled>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_angkakredit','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Angka Kredit -->
<div id="edit_angkakredit" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Angka Kredit</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
<!--                       <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>-->
                      <div class="col-sm-9">
<!--                         <select id="edit_select2" class="form-control select2"  style="width: 100%"></select>-->
                        <input type="hidden" id="edit_nama_lengkap" class="form-control" >
                        <input type="hidden" id="edit_nip" class="form-control" >
                        <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK PAK</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_angkakredit" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK PAK</label>
                        <div class="col-sm-4">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_sk_angkakredit" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label class="fancy-checkbox custom-bgcolor-blue">
                            <input type="checkbox" id="edit_pertama_angkakredit">
                                <span class="text-muted">Angka Kredit Pertama</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="edit_bulan_mulai_angkakredit" class="form-control select-2">
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Mulai Penilaian</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tahun_mulai_angkakredit" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
<!--                            <input id="edit_tahun_mulai_angkakredit" type="text" class="form-control onlyYears" >-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Bulan Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <select id="edit_bulan_selesai_angkakredit" class="form-control select-2" >
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun Selesai Penilaian</label>
                        <div class="col-sm-9">
                            <div class="input-group date onlyYears" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" id="edit_tahun_selesai_angkakredit" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
<!--                            <input id="edit_tahun_selesai_angkakredit" type="text" class="form-control onlyYears" >-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Utama Baru</label>
                        <div class="col-sm-9">
                            <input id="edit_ku_baru_angkakredit" type="number"  value="0" placeholder="0" step="0.01" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kredit Penunjang Baru</label>
                        <div class="col-sm-9">
                            <input id="edit_kp_baru_angkakredit" type="number" value="0" placeholder="0" step="0.01" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Total Kredit Baru</label>
                        <div class="col-sm-9">
                            <input id="edit_total_baru_angkakredit" type="number" class="form-control" value="0" step="0.01" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
<!--                        <label  class="col-sm-3 control-label">Jabatan</label>-->
                        <div class="col-sm-9">
                            <input id="edit_nama_jabatan_angkakredit" type="hidden" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_angkakredit');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Cari Data Riwayat Jabatan -->
<!-- Modal content-->
<!--<div id="cari_data_angkakredit" class="modal fade " role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Cari Data Riwayat Jabatan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <table style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable dataTable no-footer">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jabatan </th>
                                <th>Instansi</th>
                                <th>TMT Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>a</td>
                                <td>Ani</td>
                                <td> 29 Juli 1995</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_unor','');"><i class="glyphicon glyphicon-plus"></i>  OK</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->

<script>
    var idGlob;
    var valGlob;

    function addData_send(tipe, jenis_diklat) {
        switch (tipe) {
            case 'riwayat_angkakredit':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
                data: {
                    nip: $('#nip').val(),
                    nama_lengkap: $('#nama_lengkap').val(),
                    no_sk_angkakredit: $('#no_sk_angkakredit').val(),
                    tanggal_sk_angkakredit: $('#tanggal_sk_angkakredit').val(),
                    pertama_angkakredit: $("#pertama_angkakredit").is(':checked'),
                    bulan_mulai_angkakredit: $('#bulan_mulai_angkakredit').val(),
                    bulan_selesai_angkakredit: $('#bulan_selesai_angkakredit').val(),
                    tahun_mulai_angkakredit: $('#tahun_mulai_angkakredit').val(),
                    tahun_selesai_angkakredit: $('#tahun_selesai_angkakredit').val(),
                    ku_baru_angkakredit: $('#ku_baru_angkakredit').val(),
                    kp_baru_angkakredit: $('#kp_baru_angkakredit').val(),
                    total_baru_angkakredit: $('#total_baru_angkakredit').val(),
                    id_jabatan_angkakredit: $('#id_jabatan_angkakredit').val(),
                    nama_jabatan_angkakredit: $('#nama_jabatan_angkakredit').val(),
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
            case 'riwayat_angkakredit':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    // nip: $('#edit_nip').val(),
                    // nama_lengkap: $('#edit_nama_lengkap').val(),
                    no_sk_angkakredit: $('#edit_no_sk_angkakredit').val(),
                    tanggal_sk_angkakredit: $('#edit_tanggal_sk_angkakredit').val(),
                    pertama_angkakredit: $("#edit_pertama_angkakredit").is(':checked'),
                    bulan_mulai_angkakredit: $('#edit_bulan_mulai_angkakredit').val(),
                    bulan_selesai_angkakredit: $('#edit_bulan_selesai_angkakredit').val(),
                    tahun_mulai_angkakredit: $('#edit_tahun_mulai_angkakredit').val(),
                    tahun_selesai_angkakredit: $('#edit_tahun_selesai_angkakredit').val(),
                    ku_baru_angkakredit: $('#edit_ku_baru_angkakredit').val(),
                    kp_baru_angkakredit: $('#edit_kp_baru_angkakredit').val(),
                    total_baru_angkakredit: $('#edit_total_baru_angkakredit').val(),
                    // jenis_angkakredit: $('#edit_jenis_angkakredit').val(),
                    // kedudukan_hukum: $('#edit_kedudukan_angkakredit').val(),
                    // no_sk: $('#edit_no_sk_angkakredit').val(),
                    admin: $('#edit_admin').val()
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
            case 'angkakredit':
            $('#edit_nip').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(1)").text()).trigger('change');
            $('#edit_nama_lengkap').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(2)").text()).trigger('change');
            $('#edit_no_sk_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
            $('#edit_tanggal_sk_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(4)").text()).trigger('change');
                if ($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(5)").text() == "1") {
                    $('#edit_pertama_angkakredit').prop("checked", true);
                } else {
                    $('#edit_pertama_angkakredit').prop("checked", false);
                }
            $('#edit_bulan_mulai_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(6)").text()).trigger('change');
            $('#edit_tahun_mulai_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(7)").text()).trigger('change');
            $('#edit_bulan_selesai_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(8)").text()).trigger('change');
            $('#edit_tahun_selesai_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(9)").text()).trigger('change');
            $('#edit_ku_baru_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(10)").text());
            $('#edit_kp_baru_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(11)").text());
            $('#edit_total_baru_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(12)").text());
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
    function formatResultSelection (data) {
        if (data.gambar == null) 
            {data.gambar = 'no_image.jpg';
    }
    var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
    '<span>'+ data.text+'</span>';
    return markup;
}


$('#ku_baru_angkakredit').keyup(function(){
    $('#total_baru_angkakredit').val(parseFloat($('#ku_baru_angkakredit').val()) + parseFloat($('#kp_baru_angkakredit').val()));
});
$('#kp_baru_angkakredit').keyup(function(){
    $('#total_baru_angkakredit').val((parseFloat($('#ku_baru_angkakredit').val()) + parseFloat($('#kp_baru_angkakredit').val())).toFixed(2));
});

    $('#add_select2').on('change', function(){
        $('#add_select2').prop("disabled", true);

    });

    $('#tambah_angkakredit').on('hidden.bs.modal', function () {
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
                        gambar: item.gambar
                    }
                })
            };
        },
        cache: true},
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
        placeholder: 'Pilih Pegawai',
        templateResult: formatResult,
        templateSelection: formatResultSelection,
        minimumInputLength: 1
        });

$("#add_select2").on("select2:select", function (e) {
    $("#nama_lengkap").val($("#add_select2").text());
    $("#nip").val($("#add_select2").val());
    $("#id_jabatan_angkakredit").attr('disabled', false);
    $('#id_jabatan_angkakredit').select2({
        placeholder: "-Pilih-",
        ajax: {
            url: "<?=admin_url('PeremajaanData/getRiwayatJabatan')?>",
            type: "POST",
            data: {
                nip: $('#nip').val()
            },
            processResults: function (data) {
                return {
                    results: $.map(data.data, function (item) {
                        return {
                            text: item.jabatan,
                            id: item.id
                        }
                    })
                };
            }
        }
    });
    
});

$("#id_jabatan_angkakredit").on("select2:select", function (e) {
        $('#nama_jabatan_angkakredit').val($('#id_jabatan_angkakredit').text());
});

    $('#edit_ku_baru_angkakredit').keyup(function(){
        $('#edit_total_baru_angkakredit').val(parseFloat($('#edit_ku_baru_angkakredit').val()) + parseFloat($('#edit_kp_baru_angkakredit').val()));
    });
    $('#edit_kp_baru_angkakredit').keyup(function(){
        $('#edit_total_baru_angkakredit').val((parseFloat($('#edit_ku_baru_angkakredit').val()) + parseFloat($('#edit_kp_baru_angkakredit').val())).toFixed(2));
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
                        gambar: item.gambar
                    }
                })
            };
        },
        cache: true
    },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResult,
templateSelection: formatResultSelection,
minimumInputLength: 1
});
$("#edit_select2").on("select2:select", function (e) {
    $("#edit_nama_lengkap").val($("#edit_select2").text());
    $("#edit_nip").val($("#edit_select2").val());
    $('#edit_nama_jabatan_angkakredit').select2({
        placeholder: "-Pilih-",
        ajax: {
            url: "<?=admin_url('PeremajaanData/getRiwayatJabatan')?>",
            type: "POST",
            data: {
                nip: $('#edit_nip').val()
            },
            processResults: function (data) {
                return {
                    results: $.map(data.data, function (item) {
                        return {
                            text: item.jabatan,
                            id: item.id
                        }
                    })
                };
            }
        }
    });
});


</script>
