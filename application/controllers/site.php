<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        
        if (!$this->is_logged_in()) {
            redirect('login');
        }
    }
    
    public function index()
    {
        $loginattempts_log = $this->loginattempts_log_model->get_all($this->session->userdata('email'));

        $this->load->view('loginattempts_log', array(
            'loginattempts_log' => $loginattempts_log, 
        ));
    }
    

    public function profile()
    {
        $this->load->view('profile');
    }
    
    public function change_password()
    {
        sleep(1);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('curpwd', 'Nuvarande lösenord', 'required|max_length[20]');
        $this->form_validation->set_rules('newpwd', 'Nytt lösenord', 'required|max_length[20]');
        
        if ($this->form_validation->run() == FALSE) {
            $message = "<strong>Ändring</strong> misslyckades!";
            $this->json_response(FALSE, $message);
        } else {
            $pwd_valid = $this->user_model->check_password(
                $this->session->userdata('uid'), $this->input->post('curpwd'));
            if ($pwd_valid) {
                $this->user_model->update_password(
                    $this->session->userdata('uid'), $this->input->post('newpwd'));

                $message = "<strong>Lösenord</strong> ändrat!";
                $this->json_response(TRUE, $message);
            } else {
                $message = "<strong>Nuvarande</strong> lösenord är fel!";
                $this->json_response(FALSE, $message);
            }
        }
    }
    
    private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }

    private function json_response($successful, $message)
    {
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }

    public function alpha_dash_space($str)
    {
        return ( ! preg_match("/^([-a-z0-9_ ])+$/i", $str)) ? FALSE : TRUE;
    }
}
/* End of file site.php */