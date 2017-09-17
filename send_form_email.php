<?php
if(isset($_POST['submit'])){
    $to = "wormdirtdevelopment@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];


    $headers = "From:" . $from;
    $headers .= "Reply-To:" . $from;
    $headers .= "CC: jakereck@gmail.com\r\n"

    mail($to,$subject,$message,$headers);

    header("Location: http://wormdirtdevelopment.com/redirect.html");
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
