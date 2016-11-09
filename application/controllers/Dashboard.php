<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/*  versi shafiq
    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('pid'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login');
        }
    }
 */ 
 
 
    function __construct()
    {
        parent::__construct();
        // jika belum login redirect ke login
        if($this->session->userdata('pid') >= '1') {
        
        }
        else
        {
        $this->session->set_flashdata('flash_data', 'You don\'t have access!');
                redirect(site_url('login'));
        }

    }
        
	public function index()
	{
        //display multiple views in one page
        //$this->load->view('menu');
	$this->load->view('dashboard');
        $this->load->view('footer');

	}
 /*  versi shafiq      
        public function logout() {
        $data = ['pid', 'NoKP'];
        $this->session->unset_userdata($data);
        redirect('login');
    }
  */  
      public  function logout() {
//        destroy session
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('login'));
    }
          
}
