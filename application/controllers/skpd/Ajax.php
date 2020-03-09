<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MY_Controller {

    // Index
    public function index()
    {
        redirect(admin_url('referensi'));
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

    // kode rifqi

    public function get_data()
    {
        $input = $this->input->post(NULL, TRUE);

        if($input['table'] == 'data_pegawai'){
            $valid = $this->form_validation;
            $valid->set_error_delimiters('<i style="color: red;">', '</i>');
            $valid->set_rules('satker', 'Field satker', 'trim|strip_tags|htmlspecialchars');

                if ($valid->run() === TRUE)
                {
                    // ini ada sy ganti kak arhen, karna sy gabung 2 table , jadi mesti sy perjelas nama fieldnya
                    $query = array();
                    if ($input['satker'] != '') {
                        $input['satker'] != 'all' ? $query[] = 'satuan_kerja LIKE "%'.$input['satker'].'%"': $query[] = '';
                    }else{
                        $input['satker'] != 'all' ? $query[] = 'satuan_kerja LIKE "%'.$input['satker'].'%"': $query[] = '';
                    }            
                }
        }

        elseif ($input['table'] == 'dokumen_pegawai') { // jika tablenya dokumen pegawai
            $query = array();
            $query[] = 'nip LIKE "%'.$input['nip'].'%" AND';
            if($input['dokumen_id'] != 'all'){
                $query[] = ' dokumen_id LIKE "%'.$input['dokumen_id'].'%"';
            }else{
                $query[] = ' dokumen_id LIKE "%%"';
            }
            
        }

        elseif ($input['table'] == 'data_organisasi'){

            $query[] = 'satker = "'.$input['satker'].'"';

        }

        else{ // selain semua tabel yang di atas
            $query = array();
            $query[] = 'id LIKE "%%"';
        }   

        $this->datatables->select($input['select']);
        $this->datatables->where("".implode($query,' ')."");
        $this->datatables->from($input['table']);

        return print_r($this->datatables->generate());  
    }

    public function data($table="")
    {

        $data = $this->input->post(NULL, TRUE);
        $type = $data['type'];
        unset($data['type']);

        switch ($type) {
            case 'insert':
                $this->data_insert($data, $table);
                break;
            case 'update':
                $this->data_update($data, $table);
                break;  
            case 'delete':
                $this->data_delete($data, $table);
                break;                          
        }

    }
    private function data_insert($data=array(), $table="")
    {      
        $nip = $data['nip'];

        if($table == 'dokumen_pegawai'){
                    
            $i=0;
            foreach ($data as $key => $value) {

                if (!is_dir('./public/uploads/dokumen/'. $nip))
                {
                    mkdir('./public/uploads/dokumen/'.$nip,  0777, true);
                }

                $config['upload_path']          = './public/uploads/dokumen/'.$nip;
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 1000;
                $config['overwrite']           = TRUE;
                $config['file_name']           = $data['dokumen_id'][$i]."_".$data['nama_dokumen'][$i];

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'.$i))
                {
                    $error = array('error' => $this->upload->display_errors());
                    echo var_dump($error);
                }
                else
                {
                    $image = array('upload_data' => $this->upload->data());

                    $data1['dokumen_id'] = $data['dokumen_id'][$i];
                    $data1['nip'] = $nip;
                    $data1['nama_dokumen'] = $data['nama_dokumen'][$i];
                    $data1['file'] = $image["upload_data"]["file_name"];
                    
                    $this->crud->i($table, $data1);                    
                }
                $i++;
            } 

            if($this->db->affected_rows() == 1){
                return $this->response([
                    'stat' => 'sukses',
                    'res' => 'sukses memasukkan data pada ' . $table
                ]);
            }else{
                return $this->response([
                    'stat' => 'gagal',
                    'res' => 'gagal memasukkan data pada ' . $table
                ]);
            }


        }else{ // selain tabel dokumen pegawai
            $valid = $this->form_validation;
            $valid->set_error_delimiters('<i style="color: red;">', '</i>');

            foreach ($data as $key => $value) {
                $valid->set_rules($key, 'Field '.$key, 'required|trim|strip_tags|htmlspecialchars');
            }
            if ($valid->run() === TRUE) {
                $this->crud->i($table, $data);
                if($this->db->affected_rows() == 1){
                    return $this->response([
                        'stat' => 'sukses',
                        'res' => 'sukses memasukkan data pada ' . $table
                    ]);
                }else{
                    return $this->response([
                        'stat' => 'gagal',
                        'res' => 'gagal memasukkan data pada ' . $table
                    ]);
                }
            }             
        }

     
    }

    private function data_update($data=array(), $table="")
    {
        $id = $data['id'];
        unset($data['id']);
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');

        foreach ($data as $key => $value) {
            $valid->set_rules($key, 'Field '.$key, 'required|trim|strip_tags|htmlspecialchars');
        }
        if ($valid->run() === TRUE) {
            $this->crud->u($table, $data, array('id' => $id));
            if($this->db->affected_rows() == 1){
                return $this->response([
                    'stat' => 'sukses',
                    'res' => 'sukses update data pada ' . $table
                ]);
            }else{
                return $this->response([
                    'stat' => 'gagal',
                    'res' => 'data harus beda pada ' . $table
                ]);
            }
        }else{
            echo validation_errors();
        }
    }

    private function data_delete($data=array(), $table="")
    {
        $id = $data['id'];
        $this->crud->d($table, array('id' => $id));
        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'sukses',
                'res' => 'sukses delete data pada ' . $table
            ]);
        }else{
            return $this->response([
                'stat' => 'gagal',
                'res' => 'terjadi kesalahan pada ' . $table
            ]);
        }        
    }

    public function get_nip_nama(){
        $nip = $this->input->get('nip');

        $a=$this->db->where('nip', $nip)->get('data_pegawai')->row('nama_lengkap');
        echo json_encode($a);
    }

}
