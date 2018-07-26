<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Laporanlaba extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Laporanlaba_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->isTicketter3() == TRUE)
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
            $config['base_url'] = base_url() . 'laporanlaba/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'laporanlaba/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'laporanlaba/index.html';
            $config['first_url'] = base_url() . 'laporanlaba/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Laporanlaba_model->total_rows($q);
        $laporanlaba = $this->Laporanlaba_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'laporanlaba_data' => $laporanlaba,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('laporanlaba/laporanlaba_list', $data);
        $this->load->model('Penjualan_model');
        $data['lihat']=$this->Penjualan_model->totalJual();
        $data['bahan']=$this->Penjualan_model->totalbahan();
        $this->global['pageTitle'] = 'Catering : Karyawan';
        $this->loadViews("laporanlaba/laporanlaba_list", $this->global, $data, NULL);
    }
    }

    public function read($id)
    {
        $row = $this->Laporanlaba_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idLabaRugi' => $row->idLabaRugi,
		'idLabaBersih' => $row->idLabaBersih,
		'idLabaKotor' => $row->idLabaKotor,
	    );
            $this->load->view('laporanlaba/laporanlaba_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporanlaba'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('laporanlaba/create_action'),
	    'idLabaRugi' => set_value('idLabaRugi'),
	    'idLabaBersih' => set_value('idLabaBersih'),
	    'idLabaKotor' => set_value('idLabaKotor'),
	);
        $this->load->view('laporanlaba/laporanlaba_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idLabaBersih' => $this->input->post('idLabaBersih',TRUE),
		'idLabaKotor' => $this->input->post('idLabaKotor',TRUE),
	    );

            $this->Laporanlaba_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('laporanlaba'));
        }
    }

    public function update($id)
    {
        $row = $this->Laporanlaba_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('laporanlaba/update_action'),
		'idLabaRugi' => set_value('idLabaRugi', $row->idLabaRugi),
		'idLabaBersih' => set_value('idLabaBersih', $row->idLabaBersih),
		'idLabaKotor' => set_value('idLabaKotor', $row->idLabaKotor),
	    );
            $this->load->view('laporanlaba/laporanlaba_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporanlaba'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idLabaRugi', TRUE));
        } else {
            $data = array(
		'idLabaBersih' => $this->input->post('idLabaBersih',TRUE),
		'idLabaKotor' => $this->input->post('idLabaKotor',TRUE),
	    );

            $this->Laporanlaba_model->update($this->input->post('idLabaRugi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('laporanlaba'));
        }
    }

    public function delete($id)
    {
        $row = $this->Laporanlaba_model->get_by_id($id);

        if ($row) {
            $this->Laporanlaba_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('laporanlaba'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporanlaba'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('idLabaBersih', 'idlababersih', 'trim|required');
	$this->form_validation->set_rules('idLabaKotor', 'idlabakotor', 'trim|required');

	$this->form_validation->set_rules('idLabaRugi', 'idLabaRugi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Laporanlaba.php */
/* Location: ./application/controllers/Laporanlaba.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-27 03:26:53 */
/* http://harviacode.com */
