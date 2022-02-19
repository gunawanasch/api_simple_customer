<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class CustomerInfoModel extends Model {
	
	public function getAllCustomerInfo() {
		$result = DB::table("customer_info")
		    ->select("id_customer_info", "name", "phone")
		    ->get();

		return $result;
	}

	public function getCustomerInfoById($id_customer_info) {
		$result = DB::table("customer_info")
		    ->where("id_customer_info", "=", $id_customer_info)
		    ->first();

		return $result;
	}
}