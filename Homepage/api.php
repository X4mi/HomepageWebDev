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
    function getUserData($name, $choice) {
    $name = str_replace(" ", "+", $name);
    $url = 'https://apps.runescape.com/runemetrics/profile/profile?user='.$name;
    $get_data = callAPI('GET', $url);
    $response = json_decode($get_data, true);
    echo '<p id="120stats" style="display: none" choice='.$choice.'>'.json_encode($response).'</p>';
    }
?>