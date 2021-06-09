<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'url', 'date', 'email']);
        $this->load->library('form_validation', 'session');
        $this->load->model('Model_Home');
        $this->load->database('');
    }

    public function index()
    {
        $data['penumpang'] = $this->Model_Home->getAll();
        // $data = [
        //     'mahasiswa' => $this->Mahasiswa->getAll()
        // ];
        $this->load->view('header');
        $this->load->view('Home/index', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        $this->load->view('Home/create');
    }

    public function pemesanan()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|is_unique[penumpang.nik]');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('agree', 'Persetujuan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('st_asal', 'Stasiun Asal', 'required');
        $this->form_validation->set_rules('st_tujuan', 'Stasiun Tujuan', 'required');
        $this->form_validation->set_rules('depart', 'Tanggal Berangkat', 'required');
        $this->form_validation->set_message('required', '%s wajib diisi !!!');
        if ($this->form_validation->run() == true) {
            $data['nik'] = $this->input->post('nik');
            $data['nama'] = $this->input->post('nama');
            $data['gender'] = $this->input->post('gender');
            $data['no_hp'] = $this->input->post('no_hp');
            $data['email'] = $this->input->post('email');
            $data['alamat'] = $this->input->post('alamat');
            $data['st_asal'] = $this->input->post('st_asal');
            $data['st_tujuan'] = $this->input->post('st_tujuan');
            $data['depart'] = $this->input->post('depart');

            $this->Model_Home->save($data);
            redirect('Home');
        } else {
            $this->load->view('Home/create');
        }
    }

    public function edit($id)
    {
        $data['penumpang'] = $this->Model_Home->getById($id);
        $this->load->view('Home/edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('agree', 'Persetujuan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('st_asal', 'Stasiun Asal', 'required');
        $this->form_validation->set_rules('st_tujuan', 'Stasiun Tujuan', 'required');
        $this->form_validation->set_rules('depart', 'Tanggal Berangkat', 'required');
        $this->form_validation->set_message('required', '%s wajib diisi !!!');
        if ($this->form_validation->run() == true) {
            $data['nama'] = $this->input->post('nama');
            $data['gender'] = $this->input->post('gender');
            $data['no_hp'] = $this->input->post('no_hp');
            $data['email'] = $this->input->post('email');
            $data['alamat'] = $this->input->post('alamat');
            $data['st_asal'] = $this->input->post('st_asal');
            $data['st_tujuan'] = $this->input->post('st_tujuan');
            $data['depart'] = $this->input->post('depart');

            $this->Model_Home->update($data, $id);
            redirect('Home');
        } else {
            $data['penumpang'] = $this->Model_Home->getById($id);
            $this->load->view('Home/create');
        }
    }

    public function delete($id)
    {
        $this->Model_Home->delete($id);
        redirect('Home/index');
    }

    public function jadwal()
    {
        $data['jadwal'] = $this->Model_Home->getAlljadwal();
        $this->load->view('Home/jadwal', $data);
    }

    public function input_jadwal()
    {
        $this->load->view('Home/input_jadwal');
    }

    public function addjadwal()
    {
        $this->form_validation->set_rules('nama_ka', 'Nama Kereta Api', 'required');
        $this->form_validation->set_rules('st_asal', 'Stasiun Asal', 'required');
        $this->form_validation->set_rules('st_tujuan', 'Stasiun Tujuan', 'required');
        $this->form_validation->set_rules('jamberangkat', 'Jam Keberangkatan', 'required');
        $this->form_validation->set_rules('jamdatang', 'Jam Kedatangan', 'required');
        if ($this->form_validation->run() == true) {
            $data['nama_ka'] = $this->input->post('nama_ka');
            $data['st_asal'] = $this->input->post('st_asal');
            $data['st_tujuan'] = $this->input->post('st_tujuan');
            $data['jamberangkat'] = $this->input->post('jamberangkat');
            $data['jamdatang'] = $this->input->post('jamdatang');

            $this->Model_Home->savejadwal($data);
            redirect('Home');
        } else {
            $this->load->view('Home/input_jadwal');
        }
    }

    public function list()
    {
        $this->load->view('Home/list');
    }
}
