<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
               $this->do_upload();
        }

        public function do_upload()
        {
                $config['upload_path']          = './image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 500;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        return $error;
                }
                else
                {
                        $data = $this->upload->data();
                        $file_name = $data['file_name'];
                        echo json_encode(array('success' => $file_name));
                }
        }
        
 
}
?>