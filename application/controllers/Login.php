<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Login.php
 * @author Imron rosdiana
 */
class Login extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model", "login");
        if(!empty($_SESSION['pid']))
            redirect('dashboard');
    }

    public function index() {
        if($_POST) {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'pid' => $result->pid,
                    'NoKP' => $result->NoKP
                ];

                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('flash_data', 'Username atau Password salah!');
                redirect('login');
            }
        }

        $this->load->view("login");
    }
}
