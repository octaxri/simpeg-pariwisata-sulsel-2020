<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends MY_Controller {

//    public function index()
//    {
//        redirect(pegawai_url('cuti'));
//    }

    public function index(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => $this->session->username));
        $permohonan_cuti = $this->crud->gao('permohonan_cuti', 'iat DESC');

        $data = array(  'title'     => 'Permohonan cuti',
            'permohonan_cuti'     => $permohonan_cuti,
            'data_pegawai' => $data_pegawai,
            'isi'       => 'pegawai/cuti');
        $this->load->view('pegawai/_layout/wrapper', $data);
    }

    public function addData($tipe = NULL){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nip', 'Field NIP', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_lengkap', 'Field Nama Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('admin', 'Field Admin', 'required|trim|strip_tags|htmlspecialchars');
        switch ($tipe)
        {

            case 'riwayat_cuti':
                $valid->set_rules('jenis_cuti', 'Field Jenis cuti', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_akhir', 'Field Tanggal Akhir cuti', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_aktif', 'Field Tanggal Aktif cuti', 'required|trim|strip_tags|htmlspecialchars');
                $valid->set_rules('tanggal_awal', 'Field Tanggal Awal cuti', 'required|trim|strip_tags|htmlspecialchars');
                if ($valid->run() === TRUE)
                {
                    $input = $this->input->post(NULL, TRUE);
                    $data = array(
                        'nip'           => $input['nip'],
                        'nama_lengkap'  => $input['nama_lengkap'],
                        'admin'         => $input['admin'],
                        'jenis_cuti'    => $input['jenis_cuti'],
                        'tanggal_awal'  => $input['tanggal_awal'],
                        'tanggal_aktif' => $input['tanggal_aktif'],
                        'tanggal_akhir' => $input['tanggal_akhir'],
                        'keterangan'    => $input['keterangan'],
                        'iat'           => date('Y-m-d H:i:s'));

                    $this->crud->i('permohonan_cuti', $data);
                    $detail = $this->crud->gd('permohonan_cuti', array('nip' => $input['nip'])
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

            case 'riwayat_cuti':
                $valid->set_rules('jenis_cuti', 'Field Jenis cuti', 'required|trim|strip_tags|htmlspecialchars');
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
                        'uat'               => date('Y-m-d H:i:s'));
                    $this->crud->u('permohonan_cuti', $data, array("id" => $id));
                    $detail = $this->crud->gd('permohonan_cuti', array("id" => $id)
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
        $cek = $this->crud->gd($table, array('id' => $id));
        if ($cek)
        {
            $this->crud->d($table, array('id' => $id));
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
