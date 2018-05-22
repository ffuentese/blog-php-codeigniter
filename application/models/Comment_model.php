<?php
class Comment_model extends MY_Model {

        public function __construct()
        {
                $this->load->database();
    
        }
        
       
            
        public function get_comments_post($id = NULL)
        {
                $this->load->helper('url');
                if (isset($id)) 
                {    
                        $query = $this->db->get_where('comment', array('post_id' => $id));
                        $result = $query->result_array();
                        return $result;
                }
                return null;
        }
        
        public function set_comment()
        {
                $this->load->helper('url');
                
                $data = array(
                                'name' => $this->input->post('name'),
                                'email' => $this->input->post('email'),
                                'text' => $this->input->post('text'),
                                'post_id' => $this->input->post('id')
                        );        
                        
                return $this->db->insert('comment', $data);
                        
                
                
        }
        
}