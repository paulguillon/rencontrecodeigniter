<?php
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/home/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('home/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function register()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('home/register');
            $this->load->view('templates/footer');
        } else {
            $this->user_model->addUsers();
            $this->load->view('home/index');
        }
    }
}