<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDokumen extends Admin_controller {

    public function index(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_satker = $this->crud->ga('data_satker');

        $data = array(  'title'     => 'Dokumen Pegawai',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'data_satker'=> $data_satker,
        'table'     => 'data_pegawai',
        'isi'       => 'admin/data_dokumen/beranda');
        $this->load->view('admin/_layout/wrapper', $data);
    }
    public function lihat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $nip = $this->input->get('nip');
        $data_dokumen = $this->crud->ga('data_dokumen');

        $data = array(  'title'     => '<a href="'.admin_url("dokumen").'">Dokumen</a> / NIP '.$nip,
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'data_dokumen'=> $data_dokumen,
        'table'     => 'dokumen_pegawai',
        'isi'       => 'admin/data_dokumen/lihat',
        'nip'       => $nip);
        $this->load->view('admin/_layout/wrapper', $data);
    }
}
