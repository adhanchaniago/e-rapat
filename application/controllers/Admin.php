<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('PUAModel');
        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['profiles'] = $this->PUAModel->get_all_data();
        $data['dashboard'] = $this->DashboardModel->get_todays_meeting();
        $data['status'] = $this->DashboardModel->get_count_status();
        $data['place'] = $this->DashboardModel->get_meeting_place();

        // var_dump($data['department']);
        // die;
        $this->load->view('layout/app/app_header', $data);
        $this->load->view('layout/app/app_sidebar', $data);
        $this->load->view('layout/app/app_topbar', $data);
        $this->load->view('modul/admin/index', $data);
        $this->load->view('layout/app/app_footer');
    }
}