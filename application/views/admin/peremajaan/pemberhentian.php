<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <!--<div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Verifikasi Data Pemberhentian</h3>
            </div>
            <div class="panel-body">
                <table id="tbl_riwayat_pemberhentian" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama Lengkap</th>
                            <th> Jenis Pemberhentian </th>
                            <th> Kedudukan Hukum</th>
                            <th> Nomor SK</th>
                            <th> Tanggal SK</th>
                            <th> Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_pemberhentian_notverified != NULL): ?>
                        <?php $i=1; foreach ($riwayat_pemberhentian_notverified as $riwayat_pemberhentian_notverified): ?>
                            <tr class="data-itemriwayatpemberhentian" data-id="<?=$riwayat_pemberhentian_notverified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_pemberhentian_notverified->nip?></td>
                                <td><?=$riwayat_pemberhentian_notverified->nama_lengkap?></td>
                                <td><?=$riwayat_pemberhentian_notverified->jenis_pemberhentian?></td>
                                <td><?=$riwayat_pemberhentian_notverified->kedudukan_hukum?></td>
                                <td><?=$riwayat_pemberhentian_notverified->no_sk?></td>
                                <td><?=$riwayat_pemberhentian_notverified->tanggal_sk?></td>
                                <td>
                                    <a style="" onclick="isVerified('yes', '<?=$riwayat_pemberhentian_notverified->id_riwayat?>')" class="btn btn-success btn-xs"><i class="fa fa-check-circle"></i>Ya</a>
                                    <a style="" onclick="isVerified('no','<?=$riwayat_pemberhentian_notverified->id_riwayat?>');" class="btn btn-danger btn-xs"><i class="fa fa-times-circle"></i>Tidak</a>
                                   <a data-toggle="modal" data-target="#edit_unor" onclick="editData('unor',<?=$riwayat_unor_notverified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                    <a href="#" onclick="hapusRiwayat('unor',<?=$riwayat_unor_notverified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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
                <h3 class="panel-title">Riwayat Pemberhentian</h3>

            </div>
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_pemberhentian"><i class="glyphicon glyphicon-plus"></i> Tambah Data Pemberhentian</a>
                <hr>
                 <table id="tbl_riwayat_pemberhentian" style="min-width: 100%;" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th rowspan="2"> No.</th>
                            <th rowspan="2"> NIP</th>
                            <th rowspan="2"> Nama</th>
                            <th rowspan="2"> Jenis Pemberhentian </th>
                            <th rowspan="2"> Kedudukan Hukum</th>
                            <th colspan="2" class="text-center"> Surat Keputusan</th>
                            <th rowspan="2"> Admin </th>
                            <th rowspan="2"> </th>
                        </tr>
                        <tr>
                            <th> Nomor</th>
                            <th> Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_pemberhentian_verified != NULL): ?>
                        <?php $i=1; foreach ($riwayat_pemberhentian_verified as $riwayat_pemberhentian_verified): ?>
                            <tr class="data-itemriwayatpemberhentian" data-id="<?=$riwayat_pemberhentian_verified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_pemberhentian_verified->nip?></td>
                                <td><?=$riwayat_pemberhentian_verified->nama_lengkap?></td>
                                <td><?=$riwayat_pemberhentian_verified->jenis_pemberhentian?></td>
                                <td><?=$riwayat_pemberhentian_verified->kedudukan_hukum?></td>
                                <td><?=$riwayat_pemberhentian_verified->no_sk?></td>
                                <td><?=$riwayat_pemberhentian_verified->tanggal_sk?></td>
                                <td><?=$riwayat_pemberhentian_verified->admin ?></td>
                                <td style="width: 1px">
                                    <a data-toggle="modal" data-target="#edit_pemberhentian" onclick="editData('pemberhentian',<?=$riwayat_pemberhentian_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                    <a href="#" onclick="hapusRiwayat('pemberhentian',<?=$riwayat_pemberhentian_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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

