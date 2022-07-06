<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('prodi_model', 'prodi');
        $list_prodi = $this->prodi->getAll();

        $data['list_prodi'] = $list_prodi;

        $this->load->model('mahasiswa_model', 'mahasiswa');
        $list_mahasiswa = $this->mahasiswa->getAll();

        $data['list_mahasiswa'] = $list_mahasiswa;

        $this->load->model('dosen_model', 'dosen');
        $list_dosen = $this->dosen->getAll();

        $data['list_dosen'] = $list_dosen;


        $this->load->view('home/template', $data);
    }
}
