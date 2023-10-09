<?php

  require_once 'shurjoPay.php';
  $spObject = new shurjoPay();
  $response_data = (object) array('Status'=>'No data found');

  if($_REQUEST['order_id'])
  {
      $order_id = trim($_REQUEST['order_id']);
      $response_data = json_decode($spObject->decrypt_and_validate($order_id));


      if ($response_data[0]->sp_message === "Success") {

        header("Location: /success.php");
        die();
        
      } else {
        header("Location: /fail.php");
        die();
      }
  }

  


?>