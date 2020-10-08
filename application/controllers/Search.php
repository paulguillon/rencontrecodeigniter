<?php
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('picture_model');
        $this->load->model('interest_model');
        $this->load->helper('url_helper');
    }

    public function view($option = 'index')
    {
        $_SESSION['user'] = "user";

        //if a page name is passed
        if(!is_numeric($option)){
            $data['users'] = $this->user_model->get_users();

            if (empty($data['users'])) show_404();

            //Get th profile picture of each user
            $pictures = [];
            for ($i=0; $i < count($data['users']); $i++) { 
                array_push($pictures, $this->picture_model->get_profile_pictures($data['users'][$i]['user_id']));
            }
            $data['pictures'] = $pictures;

            $data['title'] = ucfirst($option); // Capitalize the first letter

            $this->load->view('templates/header', $data);
            $this->load->view('search/' . $option);
            $this->load->view('templates/footer');
        }
        //If an id is passed
        else{
            //Get user by id
            $data['user'] = $this->user_model->get_users($option);

            if (empty($data['user'])) show_404();

            //Get profile picture by user id
            $data['profilePic'] = $this->picture_model->get_profile_pictures($data['user']['user_id']);

            //Get all users pictures
            $data['userPictures'] = $this->picture_model->get_pictures($data['user']['user_id']);

            //Get all users interests
            $data['userInterests'] = $this->interest_model->get_interests($data['user']['user_id']);

            $data['title'] = ucfirst($data['user']['user_firstname']).' '.ucfirst($data['user']['user_lastname']);

            $this->load->view('templates/header', $data);
            $this->load->view('search/showUser', $data);
            $this->load->view('templates/footer');
        }
    }
}