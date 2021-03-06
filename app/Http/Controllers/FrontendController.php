<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\RestaurantInfo;
use App\Slider;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        $restaurantinfo=RestaurantInfo::all();
        $categories=Category::latest()->get();
        $items=Item::latest()->get();
        return view('welcome',compact('sliders','categories','items','restaurantinfo'));
    }
}
