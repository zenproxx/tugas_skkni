<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Home extends CI_Controller {

    public function __construct()

    {

        parent::__construct();

    }

 

    public function index()

    {

		$data['title'] = 'Home ― Indonesia Motivator';

        $this->template->load('template_home','home',$data);

    }

    

    }