<?php
class User extends CI_Controller
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
        $this->load->view('admin/v_user',);
    }

    function add_user()
    {
        $this->load->view('admin/v_add_user');
    }

    function edit_user()
    {
        $this->load->view('admin/v_edit_user');
    }
}
