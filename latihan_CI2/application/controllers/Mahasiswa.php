<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $list_mahasiswa = $this->mahasiswa->getAll();

        $data['list_mahasiswa'] = $list_mahasiswa;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $data['mhs'] = $this->mahasiswa->findById($_nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model("mahasiswa_model", "mahasiswa");

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');
        $_kode_prodi = $this->input->post('prodi_kode');
        $_idedit = $this->input->post('idedit');


        $data_mhs[] = $_nim;
        $data_mhs[] = $_nama;
        $data_mhs[] = $_gender;
        $data_mhs[] = $_tmp_lahir;
        $data_mhs[] = $_tgl_lahir;
        $data_mhs[] = $_ipk;
        $data_mhs[] = $_kode_prodi;

        if (isset($_idedit)) {
            // update data lama
            $data_mhs[] = $_idedit;
            $this->mahasiswa->update($data_mhs);
        } else {  //save data baru
            $this->mahasiswa->save($data_mhs);
        }

        redirect(base_url('index.php/mahasiswa/index/view?id=').$_nim, 'refresh');
    }

    public function edit()
    {
        $_nim = $this->input->get('id');
        $this->load->model("mahasiswa_model", "mahasiswa");
        $mhsedit = $this->mahasiswa->findById($_nim);

        $data['mhsedit'] = $mhsedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete()
    {
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $this->mahasiswa->delete($_nim);

        redirect(base_url('index.php/mahasiswa/index'), 'refresh');
    }
}
