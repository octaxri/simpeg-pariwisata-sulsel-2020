<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataOrganisasi extends Admin_controller {

    public function index(){
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        // $data_pegawai = $this->crud->ga('data_pegawai');
        $data_satker = $this->crud->ga('data_satker');

        $data = array(  'title'     => 'Data Organisasi',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'data_satker' => $data_satker,
        'table'        => 'data_organisasi',
        'isi'       => 'admin/data_organisasi/beranda');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function get_data_pegawai()
    {
            $satuan_kerja = $this->input->GET('satuan_kerja');
            $sql = 
            "
            SELECT
            nama_lengkap, id_pangkat,

            CASE 
                WHEN data_pegawai.id_pangkat = '1' THEN 'Juru Muda'
                WHEN data_pegawai.id_pangkat = '2' THEN 'Juru Muda Tingkat I'
                WHEN data_pegawai.id_pangkat = '3' THEN 'Juru'
                WHEN data_pegawai.id_pangkat = '4' THEN 'Juru Tingkat'
                WHEN data_pegawai.id_pangkat = '5' THEN 'Pengatur Muda'
                WHEN data_pegawai.id_pangkat = '6' THEN 'Pengatur Muda Tingkat I'
                WHEN data_pegawai.id_pangkat = '95896708' THEN 'Pengatur'
                WHEN data_pegawai.id_pangkat = '95896709' THEN 'Pengatur Tingkat I'
                WHEN data_pegawai.id_pangkat = '95896710' THEN 'Penata Muda'
                WHEN data_pegawai.id_pangkat = '95896711' THEN 'Penata Muda Tingkat I'
                WHEN data_pegawai.id_pangkat = '95896712' THEN 'Penata'
                WHEN data_pegawai.id_pangkat = '95896713' THEN 'Penata Tingkat I'
                WHEN data_pegawai.id_pangkat = '95896714' THEN 'Pembina'
                WHEN data_pegawai.id_pangkat = '95896715' THEN 'Pembina Tingkat I'
                WHEN data_pegawai.id_pangkat = '95896716' THEN 'Pembina Utama Muda'
                WHEN data_pegawai.id_pangkat = '95896717' THEN 'Pembina Utama Madya'
                WHEN data_pegawai.id_pangkat = '95896718' THEN 'Pembina Utama'

                END AS nama_pangkat,

            @total := CASE 
                WHEN data_pegawai.id_pangkat = '1' THEN 1
                WHEN data_pegawai.id_pangkat = '2' THEN 2
                WHEN data_pegawai.id_pangkat = '3' THEN 3
                WHEN data_pegawai.id_pangkat = '4' THEN 4
                WHEN data_pegawai.id_pangkat = '5' THEN 5
                WHEN data_pegawai.id_pangkat = '6' THEN 6
                WHEN data_pegawai.id_pangkat = '95896708' THEN 7
                WHEN data_pegawai.id_pangkat = '95896709' THEN 8
                WHEN data_pegawai.id_pangkat = '95896710' THEN 9
                WHEN data_pegawai.id_pangkat = '95896711' THEN 10
                WHEN data_pegawai.id_pangkat = '95896712' THEN 11
                WHEN data_pegawai.id_pangkat = '95896713' THEN 12
                WHEN data_pegawai.id_pangkat = '95896714' THEN 13
                WHEN data_pegawai.id_pangkat = '95896715' THEN 14
                WHEN data_pegawai.id_pangkat = '95896716' THEN 15
                WHEN data_pegawai.id_pangkat = '95896717' THEN 16
                WHEN data_pegawai.id_pangkat = '95896718' THEN 17

            END AS TOTAL,

            CASE
            WHEN @prev_value = @total THEN @rank_count
            WHEN @prev_value := @total THEN @rank_count := 1 + @rank_count                  
            END AS rank

            FROM (SELECT @prev_value := null) w, (SELECT @rank_count := 0) q, data_pegawai

            WHERE data_pegawai.satuan_kerja = '".$satuan_kerja."'

            ORDER BY 
                TOTAL DESC

            ";

        $a = $this->db->query($sql)->result();
        echo json_encode($a);
    }

    public function get_data_nip_parent()
    {
        $a = $this->input->get('id_satker');
        $parent = $this->input->get('parent');
        $b = $this->db->where('id_satker' , $a)->get('data_satker')->row('nama_satker');

        $c = $this->db->select('nip')->where('satuan_kerja', $b)->get('data_pegawai')->result();
        $d = $this->db->select('id, jabatan, parent')->get('data_organisasi')->result();
        echo json_encode(array('nip' => $c, 'parent' => $d));
    }

    public function struktur_organisasi()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        // $data_pegawai = $this->crud->ga('data_pegawai');

        $data = array(  'title'     => 'Data Pegawai',
        'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'satker' => $this->db->where('nama_satker', $this->session->fullname)->get('data_satker')->row('id_satker'),
        'table' => 'data_organisasi',
        'isi'       => 'admin/data_organisasi/struktur_organisasi');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function get_data_organisasi()
    {
        $data = $this->input->get(NULL, TRUE);

        $this->db->select("a.id as id, a.satker as satker, b.nama_lengkap as nama_lengkap, a.jabatan as jabatan, a.parent as parent");
        $this->db->from($data['table'] . " a");
        $this->db->join('data_pegawai b', "a.nip = b.nip");
        $this->db->where('satker', $data['satker']);
        $query = $this->db->get()->result();

        echo json_encode($query);
        
    }

}
