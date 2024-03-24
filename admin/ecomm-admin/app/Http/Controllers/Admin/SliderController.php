<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use App\Models\ProductList;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function AllHomeSliders() {
        $home_slider_data = HomeSlider::all();
        return $home_slider_data;
    }
}
