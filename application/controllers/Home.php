<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('interest_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('userFirstName', 'prénom', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userLastName', 'nom de famille', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userMail', 'adresse e-mail', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userPassword', 'mot de passe', 'required',
                        array('required' => 'Veuillez remplir le champ %s.',));
        $this->form_validation->set_rules('userConfirm', 'mot de passe', 'required|matches[userPassword]', array('required' => 'Veuillez remplir le champ %s.', 'matches' => 'Veuillez remplir correctement les deux champs de mot de passe.'));
        $this->form_validation->set_rules('userAge', 'age', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userPosition', 'ville', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userBio', 'biographie', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userGender', 'genre', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userSexuality', 'sexualité', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userInterest[]', 'interêts', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));

        $data['title'] = "Formulaire d'inscription";


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('home/register');
            $this->load->view('templates/footer');
        } else {
            $this->user_model->addUser();
            $this->interest_model->addInterests();

            //return user if exist
            $login = $this->user_model->verifyLogin();
            
            if(!empty($login)){
                session_start();
                $_SESSION['user'] = $login[0];
                header('location:'.base_url('search/index'));
            }
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('userMail', 'mail', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));
        $this->form_validation->set_rules('userPassword', 'password', 'required',
                        array('required' => 'Veuillez remplir le champ %s.'));

        $data['title'] = "Connexion";

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('home/login');
            $this->load->view('templates/footer');
        } else {
            //return user if exist
            $login = $this->user_model->verifyLogin();
            
            if(!empty($login)){
                session_start();
                $_SESSION['user'] = $login[0];
                header('location:'.base_url('search/index'));
            }
            else{
                header('location:'.base_url('home/login'));
            }
        }
    }
}
