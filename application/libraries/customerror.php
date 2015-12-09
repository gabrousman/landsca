<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of error
 *
 * @author akhtar
 */
class customerror {
    public  $erros= '';
            function add_custom_error($error){ 
                if(!session_id()) {
        session_start();
    }
              
                $_SESSION['cerror'] = @$_SESSION['cerror'].'<p>'.$error.'</p>';
         
        
               }
               
               function showCustomError(){
                   if(!session_id()) {
        session_start();
    }
                   
                   if(isset($_SESSION['cerror']) || validation_errors() !== ''):
                     echo '<div class="errors">'; 
                       echo  validation_errors();
                      echo @$_SESSION['cerror'];
                       echo '</div>';
                   unset($_SESSION['cerror']);  
                   endif;
                  
                   
               }
}
