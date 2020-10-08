<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_users($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('ed_user');
            return $query->result_array();
        }

        $query = $this->db->get_where('ed_user', array('user_id' => $id));
        return $query->row_array();
    }

    public function verifyMailExist($email)
    {
        $query = 'SELECT `user_mail` FROM `ed_user` WHERE `user_mail` = :userEmail';;
        try {

            $resultQuery = $this->db->prepare($query);
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

    private function hash_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
     }

    public function addUser()
    {
        $this->load->helper('url');

        $firstname = $this->input->post('userFirstName');
        $lastname = $this->input->post('userLastName');
        $mail = $this->input->post('userMail');
        $password = $this->input->post('userPassword');
        $age = $this->input->post('userAge');
        $position = $this->input->post('userPosition');
        $bio = $this->input->post('userBio');
        $gender = $this->input->post('userGender');
        $sexuality = $this->input->post('userSexuality');
        $interests[] = $this->input->post('userInterest[]');

        $data = array(
            'user_firstname' => $firstname,
            'user_lastname' => $lastname,
            'user_mail' => $mail,
            'user_password' => $this->hash_password($password),
            'user_age' => $age,
            'user_position' => $position,
            'user_bio' => $bio,
            'user_gender' => $gender,
            'user_sexuality' => $sexuality
        );

        return $this->db->insert('ed_user', $data);
    }

    public function verifyLogin($email, $password)
    {
        $query = 'SELECT `user_mail`, `user_password` FROM ed_user WHERE `users_mail` = :usermail';

        try {
            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':usermail', $email);
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
