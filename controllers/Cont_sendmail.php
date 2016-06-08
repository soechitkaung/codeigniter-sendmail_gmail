<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont_sendmail extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	    $this->load->library('email');
	    $this->load->model('Model_email');
	}

	public function index()
	{
		$email = "DESTINATED_EMAIL_ADDRESS" // Email Address that you would like to send to. 

		// It is best pratice to put email sending process in model. 
		// So that it can be used by different controllers.

		if ($this->Model_utility->sendemail_gmail($email)) { echo "Email Send Success";  } 
		else { echo "Email Send Fail"; }
	}

}
