<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/gists/501737940097fecc2f181daa04a68212",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "berain-uvic"
]);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

// foreach ($data as $gist) {

//     echo $gist["id"], " - ", $gist["description"], "\n";

// }
