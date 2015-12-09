<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Crud extends CI_Model{
    public function select($table,$data,$con='',$limitoff="",$limitVal=''){
        $this->db->select($data);
       $this->db->from($table);
      if($con !=''):
             $this->db->where($con); 
        endif;
        if($limitoff !='' && $limitVal !=''):
           $this->db->limit($limitoff,$limitVal);; 
        endif;
        return  $query = $this->db->get();
    }
    
    public function numRow($table,$data,$con='',$limitoff="",$limitVal=''){
       
       $query = self::select($table,$data,$con,$limitoff,$limitVal);
      
        return $query->num_rows();
    }
    
    function insert($table,$data) {
        return $this->db->insert($table, $data); 
    }
    
    function update($table,$data,$con) {
        $this->db->where($con);
        return $this->db->update($table, $data); 
    }
     function delete($table,$con) {
        $this->db->where($con);
           $this->db->delete($table); 
    }
    function registerCustomer($data,$info=NULL) {
        extract($data);
        
        $user1 = array(
            'first_name'=>$firstname,
            'last_name'=>$lastname,
             'email'=>$youremail,
            'password'=>$password,
        );
        if($info===NULL):
            
             $user1 = array(
            'first_name'=>$firstname,
            'last_name'=>$lastname,
             'email'=>$youremail,
            'password'=>$password,
            'phone_number'=>$phone_number,
            'zip_code'=>$zip_code,
            'date_of_birth'=>$dob_year.'-'.$dob_month.'-'.$dob_day,
            'companyid' =>$companyid,
            'address' =>$address 
        );
         $card = array(
           'user_id'=>'',
            'card'=>$creditcard,
            'expiry'=>$expMonth.'-'.$expYear,
             'cvCode'=>$cvCode
        );
         else:
            $user1['Invitation_code'] = $icode; 
          endif;
          
          if(self::insert('user1',$user1))
          { 
              if($info === NULL):
                   $user_id = $this->db->insert_id();
          $card['user_id'] = $user_id;
          self::insert('card',$card);
              endif;
             
          return true;
          }
          
    }
    
    
        function registerLandscaper($data,$info=NULL) {
        extract($data);
        
         $user1 = array(
            'first_name'=>$firstname,
            'last_name'=>$lastname,
             'email'=>$youremail,
            'password'=>$password,
             'user_type'=>'landscaper'
        );
        if($info===NULL):
            
             $user1 = array(
            'first_name'=>$firstname,
            'last_name'=>$lastname,
             'email'=>$youremail,
            'password'=>$password,
            'phone_number'=>$phone_number,
            'zip_code'=>$zip_code,
            'city'=>$city,
            'companyid' =>$companyid,
            'user_type'=>'landscaper'
             
        );
         
        else:
        $user1['Invitation_code'] = $icode; 
    endif; 
          
          
          if(self::insert('user1',$user1))
          { 
              
             
          return true;
          }
          
    }
}

