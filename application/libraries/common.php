<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class common{
    public function __construct()
{
    $this->CI =& get_instance();
}
 function setSessionDataCustomer($data,$type='customer') {
        $userData = $this->CI->crud->select('user1','*',$data);
        $userData = $userData->result_array();
          $userData['logged'] = 1;
          $userData['type'] = $type;
        $this->CI->session->set_userdata($userData);
      
        if($type==='customer'):
             redirect(base_url().'portal');
        else:
            redirect(base_url().'portal/index/landscaper');
        endif;
       
       // 
        
    }
}