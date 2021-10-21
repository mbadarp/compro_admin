<?php
class Services extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if(!isset($_SESSION['logged_in'])){
        //     $url=base_url('administrator');
        //     redirect($url);
        // };
        // $this->load->model('m_pengunjung');
    }
    function index()
    {
        // $x['visitor'] = $this->m_pengunjung->statistik_pengujung();
        $this->load->view('admin/v_services',);
    }

    function add_services()
    {
        $this->load->view('admin/v_add_services');
    }

    function edit_services()
    {
        $this->load->view('admin/v_edit_services');
    }
}
