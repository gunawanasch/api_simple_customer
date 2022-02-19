<?php

namespace App\Http\Controllers\v1;

use App\Models\ProductInfoModel;
use Illuminate\Http\Request;

class ProductInfoController extends Controller {
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

        return response($data);
    }

    public function getProductInfoById(Request $request) {
        $id_product_info = $request->input("id_product_info");
        $data = $this->ProductInfoModel->getProductInfoById($id_product_info);

        return response()->json($data);
    }

}