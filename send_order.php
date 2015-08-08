<?php

/* 
 * LEAM srl
 * API v2 - Example code
 */

$URI_base = "http://localhost/leam/frontaccounting/modules/api/v2/";
$RESOURCE = "order/";
$TOKEN = "x7e745fa910";

$url = $URI_base . $RESOURCE . "?t=" . $TOKEN;


$data = array(
    'comments'=>'Comments for the order',
    'item'=>array(
            array('stock_id'=>'W01590158-36','qty'=>'1'),
            array('stock_id'=>'W01590158-38','qty'=>'1'),
            array('stock_id'=>'W01590158-40','qty'=>'1')
        )
    );
$data_json = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);

echo $response;