<?php
/* 
 * LEAM srl
 * API v2 - Example code
 * 
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * Author: Gabriele Marazzi - gabriele.marazzi@gmail.com
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * 
 * Get single stock information
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * use this method to request information about one single item.
 * Is required to know and send in the GET the stock_id reference
 */

$URI_base = "http://127.0.0.1/modules/api/v2/";
$RESOURCE = "stock/id/W01590158/";
$TOKEN = "x7e745fa910";

$url = $URI_base . $RESOURCE . "?t=" . $TOKEN;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;