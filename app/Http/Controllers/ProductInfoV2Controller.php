<?php

namespace App\Http\Controllers;

use App\Models\ProductInfoModel;
use Illuminate\Http\Request;

class ProductInfoV2Controller extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductInfoModel $model) {
        $this->ProductInfoModel = $model;
    }

    public function getAllProductInfo() {
        $data = $this->ProductInfoModel->getAllProductInfo();

        return response()->json([
            "status" => 1,
            "message" => "Succeded",
            "data" => $data
        ]);
    }

    public function getProductInfoById(Request $request) {
        $id_product_info = $request->input("id_product_info");
        $data = $this->ProductInfoModel->getProductInfoById($id_product_info);

        return response()->json([
            "status" => 1,
            "message" => "Succeded",
            "data" => $data
        ]);
    }

}