<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Search extends CI_Controller {

    public function __construct()

    {

        parent::__construct();

    }

 

    public function index()

    {

	$data['title'] = 'Search ― Indonesia Motivator';

        $this->template->load('template_home','search',$data);

    }

    

    }