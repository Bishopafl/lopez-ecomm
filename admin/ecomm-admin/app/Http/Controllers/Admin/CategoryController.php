<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory() {
        $all_categories = Category::all();
        $categoryDetailsArray = [];

        foreach($all_categories as $category) {
            $subcategory = Subcategory::where('category_name', $category['category_name'])->get();
            
            $category_item = [
                'category_name'    => $category['category_name'],
                'category_image'   => $category['category_image'],
                'subcategory_name' => $subcategory,
            ];

            array_push( $categoryDetailsArray ,$category_item);
        }



        return $categoryDetailsArray;
    }
}
