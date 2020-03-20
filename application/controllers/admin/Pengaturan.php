<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends Admin_controller {


    public function pegawai()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai = $this->crud->qr("SELECT * FROM data_pegawai INNER JOIN users ON data_pegawai.nip = users.username WHERE users.akses_level = 'pegawai' ORDER BY data_pegawai.nama_lengkap ASC");
        $data = array(  'title'     => 'Pengaturan / Kelola Pegawai',
                        'data_pegawai' => ($data_pegawai != null ? $data_pegawai : 0),
                        'isi'       => 'admin/pengaturan/pegawai');
        $this->load->view('admin/_layout/wrapper', $data);
    }


    public function skpd()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_skpd = $this->crud->gwo('users', array('akses_level' => 'skpd'),  'fullname ASC' );
        $list_skpd = $this->crud->ga('data_satker');
        $data = array(  'title'     => 'Pengaturan / Kelola Bidang',
                        'data_skpd' => ($data_skpd != null ? $data_skpd : []),
                        'list_skpd' => ($list_skpd != null ? $list_skpd : []),
                        'isi'       => 'admin/pengaturan/skpd');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function admin()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_admin = $this->crud->gwo('users', array('akses_level' => 'admin'), 'fullname ASC'  );

        $data = array(  'title'     => 'Pengaturan / Kelola Admin',
                        'data_admin' => ($data_admin != null ? $data_admin : []),
                        'isi'       => 'admin/pengaturan/admin');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function tambah_akun(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('fullname', 'Field Daftar SKPD', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('username', 'Field Username', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('password', 'Field Password', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('notelp', 'Field notelp', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('email', 'Field Email', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('users', 'id_user');
            $input = $this->input->post(NULL, TRUE);
            if ($this->crud->cw('users', array('username' => $input['username'])) > 0) {
                $error = array('element' => 'error_add_username', 'isi' => 'Username Telah terpakai');
                return  $this->response(['success' => FALSE, 'error' => $error]);
            }

            $data = array(  'id_user'           => $data_id['id'],
                            'fullname'          => $input['fullname'],
                            'username'          => $input['username'],
                            'password'          => do_hash($input['password']),
                            'email'             => $input['email'],
                            'notelp'            => $input['notelp'],
                            'akses_level'       => 'skpd',
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('users', $data);
            $detail = $this->crud->gd('users', array('id_user' => $data['id_user']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     public function tambah_akunAdmin(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('fullname', 'Field Daftar nama Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('username', 'Field Username', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('password', 'Field Password', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('notelp', 'Field notelp', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('email', 'Field Email', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('users', 'id_user');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_user'           => $data_id['id'],
                            'fullname'          => $input['fullname'],
                            'username'          => $input['username'],
                            'password'          => do_hash($input['password']),
                            'email'             => $input['email'],
                            'notelp'            => $input['notelp'],
                            'akses_level'       => 'admin',
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('users', $data);
            $detail = $this->crud->gd('users', array('id_user' => $data['id_user']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function resetPass($id = NULL){
        $cek = $this->crud->gd('users', array('id_user' => $id));
        if ($cek)
        {
            $data_id = acak_id('users', 'id_user');
            $data = array(  'password'          => do_hash($cek->username.'#'.$data_id['id']),
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('users', $data, array('id_user' => $id));
            $detail = $this->crud->gd('users', array('id_user' => $id));
            if ($detail) {
                $this->session->set_flashdata('passsukses', 'Password dengan akun username <i>'.$cek->username.'</i> berhasil direset. Password baru adalah : <strong>'.$cek->username.'#'.$data_id['id'].'</strong>');
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        }
        else return $this->response(['success' => FALSE]);
    }

     public function edit_akun($id_user = NULL){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('fullname', 'Field Daftar Fullname', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('username', 'Field Username', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('notelp', 'Field notelp', 'trim|strip_tags|htmlspecialchars');
        $valid->set_rules('email', 'Field Email', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);
            if ($this->crud->cw('users', array('username' => $input['username'])) > 0) {
                $error = array('element' => 'error_edit_username', 'isi' => 'Username Telah terpakai');
                return  $this->response(['success' => FALSE, 'error' => $error]);
            }
            $data = array(  
                            'fullname'          => $input['fullname'],
                            'username'          => $input['username'],
                            'email'             => $input['email'],
                            'notelp'            => $input['notelp'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->u('users', $data, array('id_user' => $id_user));
            $detail = $this->crud->gd('users', array('id_user' => $id_user));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function getDataAjax($id_user = null){

        if ($id_user != NULL)
        {
            $data = $this->crud->gd('users', array('id_user' => $id_user));
            if ($data) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $data
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     public function hapusData($id = NULL, $type = NULL){
        $cek = $this->crud->gd('users', array('id_user' => $id));
        if ($cek)
        {
            if ($type == 'skpd') {
                $this->crud->d('users', array('id_user' => $id));
            }else{
                 $this->crud->d('users', array('id_user' => $id));
            }
            
            return $this->response(['success' => TRUE]);
        }
        else return $this->response(['success' => FALSE]);
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