<!-- Tambah Pemberhentian -->
<div id="tambah_pemberhentian" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data Pemberhentian</h4>
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
                        <label  class="col-sm-3 control-label">Jenis Pemberhentian</label>
                        <div class="col-sm-9">
                            <select id="jenis_pemberhentian" class="form-control select-2">
                                <option value=""></option>
                                <option value="Pemberhentian Karena BUP">Pemberhentian Karena BUP</option>
                                <option value="Pemberhentian Karena Meninggal Dunia">Pemberhentian Karena Meninggal Dunia</option>
                                <option value="Pemberhentian Karena Permohonan">Pemberhentian Karena Permohonan</option>
                                <option value="Pemberhentian Karena Cacat">Pemberhentian Karena Cacat</option>
                                <option value="Pemberhentian Karena Keuzuran Jasmani">Pemberhentian Karena Keuzuran Jasmani</option>
                                <option value="Pemberhentian Karena Tewas">Pemberhentian Karena Tewas</option>
                                <option value="Pemberhentian Karena Menjadi Anggota Parpol">Pemberhentian Karena Menjadi Anggota Parpol</option>
                                <option value="Pemberhentian Karena Penyederhanaan Organisasi">Pemberhentian Karena Penyederhanaan Organisasi</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji PNS">Pemberhentian Karena Pelanggaran Sumpah/Janji PNS</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan">Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan</option>
                                <option value="Pemberhentian Karena Tindak Pidana">Pemberhentian Karena Tindak Pidana</option>
                                <option value="Pemberhentian Karena Meninggalkan Tugas">Pemberhentian Karena Meninggalkan Tugas</option>
                                <option value="Pemberhentian Karena Dinyatakan Hilang">Pemberhentian Karena Dinyatakan Hilang</option>
                                <option value="Pemberhentian Karena >6 setelah CLTN Tidak Melapor">Pemberhentian Karena >6 setelah CLTN Tidak Melapor</option>
                                <option value="Pemberhentian Karena Kasus TIPIKOR">Pemberhentian Karena Kasus TIPIKOR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kedudukan Hukum</label>
                        <div class="col-sm-9">
                            <select id="kedudukan_pemberhentian" class="form-control select-2">
                                <option value=""></option>
                                <option value="Aktif">Aktif</option>
                                <option value="CLTN">CLTN</option>
                                <option value="Tugas Belajar">Tugas Belajar</option>
                                <option value="Pemberhentian Sementara">Pemberhentian Sementara</option>
                                <option value="Penerimaan Uang Tunggu">Penerimaan Uang Tunggu</option>
                                <option value="Prajurit Wajib">Prajurit Wajib</option>
                                <option value="Pejabat Negara">Pejabat Negara</option>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Sedang dalam Proses Banding BAPEK">Sedang dalam Proses Banding BAPEK</option>
                                <option value="Pegawai Titipan">Pegawai Titipan</option>
                                <option value="Pengungsi">Pengungsi</option>
                                <option value="Perpanjangan CLTN">Perpanjangan CLTN</option>
                                <option value="PNS yang Dinyatakan Hilang">PNS yang Dinyatakan Hilang</option>
                                <option value="PNS yang Kena Hukuman Disiplin">PNS yang Kena Hukuman Disiplin</option>
                                <option value="Pemindahan Dalam Rangka Penurunan Jabatan<">Pemindahan Dalam Rangka Penurunan Jabatan</option>
                                <option value="Masa Persiapan Pensiun">Masa Persiapan Pensiun</option>
                                <option value="CPNS yang Belum Menerima SK CPNS">CPNS yang Belum Menerima SK CPNS</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                                <option value="Diberhentikan">Diberhentikan</option>
                                <option value="Punah">Punah</option>
                                <option value="EKS PNS Timor Timor">EKS PNS Timor Timor</option>
                                <option value="TMS dari Pengadaan">TMS dari Pengadaan</option>
                                <option value="Pembatalan NIP">Pembatalan NIP</option>
                                <option value="Pemberhentian Tanpa Hak Pensiun<">Pemberhentian Tanpa Hak Pensiun</option>
                                <option value="Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun">Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun</option>
                                <option value="Tidak ikut e-PUPNS 2015">Tidak ikut e-PUPNS 2015</option>
                                <option value="Tindak Pidana/Tindak Pidana Jabatan">Tindak Pidana/Tindak Pidana Jabatan</option>
                                <option value="Pemblokiran Data PNS dari Kedeputan Wasdal">Pemblokiran Data PNS dari Kedeputan Wasdal</option>
                                <option value="Mencapai BUP">Mencapai BUP</option>
                                <option value="Pensiun">Pensiun</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input id="no_sk_pemberhentian" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="tanggal_sk_pemberhentian" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_pemberhentian','');" ><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Pemberhentian -->
