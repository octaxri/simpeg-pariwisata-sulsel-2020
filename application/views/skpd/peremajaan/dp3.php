<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Verifikasi Data DP3</h3>
            </div>
            <div class="panel-body">
                <table id="tbl_riwayat_dp3" style="min-width: 100%" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama Pegawai</th>
                            <th> Tahun </th>
                            <th> Nilai Rata-rata</th>
                            <th> Keterangan</th>
                            <th> Jumlah</th>
                            <th> Pejabat Penilai</th>
                            <th> Atasan Pejabat Penilai</th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_dp3_notverified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_dp3_notverified as $riwayat_dp3_notverified): ?>
                            <tr class="data-itemriwayatdp3" data-id="<?=$riwayat_dp3_notverified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_dp3_notverified->nip?></td>
                                <td><?=$riwayat_dp3_notverified->nama_lengkap?></td>
                                 <td style="display: none"><?=$riwayat_dp3_notverified->jenis_jabatan?></td>
                                <td><?=$riwayat_dp3_notverified->tahun?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->kesetiaan?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->tanggung?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->kejujuran?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->prakarsa?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->prestasi?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->ketaatan?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->kerjasama?></td>
                                <td><?=$riwayat_dp3_notverified->nilai_ratarata?></td>
                                <td><?=$riwayat_dp3_notverified->keterangan?></td>
                                <td><?=$riwayat_dp3_notverified->jumlah?></td>
                                <td><?=$riwayat_dp3_notverified->nama_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->nip_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->jabatan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->unor_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->golongan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->tmt_pejabat?></td>
                                <td><?=$riwayat_dp3_notverified->nama_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->nip_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->jabatan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->unor_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->golongan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_notverified->tmt_atasan_pejabat?></td>
                           </tr>
                           <?php $i++; endforeach;?>
                       <?php endif;?>
                   </tbody>
               </table>     
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Riwayat DP3</h3>

            </div>
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_dp3"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                <hr>
                <table id="tbl_riwayat_dp3" style="min-width: 100%" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
                    <thead>
                        <tr >
                            <th> No.</th>
                            <th> NIP</th>
                            <th> Nama Pegawai</th>
                            <th> Tahun </th>
                            <th> Nilai Rata-rata</th>
                            <th> Keterangan</th>
                            <th> Jumlah</th>
                            <th> Pejabat Penilai</th>
                            <th> Atasan Pejabat Penilai</th>
                            <th> Admin</th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th style="display: none"></th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_dp3_verified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_dp3_verified as $riwayat_dp3_verified): ?>
                            <tr class="data-itemriwayatdp3" data-id="<?=$riwayat_dp3_verified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_dp3_verified->nip?></td>
                                <td><?=$riwayat_dp3_verified->nama_lengkap?></td>
                                 <td style="display: none"><?=$riwayat_dp3_verified->jenis_jabatan?></td>
                                <td><?=$riwayat_dp3_verified->tahun?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->kesetiaan?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->tanggung?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->kejujuran?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->prakarsa?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->prestasi?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->ketaatan?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->kerjasama?></td>
                                <td><?=$riwayat_dp3_verified->nilai_ratarata?></td>
                                <td><?=$riwayat_dp3_verified->keterangan?></td>
                                <td><?=$riwayat_dp3_verified->jumlah?></td>
                                <td><?=$riwayat_dp3_verified->nama_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->nip_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->jabatan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->unor_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->golongan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->tmt_pejabat?></td>
                                <td><?=$riwayat_dp3_verified->nama_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->nip_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->jabatan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->unor_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->golongan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_dp3_verified->tmt_atasan_pejabat?></td>
                                <td><?=$riwayat_dp3_verified->admin?></td>
                                <td>
                                   <a data-toggle="modal" data-target="#edit_dp3" onclick="editData('dp3',<?=$riwayat_dp3_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                   <a href="#" onclick="hapusRiwayat('dp3',<?=$riwayat_dp3_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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

