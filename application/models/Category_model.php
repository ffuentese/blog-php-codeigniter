<?php
class Category_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_cats()
        {
            
        $query = $this->db->get('category');
        $result = $query->result();
        
        $data = array('' => 'Seleccione categoria...');
        
        foreach ($result as $row)
        {
                $data[$row->id] = $row->cat_name;
        }
        
        return $data;
        
        }
        
      
        
}

