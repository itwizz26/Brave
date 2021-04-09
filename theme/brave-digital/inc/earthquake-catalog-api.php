<?php

// autoloader
require_once dirname(dirname(__FILE__)) . '\vendor\autoload.php';

use GuzzleHttp\Client;

// consume api
getEarthQuakeData();

function getEarthQuakeData() {
    // Create a client with a base URI
    $client = new GuzzleHttp\Client([
        'base_uri' => 'https://earthquake.usgs.gov/fdsnws/event/1/'
    ]);

    // get data map
    $end = date ('Y-m-d h:i');
    $start = date ('Y-m-d h:i', strtotime ('-1 hour'));

    $response = $client->request('GET', 'query?format=geojson&starttime=' . $date . '&endtime=' . $end);

    // return response
    header('Content-type: application/json');
    echo $response->getBody();
}
