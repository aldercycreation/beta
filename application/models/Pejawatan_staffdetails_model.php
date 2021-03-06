<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pejawatan_staffdetails_model extends CI_Model
{

    public $table = 'pejawatan_staffdetails';
    public $id = 'staff_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('staff_id', $q);
	$this->db->or_like('lantikan_date', $q);
	$this->db->or_like('sah_date', $q);
	$this->db->or_like('pencen_date', $q);
	$this->db->or_like('gaji_date', $q);
	$this->db->or_like('skim_pencen', $q);
	$this->db->or_like('tamatkontrak_date', $q);
	$this->db->or_like('nofail', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('icno', $q);
	$this->db->or_like('post_id', $q);
	$this->db->or_like('dept_id', $q);
	$this->db->or_like('grade_id', $q);
	$this->db->or_like('start_date', $q);
	$this->db->or_like('scheme_id', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('type', $q);
	$this->db->or_like('level', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('staff_id', $q);
	$this->db->or_like('lantikan_date', $q);
	$this->db->or_like('sah_date', $q);
	$this->db->or_like('pencen_date', $q);
	$this->db->or_like('gaji_date', $q);
	$this->db->or_like('skim_pencen', $q);
	$this->db->or_like('tamatkontrak_date', $q);
	$this->db->or_like('nofail', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('icno', $q);
	$this->db->or_like('post_id', $q);
	$this->db->or_like('dept_id', $q);
	$this->db->or_like('grade_id', $q);
	$this->db->or_like('start_date', $q);
	$this->db->or_like('scheme_id', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('type', $q);
	$this->db->or_like('level', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Pejawatan_staffdetails_model.php */
/* Location: ./application/models/Pejawatan_staffdetails_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-11-03 16:10:13 */
/* http://harviacode.com */