<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function index()
    {
        $this->load->model('prodi_model', 'prodi');
        $list_prodi = $this->prodi->getAll();

        $data['list_prodi'] = $list_prodi;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('Prodi/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/create');
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_kode = $this->input->get('id');
        $this->load->model('prodi_model', 'prodi');
        $data['prd'] = $this->prodi->findByKode($_kode);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('Prodi/view', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model("prodi_model", "prodi");

        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        $_prodiedit = $this->input->post('prodiedit');

        $data_prodi[] = $_kode;
        $data_prodi[] = $_nama;
        $data_prodi[] = $_kaprodi;

        if (isset($_prodiedit)) {
            $data_prodi[] = $_prodiedit;
            $this->prodi->update($data_prodi);
        } else {
            $this->prodi->save($data_prodi);
        }

        redirect(base_url('index.php/prodi'), 'refresh');
    }

    public function edit()
    {
        $_kode = $this->input->get('id');
        $this->load->model('prodi_model', 'prodi');
        $prodiedit = $this->prodi->findByKode($_kode);

        $data['prodiedit'] = $prodiedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete()
    {
        $_kode = $this->input->get('id');
        $this->load->model('prodi_model', 'prodi');
        $this->prodi->delete($_kode);

        redirect(base_url('index.php/prodi'), 'refresh');
    }
}
