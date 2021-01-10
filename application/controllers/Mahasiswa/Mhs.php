<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mhs extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->logged_in != "yes" || $this->session->level != 33) {
            redirect(base_url());
        }
        $this->load->model(array('modelmhs', 'modeladmin'));
    }

    function index()
    {
        $config = array(
            'title' => 'Data Kelompok PKL',
        );
        if ($this->session->userdata('parent') == null) {
            $id = $this->session->userdata('iduser');
        } else {
            $id = $this->session->userdata('parent');
        }
        $data = array(
            "header"     => $this->load->view('mahasiswa/include/header', $config, true),
            "navbar"     => $this->load->view('mahasiswa/include/navbar', array(), true),
            "sidenav"     => $this->load->view('mahasiswa/include/sidenav', array(), true),
            "footer"     => $this->load->view('mahasiswa/include/footer', array(), true),
            "title" => 'Data Kelompok PKL',
            'wrapper' => [
                (object)array(
                    'title' => 'Mhs',
                    'link' => 'mahasiswa/mhs',
                    'type' => 'active'
                ),
                (object)array(
                    'title' => 'index',
                    'link' => null,
                    'type' => 'active'
                )
            ],
            'dataMahasiswa' => $this->modelmhs->showMahasiswa('showmhs', array('user_id' => $id))
        );
        $this->load->view('mahasiswa/view/mhs/index', $data);
    }

    function add()
    {
        $config = array(
            'title' => 'Add Data Kelompok PKL',
        );
        if ($this->session->userdata('parent') == null) {
            $id = $this->session->userdata('iduser');
        } else {
            $id = $this->session->userdata('parent');
        }
        $data = array(
            "header"     => $this->load->view('mahasiswa/include/header', $config, true),
            "navbar"     => $this->load->view('mahasiswa/include/navbar', array(), true),
            "sidenav"     => $this->load->view('mahasiswa/include/sidenav', array(), true),
            "footer"     => $this->load->view('mahasiswa/include/footer', array(), true),
            "title" => 'Add Data Kelompok PKL',
            'wrapper' => [
                (object)array(
                    'title' => 'Mhs',
                    'link' => 'mahasiswa/mhs',
                    'type' => 'active'
                ),
                (object)array(
                    'title' => 'Add',
                    'link' => null,
                    'type' => 'active'
                )
            ],
            'jurusan' => $this->modeladmin->get('jurusan'),
            'dataMahasiswa' => $this->modelmhs->showMahasiswa('showmhs', array('user_id' => $id))
        );
        $this->load->view('mahasiswa/view/mhs/add', $data);
    }

    public function loadData()
    {
        $modul = $this->input->post('module');
        $id = $this->input->post('id');
        if ($modul == 'prodi') {
            $data = $this->modeladmin->getWhere2('prodi', ['jurusan_id', $id]);
            echo "<option>Pilih Prodi...</option>";
            foreach ($data as $val) {
                echo "<option value=" . $val->id . ">" . $val->nama . "</option>";
            }
        }
    }

    public function create()
    {
    }
}
