<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'naveen1cooldude@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name". 
                    "User Email: $message". 
                        "user Message: $message";;

    $to = "naveenchoudhary.nc91@gmail.com";
    $headers = "from: $email_from \r\n";
    $headers .= "Replay-To: $visitor_email \r\n";
    
    mail($to, $email_subject, $email_body, $headers);

    header("location: index.html");
?>