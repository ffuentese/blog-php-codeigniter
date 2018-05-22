<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/index
	 *	- or -
	 * 		http://example.com/index.php/Index/index
	 *	- or -

	 */
	 
	function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('category_model');
		$this->load->model('comment_model');
		$this->load->helper('url_helper');
        $this->load->library('pagination');
	} 
	
	public function index()
	{


        $data['categories'] = $this->category_model->get_cats();
        $data['title'] = 'Blog archive';
        
         $config['total_rows'] = $this->blog_model->getAllBlogPostsCount();
         $data['total_count'] = $config['total_rows'];
         $config['suffix'] = '';
         
        if ($config['total_rows'] > 0) {
        $page_number = $this->uri->segment(2);
        
        if ($page_number == 0 || !isset($page_number))
            $page_number = 1;
        $offset = ($page_number - 1) * $this->pagination->per_page;
        $this->blog_model->setPageNumber($this->pagination->per_page);
        $this->blog_model->setOffset($offset);
        $this->pagination->cur_page = $offset;
        $data['post'] = $this->blog_model->get_posts();
        $data['ft_list_posts'] = $data['post'];
        $data['page_links'] = $this->pagination->create_links();
        $data['ft_tag_cloud'] = $this->blog_model->get_tag_cloud();
        }

        
        $this->load->view('header', $data);
        $this->load->view('blog', $data);
        $this->load->view('footer', $data);
	}
	
	public function view($slug = NULL)
	{
	    $this->load->library('form_validation');
		$data['post'] = $this->blog_model->get_posts($slug);	
		$data['ft_list_posts'] = $this->blog_model->get_posts();
		$data['categories'] = $this->category_model->get_cats();
	    $data['tags'] = explode(",", $data['post']['tags']);
	    $data['ft_tag_cloud'] = $this->blog_model->get_tag_cloud();
	    $data['comments'] = $this->comment_model->get_comments_post($data['post']['id']);
		 if (empty($data['post']))
        {
                show_404();
        }
        
        $data['title'] = $data['post']['title'];
 


        $this->load->view('header', $data);
        $this->load->view('post', $data);
        $this->load->view('footer', $data);
	}
	
	public function create()
	{
	
    	if( $this->require_role('customer'))
    	{
            $this->load->helper('form');
            $this->load->library('form_validation');
        
            $data['title'] = 'Crear un nuevo post';
            $data['ft_list_posts'] = $this->blog_model->get_posts();
            $data['ft_tag_cloud'] = $this->blog_model->get_tag_cloud();
            
        
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');
            $this->form_validation->set_rules('category', 'category', 'required'); 
            
        
            if ($this->form_validation->run() === FALSE)
            {
            	$data['categories'] = $this->category_model->get_cats();
                $this->load->view('header', $data);
                $this->load->view('create', $data);
                $this->load->view('footer', $data);
        
            }
            else
            {
                
                $this->blog_model->set_post();
                $this->index();
            }
        	    
        	}
    }
    
    public function edit($slug = NULL)
    {
        if($this->require_role('customer'))
        {
            if(empty($this->blog_model->get_posts($slug))){
                show_404();
            }
            $this->load->helper('form');
            $this->load->library('form_validation');
        
            $data['title'] = 'Editar:  '.$slug;
            $data['ft_list_posts'] = $this->blog_model->get_posts();
            $data['ft_tag_cloud'] = $this->blog_model->get_tag_cloud();
            $data['post'] = $this->blog_model->get_posts($slug);
        
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');
            $this->form_validation->set_rules('category', 'category', 'required'); 
            
            if ($this->form_validation->run() === FALSE)
            {
            	$data['categories'] = $this->category_model->get_cats();
            	
                $this->load->view('header', $data);
                $this->load->view('create', $data);
                $this->load->view('footer', $data);
        
            } else {
            
            $this->blog_model->modify_post($slug);
            $newpage = url_title($this->input->post('title'), 'dash', TRUE);
            redirect('blog/'.$newpage, 'refresh');
            }
        }
    }
    
    public function add_comment($slug = NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
        $this->form_validation->set_rules('text', 'Text', 'required');
        
        if ($this->form_validation->run() === TRUE)
        {
            $this->comment_model->set_comment();
            redirect('blog/'.$slug, 'refresh');
            
        } else {
            $this->view($slug);
        }
        
    }
	
}
