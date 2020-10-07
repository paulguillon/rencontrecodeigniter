<?php
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('picture_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'index')
    {
        if (!file_exists(APPPATH . 'views/search/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $_SESSION['user'] = "user";
        $data['users'] = $this->user_model->get_users();

        //Get th profile picture of each user
        $pictures = [];
        for ($i=0; $i < count($data['users']); $i++) { 
            array_push($pictures, $this->picture_model->get_profile_pictures($data['users'][$i]['user_id']));
        }
        $data['pictures'] = $pictures;

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('search/' . $page);
        $this->load->view('templates/footer');
    }

    public function show($userId = NULL)
    {
        $data['users_item'] = $this->user_model->get_users($userId);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
}
