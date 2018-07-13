<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Karyawan extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if($this->isTicketter() == TRUE)
        {
           $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');       
            //$data['roles'] = $this->user_model->getUserRoles();            
        
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'karyawan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'karyawan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'karyawan/index.html';
            $config['first_url'] = base_url() . 'karyawan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Karyawan_model->total_rows($q);
        $karyawan = $this->Karyawan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'karyawan_data' => $karyawan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('karyawan/karyawan_list', $data);
            $this->global['pageTitle'] = 'Catering : Karyawan';
            $this->loadViews("karyawan/karyawan_list", $this->global, $data, NULL);
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
            $this->load->model('user_model');       
            //$data['roles'] = $this->user_model->getUserRoles();            

        $row = $this->Karyawan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kar' => $row->id_kar,
		'nama_kar' => $row->nama_kar,
		'alamat_kar' => $row->alamat_kar,
		'jabatan' => $row->jabatan,
		'telp_kar' => $row->telp_kar,
		'gajiKaryawan' => $row->gajiKaryawan,
	    );
            $this->load->view('karyawan/karyawan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
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
            $this->load->model('user_model');       
            //$data['roles'] = $this->user_model->getUserRoles();            

        $data = array(
            'button' => 'Create',
            'action' => site_url('karyawan/create_action'),
	    'id_kar' => set_value('id_kar'),
	    'nama_kar' => set_value('nama_kar'),
	    'alamat_kar' => set_value('alamat_kar'),
	    'jabatan' => set_value('jabatan'),
	    'telp_kar' => set_value('telp_kar'),
	    'gajiKaryawan' => set_value('gajiKaryawan'),
	);
//        $this->load->view('karyawan/karyawan_form', $data);
          $this->global['pageTitle'] = 'Catering : Karyawan';
        $this->loadViews("karyawan/karyawan_form", $this->global, $data, NULL);
    }
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_kar' => $this->input->post('nama_kar',TRUE),
		'alamat_kar' => $this->input->post('alamat_kar',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'telp_kar' => $this->input->post('telp_kar',TRUE),
		'gajiKaryawan' => $this->input->post('gajiKaryawan',TRUE),
	    );

            $this->Karyawan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('karyawan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('karyawan/update_action'),
		'id_kar' => set_value('id_kar', $row->id_kar),
		'nama_kar' => set_value('nama_kar', $row->nama_kar),
		'alamat_kar' => set_value('alamat_kar', $row->alamat_kar),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'telp_kar' => set_value('telp_kar', $row->telp_kar),
		'gajiKaryawan' => set_value('gajiKaryawan', $row->gajiKaryawan),
	    );
            $this->load->view('karyawan/karyawan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kar', TRUE));
        } else {
            $data = array(
		'nama_kar' => $this->input->post('nama_kar',TRUE),
		'alamat_kar' => $this->input->post('alamat_kar',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'telp_kar' => $this->input->post('telp_kar',TRUE),
		'gajiKaryawan' => $this->input->post('gajiKaryawan',TRUE),
	    );

            $this->Karyawan_model->update($this->input->post('id_kar', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('karyawan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);

        if ($row) {
            $this->Karyawan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_kar', 'nama kar', 'trim|required');
	$this->form_validation->set_rules('alamat_kar', 'alamat kar', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
	$this->form_validation->set_rules('telp_kar', 'telp kar', 'trim|required');
	$this->form_validation->set_rules('gajiKaryawan', 'gajikaryawan', 'trim|required');

	$this->form_validation->set_rules('id_kar', 'id_kar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-05 07:05:11 */
/* http://harviacode.com */