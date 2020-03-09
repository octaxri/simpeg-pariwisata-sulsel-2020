<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDokumen extends MY_Controller {

    public function index(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        // $data_pegawai = $this->crud->ga('data_pegawai');
        $data_satker = $this->session->fullname;

        $data = array(  'title'     => 'Dokumen Pegawai',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'table'     => 'data_pegawai',
        'satker'    => $this->session->fullname,
        'isi'       => 'skpd/data_dokumen/beranda');
        $this->load->view('skpd/_layout/wrapper', $data);
    }
    public function lihat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $nip = $this->input->get('nip');
        $data_dokumen = $this->crud->ga('data_dokumen');

        $data = array(  'title'     => '<a href="'.skpd_url("dokumen").'">Dokumen Pegawai</a> / NIP '.$nip,
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'data_dokumen'=> $data_dokumen,
        'table'     => 'dokumen_pegawai',
        'isi'       => 'skpd/data_dokumen/lihat',
        'nip'       => $nip);
        $this->load->view('skpd/_layout/wrapper', $data);
    }
}