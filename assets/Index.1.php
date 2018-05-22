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
		$this->viewdata = (empty($data)) ? $this->data : $data;
		$this->load->view('header.php', $this->viewdata);
		$this->load->view($view, $this->viewdata);
		$this->load->view('footer.php', $this->viewdata);
	} 
	 
	public function index()
	{
		$data = array(
			'page_title' => 'bienvenidos'
			);
		$this->_render_page('index.php', $data);
	}
	
}
