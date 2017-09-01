<?php

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");


  $email = $_POST['email'];
 // $to = "vicky@treestack.tech,kishan@dishq.in,sai.sreenivas@dishq.in ";
    $from = "vicky@treestack.tech";
    $subject = "Got a Demo request";
    $message ="
<html>
  <body>
        <b style='text-align:center'>Request for a demo</b><br/>
        There has been a request for the demo please contact the email below <br/>
        Email: ".$email."
   ";

 $message .="</body></html>";

   //end of message
   $headers  = "From: $from\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Bcc:kishan@dishq.in,kishan@vasani.org \r\n";
    if(isset($_POST['email'])){
      mail('vicky@treestack.tech',$subject , $message, $headers);
       $myObj = new stdClass();

         $myObj->status = 200;
         $myObj->message = "  We appreciate you interest in us.
           <br/>dishq personal will contact you soon. Thank you.";
         $myJSON = json_encode($myObj);
         echo $myJSON;
    }




?>
