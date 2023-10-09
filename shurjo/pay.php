<?php

  require_once 'shurjoPay.php';

  // Merchant Return URL
  $return_url = 'http://sslcommerzphp.local:10089/shurjo/return.php';
  $cancel_url = 'http://sslcommerzphp.local:10089/shurjo/fail.php';


  $amount = (float) $_GET['payment_amount'];
  $spObject = new shurjoPay();

  $payload = array(

      'currency' => 'BDT',
      'return_url' => $return_url,
      'cancel_url' => $cancel_url,
      'amount' => $amount,                
      // Order information
      'prefix' => 'PPC',
      'order_id' => 'PPC'.uniqid(),
      'discsount_amount' => 0,
      'disc_percent' => 0,
      // Customer information
      'client_ip' => '127.0.0.1',                
      'customer_name' =>  isset($_GET['customer_name']) ? $_GET['customer_name'] : "John Doe",
      'customer_phone' => isset($_GET['phone']) ? $_GET['phone'] : "01711111111",
      'email' => isset($_GET['customer_email']) ? $_GET['customer_email'] : "john.doe@email.com",
      'customer_address' => 'Dhaka',                
      'customer_city' => 'Dhaka',
      'customer_state' => 'Dhaka',
      'customer_GETcode' => '1207',
      'customer_country' => 'Bangladesh',
      'value1' => $_GET['ticketid'],
      'value2' => 'value2',
      'value3' => 'value3',
      'value4' => 'value4'
  );

  // var_dump($payload);exit;

  $spObject->generate_shurjopay_form($payload);


?>