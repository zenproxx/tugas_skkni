<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class View extends CI_Controller {

    public function __construct()

    {

        parent::__construct();

    }

 
    public function index()
    {
        $data['title'] = 'Lorem Ipsum';
        $this->template->load('template_home','view', $data);
    }
}