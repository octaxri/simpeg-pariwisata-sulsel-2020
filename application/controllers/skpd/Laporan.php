<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MY_Controller {


       public function riwayatHidup()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => '1234354875676423'));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => '1234354875676423'));
        $keterangan_lainnya = $this->crud->gd('keterangan_lainnya', array('nip' => '1234354875676423'));
        $data = array(  'title'     => 'Laporan / Daftar Riwayat Hidup',
                        'data_pegawai' => $data_pegawai,
                        'data_alamat' => $data_alamat,
                        'keterangan_lainnya' => $keterangan_lainnya,
                        'isi'       => 'skpd/laporan/riwayat_hidup');
        $this->load->view('skpd/_layout/wrapper', $data);
    }


     public function cetak($id = NULL)
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gd('data_pegawai', array('nip' => '1234354875676423'));
        $data_alamat = $this->crud->gd('data_alamat', array('nip' => '1234354875676423'));
        $keterangan_lainnya = $this->crud->gd('keterangan_lainnya', array('nip' => '1234354875676423'));

        $data = array(  'title'     => 'Laporan / Daftar Riwayat Hidup',
                        'data_pegawai' => $data_pegawai,
                        'data_alamat' => $data_alamat,
                        'keterangan_lainnya' => $keterangan_lainnya,
                        'isi'       => 'skpd/laporan/cetak_riwayat');
        $this->load->view('skpd/laporan/cetak_riwayat', $data);
    }
          
    public function namaPejabat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Laporan / Daftar Nama Pejabat',
                        'isi'       => 'skpd/laporan/nama_pejabat');
        $this->load->view('skpd/_layout/wrapper', $data);
    }
       public function filterAjax(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('identifier', 'Field Nama Pegawai/NIP', 'trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);

            $data = $this->crud->gd("data_pegawai", array('nip' => $input['identifier'], 'satuan_kerja' => $this->session->fullname));
            $data_alamat = $this->crud->gd("data_alamat", array('nip' => $input['identifier']));
            $data_keteranganlainnya = $this->crud->gd("keterangan_lainnya", array('nip' => $input['identifier']));
            $data_keteranganbadan = $this->crud->gd("keterangan_badan", array('nip' => $input['identifier']));
            if (count($data) > 0 ) {
                return $this->response([
                    'success'   => TRUE,
                    'data_pegawai'      => $data,
                    'data_keteranganbadan'      => $data_keteranganbadan,
                    'data_keteranganlainnya'      => $data_keteranganlainnya,
                    'data_alamat'      => $data_alamat
                ]);
            }else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
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
