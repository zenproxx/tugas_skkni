<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Category extends CI_Controller {

    public function __construct()

    {

        parent::__construct();

    }

 

    public function index()

    {

		$data['title'] = 'Category ― Indonesia Motivator';

        $this->template->load('template_home','category',$data);

    }

    

    }