<?php

use GuzzleHttp\Client;
use OmDbApi\Exception\OmDbApiException;
use OmDbApi\OmDbApi;
use OmDbApi\Request\Request;

require '../vendor/autoload.php';

$client = new Client();
$api = new OmDbApi($client, 'http://www.omdbapi.com');

try {
    $request = new Request('GET', $api->getUrl());
    $request->setRequestByTitle('Transformers');
    $request->setYearOfRelease(2012);
    $request->setPlotToFull();

    $response = $api->send($request);

    var_dump($response);
} catch (OmDbApiException $exception) {
    echo $exception->getMessage();
}
