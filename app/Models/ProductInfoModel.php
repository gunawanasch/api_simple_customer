<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class ProductInfoModel extends Model {
	
	public function getAllProductInfo() {
		$result = DB::table("product_info")
		    ->select("id_product_info", "name", "product_type", "price")
		    ->get();

		return $result;
	}

	public function getProductInfoById($id_product_info) {
		$result = DB::table("product_info")
		    ->where("id_product_info", "=", $id_product_info)
		    ->first();

		return $result;
	}
}