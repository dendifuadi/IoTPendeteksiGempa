<?php
$access_token = 'p5OMSJ/W/C9aVPtU9eZZAbib5gCN/7xKqoHTE+Puqjw1FA5DJiWSti/z3NI2fOlv1vs4TORz+BknJmbcDawFRUGkq3bw03cRi45XVnPjhM9/D7YFgiRD4LXV4+BBEUdwQhV7Zt4d8W4tGUWcCkAFkAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
