<?php

use GuzzleHttp\Client;
use OmDbApi\Exception\OmDbApiException;
use OmDbApi\OmDbApi;
use OmDbApi\Request\RequestByTitleFactory;

require '../vendor/autoload.php';

$client = new Client();
$api = new OmDbApi($client, 'http://www.omdbapi.com');

try {
    $request = RequestByTitleFactory::create($api, 'Batman', array());
    $response = $api->send($request);

    var_dump($response);
} catch (OmDbApiException $exception) {
    echo $exception->getMessage();
}
