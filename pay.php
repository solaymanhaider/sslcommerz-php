<?php
require_once(__DIR__ . "/lib/SslCommerzNotification.php");

use SslCommerz\SslCommerzNotification;

if (isset($_GET['customer_name'])) { ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Wait...</title>
</head>
<body>
    
</body>
</html>
    
<?php
    # Organize the submitted/inputted data
    $post_data = array();

    $post_data['total_amount'] = $_GET['payment_amount'];
    $post_data['currency'] = "BDT";
    $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();

    # CUSTOMER INFORMATION
    $post_data['cus_name'] = isset($_GET['customer_name']) ? $_GET['customer_name'] : "John Doe";
    $post_data['cus_email'] = isset($_GET['customer_email']) ? $_GET['customer_email'] : "john.doe@email.com";
    $post_data['cus_add1'] = "Dhaka";
    $post_data['cus_add2'] = "Dhaka";
    $post_data['cus_city'] = "Dhaka";
    $post_data['cus_state'] = "Dhaka";
    $post_data['cus_postcode'] = "1000";
    $post_data['cus_country'] = "Bangladesh";
    $post_data['cus_phone'] = isset($_GET['phone']) ? $_GET['phone'] : "01711111111";
    $post_data['cus_fax'] = "01711111111";

    # SHIPMENT INFORMATION
    $post_data["shipping_method"] = "YES";
    $post_data['ship_name'] = "Store Test";
    $post_data['ship_add1'] = "Dhaka";
    $post_data['ship_add2'] = "Dhaka";
    $post_data['ship_city'] = "Dhaka";
    $post_data['ship_state'] = "Dhaka";
    $post_data['ship_postcode'] = "1000";
    $post_data['ship_phone'] = "";
    $post_data['ship_country'] = "Bangladesh";

    $post_data['emi_option'] = "0";
    $post_data["product_category"] = "Electronic";
    $post_data["product_profile"] = "general";
    $post_data["product_name"] = "Computer";
    $post_data["num_of_item"] = "1";

    // Init Payment
    $sslcomz = new SslCommerzNotification();
    $sslcomz->makePayment($post_data, 'hosted');

} else {
    echo "<h2>Access Denied</h2>";
}
?>