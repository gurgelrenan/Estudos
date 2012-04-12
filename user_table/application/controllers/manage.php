<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Manage extends CI_Controller
    {
 
        function index()
        {
            $this->load->model('Users_model', 'users');
            $users = $this->users->get();
            
            $data['users'] = $users;
            
            $this->load->view('manage', $data);
        }
 
    }
