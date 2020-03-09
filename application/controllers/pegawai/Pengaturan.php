<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends MY_Controller {


    public function index()
    {
       redirect(pegawai_url('ubah-password'));
    }

     public function ubah_password()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('password', 'Field New Password', 'trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);
            $data = array( 'password'  => do_hash($input['password']));

            $this->crud->u('users', $data, array('username' => $this->session->username));
            $detail = $this->crud->gd('users', array('username' => $this->session->username));
            if ($detail) {
                $this->session->username = '';
                $this->session->akses_level = '';
                return $this->response([
                    'success'   => TRUE
                ]);
            } else return $this->response(['success' => FALSE]);
        } else $this->load->view('pegawai/_layout/wrapper', array('title' => 'Ubah Password', 'isi' => 'pegawai/pengaturan/ubah_password'));
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
