<?php
  $emailTo="akbgunner4ever@gmail.com"
    $subject="I hope you recieved this message";
    $body="I think you, Akshay B are the best. Keep rocking :)";
     $headers="From: akshayb@akshaybalakrishnantest.com";
    if(mail($emailTo,$subject,$body,$headers))
      echo "Email was successfully sent!";
    else 
       echo "mail was not sent";
?>


