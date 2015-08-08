<?php
/* 
 * LEAM srl
 * API v2 - Example code
 * 
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * Author: Gabriele Marazzi - gabriele.marazzi@gmail.com
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * 
 * Get the stock
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * use this method to request information about all item.
 */

$URI_base = "http://127.0.0.1/modules/api/v2/";
$RESOURCE = "stock/";
$TOKEN = "x7e745fa910";

$url = $URI_base . $RESOURCE . "?t=" . $TOKEN;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;