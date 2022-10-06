<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Admin;
use App\Models\Category;
use App\Models\contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{



    public function index(){
        $abouts=About::take(1)->get();

    return response()->view('website.index',compact('abouts'));
    }
    public function about(){
        $abouts=About::take(2)->get();

             return response()->view('website.about', compact('abouts'));
    }
    public function checkout(){
             return response()->view('website.checkout');
    }
    public function contact(){
             return response()->view('website.contact');
    }

    public function storeContact(Request $request)
    {
        $validator = validator($request->all() , [
        ]);
        if(! $validator->fails()){
            $contacts = new contact();
            $contacts->first_name = $request->get('first_name');
            $contacts->last_name = $request->get('last_name');
            $contacts->Subject = $request->get('Subject');
            $contacts->email = $request->get('email');
            $contacts->message = $request->get('message');
            $isSaved = $contacts->save();
            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'Send is Successfully'] , 200);
            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }
    }



















    public function shopSingle(){
        // $abouts=About::take(2)->get();

             return response()->view('website.shop-single');
    }
    public function shop(){
        // $categories=Category::take(2)->get();

             return response()->view('website.shop');
    }
    public function thank(){
             return response()->view('website.thankyou');
    }
    public function cart(){
             return response()->view('website.cart');
    }
}