<div id="edit_pemberhentian" class="modal fade " role="dialog">
    <div class="modal-dialog "><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data Pemberhentian</h4>
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
                        <label  class="col-sm-3 control-label">Jenis Pemberhentian</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_pemberhentian" class="form-control select-2">
                                <option value=""></option>
                                <option value="Pemberhentian Karena BUP">Pemberhentian Karena BUP</option>
                                <option value="Pemberhentian Karena Meninggal Dunia">Pemberhentian Karena Meninggal Dunia</option>
                                <option value="Pemberhentian Karena Permohonan">Pemberhentian Karena Permohonan</option>
                                <option value="Pemberhentian Karena Cacat">Pemberhentian Karena Cacat</option>
                                <option value="Pemberhentian Karena Keuzuran Jasmani">Pemberhentian Karena Keuzuran Jasmani</option>
                                <option value="Pemberhentian Karena Tewas">Pemberhentian Karena Tewas</option>
                                <option value="Pemberhentian Karena Menjadi Anggota Parpol">Pemberhentian Karena Menjadi Anggota Parpol</option>
                                <option value="Pemberhentian Karena Penyederhanaan Organisasi">Pemberhentian Karena Penyederhanaan Organisasi</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji PNS">Pemberhentian Karena Pelanggaran Sumpah/Janji PNS</option>
                                <option value="Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan">Pemberhentian Karena Pelanggaran Sumpah/Janji Jabatan</option>
                                <option value="Pemberhentian Karena Tindak Pidana">Pemberhentian Karena Tindak Pidana</option>
                                <option value="Pemberhentian Karena Meninggalkan Tugas">Pemberhentian Karena Meninggalkan Tugas</option>
                                <option value="Pemberhentian Karena Dinyatakan Hilang">Pemberhentian Karena Dinyatakan Hilang</option>
                                <option value="Pemberhentian Karena >6 setelah CLTN Tidak Melapor">Pemberhentian Karena >6 setelah CLTN Tidak Melapor</option>
                                <option value="Pemberhentian Karena Kasus TIPIKOR">Pemberhentian Karena Kasus TIPIKOR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kedudukan Hukum</label>
                        <div class="col-sm-9">
                            <select id="edit_kedudukan_pemberhentian" class="form-control select-2">
                                <option value=""></option>
                                <option value="Aktif">Aktif</option>
                                <option value="CLTN">CLTN</option>
                                <option value="Tugas Belajar">Tugas Belajar</option>
                                <option value="Pemberhentian Sementara">Pemberhentian Sementara</option>
                                <option value="Penerimaan Uang Tunggu">Penerimaan Uang Tunggu</option>
                                <option value="Prajurit Wajib">Prajurit Wajib</option>
                                <option value="Pejabat Negara">Pejabat Negara</option>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Sedang dalam Proses Banding BAPEK">Sedang dalam Proses Banding BAPEK</option>
                                <option value="Pegawai Titipan">Pegawai Titipan</option>
                                <option value="Pengungsi">Pengungsi</option>
                                <option value="Perpanjangan CLTN">Perpanjangan CLTN</option>
                                <option value="PNS yang Dinyatakan Hilang">PNS yang Dinyatakan Hilang</option>
                                <option value="PNS yang Kena Hukuman Disiplin">PNS yang Kena Hukuman Disiplin</option>
                                <option value="Pemindahan Dalam Rangka Penurunan Jabatan<">Pemindahan Dalam Rangka Penurunan Jabatan</option>
                                <option value="Masa Persiapan Pensiun">Masa Persiapan Pensiun</option>
                                <option value="CPNS yang Belum Menerima SK CPNS">CPNS yang Belum Menerima SK CPNS</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                                <option value="Diberhentikan">Diberhentikan</option>
                                <option value="Punah">Punah</option>
                                <option value="EKS PNS Timor Timor">EKS PNS Timor Timor</option>
                                <option value="TMS dari Pengadaan">TMS dari Pengadaan</option>
                                <option value="Pembatalan NIP">Pembatalan NIP</option>
                                <option value="Pemberhentian Tanpa Hak Pensiun<">Pemberhentian Tanpa Hak Pensiun</option>
                                <option value="Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun">Tidak e-PUPNS 2015 tetapi Diusulkan Pensiun</option>
                                <option value="Tidak ikut e-PUPNS 2015">Tidak ikut e-PUPNS 2015</option>
                                <option value="Tindak Pidana/Tindak Pidana Jabatan">Tindak Pidana/Tindak Pidana Jabatan</option>
                                <option value="Pemblokiran Data PNS dari Kedeputan Wasdal">Pemblokiran Data PNS dari Kedeputan Wasdal</option>
                                <option value="Mencapai BUP">Mencapai BUP</option>
                                <option value="Pensiun">Pensiun</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nomor SK</label>
                        <div class="col-sm-9">
                            <input id="edit_no_sk_pemberhentian" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal SK</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tanggal_sk_pemberhentian" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_pemberhentian');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
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
            case 'riwayat_pemberhentian':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
                data: {
                    nip: $('#nip').val(),
                    nama_lengkap: $('#nama_lengkap').val(),
                    jenis_pemberhentian: $('#jenis_pemberhentian').val(),
                    kedudukan_hukum: $('#kedudukan_pemberhentian').val(),
                    no_sk: $('#no_sk_pemberhentian').val(),
                    tanggal_sk: $('#tanggal_sk_pemberhentian').val(),
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
            case 'riwayat_pemberhentian':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    jenis_pemberhentian: $('#edit_jenis_pemberhentian').val(),
                    kedudukan_hukum: $('#edit_kedudukan_pemberhentian').val(),
                    no_sk: $('#edit_no_sk_pemberhentian').val(),
                    tanggal_sk: $('#edit_tanggal_sk_pemberhentian').val(),
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
            case 'pemberhentian':
            $('#edit_jenis_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
            $('#edit_kedudukan_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(4)").text()).trigger('change');
            $('#edit_no_sk_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_tanggal_sk_pemberhentian').val($(".data-itemriwayatpemberhentian[data-id='" + id + "']>td:eq(6)").text());
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

    $('#add_select2').on('change', function(){
        $('#add_select2').prop("disabled", true);

    });

    $('#tambah_pemberhentian').on('hidden.bs.modal', function () {
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
        cache: true
    },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResult,
templateSelection: formatResultSelection,
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
    $("#edit_namalengkap").val($("#edit_select2").text());
    $("#edit_nip").val($("#edit_select2").val());
});

</script>
