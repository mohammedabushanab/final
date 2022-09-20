<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::with('user')->withCount('stores')->orderBy('id' , 'desc')->get();
        return response()->view('cms.supplier.index' , compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers= Supplier::all();
        // $roles = Role::where('guard_name' , 'author')->get();

        return response()->view('cms.supplier.create' , compact('suppliers'));
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

        ]);

        if(! $validator->fails()){
            $suppliers = new Supplier();
            $suppliers->email = $request->get('email');
            $suppliers->password= Hash::make($request->get('password'));

            if (request()->hasFile('file')) {

                $file = $request->file('file');

                $fileName = time() . 'file.' . $file->getClientOriginalExtension();

                $file->move('storage/files/supplier', $fileName);

                $suppliers->file = $fileName;

                }

            $isSaved = $suppliers->save();
            if($isSaved){
                $users = new User();

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/supplier', $imageName);

                    $users->image = $imageName;

                    }
                // $roles = Role::findOrFail($request->get('role_id'));
                // $suppliers->assignRole($roles->name);
                $users->firstName = $request->get('firstName');
                $users->lastName = $request->get('lastName');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->actor()->associate($suppliers);

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
        // $suppliers = Supplier::all();
        $suppliers = Supplier::findOrFail($id);
        return response()->view('cms.supplier.edit' , compact('suppliers'));
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
            // 'image'=>"required|image|max:2048|mimes:png,jpg,jpeg,pdf",

        ]);

        if(! $validator->fails()){
            $suppliers = Supplier::findOrFail($id);
            $suppliers->email = $request->get('email');
            $suppliers->password = $request->get('password');

            if (request()->hasFile('file')) {

                $file = $request->file('file');

                $fileName = time() . 'file.' . $file->getClientOriginalExtension();

                $file->move('storage/files/supplier', $fileName);

                $suppliers->file = $fileName;

                }

            $isUpdate = $suppliers->save();
            if($isUpdate){
                $users = $suppliers->user;

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/supplier', $imageName);

                    $users->image = $imageName;

                    }

                $users->firstName = $request->get('firstName');
                $users->lastName = $request->get('lastName');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->actor()->associate($suppliers);

                $isUpdate = $users->save();

                return ['redirect' => route('suppliers.index')];
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
        $suppliers = Supplier::destroy($id);
    }
}