<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Peralatan extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Peralatan_model');
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
            $config['base_url'] = base_url() . 'peralatan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'peralatan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'peralatan/index.html';
            $config['first_url'] = base_url() . 'peralatan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Peralatan_model->total_rows($q);
        $peralatan = $this->Peralatan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'peralatan_data' => $peralatan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('peralatan/peralatan_list', $data);
        $this->global['pageTitle'] = 'Catering : Karyawan';
        $this->loadViews("peralatan/peralatan_list", $this->global, $data, NULL);
    }
    }

    public function read($id)
    {
        $row = $this->Peralatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_alat' => $row->id_alat,
		'nama_alat' => $row->nama_alat,
		'jumlah' => $row->jumlah,
		'tgl_beli' => $row->tgl_beli,
		'harga' => $row->harga,
	    );
            $this->load->view('peralatan/peralatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peralatan'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('peralatan/create_action'),
	    'id_alat' => set_value('id_alat'),
	    'nama_alat' => set_value('nama_alat'),
	    'jumlah' => set_value('jumlah'),
	    'tgl_beli' => set_value('tgl_beli'),
	    'harga' => set_value('harga'),
	);
        $this->load->view('peralatan/peralatan_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_alat' => $this->input->post('nama_alat',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'tgl_beli' => $this->input->post('tgl_beli',TRUE),
		'harga' => $this->input->post('harga',TRUE),

	    );

            $this->Peralatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('peralatan'));
        }
    }

    public function update($id)
    {
        $row = $this->Peralatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('peralatan/update_action'),
		'id_alat' => set_value('id_alat', $row->id_alat),
		'nama_alat' => set_value('nama_alat', $row->nama_alat),
		'jumlah' => set_value('jumlah', $row->jumlah),
		'tgl_beli' => set_value('tgl_beli', $row->tgl_beli),
		'harga' => set_value('harga', $row->harga),

	    );
            $this->load->view('peralatan/peralatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peralatan'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_alat', TRUE));
        } else {
            $data = array(
		'nama_alat' => $this->input->post('nama_alat',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'tgl_beli' => $this->input->post('tgl_beli',TRUE),
		'harga' => $this->input->post('harga',TRUE),

	    );

            $this->Peralatan_model->update($this->input->post('id_alat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('peralatan'));
        }
    }

    public function delete($id)
    {
        $row = $this->Peralatan_model->get_by_id($id);

        if ($row) {
            $this->Peralatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('peralatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peralatan'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_alat', 'nama alat', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
	$this->form_validation->set_rules('tgl_beli', 'tgl beli', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required');


	$this->form_validation->set_rules('id_alat', 'id_alat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Peralatan.php */
/* Location: ./application/controllers/Peralatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-27 03:27:15 */
/* http://harviacode.com */
