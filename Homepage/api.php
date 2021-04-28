<?php 
    function callAPI($method, $url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
    }
    function getUserData($name) {
    $url = 'https://apps.runescape.com/runemetrics/profile/profile?user=';
    $url .= $name;
    $get_data = callAPI('GET', $url);
    $response = json_decode($get_data, true);
    echo json_encode($response);
    }
?>