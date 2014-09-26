<?php
class Messages_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_message($page)
    {
        $query = $this->db->get_where('message_table', array('message_page' => $page));
        return $query->result_array();
    }
}