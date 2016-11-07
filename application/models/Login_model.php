<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name: Login model
 * @author: Imron Rosdiana
 */
class Login_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validate_user($data) {
        $this->db->where('NoKP', $data['NoKP']);
        //$this->db->where('password', md5($data['password']));
        $this->db->where('password', $data['password']);
        return $this->db->get('pengguna')->row();
    }

    function __destruct() {
        $this->db->close();
    }
}
