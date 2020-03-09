<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data_pegawai = $this->crud->qr('SELECT DISTINCT ANY_VALUE(g.nip) as nip, ANY_VALUE(g.status_kepegawaian) as status_kepegawaian, COUNT(g.status_kepegawaian) as total FROM data_pegawai as g ORDER BY g.status_kepegawaian ASC');
        
        foreach ($data_pegawai as $data_pegawai) {
            $status_kepegawaian[] = $data_pegawai->status_kepegawaian;
            $total[] = $data_pegawai->total;
        }

        $data_pegawai         = $this->crud->ga('data_pegawai');
        $data_informasi       = $this->crud->gao('data_informasi', 'uat DESC');
        $data_pegawai_pns     = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "pns"));
        $data_pegawai_cpns    = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "Calon PNS"));
        $data_pegawai_pensiun = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "pensiun"));

        $data = array(  
            'title'                => 'SIMPEG | Sistem Informasi Manajemen Kepegawaian',
            'status_kepegawaian'   => $status_kepegawaian,
            'total'                => $total,
            'data_pegawai'         => $data_pegawai,
            'total_pegawai'        => count($data_pegawai),
            'data_pegawai_pns'     => $data_pegawai_pns,
            'data_pegawai_cpns'    => $data_pegawai_cpns,
            'data_pegawai_pensiun' => $data_pegawai_pensiun,
            'data_informasi'       => $data_informasi,
            'isi'                  => 'homepage/home'
        );
        $this->load->view('homepage/_layout/wrapper', $data);
    }
}
