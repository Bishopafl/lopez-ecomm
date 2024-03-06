<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductList;
use Exception;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function ProductListByRemark(Request $request){
        try {
            $remark = $request->remark;
            $product_list = ProductList::where('remark', $remark)->get();
            return $product_list;
        } catch (\Throwable $th) {
            throw new Exception('Error Processing Product List by Remark Request', 1);
        }
    }

    public function ProductListByCategory(Request $request) {
        try {
            $category = $request->category;

            $categoryProductList = ProductList::where('category', $category)->get();
            return $categoryProductList;
        } catch (\Throwable $th) {
            throw new Exception('Error Processing Product LIst by Category');
        }
    }

    public function ProductListBySubcategory(Request $request) {
        try{
            $category    = $request->category;
            $subcategory = $request->subcategory;
            
            $subCatProductList = ProductList::where('category', $category)->where('subcategory', $subcategory)->get();
            return $subCatProductList;

        } catch (\Throwable $th) {
            throw new Exception('Error Processing Product List by Subcategory');
        }
    }
}
