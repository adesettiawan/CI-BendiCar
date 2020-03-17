<?php 
    class car extends CI_Model {
        public function get_data() {
            return $this->db->get('petugas')->result_array();
        }
    }
?>