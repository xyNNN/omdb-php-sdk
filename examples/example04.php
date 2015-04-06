<?php

use GuzzleHttp\Client;
use OmDbApi\Exception\OmDbApiException;
use OmDbApi\OmDbApi;
use OmDbApi\Request\RequestBySearchFactory;

require '../vendor/autoload.php';

$client = new Client();
$api = new OmDbApi($client, 'http://www.omdbapi.com');

try {
    $request = RequestBySearchFactory::create($api, 'Harry Potter', array());
    $response = $api->send($request);

    var_dump($response);
} catch (OmDbApiException $exception) {
    echo $exception->getMessage();
}
