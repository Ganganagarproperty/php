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

$data_string = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);

echo $result;

?>
