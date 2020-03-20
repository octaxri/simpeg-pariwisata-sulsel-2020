<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-heading panel-danger">
                <h3 class="panel-title font-white">Verifikasi Data SKP</h3>
            </div>
            <div class="panel-body">
                <table id="tbl_riwayat_skp" style="min-width: 100%" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
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
                        </tr>
                    </thead>
                    <tbody>
                       <?php if ($riwayat_skp_notverified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_skp_notverified as $riwayat_skp_notverified): ?>
                            <tr class="data-itemriwayatskp" data-id="<?=$riwayat_skp_notverified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_skp_notverified->nip?></td>
                                <td><?=$riwayat_skp_notverified->nama_lengkap?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->jenis_jabatan?></td>
                                <td><?=$riwayat_skp_notverified->tahun?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->komitmen?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->kerjasama?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->integritas?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->disiplin?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->kepemimpinan?></td>
                                <td><?=$riwayat_skp_notverified->hasil_nilai_perilaku_kerja?></td>
                                <td><?=$riwayat_skp_notverified->ket_nilai_prestasi_kerja?></td>
                                <td><?=$riwayat_skp_notverified->nilai_prestasi_kerja?></td>
                                <td><?=$riwayat_skp_notverified->nama_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->nip_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->jabatan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->unor_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->golongan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->tmt_pejabat?></td>
                                <td><?=$riwayat_skp_notverified->nama_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->nip_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->jabatan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->unor_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->golongan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_notverified->tmt_atasan_pejabat?></td>
                           </tr>
                           <?php $i++; endforeach;?>
                       <?php endif;?>
                   </tbody>
               </table>     
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Riwayat SKP</h3>

            </div>
            <div class="panel-body">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_skp"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                <hr>
                <table id="tbl_riwayat_skp" style="min-width: 100%" class="table table-bordered table-sorting table-hover datatable-Exnormal dataTable no-footer">
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
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($riwayat_skp_verified != NULL): ?>
                            <?php $i=1; foreach ($riwayat_skp_verified as $riwayat_skp_verified): ?>
                            <tr class="data-itemriwayatskp" data-id="<?=$riwayat_skp_verified->id_riwayat?>">
                                <td><?=$i?></td>
                                <td><?=$riwayat_skp_verified->nip?></td>
                                <td><?=$riwayat_skp_verified->nama_lengkap?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->jenis_jabatan?></td>
                                <td><?=$riwayat_skp_verified->tahun?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->komitmen?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->kerjasama?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->integritas?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->disiplin?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->kepemimpinan?></td>
                                <td><?=$riwayat_skp_verified->hasil_nilai_perilaku_kerja?></td>
                                <td><?=$riwayat_skp_verified->ket_nilai_prestasi_kerja?></td>
                                <td><?=$riwayat_skp_verified->nilai_prestasi_kerja?></td>
                                <td><?=$riwayat_skp_verified->nama_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->nip_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->jabatan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->unor_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->golongan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->tmt_pejabat?></td>
                                <td><?=$riwayat_skp_verified->nama_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->nip_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->jabatan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->unor_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->golongan_atasan_pejabat?></td>
                                <td style="display: none"><?=$riwayat_skp_verified->tmt_atasan_pejabat?></td>
                                <td><?=$riwayat_skp_verified->admin?></td>
                                <td align="center">
                                   <a data-toggle="modal" data-target="#edit_skp" onclick="editData('skp',<?=$riwayat_skp_verified->id_riwayat?>);" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                   <a href="#" onclick="hapusRiwayat('skp',<?=$riwayat_skp_verified->id_riwayat?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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

