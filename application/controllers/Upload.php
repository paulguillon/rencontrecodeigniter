<?php

class Upload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('picture_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('home/profile', array('error' => ' '));
    }

    public function do_upload($userId)
    {
        $config['upload_path']          = 'assets/uploads/profiles/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name']            = $userId;
        $config['overwrite']            = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $data['title'] = 'Profil';

            $this->load->view('templates/header', $data);
            $this->load->view('home/profile', $error);
            $this->load->view('templates/footer');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->picture_model->set_profile_picture($data['upload_data'], $userId);
            $data['title'] = 'Succès';

            $this->load->view('templates/header', $data);
            $this->load->view('home/upload_success', $data);
            $this->load->view('templates/footer');
        }
    }
}
