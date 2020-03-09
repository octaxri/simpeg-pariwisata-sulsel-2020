<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpp extends MY_Controller {

    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => '1234354875676423'));
        $data_pegawai_12 = $this->crud->qr("SELECT * FROM data_pegawai WHERE ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 9) AND ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%m/%d/%Y'), NOW())) <= 12) AND `satuan_kerja` = '".$this->session->fullname."' ");
        $data_pegawai_9 = $this->crud->qr("SELECT * FROM data_pegawai WHERE ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 6) AND ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%m/%d/%Y'), NOW())) <= 9) AND `satuan_kerja` = '".$this->session->fullname."' ");
        $data_pegawai_6 = $this->crud->qr("SELECT * FROM data_pegawai WHERE ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 3) AND ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%m/%d/%Y'), NOW())) <= 6) AND `satuan_kerja` = '".$this->session->fullname."' ");
        $data_pegawai_3 = $this->crud->qr("SELECT * FROM data_pegawai WHERE ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 1) AND ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%m/%d/%Y'), NOW())) <= 3) AND `satuan_kerja` = '".$this->session->fullname."' ");
        $data_pegawai_1 = $this->crud->qr("SELECT * FROM data_pegawai WHERE ((TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) < 1) AND `satuan_kerja` = '".$this->session->fullname."' ");


        $data_alamat = $this->crud->gd('data_alamat', array('nip' => '1234354875676423'));
        $data_keteranganlainnya = $this->crud->gd('keterangan_lainnya', array('nip' => '1234354875676423'));
        $data_keteranganbadan = $this->crud->gd('keterangan_badan', array('nip' => '1234354875676423'));
        $data_pasangan = $this->crud->gw('data_pasangan', array('nip' => '1234354875676423'));
        $data_anak = $this->crud->gw('data_anak', array('nip' => '1234354875676423'));
        $data_orangtua = $this->crud->gw('data_orangtua', array('nip' => '1234354875676423'));
        $riwayat_pendidikan = $this->crud->gw('riwayat_pendidikan', array('nip' => '1234354875676423'));
        $riwayat_jabatan = $this->crud->gw('riwayat_jabatan', array('nip' => '1234354875676423'));
        $riwayat_mutasi = $this->crud->gw('riwayat_mutasi', array('nip' => '1234354875676423'));
        $riwayat_golongan = $this->crud->gw('riwayat_golongan', array('nip' => '1234354875676423'));
        $riwayat_diklat = $this->crud->gw('riwayat_diklat', array('nip' => '1234354875676423'));
        $riwayat_diklat1 = $this->crud->gw('riwayat_diklat', array('nip' => '1234354875676423'));
        $riwayat_diklat2 = $this->crud->gw('riwayat_diklat', array('nip' => '1234354875676423'));


        $data_agama = $this->crud->ga('data_agama');
        $data_pendidikan = $this->crud->ga('data_pendidikan');
        $data_satker = $this->crud->ga('data_satker');
        $data_unit = $this->crud->ga('data_unit');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $data_jenisjabatan = $this->crud->ga('data_jenisjabatan');
        $data_golongan = $this->crud->ga('data_golongan');
        $data_eselon = $this->crud->ga('data_eselon');
        $data = array(  'title'     => 'Halaman Daftar Masa Persiapan Pensiun',
                        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
                                                'data_agama'=> $data_agama,
                        'data_pendidikan'=> $data_pendidikan,
                        'data_satker'=> $data_satker,
                        'data_unit'=> $data_unit,
                        'data_jabatan'=> $data_jabatan,
                        'data_jenisjabatan'=> $data_jenisjabatan,
                        'data_golongan'=> $data_golongan,
                        'data_eselon'=> $data_eselon,
                        'data_pegawai_12'=> $data_pegawai_12,
                        'data_pegawai_9'=> $data_pegawai_9,
                        'data_pegawai_6'=> $data_pegawai_6,
                        'data_pegawai_3'=> $data_pegawai_3,
                        'data_pegawai_1'=> $data_pegawai_1,
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
                        'isi'       => 'skpd/mpp/beranda');
        $this->load->view('skpd/_layout/wrapper', $data);
    }
}
