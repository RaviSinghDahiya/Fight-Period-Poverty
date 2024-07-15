<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $email      = $_POST['email'];
    $message    = $_POST['message'];
    $name       = $_POST['first_name'];


    $to = "info@innoventinc.com";


    $subject = "New Form Submission";

    $headers = "From: info@innoventinc.com";


     $headers .= "MIME-Version: New Form Submission Fight Period Poverty" . "\r\n";

       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $email_message ="<html><head></head><body><table>".

                   "<tr><td>Name: </td> " .
                   " <td>".$name.
                   "</td></tr>".

                   "<tr><td>Email: </td> " .
                   " <td>".$email.
                   "</td></tr>".

                    "<tr><td>Message: </td> " .
                   " <td>".$message.
                   "</td></tr>".

                   "</table></body></html>";


    if (mail($to, $subject, $email_message, $headers)) {

        header('Location: https://fightperiodpoverty.org/thank-you.html');
        die();

    } else {

        echo "Error sending email. Please try again later.";

    }

}

?>