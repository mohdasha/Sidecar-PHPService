<?php
/**
 * @author Mohd Ashif Ali
 * @date(mm-dd-yyyy)	07-09-2017
 *  
 * @api Image URLs API	
 *  
 **/
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\ImageServiceModel;

use Illuminate\Support\Facades\DB;

class ImageServiceController extends Controller{

	/**
	 * @method void Default constructor
	 * 
	 **/
	public function __construct(){

	}
	/**
	 * Gets Product Image URLs
	 * 
	 * @param String $product_id Product Id to get Image URLs
	 * 
	 **/
	public function getProductImageUrls($product_id=null){
		$imageUrls = ImageServiceModel::where('catentryid',(int)$product_id)->get();
		if(count($imageUrls) > 0)
			return response()->json($imageUrls);
		else{
			return response()->json(['success' => 'false', 'message' => 'No Images found for given product id']);
		}
	}
}