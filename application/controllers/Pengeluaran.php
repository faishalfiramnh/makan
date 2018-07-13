<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Pengeluaran extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Pengeluaran_model');
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
            $config['base_url'] = base_url() . 'pengeluaran/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengeluaran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengeluaran/index.html';
            $config['first_url'] = base_url() . 'pengeluaran/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengeluaran_model->total_rows($q);
        $pengeluaran = $this->Pengeluaran_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengeluaran_data' => $pengeluaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('pengeluaran/pengeluaran_list', $data);
        $this->global['pageTitle'] = 'Catering : Karyawan';
        $this->loadViews("pengeluaran/pengeluaran_list", $this->global, $data, NULL);
    } 
    }

    public function read($id) 
    {
        $row = $this->Pengeluaran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idPengeluaran' => $row->idPengeluaran,
		'idSewa' => $row->idSewa,
		'idPeralatan' => $row->idPeralatan,
		'id_perlengkapan' => $row->id_perlengkapan,
		'id_bb' => $row->id_bb,
		'id_lain' => $row->id_lain,
		'idKaryawan' => $row->idKaryawan,
		'totalPengeluaran' => $row->totalPengeluaran,
	    );
            $this->load->view('pengeluaran/pengeluaran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengeluaran'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengeluaran/create_action'),
	    'idPengeluaran' => set_value('idPengeluaran'),
	    'idSewa' => set_value('idSewa'),
	    'idPeralatan' => set_value('idPeralatan'),
	    'id_perlengkapan' => set_value('id_perlengkapan'),
	    'id_bb' => set_value('id_bb'),
	    'id_lain' => set_value('id_lain'),
	    'idKaryawan' => set_value('idKaryawan'),
	    'totalPengeluaran' => set_value('totalPengeluaran'),
	);
        $this->load->view('pengeluaran/pengeluaran_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idSewa' => $this->input->post('idSewa',TRUE),
		'idPeralatan' => $this->input->post('idPeralatan',TRUE),
		'id_perlengkapan' => $this->input->post('id_perlengkapan',TRUE),
		'id_bb' => $this->input->post('id_bb',TRUE),
		'id_lain' => $this->input->post('id_lain',TRUE),
		'idKaryawan' => $this->input->post('idKaryawan',TRUE),
		'totalPengeluaran' => $this->input->post('totalPengeluaran',TRUE),
	    );

            $this->Pengeluaran_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengeluaran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengeluaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengeluaran/update_action'),
		'idPengeluaran' => set_value('idPengeluaran', $row->idPengeluaran),
		'idSewa' => set_value('idSewa', $row->idSewa),
		'idPeralatan' => set_value('idPeralatan', $row->idPeralatan),
		'id_perlengkapan' => set_value('id_perlengkapan', $row->id_perlengkapan),
		'id_bb' => set_value('id_bb', $row->id_bb),
		'id_lain' => set_value('id_lain', $row->id_lain),
		'idKaryawan' => set_value('idKaryawan', $row->idKaryawan),
		'totalPengeluaran' => set_value('totalPengeluaran', $row->totalPengeluaran),
	    );
            $this->load->view('pengeluaran/pengeluaran_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengeluaran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idPengeluaran', TRUE));
        } else {
            $data = array(
		'idSewa' => $this->input->post('idSewa',TRUE),
		'idPeralatan' => $this->input->post('idPeralatan',TRUE),
		'id_perlengkapan' => $this->input->post('id_perlengkapan',TRUE),
		'id_bb' => $this->input->post('id_bb',TRUE),
		'id_lain' => $this->input->post('id_lain',TRUE),
		'idKaryawan' => $this->input->post('idKaryawan',TRUE),
		'totalPengeluaran' => $this->input->post('totalPengeluaran',TRUE),
	    );

            $this->Pengeluaran_model->update($this->input->post('idPengeluaran', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengeluaran'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengeluaran_model->get_by_id($id);

        if ($row) {
            $this->Pengeluaran_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengeluaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengeluaran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idSewa', 'idsewa', 'trim|required');
	$this->form_validation->set_rules('idPeralatan', 'idperalatan', 'trim|required');
	$this->form_validation->set_rules('id_perlengkapan', 'id perlengkapan', 'trim|required');
	$this->form_validation->set_rules('id_bb', 'id bb', 'trim|required');
	$this->form_validation->set_rules('id_lain', 'id lain', 'trim|required');
	$this->form_validation->set_rules('idKaryawan', 'idkaryawan', 'trim|required');
	$this->form_validation->set_rules('totalPengeluaran', 'totalpengeluaran', 'trim|required');

	$this->form_validation->set_rules('idPengeluaran', 'idPengeluaran', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengeluaran.php */
/* Location: ./application/controllers/Pengeluaran.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-27 03:27:01 */
/* http://harviacode.com */