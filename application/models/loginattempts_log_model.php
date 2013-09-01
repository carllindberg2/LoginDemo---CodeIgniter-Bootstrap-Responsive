<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginattempts_log_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all($email)
    {
        $users = $this->db->order_by('lal_when', 'DESC')
            ->get_where('loginattempts_log', array('lal_email' => $email), 5)
            ->result_array();

        return $users;
    }

    public function add($email, $lal_when, $lal_iphost, $lal_outcome)
    {
               
        $this->db->insert('loginattempts_log', array('lal_email' => $email, 'lal_when' => $lal_when, 'lal_iphost' => $lal_iphost, 'lal_outcome' => $lal_outcome)); 
        
        return TRUE;
    }
}
