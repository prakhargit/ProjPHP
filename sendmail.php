<?php
 require_once "Mail.php";
 
 $from = "Prakhar|Safe<psafesecuriverifyscr2265@gmail.com>";
 $to = $_POST['to'];
 $subject ="INVITE";
 $body = "HI! I JUST JOUINED PRAKHARSAFE.ITS A FREE SECURE ONLINE LOCKER AND THOUGHT OF RECCOMENDING IT TO YOU.JOIN HERE 'www.link.com";
 
 $host = "smtp.gmail.com";
 //smtp.gmail.com
 $username ="psafesecuriverifyscr2265@gmail.com";
 $password = "smtppassword";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
  header('location:pkhaikya.htm');
 ?>