<?php

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");



 // $to = "vicky@treestack.tech,kishan@dishq.in,sai.sreenivas@dishq.in ";
    $from = "vicky@treestack.tech";
    $subject = "Got a Demo request";
    $message ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
     <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Dishq Demo Email</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <style>
      @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500");

      body,p,h1,h2,h3,h4,h5,h6, a, span{
      font-family: "Roboto", sans-serif;
      color: #6b7a8c;

      }
      body{
        background: #f6f5fb;
        padding: 20px 0px;
      }
      .w-email{
        width: 600px;
        margin: auto;
        background: white;
        margin: 10px auto;
        box-shadow: 0px 0px 15px #e4e4e4;
        border-radius: 10px;
      }

      .green-header{
        color:#8ac561;
        letter-spacing: 1px;
      }

      .im-bg{
        margin: 30px 0px;
        height: 150px;
        text-align: center;
        padding: 7px 0px;
        background-image: url("http://dishq.in/images/email/background.png");
      }
      .main{
        color:white;
      }
      .content{
        line-height: 1.8em;
      }
      .demo-button{
        background: white;
        padding: 10px 40px;
        box-shadow: 0px 0px 15px #76a14e;
        border-radius: 3px;
        transition: 0.5s;
        margin-top:5px;
      }

      .demo-button:hover{
        box-shadow: 0px 0px 35px #5e813c;

      }
      .link{
        color: #7ab9ff;
        text-decoration: underline;
      }
      .left-list {
          padding-left: 0;
          list-style: none;
          text-align: center;
      }
      .left-list>li {
          display: inline;
          padding: 5px;
          color: #c4c9d0;
      }
      .left-list>li>a {
        color: #c4c9d0;
      }

      .left-list>li>a:hover{
        color: #6b7a8c;
      }
      .unsub{
        font-weight: 300;
        font-size: 12px;
        color: #9ca8ae;
        text-align: center;
        margin: auto;
      }

      </style>
    </head>
    </html>
    <body style="margin: 0; padding: 0;">
      <div class="w-email" style="  width: 600px;margin: auto;background: white;margin: 10px auto;box-shadow: 0px 0px 15px #e4e4e4;border-radius: 10px;">
      <table align="center"  cellpadding="0" cellspacing="0" width="80%">
     <tr>
       <td align="center"  style="padding: 20px 0 0px 0;">
      <img src="http://dishq.in/images/email/logogreen.png" alt="Logo" width="150" height="60" style="display: block;" />
      <hr style=" border-top: 1px solid #eee;width:80%">
     </td>
     </tr>
     <tr>
      <td bgcolor="#ffffff">
       <h2 class="green-header"> Hello !</h2>
       <p class="content"> We are glad to have you onboard.<br/>
         The wait is over and you are all set to view the demo.
       </p>
         <div class="im-bg" style="background-image: url(http://dishq.in/images/email/background.png);">
           <h1 class="main">Lets get started!</h1>
           <a class="btn demo-button" href=""> View demo </a>
         </div>
         <p class="content">If you have any issue starting the demo, plese email us on.<br/>
           <a href="mailto:help@dishq.in?Subject=Demo%20issue" class="link"> help@dishq.in</a>
         </p>
           <p class="content">Thanks,</p>
             <p class="content" style="margin-top:10px;">
             - Team <span style="color:#8ac651">dishq</span>
           </p>
           <hr style=" border-top: 1px solid #eee;width:100%">
      </td>
     </tr>
     <tr>
      <td >
        <p class="text-center">
          <ul class="left-list">
                <li>
                    <a href="https://www.facebook.com/dishqit" target="_blank" class="white"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/dishq" target="_blank" class="white"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/dishqit/" target="_blank" class="white"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/dishqit" target="_blank" class="white"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                </li>
                </ul>
              </p>
              <p class="text-center unsub">If youd like to unsubscribe and stop receiving these mails <a class="link" href=""> click here</a></p><br/>
      </td>
     </tr>
    </table>
    </div>
    </body>

    ';




   //end of message
   $headers  = "From: $from\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Bcc:sohail@treestack.tech \r\n";

     mail('vicky@treestack.tech',$subject , $message, $headers);



?>
