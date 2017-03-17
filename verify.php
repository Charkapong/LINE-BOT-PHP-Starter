<?php
$access_token = 'lwm3y2+EzxWTXxa2KEK/zj2lwqxHqtGJvnIlwgaaOhlwW1MqXvw+ph1+j4G49QszXD+BS2Q+l6V8cl4ZW2jTDcA26AiYVw/BnGCI9WKg2MyL7znYWVC3tVpqZJ1rbsl2T75V0Mour7UJy+KAkpxtcQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
