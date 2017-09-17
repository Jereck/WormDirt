<?php
  if(isset($_POST['submit'])){
    $to = "wormdirt@wormdirtdevelopment.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Email from WormDirt Development";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];


    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To:" . $from . "\r\n";
    $headers .= "Organization: WormDirt Development\r\n";
    $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: http://wormdirtdevelopment.com/redirect.html");
  }
?>
