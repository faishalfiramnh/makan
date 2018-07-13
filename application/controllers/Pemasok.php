<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Pemasok extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
        $this->load->model('Pemasok_model');
        $this->load->library('form_validation');
    }

    public function index()
    {   
        if($this->isTicketter2() == TRUE)
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
            $config['base_url'] = base_url() . 'pemasok/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pemasok/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pemasok/index.html';
            $config['first_url'] = base_url() . 'pemasok/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pemasok_model->total_rows($q);
        $pemasok = $this->Pemasok_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pemasok_data' => $pemasok,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('pemasok/pemasok_list', $data);
            $this->global['pageTitle'] = 'Catering : Pemasok';
            $this->loadViews("pemasok/pemasok_list", $this->global, $data, NULL);
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
            $data['roles'] = $this->user_model->getUserRoles();            

        $row = $this->Pemasok_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idPemasok' => $row->idPemasok,
		'namaPemasok' => $row->namaPemasok,
		'alamat' => $row->alamat,
		'noTelfon' => $row->noTelfon,
	    );
            $this->load->view('pemasok/pemasok_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemasok'));
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
            $data['roles'] = $this->user_model->getUserRoles();            

        $data = array(
            'button' => 'Create',
            'action' => site_url('pemasok/create_action'),
	    'idPemasok' => set_value('idPemasok'),
	    'namaPemasok' => set_value('namaPemasok'),
	    'alamat' => set_value('alamat'),
	    'noTelfon' => set_value('noTelfon'),
	);
//        $this->load->view('pemasok/pemasok_form', $data);
           $this->global['pageTitle'] = 'Catering : Pemasok';
           $this->loadViews("pemasok/pemasok_form", $this->global, $data, NULL);
    }
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namaPemasok' => $this->input->post('namaPemasok',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'noTelfon' => $this->input->post('noTelfon',TRUE),
	    );

            $this->Pemasok_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pemasok'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pemasok_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pemasok/update_action'),
		'idPemasok' => set_value('idPemasok', $row->idPemasok),
		'namaPemasok' => set_value('namaPemasok', $row->namaPemasok),
		'alamat' => set_value('alamat', $row->alamat),
		'noTelfon' => set_value('noTelfon', $row->noTelfon),
	    );
            $this->load->view('pemasok/pemasok_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemasok'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idPemasok', TRUE));
        } else {
            $data = array(
		'namaPemasok' => $this->input->post('namaPemasok',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'noTelfon' => $this->input->post('noTelfon',TRUE),
	    );

            $this->Pemasok_model->update($this->input->post('idPemasok', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pemasok'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pemasok_model->get_by_id($id);

        if ($row) {
            $this->Pemasok_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pemasok'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemasok'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaPemasok', 'namapemasok', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('noTelfon', 'notelfon', 'trim|required');

	$this->form_validation->set_rules('idPemasok', 'idPemasok', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pemasok.php */
/* Location: ./application/controllers/Pemasok.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-05 02:37:24 */
/* http://harviacode.com */