<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Model_email extends CI_Model {

	
	public function __construct() {
		parent::__construct();
	    $this->load->library('email'); // load email library

	}
	

	public function sendemail_gmail($email) {
	    
	    $this->email->from("no-reply@sample.com", "Sample Name"); 
	    $this->email->to("TO_EMAIL_ADDRESS");	// Change to the destinated email address. 
	    $this->email->subject("Email: Something about to be informed.");
	    

	   	// *********  Sending as html view
	    $mail_content = '
	    	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			</head>
			<body>
				<p>
					Hi... <br>
					Dear Babe, <br>
					It is send from codeigniter using gmail. <br>
				</p>
			</body>
			</html>
			';

		// ******* Sending as plain text
		// $mail_content = "Hi. This is sent from codeigniter using gamil."; 

	    $this->email->message("$mail_content");
	   	// *********** Attach File if any.
	   	// $this->email->attach('/path/to/sample_file1.jpeg');
	   	// $this->email->attach('/path/to/sample_file2.pdf');
	   	// $this->email->attach('/path/to/sample_file3.doc');

	    if ($this->email->send()) { return true; }
	    else { 	return false; }
	}


	

}