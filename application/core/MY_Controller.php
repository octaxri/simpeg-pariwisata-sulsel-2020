<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
    }
}

class Admin_controller extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $mpp_notif = $this->getNotif();

        //get your data
        $global_data = array('mpp_notif'=> $mpp_notif);

        //Send the data into the current view
        //http://ellislab.com/codeigniter/user-guide/libraries/loader.html
         $this->load->vars($global_data);
    }

    function getNotif(){
        $data_pegawai_12 = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 9 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 12");
        $data_pegawai_9  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 6 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 9");
        $data_pegawai_6  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 3 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 6");
        $data_pegawai_3  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) > 1 AND (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) <= 3");
        $data_pegawai_1  = $this->crud->qr("SELECT * FROM data_pegawai WHERE (780 - TIMESTAMPDIFF(MONTH, str_to_date(tanggal_lahir,'%d/%m/%Y'), NOW())) < 1 ");

        if(count($data_pegawai_12) > 0){
            foreach ($data_pegawai_12 as $data_pegawai_12) {
                $this->createNotif($data_pegawai_12->nip,12);
            }
        }
        if(count($data_pegawai_9) > 0){
            foreach ($data_pegawai_9 as $data_pegawai_9) {
                $this->createNotif($data_pegawai_9->nip,9);
            }
        }
        if(count($data_pegawai_6) > 0){
            foreach ($data_pegawai_6 as $data_pegawai_6) {
                $this->createNotif($data_pegawai_6->nip,6);
            }
        }
        if(count($data_pegawai_3) > 0){
            foreach ($data_pegawai_3 as $data_pegawai_3) {
                $this->createNotif($data_pegawai_3->nip,3);
            }
        }
        if(count($data_pegawai_1) > 0){
            foreach ($data_pegawai_1 as $data_pegawai_1) {
                $this->createNotif($data_pegawai_1->nip,1);
            }
        }

        $all_notif = $this->crud->gw('riwayat_pemberitahuan_mpp', array('is_read' => '0'));

        return $all_notif;

    }

    function createNotif($nip,$month){
        //check nip and month in riwayat notif
        if(! $this->crud->gd('riwayat_pemberitahuan_mpp', array('nip' => $nip, 'month' => $month))){
            $this->crud->i('riwayat_pemberitahuan_mpp', array('nip' => $nip, 'month' => $month, 'iat' => date('Y-m-d H:i:s')));
        }
    }

    function markAsRead($id){
        //check nip and month in riwayat notif
        if($this->crud->gd('riwayat_pemberitahuan_mpp', array('id' => $id))){
            $this->crud->u('riwayat_pemberitahuan_mpp', array('is_read' => '1'), array('id' => $id));
        }
        return TRUE;
    }

    function markAllAsRead(){
        $all_data = $this->crud->ga('riwayat_pemberitahuan_mpp');
        foreach ($all_data as $data) {
            $this->crud->u('riwayat_pemberitahuan_mpp', array('is_read' => '1'), array('nip' => $data->nip));
        }
        
        return TRUE;
    }
}
