<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' =>  $this->session->username));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' =>  $this->session->username));
        $data_keteranganlainnya = $this->crud->gd('keterangan_lainnya', array('nip' =>  $this->session->username));
        $data_keteranganbadan = $this->crud->gd('keterangan_badan', array('nip' =>  $this->session->username));
        $data_pasangan = $this->crud->gw('data_pasangan', array('nip' =>  $this->session->username));
        $data_anak = $this->crud->gw('data_anak', array('nip' =>  $this->session->username));
        $data_orangtua = $this->crud->gw('data_orangtua', array('nip' =>  $this->session->username));

        // riwayat data
        $riwayat_pendidikan = $this->crud->gw('riwayat_pendidikan', array('nip' =>  $this->session->username));
        $riwayat_jabatan = $this->crud->gw('riwayat_jabatan', array('nip' =>  $this->session->username));
        $riwayat_mutasi = $this->crud->gw('riwayat_mutasi', array('nip' =>  $this->session->username));
        $riwayat_golongan = $this->crud->gw('riwayat_golongan', array('nip' =>  $this->session->username));
        $riwayat_diklat = $this->crud->gw('riwayat_diklat', array('nip' =>  $this->session->username));
        $riwayat_diklat1 = $this->crud->gw('riwayat_diklat', array('nip' =>  $this->session->username));
        $riwayat_diklat2 = $this->crud->gw('riwayat_diklat', array('nip' =>  $this->session->username));
        $riwayat_cpns = $this->crud->gw('riwayat_pegawai_cpns', array('nip' =>  $this->session->username));
        $riwayat_pns = $this->crud->gw('riwayat_pegawai_pns', array('nip' =>  $this->session->username));
        $riwayat_kursus = $this->crud->gw('riwayat_kursus', array('nip' =>  $this->session->username));
        $riwayat_penghargaan = $this->crud->gw('riwayat_penghargaan', array('nip' =>  $this->session->username));
        $riwayat_profesi = $this->crud->gw('riwayat_profesi', array('nip' =>  $this->session->username));
        $riwayat_unor = $this->crud->gw('riwayat_unor', array('nip' =>  $this->session->username));
        $riwayat_pemberhentian = $this->crud->gw('riwayat_pemberhentian', array('nip' =>  $this->session->username));
        $riwayat_angkakredit = $this->crud->gw('riwayat_angkakredit', array('nip' =>  $this->session->username));
        $riwayat_cuti = $this->crud->gw('riwayat_cuti', array('nip' =>  $this->session->username));



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
            'isi'       => 'pegawai/dashboard/beranda');
        
        $this->load->view('pegawai/_layout/wrapper', $data);
    }
}
