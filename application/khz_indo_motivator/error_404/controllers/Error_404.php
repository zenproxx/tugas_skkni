<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Error_404 extends CI_Controller {

    public function __construct()

    {

        parent::__construct();

    }

 

    public function index()

    {

	$data['title'] = 'Error 404';

        $this->template->load('template_home','error_404',$data);

    }

    

    }