<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeremajaanData extends MY_Controller {

  public function index()
  {
    redirect(skpd_url('peremajaan-data/kepegawaian/cpns'));
  }


  public function suamiistri()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $data_pasangan = $this->crud->gwo('data_pasangan', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $data_pasangan_notverified = $this->crud->gwo('data_pasangan', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Pasangan Suami Istri',
                  'data_pasangan'     => $data_pasangan,
                  'data_pasangan_notverified'     => $data_pasangan_notverified,
                  'isi'       => 'skpd/peremajaan/keluarga_pasangan');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function anak()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $data_anak = $this->crud->gwo('data_anak', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Data Anak',
                  'data_anak'     => $data_anak,
                  'isi'       => 'skpd/peremajaan/keluarga_anak');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function orangtua()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $data_orangtua = $this->crud->gwo('data_orangtua', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $data_orangtua_notverified = $this->crud->gwo('data_orangtua', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Data Orang Tua',
                  'data_orangtua'     => $data_orangtua,
                  'data_orangtua_notverified'     => $data_orangtua_notverified,
                  'isi'       => 'skpd/peremajaan/keluarga_orangtua');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function cpns()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_cpns_verified = $this->crud->gwo('riwayat_pegawai_cpns', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_cpns_notverified = $this->crud->gwo('riwayat_pegawai_cpns', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $data_golongan = $this->crud->gao('data_golongan', '');
    $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');
    $data_unit = $this->crud->ga('data_unit');
    $data_jabatan = $this->crud->ga('data_jabatan');
    $data_satker = $this->crud->ga('data_satker');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian CPNS',
                  'riwayat_cpns_verified'     => $riwayat_cpns_verified,
                  'riwayat_cpns_notverified'     => $riwayat_cpns_notverified,
                  'data_golongan'     => $data_golongan,
                  'data_unit'     => $data_unit,
                  'data_jabatan'     => $data_jabatan,
                  'data_satker'     => $data_satker,
                  'isi'       => 'skpd/peremajaan/kepegawaian_cpns');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function pns()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $data_golongan = $this->crud->gao('data_golongan', '');
    $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');
    $data_unit = $this->crud->ga('data_unit');
    $data_jabatan = $this->crud->ga('data_jabatan');
    $data_satker = $this->crud->ga('data_satker');

    $riwayat_pns_verified = $this->crud->gwo('riwayat_pegawai_pns', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_pns_notverified = $this->crud->gwo('riwayat_pegawai_pns', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremejaan Data / Kepegawaian PNS',
                  'riwayat_pns_verified'     => $riwayat_pns_verified,
                  'riwayat_pns_notverified'     => $riwayat_pns_notverified,
                  'data_golongan'     => $data_golongan,
                  'data_unit'     => $data_unit,
                  'data_jabatan'     => $data_jabatan,
                  'data_satker'     => $data_satker,
                  'isi'       => 'skpd/peremajaan/kepegawaian_pns');
    $this->load->view('skpd/_layout/wrapper', $data);


  }

  public function pendidikan()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $data_pendidikan = $this->crud->ga('data_pendidikan');
    $riwayat_pendidikan_verified = $this->crud->qr('SELECT * FROM  riwayat_pendidikan INNER JOIN data_pegawai on riwayat_pendidikan.nip  = data_pegawai.nip where data_pegawai.satuan_kerja = "'.$this->session->fullname.'" ORDER BY riwayat_pendidikan.uat ASC ');
    $riwayat_pendidikan_notverified = $this->crud->gwo('riwayat_pendidikan', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian pendidikan',
                  'data_pendidikan' => $data_pendidikan,
                  'riwayat_pendidikan_verified'     => $riwayat_pendidikan_verified,
                  'riwayat_pendidikan_notverified'     => $riwayat_pendidikan_notverified,
                  'isi'       => 'skpd/peremajaan/pendidikan');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function jabatan()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
    $data_eselon = $this->crud->ga('data_eselon');
    $riwayat_jabatan_verified = $this->crud->gwo('riwayat_jabatan', array('status' => '1', 'unor_induk' => $this->session->fullname), 'uat ASC');
    $riwayat_jabatan_notverified = $this->crud->gwo('riwayat_jabatan', array('status' => '0', 'unor_induk' => $this->session->fullname), 'uat ASC');

    $data_unit = $this->crud->ga('data_unit');
    $data_jabatan = $this->crud->ga('data_jabatan');
    $data_satker = $this->crud->ga('data_satker');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian Jabatan',
                  'data_eselon' => $data_eselon,
                  'data_jenisjabatan' => $data_jenisjabatan,
                  'riwayat_jabatan_verified'     => $riwayat_jabatan_verified,
                  'riwayat_jabatan_notverified'     => $riwayat_jabatan_notverified,
                  'data_unit'     => $data_unit,
                  'data_jabatan'     => $data_jabatan,
                  'data_satker'     => $data_satker,
                  'isi'       => 'skpd/peremajaan/jabatan');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function struktural()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_struktural_verified = $this->crud->gwo('riwayat_diklat', array('jenis_diklat' => 'struktural','status' => '1', 'admin' => $this->session->fullname),'uat ASC');
    $riwayat_struktural_notverified = $this->crud->gwo('riwayat_diklat', array('jenis_diklat' => 'struktural','status' => '0', 'admin' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Diklat struktural',
                  'riwayat_struktural_verified'     => $riwayat_struktural_verified,
                  'riwayat_struktural_notverified'     => $riwayat_struktural_notverified,
                  'isi'       => 'skpd/peremajaan/diklat_struktural');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function fungsional()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_fungsional_verified = $this->crud->gwo('riwayat_diklat', array('jenis_diklat' => 'fungsional', 'status' => '1', 'admin' => $this->session->fullname),'uat ASC');
    $riwayat_fungsional_notverified = $this->crud->gwo('riwayat_diklat', array('jenis_diklat' => 'fungsional','status' => '0', 'admin' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Diklat fungsional',
                  'riwayat_fungsional_verified'     => $riwayat_fungsional_verified,
                  'riwayat_fungsional_notverified'     => $riwayat_fungsional_notverified,
                  'isi'       => 'skpd/peremajaan/diklat_fungsional');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function teknis()
  {
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_teknis_verified = $this->crud->gwo('riwayat_diklat', array('jenis_diklat' => 'teknis', 'status' => '1', 'admin' => $this->session->fullname),'uat ASC');
    $riwayat_teknis_notverified = $this->crud->gwo('riwayat_diklat', array('jenis_diklat' => 'teknis','status' => '0','admin' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Diklat teknis',
                  'riwayat_teknis_verified'     => $riwayat_teknis_verified,
                  'riwayat_teknis_notverified'     => $riwayat_teknis_notverified,
                  'isi'       => 'skpd/peremajaan/diklat_teknis');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function mutasi(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');
    $riwayat_mutasi_verified = $this->crud->gwo('riwayat_mutasi', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_mutasi_notverified = $this->crud->gwo('riwayat_mutasi', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian mutasi',
                  'riwayat_mutasi_verified'     => $riwayat_mutasi_verified,
                  'riwayat_mutasi_notverified'     => $riwayat_mutasi_notverified,
                  'isi'       => 'skpd/peremajaan/mutasi');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function kursus(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');
    $data_satker = $this->crud->gao('data_satker', 'nama_satker ASC');
    $riwayat_kursus_verified = $this->crud->gwo('riwayat_kursus', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_kursus_notverified = $this->crud->gwo('riwayat_kursus', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian kursus',
                  'data_satker'     => $data_satker,
                  'riwayat_kursus_verified'     => $riwayat_kursus_verified,
                  'riwayat_kursus_notverified'     => $riwayat_kursus_notverified,
                  'isi'       => 'skpd/peremajaan/kursus');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function penghargaan(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_penghargaan_verified = $this->crud->gwo('riwayat_penghargaan', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_penghargaan_notverified = $this->crud->gwo('riwayat_penghargaan', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian penghargaan',
                  'riwayat_penghargaan_verified'     => $riwayat_penghargaan_verified,
                  'riwayat_penghargaan_notverified'     => $riwayat_penghargaan_notverified,
                  'isi'       => 'skpd/peremajaan/penghargaan');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function profesi(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_profesi_verified = $this->crud->gwo('riwayat_profesi', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_profesi_notverified = $this->crud->gwo('riwayat_profesi', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian profesi',
                  'riwayat_profesi_verified'     => $riwayat_profesi_verified,
                  'riwayat_profesi_notverified'     => $riwayat_profesi_notverified,
                  'isi'       => 'skpd/peremajaan/profesi');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function unor(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $data_satker = $this->crud->gao('data_satker', 'nama_satker ASC');
    $riwayat_unor_verified = $this->crud->gwo('riwayat_unor', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_unor_notverified = $this->crud->gwo('riwayat_unor', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian PNS Subbidang/Seksi',
                  'data_satker'     => $data_satker,
                  'riwayat_unor_verified'     => $riwayat_unor_verified,
                  'riwayat_unor_notverified'     => $riwayat_unor_notverified,
                  'isi'       => 'skpd/peremajaan/unor');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function dp3(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_dp3_verified = $this->crud->gwo('riwayat_dp3', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_dp3_notverified = $this->crud->gwo('riwayat_dp3', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / DP3',
                  'riwayat_dp3_verified'     => $riwayat_dp3_verified,
                  'riwayat_dp3_notverified'     => $riwayat_dp3_notverified,
                  'isi'       => 'skpd/peremajaan/dp3');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function skp(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');

    $riwayat_skp_verified = $this->crud->gwo('riwayat_skp', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_skp_notverified = $this->crud->gwo('riwayat_skp', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / SKP',
                  'riwayat_skp_verified'     => $riwayat_skp_verified,
                  'riwayat_skp_notverified'     => $riwayat_skp_notverified,
                  'isi'       => 'skpd/peremajaan/skp');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function pemberhentian(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');
    $riwayat_pemberhentian_verified = $this->crud->gwo('riwayat_pemberhentian', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_pemberhentian_notverified = $this->crud->gwo('riwayat_pemberhentian', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian Pemberhentian',
                  'riwayat_pemberhentian_verified'     => $riwayat_pemberhentian_verified,
                  'riwayat_pemberhentian_notverified'     => $riwayat_pemberhentian_notverified,
                  'isi'       => 'skpd/peremajaan/pemberhentian');
    $this->load->view('skpd/_layout/wrapper', $data);
  }


  public function angkakredit(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');
    $riwayat_angkakredit_verified = $this->crud->gwo('riwayat_angkakredit', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_angkakredit_notverified = $this->crud->gwo('riwayat_angkakredit', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian Angka Kredit',
                  'riwayat_angkakredit_verified'     => $riwayat_angkakredit_verified,
                  'riwayat_angkakredit_notverified'     => $riwayat_angkakredit_notverified,
                  'isi'       => 'skpd/peremajaan/angkakredit');
    $this->load->view('skpd/_layout/wrapper', $data);
  }

  public function cuti(){
    if ($this->session->akses_level == 'Blocked') view_error('Error 404');
    $riwayat_cuti_verified = $this->crud->gwo('riwayat_cuti', array('status' => '1', 'sub_instansi' => $this->session->fullname), 'uat ASC');
    $riwayat_cuti_notverified = $this->crud->gwo('riwayat_cuti', array('status' => '0', 'sub_instansi' => $this->session->fullname), 'uat ASC');

    $data = array(  'title'     => 'Peremajaan Data / Kepegawaian cuti',
                  'riwayat_cuti_verified'     => $riwayat_cuti_verified,
                  'riwayat_cuti_notverified'     => $riwayat_cuti_notverified,
                  'isi'       => 'skpd/peremajaan/cuti');
    $this->load->view('skpd/_layout/wrapper', $data);
  }


  public function addData($tipe = NULL){
    $valid = $this->form_validation;
    $valid->set_error_delimiters('<i style="color: red;">', '</i>');
    $valid->set_rules('nip', 'Field NIP', 'required|trim|strip_tags|htmlspecialchars');
    $valid->set_rules('nama_lengkap', 'Field Nama Lengkap', 'required|trim|strip_tags|htmlspecialchars');
    $valid->set_rules('sub_instansi', 'Field Sub Instansi', 'required|trim|strip_tags|htmlspecialchars');
    $valid->set_rules('admin', 'Field Admin', 'required|trim|strip_tags|htmlspecialchars');
    switch ($tipe)
    {
      case 'data_pasangan':
      $valid->set_rules('jenis', 'Field Jenis', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('akta_nikah', ' Field No Akta Nikah', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_nikah', ' Field Tanggal Akta Nikah', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'nip'    => $input['nip'],
          'nama_lengkap'    => $input['nama_lengkap'],
          'sub_instansi'       => $input['sub_instansi'],
          'akta_nikah'       => $input['akta_nikah'],
          'tanggal_nikah'       => $input['tanggal_nikah'],
          'admin'    => $input['admin'],
          'jenis'       => $input['jenis'],
          'nama'       => $input['nama'],
          'ttl'       => $input['ttl'],
          'pekerjaan'       => $input['pekerjaan'],
          'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('data_pasangan', $data);
        $detail = $this->crud->gd('data_pasangan', array('nip' => $input['nip']));
        if ($detail) {
          return $this->response([
            'success'   => TRUE,
            'data'      => $detail
          ]);
        } else return $this->response(['success' => FALSE]);
      } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
      break;

      case 'data_anak':
      $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'admin'    => $input['admin'],
                      'nama'       => $input['nama'],
                      'ttl'       => $input['ttl'],
                      'pekerjaan'       => $input['pekerjaan'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('data_anak', $data);
        $detail = $this->crud->gd('data_anak', array('nip' => $input['nip'])
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
      $valid->set_rules('status_ortu', 'Field Status', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'status_ortu'       => $input['status_ortu'],
                      'nama'       => $input['nama'],
                      'ttl'       => $input['ttl'],
                      'pekerjaan'       => $input['pekerjaan'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('data_orangtua', $data);
        $detail = $this->crud->gd('data_orangtua', array('nip' => $input['nip']));
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
      $valid->set_rules('nama_sekolah', 'Field Nama Sekolah', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_jurusan', ' Field Jurusan', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_prodi', ' Field Program Studi', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('no_ijazah', ' Field No. Ijazah', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tahun_lulus', ' Field tahun Lulus', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'tingkat'       => $input['tingkat'],
                      'nama_sekolah'       => $input['nama_sekolah'],
                      'nama_prodi'       => $input['nama_prodi'],
                      'nama_jurusan'       => $input['nama_jurusan'],
                      'tahun_lulus'       => $input['tahun_lulus'],
                      'no_ijazah'       => $input['no_ijazah'],
                      'iat'               => date('Y-m-d H:i:s')
                    );

        $data['status'] = '1';
        $this->crud->i('riwayat_pendidikan', $data);
        $detail = $this->crud->gd('riwayat_pendidikan', array('nip' => $input['nip']));
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
      $valid->set_rules('nama_jabatan', 'Field Nama Jabatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('instansi_induk', 'Field Instansi Induk', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor_induk', 'Field Unor Induk', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor', 'Field Unor', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_jabatan', 'Field TMT Jabatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_pelantikan', 'Field TMT Pelantikan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('eselon', 'Field TMT Eselon', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pejabat', ' Field Jurusan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nomor', ' Field Nomor', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal', ' Field Tanggal', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'nip'    => $input['nip'],
          'nama_lengkap'    => $input['nama_lengkap'],
          'admin'    => $input['admin'],
          'jenis'       => $input['jenis'],
          'nama_jabatan'       => $input['nama_jabatan'],
          'instansi_induk'       => $input['instansi_induk'],
          'unor_induk'       => $input['unor_induk'],
          'unor'       => $input['unor'],
          'tmt_jabatan'       => $input['tmt_jabatan'],
          'tmt_pelantikan'       => $input['tmt_pelantikan'],
          'eselon'       => $input['eselon'],
          'pejabat'       => $input['pejabat'],
          'tanggal'       => $input['tanggal'],
          'nomor'       => $input['nomor'],
          'iat'               => date('Y-m-d H:i:s')
        );
        $data['status'] = '1';
        $this->crud->i('riwayat_jabatan', $data);

        $detail = $this->crud->gd('riwayat_jabatan', array('nip' => $input['nip']));
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'jabatan'       => $input['jabatan'],
                      'tmt'       => $input['tmt'],
                      'pangkat'       => $input['pangkat'],
                      'pejabat'       => $input['pejabat'],
                      'tanggal'       => $input['tanggal'],
                      'nomor'       => $input['nomor'],
                      'iat'               => date('Y-m-d H:i:s')
                    );
        $data['status'] = '1';
        $this->crud->i('riwayat_mutasi', $data);
        $detail = $this->crud->gd('riwayat_mutasi', array('nip' => $input['nip']));
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'jabatan'       => $input['jabatan'],
                      'tmt'       => $input['tmt'],
                      'pangkat'       => $input['pangkat'],
                      'pejabat'       => $input['pejabat'],
                      'tanggal'       => $input['tanggal'],
                      'nomor'       => $input['nomor'],
                      'iat'               => date('Y-m-d H:i:s')
                    );

        $data['status'] = '1';
        $this->crud->i('riwayat_mutasi', $data);
        $detail = $this->crud->gd('riwayat_mutasi', array('nip' => $input['nip']));
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
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

        $data['status'] = '1';
        $this->crud->i('riwayat_golongan', $data);
        $detail = $this->crud->gd('riwayat_golongan', array('nip' => $input['nip'])
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
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

        $data['status'] = '1';
        $this->crud->i('riwayat_diklat', $data);
        $detail = $this->crud->gd('riwayat_diklat', array('nip' => $input['nip']));
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
      $valid->set_rules('unit_kerja', ' Field Unit Kerja', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nomor_bkn', ' Field Kab/Kota/Sub Inst', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_bkn', ' Field Tanggal BKN', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('sumpah', ' Field Sumpah Kepegawaian', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pejabat_sumpah', ' Field Yang Mengambil Sumpah', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nomor_berita_acara', ' Field Nomor Berita Acara', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_berita_acara', ' Field Tanggal Berita Acara', 'trim|strip_tags|htmlspecialchars');


      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'no_sk'       => $input['no_sk'],
                      'pejabat'       => $input['nama_pejabat'],
                      'tanggal_sk'       => $input['tanggal_sk'],
                      'pangkat'       => $input['pangkat'],
                      'tanggal_tmt'       => $input['tmt'],
                      'instansi'       => $input['instansi'],
                      'unit_kerja'       => $input['unit_kerja'],
                      'iat'               => date('Y-m-d H:i:s')
                    );
        if ($input['nama_statuskepegawaian'] === 'cpns') {
            $data_id = acak_id('riwayat_pegawai_cpns', 'id_riwayat');
            $data['id_riwayat'] = $data_id['id'];
            $data['no_bkn'] = $input['nomor_bkn'];
            $data['tanggal_bkn'] = $input['tanggal_bkn'];


            $data['status'] = '1';
            $this->crud->i('riwayat_pegawai_cpns', $data);
            $detail = $this->crud->gd('riwayat_pegawai_cpns', array('id_riwayat' => $data['id_riwayat']));
            if ($detail) {
              return $this->response([
                'success'   => TRUE,
                'data'      => $detail
              ]);
            } else return $this->response(['success' => FALSE]);

        }else if($input['nama_statuskepegawaian'] == 'pns'){
          if($input['sumpah'] !== ''){

            $data_id = acak_id('riwayat_pegawai_pns', 'id_riwayat');
            $data['id_riwayat'] = $data_id['id'];
            $data['sumpah'] = $input['sumpah'];
            $data['pengambil_sumpah'] = $input['pejabat_sumpah'];
            $data['no_berita'] = $input['nomor_berita_acara'];
            $data['tanggal_berita'] = $input['tanggal_berita_acara'];


            $data['status'] = '1';
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'tipe_kursus'       => $input['tipe_kursus'],
                      'jenis_kursus'       => $input['jenis_kursus'],
                      'nama_kursus'       => $input['nama_kursus'],
                      'lama_kursus'       => $input['lama_kursus'],
                      'tahun_kursus'       => $input['tahun_kursus'],
                      'no_sertifikat_kursus'       => $input['no_sertifikat_kursus'],
                      'instansi_kursus'       => $input['instansi_kursus'],
                      'institusi_kursus'       => $input['institusi_kursus'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_kursus', $data);
        $detail = $this->crud->gd('riwayat_kursus', array('nip' => $input['nip'])
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'jenis_penghargaan'       => $input['jenis_penghargaan'],
                      'no_sk'       => $input['no_sk'],
                      'tanggal_sk'       => $input['tanggal_sk'],
                      'tahun_penghargaan'       => $input['tahun_penghargaan'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_penghargaan', $data);
        $detail = $this->crud->gd('riwayat_penghargaan', array('nip' => $input['nip'])
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'profesi'       => $input['profesi'],
                      'penyelenggara'       => $input['penyelenggara'],
                      'tahun_lulus'       => $input['tahun_lulus'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_profesi', $data);
        $detail = $this->crud->gd('riwayat_profesi', array('nip' => $input['nip'])
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'instansi'       => $input['instansi'],
                      'nama_unor'       => $input['nama_unor'],
                      'tanggal_sk'       => $input['tanggal_sk'],
                      'no_sk'       => $input['no_sk'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_unor', $data);
        $detail = $this->crud->gd('riwayat_unor', array('nip' => $input['nip'])
      );
        if ($detail) {
          return $this->response([
            'success'   => TRUE,
            'data'      => $detail
          ]);
        } else return $this->response(['success' => FALSE]);
      } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
      break;

      case 'riwayat_angkakredit':
      $valid->set_rules('no_sk_angkakredit', 'Field No SK Angka Kredit', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_sk_angkakredit', 'Field Tanggal SK Angka Kredit', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pertama_angkakredit', 'Field Angka Kredit Pertama', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('bulan_mulai_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('bulan_selesai_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tahun_selesai_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tahun_mulai_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ku_baru_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kp_baru_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('total_baru_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('id_jabatan_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_jabatan_angkakredit', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');


      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $pertama_angkakredit = $input['pertama_angkakredit'] == true ? 1 : 0;
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'no_sk'       => $input['no_sk_angkakredit'],
                      'tanggal_sk'       => $input['tanggal_sk_angkakredit'],
                      'pertama_angkakredit'       => $pertama_angkakredit,
                      'bulan_mulai'       => $input['bulan_mulai_angkakredit'],
                      'bulan_selesai'       => $input['bulan_selesai_angkakredit'],
                      'tahun_mulai'       => $input['tahun_mulai_angkakredit'],
                      'tahun_selesai'       => $input['tahun_selesai_angkakredit'],
                      'kredit_utama'       => $input['ku_baru_angkakredit'],
                      'kredit_penunjang'       => $input['kp_baru_angkakredit'],
                      'kredit_total'       => $input['total_baru_angkakredit'],
                      'id_jabatan'       => $input['id_jabatan_angkakredit'],
                      'jabatan'       => $input['nama_jabatan_angkakredit'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_angkakredit', $data);
        $detail = $this->crud->gd('riwayat_angkakredit', array('nip' => $input['nip'])
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
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'jenis_pemberhentian'       => $input['jenis_pemberhentian'],
                      'kedudukan_hukum'       => $input['kedudukan_hukum'],
                      'tanggal_sk'       => $input['tanggal_sk'],
                      'no_sk'       => $input['no_sk'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_pemberhentian', $data);
        $detail = $this->crud->gd('riwayat_pemberhentian', array('nip' => $input['nip'])
      );
        if ($detail) {
          return $this->response([
            'success'   => TRUE,
            'data'      => $detail
          ]);
        } else return $this->response(['success' => FALSE]);
      } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
      break;

      case 'riwayat_dp3':
      $valid->set_rules('jenis_jabatan', 'Field Jenis jabatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tahun', 'Field Tahun', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kesetiaan', 'Field kesetiaan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggung', 'Field Tanggung Jawab', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kejujuran', 'Field Kejujuran', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('prakarsa', 'Field prakarsa', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('prestasi', 'Field prestasi kerja', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ketaatan', 'Field ketaatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kerjasama', 'Field kerjasama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nilai_ratarata', 'Field Rata Rata', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('keterangan', 'Field Keterangan Rata Rata', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jumlah', 'Field Jumlah', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_pejabat', 'Field nama pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nip_pejabat', 'Field nip pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('golongan_pejabat', 'Field golongan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor_pejabat', 'Field unor pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jabatan_pejabat', 'Field jabatan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_pejabat', 'Field tmt golongan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_atasan_pejabat', 'Field nama atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nip_atasan_pejabat', 'Field nip atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('golongan_atasan_pejabat', 'Field golongan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor_atasan_pejabat', 'Field unor pejabat atasan  penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jabatan_atasan_pejabat', 'Field jabatan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_atasan_pejabat', 'Field tmt golongan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');

      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'jenis_jabatan'       => $input['jenis_jabatan'],
                      'tahun'       => $input['tahun'],
                      'kesetiaan'       => $input['kesetiaan'],
                      'tanggung'       => $input['tanggung'],
                      'kejujuran'       => $input['kejujuran'],
                      'prakarsa'       => $input['prakarsa'],
                      'prestasi'       => $input['prestasi'],
                      'ketaatan'       => $input['ketaatan'],
                      'kerjasama'       => $input['kerjasama'],
                      'nilai_ratarata'       => $input['nilai_ratarata'],
                      'keterangan'       => $input['keterangan'],
                      'jumlah'       => $input['jumlah'],
                      'nama_pejabat'       => $input['nama_pejabat'],
                      'nip_pejabat'       => $input['nip_pejabat'],
                      'unor_pejabat'       => $input['unor_pejabat'],
                      'golongan_pejabat'       => $input['golongan_pejabat'],
                      'tmt_pejabat'       => $input['tmt_pejabat'],
                      'jabatan_pejabat'       => $input['jabatan_pejabat'],
                      'nama_atasan_pejabat'       => $input['nama_atasan_pejabat'],
                      'nip_atasan_pejabat'       => $input['nip_atasan_pejabat'],
                      'unor_atasan_pejabat'       => $input['unor_atasan_pejabat'],
                      'golongan_atasan_pejabat'       => $input['golongan_atasan_pejabat'],
                      'tmt_atasan_pejabat'       => $input['tmt_atasan_pejabat'],
                      'jabatan_atasan_pejabat'       => $input['jabatan_atasan_pejabat'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_dp3', $data);
        $detail = $this->crud->gd('riwayat_dp3', array('nip' => $input['nip'])
      );
        if ($detail) {
          return $this->response([
            'success'   => TRUE,
            'data'      => $detail
          ]);
        } else return $this->response(['success' => FALSE]);
      } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
      break;

      case 'riwayat_skp':
      $valid->set_rules('jenis_jabatan', 'Field Jenis jabatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tahun', 'Field Tahun', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('komitmen', 'Field komitmen', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kerjasama', 'Field kerjasama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('integritas', 'Field integritas', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('disiplin', 'Field prakarsa', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kepemimpinan', 'Field kepemimpinan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('orientasi', 'Field orientasi', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_pejabat', 'Field nama pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nip_pejabat', 'Field nip pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('golongan_pejabat', 'Field golongan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor_pejabat', 'Field unor pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jabatan_pejabat', 'Field jabatan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_pejabat', 'Field tmt golongan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_atasan_pejabat', 'Field nama atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nip_atasan_pejabat', 'Field nip atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('golongan_atasan_pejabat', 'Field golongan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor_atasan_pejabat', 'Field unor pejabat atasan  penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jabatan_atasan_pejabat', 'Field jabatan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_atasan_pejabat', 'Field tmt golongan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nilai_skp', 'Field nilai_skp', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('hasil_nilai_skp', 'Field hasil_nilai_skp', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nilai_perilaku_kerja', 'Field nilai_perilaku_kerja', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('hasil_nilai_perilaku_kerja', 'Field hasil_nilai_perilaku_kerja', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nilai_prestasi_kerja', 'Field nilai_prestasi_kerja', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ket_nilai_prestasi_kerja', 'Field ket_nilai_prestasi_kerja', 'required|trim|strip_tags|htmlspecialchars');

      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(  'nip'    => $input['nip'],
                      'nama_lengkap'    => $input['nama_lengkap'],
                      'admin'    => $input['admin'],
                      'sub_instansi'       => $input['sub_instansi'],
                      'jenis_jabatan'       => $input['jenis_jabatan'],
                      'tahun'       => $input['tahun'],
                      'komitmen'       => $input['komitmen'],
                      'kerjasama'       => $input['kerjasama'],
                      'integritas'       => $input['integritas'],
                      'disiplin'       => $input['disiplin'],
                      'kepemimpinan'       => $input['kepemimpinan'],
                      'orientasi'       => $input['orientasi'],
                      'nama_pejabat'       => $input['nama_pejabat'],
                      'nip_pejabat'       => $input['nip_pejabat'],
                      'unor_pejabat'       => $input['unor_pejabat'],
                      'golongan_pejabat'       => $input['golongan_pejabat'],
                      'tmt_pejabat'       => $input['tmt_pejabat'],
                      'jabatan_pejabat'       => $input['jabatan_pejabat'],
                      'nama_atasan_pejabat'       => $input['nama_atasan_pejabat'],
                      'nip_atasan_pejabat'       => $input['nip_atasan_pejabat'],
                      'unor_atasan_pejabat'       => $input['unor_atasan_pejabat'],
                      'golongan_atasan_pejabat'       => $input['golongan_atasan_pejabat'],
                      'tmt_atasan_pejabat'       => $input['tmt_atasan_pejabat'],
                      'jabatan_atasan_pejabat'       => $input['jabatan_atasan_pejabat'],
                      'nilai_skp'       => $input['nilai_skp'],
                      'hasil_nilai_skp'       => $input['hasil_nilai_skp'],
                      'nilai_perilaku_kerja'       => $input['nilai_perilaku_kerja'],
                      'hasil_nilai_perilaku_kerja'       => $input['hasil_nilai_perilaku_kerja'],
                      'nilai_prestasi_kerja'       => $input['nilai_prestasi_kerja'],
                      'ket_nilai_prestasi_kerja'       => $input['ket_nilai_prestasi_kerja'],
                      'iat'               => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_skp', $data);
        $detail = $this->crud->gd('riwayat_skp', array('nip' => $input['nip'])
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
      $valid->set_rules('jenis_cuti', 'Field Jenis cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('no_bkn', 'Field Nomor BKN', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_bkn', 'Field Tanggal BKN', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_skep', 'Field Tanggal SKEP cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_akhir', 'Field Tanggal Akhir cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_aktif', 'Field Tanggal Aktif cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_awal', 'Field Tanggal Awal cuti', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'nip'           => $input['nip'],
          'nama_lengkap'  => $input['nama_lengkap'],
          'sub_instansi'  => $input['sub_instansi'],
          'admin'         => $input['admin'],
          'jenis_cuti'    => $input['jenis_cuti'],
          'tanggal_awal'  => $input['tanggal_awal'],
          'tanggal_aktif' => $input['tanggal_aktif'],
          'tanggal_akhir' => $input['tanggal_akhir'],
          'tanggal_skep'  => $input['tanggal_skep'],
          'tanggal_bkn'   => $input['tanggal_bkn'],
          'no_bkn'        => $input['no_bkn'],
          'no_sk'         => $input['no_sk'],
          'iat'           => date('Y-m-d H:i:s'));

        $data['status'] = '1';
        $this->crud->i('riwayat_cuti', $data);
        $detail = $this->crud->gd('riwayat_cuti', array('nip' => $input['nip'])
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
  public function editData($id = NULL, $tipe = NULL){
    $valid = $this->form_validation;
    $valid->set_error_delimiters('<i style="color: red;">', '</i>');
    switch ($tipe)
    {
      case 'data_pasangan':
      $valid->set_rules('jenis', 'Field Jenis', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('akta_nikah', ' Field No AKta', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_nikah', ' Field Tanggal AKta', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'jenis'       => $input['jenis'],
          'nama'       => $input['nama'],
          'ttl'       => $input['ttl'],
          'akta_nikah'       => $input['akta_nikah'],
          'tanggal_nikah'       => $input['tanggal_nikah'],
          'pekerjaan'       => $input['pekerjaan'],
          'uat'               => date('Y-m-d H:i:s')
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
      $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'nama'       => $input['nama'],
          'ttl'       => $input['ttl'],
          'pekerjaan'       => $input['pekerjaan'],
          'uat'               => date('Y-m-d H:i:s'));
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
      $valid->set_rules('status_ortu', 'Field Status', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama', 'Field Nama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ttl', ' Field Tempat Tanggal Lahir', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pekerjaan', ' Field Pekerjaan', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'status_ortu'       => $input['status_ortu'],
          'nama'       => $input['nama'],
          'ttl'       => $input['ttl'],
          'pekerjaan'       => $input['pekerjaan'],
          'uat'               => date('Y-m-d H:i:s'
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
      $valid->set_rules('nama_sekolah', 'Field Nama Sekolah', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_jurusan', ' Field Jurusan', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_prodi', ' Field Program Studi', 'trim|strip_tags|htmlspecialchars');
      $valid->set_rules('no_ijazah', ' Field No. Ijazah', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tahun_lulus', ' Field tahun Lulus', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'tingkat'       => $input['tingkat'],
          'nama_sekolah'       => $input['nama_sekolah'],
          'nama_prodi'       => $input['nama_prodi'],
          'nama_jurusan'       => $input['nama_jurusan'],
          'tahun_lulus'       => $input['tahun_lulus'],
          'no_ijazah'       => $input['no_ijazah'],
          'uat'               => date('Y-m-d H:i:s')
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
      $valid->set_rules('nama_jabatan', 'Field Nama Jabatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_jabatan', 'Field TMT Jabatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_pelantikan', 'Field TMT Pelantikan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('eselon', 'Field Eselon', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('pejabat', ' Field Jurusan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nomor', ' Field Nomor', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal', ' Field Tanggal', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'jenis'       => $input['jenis'],
          'kedudukan'       => $input['kedudukan'],
          'nama_jabatan'       => $input['nama_jabatan'],
          'tmt_jabatan'       => $input['tmt_jabatan'],
          'tmt_pelantikan'       => $input['tmt_pelantikan'],
          'eselon'       => $input['eselon'],
          'pejabat'       => $input['pejabat'],
          'tanggal'       => $input['tanggal'],
          'nomor'       => $input['nomor'],
          'uat'               => date('Y-m-d H:i:s')
        );
        $this->crud->u('riwayat_jabatan', $data, array('id_riwayat' => $id));
        $this->crud->u('riwayat_angkakredit', array('jabatan' => $input['nama_jabatan']), array('id_jabatan' => $id));

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
          'uat'               => date('Y-m-d H:i:s')
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
          'uat'               => date('Y-m-d H:i:s'));

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
          'uat'               => date('Y-m-d H:i:s')
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
      $valid->set_rules('unit_kerja', ' Field Unit Kerja', 'trim|strip_tags|htmlspecialchars');
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
          'uat'               => date('Y-m-d H:i:s')
        );

//Mengecek Pilihan Riwayat
        if ($input['nama_statuskepegawaian'] === 'cpns') {
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
        }else if($input['nama_statuskepegawaian'] == 'pns'){
          if($input['sumpah'] !== '' AND $input['nomor_berita_acara'] !== '' AND $input['tanggal_berita_acara'] !== ''){


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
          'uat'               => date('Y-m-d H:i:s'));
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
          'uat'               => date('Y-m-d H:i:s'));
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
          'uat'               => date('Y-m-d H:i:s'));
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
          'uat'               => date('Y-m-d H:i:s'));
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
          'uat'               => date('Y-m-d H:i:s'));
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

      case 'riwayat_dp3':
      $valid->set_rules('jenis_jabatan', 'Field Jenis jabatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tahun', 'Field Tahun', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kesetiaan', 'Field kesetiaan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggung', 'Field Tanggung Jawab', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kejujuran', 'Field Kejujuran', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('prakarsa', 'Field prakarsa', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('prestasi', 'Field prestasi kerja', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('ketaatan', 'Field ketaatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('kerjasama', 'Field kerjasama', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nilai_ratarata', 'Field Rata Rata', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('keterangan', 'Field Keterangan Rata Rata', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jumlah', 'Field Jumlah', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_pejabat', 'Field nama pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nip_pejabat', 'Field nip pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('golongan_pejabat', 'Field golongan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor_pejabat', 'Field unor pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jabatan_pejabat', 'Field jabatan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_pejabat', 'Field tmt golongan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_atasan_pejabat', 'Field nama atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nip_atasan_pejabat', 'Field nip atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('golongan_atasan_pejabat', 'Field golongan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('unor_atasan_pejabat', 'Field unor pejabat atasan  penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('jabatan_atasan_pejabat', 'Field jabatan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tmt_atasan_pejabat', 'Field tmt golongan atasan pejabat penilai', 'required|trim|strip_tags|htmlspecialchars');

      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'admin'    => $input['admin'],
          'jenis_jabatan'       => $input['jenis_jabatan'],
          'tahun'       => $input['tahun'],
          'kesetiaan'       => $input['kesetiaan'],
          'tanggung'       => $input['tanggung'],
          'kejujuran'       => $input['kejujuran'],
          'prakarsa'       => $input['prakarsa'],
          'prestasi'       => $input['prestasi'],
          'ketaatan'       => $input['ketaatan'],
          'kerjasama'       => $input['kerjasama'],
          'nilai_ratarata'       => $input['nilai_ratarata'],
          'keterangan'       => $input['keterangan'],
          'jumlah'       => $input['jumlah'],
          'nama_pejabat'       => $input['nama_pejabat'],
          'nip_pejabat'       => $input['nip_pejabat'],
          'unor_pejabat'       => $input['unor_pejabat'],
          'golongan_pejabat'       => $input['golongan_pejabat'],
          'tmt_pejabat'       => $input['tmt_pejabat'],
          'jabatan_pejabat'       => $input['jabatan_pejabat'],
          'nama_atasan_pejabat'       => $input['nama_atasan_pejabat'],
          'nip_atasan_pejabat'       => $input['nip_atasan_pejabat'],
          'unor_atasan_pejabat'       => $input['unor_atasan_pejabat'],
          'golongan_atasan_pejabat'       => $input['golongan_atasan_pejabat'],
          'tmt_atasan_pejabat'       => $input['tmt_atasan_pejabat'],
          'jabatan_atasan_pejabat'       => $input['jabatan_atasan_pejabat'],
          'iat'               => date('Y-m-d H:i:s'));
        $this->crud->u('riwayat_dp3', $data, array('id_riwayat' => $id));
        $detail = $this->crud->gd('riwayat_dp3', array('id_riwayat' => $id)
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
      $valid->set_rules('jenis_cuti', 'Field Jenis cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('no_sk', 'Field Nomor SK', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('no_bkn', 'Field Nomor BKN', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_bkn', 'Field Tanggal BKN', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_skep', 'Field Tanggal SKEP cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_akhir', 'Field Tanggal Akhir cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_aktif', 'Field Tanggal Aktif cuti', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('tanggal_awal', 'Field Tanggal Awal cuti', 'required|trim|strip_tags|htmlspecialchars');
      if ($valid->run() === TRUE)
      {
        $input = $this->input->post(NULL, TRUE);
        $data = array(
          'jenis_cuti'       => $input['jenis_cuti'],
          'tanggal_awal'       => $input['tanggal_awal'],
          'tanggal_aktif'       => $input['tanggal_aktif'],
          'tanggal_akhir'       => $input['tanggal_akhir'],
          'tanggal_skep'       => $input['tanggal_skep'],
          'tanggal_bkn'       => $input['tanggal_bkn'],
          'sub_instansi'       => $input['sub_instansi'],
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
  public function hapusRiwayat($table, $id){
    $cek = $this->crud->gd('riwayat_'.$table, array('id_riwayat' => $id));
    if ($cek)
    {
      $this->crud->d('riwayat_'.$table, array('id_riwayat' => $id));
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


  public function getDataPegawaiAjax(){
    $data = $this->crud->qr("SELECT * FROM data_pegawai WHERE CONCAT(nip,nama_lengkap) LIKE '%".$_GET['q']."%'");

    if ($data) {
      return $this->response([
        'success'   => TRUE,
        'data_pegawai'      => $data,
        'total_count' => count($data)
      ]);
    } else return $this->response(['success' => FALSE]);
  }

  public function getRiwayatJabatan(){
    $input = $this->input->post(NULL, TRUE);

    $detail = $this->crud->qr('SELECT id_riwayat as id, nama_jabatan as jabatan FROM riwayat_jabatan where nip = "'.$input['nip'].'"');
    if ($detail) {
      return $this->response([
        'success'   => TRUE,
        'data'      => $detail
      ]);
    } else return $this->response(['success' => FALSE]);
  }

  public function changePendidikanStatus(){
   $nip = $this->input->post('nip');
   $id = $this->input->post('id');
   $data['saat_ini'] = '0';
   $this->crud->u('riwayat_pendidikan', $data, array('nip' => $nip));
   $data['saat_ini'] = '1';
   $status = $this->crud->u('riwayat_pendidikan', $data, array('id_riwayat' => $id));
   $all = $this->crud->gw('riwayat_pendidikan', array('nip' => $nip));
   $changed = $this->crud->gw('riwayat_pendidikan', array('id_riwayat' => $id));
   if ($this->crud->cw('riwayat_pendidikan', array('id_riwayat' => $id, 'saat_ini' => '1')) > 0) {
     return $this->response(['success' => TRUE, 'data' => array('all' => $all, 'changed' => $changed)]);
   }

   return $this->response(['success' => FALSE]);


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
