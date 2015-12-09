<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Portal extends CI_Controller{
    
    function __construct() {
         parent::__construct();
        if($this->session->userdata('logged')!==1):
            redirect(base_url().'login');
        endif;
        
        
      
        
    }
            function index($type=NULL){
                if($type ==='landscaper'):
                 
                      if($this->session->userdata('type')!=='landscaper'):
                         redirect(base_url().'login/index/landscaper');  
                      endif;
                
                     $this->load->view('lportal');
                else:
                     if($this->session->userdata('type')!=='customer'):
                         redirect(base_url().'login');  
                      endif;
                      $payments = self::getCustomerData();
                      $data['pay'] = $payments;
                     $this->load->view('cportal',$data);
                endif;
        
    }
    
    
    function getCustomerData(){
       $user_id = $this->session->userdata('id');

        $this->load->model('payments');
        return  $this->payments->getCustomerPayments($user_id);
    }
}


