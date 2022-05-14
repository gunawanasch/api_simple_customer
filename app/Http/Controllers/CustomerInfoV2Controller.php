<?php

namespace App\Http\Controllers;

use App\Models\CustomerInfoModel;
use Illuminate\Http\Request;

class CustomerInfoV2Controller extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CustomerInfoModel $model) {
        $this->CustomerInfoModel = $model;
    }

    public function getAllCustomerInfo() {
        $data = $this->CustomerInfoModel->getAllCustomerInfo();

        return response()->json([
            "status" => 1,
            "message" => "Succeded",
            "data_get_all_customer_info" => $data
        ]);
    }

    public function getCustomerInfoById(Request $request) {
        $id_customer_info = $request->input("id_customer_info");
        $data = $this->CustomerInfoModel->getCustomerInfoById($id_customer_info);

        return response()->json([
            "status" => 1,
            "message" => "Succeded",
            "data_get_customer_info_by_id" => $data
        ]);
    }

}