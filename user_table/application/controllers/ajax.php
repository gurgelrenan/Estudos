<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Ajax extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Users_model', 'users');
            $this->load->library('form_validation');
        }
        
    function add()
	{
	    $this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[20]');
	    $this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[20]');
	    $this->form_validation->set_rules('dob', 'DoB', 'required|exact_length[10]');
	    $this->form_validation->set_rules('gender', 'Gender', 'required|exact_length[1]');
	    $this->form_validation->set_rules('email_address', 'Email address', 'required|valid_email|max_length[50]');
	 
	    if ($this->form_validation->run() != FALSE)
	    {    
	        $user = array(
	            'first_name'    =>  $this->input->post('first_name'),
	            'last_name'     =>  $this->input->post('last_name'),
	            'dob'           =>  $this->input->post('dob'),
	            'gender'        =>  $this->input->post('gender'),
	            'email_address' =>  $this->input->post('email_address')
	        );
	 
	        if ($add = $this->users->add($user))
	        {
	            $data['users'] = $this->users->get($add);
	            $row_html = $this->load->view('table_rows.php', $data, true);
	 
	            $return = array(
	                'status'    =>      'success',
	                'message'   =>      $this->input->post('first_name').' '.$this->input->post('last_name').' has been
	                                    added!',
	                'html'      =>      $row_html
	 
	            );
	            echo json_encode($return);
	        }
	        else
	        {
	            $return = array(
	                'status'    =>      'failed',
	                'message'   =>      'Failed to add to the DB'
	            );
	            echo json_encode($return);
	        }
	 
	    }
	    else
	    {
	        $return = array(
	            'status'    =>      'failed',
	            'message'   =>      validation_errors('', '&lt;br>')
	        );
	        echo json_encode($return);
	    }
	}
	
    function update()
	{
	    $this->form_validation->set_rules('id', 'User ID', 'required|is_natural_no_zero');
	    $this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[20]');
	    $this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[20]');
	    $this->form_validation->set_rules('dob', 'DoB', 'required|exact_length[10]');
	    $this->form_validation->set_rules('gender', 'Gender', 'required|exact_length[1]');
	    $this->form_validation->set_rules('email_address', 'Email address', 'required|valid_email|max_length[50]');
	 
	    if ($this->form_validation->run() != FALSE)
	    {
	        $user = array(
	            'first_name'    =>  $this->input->post('first_name'),
	            'last_name'     =>  $this->input->post('last_name'),
	            'dob'           =>  $this->input->post('dob'),
	            'gender'        =>  $this->input->post('gender'),
	            'email_address' =>  $this->input->post('email_address')
	        );
	 
	        if ($this->users->update($user, $this->input->post('id')) !== FALSE)
	        {
	            $data['users'] = $this->users->get($this->input->post('id'));
	 
	            $row_html = $this->load->view('table_rows.php', $data, true);
	 
	            $return = array(
	                'status'    =>      'success',
	                'message'   =>      $this->input->post('first_name').' '.$this->input->post('last_name').' has been
	                                    updated!',
	                'html'      =>      $row_html
	            );
	            echo json_encode($return);
	 
	        }
	        else
	        {
	            $return = array(
	                'status'    =>      'failed',
	                'message'   =>      'Failed to update User ID #'.$this->input->post('id')
	            );
	            echo json_encode($return);
	        }
	    }
	    else
	    {
	        $return = array(
	 
	            'status'    =>      'failed',
	            'message'   =>      validation_errors('', '&lt;br>')
	 
	        );
	        echo json_encode($return);
	    }
	}
	
    function delete()
	{
	    $this->form_validation->set_rules('id', 'User ID', 'required|is_natural_no_zero');
	 
	    if ($this->form_validation->run() != FALSE)
	    {
	        if ($this->users->delete($this->input->post('id')))
	        {
	            $return = array(
	                'status'    =>      'success',
	                'message'   =>      'The user has been deleted!'
	            );
	            echo json_encode($return);
	        }
	        else
	        {
	            $return = array(
	                'status'    =>      'failed',
	                'message'   =>      'Failed to delete User ID #'.$this->input->post('id')
	            );
	            echo json_encode($return);
	        }
	    }
	    else
	    {
	        $return = array(
	            'status'    =>      'failed',
	            'message'   =>      validation_errors('', '&lt;br>')
	        );
	        echo json_encode($return);
	    }
	}
	
}
    