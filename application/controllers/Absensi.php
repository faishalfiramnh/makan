<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Absensi extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Absensi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');       
            $data['roles'] = $this->user_model->getUserRoles();

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'absensi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'absensi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'absensi/index.html';
            $config['first_url'] = base_url() . 'absensi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Absensi_model->total_rows($q);
        $absensi = $this->Absensi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'absensi_data' => $absensi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('absensi/absensi_list', $data);
        $this->global['pageTitle'] = 'Catering : Bahanbaku';
        $this->loadViews("absensi/absensi_list", $this->global, $data, NULL);
    }

    }

    public function read($id) 
    {
         if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
        $row = $this->Absensi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idAbsen' => $row->idAbsen,
		'idKaryawan' => $row->idKaryawan,
		'tanggal' => $row->tanggal,
		'jamDatang' => $row->jamDatang,
		'jamPulang' => $row->jamPulang,
	    );
            $this->load->view('absensi/absensi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('absensi'));
        }
    }
    }

    public function create() 
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
        $data = array(
            'button' => 'Create',
            'action' => site_url('absensi/create_action'),
	    'idAbsen' => set_value('idAbsen'),
	    'idKaryawan' => set_value('idKaryawan'),
	    'tanggal' => set_value('tanggal'),
	    'jamDatang' => set_value('jamDatang'),
	    'jamPulang' => set_value('jamPulang'),
	);
    //    $this->load->view('absensi/absensi_form', $data);
        $this->global['pageTitle'] = 'Catering : Absensi';
        $this->loadViews("absensi/absensi_form", $this->global, $data, NULL);
    }
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idKaryawan' => $this->input->post('idKaryawan',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jamDatang' => $this->input->post('jamDatang',TRUE),
		'jamPulang' => $this->input->post('jamPulang',TRUE),
	    );

            $this->Absensi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('absensi'));
        }
    }
    
    public function update($id) 
    {
        if($this->isAdmin() == TRUE || $id == 1)
        {
            $this->loadThis();
        }
        else
        {
        $row = $this->Absensi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('absensi/update_action'),
		'idAbsen' => set_value('idAbsen', $row->idAbsen),
		'idKaryawan' => set_value('idKaryawan', $row->idKaryawan),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'jamDatang' => set_value('jamDatang', $row->jamDatang),
		'jamPulang' => set_value('jamPulang', $row->jamPulang),
	    );
         /*   $this->load->view('absensi/absensi_form', $data);
            $this->global['pageTitle'] = 'Catering : Edit Absensi';
            
            $this->loadViews("absensi/absensi_form", $this->global, $data, NULL);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('absensi'));
        */
                        $this->global['pageTitle'] = 'Catering : Edit absensi';
            
            $this->loadViews("absensi/absensi_form", $this->global, $data, NULL);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('absensi'));
        }
        }
    }

    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idAbsen', TRUE));
        } else {
            $data = array(
		'idKaryawan' => $this->input->post('idKaryawan',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jamDatang' => $this->input->post('jamDatang',TRUE),
		'jamPulang' => $this->input->post('jamPulang',TRUE),
	    );

            $this->Absensi_model->update($this->input->post('idAbsen', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('absensi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Absensi_model->get_by_id($id);

        if ($row) {
            $this->Absensi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('absensi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('absensi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idKaryawan', 'idkaryawan', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('jamDatang', 'jamdatang', 'trim|required');
	$this->form_validation->set_rules('jamPulang', 'jamPulang', 'trim|required');

	$this->form_validation->set_rules('idAbsen', 'idAbsen', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Absensi.php */
/* Location: ./application/controllers/Absensi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-27 03:25:50 */
/* http://harviacode.com */