<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengguna_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pengguna = $this->Pengguna_model->get_all();

        $data = array(
            'pengguna_data' => $pengguna
        );

        $this->load->view('pengguna/pengguna_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);
        if ($row) {
            $data = array(
		'pid' => $row->pid,
		'NoKP' => $row->NoKP,
		'Password' => $row->Password,
		'Email' => $row->Email,
		'Nama' => $row->Nama,
		'Bahagian' => $row->Bahagian,
		'Jawatan' => $row->Jawatan,
		'Level' => $row->Level,
		'iid' => $row->iid,
		'Status' => $row->Status,
	    );
            $this->load->view('pengguna/pengguna_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengguna/create_action'),
	    'pid' => set_value('pid'),
	    'NoKP' => set_value('NoKP'),
	    'Password' => set_value('Password'),
	    'Email' => set_value('Email'),
	    'Nama' => set_value('Nama'),
	    'Bahagian' => set_value('Bahagian'),
	    'Jawatan' => set_value('Jawatan'),
	    'Level' => set_value('Level'),
	    'iid' => set_value('iid'),
	    'Status' => set_value('Status'),
	);
        $this->load->view('pengguna/pengguna_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'NoKP' => $this->input->post('NoKP',TRUE),
		'Password' => $this->input->post('Password',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Bahagian' => $this->input->post('Bahagian',TRUE),
		'Jawatan' => $this->input->post('Jawatan',TRUE),
		'Level' => $this->input->post('Level',TRUE),
		'iid' => $this->input->post('iid',TRUE),
		'Status' => $this->input->post('Status',TRUE),
	    );

            $this->Pengguna_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengguna'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengguna/update_action'),
		'pid' => set_value('pid', $row->pid),
		'NoKP' => set_value('NoKP', $row->NoKP),
		'Password' => set_value('Password', $row->Password),
		'Email' => set_value('Email', $row->Email),
		'Nama' => set_value('Nama', $row->Nama),
		'Bahagian' => set_value('Bahagian', $row->Bahagian),
		'Jawatan' => set_value('Jawatan', $row->Jawatan),
		'Level' => set_value('Level', $row->Level),
		'iid' => set_value('iid', $row->iid),
		'Status' => set_value('Status', $row->Status),
	    );
            $this->load->view('pengguna/pengguna_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('pid', TRUE));
        } else {
            $data = array(
		'NoKP' => $this->input->post('NoKP',TRUE),
		'Password' => $this->input->post('Password',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Bahagian' => $this->input->post('Bahagian',TRUE),
		'Jawatan' => $this->input->post('Jawatan',TRUE),
		'Level' => $this->input->post('Level',TRUE),
		'iid' => $this->input->post('iid',TRUE),
		'Status' => $this->input->post('Status',TRUE),
	    );

            $this->Pengguna_model->update($this->input->post('pid', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengguna'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengguna_model->get_by_id($id);

        if ($row) {
            $this->Pengguna_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengguna'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengguna'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NoKP', 'nokp', 'trim|required');
	$this->form_validation->set_rules('Password', 'password', 'trim|required');
	$this->form_validation->set_rules('Email', 'email', 'trim|required');
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('Bahagian', 'bahagian', 'trim|required');
	$this->form_validation->set_rules('Jawatan', 'jawatan', 'trim|required');
	$this->form_validation->set_rules('Level', 'level', 'trim|required');
	$this->form_validation->set_rules('iid', 'iid', 'trim|required');
	$this->form_validation->set_rules('Status', 'status', 'trim|required');

	$this->form_validation->set_rules('pid', 'pid', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-03 16:10:13 */
/* http://harviacode.com */