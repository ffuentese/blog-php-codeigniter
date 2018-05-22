<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/index
	 *	- or -
	 * 		http://example.com/index.php/Index/index
	 *	- or -

	 */
	 
	public function __construct()
	{
		parent::__construct();

		// Force SSL
		//$this->force_ssl();

		// Form and URL helpers always loaded (just for convenience)
		$this->load->helper('url');
		$this->load->helper('form');
	}


	 
	public function index()
	{

	if( $this->require_role('admin') )
		{
			$data['user_id'] = $this->auth_user_id;
			$data['username'] = $this->auth_username;
			
			$this->load->view('header');

		

			$this->load->view('footer');
		}
		
	}
	
		public function login()
	{
		// Method should not be directly accessible
		if( $this->uri->uri_string() == 'examples/login')
			show_404();

		if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
			$this->require_min_level(1);

		$this->setup_login_form();

		$html = $this->load->view('header', '', TRUE);
		$html .= $this->load->view('examples/login_form', '', TRUE);
		$html .= $this->load->view('footer', '', TRUE);

		echo $html;
	}
	
}
