<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends  Admin_controller
{

    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai = $this->crud->ga('data_pegawai');
        $data_pegawai_pns = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "pns"));
        $data_pegawai_cpns = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "Calon PNS"));
        $data_pegawai_pensiun = $this->crud->cw('data_pegawai', array("status_kepegawaian" => "pensiun"));
        $data = array(
            'title'     => 'Halaman Dasbor',
            'subtitle'  => 'Selamat datang, ' . $this->session->fullname . '.',
            'data_pegawai' => $data_pegawai,
            'total_pegawai' => count($data_pegawai),
            'data_pegawai_pns' => $data_pegawai_pns,
            'data_pegawai_cpns' => $data_pegawai_cpns,
            'data_pegawai_pensiun' => $data_pegawai_pensiun,
            'isi'       => 'admin/dashboard/beranda'
        );
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function mark_as_read($id)
    {
        if ($id == NULL)
            return FALSE;

        $this->markAsRead($id);

        redirect(admin_url('mpp'));
    }

    public function mark_all_as_read()
    {
        $this->markAllAsRead();
        redirect(admin_url('mpp'));
    }

    public function fix_eselon_data()
    {
        $data_pegawai = $this->crud->ga('data_pegawai');

        foreach ($data_pegawai as $data_pegawai) {
            switch ($data_pegawai->eselon) {
                case 'IIa':
                    $eselon = 'II.a';
                    break;
                case 'IIb':
                    $eselon = 'II.b';
                    break;

                case 'IIIa':
                    $eselon = 'III.a';
                    break;

                case 'IIIb':
                    $eselon = 'III.b';
                    break;

                case 'IVa':
                    $eselon = 'IV.a';
                    break;

                case 'IVb':
                    $eselon = 'IV.b';
                    break;
                default:
                    $eselon = $data_pegawai->eselon;
                    break;
            }
            $this->crud->u('data_pegawai', array('eselon' => $eselon), array('nip' => $data_pegawai->nip));
        }
    }
}
