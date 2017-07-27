<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ImageServiceModel extends Eloquent {
	
	protected $connection = 'mongodb';
	protected $collection = 'imageService';
}