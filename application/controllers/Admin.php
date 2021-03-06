<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper(array('string', 'text'));
        $this->load->model('Account_model');
        $this->load->model('Department_model');
        $this->load->model('Meeting_model');
        $this->load->model('Overview_model');
        $this->load->model('Role_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['meeting'] = $this->Meeting_model->get_all_meeting();
        $data['place'] = $this->db->get('meeting_place')->result_array();
        $data['overview'] = $this->Overview_model->get_all_today();
        $data['meeting_admin'] = $this->Meeting_model->get_all_meeting();
        // $data['dept'] = $this->Department_model->get_all_department();
        $data['subdept'] = $this->Department_model->view_sub_department();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        // $this->load->view('layout/topbar', $data);
        $this->load->view('admin/index', $data);
        // $this->load->view('layout/footer');
    }

    public function role()
    {
        $data['title'] = 'Pengaturan Hak Akses';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['role'] = $this->Account_model->get_where_role();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('layout/footer');
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['role'] = $this->Account_model->get_where_user_role($role_id);

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('layout/footer');
    }

    public function changeaccess()
    {
        $role_id = $this->input->post('roleId');
        $menu_id = $this->input->post('menuId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->Account_model->get_user_access_menu($data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Anda berhasil merubah Hak Akses!
      </div>');
    }

    public function account()
    {
        $data['title']   = 'Master Data Akun';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['account'] = $this->Account_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_role();
        $data['subdept'] = $this->Department_model->view_sub_department();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('admin/account', $data);
        $this->load->view('layout/footer');
    }

    public function addaccount()
    {
        $data['title']   = 'Master Data Akun';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['account'] = $this->Account_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_role();
        $data['subdept'] = $this->Department_model->view_sub_department();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[meeting_users.email]', [
            "is_unique" => "Email ini telah terdaftar!"
        ]);
        $this->form_validation->set_rules('sub_department_id', 'Nama Bagian', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('admin/account', $data);
            $this->load->view('layout/footer');
        } else {

            // $uniqueid = uniqid();
            $password = "admin"; // $2y$10$rlSQG0XGwZnCtqv61NLKkONCAL1SUJdVeJ/95FFWOxSEeGJ9rqLwW
            $data = [
                // 'uniqueid' => $uniqueid,
                'zoomid' => htmlspecialchars($this->input->post('zoomid', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => "default-avatar.jpg",
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => intval($this->input->post('is_active', true)),
                'sub_department_id' => intval($this->input->post('sub_department_id')),
                'date_created' => time()
            ];

            $this->Account_model->insert_account($data);
            $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Akun Baru berhasil dibuat!.</div>');
            redirect('admin/account');
        }
    }

    public function updateaccount()
    {
        $data['title']   = 'Master Data Akun';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['account'] = $this->Account_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_role();
        $data['subdept'] = $this->Department_model->view_sub_department();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {

            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('admin/account', $data);
            $this->load->view('layout/footer');
        } else {

            $data = [
                'id' => intval($this->input->post('id')),
                'zoomid' => htmlspecialchars($this->input->post('zoomid')),
                'name' => htmlspecialchars($this->input->post('name')),
                // 'email' => htmlspecialchars($this->input->post('email')),
                'role_id' => $this->input->post('role_id', true),
                'is_active' => intval($this->input->post('is_active')),
                'sub_department_id' => intval($this->input->post('sub_department_id')),
                'date_updated' => time()
            ];

            $this->Account_model->update_account($data);
            $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Akun Baru berhasil diubah!.</div>');
            redirect('admin/account');
        }
    }

    public function deleteaccount()
    {
        $id = $this->input->post('id');

        $data = $this->Account_model->get_where($id);
        $old_images = $data['image'];

        if ($old_images != 'default-avatar.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_images);
        }

        $this->Account_model->delete_account($id);
        $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Akun Baru berhasil dihapus!.</div>');
        redirect('admin/account');
    }

    public function forceresetpass()
    {
        $id = $this->input->post('id');
        $password = "admin"; // $2y$10$rlSQG0XGwZnCtqv61NLKkONCAL1SUJdVeJ/95FFWOxSEeGJ9rqLwW
        $data = [
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'date_updated' => time()
        ];

        $this->Account_model->reset_password($id, $data);
        $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Password Berhasil dipulihkan! <strong>(default password -> admin)</strong>.</div>');
        redirect('admin/account');
    }

    // Department Section
    public function department()
    {
        $data['title']   = 'Master Data Sekretariat';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['dept'] = $this->Department_model->get_all_department();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('department/index', $data);
        $this->load->view('layout/footer');
    }

    public function adddepartment()
    {
        $data['title']   = 'Master Data Sekretariat';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['dept'] = $this->Department_model->get_all_department();

        $this->form_validation->set_rules('department_name', 'Department Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('department/index', $data);
            $this->load->view('layout/footer');
        } else {

            $data = array('department_name' => $this->input->post('department_name'));

            $this->Department_model->insert_department($data);
            $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat!</strong> Data Sekretariat berhasil ditambahkan!</div>');
            redirect('admin/department');
        }
    }

    public function editdepartment()
    {

        $id = $this->input->post('id');
        $data = array('department_name' => $this->input->post('department_name'));


        $this->Department_model->update_department($id, $data);
        $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat!</strong> Data Sekretariat berhasil diubah!</div>');
        redirect('admin/department');
    }

    public function deletedepartment()
    {
        $id = $this->input->post('id');

        $this->Department_model->delete_department($id);
        $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat!</strong> Data Sekretariat berhasil dihapus!</div>');
        redirect('admin/department');
    }

    public function searchdepartment()
    {
        $data['title'] = 'Master Data Sekretariat';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['meeting'] = $this->Meeting_model->get_all_meeting();
        $data['place'] = $this->db->get('meeting_place')->result_array();
        $data['overview'] = $this->Overview_model->get_all_today();
        $data['freeroom'] = $this->Overview_model->get_free_meeting_room();
        $data['meeting_admin'] = $this->Meeting_model->get_all_meeting();
        $data['dept'] = $this->Department_model->get_all_department();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('layout/footer');
    }

    // Sub Department Section
    public function subdepartment()
    {
        $data['title']   = 'Master Data Bagian';
        $data['user'] = $this->Account_model->get_admin($this->session->userdata('email'));
        $data['dept'] = $this->Department_model->get_all_department();
        $data['subdepartment'] = $this->Department_model->getSubDepartment();

        $this->form_validation->set_rules('department_id', 'id department', 'required');
        $this->form_validation->set_rules('sub_department_name', 'sub department', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('department/subdepartment', $data);
            $this->load->view('layout/footer');
        } else {

            $data = [
                'department_id'         => intval($this->input->post('department_id', true)),
                'sub_department_name'   => $this->input->post('sub_department_name'),
                'is_active'             => intval($this->input->post('is_active', true)),
            ];

            $this->Department_model->insert_sub_department($data);
            $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat!</strong> Data Bagian berhasil ditambahkan!</div>');
            redirect('admin/subdepartment');
        }
    }


    public function updatesubdepartment()
    {
        if ($this->input->post('id')) {
            $data = array(
                'department_id'         => intval($this->input->post('department_id', true)),
                'sub_department_name'   => $this->input->post('sub_department_name'),
                'is_active'             => intval($this->input->post('is_active', true)),
            );

            $this->Department_model->update_sub_department($data, $this->input->post('id', true));
        }
        $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat!</strong> Data Bagian berhasil diubah!</div>');
        redirect('admin/subdepartment');
    }


    public function deletesubdepartment()
    {
        $id = $this->input->post('id');

        $this->Department_model->delete_sub_department($id);
        $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat!</strong> Data Bagian berhasil dihapus!</div>');
        redirect('admin/subdepartment');
    }
}
