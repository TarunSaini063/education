<?php
  class PHP_Email_Form{
  public $to;
  public $mMessage;
  public $from_name;
  public $from_email;
  public $subject;

    function add_message($message) {
      global $mMessage;
      $mMessage=$message."\r\n";
    }

    function send(){
      global $from_name;
      global $from_email;
      global $mMessage;
      global $subject;
      global $to;

      $headers = "From: ".$from_name." <".$from_email."> \r\n";
      if(mail($to,$subject,$mMessage,$headers)){
        echo 'OK';
      } else {
        echo "Please check your internet connection";
      }
    }
  }
?>
