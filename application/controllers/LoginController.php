<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url_helper');
    }

    public function verifyMailExist($email)
    {
        $query = 'SELECT `user_mail` FROM `ed_user` WHERE `user_mail` = :userEmail';;
        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':userEmail', $email);
            $resultQuery->execute();
            $count = $resultQuery->rowCount();
            if ($count == 0) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function addUsers($userfirstname, $userlastname, $usermail, $userage, $userbio, $usergender, $usersexuality, $userposition, $userpassword, $userinterest)
    {

        $query = 'INSERT INTO ed_user(user_firstname, user_lastname, user_mail, user_age, user_bio, user_gender, user_sexuality, user_position) 
        VALUES (:userfirstname, :userlastname, :usermail, :userage, :userbio, :usergender, :usersexuality, :userposition)';

        $interestQuery = 'INSERT INTO ed_interest(interest_name)
        VALUES (:userinterest)';

        try {
            // Permet de mettre les nouvelles valeurs afin de les insérer dans la bdd
            $resultQuery = $this->bdd->prepare($query);
            $resultInterest = $this->bdd->prepare($interestQuery);
            $resultQuery->bindValue(':usersfirstname', $userfirstname);
            $resultQuery->bindValue(':userlastname', $userlastname);
            $resultQuery->bindValue(':usermail', $usermail);
            $resultQuery->bindValue(':userage,', $userage);
            $resultQuery->bindValue(':userbio', $userbio);
            $resultQuery->bindValue(':usergender', $usergender);
            $resultQuery->bindValue(':usersexuality', $usersexuality);
            $resultQuery->bindValue(':userposition', $userposition);
            $resultQuery->bindValue(':userpassword', $userpassword);
            $resultInterest->bindValue(':userinterest', $userinterest);

            $resultQuery->execute();
            
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    
    public function verifyLogin($email, $password)
    {
        $query = 'SELECT `user_mail`, `user_password` FROM ed_user WHERE `users_mail` = :usermail';

        try {
            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':usersmail', $email);
            $resultQuery->execute();
            $resultUser = $resultQuery->fetch();
            $passwordOK = password_verify($password, $resultUser['users_password']);

            if ($passwordOK) {

               return true;
               
            } else {
               
               return false;

            }

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    
    }
}