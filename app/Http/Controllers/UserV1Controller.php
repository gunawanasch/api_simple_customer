<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserV1Controller extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserModel $model) {
        $this->UserModel = $model;
    }

    public function register(Request $request) {
        $data               = new UserModel();
        $data->name         = $request->input("name");
        $data->email        = $request->input("email");
        $data->password     = md5($request->input("password"));
        $data->created_date = date("Y-m-d H:i:s");
        $data->save();

        return response()->json(["status" => 1, "message" => "Insert succeeded"]);
    }

    public function login(Request $request) {
        $email = $request->input("email");
        $password = $request->input("password");
        $data = $this->UserModel->login($email, md5($password));
        if (!empty($data)) {
            $result = [
                        "status"    => 1,
                        "message"   => "Login succeeded",
                        "id_user"   => $data->id_user,
                        "name"      => $data->name,
                        "email"     => $data->email
            ];
        } else {
            $result = [
                        "status"    => 0,
                        "message"   => "Login failed",
                        "id_user"   => 0,
                        "name"      => "",
                        "email"     => ""
            ];
        }

        return response($result);
    }

}