<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MigrasiPegawai extends MY_Controller {

    public function daftarPegawai()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $data_pegawai = $this->crud->gw('data_pegawai', array('satuan_kerja' => $this->session->fullname));
        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Pegawai',
            'data_pegawai' => $data_pegawai,
            'isi'       => 'skpd/migrasi_pegawai/daftar_pegawai');
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function daftarKenaikanPangkat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        // $data_kenaikanpangkat = $this->crud->ga('daftar_kenaikanpangkat');
        $data_kenaikanpangkat = $this->crud->qr('SELECT * FROM daftar_kenaikanpangkat INNER JOIN data_pegawai on daftar_kenaikanpangkat.nip = data_pegawai.nip WHERE data_pegawai.satuan_kerja = "'.$this->session->fullname.'" ');
        // var_dump($data_kenaikanpangkat);
        // die();
        $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');

        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Kenaikan Pangkat',
            'data_eselon'     => $data_eselon,
            'data_kenaikanpangkat'     => $data_kenaikanpangkat != null ? $data_kenaikanpangkat : [],
            'isi'       => 'skpd/migrasi_pegawai/daftar_kenaikan_pangkat');
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function tambah_kenaikanpangkat(){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_lengkap', 'Field Nama_Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nip', 'Field nip', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kelamin', 'Field jenis kelamin', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('spangkat', 'Field Pangkat Saat ini','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kpangkat', 'Field kenaikan Pangkat','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('stmt', 'Field TMT Saat Ini','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('ktmt', 'Field TMT Kenaikan','required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('daftar_kenaikanpangkat', 'id_data');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_data'           => $data_id['id'],
                'nama_lengkap'          => $input['nama_lengkap'],
                'nip'          => $input['nip'],
                'jenis_kelamin'          => $input['jenis_kelamin'],
                'spangkat'             => $input['spangkat'],
                'kpangkat'            => $input['kpangkat'],
                'spangkat'            => $input['spangkat'],
                'stmt'            => $input['stmt'],
                'ktmt'            => $input['ktmt'],
                'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('daftar_kenaikanpangkat', $data);
            $detail = $this->crud->gd('daftar_kenaikanpangkat', array('id_data' => $data['id_data']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                    ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function edit_kenaikanpangkat($id_data = NULL){
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_lengkap', 'Field Nama_Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nip', 'Field nip', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kelamin', 'Field jenis kelamin', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('spangkat', 'Field Pangkat Saat ini','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('kpangkat', 'Field kenaikan Pangkat','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('stmt', 'Field TMT Saat Ini','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('ktmt', 'Field TMT Kenaikan','required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);
            $data = array(  
                'nama_lengkap'          => $input['nama_lengkap'],
                'nip'          => $input['nip'],
                'jenis_kelamin'          => $input['jenis_kelamin'],
                'spangkat'             => $input['spangkat'],
                'kpangkat'            => $input['kpangkat'],
                'spangkat'            => $input['spangkat'],
                'stmt'            => $input['stmt'],
                'ktmt'            => $input['ktmt'],
                'iat'               => date('Y-m-d H:i:s'));
            $this->crud->u('daftar_kenaikanpangkat', $data, array('id_data' => $id_data));
            $detail = $this->crud->gd('daftar_kenaikanpangkat', array('id_data' => $id_data));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                    ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function getDataAjax($id_data = null, $type = null){

        if ($id_data != NULL)
        {
            $data = $this->crud->gd('daftar_'.$type, array('id_data' => $id_data));
            if ($data) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $data
                    ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function getDataPegawaiAjax(){
        // $input = $this->input->post(NULL, TRUE);
        $data = $this->crud->qr("SELECT nip,nama_lengkap,gambar FROM data_pegawai WHERE CONCAT(nip,nama_lengkap) LIKE '%".$_GET['q']."%'");

        if ($data) {
            return $this->response([
                'success'   => TRUE,
                'data_pegawai'      => $data,
                'total_count' => count($data)
                ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function hapusData($id_data = null, $type = null){
        $cek = $this->crud->gd('daftar_'.$type, array('id_data' => $id_data));
        if ($cek)
        {
            $this->crud->d('daftar_'.$type, array('id_data' => $id_data));   
            return $this->response(['success' => TRUE]);
        }
        else return $this->response(['success' => FALSE]);
    }

    public function daftarMutasi()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_mutasi = $this->crud->qr('SELECT * FROM daftar_mutasi INNER JOIN data_pegawai on daftar_mutasi.nip = data_pegawai.nip WHERE data_pegawai.satuan_kerja = "'.$this->session->fullname.'" ');
        $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');
        $data_jabatan = $this->crud->gao('data_jabatan', 'nama_jabatan ASC');
        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Mutasi',
            'data_eselon' => $data_eselon,
            'daftar_mutasi' => $data_mutasi,
            'data_jabatan' => $data_jabatan,
            'isi'       => 'skpd/migrasi_pegawai/daftar_mutasi');
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function tambah_mutasi(){
        
        $data_mutasi = $this->crud->ga('daftar_mutasi');
        $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');
        $data_jabatan = $this->crud->gao('data_jabatan', 'nama_jabatan ASC');
        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Mutasi',
            'data_eselon' => $data_eselon,
            'daftar_mutasi' => $data_mutasi,
            'data_jabatan' => $data_jabatan,
            'isi'       => 'skpd/migrasi_pegawai/daftar_mutasi');

        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_lengkap', 'Field Nama_Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nip', 'Field nip', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kelamin', 'Field jenis kelamin', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_eselon', 'Field Pangkat','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_jabatan', 'Field Jabatan','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tmt_sk', 'Field TMT','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_sk', 'Field no_sk','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tanggal_sk', 'Field Tanggal','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('penandatangan', 'Field Penandatangan','required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tujuan_mutasi', 'Field Tujuan Mutasi','required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            // Mekanisme upload doc
            $lampiran = upload_document('lampiran', 'tambah', 'lampiranpegawai', '', $data);
             // Masuk ke database
            
            if ($lampiran !== FALSE){
                
                $input = $this->input->post(NULL, TRUE);
                // var_dump($input,$_FILES);
                // die();

                $data_id = acak_id('daftar_mutasi', 'id_data');
                $data_mutasi = array(  'id_data'           => $data_id['id'],
                    'nama_lengkap'          => $input['nama_lengkap'],
                    'nip'          => $input['nip'],
                    'jenis_kelamin'          => $input['jenis_kelamin'],
                    'nama_eselon'             => $input['nama_eselon'],
                    'nama_jabatan'            => $input['nama_jabatan'],
                    'tmt_sk'            => $input['tmt_sk'],
                    'no_sk'            => $input['no_sk'],
                    'tanggal_sk'            => $input['tanggal_sk'],
                    'penandatangan'            => $input['penandatangan'],
                    'tujuan_mutasi'            => $input['tujuan_mutasi'],
                    'lampiran'            => $lampiran,
                    'iat'               => date('Y-m-d H:i:s'));
                $this->crud->i('daftar_mutasi', $data_mutasi);
                $detail = $this->crud->gd('daftar_mutasi', array('id_data' => $data_mutasi['id_data']));
                if ($detail) {
                    return $this->response([
                        'success'   => TRUE,
                        'data'      => $detail
                        ]);
                } else return $this->response(['success' => FALSE]);
            }
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }


    public function daftarPensiun()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Pensiun',
            'isi'       => 'skpd/migrasi_pegawai/daftar_pensiun');
        $this->load->view('skpd/_layout/wrapper', $data);
    }

    public function daftarMeninggal()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Meninggal',
            'isi'       => 'skpd/migrasi_pegawai/daftar_meninggal');
        $this->load->view('skpd/_layout/wrapper', $data);
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
