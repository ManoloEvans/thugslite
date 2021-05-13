<?php
    $errors = '';
    $myemail = 'jln26@brighton.ac.uk';//<-----Put Your email address here.
    if(empty($_form['name'])  ||
       empty($_form['email']) ||
       empty($_form['message']))
    {
        $errors .= "\n Error: all fields are required";
    }
    $name = $_form['name'];
    $email_address = $_form['email'];
    $message = $_form['message'];
    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
    
    if( empty($errors))
    {
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Name: $name \n ".
    "Email: $email_address\n Message \n $message";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    }
    ?>