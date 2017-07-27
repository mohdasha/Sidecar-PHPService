<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

// Health Metric for SideCar Access
$app->get('/health', 'HealthMetricsController@health');

$app->get('/info', 'HealthMetricsController@info');

// Test Endpoint for sidecar
$app->get('/test', 'HealthMetricsController@test');

// Image Service Endpoint
$app->get('/api/getImage/{product_id}', 'ImageServiceController@getProductImageUrls');