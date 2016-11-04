<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_view extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_view_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $surat_view = $this->Surat_view_model->get_all();

        $data = array(
            'surat_view_data' => $surat_view
        );

        $this->load->view('surat_view/surat_view_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Surat_view_model->get_by_id($id);
        if ($row) {
            $data = array(
		'siid' => $row->siid,
		'Tarikh' => $row->Tarikh,
		'Minit' => $row->Minit,
		'Catatan' => $row->Catatan,
		'Penghantar' => $row->Penghantar,
		'Penerima' => $row->Penerima,
		'status' => $row->status,
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
		'Imbas' => $row->Imbas,
		'pendaftar' => $row->pendaftar,
	    );
            $this->load->view('surat_view/surat_view_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_view'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_view/create_action'),
	    'siid' => set_value('siid'),
	    'Tarikh' => set_value('Tarikh'),
	    'Minit' => set_value('Minit'),
	    'Catatan' => set_value('Catatan'),
	    'Penghantar' => set_value('Penghantar'),
	    'Penerima' => set_value('Penerima'),
	    'status' => set_value('status'),
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
	    'Imbas' => set_value('Imbas'),
	    'pendaftar' => set_value('pendaftar'),
	);
        $this->load->view('surat_view/surat_view_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'siid' => $this->input->post('siid',TRUE),
		'Tarikh' => $this->input->post('Tarikh',TRUE),
		'Minit' => $this->input->post('Minit',TRUE),
		'Catatan' => $this->input->post('Catatan',TRUE),
		'Penghantar' => $this->input->post('Penghantar',TRUE),
		'Penerima' => $this->input->post('Penerima',TRUE),
		'status' => $this->input->post('status',TRUE),
		'sid' => $this->input->post('sid',TRUE),
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
		'Imbas' => $this->input->post('Imbas',TRUE),
		'pendaftar' => $this->input->post('pendaftar',TRUE),
	    );

            $this->Surat_view_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('surat_view'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Surat_view_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_view/update_action'),
		'siid' => set_value('siid', $row->siid),
		'Tarikh' => set_value('Tarikh', $row->Tarikh),
		'Minit' => set_value('Minit', $row->Minit),
		'Catatan' => set_value('Catatan', $row->Catatan),
		'Penghantar' => set_value('Penghantar', $row->Penghantar),
		'Penerima' => set_value('Penerima', $row->Penerima),
		'status' => set_value('status', $row->status),
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
		'Imbas' => set_value('Imbas', $row->Imbas),
		'pendaftar' => set_value('pendaftar', $row->pendaftar),
	    );
            $this->load->view('surat_view/surat_view_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_view'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
		'siid' => $this->input->post('siid',TRUE),
		'Tarikh' => $this->input->post('Tarikh',TRUE),
		'Minit' => $this->input->post('Minit',TRUE),
		'Catatan' => $this->input->post('Catatan',TRUE),
		'Penghantar' => $this->input->post('Penghantar',TRUE),
		'Penerima' => $this->input->post('Penerima',TRUE),
		'status' => $this->input->post('status',TRUE),
		'sid' => $this->input->post('sid',TRUE),
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
		'Imbas' => $this->input->post('Imbas',TRUE),
		'pendaftar' => $this->input->post('pendaftar',TRUE),
	    );

            $this->Surat_view_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_view'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Surat_view_model->get_by_id($id);

        if ($row) {
            $this->Surat_view_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_view'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_view'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('siid', 'siid', 'trim|required');
	$this->form_validation->set_rules('Tarikh', 'tarikh', 'trim|required');
	$this->form_validation->set_rules('Minit', 'minit', 'trim|required');
	$this->form_validation->set_rules('Catatan', 'catatan', 'trim|required');
	$this->form_validation->set_rules('Penghantar', 'penghantar', 'trim|required');
	$this->form_validation->set_rules('Penerima', 'penerima', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('sid', 'sid', 'trim|required');
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
	$this->form_validation->set_rules('Imbas', 'imbas', 'trim|required');
	$this->form_validation->set_rules('pendaftar', 'pendaftar', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Surat_view.php */
/* Location: ./application/controllers/Surat_view.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-03 16:10:13 */
/* http://harviacode.com */