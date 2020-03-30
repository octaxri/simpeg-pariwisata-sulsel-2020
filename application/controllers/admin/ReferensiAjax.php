<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReferensiAjax extends Admin_controller {

    // Index
    public function index()
    {
        redirect(admin_url('referensi'));
    }

    public function unitOrganisasi($operation){
        $input = $this->input->post(NULL, TRUE);
        switch ($operation) {
            case 'create_node':
                $node = isset($input['id']) && $input['id'] !== '#' ? (int)$input['id'] : 0;
                $nodeText = isset($input['text']) && $input['text'] !== '' ? $input['text'] : '';
                // $sql ="INSERT INTO `treeview_items` (`name`, `text`, `parent_id`) VALUES('".$nodeText."', '".$nodeText."', '".$node."')";
                $result = $this->treemodel->create_node(array('parent_id' => $node, 'name' => $nodeText, 'text' => $nodeText));
                return $this->response(array('id' => $result));
                break;

             case 'rename_node':
                    $node = isset($input['id']) && $input['id'] !== '#' ? (int)$input['id'] : 0;
                    //print_R($input);
                    $nodeText = isset($input['text']) && $input['text'] !== '' ? $input['text'] : '';
                    // $sql ="UPDATE `treeview_items` SET `name`='".$nodeText."',`text`='".$nodeText."' WHERE `id`= '".$node."'";
                    // mysqli_query($conn, $sql);
                    $this->treemodel->rename_node(array('id' => $node),array('name' => $nodeText, 'text' => $nodeText));
                    break;
                 break;

            case 'delete_node':
                   $node = isset($input['id']) && $input['id'] !== '#' ? (int)$input['id'] : 0;
                    $this->treemodel->delete_node(array('id' => $node));
                break;
            
            default:
                # code...
                break;
        }
    }

    // Tambah Data Agama
    public function tambah_agama()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_agama', 'Agama', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_agama', 'id_agama');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_agama'    => $data_id['id'],
                            'nama_agama'       => $input['nama_agama'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_agama', $data);
            $detail = $this->crud->gd('data_agama', array('id_agama' => $data['id_agama']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     // Tambah Pendidikan
    public function tambah_pendidikan()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_pendidikan', 'Pendidikan', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            // $data_id = acak_id('data_pendidikan', 'id_pendidikan');
            $input = $this->input->post(NULL, TRUE);
            $data = array(
                            'nama_pendidikan'       => $input['nama_pendidikan'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_pendidikan', $data);
            $detail = $this->crud->gd('data_pendidikan', array('nama_pendidikan' => $data['nama_pendidikan']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     // Edit  Data Agama
    public function edit_agama($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_agama', 'Agama', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_agama'       => $input['nama_agama'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_agama', $data, array('id_agama' => $id));
            $detail = $this->crud->gd('data_agama', array('id_agama' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     // Edit Pendidikan
    public function edit_pendidikan($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_pendidikan', 'Pendidikan', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_pendidikan'       => $input['nama_pendidikan'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_pendidikan', $data, array('id_pendidikan' => $id));
            $detail = $this->crud->gd('data_pendidikan', array('id_pendidikan' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function tambah_satker()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_satker', 'Bidang/Bagian', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_satker', 'id_satker');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_satker'       => $input['nama_satker'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_satker', $data);
            $detail = $this->crud->gd('data_satker', array('nama_satker' => $data['nama_satker']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     // Tambah Unit
    public function tambah_unit()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_unit', 'Subbidang/Seksi', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_satker', 'Bidang/Bagian', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_unit', 'id_unit');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_unit'    => $data_id['id'],
                            'nama_unit'       => $input['nama_unit'],
                            'nama_satker'       => $input['nama_satker'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_unit', $data);
            $detail = $this->crud->gd('data_unit', array('id_unit' => $data['id_unit']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function tambah_provinsi()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_provinsi', ' Provinsi', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_provinsi', 'id_provinsi');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_provinsi'    => $data_id['id'],
                            'nama_provinsi'       => $input['nama_provinsi'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_provinsi', $data);
            $detail = $this->crud->gd('data_provinsi', array('id_provinsi' => $data['id_provinsi']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     // Tambah Kab
    public function tambah_kab()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_kabupaten', ' Kabupaten', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_provinsi', ' Provinsi', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_kabupaten', 'id_kabupaten');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_kabupaten'    => $data_id['id'],
                            'nama_kabupaten'       => $input['nama_kabupaten'],
                            'nama_provinsi'       => $input['nama_provinsi'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_kabupaten', $data);
            $detail = $this->crud->gd('data_kabupaten', array('id_kabupaten' => $data['id_kabupaten']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    // Tambah Kec
   public function tambah_kec()
   {
       $valid = $this->form_validation;
       $valid->set_error_delimiters('<i style="color: red;">', '</i>');
       $valid->set_rules('nama_kecamatan', ' Kecamatan', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('nama_kabupaten', ' Kabupaten', 'required|trim|strip_tags|htmlspecialchars');

       if ($valid->run() === TRUE)
       {
           $data_id = acak_id('data_kecamatan', 'id_kecamatan');
           $input = $this->input->post(NULL, TRUE);
           $data = array(  'id_kecamatan'    => $data_id['id'],
                           'nama_kecamatan'       => $input['nama_kecamatan'],
                           'nama_kabupaten'       => $input['nama_kabupaten'],
                           'iat'               => date('Y-m-d H:i:s'));
           $this->crud->i('data_kecamatan', $data);
           $detail = $this->crud->gd('data_kecamatan', array('id_kecamatan' => $data['id_kecamatan']));
           if ($detail) {
               return $this->response([
                   'success'   => TRUE,
                   'data'      => $detail
               ]);
           } else return $this->response(['success' => FALSE]);
       } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
   }

   // Tambah Kel
  public function tambah_kel()
  {
      $valid = $this->form_validation;
      $valid->set_error_delimiters('<i style="color: red;">', '</i>');
      $valid->set_rules('nama_kelurahan', ' Kelurahan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_kecamatan', ' kecamatan', 'required|trim|strip_tags|htmlspecialchars');

      if ($valid->run() === TRUE)
      {
          $data_id = acak_id('data_kelurahan', 'id_kelurahan');
          $input = $this->input->post(NULL, TRUE);
          $data = array(  'id_kelurahan'    => $data_id['id'],
                          'nama_kelurahan'       => $input['nama_kelurahan'],
                          'nama_kecamatan'       => $input['nama_kecamatan'],
                          'iat'               => date('Y-m-d H:i:s'));
          $this->crud->i('data_kelurahan', $data);
          $detail = $this->crud->gd('data_kelurahan', array('id_kelurahan' => $data['id_kelurahan']));
          if ($detail) {
              return $this->response([
                  'success'   => TRUE,
                  'data'      => $detail
              ]);
          } else return $this->response(['success' => FALSE]);
      } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
  }

     // Edit  Data Satker
    public function edit_satker($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_satker', 'Bidang/Bagian', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_satker'       => $input['nama_satker'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_satker', $data, array('id_satker' => $id));
            $detail = $this->crud->gd('data_satker', array('id_satker' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

     // Edit Unit
    public function edit_unit($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_unit', 'Subbidang/Seksi', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_satker', 'Bidang/Bagian', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_unit'       => $input['nama_unit'],
                            'nama_satker'       => $input['nama_satker'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_unit', $data, array('id_unit' => $id));
            $detail = $this->crud->gd('data_unit', array('id_unit' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function tambah_eselon()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_eselon', 'Tingkat Eselon', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_eselon', 'id_eselon');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_eselon'    => $data_id['id'],
                            'nama_eselon'       => $input['nama_eselon'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_eselon', $data);
            $detail = $this->crud->gd('data_eselon', array('id_eselon' => $data['id_eselon']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

      // Edit Eselon
    public function edit_eselon($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_eselon', 'Tingkat Eselon', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_eselon'       => $input['nama_eselon'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_eselon', $data, array('id_eselon' => $id));
            $detail = $this->crud->gd('data_eselon', array('id_eselon' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    //Tambah Jabatan
    public function tambah_jabatan()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_jabatan', 'Nama Jabatan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_jenisjabatan', 'Jenis Jabatan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_eselon', 'Nama Eselon', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_jabatan', 'id_jabatan');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_jabatan'    => $data_id['id'],
                            'nama_jabatan'       => $input['nama_jabatan'],
                            'jenis_jabatan'       => $input['nama_jenisjabatan'],
                            'eselon'       => $input['nama_eselon'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_jabatan', $data);
            $detail = $this->crud->gd('data_jabatan', array('id_jabatan' => $data['id_jabatan']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

      // Edit Jabatan
    public function edit_jabatan($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_jabatan', 'Nama Jabatan', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_jabatan'       => $input['nama_jabatan'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_jabatan', $data, array('id_jabatan' => $id));
            $detail = $this->crud->gd('data_jabatan', array('id_jabatan' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function tambah_jenisjabatan()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_jenisjabatan', 'Jenis Jabatan', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_jenisjabatan', 'id_jenisjabatan');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_jenisjabatan'    => $data_id['id'],
                            'nama_jenisjabatan'       => $input['nama_jenisjabatan'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_jenisjabatan', $data);
            $detail = $this->crud->gd('data_jenisjabatan', array('id_jenisjabatan' => $data['id_jenisjabatan']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

      // Edit Jenis Jabatan
    public function edit_jenisjabatan($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_jenisjabatan', 'Jenis Jabatan', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_jenisjabatan'       => $input['nama_jenisjabatan'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_jenisjabatan', $data, array('id_jenisjabatan' => $id));
            $detail = $this->crud->gd('data_jenisjabatan', array('id_jenisjabatan' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    //Tambah Golongan
    public function tambah_golongan()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_golongan', 'Golongan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_ruang', 'Ruang', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_pangkat', 'Pangkat', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            // $data_id = acak_id('data_golongan', 'id_golongan');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  
                            // 'id_golongan'    => $data_id['id'],
                            'nama_golongan'       => $input['nama_golongan'],
                            'nama_ruang'       => $input['nama_ruang'],
                            'nama_pangkat'       => $input['nama_pangkat'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_golongan', $data);
            $detail = $this->crud->gd('data_golongan', array('nama_ruang' => $input['nama_ruang']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

      // Edit Golongan
    public function edit_golongan($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_golongan', 'Golongan', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_ruang', 'Ruang', 'required|trim|strip_tags|htmlspecialchars');
        $valid->set_rules('nama_pangkat', 'Pangkat', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_golongan'       => $input['nama_golongan'],
                            'nama_ruang'       => $input['nama_ruang'],
                            'nama_pangkat'       => $input['nama_pangkat'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_golongan', $data, array('id_golongan' => $id));
            $detail = $this->crud->gd('data_golongan', array('id_golongan' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    //Tambah Status Pegawai
    public function tambah_statuspegawai()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_statuspegawai', 'Status Pegawai', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_statuspegawai', 'id_statuspegawai');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_statuspegawai'    => $data_id['id'],
                            'nama_statuspegawai'       => $input['nama_statuspegawai'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_statuspegawai', $data);
            $detail = $this->crud->gd('data_statuspegawai', array('id_statuspegawai' => $data['id_statuspegawai']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

      // Edit Status Pegawai
    public function edit_statuspegawai($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_statuspegawai', 'Status Pegawai', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_statuspegawai'       => $input['nama_statuspegawai'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_statuspegawai', $data, array('id_statuspegawai' => $id));
            $detail = $this->crud->gd('data_statuspegawai', array('id_statuspegawai' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    //Tambah Jenis Pegawai
    public function tambah_jenispegawai()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_jenispegawai', ' Jenis Pegawai', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            $data_id = acak_id('data_jenispegawai', 'id_jenispegawai');
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'id_jenispegawai'    => $data_id['id'],
                            'nama_jenispegawai'       => $input['nama_jenispegawai'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_jenispegawai', $data);
            $detail = $this->crud->gd('data_jenispegawai', array('id_jenispegawai' => $data['id_jenispegawai']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

      // Edit Jenis Pegawai
    public function edit_jenispegawai($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_jenispegawai', ' Jenis Pegawai', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_jenispegawai'       => $input['nama_jenispegawai'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_jenispegawai', $data, array('id_jenispegawai' => $id));
            $detail = $this->crud->gd('data_jenispegawai', array('id_jenispegawai' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    //Tambah Kedudukan Pegawai
    public function tambah_kedudukanpegawai()
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_kedudukanpegawai', ' Kedudukan Pegawai', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {
            // $data_id = acak_id('data_kedudukanpegawai', 'id_kedudukanpegawai');
            $input = $this->input->post(NULL, TRUE);
            $data = array(
                            'nama_kedudukanpegawai'       => $input['nama_kedudukanpegawai'],
                            'iat'               => date('Y-m-d H:i:s'));
            $this->crud->i('data_kedudukanpegawai', $data);
            $detail = $this->crud->gd('data_kedudukanpegawai', array('nama_kedudukanpegawai' => $data['nama_kedudukanpegawai']));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return  $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

      // Edit Kedudukan Pegawai
    public function edit_kedudukanpegawai($id)
    {
        $valid = $this->form_validation;
        $valid->set_error_delimiters('<i style="color: red;">', '</i>');
        $valid->set_rules('nama_kedudukanpegawai', 'Kedudukan Pegawai', 'required|trim|strip_tags|htmlspecialchars');

        if ($valid->run() === TRUE)
        {;
            $input = $this->input->post(NULL, TRUE);
            $data = array(  'nama_kedudukanpegawai'       => $input['nama_kedudukanpegawai'],
                            'uat'               => date('Y-m-d H:i:s'));
            $this->crud->u('data_kedudukanpegawai', $data, array('id_kedudukanpegawai' => $id));
            $detail = $this->crud->gd('data_kedudukanpegawai', array('id_kedudukanpegawai' => $id));
            if ($detail) {
                return $this->response([
                    'success'   => TRUE,
                    'data'      => $detail
                ]);
            } else return $this->response(['success' => FALSE]);
        } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
    }

    public function getUnitBySatker(){
        $input = $this->input->post(NULL, TRUE);
        $detail = $this->crud->gw('data_unit',array('nama_satker' => $input['nama_satker']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getJabatanByJenisJabatan(){
        $input = $this->input->post(NULL, TRUE);
        $detail = $this->crud->gw('data_jabatan',array('jenis_jabatan' => $input['jenis_jabatan']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getKabByProvinsi(){
        $input = $this->input->post(NULL, TRUE);
        $detail = $this->crud->gw('data_kabupaten',array('nama_provinsi' => $input['nama_provinsi']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getKecByKabupaten(){
        $input = $this->input->post(NULL, TRUE);
        $detail = $this->crud->gw('data_kecamatan',array('nama_kabupaten' => $input['nama_kabupaten']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function getKelByKecamatan(){
        $input = $this->input->post(NULL, TRUE);
        $detail = $this->crud->gw('data_kelurahan',array('nama_kecamatan' => $input['nama_kecamatan']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
                'data'      => $detail
            ]);
        } else return $this->response(['success' => FALSE]);
    }



    public function editUnit(){
        $input = $this->input->post(NULL, TRUE);
        $data = array(
                    'nama_unit' => $input['value']
                    );
        $this->crud->u('data_unit',$data,array('id_unit' => $input['pk']));
        $detail = $this->crud->gw('data_unit',array('nama_unit' => $input['value']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function editJabatan(){
        $input = $this->input->post(NULL, TRUE);
        $data = array(
                    'nama_jabatan' => $input['value']
                    );
        $this->crud->u('data_jabatan',$data,array('id_jabatan' => $input['pk']));
        $detail = $this->crud->gw('data_jabatan',array('nama_jabatan' => $input['value']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
            ]);
        } else return $this->response(['success' => FALSE]);
    }


    public function editKab(){
        $input = $this->input->post(NULL, TRUE);
        $data = array(
                    'nama_kabupaten' => $input['value']
                    );
        $this->crud->u('data_kabupaten',$data,array('id_kabupaten' => $input['pk']));
        $detail = $this->crud->gw('data_kabupaten',array('nama_kabupaten' => $input['value']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function editKec(){
        $input = $this->input->post(NULL, TRUE);
        $data = array(
                    'nama_kecamatan' => $input['value']
                    );
        $this->crud->u('data_kecamatan',$data,array('id_kecamatan' => $input['pk']));
        $detail = $this->crud->gw('data_kecamatan',array('nama_kecamatan' => $input['value']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
            ]);
        } else return $this->response(['success' => FALSE]);
    }

    public function editKel(){
        $input = $this->input->post(NULL, TRUE);
        $data = array(
                    'nama_kelurahan' => $input['value']
                    );
        $this->crud->u('data_kelurahan',$data,array('id_kelurahan' => $input['pk']));
        $detail = $this->crud->gw('data_kelurahan',array('nama_kelurahan' => $input['value']));
        if ($detail) {
            return $this->response([
                'success'   => TRUE,
            ]);
        } else return $this->response(['success' => FALSE]);
    }


    // Edit  Data Satker
   public function edit_provinsi($id)
   {
       $valid = $this->form_validation;
       $valid->set_error_delimiters('<i style="color: red;">', '</i>');
       $valid->set_rules('nama_provinsi', 'Provinsi', 'required|trim|strip_tags|htmlspecialchars');

       if ($valid->run() === TRUE)
       {
           $input = $this->input->post(NULL, TRUE);
           $data = array(  'nama_provinsi'       => $input['nama_provinsi'],
                           'uat'               => date('Y-m-d H:i:s'));
           $this->crud->u('data_provinsi', $data, array('id_provinsi' => $id));
           $detail = $this->crud->gd('data_provinsi', array('id_provinsi' => $id));
           if ($detail) {
               return $this->response([
                   'success'   => TRUE,
                   'data'      => $detail
               ]);
           } else return $this->response(['success' => FALSE]);
       } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
   }

    // Edit Kab
   public function edit_kab($id)
   {
       $valid = $this->form_validation;
       $valid->set_error_delimiters('<i style="color: red;">', '</i>');
       $valid->set_rules('nama_kabupaten', ' Kabupaten', 'required|trim|strip_tags|htmlspecialchars');
       $valid->set_rules('nama_provinsi', ' Provinsi', 'required|trim|strip_tags|htmlspecialchars');

       if ($valid->run() === TRUE)
       {;
           $input = $this->input->post(NULL, TRUE);
           $data = array(  'nama_kabupaten'       => $input['nama_kabupaten'],
                           'nama_provinsi'       => $input['nama_provinsi'],
                           'uat'               => date('Y-m-d H:i:s'));
           $this->crud->u('data_kabupaten', $data, array('id_kabupaten' => $id));
           $detail = $this->crud->gd('data_kabupaten', array('id_kabupaten' => $id));
           if ($detail) {
               return $this->response([
                   'success'   => TRUE,
                   'data'      => $detail
               ]);
           } else return $this->response(['success' => FALSE]);
       } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
   }

   // Edit Kec
  public function edit_kec($id)
  {
      $valid = $this->form_validation;
      $valid->set_error_delimiters('<i style="color: red;">', '</i>');
      $valid->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim|strip_tags|htmlspecialchars');
      $valid->set_rules('nama_kabupaten', 'Kabupaten', 'required|trim|strip_tags|htmlspecialchars');

      if ($valid->run() === TRUE)
      {;
          $input = $this->input->post(NULL, TRUE);
          $data = array(  'nama_kecamatan'       => $input['nama_kecamatan'],
                          'nama_kabupaten'       => $input['nama_kabupaten'],
                          'uat'               => date('Y-m-d H:i:s'));
          $this->crud->u('data_kecamatan', $data, array('id_kecamatan' => $id));
          $detail = $this->crud->gd('data_kecamatan', array('id_kecamatan' => $id));
          if ($detail) {
              return $this->response([
                  'success'   => TRUE,
                  'data'      => $detail
              ]);
          } else return $this->response(['success' => FALSE]);
      } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
  }

  // Edit Kel
 public function edit_kel($id)
 {
     $valid = $this->form_validation;
     $valid->set_error_delimiters('<i style="color: red;">', '</i>');
     $valid->set_rules('nama_kelurahan', 'Kelurahan', 'required|trim|strip_tags|htmlspecialchars');
     $valid->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim|strip_tags|htmlspecialchars');

     if ($valid->run() === TRUE)
     {;
         $input = $this->input->post(NULL, TRUE);
         $data = array(  'nama_kelurahan'       => $input['nama_kelurahan'],
                         'nama_kecamatan'       => $input['nama_kecamatan'],
                         'uat'               => date('Y-m-d H:i:s'));
         $this->crud->u('data_kelurahan', $data, array('id_kelurahan' => $id));
         $detail = $this->crud->gd('data_kelurahan', array('id_kelurahan' => $id));
         if ($detail) {
             return $this->response([
                 'success'   => TRUE,
                 'data'      => $detail
             ]);
         } else return $this->response(['success' => FALSE]);
     } else return $this->response(['success' => FALSE, 'error' => validation_errors()]);
 }

    public function hapusData($table, $id){
        $cek = $this->crud->gd('data_'.$table, array('id_'.$table => $id));
        if ($cek)
        {
            $this->crud->d('data_'.$table, array('id_'.$table => $id));
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

    // kode rifqi

    public function get_data()
    {
        $input = $this->input->post(NULL, TRUE);

        if($input['table'] == 'data_pegawai'){
            $valid = $this->form_validation;
            $valid->set_error_delimiters('<i style="color: red;">', '</i>');
            $valid->set_rules('satker', 'Bidang/Bagian', 'trim|strip_tags|htmlspecialchars');

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
        if(isset($data['nip'])){
             $nip = $data['nip'];
             unset($data['nip']);
        }   


        if($table == 'dokumen_pegawai'){
                    
            $i=0;
            foreach ($data['dokumen_id'] as $key => $value) {

                if (!is_dir('./public/uploads/dokumen/'. $nip))
                {
                    mkdir('./public/uploads/dokumen/'.$nip,  0777, true);
                }

                $config['upload_path']          = './public/uploads/dokumen/'.$nip;
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 1000;
                $config['overwrite']           = TRUE;
                $config['file_name']           = $data['nama_dokumen'][$i];

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'.$i))
                {
                    $error = array('error' => $this->upload->display_errors());
                    // echo var_dump($error);
                    return $this->response([
                        'stat' => 'Gagal',
                        'res' => 'Gagal Menyimpan Dokumen ',
                        "error" => $error
                    ]);
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
                    'stat' => 'Berhasil',
                    'res' => 'Dokumen Telah Tersimpan '
                ]);
            }else{
                return $this->response([
                    'stat' => 'Gagal',
                    'res' => 'Gagal Menyimpan Dokumen '
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
                'stat' => 'Berhasil',
                'res' => 'Data Telah Dihapus '
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Menghapus Data'
            ]);
        }        
    }

    public function update_data_dokumen()
    {
        $data = $this->input->post(NULL, TRUE);

            $config['upload_path']         = './public/uploads/dokumen/'.$data['nip'];
            $config['allowed_types']       = 'pdf';
            $config['max_size']            = 1000;
            $config['overwrite']           = TRUE;
            $config['file_name']           = $data['nama_dokumen'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                $data1['nama_dokumen'] = $data['nama_dokumen'];
                $this->crud->u('dokumen_pegawai', $data1, array('id' => $data['id']));
            }
            else
            {
                $image = array('upload_data' => $this->upload->data());

                $data1['nama_dokumen'] = $data['nama_dokumen'];
                $data1['file'] = $image["upload_data"]["file_name"];
                $this->crud->u('dokumen_pegawai', $data1, array('id' => $data['id']));                   
            }

        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Dokumen Telah Diperbaharui'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Mengubah Dokumen'
            ]);
        }             
    }

    public function get_mutasi_sk()
    {
        $this->datatables->select('*');
        $this->datatables->from('mutasi_sk');
        print_r($this->datatables->generate());
    }

    public function add_mutasi_sk()
    {
        $a = $this->input->post(null,true);

        $this->db->insert('mutasi_sk', $a);

        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Berhasil Menambahkan Data'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Menambahkan Data'
            ]);
        }
    }

    public function get_mutasi_data()
    {
        $id = $this->input->post('id');
        $this->datatables->select('*');
        $this->datatables->where('id_mutasi_sk', $id);
        $this->datatables->from('mutasi_data');
        print_r($this->datatables->generate());        
    }

    public function get_data_byNIP()
    {
        $nip = $this->input->get('nip');
        $a = $this->db->select('nama_lengkap, jenis_pangkat, nama_jabatan, satuan_kerja, unit_kerja')->where('nip', $nip)->get('data_pegawai');
        if($a->num_rows() > 0){
            echo json_encode($a->row());
        }else{
            echo 'gagal';
        }
        
    }

    public function add_mutasi_data()
    {
        $a = $this->input->post(null,true);

        $this->db->insert('mutasi_data', $a);

        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Behasil',
                'res' => 'Berhasil Menambahkan Data'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Menambahkan Data'
            ]);
        }
    }

    public function delete_mutasi_data()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id)->delete('mutasi_data');
        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Berhasil Menghapus Data'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Menghapus Data'
            ]);
        }        
    }

    public function edit_mutasi_sk($id='')
    {
        $data = $this->input->post(null, true);

        $this->db->where('id', $id)->update('mutasi_sk', $data);
        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Data Telah Diperbaharui'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Mengubah Data'
            ]);
        }
    }

    public function hapus_mutasi_sk($id=''){
        $this->db->where('id_mutasi_sk', $id)->delete('mutasi_data');
        $this->db->where('id', $id)->delete('mutasi_sk');
        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Berhasil Menghapus Data'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Menghapus Data'
            ]);
        }        
    }

    public function get_mutasi_individu()
    {
        $this->datatables->select('*');
        $this->datatables->from('mutasi_individu');
        print_r($this->datatables->generate());
    }

    public function add_mutasi_individu()
    {
        $a = $this->input->post(null, true);
        $this->db->insert('mutasi_individu', $a);
        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Berhasil Menambahkan Data'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Menambahkan Data'
            ]);
        }        
    }

    public function edit_mutasi_sk_individu($id='')
    {
        $data = $this->input->post(null, true);

        $this->db->where('id', $id)->update('mutasi_individu', $data);
        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Data Telah Diperbaharui'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Mengubah Data'
            ]);
        }
    }

    public function get_data_mutasi_individu($id='')
    {
        $a=$this->db->where('id', $id)->select('jabatan_baru, satker_baru, unker_baru')->get('mutasi_individu')->row();
        echo json_encode($a);
    }

    public function delete_data_mutasi_individu($id='')
    {
        $this->db->where('id', $id)->delete('mutasi_individu');
        if($this->db->affected_rows() == 1){
            return $this->response([
                'stat' => 'Berhasil',
                'res' => 'Data Telah Dihapus'
            ]);
        }else{
            return $this->response([
                'stat' => 'Gagal',
                'res' => 'Gagal Menghapus Data'
            ]);
        }        
    }

    public function get_data_mutasi_individu_all($id='')
    {
        $a=$this->db->where('id', $id)->get('mutasi_individu')->row();
        echo json_encode($a);
    }

}
