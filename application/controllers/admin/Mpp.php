<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpp extends Admin_controller {

    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai_12 = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 9 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 12");
        $data_pegawai_9  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 6 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 9");
        $data_pegawai_6  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 3 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 6");
        $data_pegawai_3  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 1 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 3");
        $data_pegawai_1  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) < 1 ");

        // var_dump($data_pegawai_12[0]->tanggal_lahir);
        // die();

        $data = array(  
            'title'           => 'Halaman Daftar Masa Persiapan Pensiun',
            'subtitle'        => 'Selamat datang, '.$this->session->fullname.'.',
            'data_pegawai_12' => $data_pegawai_12,
            'data_pegawai_9'  => $data_pegawai_9,
            'data_pegawai_6'  => $data_pegawai_6,
            'data_pegawai_3'  => $data_pegawai_3,
            'data_pegawai_1'  => $data_pegawai_1,
            'isi'             => 'admin/mpp/beranda'
        );
        $this->load->view('admin/_layout/wrapper', $data);
    }

    // function check_

    function update_tnggl_lahir(){
        $data_pegawai = $this->crud->gao('data_pegawai', 'tanggal_lahir ASC');
        echo '<pre>';
        // $i = 1;
        foreach ($data_pegawai as $data_pegawai) {
                var_dump($data_pegawai->tanggal_lahir);
        //     $tanggal_lahir = str_replace(' ', '', $data_pegawai->tanggal_lahir);
        //     $tanggal_lahir = str_replace('-', '/', $tanggal_lahir);
        //     $tanggal_lahir_array = explode('/', $tanggal_lahir);
        //     // var_dump('Tanggal Lahir asli: ' .$data_pegawai->tanggal_lahir);
        //     //if month and year there is no delimeters
        //     if((strlen($tanggal_lahir_array[1]) > 2) AND empty($tanggal_lahir_array[2])){
        //         $tanggal_lahir_array[2] = substr($tanggal_lahir_array[1], 2);
        //         $tanggal_lahir_array[1] = substr($tanggal_lahir_array[1], 0, 2);
        //     }

        //     //if month and day doesnt have 0 in first word
        //     if(strlen($tanggal_lahir_array[0]) != 2 )
        //         $tanggal_lahir_array[0] = '0'.$tanggal_lahir_array[0];
        //     //if month and day doesnt have 0 in first word
        //     if(strlen($tanggal_lahir_array[1]) != 2 )
        //         $tanggal_lahir_array[1] = '0'.$tanggal_lahir_array[1];
                
        //     if( (int) $tanggal_lahir_array[1] > 12 ){
        //         $day_temp = $tanggal_lahir_array[0];
        //         $month_temp = $tanggal_lahir_array[1];
        //         $tanggal_lahir_array[0] = $month_temp;
        //         $tanggal_lahir_array[1] = $day_temp;
        //     }
            
        //     $new_tanggl_lahir = implode('/', $tanggal_lahir_array);
        //     $this->crud->u('data_pegawai', array('tanggal_lahir' => $new_tanggl_lahir), array('nip' => $data_pegawai->nip));
        //     var_dump($i.' : '. $new_tanggl_lahir);
        //     $i++;
        }
        
        echo '</pre>';
        die();
    }
}
