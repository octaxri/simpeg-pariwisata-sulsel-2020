<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Verikasi Data Angka Kredit</h3>
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
                            <th> Jabatan</th>                        </tr>
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
                                </tr>
                                <?php $i++; endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Riwayat Angka Kredit </h3>

                </div>
                <div class="panel-body">
                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_angkakredit"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    <hr>
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
                                <th> Admin</th>
                                <th> </th>
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
                                    <td><?=$riwayat_angkakredit_verified->kredit_utama?></td>
                                    <td><?=$riwayat_angkakredit_verified->kredit_penunjang?></td>
                                    <td><?=$riwayat_angkakredit_verified->kredit_total?></td>
                                    <td><?=$riwayat_angkakredit_verified->jabatan?></td>
                                    <td><?=$riwayat_angkakredit_verified->admin?></td>
                                    <td align="center">
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
                            <input type="hidden" id="sub_instansi" class="form-control" >
                            <input type="hidden" id="admin" value="<?=$this->session->fullname?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">No. SK PAK</label>
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
                            <input id="tahun_mulai_angkakredit" type="text" class="form-control onlyYears" >
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
                            <input id="tahun_selesai_angkakredit" type="text" class="form-control onlyYears" >
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
                      <!-- <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label> -->
                      <div class="col-sm-9">
                        <!-- <select id="add_select2" class="form-control select2"  style="width: 100%"></select> -->
                        <input type="hidden" id="edit_nama_lengkap" class="form-control" >
                        <input type="hidden" id="edit_nip" class="form-control" >
                        <input type="hidden" id="edit_sub_instansi" class="form-control" >
                        <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">No. SK PAK</label>
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
                        <input type="checkbox" id="edit_pertama_angkakredit" class=""> &nbsp;Angka Kredit Pertama
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
                        <input id="edit_tahun_mulai_angkakredit" type="text" class="form-control" >
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
                        <input id="edit_tahun_selesai_angkakredit" type="text" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Kredit Utama Baru</label>
                    <div class="col-sm-9">
                        <input id="edit_ku_baru_angkakredit" type="text" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Kredit Penunjang Baru</label>
                    <div class="col-sm-9">
                        <input id="edit_kp_baru_angkakredit" type="text" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Total Kredit Baru</label>
                    <div class="col-sm-9">
                        <input id="edit_total_baru_angkakredit" type="text" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                        <input id="edit_jabatan_angkakredit" type="text" class="form-control" >
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
<div id="cari_data_angkakredit" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
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
                            <a  class="btn btn-success" onclick="profilAjax_send(<?=$data_pegawai->nip?>,'riwayat_unor','');"><i class="glyphicon glyphicon-plus"></i>  OK</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    var idGlob;
    var valGlob;

    function addData_send(tipe, jenis_diklat) {
        switch (tipe) {
            case 'riwayat_angkakredit':
            $.ajax({
                type: 'POST',
                url: '<?=skpd_url('PeremajaanData/addData/')?>'+tipe,
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
                    sub_instansi: $('#sub_instansi').val(),
                    admin: $('#admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat Angka Kredit berhasil ditambah.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat Angka Kredit gagal ditambah.', 'error');
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
                url: '<?=skpd_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    jenis_angkakredit: $('#edit_jenis_angkakredit').val(),
                    kedudukan_hukum: $('#edit_kedudukan_angkakredit').val(),
                    no_sk: $('#edit_no_sk_angkakredit').val(),
                    tanggal_sk: $('#edit_tanggal_sk_angkakredit').val(),
                    sub_instansi: $('#edit_sub_instansi').val(),
                    admin: $('#edit_admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat Angka Kredit berhasil diperbaharui.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat Angka Kredit gagal diperbaharui.', 'error');
                }
            });
            break;
            default:
        }
    }

    function editData(model,id){
        switch (model) {
            case 'angkakredit':
            $('#edit_jenis_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
            $('#edit_kedudukan_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(4)").text()).trigger('change');
            $('#edit_no_sk_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_tanggal_sk_angkakredit').val($(".data-itemriwayatangkakredit[data-id='" + id + "']>td:eq(6)").text());
            idGlob = id;
            break;
            default:

        }
    }

    function hapusRiwayat(method,id) {
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
                    url: '<?=skpd_url('PeremajaanData/hapusRiwayat/')?>'+method+'/'+id
                }).done(function(response) {
                    if (response.success) {
                        setTimeout(function() { location.reload() },1500);
                        swal('Sukses', 'Data Riwayat berhasil dihapus.', 'success');
                    } else swal('Gagal', 'Data Riwayat Gagal dihapus.', 'error');
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
        {
            data.gambar = 'no_image.jpg';
        }
        $("#sub_instansi").val(data.satuan_kerja);
        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }
    function formatResultSelectionEdit (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#edit_sub_instansi").val(data.satuan_kerja);
        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    $("#add_select2").select2({
        ajax: {
            url: "<?=skpd_url('PeremajaanData/getDataPegawaiAjax/')?>",
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
                            satuan_kerja: item.satuan_kerja
                        }
                    })
                };
            },
            cache: true},
            escapeMarkup: function (markup) { return markup; }, work,
            placeholder: 'Pilih Pegawai',
            templateResult: formatResult,
            templateSelection: formatResultSelectionAdd,
            minimumInputLength: 1
        });

    $("#add_select2").on("select2:select", function (e) {
        $("#nama_lengkap").val($("#add_select2").text());
        $("#nip").val($("#add_select2").val());
        $("#id_jabatan_angkakredit").attr('disabled', false);
        $('#id_jabatan_angkakredit').select2({
            placeholder: "-Pilih-",
            ajax: {
                url: "<?=skpd_url('PeremajaanData/getRiwayatJabatan')?>",
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
    $("#edit_select2").select2({
        ajax: {
            url: "<?=skpd_url('PeremajaanData/getDataPegawaiAjax/')?>",
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
                            satuan_kerja: item.satuan_kerja
                        }
                    })
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) { return markup; }, 
        placeholder: 'Pilih Pegawai',
        templateResult: formatResult,
        templateSelection: formatResultSelectionEdit,
        minimumInputLength: 1
    });
    
    $("#edit_select2").on("select2:select", function (e) {
        $("#edit_namalengkap").val($("#edit_select2").text());
        $("#edit_nip").val($("#edit_select2").val());
        $('#edit_jabatan_angkakredit').select2({
            placeholder: "-Pilih-",
            ajax: {
                url: "<?=skpd_url('PeremajaanData/getRiwayatJabatan')?>",
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

    $('#ku_baru_angkakredit').keyup(function(){
        $('#total_baru_angkakredit').val(parseFloat($('#ku_baru_angkakredit').val()) + parseFloat($('#kp_baru_angkakredit').val()));
    });
    $('#kp_baru_angkakredit').keyup(function(){
        $('#total_baru_angkakredit').val((parseFloat($('#ku_baru_angkakredit').val()) + parseFloat($('#kp_baru_angkakredit').val())).toFixed(2));
    });


</script>
