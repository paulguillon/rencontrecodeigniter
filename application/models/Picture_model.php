<?php
class Picture_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_pictures($user = FALSE)
    {
        //All pictures of all users
        if ($user === FALSE) {
            $query = $this->db->get('ed_picture');
            return $query->result_array();
        }

        //All pictures of the passed user
        $query = $this->db->get_where('ed_picture', array('picture_user' => $user));
        return $query->row_array();
    }

    public function get_profile_pictures($user = FALSE)
    {
        //All profile pictures
        if ($user === FALSE) {
            $query = $this->db->get_where('ed_picture', array('picture_profile' => 1));
            return $query->result_array();
        }

        //Profile picture of the passed user
        $query = $this->db->get_where('ed_picture', array('picture_user' => $user, 'picture_profile' => 1));
        return $query->row_array();
    }
}
