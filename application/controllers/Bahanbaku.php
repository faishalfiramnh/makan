<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Bahanbaku extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Bahanbaku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
//       $this->global['pageTitle'] = 'Catering : Bahanbaku';

//       $this->loadViews("bahanbaku/bahanbaku_list", $this->global, NULL , NULL);

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
            $config['base_url'] = base_url() . 'bahanbaku/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'bahanbaku/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'bahanbaku/index.html';
            $config['first_url'] = base_url() . 'bahanbaku/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Bahanbaku_model->total_rows($q);
        $bahanbaku = $this->Bahanbaku_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'bahanbaku_data' => $bahanbaku,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('bahanbaku/bahanbaku_list', $data);
            $this->global['pageTitle'] = 'Catering : Bahanbaku';
            $this->loadViews("bahanbaku/bahanbaku_list", $this->global, $data, NULL);
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

        $row = $this->Bahanbaku_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_bb' => $row->id_bb,
		'idPemasok' => $row->idPemasok,
		'nama_bb' => $row->nama_bb,
		'hargasatuan' => $row->hargasatuan,
		'jumlah' => $row->jumlah,
	    );
            $this->load->view('bahanbaku/bahanbaku_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bahanbaku'));
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
            'action' => site_url('bahanbaku/create_action'),
	    'id_bb' => set_value('id_bb'),
	    'idPemasok' => set_value('idPemasok'),
	    'nama_bb' => set_value('nama_bb'),
	    'jumlah' => set_value('jumlah'),

	);
//        $this->load->view('bahanbaku/bahanbaku_form', $data);
           $this->global['pageTitle'] = 'Catering : Bahanbaku';
           $this->loadViews("bahanbaku/bahanbaku_form", $this->global, $data, NULL);
    }
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idPemasok' => $this->input->post('idPemasok',TRUE),
		'nama_bb' => $this->input->post('nama_bb',TRUE),
		'hargasatuan' => $this->input->post('hargasatuan',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE)
	    );

            $this->Bahanbaku_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('bahanbaku'));
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
        $row = $this->Bahanbaku_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('bahanbaku/update_action'),
		'id_bb' => set_value('id_bb', $row->id_bb),
		'idPemasok' => set_value('idPemasok', $row->idPemasok),
		'nama_bb' => set_value('nama_bb', $row->nama_bb),
		'hargasatuan' => set_value('hargasatuan', $row->hargasatuan),
		'jumlah' => set_value('jumlah', $row->jumlah)
	    );
            //$this->load->view('bahanbaku/bahanbaku_form', $data);
            $this->global['pageTitle'] = 'Catering : Edit bahanbaku';

            $this->loadViews("bahanbaku/bahanbaku_form", $this->global, $data, NULL);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bahanbaku'));
        }
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_bb', TRUE));
        } else {
            $data = array(
		'idPemasok' => $this->input->post('idPemasok',TRUE),
		'nama_bb' => $this->input->post('nama_bb',TRUE),
		'hargasatuan' => $this->input->post('hargasatuan',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE)
	    );

            $this->Bahanbaku_model->update($this->input->post('id_bb', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('bahanbaku'));
        }
    }

    public function delete($id)
    {
        $row = $this->Bahanbaku_model->get_by_id($id);

        if ($row) {
            $this->Bahanbaku_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('bahanbaku'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bahanbaku'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('idPemasok', 'idpemasok', 'trim|required');
	$this->form_validation->set_rules('nama_bb', 'nama bb', 'trim|required');
	$this->form_validation->set_rules('hargasatuan', 'hargasatuan', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

	$this->form_validation->set_rules('id_bb', 'id_bb', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Bahanbaku.php */
/* Location: ./application/controllers/Bahanbaku.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-05 02:34:08 */
/* http://harviacode.com */
