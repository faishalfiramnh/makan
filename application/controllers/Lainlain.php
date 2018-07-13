<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Lainlain extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Lainlain_model');
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

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'lainlain/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'lainlain/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'lainlain/index.html';
            $config['first_url'] = base_url() . 'lainlain/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Lainlain_model->total_rows($q);
        $lainlain = $this->Lainlain_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'lainlain_data' => $lainlain,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        //$this->load->view('lainlain/lainlain_list', $data);
        $this->global['pageTitle'] = 'Catering : lainlain';
        $this->loadViews("lainlain/lainlain_list", $this->global, $data, NULL);
    }
    }

    public function read($id) 
    {
        $row = $this->Lainlain_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_lain' => $row->id_lain,
		'nama_ll' => $row->nama_ll,
		'hargasatuan_ll' => $row->hargasatuan_ll,
		'jumlah_ll' => $row->jumlah_ll,
		'hargatotal_ll' => $row->hargatotal_ll,
	    );
            $this->load->view('lainlain/lainlain_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lainlain'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('lainlain/create_action'),
	    'id_lain' => set_value('id_lain'),
	    'nama_ll' => set_value('nama_ll'),
	    'hargasatuan_ll' => set_value('hargasatuan_ll'),
	    'jumlah_ll' => set_value('jumlah_ll'),
	    'hargatotal_ll' => set_value('hargatotal_ll'),
	);
        $this->load->view('lainlain/lainlain_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_ll' => $this->input->post('nama_ll',TRUE),
		'hargasatuan_ll' => $this->input->post('hargasatuan_ll',TRUE),
		'jumlah_ll' => $this->input->post('jumlah_ll',TRUE),
		'hargatotal_ll' => $this->input->post('hargatotal_ll',TRUE),
	    );

            $this->Lainlain_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('lainlain'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Lainlain_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('lainlain/update_action'),
		'id_lain' => set_value('id_lain', $row->id_lain),
		'nama_ll' => set_value('nama_ll', $row->nama_ll),
		'hargasatuan_ll' => set_value('hargasatuan_ll', $row->hargasatuan_ll),
		'jumlah_ll' => set_value('jumlah_ll', $row->jumlah_ll),
		'hargatotal_ll' => set_value('hargatotal_ll', $row->hargatotal_ll),
	    );
            $this->load->view('lainlain/lainlain_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lainlain'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_lain', TRUE));
        } else {
            $data = array(
		'nama_ll' => $this->input->post('nama_ll',TRUE),
		'hargasatuan_ll' => $this->input->post('hargasatuan_ll',TRUE),
		'jumlah_ll' => $this->input->post('jumlah_ll',TRUE),
		'hargatotal_ll' => $this->input->post('hargatotal_ll',TRUE),
	    );

            $this->Lainlain_model->update($this->input->post('id_lain', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('lainlain'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Lainlain_model->get_by_id($id);

        if ($row) {
            $this->Lainlain_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('lainlain'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lainlain'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_ll', 'nama ll', 'trim|required');
	$this->form_validation->set_rules('hargasatuan_ll', 'hargasatuan ll', 'trim|required');
	$this->form_validation->set_rules('jumlah_ll', 'jumlah ll', 'trim|required');
	$this->form_validation->set_rules('hargatotal_ll', 'hargatotal ll', 'trim|required');

	$this->form_validation->set_rules('id_lain', 'id_lain', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Lainlain.php */
/* Location: ./application/controllers/Lainlain.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-02 17:16:54 */
/* http://harviacode.com */