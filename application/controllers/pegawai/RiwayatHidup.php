<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatHidup extends MY_Controller {


    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => $this->session->username));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => $this->session->username));
        $keterangan_lainnya = $this->crud->gd('keterangan_lainnya', array('nip' => $this->session->username));
        $data = array(  'data_pegawai' => $data_pegawai,
                        'data_alamat' => $data_alamat,
                        'keterangan_lainnya' => $keterangan_lainnya,
                        'title'     => 'Riwayat Hidup',
                        'isi'       => 'pegawai/riwayat_hidup/riwayat_hidup');
        $this->load->view('pegawai/_layout/wrapper', $data);
    }

     public function cetak_riwayatHidup()
    {
        // if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        // $data = array(  'title'     => 'Laporan / Daftar Riwayat Hidup',
        //                 'isi'       => 'pegawai/riwayat_hidup/cetak_riwayat');
        // $this->load->view('pegawai/_layout/wrapper', $data);
    }

}
