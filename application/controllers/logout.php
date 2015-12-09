<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author akhtar
 */
class logout extends CI_Controller {
    public function index($type=NULL) {
         $this->session->sess_destroy();
         if($type ==='landscaper'):
              redirect(base_url().'login/index/landscaper'); 
             else:
              redirect(base_url().'login');
         endif;
       
    }
}
