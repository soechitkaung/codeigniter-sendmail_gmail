<?php

    // Config for Email Sending. 

	$config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com'; 
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'sampletestaccount@gmail.com';   //change this
    $config['smtp_pass'] = 'test@123';                      //change this
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n"; 


?>