<?php
class News extends CI_Controller
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
        $this->load->view('admin/v_news',);
    }

    function add_news()
    {
        $this->load->view('admin/v_add_news');
    }

    function category()
    {
        $this->load->view('admin/v_category');
    }
}
