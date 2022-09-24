<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function index(){
             return response()->view('website.index');
    }
    public function about(){
             return response()->view('website.about');
    }
    public function checkout(){
             return response()->view('website.checkout');
    }
    public function contact(){
             return response()->view('website.contact');
    }
    public function shopSingle(){
             return response()->view('website.shop-single');
    }
    public function shop(){
             return response()->view('website.shop');
    }
    public function thank(){
             return response()->view('website.thankyou');
    }
    public function cart(){
             return response()->view('website.cart');
    }
}
