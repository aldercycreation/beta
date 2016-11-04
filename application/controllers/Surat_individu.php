<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_individu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_individu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $surat_individu = $this->Surat_individu_model->get_all();

        $data = array(
            'surat_individu_data' => $surat_individu
        );

        $this->load->view('surat_individu/surat_individu_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Surat_individu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'siid' => $row->siid,
		'Tarikh' => $row->Tarikh,
		'sid' => $row->sid,
		'Penghantar' => $row->Penghantar,
		'Minit' => $row->Minit,
		'Penerima' => $row->Penerima,
		'Catatan' => $row->Catatan,
		'Status' => $row->Status,
		'Email_Status' => $row->Email_Status,
	    );
            $this->load->view('surat_individu/surat_individu_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_individu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_individu/create_action'),
	    'siid' => set_value('siid'),
	    'Tarikh' => set_value('Tarikh'),
	    'sid' => set_value('sid'),
	    'Penghantar' => set_value('Penghantar'),
	    'Minit' => set_value('Minit'),
	    'Penerima' => set_value('Penerima'),
	    'Catatan' => set_value('Catatan'),
	    'Status' => set_value('Status'),
	    'Email_Status' => set_value('Email_Status'),
	);
        $this->load->view('surat_individu/surat_individu_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Tarikh' => $this->input->post('Tarikh',TRUE),
		'sid' => $this->input->post('sid',TRUE),
		'Penghantar' => $this->input->post('Penghantar',TRUE),
		'Minit' => $this->input->post('Minit',TRUE),
		'Penerima' => $this->input->post('Penerima',TRUE),
		'Catatan' => $this->input->post('Catatan',TRUE),
		'Status' => $this->input->post('Status',TRUE),
		'Email_Status' => $this->input->post('Email_Status',TRUE),
	    );

            $this->Surat_individu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('surat_individu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Surat_individu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_individu/update_action'),
		'siid' => set_value('siid', $row->siid),
		'Tarikh' => set_value('Tarikh', $row->Tarikh),
		'sid' => set_value('sid', $row->sid),
		'Penghantar' => set_value('Penghantar', $row->Penghantar),
		'Minit' => set_value('Minit', $row->Minit),
		'Penerima' => set_value('Penerima', $row->Penerima),
		'Catatan' => set_value('Catatan', $row->Catatan),
		'Status' => set_value('Status', $row->Status),
		'Email_Status' => set_value('Email_Status', $row->Email_Status),
	    );
            $this->load->view('surat_individu/surat_individu_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_individu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('siid', TRUE));
        } else {
            $data = array(
		'Tarikh' => $this->input->post('Tarikh',TRUE),
		'sid' => $this->input->post('sid',TRUE),
		'Penghantar' => $this->input->post('Penghantar',TRUE),
		'Minit' => $this->input->post('Minit',TRUE),
		'Penerima' => $this->input->post('Penerima',TRUE),
		'Catatan' => $this->input->post('Catatan',TRUE),
		'Status' => $this->input->post('Status',TRUE),
		'Email_Status' => $this->input->post('Email_Status',TRUE),
	    );

            $this->Surat_individu_model->update($this->input->post('siid', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_individu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Surat_individu_model->get_by_id($id);

        if ($row) {
            $this->Surat_individu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_individu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_individu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Tarikh', 'tarikh', 'trim|required');
	$this->form_validation->set_rules('sid', 'sid', 'trim|required');
	$this->form_validation->set_rules('Penghantar', 'penghantar', 'trim|required');
	$this->form_validation->set_rules('Minit', 'minit', 'trim|required');
	$this->form_validation->set_rules('Penerima', 'penerima', 'trim|required');
	$this->form_validation->set_rules('Catatan', 'catatan', 'trim|required');
	$this->form_validation->set_rules('Status', 'status', 'trim|required');
	$this->form_validation->set_rules('Email_Status', 'email status', 'trim|required');

	$this->form_validation->set_rules('siid', 'siid', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Surat_individu.php */
/* Location: ./application/controllers/Surat_individu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-03 16:10:13 */
/* http://harviacode.com */