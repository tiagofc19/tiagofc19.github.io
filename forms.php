<?php
if(isset($_POST['NAME']) and isset($_POST['ADDRESS']) and isset($_POST['MESSAGE']))
{
    $name=$_POST['NAME'];
    $address=$_POST['ADDRESS'];
    $message=$_POST['MESSAGE'];

    $email_subject = "New Form submission";

    $email_body = "You have received a new message from the user $name.\n".
        "Here is the message:\n $message".

    $to = "tiagofc2000@gmail.com";

    $headers = "Reply-To: $address \r\n";


    if(mail($to,$email_subject,$email_body,$headers)) {

        echo 'Your mail has been sent successfully.';

    } else{

        echo 'Unable to send email. Please try again.';

    }
}
?>
