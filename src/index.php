<?php

use OpenSwoole\Http\Request;
use OpenSwoole\Http\Response;
use OpenSwoole\Http\Server;

$server = new Server('0.0.0.0', 8080);

$server->on('start', function (Server $server) {
    echo 'OpenSwoole http server started at http://0.0.0.0:8081' . PHP_EOL;
});

$server->on('request', function (Request $request, Response $response) {
    $path = $request->server['request_uri'];

    $response->header('Content-Type', 'text/html');
    $response->end('Hello world.');
});

$server->start();
