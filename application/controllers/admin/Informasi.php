<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends Admin_controller {


    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_informasi = $this->crud->gao('data_informasi', 'uat DESC');
        $data = array(  'title'     => 'Papan Informasi / Beranda',
                        'data_informasi' => ($data_informasi != null ? $data_informasi : []),
                        'isi'       => 'admin/informasi/beranda');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function tambah_informasi(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('ditujukan', 'Field Ditujukan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('isi', 'Field Isi', 'required|trim');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_informasi', 'id_informasi');
            $input = $this->input->post(NULL, TRUE);

            //Mekanisme Upload file
            if(! empty($_FILES)){
                $file = upload_allTypeFile('files', 'tambah', 'informasi', '', TRUE);
                if(! $file['success'])
                    return $this->response(['success' => FALSE, 'error' => 'Upload File Gagal']);
            }else{
                $file['dokumen'] = '';
            }


            $data = array(  'id_informasi'       => $data_id['id'],
                            'ditujukan'          => $input['ditujukan'],
                            'isi'                => $input['isi'],
                            'files'              => $file['dokumen'],
                            'nama_lengkap'      =>  $this->session->fullname,
                            'iat'                => date('Y-m-d H:i:s'));

            $this->crud->i('data_informasi', $data);
            $detail = $this->crud->gd('data_informasi', array('id_informasi' => $data['id_informasi']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function edit_informasi($id_informasi = NULL){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('ditujukan', 'Field Ditujukan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('isi', 'Field Isi', 'required|trim');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);
            $fileLama = $this->crud->gd("data_informasi", array('id_informasi' => $id_informasi))->files;
         
            //Mekanisme Upload file
            $file = upload_allTypeFile('files', 'edit', 'informasi', $fileLama, TRUE);

            if(is_array($file) && ! $file['success'])
                return $this->response(['success' => FALSE, 'error' => 'Upload File Gagal']);

            $data = array(
                            'ditujukan'          => $input['ditujukan'],
                            'isi'                => $input['isi'],
                            'nama_lengkap'      =>  $this->session->fullname,
                            'files'              => $file['dokumen']);
                            
            $this->crud->u('data_informasi', $data, array('id_informasi' => $id_informasi));
            $detail = $this->crud->gd('data_informasi', array('id_informasi' => $id_informasi));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function getDataAjax($id_informasi = null){

        if ($id_informasi != NULL)
        {
            $data = $this->crud->gd('data_informasi', array('id_informasi' => $id_informasi));
            if ($data) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $data
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function hapus($id = NULL){
        $cek = $this->crud->gd('data_informasi', array('id_informasi' => $id));
        if ($cek)
        {
            $this->crud->d('data_informasi', array('id_informasi' => $id));
            
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
