<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if(empty($this->session->userdata('pid'))) {//if not login then redirect to login page
         $this->session->set_flashdata('flash_data', 'You don\'t have access!');
         redirect('login');
        }
        
        $this->load->model('Surat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $surat = $this->Surat_model->get_all();

        $data = array(
            'surat_data' => $surat
        );
        $this->load->view('surat/surat_list', $data);
        
    }

    public function read($id) 
    {
        $row = $this->Surat_model->get_by_id($id);
        if ($row) {
            $data = array(
		'sid' => $row->sid,
		'tarikhTerima' => $row->tarikhTerima,
		'Jenis' => $row->Jenis,
		'awam' => $row->awam,
		'agensi' => $row->agensi,
		'bahagian' => $row->bahagian,
		'individu' => $row->individu,
		'jawatan' => $row->jawatan,
		'kategori' => $row->kategori,
		'rujukanSurat' => $row->rujukanSurat,
		'RingkasanKandungan' => $row->RingkasanKandungan,
		'tarikhSurat' => $row->tarikhSurat,
		'status' => $row->status,
		'Imbas' => $row->Imbas,
		'pendaftar' => $row->pendaftar,
		'tarikhKemasukkan' => $row->tarikhKemasukkan,
		'TindakanTotal' => $row->TindakanTotal,
	    );
            $this->load->view('surat/surat_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat/create_action'),
	    'sid' => set_value('sid'),
	    'tarikhTerima' => set_value('tarikhTerima'),
	    'Jenis' => set_value('Jenis'),
	    'awam' => set_value('awam'),
	    'agensi' => set_value('agensi'),
	    'bahagian' => set_value('bahagian'),
	    'individu' => set_value('individu'),
	    'jawatan' => set_value('jawatan'),
	    'kategori' => set_value('kategori'),
	    'rujukanSurat' => set_value('rujukanSurat'),
	    'RingkasanKandungan' => set_value('RingkasanKandungan'),
	    'tarikhSurat' => set_value('tarikhSurat'),
	    'status' => set_value('status'),
	    'Imbas' => set_value('Imbas'),
	    'pendaftar' => set_value('pendaftar'),
	    'tarikhKemasukkan' => set_value('tarikhKemasukkan'),
	    'TindakanTotal' => set_value('TindakanTotal'),
	);
        $this->load->view('surat/surat_form', $data);

        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tarikhTerima' => $this->input->post('tarikhTerima',TRUE),
		'Jenis' => $this->input->post('Jenis',TRUE),
		//'awam' => $this->input->post('awam',TRUE),
		//'agensi' => $this->input->post('agensi',TRUE),
		//'bahagian' => $this->input->post('bahagian',TRUE),
		//'individu' => $this->input->post('individu',TRUE),
		'jawatan' => $this->input->post('jawatan',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'rujukanSurat' => $this->input->post('rujukanSurat',TRUE),
		'RingkasanKandungan' => $this->input->post('RingkasanKandungan',TRUE),
		'tarikhSurat' => $this->input->post('tarikhSurat',TRUE),
		//'status' => $this->input->post('status',TRUE),
		'Imbas' => $this->input->post('Imbas',TRUE),
		//'pendaftar' => $this->input->post('pendaftar',TRUE),
		'tarikhKemasukkan' => $this->input->post('tarikhKemasukkan',TRUE),
		//'TindakanTotal' => $this->input->post('TindakanTotal',TRUE),
	    );

            $this->Surat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('surat'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Surat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat/update_action'),
		'sid' => set_value('sid', $row->sid),
		'tarikhTerima' => set_value('tarikhTerima', $row->tarikhTerima),
		'Jenis' => set_value('Jenis', $row->Jenis),
		'awam' => set_value('awam', $row->awam),
		'agensi' => set_value('agensi', $row->agensi),
		'bahagian' => set_value('bahagian', $row->bahagian),
		'individu' => set_value('individu', $row->individu),
		'jawatan' => set_value('jawatan', $row->jawatan),
		'kategori' => set_value('kategori', $row->kategori),
		'rujukanSurat' => set_value('rujukanSurat', $row->rujukanSurat),
		'RingkasanKandungan' => set_value('RingkasanKandungan', $row->RingkasanKandungan),
		'tarikhSurat' => set_value('tarikhSurat', $row->tarikhSurat),
		'status' => set_value('status', $row->status),
		'Imbas' => set_value('Imbas', $row->Imbas),
		'pendaftar' => set_value('pendaftar', $row->pendaftar),
		'tarikhKemasukkan' => set_value('tarikhKemasukkan', $row->tarikhKemasukkan),
		'TindakanTotal' => set_value('TindakanTotal', $row->TindakanTotal),
	    );
            $this->load->view('surat/surat_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat'));
            
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('sid', TRUE));
        } else {
            $data = array(
		'tarikhTerima' => $this->input->post('tarikhTerima',TRUE),
		'Jenis' => $this->input->post('Jenis',TRUE),
		'awam' => $this->input->post('awam',TRUE),
		'agensi' => $this->input->post('agensi',TRUE),
		'bahagian' => $this->input->post('bahagian',TRUE),
		'individu' => $this->input->post('individu',TRUE),
		'jawatan' => $this->input->post('jawatan',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'rujukanSurat' => $this->input->post('rujukanSurat',TRUE),
		'RingkasanKandungan' => $this->input->post('RingkasanKandungan',TRUE),
		'tarikhSurat' => $this->input->post('tarikhSurat',TRUE),
		'status' => $this->input->post('status',TRUE),
		'Imbas' => $this->input->post('Imbas',TRUE),
		'pendaftar' => $this->input->post('pendaftar',TRUE),
		'tarikhKemasukkan' => $this->input->post('tarikhKemasukkan',TRUE),
		'TindakanTotal' => $this->input->post('TindakanTotal',TRUE),
	    );

            $this->Surat_model->update($this->input->post('sid', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat'));
            
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Surat_model->get_by_id($id);

        if ($row) {
            $this->Surat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tarikhTerima', 'tarikhterima', 'trim|required');
	$this->form_validation->set_rules('Jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('awam', 'awam', 'trim|required');
	$this->form_validation->set_rules('agensi', 'agensi', 'trim|required');
	$this->form_validation->set_rules('bahagian', 'bahagian', 'trim|required');
	$this->form_validation->set_rules('individu', 'individu', 'trim|required');
	$this->form_validation->set_rules('jawatan', 'jawatan', 'trim|required');
	$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
	$this->form_validation->set_rules('rujukanSurat', 'rujukansurat', 'trim|required');
	$this->form_validation->set_rules('RingkasanKandungan', 'ringkasankandungan', 'trim|required');
	$this->form_validation->set_rules('tarikhSurat', 'tarikhsurat', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('Imbas', 'imbas', 'trim|required');
	$this->form_validation->set_rules('pendaftar', 'pendaftar', 'trim|required');
	$this->form_validation->set_rules('tarikhKemasukkan', 'tarikhkemasukkan', 'trim|required');
	$this->form_validation->set_rules('TindakanTotal', 'tindakantotal', 'trim|required');

	$this->form_validation->set_rules('sid', 'sid', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
    
        public function logout() { //make page in session
        $data = ['pid', 'NoKP'];
        $this->session->unset_userdata($data);
        redirect('login');
    }
    

}

/* End of file Surat.php */
/* Location: ./application/controllers/Surat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-03 16:10:13 */
/* http://harviacode.com */