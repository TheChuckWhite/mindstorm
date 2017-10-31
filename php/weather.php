<?php
$BASE_URL = "http://query.yahooapis.com/v1/public/yql";
$yql_query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="emmen, nl")';
$yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";

// Make call with cURL
$session = curl_init($yql_query_url);
curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
$json = curl_exec($session);

// Convert JSON to PHP object
$phpObj =  json_decode($json);
//var_dump($phpObj);
$forecast = $phpObj->query->results->channel->item->forecast;

$today = $forecast[0];
$todayCode = $forecast[0]->code;

//Get average temperature
$high = round(($today->high - 32) / 1.8);
$low = round(($today->low - 32) / 1.8);
$temperature = ($high + $low) / 2;

//Get the correct Image according to weather that day
$codes = array(
    "rain" => [0, 1, 2, 5, 6, 8, 9, 10, 11, 12, 16, 17, 35, 40],
    "cloudy" => [18,19,20,21,22,23,24,25,26,27,28,29,30,44],
    "snow" => [7,13,14,15,16,41,42,43,46],
    "thunder" => [3,4,37,38,39,45,47],
    "sunny" => [31,33,34,36,3200]
);

$weatherString = "";
foreach ($codes as $keycode => $weatherCodes){
    foreach($weatherCodes as $code){
        if($code == $todayCode){
            $weatherString = $keycode;
            break 2;
        }
    }
}
?>