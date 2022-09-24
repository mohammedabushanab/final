<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Guard;

class UserAuthController extends Controller
{
    public function showLogin($guard){
        return response()->view('cms.auth.login' ,compact('guard'));
    }

    public function login(Request $request){
        $validator=Validator($request->all(),[
            'email'=>'required|email',
            'password'=>'required|string',

        ],[
            // 'email.exist'=>"nmail is not Found",
        ]);
        $credential=[
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),

        ];
        if(! $validator->fails()){
            if(Auth::guard($request->get('guard'))->attempt($credential)){
                return response()->json(['icon'=>'sucsess', 'title'=>'login sucessful'],200);
            }
        else{

                return response()->json(['icon'=> 'error' , 'title'=>'login is failed'], 400);
        }}


        else{
            return response()->json(['icon'=> 'error' , 'title'=>$validator->getMessageBag()->first()], 400);
        }
    }


    public function Logout(Request $request){
        $guard=auth('admin')->check()? 'admin' : 'doctor';
        Auth::guard($guard)->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login', $guard);
    }
}

