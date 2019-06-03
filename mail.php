<!-- <?php
	
	/*
		The Send Mail php Script for Contact Form
		Server-side data validation is also added for good data validation.
	*/

	$url = 'https://api.sendgrid.com/';
 	$user = 'azure_38f4e2680c101092816fa7614446d293@azure.com';
 	$pass = 'Csjatre@3';
	
	$data['error'] = false;
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if( empty($name) ){
		$data['error'] = 'Please enter your name.';
	}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
		$data['error'] = 'Please enter a valid email address.';
	}else if( empty($subject) ){
		$data['error'] = 'Please enter your subject.';
	}else if( empty($message) ){
		$data['error'] = 'The message field is required!';
	}else{
		$params = array(
            'api_user' => $user,
            'api_key' => $pass,
            'to' => 'vpnaik97@gmail.com',
            'subject' => 'testing from curl',
            'html' => 'testing body',
            'text' => 'testing body',
            'from' => 'anna@contoso.com',
        );

        $request = $url.'api/mail.send.json';

        // Generate curl request
        $session = curl_init($request);

        // Tell curl to use HTTP POST
        curl_setopt ($session, CURLOPT_POST, true);

        // Tell curl that this is the body of the POST
        curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

        // Tell curl not to return headers, but do return the response
        curl_setopt($session, CURLOPT_HEADER, false);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // obtain response
        $response = curl_exec($session);
        curl_close($session);

        // print everything out
        print_r($response);
		
		$formcontent="From: $name\nSubject: $subject\nEmail: $email\nMessage: $message";
		
		
		//Place your Email Here
		$recipient = "vpnaik97@gmail.com";
		
		$mailheader = "From: $email \r\n";
		
		if( mail($recipient, $name, $formcontent, $mailheader) == false ){
			$data['error'] = 'Sorry, an error occured!';
		}else{
			$data['error'] = false;
		}
	
	}
	
	echo json_encode($data);
	
?>
 -->

<?php

 $url = 'https://api.sendgrid.com/';
 $user = 'azure_38f4e2680c101092816fa7614446d293@azure.com';
 $pass = 'Csjatre@3';

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'vpnaik97@gmail.com',
      'subject' => 'testing from curl',
      'html' => 'testing body',
      'text' => 'testing body',
      'from' => 'anna@contoso.com',
   );

 $request = $url.'api/mail.send.json';

 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

 // obtain response
 $response = curl_exec($session);
 curl_close($session);

 // print everything out
 print_r($response);
