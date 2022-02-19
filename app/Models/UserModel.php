<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model {
	public $timestamps = false;
	protected $table = "user"; 

	public function login($email, $password) {
		$result = DB::table("user")
		    ->where("email", "=", $email)
		    ->where("password", "=", $password)
		    ->first();

		return $result;
	}

}