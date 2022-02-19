<?php

namespace App\Http\Controllers\v1;

use App\Models\CustomerInfoModel;
use Illuminate\Http\Request;

class CustomerInfoController extends Controller {
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

        return response($data);
    }

    public function getCustomerInfoById(Request $request) {
        $id_customer_info = $request->input("id_customer_info");
        $data = $this->CustomerInfoModel->getCustomerInfoById($id_customer_info);

        return response()->json($data);
    }

}