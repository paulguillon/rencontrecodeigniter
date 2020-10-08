<?php
$error = [];
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
        $this->form_validation->set_rules('userFirstName', 'Prénom', 'required');
        $this->form_validation->set_rules('userLastName', 'Nom de famille', 'required');
        $this->form_validation->set_rules('userMail', 'Adresse e-mail', 'required');
        $this->form_validation->set_rules('userPassword', 'Mot de passe', 'required');
        $this->form_validation->set_rules('userAge', 'Age', 'required');
        $this->form_validation->set_rules('userPosition', 'Ville', 'required');
        $this->form_validation->set_rules('userBio', 'Biographie', 'required');
        $this->form_validation->set_rules('userGender', 'Genre', 'required');
        $this->form_validation->set_rules('userSexuality', 'Sexualité', 'required');
        $this->form_validation->set_rules('userInterest[]', 'Interêts', 'required');

        $data['title'] = "Formulaire d'inscription";

        // if(isset($_POST['userFirstName'])){
        //     if(empty($_POST['userFirstName'])){
        //         $error['userFirstName'] = "Veuillez remplir le champ";
        //     }
        // }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('home/register');
            $this->load->view('templates/footer');
        } else {
            $this->user_model->addUser();
            $this->load->view('home/profile');
        }
    }
}