<?php
$url = "https://my.ithinklogistics.com/api_v3/rate/check.json";
$data = array(
    "data" => array(
        "from_pincode" => $_GET['from_pincode'],
        "to_pincode" => $_GET['to_pincode'],
        "shipping_length_cms" => $_GET['shipping_length_cms'],
        "shipping_width_cms" => $_GET['shipping_width_cms'],
        "shipping_height_cms" => $_GET['shipping_height_cms'],
        "shipping_weight_kg" => $_GET['shipping_weight_kg'],
        "order_type" => $_GET['order_type'],
        "payment_method" => $_GET['payment_method'],
        "product_mrp" => $_GET['product_mrp'],
        "access_token" => $_GET['access_token'],
        "secret_key" => $_GET['secret_key']
    )
);
$options = array(
    "http" => array(
        "header" => "Content-type: application/json\r\n",
        "method" => "POST",
        "content" => json_encode($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo $result;
?>
