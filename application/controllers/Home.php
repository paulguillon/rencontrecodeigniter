<?php
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'index')
    {
        if (!file_exists(APPPATH . 'views/home/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header');
        $this->load->view('home/' . $page);
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $this->load->view('templates/header');
        $this->load->view('home/login');
        $this->load->view('templates/footer');
    }

    public function register()
    {
        $this->load->view('templates/header');
        $this->load->view('home/register');
        $this->load->view('templates/footer');
    }
}
