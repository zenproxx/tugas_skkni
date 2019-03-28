<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
    public function index()
    {
        $data['title'] = 'Register ― Websample';
        $this->template->load('template_home','register', $data);
    }
}