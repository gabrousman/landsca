<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signup
 *
 * @author akhtar
 */
class signup extends CI_Controller {

    public function index($type = null) {
        if (strtolower($type) === 'landscaper'):
            $this->load->view('lsignup');
        else:
            $this->load->view('csignup');
        endif;
    }

    public function register($type = null, $info = NULL) {
        if ($type === 'landscaper'):
            self::landscaperRegister($info);
        else:
            self::customerRegister($info);
        endif;
    }

    public function customerRegister($info = NULL) {

        $this->form_validation->set_rules('customer[firstname]', 'First Name', 'required|alpha_numeric');
        $this->form_validation->set_rules('customer[lastname]', 'Last Name', 'alpha_numeric');
        $this->form_validation->set_rules('customer[youremail]', 'E-MAIL', 'required|valid_email');
        $this->form_validation->set_rules('customer[password]', 'Password', 'required|min_length[6]');

        if ($info === NULL):
            //   $this->form_validation->set_rules('customer[reenteremail]', 'Confirm Email', 'matches[customer[youremail]]');
            $this->form_validation->set_rules('customer[phone_number]', 'Phone Number', 'required|numeric');
            $this->form_validation->set_rules('customer[zip_code]', 'Zip Code', 'required');
            $this->form_validation->set_rules('customer[creditcard]', 'Credit Card', 'required|integer|max_length[19]|min_length[12]');
            $this->form_validation->set_rules('customer[expMonth]', 'EXPIRATION Month', 'required|integer');
            $this->form_validation->set_rules('customer[expYear]', 'EXPIRATION Year', 'required|exact_length[2]|integer');
            $this->form_validation->set_rules('customer[expYear]', 'EXPIRATION Year', 'required|exact_length[2]|integer');
            $this->form_validation->set_rules('customer[cvCode]', 'CV', 'integer|exact_length[3]');
//$this->form_validation->set_rules('customer[dob_month]', '"Email address"', 'callback_validate_select');
//$this->form_validation->set_rules('customer[dob_day]', '"Email address"', 'callback_validate_select');
//$this->form_validation->set_message('validate_select','Select Other option then default in the dropdwon');
        else:
            $this->form_validation->set_rules('customer[icode]', 'Invitation Code', 'required');
        endif;

        if ($this->form_validation->run() == FALSE) {
            if ($info === null) {
                $this->load->view('csignup');
            } else {
                $data['signup'] = 'yes';
                $this->load->view('clogin', $data);
            }
        } else {
            $customer = $this->input->post('customer');
            extract($customer);
            if ($this->crud->numRow('user1', '*', array('email' => $youremail)) > 0):
                $data['emailExsist'] = 'yes';
                if ($info === null) {
                    $this->load->view('csignup', $data);
                } else {
                    $data['signup'] = 'yes';
                    $this->load->view('clogin', $data);
                }
            else:
                $customer = $this->input->post('customer');
                if ($this->crud->registerCustomer($customer, $info)):
                    $data['email'] = $this->input->post('youremail');
                    $data['password'] = $this->input->post('password');
                    $this->common->setSessionDataCustomer($data);
                endif;
            endif;
        }
    }

    function validate_select($str) {
        if ($str == -1):
            return FALSE;
        else:
            return TRUE;
        endif;
    }

    function landscaperRegister($info = NULL) {
        $this->form_validation->set_rules('landscaper[firstname]', 'First Name', 'required|alpha_numeric');
        $this->form_validation->set_rules('landscaper[lastname]', 'Last Name', 'alpha_numeric');
        $this->form_validation->set_rules('landscaper[youremail]', 'E-MAIL', 'required|valid_email');
        $this->form_validation->set_rules('landscaper[password]', 'Password', 'required|min_length[6]');

        if ($info === NULL):
            $this->form_validation->set_rules('landscaper[phone_number]', 'Phone Number', 'required|numeric');
            $this->form_validation->set_rules('landscaper[zip_code]', 'Zip Code', 'required');
            $this->form_validation->set_rules('landscaper[city]', 'Credit Card', 'required');
            $this->form_validation->set_rules('landscaper[companyid]', 'EXPIRATION Month', 'required');
        else:
        $this->form_validation->set_rules('landscaper[icode]', 'Invitation Code', 'required');
        endif;

        if ($this->form_validation->run() == FALSE) {
            if ($info === null) {
                $this->load->view('lsignup');
            } else {
                $data['signup'] = 'yes';
                $this->load->view('llogin', $data);
            }
        } else {
            $customer = $this->input->post('landscaper');
            extract($customer);
            if ($this->crud->numRow('user1', '*', array('email' => $youremail)) > 0):
                $data['emailExsist'] = 'yes';
                if ($info === null) {
                    $this->load->view('lsignup', $data);
                } else {
                    $data['signup'] = 'yes';
                    $this->load->view('llogin', $data);
                }
            else:
                $customer = $this->input->post('landscaper');
                if ($this->crud->registerLandscaper($customer, $info)):
                    $data['email'] = $this->input->post('youremail');
                    $data['password'] = $this->input->post('password');
                    $this->common->setSessionDataCustomer($data,'landscaper');
                endif;
            endif;
        }
    }

}
