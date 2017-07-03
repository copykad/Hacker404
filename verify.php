<?php
$access_token = 'jMYoqtQhvLLDUSEsctfBSAlMChPobu6BHfne0Hz1vKn/ELCNDnI8j8HdkEwM9ObvIVAXW791XLlQylQkWrCWnbC2LnQQD7T03ut+L6AwZ8BRohazLMEDVvj8ebus/M+sECOCG9ctQjX4Xh0VfOhk3QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;?>