<!-- Tambah DP3 -->
<div id="tambah_dp3" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data DP3</h4>
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
                        <label  class="col-sm-3 control-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select id="jenis_jabatan_dp3" class="form-control select-2">
                                <option value=""></option>
                                <option value="umum">Fungsional Umum</option>
                                <option value="struktural">Struktural</option>
                                <option value="tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input id="tahun_dp3" type="text" class="form-control onlyYears" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kesetiaan</label>
                        <div class="col-sm-4">
                            <input id="kesetiaan_dp3" type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" onkeyup="isGrade(this, this.value);" placeholder="00.00"  class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kesetiaan_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggung Jawab</label>
                        <div class="col-sm-4">
                            <input id="tanggung_dp3" type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_tanggung_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kejujuran</label>
                        <div class="col-sm-4">
                            <input id="kejujuran_dp3" type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kejujuran_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prakarsa</label>
                        <div class="col-sm-4">
                            <input id="prakarsa_dp3" type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_prakarsa_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prestasi Kerja</label>
                        <div class="col-sm-4">
                            <input id="prestasi_dp3" type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_prestasi_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Ketaatan</label>
                        <div class="col-sm-4">
                            <input id="ketaatan_dp3" type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_ketaatan_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-4">
                            <input id="kerjasama_dp3" type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_kerjasama_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Rata-rata</label>
                        <div class="col-sm-4">
                            <input id="rata_dp3" type="text" readonly step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="ket_rata_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input id="jumlah_dp3" readonly type="text" step="0.01" value="0" onkeyup="isGrade(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase">Pejabat Penilai</h5>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="add_pejabat_select2" class="form-control select2"  style="width: 100%"></select>
                            <input type="hidden" id="nip_penilai_dp3" class="form-control" >
                            <input type="hidden" id="nama_penilai_dp3" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <input id="tmt_golongan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase">Atasan Pejabat Penilai</h5>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="add_atasan_pejabat_select2" class="form-control select2"  style="width: 100%"></select>
                            <input type="hidden" id="nip_atasan_dp3" class="form-control" >
                            <input type="hidden" id="nama_atasan_dp3" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_atasan_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_atasan_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_atasan_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <input id="tmt_atasan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_dp3','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah DP3 -->
<div id="edit_dp3" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data DP3</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="hidden" id="edit_nama_lengkap" class="form-control" >
                            <input type="hidden" id="edit_nip" class="form-control" >
                            <input type="hidden" id="edit_admin" value="<?=$this->session->fullname?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_jabatan_dp3" class="form-control select-2">
                                <option value=""></option>
                                <option value="umum">Fungsional Umum</option>
                                <option value="struktural">Struktural</option>
                                <option value="tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input id="edit_tahun_dp3" type="text" class="form-control onlyYears" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kesetiaan</label>
                        <div class="col-sm-4">
                            <input id="edit_kesetiaan_dp3" type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00"  class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_kesetiaan_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggung Jawab</label>
                        <div class="col-sm-4">
                            <input id="edit_tanggung_dp3" type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_tanggung_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kejujuran</label>
                        <div class="col-sm-4">
                            <input id="edit_kejujuran_dp3" type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_kejujuran_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prakarsa</label>
                        <div class="col-sm-4">
                            <input id="edit_prakarsa_dp3" type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_prakarsa_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Prestasi Kerja</label>
                        <div class="col-sm-4">
                            <input id="edit_prestasi_dp3" type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_prestasi_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Ketaatan</label>
                        <div class="col-sm-4">
                            <input id="edit_ketaatan_dp3" type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_ketaatan_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-4">
                            <input id="edit_kerjasama_dp3" type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_kerjasama_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Rata-rata</label>
                        <div class="col-sm-4">
                            <input id="edit_rata_dp3" type="text" readonly step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                        <div class="col-sm-5">
                            <input id="edit_ket_rata_dp3" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">
                            <input id="edit_jumlah_dp3" readonly type="text" step="0.01" onkeyup="isGradeEdit(this, this.value);" placeholder="00.00" class="form-control" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase">Pejabat Penilai</h5>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="edit_pejabat_select2" class="form-control select2"  style="width: 100%"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_penilai_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_tmt_golongan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div> <hr>
                    <h5 style="text-transform: uppercase">Atasan Pejabat Penilai</h5>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="edit_atasan_pejabat_select2" class="form-control select2"  style="width: 100%"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_atasan_dp3" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_atasan_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_atasan_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_atasan_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_tmt_atasan_penilai_dp3" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="editData_send('riwayat_dp3');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
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
            case 'riwayat_dp3':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
                data: {
                    nip: $('#nip').val(),
                    nama_lengkap: $('#nama_lengkap').val(),
                    jenis_jabatan: $('#jenis_jabatan_dp3').val(),
                    tahun: $('#tahun_dp3').val(),
                    kesetiaan: $('#kesetiaan_dp3').val(),
                    tanggung: $('#tanggung_dp3').val(),
                    kejujuran: $('#kejujuran_dp3').val(),
                    prakarsa: $('#prakarsa_dp3').val(),
                    prestasi: $('#prestasi_dp3').val(),
                    ketaatan : $('#ketaatan_dp3').val(),
                    kerjasama : $('#kerjasama_dp3').val(),
                    nilai_ratarata: $('#rata_dp3').val(),
                    jumlah: $('#jumlah_dp3').val(),
                    nama_pejabat: $('#nama_penilai_dp3').val(),
                    nip_pejabat: $('#nip_penilai_dp3').val(),
                    jabatan_pejabat: $('#jabatan_penilai_dp3').val(),
                    unor_pejabat: $('#unor_penilai_dp3').val(),
                    golongan_pejabat: $('#golongan_penilai_dp3').val(),
                    tmt_pejabat: $('#tmt_golongan_penilai_dp3').val(),
                    nama_atasan_pejabat: $('#nama_atasan_dp3').val(),
                    nip_atasan_pejabat: $('#nip_atasan_dp3').val(),
                    jabatan_atasan_pejabat: $('#jabatan_atasan_dp3').val(),
                    unor_atasan_pejabat: $('#unor_atasan_dp3').val(),
                    golongan_atasan_pejabat: $('#golongan_atasan_dp3').val(),
                    tmt_atasan_pejabat: $('#tmt_atasan_penilai_dp3').val(),
                    keterangan: $('#ket_rata_dp3').val(),
                    admin: $('#admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat dp3 berhasil ditambah.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat dp3 gagal ditambah.', 'error');
                }
            });
            break;
        }
    }

    function editData_send(model){
        switch (model) {
            case 'riwayat_dp3':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    jenis_jabatan: $('#edit_jenis_jabatan_dp3').val(),
                    tahun: $('#edit_tahun_dp3').val(),
                    kesetiaan: $('#edit_kesetiaan_dp3').val(),
                    tanggung: $('#edit_tanggung_dp3').val(),
                    kejujuran: $('#edit_kejujuran_dp3').val(),
                    prakarsa: $('#edit_prakarsa_dp3').val(),
                    prestasi: $('#edit_prestasi_dp3').val(),
                    ketaatan : $('#edit_ketaatan_dp3').val(),
                    kerjasama : $('#edit_kerjasama_dp3').val(),
                    nilai_ratarata: $('#edit_rata_dp3').val(),
                    jumlah: $('#edit_jumlah_dp3').val(),
                    nama_pejabat: $('#edit_nama_penilai_dp3').val(),
                    nip_pejabat: $('#edit_nip_penilai_dp3').val(),
                    jabatan_pejabat: $('#edit_jabatan_penilai_dp3').val(),
                    unor_pejabat: $('#edit_unor_penilai_dp3').val(),
                    golongan_pejabat: $('#edit_golongan_penilai_dp3').val(),
                    tmt_pejabat: $('#edit_tmt_golongan_penilai_dp3').val(),
                    nama_atasan_pejabat: $('#edit_nama_atasan_dp3').val(),
                    nip_atasan_pejabat: $('#edit_nip_atasan_dp3').val(),
                    jabatan_atasan_pejabat: $('#edit_jabatan_atasan_dp3').val(),
                    unor_atasan_pejabat: $('#edit_unor_atasan_dp3').val(),
                    golongan_atasan_pejabat: $('#edit_golongan_atasan_dp3').val(),
                    tmt_atasan_pejabat: $('#edit_tmt_atasan_penilai_dp3').val(),
                    keterangan: $('#edit_ket_rata_dp3').val(),
                    admin: $('#edit_admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat dp3 berhasil diperbaharui.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat dp3 gagal diperbaharui.', 'error');
                }
            });
            break;
            default:
        }
    }

    function editData(model,id){
        switch (model) {
            case 'dp3':
            $('#edit_jenis_jabatan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
            $('#edit_tahun_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(4)").text());
            $('#edit_kesetiaan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_ket_kesetiaan_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(5)").text())));

            $('#edit_tanggung_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(6)").text());
            $('#edit_ket_tanggung_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(6)").text())));
            $('#edit_kejujuran_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(7)").text());
            $('#edit_ket_kejujuran_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(7)").text())));
            $('#edit_prakarsa_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(8)").text());
            $('#edit_ket_prakarsa_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(8)").text())));
            $('#edit_prestasi_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(9)").text());
            $('#edit_ket_prestasi_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(9)").text())));
            $('#edit_ketaatan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(10)").text());
            $('#edit_ket_ketaatan_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(10)").text())));
            $('#edit_kerjasama_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(11)").text());
            $('#edit_ket_kerjasama_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(11)").text())));
            $('#edit_rata_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(12)").text());
            $('#edit_ket_rata_dp3').val(grading(parseFloat($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(12)").text())));
            $('#edit_jumlah_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(14)").text());
            $('#edit_nama_penilai_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(15)").text());
            $('#edit_nip_penilai_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(16)").text());
            $('#edit_jabatan_penilai_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(17)").text());
            $('#edit_unor_penilai_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(18)").text());
            $('#edit_golongan_penilai_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(19)").text());
            $('#edit_tmt_golongan_penilai_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(20)").text());
            $('#edit_nama_atasan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(21)").text());
            $('#edit_nip_atasan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(22)").text());
            $('#edit_jabatan_atasan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(23)").text());
            $('#edit_unor_atasan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(24)").text());
            $('#edit_golongan_atasan_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(25)").text());
            $('#edit_tmt_atasan_penilai_dp3').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(26)").text());
            $('#edit_admin').val($(".data-itemriwayatdp3[data-id='" + id + "']>td:eq(27)").text());
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
                        swal('Sukses', 'Data Riwayat berhasil dihapus.', 'success');
                    } else swal('Gagal', 'Data Riwayat Gagal dihapus.', 'error');
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


    function isGrade(element, value){
        var score = parseFloat(value);
        var elementId =element.getAttribute('id');
        $('#ket_'+elementId).val(grading(score));
        $('#jumlah_dp3').val(total);
    }
    function isGradeEdit(element, value){
        var score = parseFloat(value);
        console.log(value);
        var elementId =element.getAttribute('id');
        $('#edit_ket_'+elementId).val(grading(score));
        $('#edit_jumlah_dp3').val(totalEdit);
    }

    function total(){
        var total = parseFloat($('#kesetiaan_dp3').val()) + parseFloat($('#tanggung_dp3').val()) + parseFloat($('#kejujuran_dp3').val()) + parseFloat($('#prakarsa_dp3').val()) + parseFloat($('#prestasi_dp3').val()) + parseFloat($('#ketaatan_dp3').val()) + parseFloat($('#kerjasama_dp3').val());
        $('#rata_dp3').val(average(total));
        $('#ket_rata_dp3').val(grading(average(total)));

        return parseFloat(total);
    }

    function totalEdit(){
        var total = parseFloat($('#edit_kesetiaan_dp3').val()) + parseFloat($('#edit_tanggung_dp3').val()) + parseFloat($('#edit_kejujuran_dp3').val()) + parseFloat($('#edit_prakarsa_dp3').val()) + parseFloat($('#edit_prestasi_dp3').val()) + parseFloat($('#edit_ketaatan_dp3').val()) + parseFloat($('#edit_kerjasama_dp3').val());
        $('#edit_rata_dp3').val(average(total));
        $('#edit_ket_rata_dp3').val(grading(average(total)));

        return parseFloat(total);
    }

    function average(total)
    {
        return parseFloat(total / 7).toFixed(2);
    }

    function grading(score) {
        var gscore;
        switch(true) {
            case (score <= 100.00 && score >= 91.00):
            gscore = 'Sangat Baik';
            break;
            case (score <= 90.99 && score >= 76.00):
            gscore = 'Baik';
            break;
            case (score <= 75.99 && score >= 61.00):
            gscore = 'Cukup';
            break;
            case (score <= 60.99 && score >= 51.01):
            gscore = 'Kurang';
            break;
            case (score <= 50.00 && score >= 0.00):
            gscore = 'Buruk';
            break;

            case (score > 100.00 && score < 0.00):
            gscore = 'Skor Tidak Diketahui';
            break; 

            default:
            return 'Skor Tidak Diketahui';
        }
        return gscore;
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
        {
            data.gambar = 'no_image.jpg';
        }
        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    function formatResultPejabat (data) {
        if (!data.id) { return data.text; }
        if (data.gambar == '') {
            data.gambar = 'no_image.jpg';
        }

        var markup = '<img style="margin-right : 10px;" width="25px" height="25px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>' +
        '<span> (NIP: '+ data.id+') </span>'
        return markup;
    };

    function formatResultSelectionAtasanPejabat (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#unor_atasan_dp3").val(data.unor);
        $("#jabatan_atasan_dp3").val(data.jabatan);
        $("#golongan_atasan_dp3").val(data.golongan);
        $("#tmt_atasan_penilai_dp3").val(data.tmt);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    function formatResultSelectionPejabat (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#unor_penilai_dp3").val(data.unor);
        $("#jabatan_penilai_dp3").val(data.jabatan);
        $("#golongan_penilai_dp3").val(data.golongan);
        $("#tmt_golongan_penilai_dp3").val(data.tmt);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    function formatResultSelectionAtasanPejabatEdit (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#edit_unor_atasan_dp3").val(data.unor);
        $("#edit_jabatan_atasan_dp3").val(data.jabatan);
        $("#edit_golongan_atasan_dp3").val(data.golongan);
        $("#edit_tmt_atasan_penilai_dp3").val(data.tmt);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    function formatResultSelectionPejabatEdit (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#edit_unor_penilai_dp3").val(data.unor);
        $("#edit_jabatan_penilai_dp3").val(data.jabatan);
        $("#edit_golongan_penilai_dp3").val(data.golongan);
        $("#edit_tmt_golongan_penilai_dp3").val(data.tmt);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

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
    });

    $("#add_pejabat_select2").select2({
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
                            unor: item.satuan_kerja,
                            jabatan: item.nama_jabatan,
                            golongan: item.jenis_pangkat,
                            tmt: item.tmt_jabatan
                        }
                    })
                };
            },
            cache: true
        },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResultPejabat,
templateSelection: formatResultSelectionPejabat,
minimumInputLength: 1
});

    $("#add_pejabat_select2").on("select2:select", function (e) {
        $("#nama_penilai_dp3").val($("#add_pejabat_select2").text());
        $("#nip_penilai_dp3").val($("#add_pejabat_select2").val());
    });

    $("#add_atasan_pejabat_select2").select2({
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
                            unor: item.satuan_kerja,
                            jabatan: item.nama_jabatan,
                            golongan: item.jenis_pangkat,
                            tmt: item.tmt_jabatan
                        }
                    })
                };
            },
            cache: true
        },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai',
templateResult: formatResultPejabat,
templateSelection: formatResultSelectionAtasanPejabat,
minimumInputLength: 1
});

    $("#add_atasan_pejabat_select2").on("select2:select", function (e) {
        $("#nama_atasan_dp3").val($("#add_atasan_pejabat_select2").text());
        $("#nip_atasan_dp3").val($("#add_atasan_pejabat_select2").val());
        $
    });



    // edit
     $("#edit_pejabat_select2").select2({
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
                            unor: item.satuan_kerja,
                            jabatan: item.nama_jabatan,
                            golongan: item.jenis_pangkat,
                            tmt: item.tmt_jabatan
                        }
                    })
                };
            },
            cache: true
        },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai Lain',
templateResult: formatResultPejabat,
templateSelection: formatResultSelectionPejabatEdit,
minimumInputLength: 1
});

    $("#edit_pejabat_select2").on("select2:select", function (e) {
        $("#edit_nama_penilai_dp3").val($("#edit_pejabat_select2").text());
        $("#edit_nip_penilai_dp3").val($("#edit_pejabat_select2").val());
    });

    $("#edit_atasan_pejabat_select2").select2({
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
                            unor: item.satuan_kerja,
                            jabatan: item.nama_jabatan,
                            golongan: item.jenis_pangkat,
                            tmt: item.tmt_jabatan
                        }
                    })
                };
            },
            cache: true
        },
escapeMarkup: function (markup) { return markup; }, // let our custom formatter work,
placeholder: 'Pilih Pegawai Lain',
templateResult: formatResultPejabat,
templateSelection: formatResultSelectionAtasanPejabatEdit,
minimumInputLength: 1
});

    $("#edit_atasan_pejabat_select2").on("select2:select", function (e) {
        $("#edit_nama_atasan_dp3").val($("#edit_atasan_pejabat_select2").text());
        $("#edit_nip_atasan_dp3").val($("#edit_atasan_pejabat_select2").val());
        $
    });

</script>
