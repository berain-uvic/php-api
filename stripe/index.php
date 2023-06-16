<?php

require __DIR__ . "/vendor/autoload.php";

$ini_array = parse_ini_file("../config.ini");

$client = new GuzzleHttp\Client();

$response = $client->request("GET", "https://api.github.com/user/repos", [
    "headers" => [
        "Authorization" => "token " . $ini_array["GITLAB_TOKEN"],
        "User-Agent" => $ini_array["GITLAB_USER_AGENT"],
    ]
]);

echo $response->getStatusCode(), "\n";

echo $response->getHeader("content-type")[0], "\n";

echo substr($response->getBody(), 0, 200), "...\n";
