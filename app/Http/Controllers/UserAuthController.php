<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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


    public function editProfile(Request $request){

        $admins = Admin::findOrFail(Auth::guard('admin')->id());
        return response()->view('cms.auth.profile-edit' , compact('admins') );
    }


    public function updateProfile(Request $request)
{
    $validator = Validator($request->all() ,[

    ]);

    if( ! $validator->fails()){
        $admins = Admin::findOrFail(Auth::guard('admin')->id());
        $admins->email = $request->get('email');
        // $admins->password = $request->get('password');

        $isUpdate = $admins->save();
        if($isUpdate){
            $users = $admins->user;

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/admin', $imageName);

                $users->image = $imageName;

                }

            $users->firstName = $request->get('firstName');
            $users->lastName = $request->get('lastName');
            $users->mobile = $request->get('mobile');
            $users->date_of_birth = $request->get('date_of_birth');
            $users->gender = $request->get('gender');
            $users->status = $request->get('status');
            // $users->country_id = $request->get('country_id');
            $users->actor()->associate($admins);

            $isUpdate = $users->save();

            return ['redirect' =>route('admins.index')];

           return response()->json(['icon' =>'success' , 'title' => 'Updated is Successfully'] , 200);
        }
    }
    else{
        return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
    }
}

<<<<<<< HEAD
=======
}
>>>>>>> e6d2591e0718d8157096bafd5260ba845cf01f5a
