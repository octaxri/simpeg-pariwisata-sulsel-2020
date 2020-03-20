<?php defined('BASEPATH') OR exit('No direct script access allowed');
class TreeModel extends CI_Model {
    function tree_all() {
        $result = $this->db->query("SELECT  id, name,name as text, parent_id FROM data_unor  ")->result_array();
            foreach ($result as $row) {
                $data[] = $row;
            }
            return $data;
    }

    function create_node($data){
        $this->db->insert('data_unor', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    function rename_node($w, $data){
        $result = $this->db->where($w)->update('data_unor', $data);
    }

    function delete_node($w){
        $result = $this->db->where($w)->delete('data_unor');
    }

}
