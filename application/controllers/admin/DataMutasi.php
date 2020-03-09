<?php

Class DataMutasi extends Admin_controller {

    public function kelompok(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $satker = $this->input->get('satker');

        $data = array(  'title'     => 'SK Mutasi Kelompok',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'table' 	=> 'mutasi_sk',
        'isi'       => 'admin/data_mutasi/beranda');
        $this->load->view('admin/_layout/wrapper', $data); 
    }

    public function details(){

        $jabatan = $this->db->select('nama_jabatan')->get('data_jabatan')->result();
        $satker = $this->db->select('nama_satker')->get('data_unit')->result();
        $unker = $this->db->select('nama_unit')->get('data_unit')->result();

        $data = array(  'title'     => 'Details SK Mutasi',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'table' 	=> 'mutasi_data',
        'jabatan'   => $jabatan,
        'satker'    => $satker,
        'unker'    => $unker,
        'isi'       => 'admin/data_mutasi/details');
        $this->load->view('admin/_layout/wrapper', $data);     	
    }

    public function tambah_sk_pegawai()
    {
        $jabatan = $this->db->select('nama_jabatan')->get('data_jabatan')->result();
        $satker = $this->db->select('nama_satker')->get('data_unit')->result();
        $unker = $this->db->select('nama_unit')->get('data_unit')->result();

        $data = array(  'title'     => 'Tambah Pegawai SK',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'table'     => 'mutasi_data',
        'jabatan'   => $jabatan,
        'satker'    => $satker,
        'unker'    => $unker,
        'isi'       => 'admin/data_mutasi/tambah_sk_pegawai');
        $this->load->view('admin/_layout/wrapper', $data);          
    }

    public function individu()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $jabatan = $this->db->select('nama_jabatan')->get('data_jabatan')->result();
        $satker = $this->db->select('nama_satker')->get('data_unit')->result();
        $unker = $this->db->select('nama_unit')->get('data_unit')->result();

        $data = array(  'title'     => 'SK Mutasi Individu',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'table'     => 'mutasi_individu',
        'jabatan'   => $jabatan,
        'satker'    => $satker,
        'unker'    => $unker,
        'isi'       => 'admin/data_mutasi/individu');
        $this->load->view('admin/_layout/wrapper', $data); 
    }

    public function print_sk_individu($id='')
    {

    $data['individu'] = $this->db->where('id', $id)->get('mutasi_individu')->row();

    $this->crud->u('mutasi_individu', array('status' => 'Belum Valid'), array('id' => $id));

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-mutasi-kolektif.pdf";
    $this->pdf->load_view('admin/data_mutasi/print_individu', $data);
    }

    public function print_sk_kelompok($id='')
    {

    $data['sk'] = $this->db->where('id', $id)->get('mutasi_sk')->row();
    $data['individu'] = $this->db->where('id_mutasi_sk', $id)->get('mutasi_data')->result();

    $this->crud->u('mutasi_data', array('status' => 'Belum Valid'), array('id_mutasi_sk' => $id));

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-mutasi-kelompok.pdf";
    $this->pdf->load_view('admin/data_mutasi/print_kelompok', $data);
    }

    public function print_petikan($id='', $id_mutasi_sk = '')
    {

    $data['individu'] = $this->db->where('id', $id)->get('mutasi_data')->result();
    $data['sk'] = $this->db->where('id', $id_mutasi_sk)->get('mutasi_sk')->result();

    $this->crud->u('mutasi_data', array('status' => 'Belum Valid'), array('id' => $id));

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "petikan-sk-kolektif.pdf";
    $this->pdf->load_view('admin/data_mutasi/print_petikan', $data);
    }

    public function data_valid($id=''){
        $data = $this->db->where('id', $id)->get('mutasi_data')->row();
        $data_jabatan = $this->crud->gd('data_jabatan', array('nama_jabatan' => $data->jabatan_baru));

        $this->crud->u('mutasi_data', array('status' => 'Valid'), array('id' => $id));

        $data_baru = array(
            'jenis_jabatan' => $data_jabatan->jenis_jabatan,
            'eselon' => $data_jabatan->eselon,
            'nama_jabatan' => $data_jabatan->nama_jabatan,
            'satuan_kerja' => $data->satker_baru,
            'unit_kerja' => $data->unker_baru);

        $this->crud->u('data_pegawai', $data_baru, array('nip' => $data->nip));
        
        
        return $this->response([
                'stat' => 'sukses',
                'res' => 'Data Valid'
        ]);
    }

    public function data_valid_individu($id=''){
        $data = $this->db->where('id', $id)->get('mutasi_individu')->row();
        $data_jabatan = $this->crud->gd('data_jabatan', array('nama_jabatan' => $data->jabatan_baru));

        $this->crud->u('mutasi_individu', array('status' => 'Valid'), array('id' => $id));

        $data_baru = array(
            'jenis_jabatan' => $data_jabatan->jenis_jabatan,
            'eselon' => $data_jabatan->eselon,
            'nama_jabatan' => $data_jabatan->nama_jabatan,
            'satuan_kerja' => $data->satker_baru,
            'unit_kerja' => $data->unker_baru);

        $this->crud->u('data_pegawai', $data_baru, array('nip' => $data->nip));
        
        
        return $this->response([
                'stat' => 'sukses',
                'res' => 'Data Valid'
        ]);
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
