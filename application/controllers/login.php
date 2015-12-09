<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
     function __construct() {
         parent::__construct();
        if($this->session->userdata('logged')===1):
            if($this->session->userdata('type')==='customer'):
                redirect(base_url().'portal');
            elseif($this->session->userdata('type')==='landscaper'):
                 redirect(base_url().'portal/index/landscaper');
            endif;
            
        endif;
      
        
    }
    public function index($type=null)
    {
        if(strtolower($type) === 'landscaper'):
            $this->load->view('llogin');
            else:
            $this->load->view('clogin');
        endif;

    }
    
    public function doLogin($type=null)
    {
       if($type === 'landscaper'):
           self::landscaperLogin();
           else:
               self::customerLogin();
       endif;

    }
    
    
    public function customerLogin() {
        $this->form_validation->set_rules('username', 'Username', 'required');
       $this->form_validation->set_rules('password', 'password', 'required');
       if ($this->form_validation->run() == FALSE)
		{
           $this->load->view('clogin');
       }else{
           
           
           $data['email'] = $this->input->post('username');
           $data['password'] = $this->input->post('password');
           $data['user_type'] = 'customer'; 
          if($this->crud->numRow('user1','*',$data)==1):
             self::setSessionDataCustomer($data);
              else:
              $this->customerror->add_custom_error('Username or paddwors is incorrect');
              redirect(base_url().'login');
          endif;
    
       }
    }
    
    public function setSessionDataCustomer($data) {
        $userData = $this->crud->select('user1','*',$data);
        $userData = $userData->result_array();
       $userData = $userData[0];
        
          $userData['logged'] = 1;
          $userData['type'] = 'customer';
        $this->session->set_userdata($userData);
      
        redirect(base_url().'portal');
       // 
        
    }
    
    
       
    public function landscaperLogin() {
        $this->form_validation->set_rules('username', 'Username', 'required');
       $this->form_validation->set_rules('password', 'password', 'required');
       if ($this->form_validation->run() == FALSE)
		{
           $this->load->view('llogin');
       }else{
           
           
           $data['email'] = $this->input->post('username');
           $data['password'] = $this->input->post('password');
            $data['user_type'] = 'landscaper';
          if($this->crud->numRow('user1','*',$data)==1):
             $this->common->setSessionDataCustomer($data,'landscaper');
              else:
              $this->customerror->add_custom_error('Username or paddwors is incorrect');
              redirect(base_url().'login/index/landscaper');
          endif;
    
       }
    }
    
    
    
   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */