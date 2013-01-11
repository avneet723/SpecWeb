<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "spectranslations@gmail.com";
     
    $email_subject = "File Upload Form";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['company_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['notes'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $full_name = $_POST['full_name']; // required
    $company_name = $_POST['company_name']; // required
    $email_from = $_POST['email']; // required
    $notes = $_POST['notes']; // not required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$full_name)) {
    $error_message .= 'The Full Name you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }

// PHP checking for the file (Still NOT FINISHED)
    $allowedExts = array("doc", "docx", "pdf", "xls", "xlsx", "xml", "jpeg");
  $extension = end(explode(".", $_FILES["file"]["name"]));
  if ((($_FILES["file"]["type"] == "file/doc")
  || ($_FILES["file"]["type"] == "file/docx")
  || ($_FILES["file"]["type"] == "file/pdf")
  || ($_FILES["file"]["type"] == "file/xlsx")
  || ($_FILES["file"]["type"] == "image/jpg"))
  && ($_FILES["file"]["size"] < 2000000) // 20MB
  && in_array($extension, $allowedExts))
    {
    if ($_FILES["file"]["error"] > 0)
      {
      echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
      }
    else
      {
      echo "Upload: " . $_FILES["file"]["name"] . "<br>";
      echo "Type: " . $_FILES["file"]["type"] . "<br>";
      echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
      echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

      if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
        echo $_FILES["file"]["name"] . " already exists. ";
        }
      else
        {
        move_uploaded_file($_FILES["file"]["tmp_name"],
        "upload/" . $_FILES["file"]["name"]);
        echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        }
      }
    }
  else
    {
    echo "Invalid file";
    }


// Finally generating the email message to be sent after the file is uploaded. 
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Full Name: ".clean_string($full_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
echo "Form successfully submitted."; 
?>
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>File Submitted</title>
<meta http-equiv="REFRESH" content="5;url=http://spectranslation.azurewebsites.net/"></HEAD>
<BODY>
Your file has been successfully submitted. We will get back to you soon! <br><br>
You will now be redirected to the home page.
</BODY>
</HTML>
<?php
}
die();
?>