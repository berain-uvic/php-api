<?php

$ini_array = parse_ini_file("../config.ini");

$ch = curl_init();

$headers = [
    "Authorization: token " . $ini_array["GITLAB_TOKEN"],
    "User-Agent: " . $ini_array["GITLAB_USER_AGENT"]
];

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => $headers,
    CURLOPT_CUSTOMREQUEST => "PUT"
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";
