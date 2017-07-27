<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HealthMetricsController extends Controller{

	public function __construct(){

	}

	public function info(){
		return response()
		->json([
			'component' => 'PHP Service'
			]);
	}
	public function health(){
		$content = json_encode(array('status' => 'UP'));
		return response($content)
		->header('Content-type', 'application/json');
	}

	public function test(){
		return response()->json(['test' => 'Test Message']);
	}
}