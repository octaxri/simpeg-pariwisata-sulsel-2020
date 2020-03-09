<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai = $this->crud->gw('data_pegawai', array('satuan_kerja' => $this->session->fullname));
        $data_pegawai_pns = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "pns", 'satuan_kerja' => $this->session->fullname));
        $data_pegawai_cpns = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "cpns", 'satuan_kerja' => $this->session->fullname));
        $data_pegawai_pensiun = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "pensiun", 'satuan_kerja' => $this->session->fullname));


        $data = array(  'title'     => 'Halaman Dasbor',
                        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
                        'data_pegawai' => $data_pegawai,
                        'total_pegawai' => count($data_pegawai),
                        'data_pegawai_pns' => $data_pegawai_pns,
                        'data_pegawai_cpns' => $data_pegawai_cpns,
                        'data_pegawai_pensiun' => $data_pegawai_pensiun,
                        'isi'       => 'skpd/dashboard/beranda');
        $this->load->view('skpd/_layout/wrapper', $data);
    }
}
