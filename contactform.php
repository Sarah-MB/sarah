<?php
  if (isset ($_POST['submit'])){
  $name = $_POST['name'];
  $mailfrom = $_POST['mail'];
  $title = $_POST['title'];
  $message = $_POST['message'];
  
  
  $mailTo = "sarahembee71@gmail.com";
  $header = "From:".$mailform";
  $txt = "email received from".$name.".\n\n".$message;
  
  mail($mailTo,$message,$txt,$header);
  header("location:contactform.php?mailsend");
  
   }
   
   ?>