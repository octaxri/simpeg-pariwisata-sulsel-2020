<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MigrasiPegawai extends Admin_controller {

    public function daftarPegawai()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_pegawai = $this->crud->ga('data_pegawai');
        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Pegawai',
                        'data_pegawai' => $data_pegawai,
                        'isi'       => 'admin/migrasi_pegawai/daftar_pegawai');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function daftarKenaikanPangkat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        // $data_kenaikanpangkat = $this->crud->qr("SELECT *, (TIMESTAMPDIFF(YEAR, str_to_date(tmt_jabatan,'%d/%m/%Y'), NOW())) AS total_waktu FROM data_pegawai");
        
        $data_golongan = $this->crud->gao('data_golongan', 'id_golongan ASC');

        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Kenaikan Pangkat',
                        'data_golongan'     => $data_golongan,
                        // 'data_kenaikanpangkat'     => $data_kenaikanpangkat,
                        'isi'       => 'admin/migrasi_pegawai/daftar_kenaikan_pangkat');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function getDataDKP(){
        $this->datatables->select("gambar, nama_lengkap, nip, jenis_kelamin, jenis_jabatan, jenis_pangkat, tmt_jabatan, (TIMESTAMPDIFF(YEAR, str_to_date(tmt_jabatan,'%d/%m/%Y'), NOW())) AS total_waktu");
        $this->datatables->order_by("total_waktu DESC");
        $this->datatables->from("data_pegawai");
        return print_r($this->datatables->generate());
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
            $data = array(  'id_data'               => $data_id['id'],
                            'nama_lengkap'          => $input['nama_lengkap'],
                            'nip'                   => $input['nip'],
                            'jenis_kelamin'         => $input['jenis_kelamin'],
                            'spangkat'              => $input['spangkat'],
                            'kpangkat'              => $input['kpangkat'],
                            'spangkat'              => $input['spangkat'],
                            'stmt'                  => $input['stmt'],
                            'ktmt'                  => $input['ktmt'],
                            'iat'                   => date('Y-m-d H:i:s'));
            $data_pangkat_pegawai = array(
                'jenis_pangkat' => $input['kpangkat'],
                'tmt_jenis_pangkat' => $input['ktmt'],
                'uat' => date('Y-m-d H:i:s')
            );
//            var_dump($data);die();
            $this->crud->i('daftar_kenaikanpangkat', $data);
            $this->crud->u('data_pegawai', $data_pangkat_pegawai, array('nip' => $input['nip']));
            $detail = $this->crud->gd('daftar_kenaikanpangkat', array('id_data' => $data['id_data']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function edit_kenaikanpangkat($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('kpangkat', 'Field kenaikan Pangkat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('ktmt', 'Field TMT Kenaikan', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE) {
            $input = $this->input->post(NULL, TRUE);
            $data = array(
                'kpangkat' => $input['kpangkat'],
                'ktmt' => $input['ktmt'],
                'uat' => date('Y-m-d H:i:s'));
//            var_dump($data);die();
            $data_pangkat_pegawai = array(
              'jenis_pangkat' => $input['kpangkat'],
              'tmt_jenis_pangkat' => $input['ktmt'],
                'uat' => date('Y-m-d H:i:s')
            );

            $this->crud->u('daftar_kenaikanpangkat', $data, array('id_data' => $id));
            $this->crud->u('data_pegawai', $data_pangkat_pegawai, array('nip' => $input['nip']));
            $detail = $this->crud->gd('daftar_kenaikanpangkat', array('id_data' => $id));
            if ($detail) {
                return $this->response([
                    'success' => TRUE,
                    'data' => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function getDataAjax($id_data = null, $type = null){

        if ($id_data != NULL)
        {
            $data = $this->crud->gd('daftar_'.$type, array('id_data' => $id_data));
            $dataPegawai = $this->crud->gd('data_pegawai', array('nip' => $data->nip));
            $data->gambar = $dataPegawai->gambar;
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
        $data = $this->crud->qr("SELECT * FROM data_pegawai WHERE CONCAT(nip,nama_lengkap) LIKE '%".$_GET['q']."%'");

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

        $data_mutasi = $this->crud->ga('daftar_mutasi');
        $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');
        $data_jabatan = $this->crud->gao('data_jabatan', 'nama_jabatan ASC');
        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Mutasi',
                        'data_eselon' => $data_eselon,
                        'daftar_mutasi' => $data_mutasi,
                        'data_jabatan' => $data_jabatan,
                        'isi'       => 'admin/migrasi_pegawai/daftar_mutasi');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function tambah_mutasi(){

        $data_mutasi = $this->crud->ga('daftar_mutasi');
        $data_eselon = $this->crud->gao('data_eselon', 'nama_eselon ASC');
        $data_jabatan = $this->crud->gao('data_jabatan', 'nama_jabatan ASC');
        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Mutasi',
                        'data_eselon' => $data_eselon,
                        'daftar_mutasi' => $data_mutasi,
                        'data_jabatan' => $data_jabatan,
                        'isi'       => 'admin/migrasi_pegawai/daftar_mutasi');

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
        $data_pensiun = $this->crud->ga('daftar_pensiun');
        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Pensiun',
                        'data_pensiun'     => $data_pensiun,
                        'isi'       => 'admin/migrasi_pegawai/daftar_pensiun');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function daftarMeninggal()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Migrasi Pegawai / Daftar Meninggal',
                        'isi'       => 'admin/migrasi_pegawai/daftar_meninggal');
        $this->load->view('admin/_layout/wrapper', $data);
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

// ======================================================================================================================
// worked by himawan

    public function pangkat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_kenaikanpangkat = $this->crud->gao('daftar_kenaikanpangkat', 'iat DESC');

        $data_golongan = $this->crud->gao('data_golongan', '');

        $data = array(  'title'     => 'Migrasi Pegawai / Kenaikan Pangkat',
            'data_kenaikanpangkat'     => $data_kenaikanpangkat,
            'data_golongan'     => $data_golongan,
            'isi'       => 'admin/migrasi_pegawai/pangkat');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function hapusDaftarKenaikanPangkat($table, $id){
        $cek = $this->crud->gd('daftar_'.$table, array('id_data' => $id));
        if ($cek)
        {
            $this->crud->d('daftar_'.$table, array('id_data' => $id));
            return $this->response(['success' => TRUE]);
        }
        else return $this->response(['success' => FALSE]);
    }

    public function meninggal()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_golongan = $this->crud->gao('data_golongan', '');
        $data_jabatan = $this->crud->ga('data_jabatan');
        $daftar_meninggal = $this->crud->gao('daftar_meninggal', 'iat DESC');

        $data = array(  'title'     => 'Migrasi Pegawai / Meninggal',
            'daftar_meninggal' => $daftar_meninggal,
            'data_golongan'     => $data_golongan,
            'data_jabatan'     => $data_jabatan,
            'isi'       => 'admin/migrasi_pegawai/meninggal');

        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function addData()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_lengkap', 'Field Nama Lengkap', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jenis_kelamin', 'Field Jenis Kelamin', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('pangkat', 'Field Pangkat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('jabatan', ' Field Jabatan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tgl_wafat', ' Field Tanggal Wafat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tgl_akta', ' Field Tanggal Akta', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_akta', ' Field No. Akta', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('penandatangan', ' Field Penandatangan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('keterangan', ' Field Keterangan', 'trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE) {
            $data_id = acak_id('daftar_meninggal', 'id_data');
            $input = $this->input->post(NULL, TRUE);

            //Mekanisme Upload file
            if (!empty($_FILES)) {
                $file = upload_allTypeFile('files', 'tambah', 'informasi', '', TRUE);
                if (!$file['success'])
                    return $this->response(['success' => FALSE, 'error' => 'Upload File Gagal']);
            } else {
                $file['dokumen'] = '';
            }

            $data = array(
                'id_data' => $data_id['id'],
                'nip' => $input['nip'],
                'nama_lengkap' => $input['nama_lengkap'],
                'jenis_kelamin' => $input['jenis_kelamin'],
                'pangkat' => $input['pangkat'],
                'jabatan' => $input['jabatan'],
                'tgl_wafat' => $input['tgl_wafat'],
                'tgl_akta' => $input['tgl_akta'],
                'no_akta' => $input['no_akta'],
                'penandatangan' => $input['penandatangan'],
                'keterangan' => $input['keterangan'],
                'files' => $file['dokumen'],
                'iat' => date('Y-m-d H:i:s')
            );
//            var_dump($data);die();
            $this->crud->i('daftar_meninggal', $data);
            $detail = $this->crud->gd('daftar_meninggal', array('id_data' => $data['id_data']));
            if ($detail) {
                return $this->response([
                    'success' => TRUE,
                    'data' => $detail
                ]);
            } else
                return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function editData($id = NULL)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('tgl_wafat', ' Field Tanggal Wafat', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('tgl_akta', ' Field Tanggal Akta', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('no_akta', ' Field No. Akta', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('penandatangan', ' Field Penandatangan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('keterangan', ' Field Keterangan', 'trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE) {
            $input = $this->input->post(NULL, TRUE);
            $fileLama = $this->crud->gd("daftar_meninggal", array('id_data' => $id))->files;

            //Mekanisme Upload file
            $file = upload_allTypeFile('files', 'edit', 'informasi', $fileLama, TRUE);

            if(is_array($file) && ! $file['success'])
                return $this->response(['success' => FALSE, 'error' => 'Upload File Gagal']);

            $data = array(
                'tgl_wafat' => $input['tgl_wafat'],
                'tgl_akta' => $input['tgl_akta'],
                'no_akta' => $input['no_akta'],
                'penandatangan' => $input['penandatangan'],
                'keterangan' => $input['keterangan'],
                'files' => $file['dokumen'],
                'uat' => date('Y-m-d H:i:s')
            );
//            var_dump($data);die();
            $this->crud->u('daftar_meninggal', $data, array('id_data' => $id));
            $detail = $this->crud->gd('daftar_meninggal', array('id_data' => $id));
            if ($detail) {
                return $this->response([
                    'success' => TRUE,
                    'data' => $detail
                ]);
            } else
                return $this->response(['success' => FALSE, 'error' => 'data Tidak ditemukan di Database']);
        }else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function getData($id_data = null){

        if ($id_data != NULL)
        {
            $data = $this->crud->gd('daftar_meninggal', array('id_data' => $id_data));
            if ($data) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $data
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function hapusMeninggal($id){
        $cek = $this->crud->gd('daftar_meninggal', array('id_data' => $id));
        if ($cek)
        {
            $this->crud->d('daftar_meninggal', array('id_data' => $id));
            return $this->response(['success' => TRUE]);
        }
        else return $this->response(['success' => FALSE]);
    }

}
