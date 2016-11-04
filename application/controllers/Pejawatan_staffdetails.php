<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pejawatan_staffdetails extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pejawatan_staffdetails_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pejawatan_staffdetails = $this->Pejawatan_staffdetails_model->get_all();

        $data = array(
            'pejawatan_staffdetails_data' => $pejawatan_staffdetails
        );

        $this->load->view('pejawatan_staffdetails/pejawatan_staffdetails_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pejawatan_staffdetails_model->get_by_id($id);
        if ($row) {
            $data = array(
		'staff_id' => $row->staff_id,
		'lantikan_date' => $row->lantikan_date,
		'sah_date' => $row->sah_date,
		'pencen_date' => $row->pencen_date,
		'gaji_date' => $row->gaji_date,
		'skim_pencen' => $row->skim_pencen,
		'tamatkontrak_date' => $row->tamatkontrak_date,
		'nofail' => $row->nofail,
		'name' => $row->name,
		'icno' => $row->icno,
		'post_id' => $row->post_id,
		'dept_id' => $row->dept_id,
		'grade_id' => $row->grade_id,
		'start_date' => $row->start_date,
		'scheme_id' => $row->scheme_id,
		'username' => $row->username,
		'password' => $row->password,
		'type' => $row->type,
		'level' => $row->level,
	    );
            $this->load->view('pejawatan_staffdetails/pejawatan_staffdetails_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pejawatan_staffdetails'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pejawatan_staffdetails/create_action'),
	    'staff_id' => set_value('staff_id'),
	    'lantikan_date' => set_value('lantikan_date'),
	    'sah_date' => set_value('sah_date'),
	    'pencen_date' => set_value('pencen_date'),
	    'gaji_date' => set_value('gaji_date'),
	    'skim_pencen' => set_value('skim_pencen'),
	    'tamatkontrak_date' => set_value('tamatkontrak_date'),
	    'nofail' => set_value('nofail'),
	    'name' => set_value('name'),
	    'icno' => set_value('icno'),
	    'post_id' => set_value('post_id'),
	    'dept_id' => set_value('dept_id'),
	    'grade_id' => set_value('grade_id'),
	    'start_date' => set_value('start_date'),
	    'scheme_id' => set_value('scheme_id'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'type' => set_value('type'),
	    'level' => set_value('level'),
	);
        $this->load->view('pejawatan_staffdetails/pejawatan_staffdetails_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'lantikan_date' => $this->input->post('lantikan_date',TRUE),
		'sah_date' => $this->input->post('sah_date',TRUE),
		'pencen_date' => $this->input->post('pencen_date',TRUE),
		'gaji_date' => $this->input->post('gaji_date',TRUE),
		'skim_pencen' => $this->input->post('skim_pencen',TRUE),
		'tamatkontrak_date' => $this->input->post('tamatkontrak_date',TRUE),
		'nofail' => $this->input->post('nofail',TRUE),
		'name' => $this->input->post('name',TRUE),
		'icno' => $this->input->post('icno',TRUE),
		'post_id' => $this->input->post('post_id',TRUE),
		'dept_id' => $this->input->post('dept_id',TRUE),
		'grade_id' => $this->input->post('grade_id',TRUE),
		'start_date' => $this->input->post('start_date',TRUE),
		'scheme_id' => $this->input->post('scheme_id',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'type' => $this->input->post('type',TRUE),
		'level' => $this->input->post('level',TRUE),
	    );

            $this->Pejawatan_staffdetails_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pejawatan_staffdetails'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pejawatan_staffdetails_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pejawatan_staffdetails/update_action'),
		'staff_id' => set_value('staff_id', $row->staff_id),
		'lantikan_date' => set_value('lantikan_date', $row->lantikan_date),
		'sah_date' => set_value('sah_date', $row->sah_date),
		'pencen_date' => set_value('pencen_date', $row->pencen_date),
		'gaji_date' => set_value('gaji_date', $row->gaji_date),
		'skim_pencen' => set_value('skim_pencen', $row->skim_pencen),
		'tamatkontrak_date' => set_value('tamatkontrak_date', $row->tamatkontrak_date),
		'nofail' => set_value('nofail', $row->nofail),
		'name' => set_value('name', $row->name),
		'icno' => set_value('icno', $row->icno),
		'post_id' => set_value('post_id', $row->post_id),
		'dept_id' => set_value('dept_id', $row->dept_id),
		'grade_id' => set_value('grade_id', $row->grade_id),
		'start_date' => set_value('start_date', $row->start_date),
		'scheme_id' => set_value('scheme_id', $row->scheme_id),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'type' => set_value('type', $row->type),
		'level' => set_value('level', $row->level),
	    );
            $this->load->view('pejawatan_staffdetails/pejawatan_staffdetails_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pejawatan_staffdetails'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('staff_id', TRUE));
        } else {
            $data = array(
		'lantikan_date' => $this->input->post('lantikan_date',TRUE),
		'sah_date' => $this->input->post('sah_date',TRUE),
		'pencen_date' => $this->input->post('pencen_date',TRUE),
		'gaji_date' => $this->input->post('gaji_date',TRUE),
		'skim_pencen' => $this->input->post('skim_pencen',TRUE),
		'tamatkontrak_date' => $this->input->post('tamatkontrak_date',TRUE),
		'nofail' => $this->input->post('nofail',TRUE),
		'name' => $this->input->post('name',TRUE),
		'icno' => $this->input->post('icno',TRUE),
		'post_id' => $this->input->post('post_id',TRUE),
		'dept_id' => $this->input->post('dept_id',TRUE),
		'grade_id' => $this->input->post('grade_id',TRUE),
		'start_date' => $this->input->post('start_date',TRUE),
		'scheme_id' => $this->input->post('scheme_id',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'type' => $this->input->post('type',TRUE),
		'level' => $this->input->post('level',TRUE),
	    );

            $this->Pejawatan_staffdetails_model->update($this->input->post('staff_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pejawatan_staffdetails'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pejawatan_staffdetails_model->get_by_id($id);

        if ($row) {
            $this->Pejawatan_staffdetails_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pejawatan_staffdetails'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pejawatan_staffdetails'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('lantikan_date', 'lantikan date', 'trim|required');
	$this->form_validation->set_rules('sah_date', 'sah date', 'trim|required');
	$this->form_validation->set_rules('pencen_date', 'pencen date', 'trim|required');
	$this->form_validation->set_rules('gaji_date', 'gaji date', 'trim|required');
	$this->form_validation->set_rules('skim_pencen', 'skim pencen', 'trim|required');
	$this->form_validation->set_rules('tamatkontrak_date', 'tamatkontrak date', 'trim|required');
	$this->form_validation->set_rules('nofail', 'nofail', 'trim|required');
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('icno', 'icno', 'trim|required');
	$this->form_validation->set_rules('post_id', 'post id', 'trim|required');
	$this->form_validation->set_rules('dept_id', 'dept id', 'trim|required');
	$this->form_validation->set_rules('grade_id', 'grade id', 'trim|required');
	$this->form_validation->set_rules('start_date', 'start date', 'trim|required');
	$this->form_validation->set_rules('scheme_id', 'scheme id', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('type', 'type', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');

	$this->form_validation->set_rules('staff_id', 'staff_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pejawatan_staffdetails.php */
/* Location: ./application/controllers/Pejawatan_staffdetails.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-03 16:10:13 */
/* http://harviacode.com */