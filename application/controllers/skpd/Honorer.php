<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Honorer extends MY_Controller {

    public function index(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_honorer = $this->crud->ga('data_honorer');
        $data_satker = $this->crud->ga('data_satker');

        $data = array(  'title'     => 'Data Honorer',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'data_satker' => $data_satker,
        'data_honorer' => $data_honorer,
        'table'         => 'data_honorer',
        'isi'       => 'skpd/data_honorer/beranda');
        $this->load->view('skpd/_layout/wrapper', $data);
    }
    public function tambah()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Tambah Data Honorer',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'isi'       => 'skpd/data_honorer/tambah');
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function tambah_data_honorer()
    {
        $a = $this->input->post(NULL, TRUE);

        foreach ($a as $key => $value) {
             $field = str_replace("_", " ", $key);
             $field = "Field ".$field;
             $this->form_validation->set_rules($key, $field, 'required|trim|strip_tags|htmlspecialchars');
        }

        if ($this->form_validation->run() === TRUE){
            $i = $this->crud->i('data_honorer', $a);
            if($this->db->affected_rows() == 1){
                $this->session->set_flashdata('sukses', 'berhasil menambahkan data');
                echo json_encode(array('stat' => 'sukses', 'res' => 'berhasil memasukkan data', 'url' => skpd_url('honorer'))); 
            }else{
                echo json_encode(array('stat' => 'gagal', 'res' => 'terjadi kesalahan', 'url' => skpd_url('honorer/tambah'))); 
            }
        }else{
            $i = 0;
            foreach ($a as $key => $value) {
                 $field = str_replace("_", " ", $key);
                 $field = "Field ".$field;
                 $data[$key] = form_error($key);
            }            
            echo json_encode(array('stat' => 'gagal', 'res' => $data, 'url' => skpd_url('honorer/tambah'))); 
        }
       
    }
    public function edit()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $id = $this->input->get('id');
        $a = $this->db->where('id', $id)->get('data_honorer')->result();
        $data = array(  'title'     => 'Edit Data Honorer',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'data' => $a,
        'isi'       => 'skpd/data_honorer/edit');
        $this->load->view('skpd/_layout/wrapper', $data);        
    } 

    public function edit_data_honorer()
    {
        $a = $this->input->post(NULL, TRUE);
        $id = $a['id'];
        unset($a['id']);

        foreach ($a as $key => $value) {
             $field = str_replace("_", " ", $key);
             $field = "Field ".$field;
             $this->form_validation->set_rules($key, $field, 'required|trim|strip_tags|htmlspecialchars');
        }

        if ($this->form_validation->run() === TRUE){
            $u = $this->db->where('id', $id)->update('data_honorer', $a);
            if($this->db->affected_rows() == 1){
                $this->session->set_flashdata('sukses', 'berhasil menambahkan data');
                echo json_encode(array('stat' => 'sukses', 'res' => 'berhasil memasukkan data', 'url' => skpd_url('honorer'))); 
            }else{
                echo json_encode(array('stat' => 'gagal', 'res' => 'terjadi kesalahan', 'url' => skpd_url('honorer/tambah'))); 
            }
        }else{
            $i = 0;
            foreach ($a as $key => $value) {
                 $field = str_replace("_", " ", $key);
                 $field = "Field ".$field;
                 $data[$key] = form_error($key);
            }            
            echo json_encode(array('stat' => 'gagal', 'res' => $data, 'url' => skpd_url('honorer/tambah'))); 
        }
       
    }

}