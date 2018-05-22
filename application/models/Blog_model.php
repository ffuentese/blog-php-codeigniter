<?php
class Blog_model extends MY_Model {
        // Declare variables
        private $_limit;
        private $_pageNumber;
        private $_offset;
        // setter getter function
           public function __construct()
        {
                $this->load->database();
        }
        
        public function setLimit($limit) {
            $this->_limit = $limit;
        }
 
        public function setPageNumber($pageNumber) {
            $this->_pageNumber = $pageNumber;
        }

        public function setOffset($offset) {
            $this->_offset = $offset;
        }
        // Count all record of table "employee" in database.
        public function getAllBlogPostsCount() {
            $this->db->from('blog_posts');
            return $this->db->count_all_results();
        }
     
        
        public function get_posts($slug = FALSE)
        {
            
        if ($slug === FALSE)
        {
               
                $this->db->select('*');
                $this->db->from('blog_posts');
                $this->db->join('category', 'category.id = blog_posts.category_id');
                $this->db->join('users', 'users.user_id = blog_posts.author_id');
                $this->db->limit($this->_pageNumber, $this->_offset);
                $query = $this->db->get();
                return $query->result_array();
                
        }

        $this->db->select('blog_posts.id id, title, slug, excerpt, date, text, cat_name, username, tags ');
        $this->db->from('blog_posts');
        $this->db->join('category', 'category.id = blog_posts.category_id');
        $this->db->join('users', 'users.user_id = blog_posts.author_id');
        $this->db->where('slug', $slug);
        $query = $this->db->get();
        // $query = $this->db->get_where('blog_posts', array('slug' => $slug));
        return $query->row_array();
        }
        
        public function set_post()
        {
        
        $this->load->helper('url');
    
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        date_default_timezone_set('America/Santiago'); # add your city to set local time zone
        $now = date('d-m-Y H:i:s');
    
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            'excerpt' => substr($this->input->post('text'), 50),
            'tags' => $this->input->post('tags'),
            'category_id' => $this->input->post('category'),
            'author_id' => $this->input->post('author')
        );
        $this->db->set('date', 'NOW()', FALSE);
        return $this->db->insert('blog_posts', $data);
        }
        
        public function modify_post($slug = FALSE)
        {
        $original_post = $this->get_posts($slug);
        $this->load->helper('url');
    
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        date_default_timezone_set('America/Santiago'); # add your city to set local time zone
        $now = date('d-m-Y H:i:s');
    
        $data = array(
            'id' => $this->input->post('id'),
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            'excerpt' => substr($this->input->post('text'), 50),
            'tags' => $this->input->post('tags'),
            'category_id' => $this->input->post('category'),
            'author_id' => $this->input->post('author')
        );
        $this->db->set('date', 'NOW()', FALSE);
        $this->db->where('id', $data['id']);
        return $this->db->update('blog_posts', $data);
        }
        
        public function get_tag_cloud()
        {
            $this->db->select('tags');
            $query = $this->db->get('blog_posts');
            $arr = $query->result_array();
            $array = "";
            for ($i = 0; $i < count($arr); $i++)
            {
            	$array .= $arr[$i]['tags'].',';
            }
            
            
            return array_unique(explode(',', $array));
            
        }
        
}