<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

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
	} 
	 
	private function _render_page($view, $data = null)
	{
		if ( ! file_exists(APPPATH.'views/'.$view.'.php'))
        {
                // La página no se encuentra disponible
                show_404();
        }
		
		$this->viewdata = (empty($data)) ? $this->data : $data;
		$this->load->view('header.php', $this->viewdata);
		$this->load->view($view.'.php', $this->viewdata);
		$this->load->view('footer.php', $this->viewdata);
	} 
	 
	public function index($page = 'index')
	{

		
		$data = array(
			'page_title' => 'Home'
			);
		$this->_render_page($page, $data);
	}
	
	
}
