<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register( $guard){
    return response()->view('cms.auth.register' , compact('guard'));
}
public function storeRegister(Request $request)
{
    $validator = Validator($request->all() , [
        'firstName' => 'required|string|min:3|max:20',
    ] , [

    ]);
    if( ! $validator->fails()){
        $admins = new Admin();
        $admins->email = $request->get('email');
        $admins->password = Hash::make($request->get('password'));

        $isSaved = $admins->save();

        if($isSaved){
            $users = new User();

             if (request()->hasFile('image')) {

         $image = $request->file('image');

                 $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/admin', $imageName);

                $users->image = $imageName;

            //     }
            // $roles = Role::findOrFail($request->get('role_id'));
            // $admins->assignRole($roles->name);
            $users->firstName = $request->get('firstName');
             $users->lastName = $request->get('lastName');
             $users->mobile = $request->get('mobile');
             $users->date_of_birth = $request->get('date_of_birth');
             $users->gender = $request->get('gender');
            $users->status = $request->get('status');
            //  $users->country_id = $request->get('country_id');
            $users->actor()->associate($admins);
            // $roles = Role::findOrFail($request->get('role_id'));
            // $admins->assignRole($roles->name);
            $isSaved = $users->save();
            return response()->json(['icon' => 'success' , 'title' => 'Created is Seccessfully'] , 200);

        }

    }
    else{
        return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
    }
}

}
}
