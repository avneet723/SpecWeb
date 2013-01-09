<?php

echo "PHP script initiated\n";

if(isset($_POST['user_name'])) {

  echo "Got inside if statement\n";
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "spectranslations@gmail.com";
     
    $email_subject = "Sign Up Form";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['user_name']) ||
        !isset($_POST['full_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['im_handle']) ||
        !isset($_POST['phone_num'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $user_name = $_POST['user_name']; // required
    $full_name = $_POST['full_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['phone_num']; // not required
    $im_handle = $_POST['im_handle']; // not required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$full_name)) {
    $error_message .= 'The Full Name you entered does not appear to be valid.<br />';
  }
    $string_exp1 = "/^[A-Za-z0-9.-]{1,}$/";
  if(!preg_match($string_exp1,$user_name)) {
    $error_message .= 'The username you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "User Name: ".clean_string($user_name)."\n";
    $email_message .= "Full Name: ".clean_string($full_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "IM Handle: ".clean_string($im_handle)."\n";
     
     echo "Email ready to be sent.";
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
echo "Form successfully submitted."; 
?>
 
<!-- place your own success html below -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
echo ".." + $_POST['email'] + "..empty";
die();
?>