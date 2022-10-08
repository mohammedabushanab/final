<?php

namespace App\Http\Controllers;

use App\Models\Customer;
// use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use Spatie\Permission\Models\Role;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::with('user')->orderBy('id' , 'desc')->get();
        return response()->view('cms.customer.index' , compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        // $roles = Role::where('guard_name' , 'author')->get();

        return response()->view('cms.customer.create' , compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all() , [
            'age'=>'required|integer',
        ]);

        if(! $validator->fails()){
            $customers = new Customer();
            $customers->email = $request->get('email');
            $customers->password= Hash::make($request->get('password'));
            $customers->age = $request->get('age');

            if (request()->hasFile('file')) {

                $file = $request->file('file');

                $fileName = time() . 'file.' . $file->getClientOriginalExtension();

                $file->move('storage/files/customer', $fileName);

                $customers->file = $fileName;

                }

            $isSaved = $customers->save();
            if($isSaved){
                $users = new User();

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/customer', $imageName);

                    $users->image = $imageName;

                    }
                // $roles = Role::findOrFail($request->get('role_id'));
                // $customers->assignRole($roles->name);
                $users->firstName = $request->get('firstName');
                $users->lastName = $request->get('lastName');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->actor()->associate($customers);

                $isSaved = $users->save();
                return response()->json(['icon' => 'success' , 'title'=> 'Created is Successfully'] , 200);
             }
        }
        else{
            return response()->json(['icon'=> 'error' , 'title' => $validator->getMessageBag()->first() ] , 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $customers = Customer::all();
        $customers = Customer::findOrFail($id);
        return response()->view('cms.customer.edit' , compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = validator($request->all() , [


        ]);

        if(! $validator->fails()){
            $customers = Customer::findOrFail($id);
            $customers->email = $request->get('email');
            $customers->password = $request->get('password');
            $customers->age = $request->get('age');

            if (request()->hasFile('file')) {

                $file = $request->file('file');

                $fileName = time() . 'file.' . $file->getClientOriginalExtension();

                $file->move('storage/files/customer', $fileName);

                $customers->file = $fileName;

                }

            $isUpdate = $customers->save();
            if($isUpdate){
                $users = $customers->user;

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/customer', $imageName);

                    $users->image = $imageName;

                    }

                $users->firstName = $request->get('firstName');
                $users->lastName = $request->get('lastName');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->actor()->associate($customers);

                $isUpdate = $users->save();

                return ['redirect' => route('customers.index')];
                return response()->json(['icon' => 'success' , 'title'=> 'Updates is Successfully'] , 200);
             }
        }
        else{
            return response()->json(['icon'=> 'error' , 'title' => $validator->getMessageBag()->first() ] , 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Customers = Customer::destroy($id);
    }
}
