<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi extends Admin_controller {

    // Index
    public function index()
    {
        redirect(admin_url('referensi/umum'));
    }

    function show_tree()
    {
        $this->form_validation->set_error_delimiters("", "");
         $this->form_validation->set_rules('node', 'node ', 'trim|required');
        //$this->load->view('messaging');
        if($this->form_validation->run()== false){
            $this->load->view('show_tree');
        }else{
            redirect('tree/show_tree/');
        }
    }

    function getChildren()
    {
        // load->model('tree_model');
        $result = $this->treemodel->tree_all();

        $itemsByReference = array();

// Build array of item references:
        foreach($result as $key => &$item) {
            $itemsByReference[$item['id']] = &$item;
            // Children array:
            $itemsByReference[$item['id']]['children'] = array();
            // Empty data class (so that json_encode adds "data: {}" )
            $itemsByReference[$item['id']]['data'] = new StdClass();
        }

// Set items as children of the relevant parent item.
        foreach($result as $key => &$item)
            if($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
                $itemsByReference [$item['parent_id']]['children'][] = &$item;

// Remove items that were added to parents elsewhere:
        foreach($result as $key => &$item) {
            if($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
                unset($result[$key]);
                //added href attribut on each leaf node of jstree
                // if(empty($item['children'])) {
                //    $item['a_attr']->href = 'http://goolge.com';
                // }
                // if($item['parent_id'] && isset($itemsByReference[$item['parent_id']])) {
                //    unset($result[$key]);
                // }           
        }
        foreach ($result as $row) {
            $data[] = $row;
        }

// Encode:
        echo json_encode($data);
    }
    

    public function Umum()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_agama  = $this->crud->gao('data_agama', 'nama_agama ASC');
        $data_pendidikan = $this->crud->gao('data_pendidikan','id_pendidikan ASC');

        $data = array(  'title'     => 'Referensi / Data Umum',
                        'data_agama'     => $data_agama,
                        'data_pendidikan'     => $data_pendidikan,
                        'isi'       => 'admin/referensi/umum');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function Instansi()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_satker = $this->crud->gao('data_satker', 'nama_satker ASC');
        $data_unit = $this->crud->qr('SELECT nama_satker, count(*) as total FROM data_unit GROUP BY nama_satker');

        $data = array(  'title'     => 'Referensi / Data Instansi ',
                        'data_unit'     => $data_unit,
                        'data_satker'     => $data_satker,
                        'isi'       => 'admin/referensi/instansi');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function Dokumen()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_dokumen = $this->crud->ga('data_dokumen');

        $data = array(  'title'     => 'Referensi / Jenis Dokumen ',
                        'data_dokumen'     => $data_dokumen,
                        'isi'       => 'admin/referensi/dokumen',
                        'table'     => 'data_dokumen');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function Eselon()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_eselon = $this->crud->gao('data_eselon','nama_eselon ASC');

        $data = array(  'title'     => 'Referensi / Data Eselon ',
                        'data_eselon'     => $data_eselon,
                        'isi'       => 'admin/referensi/eselon');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function Jabatan()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_jabatan = $this->crud->qr('SELECT jenis_jabatan, count(*) as total FROM data_jabatan GROUP BY jenis_jabatan');
        $data_jenisjabatan = $this->crud->gao('data_jenisjabatan', 'nama_jenisjabatan ASC');
        $data_eselon = $this->crud->gao('data_eselon', 'id_eselon ASC');
        $data_golongan = $this->crud->ga('data_golongan');

        $data = array(  'title'     => 'Referensi / Data Jabatan ',
                        'data_jabatan'     => $data_jabatan,
                        'data_eselon'     => $data_eselon,
                        'data_jenisjabatan'     => $data_jenisjabatan,
                        'data_golongan'     => $data_golongan,
                        'isi'       => 'admin/referensi/jabatan');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function Kepegawaian()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_statuspegawai = $this->crud->gao('data_statuspegawai', 'nama_statuspegawai ASC');
        $data_jenispegawai = $this->crud->gao('data_jenispegawai', 'nama_jenispegawai ASC');
        $data_kedudukanpegawai = $this->crud->gao('data_kedudukanpegawai', 'nama_kedudukanpegawai ASC');

        $data = array(  'title'     => 'Referensi / Data Pegawai ',
                        'data_statuspegawai'     => $data_statuspegawai,
                        'data_jenispegawai'     => $data_jenispegawai,
                        'data_kedudukanpegawai'     => $data_kedudukanpegawai,
                        'isi'       => 'admin/referensi/pegawai');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function alamat()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data_provinsi = $this->crud->gao('data_provinsi', 'nama_provinsi ASC');
        $data_kabupaten
         = $this->crud->qr('SELECT ANY_VALUE(id_kabupaten) as id_kabupaten,  ANY_VALUE(nama_kabupaten) as nama_kabupaten, ANY_VALUE(nama_provinsi) as nama_provinsi, count(*) as total FROM data_kabupaten
          GROUP BY nama_provinsi');
        $data_kecamatan
         = $this->crud->qr('SELECT ANY_VALUE(id_kecamatan) as id_kecamatan, ANY_VALUE(nama_kabupaten) as nama_kabupaten, ANY_VALUE(nama_kecamatan) as nama_kecamatan, count(*) as total FROM data_kecamatan
          GROUP BY nama_kabupaten');
        $data_kelurahan
         = $this->crud->qr('SELECT ANY_VALUE(id_kelurahan) as id_kelurahan, ANY_VALUE(nama_kelurahan) as nama_kelurahan, ANY_VALUE(nama_kecamatan) as nama_kecamatan, count(*) as total FROM data_kelurahan
          GROUP BY nama_kecamatan');

          $datalist_kabupaten
           = $this->crud->qr('SELECT nama_kabupaten, nama_provinsi FROM data_kabupaten');
          $datalist_kecamatan
           = $this->crud->qr('SELECT nama_kabupaten, nama_kecamatan FROM data_kecamatan');
          $datalist_kelurahan
           = $this->crud->qr('SELECT nama_kelurahan, nama_kecamatan FROM data_kelurahan');

        $data = array(  'title'     => 'Referensi / Data Pegawai ',
                        'data_provinsi' => $data_provinsi,
                        'data_kabupaten' => $data_kabupaten,
                        'data_kecamatan' => $data_kecamatan,
                        'data_kelurahan' => $data_kelurahan,
                        'datalist_kabupaten' => $datalist_kabupaten,
                        'datalist_kecamatan' => $datalist_kecamatan,
                        'datalist_kelurahan' => $datalist_kelurahan,
                        'isi'       => 'admin/referensi/alamat');
        $this->load->view('admin/_layout/wrapper', $data);
    }

}
