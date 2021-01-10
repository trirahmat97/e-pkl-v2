<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->logged_in != "yes" || $this->session->level != 33) {
            redirect(base_url());
        }
        $this->load->model(array('modelpkl'));
    }

    function index()
    {
        $config = array(
            'title' => 'Dashboard',
        );

        $data = array(
            "header"     => $this->load->view('mahasiswa/include/header', $config, true),
            "navbar"     => $this->load->view('mahasiswa/include/navbar', array(), true),
            "sidenav"    => $this->load->view('mahasiswa/include/sidenav', array(), true),
            "footer"     => $this->load->view('mahasiswa/include/footer', array(), true),
            "title"      => 'Dashboard',
            "dataPengajuan" => $this->modelpkl->showPklById('pkl')
        );
        $this->load->view('mahasiswa/view/dashboard/index', $data);
    }
}
