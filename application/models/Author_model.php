<?php
class Author_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
       
            
        public function get_authors()
        {
            
        $query = $this->db->get('author');
        $result = $query->result();
        
        $data = array('' => 'Seleccione autor...');
        
        foreach ($result as $row)
        {
                $data[$row->id] = $row->author_name;
        }
        
        return $data;
        
        }
        
        
        
}