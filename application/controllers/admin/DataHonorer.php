<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataHonorer extends Admin_controller {

    public function index(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_agama = $this->crud->ga('data_agama');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->ga('data_unit');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_pegawai_honorer = $this->crud->ga('data_honorer');

        $data = array(  'title'     => 'Data Tenaga Magang',
                        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
                        'data_agama'=> $data_agama,
                        'data_pendidikan'=> $data_pendidikan,
                        'data_satker'=> $data_satker,
                        'data_unit'=> $data_unit,
                        'data_jabatan'=> $data_jabatan,
                        'data_jenisjabatan'=> $data_jenisjabatan,
                        'data_pegawai_honor'=> $data_pegawai_honorer,
                        'isi'       => 'admin/data_honorer/beranda');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function tambah(){
      if ($this->session->akses_level == 'Blocked') view_error('Error 404');

      $data_agama = $this->crud->ga('data_agama');
      $data_pendidikan = $this->crud->ga('data_pendidikan');
      $data_satker = $this->crud->ga('data_satker');
      $data_unit = $this->crud->ga('data_unit');
      $data_jabatan = $this->crud->ga('data_jabatan');
      $data_provinsi = $this->crud->gao('data_provinsi', 'nama_provinsi ASC');
      $data_kabupaten = $this->crud->gao('data_kabupaten', 'nama_kabupaten ASC');
      $data_kecamatan = $this->crud->gao('data_kecamatan', 'nama_kecamatan ASC');
      $data_kelurahan = $this->crud->gao('data_kelurahan', 'nama_kelurahan ASC');


      $data = array(  'title'     => 'Data Tenaga Magang / Tambah Data Tenaga Magang',
                      'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
                      'data_agama'=> $data_agama,
                      'data_pendidikan'=> $data_pendidikan,
                      'data_satker'=> $data_satker,
                      'data_unit'=> $data_unit,
                      'data_jabatan'=> $data_jabatan,
                      'data_provinsi'=> $data_provinsi,
                      'data_kabupatem'=> $data_kabupaten,
                      'data_kelurahan'=> $data_kelurahan,
                      'data_kecamatan'=> $data_kecamatan,
                      'isi'       => 'admin/data_honorer/tambah');
      $this->load->view('admin/_layout/wrapper', $data);
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

    public function tambahAjax(){
      $data = array(  'title'     => 'Data Tenaga Magang/ Tambah Data Tenaga Magang',
                   'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
                   'isi'       => 'admin/data_honorer/tambah');

       $valid = $this->form_validation;
       $valid->set_error_delimiters('<i style="color: red; font-size: 0.7em">', '</i>');
       $valid->set_rules('nip', 'Field NIP', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('name_lengkap', 'Field Nama Lengkap', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('email', 'Field Email', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('password', 'Field Password','min_length[4]|max_length[32]|strip_tags');
       $valid->set_rules('gelar_depan', 'Field Gelar Depan', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('gelar_belakang', 'Field Gelar Belakang', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('tempat_lahir', 'Field Tempat Lahir', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('tanggal_lahir', 'Field Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('jenis_kelamin', 'Field Jenis Kelamin', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('agama', 'Field agama', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('golongan_darah', 'Field Golongan Darah', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('rhesus', 'Field Golongan Darah', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('status_pernikahan', 'Field Status Pernikahan', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('jenjang_pendidikan', 'Field Jenjang Pendidikan', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('status_kepegawaian', 'Field Status Kepegawaian', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('tmt_honorer', 'Field TMT Honorer', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('tanggal_sk_honorer', 'Field Tanggal SK Honorer', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_sk_honorer', 'Field No.SK Honorer', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('satuan_kerja', 'Field Jenis Pangkat', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('unit_kerja', 'Field Jenis Pangkat', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('subid_subag', 'Field Subid Subag', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('alamat', 'Field Alamat', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('rt', 'Field RT', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('rw', 'Field Rw', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('provinsi', 'Field Provinsi', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('kab', 'Field Kabupaten/Kota', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('kec', 'Field Kecamatan', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('kel', 'Field Kelurahan', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('kode_pos', 'Field Kode Pos', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('telepon', 'Field Telepon', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('hp', 'Field Handphone', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('tinggi_badan', 'Field Tinggi Badan', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('berat_badan', 'Field Berat Badan', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_ktp', 'Field No.KTP', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_karpeg', 'Field No.KARPEG', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_askes', 'Field No.ASKES', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_taspen', 'Field No.TASPEN', 'trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_karis', 'Field No.KARIS/KARSU', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_npwp', 'Field No.NPWP', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('no_korpri', 'Field No.KORPRI', 'required|trim|strip_tags|htmlspecialchars');

       if ($valid->run() === TRUE)
       {
           $input = $this->input->post(NULL, TRUE);

            // Mekanisme upload gambar
           $gambar = upload_image('gambar', 'tambah', 'fotohonorer', '', $data);
            // Masuk ke database

           if ($gambar !== FALSE){
               $data_honorer = array(
                               'nip'               => $input['nip'],
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
                               'jenjang_pendidikan'=> $input['jenjang_pendidikan'],
                               'status_kepegawaian'=> $input['status_kepegawaian'],
                               'tmt_honorer'=> $input['tmt_honorer'],
                               'tanggal_sk_honorer'=> $input['tanggal_sk_honorer'],
                               'no_sk_honorer'=> $input['no_sk_honorer'],
                               'satuan_kerja'      => $input['satuan_kerja'],
                               'unit_kerja'      => $input['unit_kerja'],
                               'subid_subag'      => $input['subid_subag'],
                               'gambar'            => $gambar,
                               'iat'               => date('Y-m-d H:i:s'));
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
                                   'hp' => $input['hp']);
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

               $data_id = acak_id('users', 'id_user');
               $data = array(  'id_user'           => $data_id['id'],
                           'fullname'          => $input['name_lengkap'],
                           'username'          => $input['nip'],
                           'password'          => do_hash($input['password']),
                           'email'             => $input['email'],
                           'notelp'            => $input['telepon'],
                           'akses_level'       => 'pegawai',
                           'iat'               => date('Y-m-d H:i:s'));


               $this->crud->i('data_honorer', $data_honorer);
               $this->crud->i('data_alamat', $data_alamat);
               $this->crud->i('keterangan_badan', $keterangan_badan);
               $this->crud->i('keterangan_lainnya', $keterangan_lainnya);

               $detail = $this->crud->gd('data_honorer', array('nip' => $data_honorer['nip']));
               if ($detail) {
                   $this->crud->i('users', $data);
                   $detail_user = $this->crud->gd('users', array('username' => $data_honorer['nip']));
                   if ($detail_user) {
                       $this->session->set_flashdata('sukses', 'Data Pegawai berhasil ditambah.');
                       redirect(admin_url('DataHonorer/profil/').$input['nip']);
                   }else{
                        $this->session->set_flashdata('gagal', 'Data Pegawai gagal ditambah.');
                   }

               } else  $this->session->set_flashdata('gagal', 'Data Pegawai gagal ditambah.');
           }
       } else {

           $this->session->set_flashdata('gagal', 'Data Pegawai gagal ditambah.');
           $this->load->view('admin/_layout/wrapper', $data);
       }
    }

    public function profil($nip = NULL)
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_honorer', array('nip' => $nip));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => $nip));
        $data_keteranganlainnya = $this->crud->gd('keterangan_lainnya', array('nip' => $nip));
        $data_keteranganbadan = $this->crud->gd('keterangan_badan', array('nip' => $nip));
        $data_pasangan = $this->crud->gw('data_pasangan', array('nip' => $nip));
        $data_anak = $this->crud->gw('data_anak', array('nip' => $nip));
        $data_orangtua = $this->crud->gw('data_orangtua', array('nip' => $nip));
        $riwayat_pendidikan = $this->crud->gw('riwayat_pendidikan', array('nip' => $nip));
        $riwayat_jabatan = $this->crud->gw('riwayat_jabatan', array('nip' => $nip));
        $riwayat_mutasi = $this->crud->gw('riwayat_mutasi', array('nip' => $nip));
        $riwayat_golongan = $this->crud->gw('riwayat_golongan', array('nip' => $nip));
        $riwayat_diklat = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_diklat1 = $this->crud->gw('riwayat_diklat', array('nip' => $nip));
        $riwayat_diklat2 = $this->crud->gw('riwayat_diklat', array('nip' => $nip));


        $data_agama = $this->crud->ga('data_agama');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->ga('data_unit');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_golongan = $this->crud->ga('data_golongan');
        $data_eselon = $this->crud->ga('data_eselon');


        $data = array(  'title'     => 'Data Tenaga Magang / Profil Tenaga Magang',
                        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
                        'data_agama'=> $data_agama,
                        'data_pendidikan'=> $data_pendidikan,
                        'data_satker'=> $data_satker,
                        'data_unit'=> $data_unit,
                        'data_jabatan'=> $data_jabatan,
                        'data_jenisjabatan'=> $data_jenisjabatan,
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
                        'isi'       => 'admin/data_honorer/profil');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function filterAjax(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('identifier', 'Field Identifier', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('eselon', 'Field eselon', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('pendidikan', 'Field pendidikan', 'trim|strip_tags|htmlspecialchars');
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
                $input['pendidikan'] != 'all' ? $query[] = ' AND `jenjang_pendidikan` LIKE "z'.$input['pendidikan'].'%"': $query[] = '';
                $input['jenis_kelamin'] != 'all' ? $query[] = ' AND `jenis_kelamin` LIKE "%'.$input['jenis_kelamin'].'%"': $query[] = '';
                $input['satker'] != 'all' ? $query[] = ' AND `satuan_kerja` LIKE "%'.$input['satker'].'%"': $query[] = '';
                $input['agama'] != 'all' ? $query[] = ' AND `agama` LIKE "%'.$input['agama'].'%"': $query[] = '';
            }else{
                $input['identifier'] != '' ? $query[] = ' `nip` LIKE "%'.$input['identifier'].'%"': $query[] = '`nip` LIKE "%%"';
                $input['eselon'] != 'all' ? $query[] = 'AND `eselon` LIKE "%'.$input['eselon'].'%"': $query[] = '';
                $input['pendidikan'] != 'all' ? $query[] = ' AND `jenjang_pendidikan` LIKE "%'.$input['pendidikan'].'%"': $query[] = '';
                $input['jenis_kelamin'] != 'all' ? $query[] = ' AND `jenis_kelamin` LIKE "%'.$input['jenis_kelamin'].'%"': $query[] = '';
                $input['satker'] != 'all' ? $query[] = ' AND `satuan_kerja` LIKE "%'.$input['satker'].'%"': $query[] = '';
                $input['agama'] != 'all' ? $query[] = ' AND `agama` LIKE "%'.$input['agama'].'%"': $query[] = '';
            }

                $finalquery = "SELECT * FROM data_honorer WHERE ".implode($query,' ');
                // var_dump($finalquery);
                // die();
                $data_honorer = $this->crud->qr($finalquery);

            return $this->response([
                'success'   => TRUE,
                'data'      => $data_honorer
            ]);

        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
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

?>
