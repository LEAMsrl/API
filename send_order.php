<?php
/* 
 * LEAM srl
 * API v2 - Example code
 * 
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * Author: Gabriele Marazzi - gabriele.marazzi@gmail.com
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * 
 * Send an order
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * use this method to send a purchising order to leam store
 * Is required to send the information about
 * items list in JSON format, an array named "item"
 * with a list of row. Each row must have the 
 * a "stock_id" field with the format: "stockid-sizename" 
 * and a "qty" field with the quantity.
 * 
 */


$URI_base = "http://127.0.0.1/modules/api/v2/";
$RESOURCE = "order/";
$TOKEN = "x7e745fa910";

$url = $URI_base . $RESOURCE . "?t=" . $TOKEN;


$data = array(
    'comments'=>'Comments for the order',
    'items'=>array(
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