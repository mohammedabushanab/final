<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Admin;
use App\Models\Category;
use App\Models\contact;
use App\Models\Doctor;
use App\Models\Medicine;
use App\Models\Slider;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class IndexController extends Controller
{

    public function websiteDet(){
    // $medicines= Medicine::all();
    $medicines= Medicine::take(1)->get();

        return response()->view('website.shop-single', compact('medicines') );
    }


    public function index(){
        $abouts=About::take(1)->get();
        $medicines= Medicine::all();
        $sliders = Slider::take(4)->get();

    return response()->view('website.index',compact('abouts' , 'medicines' , 'sliders'));
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

    // public function websiteDet($id){
    //          $medicines= Medicine::find($id);

    //     return response()->view('website.shop-single' ,'medicines');
    // }

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
        $medicines= Medicine::all();


        // $medicines= Medicine::take(1)->get();
        return response()->view('website.shop-single' , compact('medicines'));
    }
    public function shop(){
        $categories=Category::all();
        $medicines= Medicine::all();

             return response()->view('website.shop' ,compact('categories' ,'medicines'));
    }
    public function thank(){
             return response()->view('website.thankyou');
    }
    public function cart(){
        $medicines= Medicine::all();

             return response()->view('website.cart' ,compact('medicines'));

    }






}
