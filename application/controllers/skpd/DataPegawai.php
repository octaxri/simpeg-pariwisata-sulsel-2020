<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawai extends MY_Controller {

    public function index(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_agama = $this->crud->ga('data_agama');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->ga('data_unit');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_golongan = $this->crud->ga('data_golongan');
        $data_eselon = $this->crud->gao('data_eselon', 'id_eselon ASC');

        $data = array(  'title'     => 'Data Pegawai',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'data_agama'=> $data_agama,
        'data_pendidikan'=> $data_pendidikan,
        'data_satker'=> $data_satker,
        'data_unit'=> $data_unit,
        'data_jabatan'=> $data_jabatan,
        'data_jenisjabatan'=> $data_jenisjabatan,
        'data_golongan'=> $data_golongan,
        'data_eselon'=> $data_eselon,
        'isi'       => 'skpd/data_pegawai/beranda');
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function tambah(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_agama = $this->crud->ga('data_agama');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->gw('data_unit', array('nama_satker' => $this->session->fullname));
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_jenispegawai = $this->crud->ga('data_jenispegawai');
        $data_statuspegawai = $this->crud->ga('data_statuspegawai');
        $data_kedudukanpegawai = $this->crud->ga('data_kedudukanpegawai');
        $data_golongan = $this->crud->gao('data_golongan', '');
        $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');
        $data_provinsi = $this->crud->gao('data_provinsi', 'nama_provinsi ASC');
        $data_kabupaten = $this->crud->gao('data_kabupaten', 'nama_kabupaten ASC');
        $data_kecamatan = $this->crud->gao('data_kecamatan', 'nama_kecamatan ASC');
        $data_kelurahan = $this->crud->gao('data_kelurahan', 'nama_kelurahan ASC');


        $data = array(
            'title'     => 'Data Pegawai / Tambah Data Pegawai',
            'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
            'data_agama'=> $data_agama,
            'data_pendidikan'=> $data_pendidikan,
            'data_satker'=> $data_satker,
            'data_unit'=> $data_unit,
            'data_jabatan'=> $data_jabatan,
            'data_kedudukanpegawai'=> $data_kedudukanpegawai,
            'data_jenispegawai'=> $data_jenispegawai,
            'data_statuspegawai'=> $data_statuspegawai,
            'data_jenisjabatan'=> $data_jenisjabatan,
            'data_golongan'=> $data_golongan,
            'data_provinsi'=> $data_provinsi,
            'data_kabupatem'=> $data_kabupaten,
            'data_kelurahan'=> $data_kelurahan,
            'data_kecamatan'=> $data_kecamatan,
            'data_eselon'=> $data_eselon,
            'isi'       => 'skpd/data_pegawai/tambah'
        );
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function tambahAjax(){
        $data = array(  'title'     => 'Data Pegawai / Tambah Data Pegawai',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'isi'       => 'skpd/data_pegawai/tambah');

        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red; font-size: 0.7em">', '</i>');
        $valid->set_rules('nip', 'Field NIP', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('niplama', 'Field NIP Lama', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('name_lengkap', 'Field Nama Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('email', 'Field Email', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('password', 'Field Password','required|min_length[4]|max_length[32]|strip_tags');
        $valid->set_rules('gelar_depan', 'Field Gelar Depan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('gelar_belakang', 'Field Gelar Belakang', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tempat_lahir', 'Field Tempat Lahir', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tanggal_lahir', 'Field Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kelamin', 'Field Jenis Kelamin', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('agama', 'Field agama', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('golongan_darah', 'Field Golongan Darah', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('rhesus', 'Field Golongan Darah', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('status_pernikahan', 'Field Status Pernikahan', 'required|trim|strip_tags|htmlspecialchars');

        $valid->set_rules('satuan_kerja', 'Field Jenis Pangkat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('unit_kerja', 'Field Jenis Pangkat', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_jabatan', 'Field Nama Jabatan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_pangkat', 'Field Jenis Pangkat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_jabatan', 'Field Nama Jabatan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('status_kepegawaian', 'Field Status Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kedudukan_kepegawaian', 'Field Kedudukan Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kepegawaian', 'Field Jenis Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('eselon', 'Field Eselon', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('id_pangkat', 'Field id Pangkat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tmt_jabatan', 'Field TMT Jabatant', 'required|trim|strip_tags|htmlspecialchars');

        $valid->set_rules('alamat', 'Field Alamat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('rt', 'Field RT', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('rw', 'Field Rw', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('provinsi', 'Field Provinsi', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kab', 'Field Kabupaten/Kota', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kec', 'Field Kecamatan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kel', 'Field Kelurahan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kode_pos', 'Field Kode Pos', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('telepon', 'Field Telepon', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('hp', 'Field Handphone', 'trim|strip_tags|htmlspecialchars');

        $valid->set_rules('tinggi_badan', 'Field Tinggi Badan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('berat_badan', 'Field Berat Badan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_ktp', 'Field No.KTP', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_karpeg', 'Field No.KARPEG', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_askes', 'Field No.ASKES', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_taspen', 'Field No.TASPEN', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_karis', 'Field No.KARIS/KARSU', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_npwp', 'Field No.NPWP', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_korpri', 'Field No.KORPRI', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('bahasa', 'Field Bahasa', 'trim|strip_tags|htmlspecialchars');

        //pendidikan
        $valid->set_rules('jenjang_pendidikan', 'Field Jenjang Pendidikan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_prodi', 'Field Nama Program Studi', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_jurusan', 'Field Nama Jurusan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_sekolah', 'Field Nama Sekolah', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_ijazah', 'Field No Ijazah', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tahun_lulus', 'Field Tahun Lulus', 'required|trim|strip_tags|htmlspecialchars');


        if ($valid->run() === TRUE)
        {
            
            $input = $this->input->post(NULL, TRUE);


            // Mekanisme upload gambar
            $gambar = upload_image('gambar', 'tambah', 'fotopegawai', '', $data);
            // Masuk ke database

            if ($gambar !== FALSE)
            {
                $data_pegawai = array(
                    'nip'               => $input['nip'],
                    'niplama'               => $input['niplama'],
                    'nama_lengkap'      => $input['name_lengkap'],
                    'email'             => $input['email'],
                    'password'          => do_hash($input['password']),
                    'gelar_depan'       => $input['gelar_depan'],
                    'gelar_belakang'    => $input['gelar_belakang'],
                    'tempat_lahir'      => $input['tempat_lahir'],
                    'tanggal_lahir'     => $input['tanggal_lahir'],
                    'jenis_kelamin'     => $input['jenis_kelamin'],
                    'agama'             => $input['agama'],
                    'golongan_darah'    => $input['golongan_darah'],
                    'rhesus'            => $input['rhesus'],
                    'status_pernikahan' => $input['status_pernikahan'],
                    'status_kepegawaian'=> $input['status_kepegawaian'],
                    'jenis_kepegawaian' => $input['jenis_kepegawaian'],
                    'kedudukan_kepegawaian'=> $input['kedudukan_kepegawaian'],
                    'jenis_pangkat'     => $input['jenis_pangkat'],
                    'id_pangkat'     => $input['id_pangkat'],
                    'eselon'            => $input['eselon'],
                    'satuan_kerja'      => $input['satuan_kerja'],
                    'unit_kerja'      => $input['unit_kerja'],
                    'jenis_jabatan'      => $input['jenis_jabatan'],
                    'nama_jabatan'      => $input['nama_jabatan'],
                    'tmt_jabatan'      => $input['tmt_jabatan'],
                    'gambar'            => $gambar,
                    'status'            => '1',
                    'iat'               => date('Y-m-d H:i:s'),
                );
                $data_alamat = array(
                    'nip'    => $input['nip'],
                    'alamat' => $input['alamat'],
                    'rt' => $input['rt'],
                    'rw' => $input['rw'],
                    'provinsi' => $input['provinsi'],
                    'kab' => $input['kab'],
                    'kec' => $input['kec'],
                    'kel' => $input['kel'],
                    'kode_pos' => $input['kode_pos'],
                    'telepon' => $input['telepon'],
                    'hp' => $input['hp']
                );
                $keterangan_badan = array(
                    'nip'               => $input['nip'],
                    'tinggi_badan'               => $input['tinggi_badan'],
                    'berat_badan'               => $input['berat_badan']

                );
                $input['bahasa'] = implode(',', $input['bahasa']);
                $keterangan_lainnya = array(
                    'nip'               => $input['nip'],
                    'bahasa'               => $input['bahasa'],
                    'no_ktp'               => $input['no_ktp'],
                    'no_karpeg'               => $input['no_karpeg'],
                    'no_askes'               => $input['no_askes'],
                    'no_taspen'               => $input['no_taspen'],
                    'no_karis'               => $input['no_karis'],
                    'no_npwp'               => $input['no_npwp'],
                    'no_korpri'               => $input['no_korpri']

                );

                $riwayat_pendidikan = array(
                    'nip'               => $input['nip'],
                    'nama_lengkap'          => $input['name_lengkap'],
                    'tingkat'               => $input['jenjang_pendidikan'],
                    'nama_prodi'               => $input['nama_prodi'],
                    'nama_jurusan'               => $input['nama_jurusan'],
                    'nama_sekolah'               => $input['nama_sekolah'],
                    'no_ijazah'               => $input['no_ijazah'],
                    'tahun_lulus'               => $input['tahun_lulus'],
                    'admin'               => $this->session->fullname,
                    'iat'               => date('Y-m-d H:i:s'),
                    'saat_ini'               => '1'
                );

                $data_id = acak_id('users', 'id_user');
                $data = array(
                    'id_user'           => $data_id['id'],
                    'fullname'          => $input['name_lengkap'],
                    'username'          => $input['nip'],
                    'password'          => do_hash($input['password']),
                    'email'             => $input['email'],
                    'notelp'            => $input['telepon'],
                    'akses_level'       => 'pegawai',
                    'iat'               => date('Y-m-d H:i:s')
                );


                $this->crud->i('data_pegawai', $data_pegawai);
                $this->crud->i('data_alamat', $data_alamat);
                $this->crud->i('keterangan_badan', $keterangan_badan);
                $this->crud->i('keterangan_lainnya', $keterangan_lainnya);
                $this->crud->i('riwayat_pendidikan', $riwayat_pendidikan);

                $detail = $this->crud->gd('data_pegawai', array('nip' => $data_pegawai['nip']));
                if ($detail) {
                    $this->crud->i('users', $data);
                    $detail_user = $this->crud->gd('users', array('username' => $data_pegawai['nip']));
                    if ($detail_user) {
                        $this->session->set_flashdata('sukses', 'Data Pegawai berhasil ditambah.');
                        redirect(skpd_url('DataPegawai/profil/').$input['nip']);
                    }else{
                        $this->session->set_flashdata('gagal', 'Data Pegawai gagal ditambah. '.validation_errors());
                        redirect(skpd_url('pegawai/tambah'));
                        // $this->load->view('skpd/_layout/wrapper', $data);
                    }

                } else  {
                    $this->session->set_flashdata('gagal', 'Data Pegawai gagal ditambah.');
                    redirect(skpd_url('pegawai/tambah'));
                    // $this->load->view('skpd/_layout/wrapper', $data);

                }
            }else{
                $this->session->set_flashdata('gagal', 'Data Pegawai gagal ditambah, terdapat kesalahan saat mengupload foto pegawai, pastikan berukuran 3x4 dan tidak melebihi 1MB');
                redirect(skpd_url('pegawai/tambah'));
            }
        } else {
            // echo "false";
            // die();
            $this->session->set_flashdata('gagal', 'Data Pegawai gagal ditambah.');
            // $this->load->view('skpd/_layout/wrapper', $data);
            // $this->load->view('skpd/_layout/wrapper', $data);
            redirect(skpd_url('pegawai/tambah'));
        }
    }

    public function edit($nip = NULL){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => $nip));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => $nip));
        $data_keteranganlainnya = $this->crud->gd('keterangan_lainnya', array('nip' => $nip));
        $data_keteranganbadan = $this->crud->gd('keterangan_badan', array('nip' => $nip));

        $data_agama = $this->crud->ga('data_agama');
        $data_provinsi = $this->crud->ga('data_provinsi');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->ga('data_unit');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_statuspegawai = $this->crud->ga('data_statuspegawai');
        $data_jenispegawai = $this->crud->ga('data_jenispegawai');
        $data_kedudukanpegawai = $this->crud->ga('data_kedudukanpegawai');
        $data_golongan = $this->crud->ga('data_golongan');
        $data_eselon = $this->crud->ga('data_eselon');

        $data = array(
            'title'     => 'Data Pegawai / Edit Data Pegawai',
            'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
            'data_agama'=> $data_agama,
            'data_pendidikan'=> $data_pendidikan,
            'data_satker'=> $data_satker,
            'data_unit'=> $data_unit,
            'data_jabatan'=> $data_jabatan,
            'data_jenisjabatan'=> $data_jenisjabatan,
            'data_jenispegawai'=> $data_jenispegawai,
            'data_statuspegawai'=> $data_statuspegawai,
            'data_kedudukanpegawai'=> $data_kedudukanpegawai,
            'data_provinsi'=> $data_provinsi,
            'data_golongan'=> $data_golongan,
            'data_eselon'=> $data_eselon,
            'data_pegawai'=> $data_pegawai,
            'data_alamat'=> $data_alamat,
            'data_keteranganbadan'=> $data_keteranganbadan,
            'data_keteranganlainnya'=> $data_keteranganlainnya,
            'isi'       => 'skpd/data_pegawai/edit'
        );
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function editAjax($nip = NULL){
        $data = array(
            'title'     => 'Data Pegawai / Edit Data Pegawai',
            'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
            'isi'       => 'skpd/data_pegawai/edit'
        );

        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red; font-size: 0.7em">', '</i>');
        $valid->set_rules('nip', 'Field NIP', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('name_lengkap', 'Field Nama Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('email', 'Field Email', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('password', 'Field Password','min_length[4]|max_length[128]|strip_tags');
        $valid->set_rules('gelar_depan', 'Field Gelar Depan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('gelar_belakang', 'Field Gelar Belakang', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tempat_lahir', 'Field Tempat Lahir', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tanggal_lahir', 'Field Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kelamin', 'Field Jenis Kelamin', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('agama', 'Field agama', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('golongan_darah', 'Field Golongan Darah', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('rhesus', 'Field Golongan Darah', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('status_pernikahan', 'Field Status Pernikahan', 'required|trim|strip_tags|htmlspecialchars');        $valid->set_rules('status_kepegawaian', 'Field Status Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kedudukan_kepegawaian', 'Field Kedudukan Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kepegawaian', 'Field Jenis Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('eselon', 'Field Eselon', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_pangkat', 'Field Jenis Pangkat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('id_pangkat', 'Field id Pangkat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('satuan_kerja', 'Field Satuan Kerja', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('unit_kerja', 'Field Unit Kerja', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_jabatan', 'Field Jenis Jabatan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_jabatan', 'Field Nama Jabatan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tmt_jabatan', 'Field TMT Jabatant', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('alamat', 'Field Alamat', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('rt', 'Field RT', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('rw', 'Field Rw', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('provinsi', 'Field Provinsi', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kab', 'Field Kabupaten/Kota', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kec', 'Field Kecamatan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kel', 'Field Kelurahan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kode_pos', 'Field Kode Pos', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('telepon', 'Field Telepon', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('hp', 'Field Handphone', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tinggi_badan', 'Field Tinggi Badan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('berat_badan', 'Field Berat Badan', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_ktp', 'Field No.KTP', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_karpeg', 'Field No.KARPEG', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_askes', 'Field No.ASKES', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_taspen', 'Field No.TASPEN', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_karis', 'Field No.KARIS/KARSU', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_npwp', 'Field No.NPWP', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_korpri', 'Field No.KORPRI', 'trim|strip_tags|htmlspecialchars');
        // var_dump($_POST['jenis_pangkat']);
        // die();
        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);

            if ($_FILES['gambar']['name'] == NULL) {
                $data_pegawai = array(
                    'nip'               => $input['nip'],
                    'nama_lengkap'      => $input['name_lengkap'],
                    'email'             => $input['email'],
                    'gelar_depan'       => $input['gelar_depan'],
                    'gelar_belakang'    => $input['gelar_belakang'],
                    'tempat_lahir'      => $input['tempat_lahir'],
                    'tanggal_lahir'     => $input['tanggal_lahir'],
                    'jenis_kelamin'     => $input['jenis_kelamin'],
                    'agama'             => $input['agama'],
                    'golongan_darah'    => $input['golongan_darah'],
                    'rhesus'            => $input['rhesus'],
                    'status_pernikahan' => $input['status_pernikahan'],
                    'status_kepegawaian'=> $input['status_kepegawaian'],
                    'jenis_kepegawaian'=> $input['jenis_kepegawaian'],
                    'kedudukan_kepegawaian'=> $input['kedudukan_kepegawaian'],
                    'subid_subag'       => $_POST['subid_subag'],
                    'jenis_pangkat'     => $input['jenis_pangkat'],
                    'id_pangkat'     => $input['id_pangkat'],
                    'eselon'            => $input['eselon'],
                    'satuan_kerja'      => $input['satuan_kerja'],
                    'unit_kerja'      => $input['unit_kerja'],
                    'jenis_jabatan'      => $input['jenis_jabatan'],
                    'nama_jabatan'      => $input['nama_jabatan'],
                    'tmt_jabatan'      => $input['tmt_jabatan'],
                    'status'            => '1',
                    'iat'               => date('Y-m-d H:i:s')
                );
            }else
            {
                $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => $nip));
                // Mekanisme upload gambar
                $gambar = upload_image('gambar', 'edit', 'fotopegawai', $data_pegawai->gambar, $data);
                // Masuk ke database
                if ($gambar !== FALSE){
                    $data_pegawai = array(
                        'nip'               => $input['nip'],
                        'nama_lengkap'      => $input['name_lengkap'],
                        'email'             => $input['email'],
                        'gelar_depan'       => $input['gelar_depan'],
                        'gelar_belakang'    => $input['gelar_belakang'],
                        'tempat_lahir'      => $input['tempat_lahir'],
                        'tanggal_lahir'     => $input['tanggal_lahir'],
                        'jenis_kelamin'     => $input['jenis_kelamin'],
                        'agama'             => $input['agama'],
                        'golongan_darah'    => $input['golongan_darah'],
                        'rhesus'    => $input['rhesus'],
                        'status_pernikahan' => $input['status_pernikahan'],
                        'status_kepegawaian'=> $input['status_kepegawaian'],
                        'jenis_kepegawaian'=> $input['jenis_kepegawaian'],
                        'kedudukan_kepegawaian'=> $input['kedudukan_kepegawaian'],
                        'jenis_pangkat'     => $input['jenis_pangkat'],
                        'eselon'            => $input['eselon'],
                        'satuan_kerja'      => $input['satuan_kerja'],
                        'unit_kerja'      => $input['unit_kerja'],
                        'jenis_jabatan'      => $input['jenis_jabatan'],
                        'nama_jabatan'      => $input['nama_jabatan'],
                        'tmt_jabatan'      => $input['tmt_jabatan'],
                        'gambar'            => $gambar,
                        'iat'               => date('Y-m-d H:i:s')
                    );
                }
            }

            $data_alamat = array(
                'nip'               => $input['nip'],
                'alamat' => $input['alamat'],
                'rt' => $input['rt'],
                'rw' => $input['rw'],
                'provinsi' => $input['provinsi'],
                'kab' => $input['kab'],
                'kec' => $input['kec'],
                'kel' => $input['kel'],
                'kode_pos' => $input['kode_pos'],
                'telepon' => $input['telepon'],
                'hp' => $input['hp']
            );
            $keterangan_badan = array(
                'nip'               => $input['nip'],
                'tinggi_badan'               => $input['tinggi_badan'],
                'berat_badan'               => $input['berat_badan']
            );
            $keterangan_lainnya = array(
                'nip'               => $input['nip'],
                'no_ktp'               => $input['no_ktp'],
                'no_karpeg'               => $input['no_karpeg'],
                'no_askes'               => $input['no_askes'],
                'no_taspen'               => $input['no_taspen'],
                'no_karis'               => $input['no_karis'],
                'no_npwp'               => $input['no_npwp'],
                'no_korpri'               => $input['no_korpri']
            );

            $this->crud->u('data_pegawai', $data_pegawai, array('nip' => $nip));
            $this->crud->u('data_alamat', $data_alamat, array('nip' => $nip));
            $this->crud->u('keterangan_badan', $keterangan_badan, array('nip' => $nip));
            $this->crud->u('keterangan_lainnya', $keterangan_lainnya, array('nip' => $nip));

            $detail = $this->crud->gd('data_pegawai', array('nip' => $data_pegawai['nip']));
            if ($detail) {
                $this->session->set_flashdata('sukses', 'Data Pegawai berhasil diubah.');
                redirect(skpd_url('DataPegawai'));
            } else {
                $this->session->set_flashdata('gagal', 'Data Pegawai gagal diubah.');
                $this->load->view('skpd/_layout/wrapper', $data);

            }
        } else {

            $this->session->set_flashdata('gagal', 'Data Pegawai gagal diubah.');
            $this->load->view('skpd/_layout/wrapper', $data);
        }
    }

    public function profilNew1($nip = NULL){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => $nip));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => $nip));
        $data_keteranganlainnya = $this->crud->gd('keterangan_lainnya', array('nip' => $nip));
        $data_keteranganbadan = $this->crud->gd('keterangan_badan', array('nip' => $nip));
        $data_pasangan = $this->crud->gw('data_pasangan', array('nip' => $nip));
        $data_anak = $this->crud->gw('data_anak', array('nip' => $nip));
        $data_orangtua = $this->crud->gw('data_orangtua', array('nip' => $nip));

        // riwayat data
        $riwayat_pendidikan = $this->crud->gwo('riwayat_pendidikan', array('nip' => $nip), 'tahun_lulus ASC');
        $riwayat_jabatan = $this->crud->gw('riwayat_jabatan', array('nip' => $nip));
        $riwayat_mutasi = $this->crud->gw('riwayat_mutasi', array('nip' => $nip));
        $riwayat_golongan = $this->crud->gw('riwayat_golongan', array('nip' => $nip));
        $riwayat_diklat = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_diklat1 = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_diklat2 = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_cpns = $this->crud->gw('riwayat_pegawai_cpns', array('nip' => $nip));
        $riwayat_pns = $this->crud->gw('riwayat_pegawai_pns', array('nip' => $nip));
        $riwayat_kursus = $this->crud->gw('riwayat_kursus', array('nip' => $nip));
        $riwayat_penghargaan = $this->crud->gw('riwayat_penghargaan', array('nip' => $nip));
        $riwayat_profesi = $this->crud->gw('riwayat_profesi', array('nip' => $nip));
        $riwayat_unor = $this->crud->gw('riwayat_unor', array('nip' => $nip));
        $riwayat_pemberhentian = $this->crud->gw('riwayat_pemberhentian', array('nip' => $nip));
        $riwayat_angkakredit = $this->crud->gw('riwayat_angkakredit', array('nip' => $nip));
        $riwayat_cuti = $this->crud->gw('riwayat_cuti', array('nip' => $nip));



        $data_agama = $this->crud->ga('data_agama');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->ga('data_unit');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_kedudukanpegawai = $this->crud->ga('data_kedudukanpegawai');
        $data_golongan = $this->crud->ga('data_golongan');
        $data_eselon = $this->crud->ga('data_eselon');


        $data = array(
            'title'     => 'Data Pegawai / Profil Pegawai',
            'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
            'data_agama'=> $data_agama,
            'data_pendidikan'=> $data_pendidikan,
            'data_satker'=> $data_satker,
            'data_unit'=> $data_unit,
            'data_jabatan'=> $data_jabatan,
            'data_jenisjabatan'=> $data_jenisjabatan,
            'data_kedudukanpegawai'=> $data_kedudukanpegawai,
            'data_golongan'=> $data_golongan,
            'data_eselon'=> $data_eselon,
            'data_pegawai'=> $data_pegawai,
            'data_alamat'=> $data_alamat,
            'data_keteranganbadan'=> $data_keteranganbadan,
            'data_keteranganlainnya'=> $data_keteranganlainnya,
            'data_pasangan'=> $data_pasangan,
            'data_anak'=> $data_anak,
            'data_orangtua'=> $data_orangtua,
            'riwayat_pendidikan'=> $riwayat_pendidikan,
            'riwayat_jabatan'=> $riwayat_jabatan,
            'riwayat_mutasi'=> $riwayat_mutasi,
            'riwayat_golongan'=> $riwayat_golongan,
            'riwayat_diklat'=> $riwayat_diklat,
            'riwayat_diklat1'=> $riwayat_diklat1,
            'riwayat_diklat2'=> $riwayat_diklat2,
            'riwayat_pns'=> $riwayat_pns,
            'riwayat_cpns'=> $riwayat_cpns,
            'riwayat_angkakredit'=> $riwayat_angkakredit,
            'riwayat_pemberhentian'=> $riwayat_pemberhentian,
            'riwayat_unor'=> $riwayat_unor,
            'riwayat_profesi'=> $riwayat_profesi,
            'riwayat_penghargaan'=> $riwayat_penghargaan,
            'riwayat_kursus'=> $riwayat_kursus,
            'riwayat_cuti'=> $riwayat_cuti,
            'isi'       => 'skpd/data_pegawai/profil'
        );
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function profil($nip = NULL){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => $nip));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => $nip));
        $data_keteranganlainnya = $this->crud->gd('keterangan_lainnya', array('nip' => $nip));
        $data_keteranganbadan = $this->crud->gd('keterangan_badan', array('nip' => $nip));
        $data_pasangan = $this->crud->gw('data_pasangan', array('nip' => $nip));
        $data_anak = $this->crud->gw('data_anak', array('nip' => $nip));
        $data_orangtua = $this->crud->gw('data_orangtua', array('nip' => $nip));

        // riwayat data
        $riwayat_pendidikan = $this->crud->gwo('riwayat_pendidikan', array('nip' => $nip), 'tahun_lulus DESC');
        $riwayat_jabatan = $this->crud->gw('riwayat_jabatan', array('nip' => $nip));
        $riwayat_mutasi = $this->crud->gw('riwayat_mutasi', array('nip' => $nip));
        $riwayat_golongan = $this->crud->gw('riwayat_golongan', array('nip' => $nip));
        $riwayat_diklat = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_diklat1 = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_diklat2 = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_cpns = $this->crud->gw('riwayat_pegawai_cpns', array('nip' => $nip));
        $riwayat_pns = $this->crud->gw('riwayat_pegawai_pns', array('nip' => $nip));
        $riwayat_kursus = $this->crud->gw('riwayat_kursus', array('nip' => $nip));
        $riwayat_penghargaan = $this->crud->gw('riwayat_penghargaan', array('nip' => $nip));
        $riwayat_profesi = $this->crud->gw('riwayat_profesi', array('nip' => $nip));
        $riwayat_unor = $this->crud->gw('riwayat_unor', array('nip' => $nip));
        $riwayat_pemberhentian = $this->crud->gw('riwayat_pemberhentian', array('nip' => $nip));
        $riwayat_angkakredit = $this->crud->gw('riwayat_angkakredit', array('nip' => $nip));
        $riwayat_cuti = $this->crud->gw('riwayat_cuti', array('nip' => $nip));
        $riwayat_dp3 = $this->crud->gw('riwayat_dp3', array('nip' => $nip));
        $riwayat_skp = $this->crud->gw('riwayat_skp', array('nip' => $nip));




        $data_agama = $this->crud->ga('data_agama');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->ga('data_unit');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_kedudukanpegawai = $this->crud->ga('data_kedudukanpegawai');
        $data_golongan = $this->crud->ga('data_golongan');
        $data_eselon = $this->crud->ga('data_eselon');


        $data = array(
            'title'     => 'Data Pegawai / Profil Pegawai',
            'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
            'data_agama'=> $data_agama,
            'data_pendidikan'=> $data_pendidikan,
            'data_satker'=> $data_satker,
            'data_unit'=> $data_unit,
            'data_jabatan'=> $data_jabatan,
            'data_jenisjabatan'=> $data_jenisjabatan,
            'data_kedudukanpegawai'=> $data_kedudukanpegawai,
            'data_golongan'=> $data_golongan,
            'data_eselon'=> $data_eselon,
            'data_pegawai'=> $data_pegawai,
            'data_alamat'=> $data_alamat,
            'data_keteranganbadan'=> $data_keteranganbadan,
            'data_keteranganlainnya'=> $data_keteranganlainnya,
            'data_pasangan'=> $data_pasangan,
            'data_anak'=> $data_anak,
            'data_orangtua'=> $data_orangtua,
            'riwayat_pendidikan'=> $riwayat_pendidikan,
            'riwayat_jabatan'=> $riwayat_jabatan,
            'riwayat_mutasi'=> $riwayat_mutasi,
            'riwayat_golongan'=> $riwayat_golongan,
            'riwayat_diklat'=> $riwayat_diklat,
            'riwayat_diklat1'=> $riwayat_diklat1,
            'riwayat_diklat2'=> $riwayat_diklat2,
            'riwayat_pns'=> $riwayat_pns,
            'riwayat_cpns'=> $riwayat_cpns,
            'riwayat_angkakredit'=> $riwayat_angkakredit,
            'riwayat_pemberhentian'=> $riwayat_pemberhentian,
            'riwayat_unor'=> $riwayat_unor,
            'riwayat_profesi'=> $riwayat_profesi,
            'riwayat_penghargaan'=> $riwayat_penghargaan,
            'riwayat_kursus'=> $riwayat_kursus,
            'riwayat_cuti'=> $riwayat_cuti,
            'riwayat_skp'=> $riwayat_skp,
            'riwayat_dp3'=> $riwayat_dp3,
            'isi'       => 'skpd/data_pegawai/profil'
        );
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function profilAjax($nip = NULL, $tipe = NULL){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        switch ($tipe)
        {
            case 'data_pasangan':
            $valid->set_rules('jenis', 'Field Jenis', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(  'nip'    => $nip,
                'jenis'       => $input['jenis'],
                'nama'       => $input['nama'],
                'ttl'       => $input['ttl'],
                'pekerjaan'       => $input['pekerjaan'],
                'iat'               => date('Y-m-d H:i:s'));
                $this->crud->i('data_pasangan', $data);
                $detail = $this->crud->gd('data_pasangan', array('nip' => $nip));
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'data_anak':
            $valid->set_rules('status', 'Field Status', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'status'       => $input['status'],
                    'nama'       => $input['nama'],
                    'ttl'       => $input['ttl'],
                    'pekerjaan'       => $input['pekerjaan'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('data_anak', $data);
                    $detail = $this->crud->gd('data_anak', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'data_ortu':
            $valid->set_rules('status', 'Field Status', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(  'nip'    => $nip,
                'status'       => $input['status'],
                'nama'       => $input['nama'],
                'ttl'       => $input['ttl'],
                'pekerjaan'       => $input['pekerjaan'],
                'iat'               => date('Y-m-d H:i:s'));
                $this->crud->i('data_orangtua', $data);
                $detail = $this->crud->gd('data_orangtua', array('nip' => $nip));
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_pendidikan':
            $valid->set_rules('tingkat', 'Field Tingkat', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama_pendidikan', 'Field Nama Pendidikan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama_instansi', ' Field Instansi', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_ijazah', ' Field No. Ijazah', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_lulus', ' Field Tanggal Lulus', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'tingkat'       => $input['tingkat'],
                    'nama_pendidikan'       => $input['nama_pendidikan'],
                    'nama_instansi'       => $input['nama_instansi'],
                    'tanggal_lulus'       => $input['tanggal_lulus'],
                    'no_ijazah'       => $input['no_ijazah'],
                    'iat'               => date('Y-m-d H:i:s')
                );
                $this->crud->i('riwayat_pendidikan', $data);
                $detail = $this->crud->gd('riwayat_pendidikan', array('nip' => $nip));
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_jabatan':
            $valid->set_rules('jenis', 'Field Jenis Jabatan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('kedudukan', 'Field Kedudukan Jabatan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tmt_jabatan', 'Field TMT Jabatan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tmt_pelantikan', 'Field TMT Pelantikan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pejabat', ' Field Jurusan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nomor', ' Field Nomor', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal', ' Field Tanggal', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'jenis'       => $input['jenis'],
                    'kedudukan'       => $input['kedudukan'],
                    'tmt_jabatan'       => $input['tmt_jabatan'],
                    'tmt_pelantikan'       => $input['tmt_pelantikan'],
                    'pejabat'       => $input['pejabat'],
                    'tanggal'       => $input['tanggal'],
                    'nomor'       => $input['nomor'],
                    'iat'               => date('Y-m-d H:i:s')
                );
                $this->crud->i('riwayat_jabatan', $data);

                $detail = $this->crud->gd('riwayat_jabatan', array('nip' => $nip));
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_mutasi':
            $valid->set_rules('jabatan', 'Field Jabatan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pangkat', 'Field Pangkat', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tmt', 'Field TMT', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pejabat', ' Field Jurusan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nomor', ' Field Nomor', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal', ' Field Tanggal', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'jabatan'       => $input['jabatan'],
                    'tmt'       => $input['tmt'],
                    'pangkat'       => $input['pangkat'],
                    'pejabat'       => $input['pejabat'],
                    'tanggal'       => $input['tanggal'],
                    'nomor'       => $input['nomor'],
                    'iat'               => date('Y-m-d H:i:s')
                );
                $this->crud->i('riwayat_mutasi', $data);
                $detail = $this->crud->gd('riwayat_mutasi', array('nip' => $nip));
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_golongan':
            $valid->set_rules('golongan', 'Field Golongan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nomor_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', 'Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tmt_golongan', ' Field TMT Golongan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nomor_bkn', ' Field Nomor BKN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_bkn', ' Field Tanggal BKN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('jenis_kp', ' Field Jenis KP', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('masa_kerja_thn', ' Field Masa Kerja Golongan Tahun', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('masa_kerja_bln', ' Field Masa Kerja Golongan Bulan', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'golongan'       => $input['golongan'],
                    'tmt_golongan'       => $input['tmt_golongan'],
                    'nomor_sk'       => $input['nomor_sk'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'tmt_golongan'       => $input['tmt_golongan'],
                    'tanggal_bkn'       => $input['tanggal_bkn'],
                    'nomor_bkn'       => $input['nomor_bkn'],
                    'jenis_kp'       => $input['jenis_kp'],
                    'masa_kerja_thn'       => $input['masa_kerja_thn'],
                    'masa_kerja_bln'       => $input['masa_kerja_bln'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('riwayat_golongan', $data);
                    $detail = $this->crud->gd('riwayat_golongan', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_diklat':
            $valid->set_rules('nama_diklat', 'Field Nama DIklat', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('jumlah_jam', 'Field Jumlah Jam', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('penyelenggara', 'Field Penyelenggara', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tempat', ' Field Tempat', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('angkatan', ' Field Angkatan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tahun', ' Field Tahun', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sttp', ' Field No STTP', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sttp', ' Field Tanggal STTP', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('jenis_diklat', ' Field Jenis Diklat', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'nama_diklat'       => $input['nama_diklat'],
                    'penyelenggara'       => $input['penyelenggara'],
                    'jumlah_jam'       => $input['jumlah_jam'],
                    'angkatan'       => $input['angkatan'],
                    'tempat'       => $input['tempat'],
                    'jenis_diklat'       => $input['jenis_diklat'],
                    'tanggal_sttp'       => $input['tanggal_sttp'],
                    'no_sttp'       => $input['no_sttp'],
                    'tahun'       => $input['tahun'],
                    'iat'               => date('Y-m-d H:i:s')
                );
                $this->crud->i('riwayat_diklat', $data);
                $detail = $this->crud->gd('riwayat_diklat', array('nip' => $nip));
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_kepegawaian':
            $valid->set_rules('nama_statuskepegawaian', 'Field Status Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama_pejabat', 'Field Pejabat yang Menetapkan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field No.SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', ' Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pangkat', ' Field Pangkat/Gol.Ruang', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tmt', ' Field TMT', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('instansi', ' Field Lokasi Kerj', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('sub', ' Field Kab/Kota/Sub Inst', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('unit_kerja', ' Field Unit Kerja', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nomor_bkn', ' Field Kab/Kota/Sub Inst', 'trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_bkn', ' Field Tanggal BKN', 'trim|strip_tags|htmlspecialchars');
            $valid->set_rules('sumpah', ' Field Sumpah Kepegawaian', 'trim|strip_tags|htmlspecialchars');
            $valid->set_rules('pejabat_sumpah', ' Field Yang Mengambil Sumpah', 'trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nomor_berita_acara', ' Field Nomor Berita Acara', 'trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_berita_acara', ' Field Tanggal Berita Acara', 'trim|strip_tags|htmlspecialchars');


            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'no_sk'       => $input['no_sk'],
                    'pejabat'       => $input['nama_pejabat'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'pangkat'       => $input['pangkat'],
                    'tanggal_tmt'       => $input['tmt'],
                    'instansi'       => $input['instansi'],
                    'sub_instansi'       => $input['sub'],
                    'unit_kerja'       => $input['unit_kerja'],
                    'iat'               => date('Y-m-d H:i:s')
                );

                //Mengecek Pilihan Riwayat
                if ($input['nama_statuskepegawaian'] === 'cpns') {
                    if ($input['nomor_bkn'] !== '' AND $input['tanggal_bkn'] !== '') {

                        $data_id = acak_id('riwayat_pegawai_cpns', 'id_riwayat');
                        $data['id_riwayat'] = $data_id['id'];
                        $data['no_bkn'] = $input['nomor_bkn'];
                        $data['tanggal_bkn'] = $input['tanggal_bkn'];

                        $this->crud->i('riwayat_pegawai_cpns', $data);
                        $detail = $this->crud->gd('riwayat_pegawai_cpns', array('id_riwayat' => $data['id_riwayat']));
                        if ($detail) {
                            return $this->response([
                                'success'   => TRUE,
                                'data'      => $detail
                            ]);
                        } else return $this->response(['success' => FALSE]);
                    }else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);

                }else if($input['nama_statuskepegawaian'] == 'pns'){
                    if($input['sumpah'] !== '' AND $input['pejabat_sumpah'] !== '' AND $input['nomor_berita_acara'] !== '' AND $input['tanggal_berita_acara'] !== ''){

                        $data_id = acak_id('riwayat_pegawai_pns', 'id_riwayat');
                        $data['id_riwayat'] = $data_id['id'];
                        $data['sumpah'] = $input['sumpah'];
                        $data['pengambil_sumpah'] = $input['pejabat_sumpah'];
                        $data['no_berita'] = $input['nomor_berita_acara'];
                        $data['tanggal_berita'] = $input['tanggal_berita_acara'];

                        $this->crud->i('riwayat_pegawai_pns', $data);
                        $detail = $this->crud->gd('riwayat_pegawai_pns', array('id_riwayat' => $data['id_riwayat']));
                        if ($detail) {
                            return $this->response([
                                'success'   => TRUE,
                                'data'      => $detail
                            ]);
                        } else return $this->response(['success' => FALSE]);
                    }else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
                }
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_kursus':
            $valid->set_rules('tipe_kursus', 'Field Tipe Kursus', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('jenis_kursus', 'Field Jenis Kursus', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama_kursus', 'Field Nama Kursus', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('lama_kursus', ' Field Lama Kursus', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tahun_kursus', ' Field Tahun Kursus', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sertifikat_kursus', ' Field Nomor Sertifikat', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('instansi_kursus', ' Field Instansi Kursus', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('institusi_kursus', ' Field Institusi Kursus', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'tipe_kursus'       => $input['tipe_kursus'],
                    'jenis_kursus'       => $input['jenis_kursus'],
                    'nama_kursus'       => $input['nama_kursus'],
                    'lama_kursus'       => $input['lama_kursus'],
                    'tahun_kursus'       => $input['tahun_kursus'],
                    'no_sertifikat_kursus'       => $input['no_sertifikat_kursus'],
                    'instansi_kursus'       => $input['instansi_kursus'],
                    'institusi_kursus'       => $input['institusi_kursus'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('riwayat_kursus', $data);
                    $detail = $this->crud->gd('riwayat_kursus', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_penghargaan':
            $valid->set_rules('jenis_penghargaan', 'Field Jenis Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field No Surat Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', 'Field Tanggal Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tahun_penghargaan', ' Field Tahun Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'jenis_penghargaan'       => $input['jenis_penghargaan'],
                    'no_sk'       => $input['no_sk'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'tahun_penghargaan'       => $input['tahun_penghargaan'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('riwayat_penghargaan', $data);
                    $detail = $this->crud->gd('riwayat_penghargaan', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_profesi':
            $valid->set_rules('profesi', 'Field Jenis Profesi', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('penyelenggara', 'Field Penyelenggara Profesi', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tahun_lulus', 'Field Tahun Profesi', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'profesi'       => $input['profesi'],
                    'penyelenggara'       => $input['penyelenggara'],
                    'tahun_lulus'       => $input['tahun_lulus'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('riwayat_profesi', $data);
                    $detail = $this->crud->gd('riwayat_profesi', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;


            case 'riwayat_unor':
            $valid->set_rules('instansi', 'Field Instansi Unor', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama_unor', 'Field Nama Unit Organsisasi', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', 'Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'instansi'       => $input['instansi'],
                    'nama_unor'       => $input['nama_unor'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'no_sk'       => $input['no_sk'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('riwayat_unor', $data);
                    $detail = $this->crud->gd('riwayat_unor', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_pemberhentian':
            $valid->set_rules('jenis_pemberhentian', 'Field Jenis Pemberhentian', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('kedudukan_hukum', 'Field Kedudukan Hukum', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', 'Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'jenis_pemberhentian'       => $input['jenis_pemberhentian'],
                    'kedudukan_hukum'       => $input['kedudukan_hukum'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'no_sk'       => $input['no_sk'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('riwayat_pemberhentian', $data);
                    $detail = $this->crud->gd('riwayat_pemberhentian', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_cuti':
            $valid->set_rules('jenis_cltn', 'Field Jenis CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_bkn', 'Field Nomor BKN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_bkn', 'Field Tanggal BKN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_skep', 'Field Tanggal SKEP CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_akhir', 'Field Tanggal Akhir CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_aktif', 'Field Tanggal Aktif CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_awal', 'Field Tanggal Awal CLTN', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'nip'    => $nip,
                    'jenis_cltn'       => $input['jenis_cltn'],
                    'tanggal_awal'       => $input['tanggal_awal'],
                    'tanggal_aktif'       => $input['tanggal_aktif'],
                    'tanggal_akhir'       => $input['tanggal_akhir'],
                    'tanggal_skep'       => $input['tanggal_skep'],
                    'tanggal_bkn'       => $input['tanggal_bkn'],
                    'no_bkn'       => $input['no_bkn'],
                    'no_sk'       => $input['no_sk'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->i('riwayat_cuti', $data);
                    $detail = $this->crud->gd('riwayat_cuti', array('nip' => $nip)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;
        }

    }

    public function profilAjaxEdit($id = NULL, $tipe = NULL){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        switch ($tipe)
        {
            case 'data_pasangan':
                $valid->set_rules('jenis', 'Field Jenis', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'jenis'       => $input['jenis'],
                        'nama'       => $input['nama'],
                        'ttl'       => $input['ttl'],
                        'pekerjaan'       => $input['pekerjaan'],
                        'iat'               => date('Y-m-d H:i:s')
                    );

                    $this->crud->u('data_pasangan', $data, array('id_pasangan' => $id));
                    $detail = $this->crud->gd('data_pasangan',  array('id_pasangan' => $id));
                    if ($detail) {
                        return $this->response([
                            'success'   => TRUE,
                            'data'      => $detail
                        ]);
                    } else return $this->response(['success' => FALSE]);
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
                break;

            case 'data_anak':
                $valid->set_rules('status', 'Field Status', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'status'       => $input['status'],
                        'nama'       => $input['nama'],
                        'ttl'       => $input['ttl'],
                        'pekerjaan'       => $input['pekerjaan'],
                        'iat'               => date('Y-m-d H:i:s'));
                        $this->crud->u('data_anak', $data, array('id_anak' => $id));
                        $detail = $this->crud->gd('data_anak', array('id_anak' => $id));
                    if ($detail) {
                        return $this->response([
                            'success'   => TRUE,
                            'data'      => $detail
                        ]);
                    } else return $this->response(['success' => FALSE]);
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;
            //
            case 'data_ortu':
                $valid->set_rules('status', 'Field Status', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'status'       => $input['status'],
                        'nama'       => $input['nama'],
                        'ttl'       => $input['ttl'],
                        'pekerjaan'       => $input['pekerjaan'],
                        'iat'               => date('Y-m-d H:i:s'
                        )
                    );
                    $this->crud->u('data_orangtua', $data, array('id_orangtua' => $id));
                    $detail = $this->crud->gd('data_orangtua', array('id_orangtua' => $id));
                    if ($detail) {
                        return $this->response([
                            'success'   => TRUE,
                            'data'      => $detail
                        ]);
                    } else return $this->response(['success' => FALSE]);
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;
            //
            case 'pendidikan':
                $valid->set_rules('tingkat', 'Field Tingkat', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nama_pendidikan', 'Field Nama Pendidikan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nama_instansi', ' Field Instansi', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('no_ijazah', ' Field No. Ijazah', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_lulus', ' Field Tanggal Lulus', 'required|trim|strip_tags|htmlspecialchars');
                    if ($valid->run() === TRUE)
                    {
                        $input = $this->input->post(NULL, TRUE);
                        $data = array(
                            'tingkat'       => $input['tingkat'],
                            'nama_instansi'       => $input['nama_instansi'],
                            'nama_pendidikan'       => $input['nama_pendidikan'],
                            'no_ijazah'       => $input['no_ijazah'],
                            'tanggal_lulus'       => $input['tanggal_lulus'],
                            'iat'               => date('Y-m-d H:i:s')
                        );
                        $this->crud->u('riwayat_pendidikan', $data, array('id_riwayat' => $id));
                        $detail = $this->crud->gd('riwayat_pendidikan', array('id_riwayat' => $id));
                        if ($detail) {
                            return $this->response([
                                'success'   => TRUE,
                                'data'      => $detail
                            ]);
                        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
                    } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
                break;
            //
            case 'jabatan':
                $valid->set_rules('jenis', 'Field Jenis Jabatan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('kedudukan', 'Field Kedudukan Jabatan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tmt_jabatan', 'Field TMT Jabatan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tmt_pelantikan', 'Field TMT Pelantikan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pejabat', ' Field Jurusan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nomor', ' Field Nomor', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal', ' Field Tanggal', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'jenis'       => $input['jenis'],
                        'kedudukan'       => $input['kedudukan'],
                        'tmt_jabatan'       => $input['tmt_jabatan'],
                        'tmt_pelantikan'       => $input['tmt_pelantikan'],
                        'pejabat'       => $input['pejabat'],
                        'tanggal'       => $input['tanggal'],
                        'nomor'       => $input['nomor'],
                        'iat'               => date('Y-m-d H:i:s')
                    );
                    $this->crud->u('riwayat_jabatan', $data, array('id_riwayat' => $id));

                    $detail = $this->crud->gd('riwayat_jabatan', array('id_riwayat' => $id));
                    if ($detail) {
                        return $this->response([
                            'success'   => TRUE,
                            'data'      => $detail
                        ]);
                    } else return $this->response(['success' => FALSE]);
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;
            //
            case 'mutasi':
                $valid->set_rules('jabatan', 'Field Jabatan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pangkat', 'Field Pangkat', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tmt', 'Field TMT', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pejabat', ' Field Jurusan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nomor', ' Field Nomor', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal', ' Field Tanggal', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'jabatan'       => $input['jabatan'],
                        'tmt'       => $input['tmt'],
                        'pangkat'       => $input['pangkat'],
                        'pejabat'       => $input['pejabat'],
                        'tanggal'       => $input['tanggal'],
                        'nomor'       => $input['nomor'],
                        'iat'               => date('Y-m-d H:i:s')
                    );
                    $this->crud->u('riwayat_mutasi', $data, array('id_riwayat' => $id));
                    $detail = $this->crud->gd('riwayat_mutasi', array('id_riwayat' => $id));
                    if ($detail) {
                        return $this->response([
                            'success'   => TRUE,
                            'data'      => $detail
                        ]);
                    } else return $this->response(['success' => FALSE]);
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;
            //
            case 'golongan':
                $valid->set_rules('golongan', 'Field Golongan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nomor_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_sk', 'Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tmt_golongan', ' Field TMT Golongan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nomor_bkn', ' Field Nomor BKN', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_bkn', ' Field Tanggal BKN', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('jenis_kp', ' Field Jenis KP', 'required|trim|strip_tags|htmlspecialchars');
                    if ($valid->run() === TRUE)
                    {
                        $input = $this->input->post(NULL, TRUE);
                        $data = array(
                            'golongan'       => $input['golongan'],
                            'tmt_golongan'       => $input['tmt_golongan'],
                            'nomor_sk'       => $input['nomor_sk'],
                            'tanggal_sk'       => $input['tanggal_sk'],
                            'tmt_golongan'       => $input['tmt_golongan'],
                            'tanggal_bkn'       => $input['tanggal_bkn'],
                            'nomor_bkn'       => $input['nomor_bkn'],
                            'jenis_kp'       => $input['jenis_kp'],
                            'iat'               => date('Y-m-d H:i:s'));

                            $this->crud->u('riwayat_golongan', $data,  array('id_riwayat' => $id));
                            $detail = $this->crud->gd('riwayat_golongan',  array('id_riwayat' => $id));
                        if ($detail) {
                            return $this->response([
                                'success'   => TRUE,
                                'data'      => $detail
                            ]);
                        } else return $this->response(['success' => FALSE]);
                    } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
                break;
            //
            case 'riwayat_diklat':
                $valid->set_rules('nama_diklat', 'Field Nama DIklat', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('jumlah_jam', 'Field Jumlah Jam', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('penyelenggara', 'Field Penyelenggara', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tempat', ' Field Tempat', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('angkatan', ' Field Angkatan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tahun', ' Field Tahun', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('no_sttp', ' Field No STTP', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_sttp', ' Field Tanggal STTP', 'required|trim|strip_tags|htmlspecialchars');
                // $valid->set_rules('jenis_diklat', ' Field Jenis Diklat', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'nama_diklat'       => $input['nama_diklat'],
                        'penyelenggara'       => $input['penyelenggara'],
                        'jumlah_jam'       => $input['jumlah_jam'],
                        'angkatan'       => $input['angkatan'],
                        'tempat'       => $input['tempat'],
                        // 'jenis_diklat'       => $input['jenis_diklat'],
                        'tanggal_sttp'       => $input['tanggal_sttp'],
                        'no_sttp'       => $input['no_sttp'],
                        'tahun'       => $input['tahun'],
                        'iat'               => date('Y-m-d H:i:s')
                    );
                    $this->crud->u('riwayat_diklat', $data, array('id_riwayat' => $id));
                    $detail = $this->crud->gd('riwayat_diklat', array('id_riwayat' => $id));
                    if ($detail) {
                        return $this->response([
                            'success'   => TRUE,
                            'data'      => $detail
                        ]);
                    } else return $this->response(['success' => FALSE]);
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_kepegawaian':
                $valid->set_rules('nama_statuskepegawaian', 'Field Status Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nama_pejabat', 'Field Pejabat yang Menetapkan', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('no_sk', 'Field No.SK', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_sk', ' Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pangkat', ' Field Pangkat/Gol.Ruang', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tmt', ' Field TMT', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('instansi', ' Field Lokasi Kerj', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('sub', ' Field Kab/Kota/Sub Inst', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('unit_kerja', ' Field Unit Kerja', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nomor_bkn', ' Field Kab/Kota/Sub Inst', 'trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_bkn', ' Field Tanggal BKN', 'trim|strip_tags|htmlspecialchars');
                $valid->set_rules('sumpah', ' Field Sumpah Kepegawaian', 'trim|strip_tags|htmlspecialchars');
                $valid->set_rules('pejabat_sumpah', ' Field Yang Mengambil Sumpah', 'trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nomor_berita_acara', ' Field Nomor Berita Acara', 'trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_berita_acara', ' Field Tanggal Berita Acara', 'trim|strip_tags|htmlspecialchars');


                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'no_sk'       => $input['no_sk'],
                        'pejabat'       => $input['nama_pejabat'],
                        'tanggal_sk'       => $input['tanggal_sk'],
                        'pangkat'       => $input['pangkat'],
                        'tanggal_tmt'       => $input['tmt'],
                        'instansi'       => $input['instansi'],
                        'sub_instansi'       => $input['sub'],
                        'unit_kerja'       => $input['unit_kerja'],
                        'iat'               => date('Y-m-d H:i:s')
                    );

                    //Mengecek Pilihan Riwayat
                    if ($input['nama_statuskepegawaian'] === 'cpns') {
                        if ($input['nomor_bkn'] !== '' AND $input['tanggal_bkn'] !== '') {

                            $data['no_bkn'] = $input['nomor_bkn'];
                            $data['tanggal_bkn'] = $input['tanggal_bkn'];

                            $this->crud->u('riwayat_pegawai_cpns', $data, array('id_riwayat' => $id));
                            $detail = $this->crud->gd('riwayat_pegawai_cpns', array('id_riwayat' => $id));

                            if ($detail) {
                                return $this->response([
                                    'success'   => TRUE,
                                    'data'      => $detail
                                ]);
                            } else return $this->response(['success' => FALSE, 'error' => 'data Tidak ditemukan di Database']);
                        }else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);

                    }else if($input['nama_statuskepegawaian'] == 'pns'){
                        if($input['sumpah'] !== '' AND $input['pejabat_sumpah'] !== '' AND $input['nomor_berita_acara'] !== '' AND $input['tanggal_berita_acara'] !== ''){


                            $data['sumpah'] = $input['sumpah'];
                            $data['pengambil_sumpah'] = $input['pejabat_sumpah'];
                            $data['no_berita'] = $input['nomor_berita_acara'];
                            $data['tanggal_berita'] = $input['tanggal_berita_acara'];

                            $this->crud->u('riwayat_pegawai_pns', $data,  array('id_riwayat' => $id));
                            $detail = $this->crud->gd('riwayat_pegawai_pns',  array('id_riwayat' => $id));
                            if ($detail) {
                                return $this->response([
                                    'success'   => TRUE,
                                    'data'      => $detail
                                ]);
                            } else return $this->response(['success' => FALSE, 'error' => 'data Tidak ditemukan di Database']);
                        }else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
                    }
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_kursus':
                $valid->set_rules('tipe_kursus', 'Field Tipe Kursus', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('jenis_kursus', 'Field Jenis Kursus', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('nama_kursus', 'Field Nama Kursus', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('lama_kursus', ' Field Lama Kursus', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tahun_kursus', ' Field Tahun Kursus', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('no_sertifikat_kursus', ' Field Nomor Sertifikat', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('instansi_kursus', ' Field Instansi Kursus', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('institusi_kursus', ' Field Institusi Kursus', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'tipe_kursus'       => $input['tipe_kursus'],
                        'jenis_kursus'       => $input['jenis_kursus'],
                        'nama_kursus'       => $input['nama_kursus'],
                        'lama_kursus'       => $input['lama_kursus'],
                        'tahun_kursus'       => $input['tahun_kursus'],
                        'no_sertifikat_kursus'       => $input['no_sertifikat_kursus'],
                        'instansi_kursus'       => $input['instansi_kursus'],
                        'institusi_kursus'       => $input['institusi_kursus'],
                        'iat'               => date('Y-m-d H:i:s'));
                        $this->crud->u('riwayat_kursus', $data, array('id_riwayat' => $id));
                        $detail = $this->crud->gd('riwayat_kursus',array('id_riwayat' => $id));
                    if ($detail) {
                        return $this->response([
                            'success'   => TRUE,
                            'data'      => $detail
                        ]);
                    } else return $this->response(['success' => FALSE]);
                } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
                break;

            case 'riwayat_penghargaan':
            $valid->set_rules('jenis_penghargaan', 'Field Jenis Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field No Surat Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', 'Field Tanggal Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tahun_penghargaan', ' Field Tahun Penghargaan', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'jenis_penghargaan'       => $input['jenis_penghargaan'],
                    'no_sk'       => $input['no_sk'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'tahun_penghargaan'       => $input['tahun_penghargaan'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->u('riwayat_penghargaan', $data, array('id_riwayat' => $id));
                    $detail = $this->crud->gd('riwayat_penghargaan', array('id_riwayat' => $id)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_profesi':
            $valid->set_rules('profesi', 'Field Jenis Profesi', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('penyelenggara', 'Field Penyelenggara Profesi', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tahun_lulus', 'Field Tahun Profesi', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'profesi'       => $input['profesi'],
                    'penyelenggara'       => $input['penyelenggara'],
                    'tahun_lulus'       => $input['tahun_lulus'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->u('riwayat_profesi', $data, array('id_riwayat' => $id));
                    $detail = $this->crud->gd('riwayat_profesi', array('id_riwayat' => $id)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_unor':
            $valid->set_rules('instansi', 'Field Instansi Unor', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('nama_unor', 'Field Nama Unit Organsisasi', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', 'Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'instansi'       => $input['instansi'],
                    'nama_unor'       => $input['nama_unor'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'no_sk'       => $input['no_sk'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->u('riwayat_unor', $data, array('id_riwayat' => $id));
                    $detail = $this->crud->gd('riwayat_unor', array('id_riwayat' => $id)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_pemberhentian':
            $valid->set_rules('jenis_pemberhentian', 'Field Jenis Pemberhentian', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('kedudukan_hukum', 'Field Kedudukan Hukum', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_sk', 'Field Tanggal SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'jenis_pemberhentian'       => $input['jenis_pemberhentian'],
                    'kedudukan_hukum'       => $input['kedudukan_hukum'],
                    'tanggal_sk'       => $input['tanggal_sk'],
                    'no_sk'       => $input['no_sk'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->u('riwayat_pemberhentian', $data, array('id_riwayat' => $id));
                    $detail = $this->crud->gd('riwayat_pemberhentian', array('id_riwayat' => $id)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;

            case 'riwayat_cuti':
            $valid->set_rules('jenis_cltn', 'Field Jenis CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('no_bkn', 'Field Nomor BKN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_bkn', 'Field Tanggal BKN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_skep', 'Field Tanggal SKEP CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_akhir', 'Field Tanggal Akhir CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_aktif', 'Field Tanggal Aktif CLTN', 'required|trim|strip_tags|htmlspecialchars');
            $valid->set_rules('tanggal_awal', 'Field Tanggal Awal CLTN', 'required|trim|strip_tags|htmlspecialchars');
            if ($valid->run() === TRUE)
            {
                $input = $this->input->post(NULL, TRUE);
                $data = array(
                    'jenis_cltn'       => $input['jenis_cltn'],
                    'tanggal_awal'       => $input['tanggal_awal'],
                    'tanggal_aktif'       => $input['tanggal_aktif'],
                    'tanggal_akhir'       => $input['tanggal_akhir'],
                    'tanggal_skep'       => $input['tanggal_skep'],
                    'tanggal_bkn'       => $input['tanggal_bkn'],
                    'no_bkn'       => $input['no_bkn'],
                    'no_sk'       => $input['no_sk'],
                    'iat'               => date('Y-m-d H:i:s'));
                    $this->crud->u('riwayat_cuti', $data, array("id_riwayat" => $id));
                    $detail = $this->crud->gd('riwayat_cuti', array("id_riwayat" => $id)
                );
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                    ]);
                } else return $this->response(['success' => FALSE]);
            } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
            break;
        }

    }

    public function hapusAjax($nip = null){
        $cek = $this->crud->gd('data_pegawai', array('nip' => $nip));
        if ($cek)
        {
            $this->crud->d('data_pegawai', array('nip' => $nip));
            $this->crud->d('data_alamat', array('nip' => $nip));
            $this->crud->d('keterangan_badan', array('nip' => $nip));
            $this->crud->d('keterangan_lainnya', array('nip' => $nip));
            $this->crud->d('riwayat_pegawai_pns', array('nip' => $nip));
            $this->crud->d('riwayat_pegawai_cpns', array('nip' => $nip));
            $this->crud->d('riwayat_angkakredit', array('nip' => $nip));
            $this->crud->d('riwayat_cuti', array('nip' => $nip));
            $this->crud->d('riwayat_dp3', array('nip' => $nip));
            $this->crud->d('riwayat_golongan', array('nip' => $nip));
            $this->crud->d('riwayat_jabatan', array('nip' => $nip));
            $this->crud->d('riwayat_kursus', array('nip' => $nip));
            $this->crud->d('riwayat_mutasi', array('nip' => $nip));
            $this->crud->d('riwayat_pemberhentian', array('nip' => $nip));
            $this->crud->d('riwayat_pendidikan', array('nip' => $nip));
            $this->crud->d('riwayat_penghargaan', array('nip' => $nip));
            $this->crud->d('riwayat_profesi', array('nip' => $nip));
            $this->crud->d('riwayat_skp', array('nip' => $nip));
            $this->crud->d('riwayat_unor', array('nip' => $nip));
            $cek_user = $this->crud->gd('users', array('id_user' => $nip));
            if ($cek_user) {
                $this->crud->d('users', array('id_user' => $nip));
            }
            return $this->response(['success' => TRUE]);
        }
        else return $this->response(['success' => FALSE]);
    }

    public function hapusData($table, $id){
        $cek = $this->crud->gd('data_'.$table, array('id_'.$table => $id));
        if ($cek)
        {
            $this->crud->d('data_'.$table, array('id_'.$table => $id));
            return $this->response(['success' => TRUE]);
        }
        else return $this->response(['success' => FALSE]);
    }

    public function hapusRiwayat($table, $id){
        $cek = $this->crud->gd('riwayat_'.$table, array('id_riwayat' => $id));
        if ($cek)
        {
            $this->crud->d('riwayat_'.$table, array('id_riwayat' => $id));
            return $this->response(['success' => TRUE]);
        }
        else return $this->response(['success' => FALSE]);
    }

    public function getKabByProvinsi($prov){
        $prov = urldecode($prov);

        // $input = $this->input->post(NULL, TRUE);
        // $detail = $this->crud->gw('data_kabupaten',array('nama_provinsi' => $prov));
        $detail = $this->crud->qr('SELECT nama_kabupaten as nama FROM data_kabupaten where nama_provinsi = "'.$prov.'"');
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getKecByKabupaten($kab){
        $kab = urldecode($kab);

        // $input = $this->input->post(NULL, TRUE);
        // $detail = $this->crud->gw('data_kabupaten',array('nama_provinsi' => $kab));
        $detail = $this->crud->qr('SELECT nama_kecamatan as nama FROM data_kecamatan where nama_kabupaten = "'.$kab.'"');
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getUnkerBySatker($satker){
        $satker = urldecode($satker);

        // $input = $this->input->post(NULL, TRUE);
        // $detail = $this->crud->gw('data_kabupaten',array('nama_provinsi' => $satker));
        $detail = $this->crud->qr('SELECT nama_unit as nama FROM data_unit where nama_satker = "'.$satker.'"');
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getJabatanByJenisJabatan($jenisjabatan){
        $jenisjabatan = urldecode($jenisjabatan);

        // $input = $this->input->post(NULL, TRUE);
        // $detail = $this->crud->gw('data_kabupaten',array('nama_provinsi' => $jenisjabatan));
        $detail = $this->crud->qr('SELECT nama_jabatan as nama FROM data_jabatan where jenis_jabatan = "'.$jenisjabatan.'"');
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getEselonByNamaJabatan($nama_jabatan){
        $nama_jabatan = urldecode($nama_jabatan);

        // $input = $this->input->post(NULL, TRUE);
        // $detail = $this->crud->gw('data_kabupaten',array('nama_provinsi' => $nama_jabatan));
        $detail = $this->crud->qr('SELECT eselon as nama FROM data_jabatan where nama_jabatan = "'.$nama_jabatan.'"');
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getKelByKecamatan($kec){
        $kec = urldecode($kec);

        // $input = $this->input->post(NULL, TRUE);
        // $detail = $this->crud->gw('data_kabupaten',array('nama_provinsi' => $kec));
        $detail = $this->crud->qr('SELECT nama_kelurahan as nama FROM data_kelurahan where nama_kecamatan = "'.$kec.'"');
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function filterAjax(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('identifier', 'Field Identifier', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('eselon', 'Field eselon', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kelamin', 'Field jenis_kelamin', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('satker', 'Field satker', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('agama', 'Field agama', 'trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);
            $query = array();
            if ($input['identifier'] != '') {
                $input['identifier'] != '' ? $query[] = ' `nip` LIKE "%'.$input['identifier'].'%"': $query[] = '`nip` LIKE "%%"';
                $input['identifier'] != '' ? $query[] = ' OR `nama_lengkap` LIKE "%'.$input['identifier'].'%"': $query[] = '';
                $input['eselon'] != 'all' ? $query[] = ' AND `eselon` LIKE "%'.$input['eselon'].'%"': $query[] = '';
                $input['jenis_kelamin'] != 'all' ? $query[] = ' AND `jenis_kelamin` LIKE "%'.$input['jenis_kelamin'].'%"': $query[] = '';
                $input['satker'] != 'all' ? $query[] = ' AND `satuan_kerja` LIKE "%'.$input['satker'].'%"': $query[] = '';
                $input['agama'] != 'all' ? $query[] = ' AND `agama` LIKE "%'.$input['agama'].'%"': $query[] = '';
            }else{
                $input['identifier'] != '' ? $query[] = ' `nip` LIKE "%'.$input['identifier'].'%"': $query[] = '`nip` LIKE "%%"';
                $input['eselon'] != 'all' ? $query[] = 'AND `eselon` LIKE "%'.$input['eselon'].'%"': $query[] = '';
                $input['jenis_kelamin'] != 'all' ? $query[] = ' AND `jenis_kelamin` LIKE "%'.$input['jenis_kelamin'].'%"': $query[] = '';
                $input['satker'] != 'all' ? $query[] = ' AND `satuan_kerja` LIKE "%'.$input['satker'].'%"': $query[] = '';
                $input['agama'] != 'all' ? $query[] = ' AND `agama` LIKE "%'.$input['agama'].'%"': $query[] = '';
            }

            $finalquery = "SELECT * FROM data_pegawai WHERE ".implode($query,' ');
            // var_dump($finalquery);
            // die();
            $data_pegawai = $this->crud->qr($finalquery);

            return $this->response([
                'success'   => TRUE,
                'data'      => $data_pegawai
            ]);

        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function response($data){
        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit();
    }
}