<!-- Tambah SKP -->
<div id="tambah_skp" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Tambah Data SKP</h4>
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
                            <select id="jenis_jabatan_skp" class="form-control select-2">
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
                            <input id="tahun_skp" type="text" class="form-control onlyYears" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;"><strong> Sasaran Kinerja Pegawai</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai SKP</label>
                        <div class="col-sm-3">
                            <input id="nilai_skp" type="text" class="form-control"   value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-2">
                            <input id="persen_nilai_skp" type="text" value="60%" readonly class="form-control" >
                        </div>
                        <div class="col-sm-4">
                            <input id="hasil_nilai_skp" type="text" readonly class="form-control" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;"><strong>Perilaku Kerja</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Orientasi Pelayan</label>
                        <div class="col-sm-3">
                            <input id="orientasi_skp" type="text" class="form-control" value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_orientasi_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Komitmen</label>
                        <div class="col-sm-3">
                            <input id="komitmen_skp" type="text" class="form-control" value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_komitmen_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-3">
                            <input id="kerjasama_skp" type="text" class="form-control" value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_kerjasama_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Integritas</label>
                        <div class="col-sm-3">
                            <input id="integritas_skp" type="text" class="form-control" value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_integritas_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Disiplin</label>
                        <div class="col-sm-3">
                            <input id="disiplin_skp" type="text" class="form-control" value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_disiplin_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kepemimpinan</label>
                        <div class="col-sm-3">
                            <input id="kepemimpinan_skp" type="text" class="form-control" value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_kepemimpinan_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Perilaku Kerja</label>
                        <div class="col-sm-3">
                            <input id="nilai_perilaku_skp" type="text" class="form-control" readonly="" value="0.00" placeholder="0.00" >
                        </div>
                        <div class="col-sm-2">
                            <input id="persen_nilai_perilaku_skp" value="40%" type="text" readonly class="form-control" >
                        </div>
                        <div class="col-sm-4">
                            <input id="hasil_nilai_perilaku_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Prestasi Kerja</label>
                        <div class="col-sm-3">
                            <input id="nilai_prestasi_skp" type="text" class="form-control"  readonly value="0.00" placeholder="0.00" step="0.01" onkeyup="isGrade(this,this.value);" >
                        </div>
                        <div class="col-sm-6">
                            <input id="ket_nilai_prestasi_skp" type="text" readonly class="form-control" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;">Pejabat Penilai</h5>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="add_pejabat_select2" class="form-control select2"  style="width: 100%"></select>
                            <input type="hidden" id="nip_penilai_skp" class="form-control" >
                            <input type="hidden" id="nama_penilai_skp" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_penilai_skp" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_penilai_skp" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_penilai_skp" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <input id="tmt_golongan_penilai_skp" type="text" class="form-control" readonly >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;">Atasan Pejabat Penilai</h5>
                    <div class="form-group">
                        <label for="bahan" class="col-sm-3 control-label" >Nama Pegawai</label>
                        <div class="col-sm-9">
                            <select id="add_atasan_pejabat_select2" class="form-control select2"  style="width: 100%"></select>
                            <input type="hidden" id="nip_atasan_skp" class="form-control" >
                            <input type="hidden" id="nama_atasan_skp" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="jabatan_atasan_skp" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="unor_atasan_skp" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="golongan_atasan_skp" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <input id="tmt_atasan_penilai_skp" type="text" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="addData_send('riwayat_skp','');"><i class="glyphicon glyphicon-floppy-save"></i>  Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit SKP -->
