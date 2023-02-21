<?php
$url = "https://my.ithinklogistics.com/api_v3/rate/check.json";
$data = array(
    "data" => array(
        "from_pincode" =>'560078' ,
        "to_pincode" => '335001',
        "shipping_length_cms" =>'12',
        "shipping_width_cms" => '8',
        "shipping_height_cms" => '2',
        "shipping_weight_kg" =>'0.5',
        "order_type" => 'forward',
        "payment_method" => 'prepaid',
        "product_mrp" => '85',
        "access_token" => 'bdf8a98e100c3df26ef69290849639d0',
        "secret_key" =>'f6a4123ac76bbd4f10dd296f03c0d047'
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
echo "$result";
?>
