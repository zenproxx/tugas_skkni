<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Blog extends CI_Controller {

    public function __construct()

    {

        parent::__construct();

    }

 

    public function index()

    {

	$data['title'] = 'Blog ― Indonesia Motivator';

        $this->template->load('template_home','blog',$data);

    }

    

    }