<div id="edit_skp" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg"><!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Edit Data SKP</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <select id="edit_jenis_jabatan_skp" class="form-control">
                                <option value="umum">Fungsional Umum</option>
                                <option value="struktural">Struktural</option>
                                <option value="tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input id="edit_tahun_skp" type="text" class="form-control" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;"><strong> Sasaran Kinerja Pegawai</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai SKP</label>
                        <div class="col-sm-3">
                            <input id="edit_nilai_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_skp" type="text" readonly class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_skp2" type="text" readonly class="form-control" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;"><strong>Perilaku Kerja</strong></h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Orientasi Pelayan</label>
                        <div class="col-sm-3">
                            <input id="edit_orientasi_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_orientasi_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Komitmen</label>
                        <div class="col-sm-3">
                            <input id="edit_komitmen_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_komitmen_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kerjasama</label>
                        <div class="col-sm-3">
                            <input id="edit_kerjasama_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_kerjasama_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Integritas</label>
                        <div class="col-sm-3">
                            <input id="edit_integritas_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_integritas_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Disiplin</label>
                        <div class="col-sm-3">
                            <input id="edit_disiplin_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_disiplin_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kepemimpinan</label>
                        <div class="col-sm-3">
                            <input id="edit_kepemimpinan_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_kepemimpinan_skp" type="text" readonly class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Perilaku Kerja</label>
                        <div class="col-sm-3">
                            <input id="edit_nilai_perilaku_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_perilaku_skp" type="text" readonly class="form-control" >
                        </div>
                        <div class="col-sm-3">
                            <input id="edit_ket_nilai_perilaku_skp2" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nilai Prestasi Kerja</label>
                        <div class="col-sm-3">
                            <input id="edit_nilai_prestasi_skp" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-6">
                            <input id="edit_ket_nilai_prestasi_skp" type="text" readonly class="form-control" >
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;">Pejabat Penilai</h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_penilai_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tmt_golongan_penilaianskp" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div><hr>
                    <h5 style="text-transform: uppercase;">Atasan Pejabat Penilai</h5>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">NIP</label>
                        <div class="col-sm-9">
                            <input id="edit_nip_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input id="edit_nama_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input id="edit_jabatan_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Unor</label>
                        <div class="col-sm-9">
                            <input id="edit_unor_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Golongan</label>
                        <div class="col-sm-9">
                            <input id="edit_golongan_atasan_skp" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">TMT Golongan</label>
                        <div class="col-sm-9">
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input id="edit_tmt_atasan_penilaianskp" type="text" class="form-control" >
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-3 col-md-offset-5">
                            <a  class="btn btn-primary btn-sm" onclick="profilAjaxEdit_send('riwayat_unor');"><i class="glyphicon glyphicon-edit"></i>  Simpan Perubahan</a>
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
            case 'riwayat_skp':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/addData/')?>'+tipe,
                data: {
                    nip: $('#nip').val(),
                    nama_lengkap: $('#nama_lengkap').val(),
                    jenis_jabatan: $('#jenis_jabatan_skp').val(),
                    tahun: $('#tahun_skp').val(),
                    komitmen: $('#komitmen_skp').val(),
                    kerjasama: $('#kerjasama_skp').val(),
                    integritas: $('#integritas_skp').val(),
                    disiplin: $('#disiplin_skp').val(),
                    kepemimpinan: $('#kepemimpinan_skp').val(),
                    orientasi : $('#orientasi_skp').val(),
                    nama_pejabat: $('#nama_penilai_skp').val(),
                    nip_pejabat: $('#nip_penilai_skp').val(),
                    jabatan_pejabat: $('#jabatan_penilai_skp').val(),
                    unor_pejabat: $('#unor_penilai_skp').val(),
                    golongan_pejabat: $('#golongan_penilai_skp').val(),
                    tmt_pejabat: $('#tmt_golongan_penilai_skp').val(),
                    nama_atasan_pejabat: $('#nama_atasan_skp').val(),
                    nip_atasan_pejabat: $('#nip_atasan_skp').val(),
                    jabatan_atasan_pejabat: $('#jabatan_atasan_skp').val(),
                    unor_atasan_pejabat: $('#unor_atasan_skp').val(),
                    golongan_atasan_pejabat: $('#golongan_atasan_skp').val(),
                    tmt_atasan_pejabat: $('#tmt_atasan_penilai_skp').val(),
                    nilai_skp: $('#nilai_skp').val(),
                    hasil_nilai_skp: $('#hasil_nilai_skp').val(),
                    nilai_perilaku_kerja: $('#nilai_perilaku_skp').val(),
                    hasil_nilai_perilaku_kerja: $('#hasil_nilai_perilaku_skp').val(),
                    nilai_prestasi_kerja: $('#nilai_prestasi_skp').val(),
                    ket_nilai_prestasi_kerja: $('#ket_nilai_prestasi_skp').val(),
                    admin: $('#admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat skp berhasil ditambah.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat skp gagal ditambah.', 'error');
                }
            });
            break;
        }
    }

    function editData_send(model){
        switch (model) {
            case 'riwayat_skp':
            $.ajax({
                type: 'POST',
                url: '<?=admin_url('PeremajaanData/editData/')?>'+idGlob+'/'+model,
                data: {
                    jenis_jabatan: $('#edit_jenis_jabatan_skp').val(),
                    tahun: $('#edit_tahun_skp').val(),
                    kesetiaan: $('#edit_kesetiaan_skp').val(),
                    tanggung: $('#edit_tanggung_skp').val(),
                    kejujuran: $('#edit_kejujuran_skp').val(),
                    prakarsa: $('#edit_prakarsa_skp').val(),
                    prestasi: $('#edit_prestasi_skp').val(),
                    ketaatan : $('#edit_ketaatan_skp').val(),
                    kerjasama : $('#edit_kerjasama_skp').val(),
                    nilai_ratarata: $('#edit_rata_skp').val(),
                    jumlah: $('#edit_jumlah_skp').val(),
                    nama_pejabat: $('#edit_nama_penilai_skp').val(),
                    nip_pejabat: $('#edit_nip_penilai_skp').val(),
                    jabatan_pejabat: $('#edit_jabatan_penilai_skp').val(),
                    unor_pejabat: $('#edit_unor_penilai_skp').val(),
                    golongan_pejabat: $('#edit_golongan_penilai_skp').val(),
                    tmt_pejabat: $('#edit_tmt_golongan_penilai_skp').val(),
                    nama_atasan_pejabat: $('#edit_nama_atasan_skp').val(),
                    nip_atasan_pejabat: $('#edit_nip_atasan_skp').val(),
                    jabatan_atasan_pejabat: $('#edit_jabatan_atasan_skp').val(),
                    unor_atasan_pejabat: $('#edit_unor_atasan_skp').val(),
                    golongan_atasan_pejabat: $('#edit_golongan_atasan_skp').val(),
                    tmt_atasan_pejabat: $('#edit_tmt_atasan_penilai_skp').val(),
                    keterangan: $('#edit_ket_rata_skp').val(),
                    admin: $('#edit_admin').val()
                }
            }).done(function(response) {
                if (response.success) {
                    setTimeout(function() { location.reload() },1500);
                    swal('Sukses', 'Data Riwayat skp berhasil diperbaharui.', 'success');
                } else {
                    swal('Gagal', 'Data Riwayat skp gagal diperbaharui.', 'error');
                }
            });
            break;
            default:
        }
    }

    function editData(model,id){
        switch (model) {
            case 'skp':
            $('#edit_jenis_jabatan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(3)").text()).trigger('change');
            $('#edit_tahun_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(4)").text());
            $('#edit_kesetiaan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(5)").text());
            $('#edit_ket_kesetiaan_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(5)").text())));

            $('#edit_tanggung_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(6)").text());
            $('#edit_ket_tanggung_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(6)").text())));
            $('#edit_kejujuran_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(7)").text());
            $('#edit_ket_kejujuran_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(7)").text())));
            $('#edit_prakarsa_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(8)").text());
            $('#edit_ket_prakarsa_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(8)").text())));
            $('#edit_prestasi_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(9)").text());
            $('#edit_ket_prestasi_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(9)").text())));
            $('#edit_ketaatan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(10)").text());
            $('#edit_ket_ketaatan_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(10)").text())));
            $('#edit_kerjasama_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(11)").text());
            $('#edit_ket_kerjasama_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(11)").text())));
            $('#edit_rata_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(12)").text());
            $('#edit_ket_rata_skp').val(grading(parseFloat($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(12)").text())));
            $('#edit_jumlah_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(14)").text());
            $('#edit_nama_penilai_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(15)").text());
            $('#edit_nip_penilai_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(16)").text());
            $('#edit_jabatan_penilai_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(17)").text());
            $('#edit_unor_penilai_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(18)").text());
            $('#edit_golongan_penilai_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(19)").text());
            $('#edit_tmt_golongan_penilai_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(20)").text());
            $('#edit_nama_atasan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(21)").text());
            $('#edit_nip_atasan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(22)").text());
            $('#edit_jabatan_atasan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(23)").text());
            $('#edit_unor_atasan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(24)").text());
            $('#edit_golongan_atasan_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(25)").text());
            $('#edit_tmt_atasan_penilai_skp').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(26)").text());
            $('#edit_admin').val($(".data-itemriwayatskp[data-id='" + id + "']>td:eq(27)").text());
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
                     'Proses Hapus Data dibatalkan! :)',
                     'error'
                     )
            }
        });
    }



    function isGrade(element, value){
        var score = parseFloat(value);
        var elementId =element.getAttribute('id');
        $('#ket_'+elementId).val(grading(score));
        if(elementId === 'nilai_skp') {
            $('#hasil_'+elementId).val(parseFloat(score * 0.6).toFixed(2));
        }
        $('#nilai_perilaku_skp').val(average);
       // console.log($('#nilai_perilaku_skp').val());
       //  console.log($('#nilai_skp').val());
        $('#nilai_prestasi_skp').val(parseFloat(parseFloat($('#hasil_nilai_perilaku_skp').val()) + parseFloat($('#hasil_nilai_skp').val())).toFixed(2));
        $('#ket_nilai_prestasi_skp').val(grading(parseFloat($('#nilai_prestasi_skp').val())))

    }
    function isGradeEdit(element, value){
        var score = parseFloat(value);
        console.log(value);
        var elementId =element.getAttribute('id');
        $('#edit_ket_'+elementId).val(grading(score));
        $('#edit_nilai_perilaku_skp').val(averageEdit);
    }

    function average(){
        var average = parseFloat($('#komitmen_skp').val()) + parseFloat($('#kerjasama_skp').val()) + parseFloat($('#integritas_skp').val()) + parseFloat($('#disiplin_skp').val()) + parseFloat($('#kepemimpinan_skp').val()) + parseFloat($('#orientasi_skp').val());
        average = parseFloat(average / 6).toFixed(2);
        $('#hasil_nilai_perilaku_skp').val(parseFloat(average * 0.4).toFixed(2));
        return average;
    }

    // function averageEdit(){
    //     vavar average = parseFloat($('#edit_komitmen_skp').val()) + parseFloat($('#edit_kerjasama_skp').val()) + parseFloat($('#edit_integritas_skp').val()) + parseFloat($('#edit_disiplin_skp').val()) + parseFloat($('#edit_kepemimpinan_skp').val()) + parseFloat($('#edit_orientasi_skp').val());
    //     return parseFloat(average / 6).toFixed(2);
    // }

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
        $("#unor_atasan_skp").val(data.unor);
        $("#jabatan_atasan_skp").val(data.jabatan);
        $("#golongan_atasan_skp").val(data.golongan);
        $("#tmt_atasan_penilai_skp").val(data.tmt);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    function formatResultSelectionPejabat (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#unor_penilai_skp").val(data.unor);
        $("#jabatan_penilai_skp").val(data.jabatan);
        $("#golongan_penilai_skp").val(data.golongan);
        $("#tmt_golongan_penilai_skp").val(data.tmt);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    function formatResultSelectionAtasanPejabatEdit (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#edit_unor_atasan_skp").val(data.unor);
        $("#edit_jabatan_atasan_skp").val(data.jabatan);
        $("#edit_golongan_atasan_skp").val(data.golongan);
        $("#edit_tmt_atasan_penilai_skp").val(data.tmt);

        var markup = '<img style="margin-right : 10px;" width="15px" height="15px" src="<?=upload_url('fotopegawai')?>'+data.gambar+'">' +
        '<span>'+ data.text+'</span>';
        return markup;
    }

    function formatResultSelectionPejabatEdit (data) {
        if (data.gambar == null) 
        {
            data.gambar = 'no_image.jpg';
        }
        $("#edit_unor_penilai_skp").val(data.unor);
        $("#edit_jabatan_penilai_skp").val(data.jabatan);
        $("#edit_golongan_penilai_skp").val(data.golongan);
        $("#edit_tmt_golongan_penilai_skp").val(data.tmt);

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
        $("#nama_penilai_skp").val($("#add_pejabat_select2").text());
        $("#nip_penilai_skp").val($("#add_pejabat_select2").val());
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
        $("#nama_atasan_skp").val($("#add_atasan_pejabat_select2").text());
        $("#nip_atasan_skp").val($("#add_atasan_pejabat_select2").val());
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
        $("#edit_nama_penilai_skp").val($("#edit_pejabat_select2").text());
        $("#edit_nip_penilai_skp").val($("#edit_pejabat_select2").val());
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
        $("#edit_nama_atasan_skp").val($("#edit_atasan_pejabat_select2").text());
        $("#edit_nip_atasan_skp").val($("#edit_atasan_pejabat_select2").val());
        $
    });

</script>
