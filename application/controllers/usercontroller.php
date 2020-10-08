<!-- <?php

// public function __construct(){
//     parent::__construct();

//     $this->load->library('form_validation');    
//     $this->load->helper('form');
//     $this->load->helper('url');
//     this->load->model('User_Model');
// } -->

// if(isset($_POST['registerButton'])){
//     $UserModel = new User_model();
//     $userFirstName = htmlspecialchars($_POST['userFirstName']);
//     $userLastName = htmlspecialchars($_POST['userLastName']);
//     $userEmail = htmlspecialchars($_POST['userMail']);
//     $userAge = htmlspecialchars($_POST['userAge']);
//     $userBio = htmlspecialchars($_POST['userBio']);
//     $userGender = htmlspecialchars($_POST['userGender']);
//     $userSexuality = htmlspecialchars($_POST['userSexuality']);
//     $userPosition = htmlspecialchars($_POST['userPosition']);
//     $userInterest = htmlspecialchars($_POST['userInterest']);
//     $userPassword = password_hash($_POST['userPassword'], PASSWORD_BCRYPT);
//     $this->User_model->addUsers($userFirstName, $userLastName, $userEmail, $userAge, $userBio, $userGender, $userSexuality, $userPosition, $userPassword, $userInterest);
// }

// public function addUsers(){
//     $this->load->helper('url');
//     $data = array(
//     'userFirstName'=>$this->input->post('userFirstName');
//     'userLastName' =>$this->input->post('userLastName');
//     'userEmail'=>$this->input->post('userMail');
//     'userAge'=>$this->input->post('userAge');
//     'userBio'=>$this->input->post('userBio');
//     'userGender'=>$this->input->post('userGender');'userSexuality'=>$this->input->post('userSexuality');
//     'userPosition'=>$this->input->post('userPosition');
//     'userInterest'=>$this->input->post('userInterest');
//     'userPassword'=>$this->input->post('userPassword');
//     );
//     return $this->db->insert('meetic',$data);
// }