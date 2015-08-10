<?php
/* 
 * LEAM srl
 * API v2 - Example code
 * 
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * Author: Gabriele Marazzi - gabriele.marazzi@gmail.com
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * 
 * Get Token
 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
 * use this method recover your access token
 * the token is used from other API method
 * and it is erequired.
 * 
 */


$URI_base = "http://127.0.0.1/modules/api/v2/";
$RESOURCE = "getToken/";

$url = $URI_base . $RESOURCE ;

$user = "xxx"; 
$password = "xxx"; 

$data = array('user'=>$user,'password'=>$password);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);

echo $response;