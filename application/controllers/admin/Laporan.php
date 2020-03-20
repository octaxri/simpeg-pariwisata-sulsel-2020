<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Admin_controller {

    public function riwayatHidup()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => '1234354875676423'));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => '1234354875676423'));
        $keterangan_lainnya = $this->crud->gd('keterangan_lainnya', array('nip' => '1234354875676423'));
        $data = array(  'title'     => 'Laporan / Daftar Riwayat Hidup',
        'data_pegawai' => $data_pegawai,
        'data_alamat' => $data_alamat,
        'keterangan_lainnya' => $keterangan_lainnya,
        'isi'       => 'admin/laporan/riwayat_hidup');
        $this->load->view('admin/_layout/wrapper', $data);
    }


    public function cetak($id = NULL)
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd("data_pegawai", array('nip' => $id));
        $data_alamat = $this->crud->gd("data_alamat", array('nip' => $id));
        $data_keteranganlainnya = $this->crud->gd("keterangan_lainnya", array('nip' => $id));
        $data_keteranganbadan = $this->crud->gd("keterangan_badan", array('nip' => $id));

        $data_cpns = $this->crud->gd("riwayat_pegawai_cpns", array('nip' => $id));
        $data_pns = $this->crud->gd("riwayat_pegawai_pns", array('nip' => $id));
        $data_jabatan_terakhir = $this->crud->gdlo("riwayat_jabatan", array('nip' => $id), 1,0,'tanggal DESC');
        $data_pendidikan_terakhir = $this->crud->gd("riwayat_pendidikan", array('nip' => $id, 'saat_ini' => '1'));
        
        $riwayat_jabatan = $this->crud->gwo("riwayat_jabatan", array('nip' => $id), 'tanggal ASC');
        $riwayat_pendidikan = $this->crud->gwo("riwayat_pendidikan", array('nip' => $id), 'tahun_lulus ASC');
        $riwayat_diklat = $this->crud->gwo("riwayat_diklat", array('nip' => $id), 'tahun ASC');
        $riwayat_mutasi = $this->crud->gwo("riwayat_mutasi", array('nip' => $id), 'tanggal ASC');
        $data_pasangan = $this->crud->gw("data_pasangan", array('nip' => $id));
        $data_anak = $this->crud->gw("data_anak", array('nip' => $id));

        $data = array(  'title'     => 'Laporan / Daftar Riwayat Hidup',
        'data_pegawai' => $data_pegawai,
        'data_alamat' => $data_alamat,
        'data_keteranganlainnya' => $data_keteranganlainnya,
        'data_keteranganbadan' => $data_keteranganbadan,
        'data_cpns' => $data_cpns,
        'data_pns' => $data_pns,
        'data_pendidikan_terakhir' => $data_pendidikan_terakhir,
        'data_jabatan_terakhir' => $data_jabatan_terakhir,
        'data_anak' => $data_anak,
        'data_pasangan' => $data_pasangan,
        'riwayat_mutasi' => $riwayat_mutasi,
        'riwayat_diklat' => $riwayat_diklat,
        'riwayat_pendidikan' => $riwayat_pendidikan,
        'riwayat_jabatan' => $riwayat_jabatan,
        'isi'       => 'admin/laporan/cetak_riwayat');
        $this->load->view('admin/laporan/cetak_riwayat', $data);
    }


    public function unitKerja()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_skpd =  $this->crud->qr('SELECT satuan_kerja, count(*) as total FROM data_pegawai ORDER BY satuan_kerja');

        $data = array(  'title'     => 'Laporan / Daftar Bidang/Bagian',
        'data_skpd' => $data_skpd,
        'isi'       => 'admin/laporan/unit_kerja');
        $this->load->view('admin/_layout/wrapper', $data);
    }


    public function namaPejabat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Laporan / Daftar Nama Pejabat',
        'isi'       => 'admin/laporan/nama_pejabat');
        $this->load->view('admin/_layout/wrapper', $data);
    }


    public function jenisKelamin()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Laporan / Rekap Jenis Kelamin',
        'isi'       => 'admin/laporan/jenis_kelamin');
        $this->load->view('admin/_layout/wrapper', $data);
    }


    public function golongan()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Laporan / Rekap Golongan',
        'isi'       => 'admin/laporan/rekap_golongan');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function filterAjax(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('identifier', 'Field Nama Pegawai/NIP', 'trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);

            $data = $this->crud->gd("data_pegawai", array('nip' => $input['identifier']));
            $data_pegawai = $this->crud->gd("data_pegawai", array('nip' => $input['identifier']));
            $data_alamat = $this->crud->gd("data_alamat", array('nip' => $input['identifier']));
            $data_keteranganlainnya = $this->crud->gd("keterangan_lainnya", array('nip' => $input['identifier']));
            $data_keteranganbadan = $this->crud->gd("keterangan_badan", array('nip' => $input['identifier']));

            $data_cpns = $this->crud->gd("riwayat_pegawai_cpns", array('nip' => $input['identifier']));
            $data_pns = $this->crud->gd("riwayat_pegawai_pns", array('nip' => $input['identifier']));
            $data_jabatan_terakhir = $this->crud->gdlo("riwayat_jabatan", array('nip' => $input['identifier']), 1,0,'tanggal DESC');
            $data_pendidikan_terakhir = $this->crud->gd("riwayat_pendidikan", array('nip' => $input['identifier'], 'saat_ini' => '1'));
            
            $riwayat_jabatan = $this->crud->gwo("riwayat_jabatan", array('nip' => $input['identifier']), 'tanggal ASC');
            $riwayat_pendidikan = $this->crud->gwo("riwayat_pendidikan", array('nip' => $input['identifier']), 'tahun_lulus ASC');
            $riwayat_diklat = $this->crud->gwo("riwayat_diklat", array('nip' => $input['identifier']), 'tahun ASC');
            $riwayat_mutasi = $this->crud->gwo("riwayat_mutasi", array('nip' => $input['identifier']), 'tanggal ASC');
            $data_pasangan = $this->crud->gw("data_pasangan", array('nip' => $input['identifier']));
            $data_anak = $this->crud->gw("data_anak", array('nip' => $input['identifier']));

            
            if (count($data) > 0 ) {
                return $this->response([
                    'success'   => TRUE,
                    'template'      => $this->riwayat_template(
                        $data,$data_keteranganbadan,$data_keteranganlainnya,$data_alamat,
                        $data_cpns,$data_pns,$data_jabatan_terakhir,$data_pendidikan_terakhir,
                        $riwayat_jabatan,$riwayat_pendidikan,$riwayat_diklat,$riwayat_mutasi,$data_pasangan,$data_anak)
                ]);
            }else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function riwayat_template(
                        $data_pegawai,$data_keteranganbadan,$data_keteranganlainnya,$data_alamat,
                        $data_cpns,$data_pns,$data_jabatan_terakhir,$data_pendidikan_terakhir,
                        $riwayat_jabatan,$riwayat_pendidikan,$riwayat_diklat,$riwayat_mutasi,$data_pasangan,$data_anak){

        if ($data_pegawai->gambar != '')
            $data_pegawai->gambar = upload_url('fotopegawai').$data_pegawai->gambar;
        else
            $data_pegawai->gambar = upload_url('fotopegawai').'no_image.jpg';

        $date = $data_pegawai->tanggal_lahir;
        $date = str_replace('/', '-', trim($date, '"'));
        // var_dump($data_jabatan_terakhir);
        $akhir = new DateTime(date('m/d/Y'));
        $awal = new DateTime($date);
        // var_dump($awal);
        // die();
        $usia = $akhir->diff($awal)->format("%y Tahun");
        $temp_for1 = '';
        $temp_for2 = '';
        $temp_for3 = '';
        $temp_for4 = '';
        $temp_for5 = '';
        $temp_for6 = '';

        $template = '
        <div class="panel">
            <div class="panel-heading right">
                <a type="" href="'.admin_url("laporan/Cetak/".$data_pegawai->nip).'" class="btn btn-default"><i class="fa fa-print"></i>Cetak</a>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                        <h4>BIODATA</h4>
                        <div class="row">
                            <div class="col-md-8"> 
                                <table class="table table-bordered table-responsive"">
                                    <tbody>
                                        <tr>
                                            <td width="47%">Nama Lengkap</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->nama_lengkap.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">NIP</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->nip.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Gelar Depan</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->gelar_depan.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Gelar Belakang</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->gelar_belakang.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Tanggal Lahir</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->tanggal_lahir.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Tempat Lahir</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->tempat_lahir.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Usia</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$usia.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Jenis Kelamin</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->jenis_kelamin.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Status Pernikahan</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->status_pernikahan.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Agama</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->agama.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">E-Mail</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_pegawai->email.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Telepon</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_alamat->telepon.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">HP</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_alamat->hp.'</td>
                                        </tr>
                                        <tr>
                                            <td width="47%">Alamat</td>
                                            <td width="3%">:</td>
                                            <td width="57%">'.$data_alamat->alamat.'</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                            <div class="col-md-2 text-center"> 
                                <img src="'.$data_pegawai->gambar.'" style="width:200px; max-height:250px;"> 
                            </div>
                        </div>
                        <h4>IDENTITAS LAINNYA</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive">
                                    <tbody>
                                    <tr>
                                        <td width="30%">NIK</td>
                                        <td width="2%">:</td>
                                        <td width="70%">24253534646</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Golongan Darah</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.$data_pegawai->golongan_darah.'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No. NPWP</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.$data_keteranganlainnya->no_npwp.'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No. SKCK</td>
                                        <td width="2%">:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No. Taspen</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.$data_keteranganlainnya->no_taspen.'</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4>PENGANGKATAN SEBAGAI CPNS</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive">
                                    <tbody>
                                    <tr>
                                        <td width="30%">No. SK Pengangkatan CPNS</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_cpns) ? $data_cpns->no_sk : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Pejabat yang Menetapkan</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_cpns) ? $data_cpns->pejabat : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Pangkat/Golongan/Ruang </td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_cpns) ? $data_cpns->pangkat : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">TMT CPNS</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_cpns) ? $data_cpns->tanggal_sk : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Masa Kerja</td>
                                        <td width="2%">:</td>
                                        <td width="68%">-</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">TMT Melaksanakan Tugas</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_cpns) ? $data_cpns->tanggal_tmt : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No. STTPP (Prajabatan)  </td>
                                        <td width="2%">:</td>
                                        <td width="68%">-</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4>PENGANGKATAN SEBAGAI PNS</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive">
                                    <tbody>
                                    <tr>
                                        <td width="30%">No. SK Pengangkatan CPNS</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_pns) ? $data_pns->no_sk : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal SK PNS</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_pns) ? $data_pns->tanggal_sk : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Pejabat yang Menetapkan</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_pns) ? $data_pns->pejabat : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Pangkat/Golongan/Ruang  </td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_pns) ? $data_pns->pangkat : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">TMT PNS</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_pns) ? $data_pns->tanggal_tmt : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Sumpah / Janji PNS</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_pns) ? $data_pns->sumpah : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Pengambil Sumpah</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_pns) ? $data_pns->pengambil_sumpah : "-").'</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4>PANGKAT TERAKHIR</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive">
                                    <tbody>
                                    <tr>
                                        <td width="30%">Pangkat</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.$data_pegawai->jenis_pangkat.'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">TMT Golongan</td>
                                        <td width="2%">:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal SK</td>
                                        <td width="2%">:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No SK</td>
                                        <td width="2%">:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Penandatangan SK</td>
                                        <td width="2%">:</td>
                                        <td>-</td>
                                    </tr>
                                    </tbody>
                                </table>
                            <div>
                        </div>
                        <h4>JABATAN SAAT INI</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive">
                                    <tbody>
                                    <tr>
                                        <td width="30%">Eselon</td>
                                        <td width="2%">:</td>
                                        <td width="70%">'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->eselon : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Jenis Jabatan</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->jenis : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama Jabatan</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->nama_jabatan : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Instansi Induk</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->instansi_induk : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Bidang/Bagian</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->unor_induk : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Subbidang/Seksi</td>
                                        <td width="2%">:</td>
                                        <td width="68%">'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->unor : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">TMT Jabatan</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->tmt_jabatan : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal SK</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->tanggal : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nomor SK</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->nomor : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Penandatangani SK</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_jabatan_terakhir) ? $data_jabatan_terakhir->pejabat : "-").'</td>
                                    </tr>
                                    </tbody>
                                </table>
                            <div>
                        </div>
                        <h4>PENDIDIKAN TERAKHIR</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive">
                                    <tbody>
                                    <tr>
                                        <td width="30%">Jenjang Pendidikan</td>
                                        <td width="2%">:</td>
                                        <td width="70%">'.(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->tingkat : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama Sekolah/Universitas</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->nama_sekolah : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Program Studi</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->nama_prodi : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Jurusan</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->nama_jurusan : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No. Ijazah</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->no_ijazah : "-").'</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tahun Lulus</td>
                                        <td width="2%">:</td>
                                        <td>'.(($data_pendidikan_terakhir) ? $data_pendidikan_terakhir->tahun_lulus : "-").'</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4>RIWAYAT JABATAN</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive ">
                                    <thead>
                                    <tr>
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Subbidang/Seksi </th>
                                        <th rowspan="2">Nama Jabatan</th>
                                        <th rowspan="2">Eselon</th>
                                        <th rowspan="2">TMT Jabatan</th>
                                        <th colspan="3" class="text-center">Surat Keputusan</th>
                                    </tr>
                                    <tr>
                                        <th>Pejabat</th>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>';

                                        $i=1; foreach($riwayat_jabatan as $riwayat_jabatan) :
                                            $temp_for1 = $temp_for1.
                                            '<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$riwayat_jabatan->unor.'</td>
                                                <td>'.$riwayat_jabatan->nama_jabatan.'</td>
                                                <td>'.$riwayat_jabatan->eselon.'</td>
                                                <td>'.$riwayat_jabatan->tmt_jabatan.'</td>
                                                <td>'.$riwayat_jabatan->pejabat.'</td>
                                                <td>'.$riwayat_jabatan->nomor.'</td>
                                                <td>'.$riwayat_jabatan->tanggal.'</td>
                                            </tr>';
                                        $i++; endforeach;

                                    $temp1 = '</tbody>
                                </table>
                            </div>
                        </div>
                        
                        <h4>RIWAYAT PENDIDIKAN</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive ">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tingkat </th>
                                        <th>Nama Instansi</th>
                                        <th>Jurusan</th>
                                        <th>No. Ijazah</th>
                                        <th>Tahun Lulus</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
                                        $i=1; foreach($riwayat_pendidikan as $riwayat_pendidikan) :
                                            $temp_for2 = $temp_for2.'<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$riwayat_pendidikan->tingkat.'</td>
                                                <td>'.$riwayat_pendidikan->nama_sekolah.'</td>
                                                <td>'.$riwayat_pendidikan->nama_jurusan.'</td>
                                                <td>'.$riwayat_pendidikan->no_ijazah.'</td>
                                                <td>'.$riwayat_pendidikan->tahun_lulus.'</td>
                                            </tr>';
                                        $i++; endforeach;

                                    $temp2 = '</tbody>
                                </table>
                            </div>
                        </div>
                        <h4>RIWAYAT DIKLAT & PELATIHAN</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive ">
                                    <thead>
                                    <tr >
                                        <th>No.</th>
                                        <th>Nama Diklat</th>
                                        <th>Jenis Diklat</th>
                                        <th>Jumlah Jam</th>
                                        <th>Penyelenggara</th>
                                        <th>Tempat</th>
                                        <th>Angkatan</th>
                                        <th>Tahun</th>
                                        <th>No. STTP</th>
                                        <th>Tgl. STTP</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
                                        $i=1; foreach($riwayat_diklat as $riwayat_diklat) :
                                            $temp_for3 = $temp_for3.'<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$riwayat_diklat->nama_diklat.'</td>
                                                <td>'.$riwayat_diklat->jenis_diklat.'</td>
                                                <td>'.$riwayat_diklat->jumlah_jam.'</td>
                                                <td>'.$riwayat_diklat->penyelenggara.'</td>
                                                <td>'.$riwayat_diklat->tempat.'</td>
                                                <td>'.$riwayat_diklat->angkatan.'</td>
                                                <td>'.$riwayat_diklat->tahun.'</td>
                                                <td>'.$riwayat_diklat->no_sttp.'</td>
                                                <td>'.$riwayat_diklat->tanggal_sttp.'</td>
                                            </tr>';
                                        $i++; endforeach;
                                    $temp3 = '</tbody>
                                </table>
                            </div>
                        </div>
                        <h4>RIWAYAT MUTASI</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive ">
                                    <thead>
                                    <tr>
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Jabatan </th>
                                        <th rowspan="2">Pangkat </th>
                                        <th rowspan="2">TMT</th>
                                        <th colspan="3" class="text-center">Surat Keputusan</th>
                                    </tr>
                                    <tr>
                                        <th>Pejabat</th>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
                                        $i=1; foreach($riwayat_mutasi as $riwayat_mutasi) :
                                            $temp_for4 = $temp_for4.'<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$riwayat_mutasi->jabatan.'</td>
                                                <td>'.$riwayat_mutasi->pangkat.'</td>
                                                <td>'.$riwayat_mutasi->tmt.'</td>
                                                <td>'.$riwayat_mutasi->pejabat.'</td>
                                                <td>'.$riwayat_mutasi->nomor.'</td>
                                                <td>'.$riwayat_mutasi->tanggal.'</td>
                                            </tr>';
                                        $i++; endforeach;
                                    $temp4 = '</tbody>
                                </table>
                            </div>
                        </div>
                        <h4>DATA SUAMI/ISTRI</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive ">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
                                        <th>Status </th>
                                        <th>Nama</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Tanggal Nikah</th>
                                        <th>Pekerjaan</th>
                                        <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                        $i=1; foreach($data_pasangan as $data_pasangan) :
                                            $temp_for5 = $temp_for5.'<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$data_pasangan->jenis.'</td>
                                                <td>'.$data_pasangan->nama.'</td>
                                                <td>'.$data_pasangan->ttl.'</td>
                                                <td>'.$data_pasangan->tanggal_nikah.'</td>
                                                <td>'.$data_pasangan->pekerjaan.'</td>
                                                <td>'.(($data_pasangan->meninggal == 0) ? "Belum" : "Sudah").'</td>
                                            </tr>';
                                        $i++; endforeach;
                                    $temp5 = '</tbody>
                                </table>
                            </div>
                        </div>
                        <h4>DATA ANAK</h4>
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="table table-bordered table-responsive ">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Pekerjaan</th>
                                        <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                        $i=1; foreach($data_anak as $data_anak) :
                                            $temp_for6 = $temp_for6.'<tr>
                                                <td>'.$i.'</td>
                                                <td>'.$data_anak->nama.'</td>
                                                <td>'.$data_anak->ttl.'</td>
                                                <td>'.$data_anak->pekerjaan.'</td>
                                                <td>'.(($data_pasangan->meninggal == 0) ? "Belum" : "Sudah").'</td>
                                            </tr>';
                                        $i++; endforeach;
                                    $temp6 = '</tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        ';

        return $template.$temp_for1.$temp1.$temp_for2.$temp2.$temp_for3.$temp3.$temp_for4.$temp4.$temp_for5.$temp5.$temp_for6.$temp6;
    }

    public function response($data)
    {
        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
    }
}
