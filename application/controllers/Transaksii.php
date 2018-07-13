<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Transaksii extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Transaksii_model');
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
            $config['base_url'] = base_url() . 'transaksii/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'transaksii/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'transaksii/index.html';
            $config['first_url'] = base_url() . 'transaksii/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Transaksii_model->total_rows($q);
        $transaksii = $this->Transaksii_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'transaksii_data' => $transaksii,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('transaksii/transaksii_list', $data);
        $this->global['pageTitle'] = 'Catering : Karyawan';
        $this->loadViews("transaksii/transaksii_list", $this->global, $data, NULL);
    }
    }

    public function read($id) 
        {
        $row = $this->Transaksii_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idPemasukan' => $row->idPemasukan,
		'idPenjualan' => $row->idPenjualan,
		'keterangan' => $row->keterangan,
		'kredit' => $row->kredit,
		'debit' => $row->debit,
		'PemasukanSetelahPajak' => $row->PemasukanSetelahPajak,
		'PemasukanSebelumPajak' => $row->PemasukanSebelumPajak,
	    );
            $this->load->view('transaksii/transaksii_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksii'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('transaksii/create_action'),
	    'idPemasukan' => set_value('idPemasukan'),
	    'idPenjualan' => set_value('idPenjualan'),
	    'keterangan' => set_value('keterangan'),
	    'kredit' => set_value('kredit'),
	    'debit' => set_value('debit'),
	    'PemasukanSetelahPajak' => set_value('PemasukanSetelahPajak'),
	    'PemasukanSebelumPajak' => set_value('PemasukanSebelumPajak'),
	);
        $this->load->view('transaksii/transaksii_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idPenjualan' => $this->input->post('idPenjualan',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'kredit' => $this->input->post('kredit',TRUE),
		'debit' => $this->input->post('debit',TRUE),
		'PemasukanSetelahPajak' => $this->input->post('PemasukanSetelahPajak',TRUE),
		'PemasukanSebelumPajak' => $this->input->post('PemasukanSebelumPajak',TRUE),
	    );

            $this->Transaksii_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('transaksii'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Transaksii_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('transaksii/update_action'),
		'idPemasukan' => set_value('idPemasukan', $row->idPemasukan),
		'idPenjualan' => set_value('idPenjualan', $row->idPenjualan),
		'keterangan' => set_value('keterangan', $row->keterangan),
		'kredit' => set_value('kredit', $row->kredit),
		'debit' => set_value('debit', $row->debit),
		'PemasukanSetelahPajak' => set_value('PemasukanSetelahPajak', $row->PemasukanSetelahPajak),
		'PemasukanSebelumPajak' => set_value('PemasukanSebelumPajak', $row->PemasukanSebelumPajak),
	    );
            $this->load->view('transaksii/transaksii_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksii'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idPemasukan', TRUE));
        } else {
            $data = array(
		'idPenjualan' => $this->input->post('idPenjualan',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'kredit' => $this->input->post('kredit',TRUE),
		'debit' => $this->input->post('debit',TRUE),
		'PemasukanSetelahPajak' => $this->input->post('PemasukanSetelahPajak',TRUE),
		'PemasukanSebelumPajak' => $this->input->post('PemasukanSebelumPajak',TRUE),
	    );

            $this->Transaksii_model->update($this->input->post('idPemasukan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('transaksii'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Transaksii_model->get_by_id($id);

        if ($row) {
            $this->Transaksii_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('transaksii'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksii'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idPenjualan', 'idpenjualan', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('kredit', 'kredit', 'trim|required');
	$this->form_validation->set_rules('debit', 'debit', 'trim|required');
	$this->form_validation->set_rules('PemasukanSetelahPajak', 'pemasukansetelahpajak', 'trim|required');
	$this->form_validation->set_rules('PemasukanSebelumPajak', 'pemasukansebelumpajak', 'trim|required');

	$this->form_validation->set_rules('idPemasukan', 'idPemasukan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Transaksii.php */
/* Location: ./application/controllers/Transaksii.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-27 03:27:25 */
/* http://harviacode.com */