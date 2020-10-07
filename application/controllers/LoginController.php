<?php
if(isset($_POST['registerButton'])){
    $this->load->model('Register_model');
    $UserModel = new User_model();
    $userFirstName = htmlspecialchars($_POST['userFirstName']);
    $userLastName = htmlspecialchars($_POST['userLastName']);
    $userEmail = htmlspecialchars($_POST['userMail']);
    $userAge = htmlspecialchars($_POST['userAge']);
    $userBio = htmlspecialchars($_POST['userBio']);
    $userGender = htmlspecialchars($_POST['userGender']);
    $userSexuality = htmlspecialchars($_POST['userSexuality']);
    $userPosition = htmlspecialchars($_POST['userPosition']);
    $userInterest = htmlspecialchars($_POST['userInterest']);
    $userPassword = password_hash($_POST['userPassword'], PASSWORD_BCRYPT);
    $this->User_model->addUsers($userFirstName, $userLastName, $userEmail, $userAge, $userBio, $userGender, $userSexuality, $userPosition, $userPassword, $userInterest);
}

