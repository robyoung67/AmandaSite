<?php
class Site_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_site()
    {
        $query = $this->db->get_where('site', array('site_id' => 1));
        return $query->row_array();
    }
}