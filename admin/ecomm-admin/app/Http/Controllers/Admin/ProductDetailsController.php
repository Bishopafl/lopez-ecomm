<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductList;
use App\Models\ProductDetails;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function ProductDetails(Request $request) {
        
        $id = $request->id;
        
        // Get the product data from the details and list based on the
        // product id from the request
        $productDetails = ProductDetails::where('product_id', $id)->get();
        $productList    = ProductList::where('id', $id)->get();

        $item = [
            'productDetails' => $productDetails,
            'productList'    => $productList,
        ];

        return $item;
    }    
}
