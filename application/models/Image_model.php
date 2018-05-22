<?php
class Image_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
       
            
        public function get_images_post($id = NULL)
        {
            
                if (isset($id)) 
                {    
                        $query = $this->db->get_where('image', $id);
                        $result = $query->result_array();
                        return $data;
                }
        
                return null;
        
        }
        
        public function set_images_post($id = NULL)
        {
                if (isset($id))
                {
                        $data = array(
                                'post_id' => $this->input->post('post_id'),
                                'name' => $this->input->post('name')
                        );
                        
                        $this->db->insert('image',$data);
                }
                return null;
        }
        
        
}