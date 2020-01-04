<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    // view : list_karyawan
    public function index()
    {
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
            'konten' => 'karyawan/karyawan_list',
            'judul' => 'Data Karyawan (exactly SDM,Mb Hanif)',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id)
    {
        $row = $this->Karyawan_model->get_by_id($id);
        if ($row) {
            $data = array(
          		'id_karyawan' => $row->id_karyawan,
          		'nik' => $row->nik,
          		'username' => $row->username,
          		'password' => $row->password,
          		'nama' => $row->nama,
          		'alamat' => $row->alamat,
          		'jenis_kelamin' => $row->jenis_kelamin,
          		'id_pekerjaan' => $row->id_pekerjaan,
        	   );
            $this->load->view('karyawan/karyawan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('karyawan/create_action'),
      	    'id_karyawan' => set_value('id_karyawan'),
      	    'nik' => set_value('nik'),
      	    'username' => set_value('username'),
      	    'password' => set_value('password'),
      	    'nama' => set_value('nama'),
      	    'alamat' => set_value('alamat'),
            'jenis_kelamin' => set_value('jenis_kelamin'),
            'agama' => set_value('agama'),
            'pendidikan' => set_value('pendidikan'),
      	    'asal_sekolah' => set_value('asal_sekolah'),
      	    'id_pekerjaan' => set_value('id_pekerjaan'),
            'konten' => 'karyawan/karyawan_form',
            'judul' => 'Data Karyawan',
          );
          $this->load->view('v_index', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
          		'nik' => $this->input->post('nik',TRUE),
          		'username' => $this->input->post('username',TRUE),
          		'password' => $this->input->post('password',TRUE),
          		'nama' => $this->input->post('nama',TRUE),
          		'alamat' => $this->input->post('alamat',TRUE),
              'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
              'agama' => $this->input->post('agama',TRUE),
              'pendidikan' => $this->input->post('pendidikan',TRUE),
          		'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
          		'id_pekerjaan' => $this->input->post('id_pekerjaan',TRUE),
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
            		'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
            		'nik' => set_value('nik', $row->nik),
            		'username' => set_value('username', $row->username),
            		'password' => set_value('password', $row->password),
            		'nama' => set_value('nama', $row->nama),
            		'alamat' => set_value('alamat', $row->alamat),
                'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
                'agama' => set_value('agama', $row->agama),
                'pendidikan' => set_value('pendidikan', $row->pendidikan),
            		'asal_sekolah' => set_value('asal_sekolah', $row->asal_sekolah),
            		'id_pekerjaan' => set_value('id_pekerjaan', $row->id_pekerjaan),
                'konten' => 'karyawan/karyawan_form',
                'judul' => 'Data Karyawan',
              );
              $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_karyawan', TRUE));
        } else {
            $data = array(
          		'nik' => $this->input->post('nik',TRUE),
          		'username' => $this->input->post('username',TRUE),
          		'password' => $this->input->post('password',TRUE),
          		'nama' => $this->input->post('nama',TRUE),
          		'alamat' => $this->input->post('alamat',TRUE),
              'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
              'agama' => $this->input->post('agama',TRUE),
              'pendidikan' => $this->input->post('pendidikan',TRUE),
          		'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
          		'id_pekerjaan' => $this->input->post('id_pekerjaan',TRUE),
            );

            $this->Karyawan_model->update($this->input->post('id_karyawan', TRUE), $data);
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
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('id_pekerjaan', 'id pekerjaan', 'trim|required');

	$this->form_validation->set_rules('id_karyawan', 'id_karyawan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-02 11:43:18 */
/* http://harviacode.com */
