<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Payments extends CI_Model{
    function getCustomerPayments($user_id){
        
        $this->db->select('invoice.*,subscription.*,payments.*,company.name as companyname');
       $this->db->from('invoice');
       $this->db->join('subscription', 'subscription.id = invoice.subscripition_id');
       $this->db->join('payments', 'payments.invoice_id = invoice.id  ');
        $this->db->join('company', 'subscription.company_id = company.id  ');
        $this->db->where(array('invoice.user_id'=>$user_id,'payments.pay_status '=>'0'));
     $data =   $this->db->get();
     return $data->result();
     
     
    }
}

