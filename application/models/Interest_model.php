<?php
class Interest_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->model('user_model');
    }

    public function get_interests($user = FALSE)
    {
        //All interests of all users
        if ($user === FALSE) {
            $query = $this->db->get('ed_interest');
            return $query->result_array();
        }

        //All intersts of the passed user
        $query = $this->db->get_where('ed_interest', array('interest_user' => $user));
        return $query->result_array();
    }

    public function addInterests()
    {
        $this->load->helper('url');

        $interests = $this->input->post('userInterest');

        //Get id of the most recent user
        $users = $this->user_model->get_users();
        $id = $users[count($users) - 1]['user_id'];

        for($i = 0; $i < count($interests); $i++) {
            $data = array(
                'interest_name' => $interests[$i],
                'interest_user' => $id
            );
            $this->db->insert('ed_interest', $data);
        }
    }
}
