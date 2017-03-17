<?php
$access_token = 'fkHjePJPAl3OkkwnQDWuaXEe9VG2WbtS9AP4kugRPFNrIqf3VkUzoCxX1HVSVZ/GXD+BS2Q+l6V8cl4ZW2jTDcA26AiYVw/BnGCI9WKg2MzgSkCnAqajbk+SA+MJk3+bGj4Tapwi4aSLSw1ZxBvifgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
