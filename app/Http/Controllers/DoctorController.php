<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
// use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Comment\Doc;

// use Spatie\Permission\Models\Role;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::with('user')->withCount('medicines')->orderBy('id' , 'desc')->get();
        return response()->view('cms.doctor.index' , compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        // $roles = Role::where('guard_name' , 'author')->get();

        return response()->view('cms.doctor.create' , compact('doctors'));
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
            $doctors = new Doctor();
            $doctors->email = $request->get('email');
            $doctors->password = Hash::make($request->get('password'));

            if (request()->hasFile('file')) {

                $file = $request->file('file');

                $fileName = time() . 'file.' . $file->getClientOriginalExtension();

                $file->move('storage/files/doctor', $fileName);

                $doctors->file = $fileName;

                }

            $isSaved = $doctors->save();
            if($isSaved){
                $users = new User();

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/doctor', $imageName);

                    $users->image = $imageName;

                    }
                // $roles = Role::findOrFail($request->get('role_id'));
                // $doctors->assignRole($roles->name);
                $users->firstName = $request->get('firstName');
                $users->lastName = $request->get('lastName');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->actor()->associate($doctors);

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
        // $doctors = Doctor::all();
        $doctors = Doctor::findOrFail($id);
        return response()->view('cms.doctor.edit' , compact('doctors'));
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
            'image'=>"required|image|max:2048|mimes:png,jpg,jpeg,pdf",

        ]);

        if(! $validator->fails()){
            $doctors = Doctor::findOrFail($id);
            $doctors->email = $request->get('email');
            $doctors->password = $request-> Hash::make($request->get('password'));

            if (request()->hasFile('file')) {

                $file = $request->file('file');

                $fileName = time() . 'file.' . $file->getClientOriginalExtension();

                $file->move('storage/files/doctor', $fileName);

                $doctors->file = $fileName;

                }

            $isUpdate = $doctors->save();
            if($isUpdate){
                $users = $doctors->user;

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/doctor', $imageName);

                    $users->image = $imageName;

                    }

                $users->firstName = $request->get('firstName');
                $users->lastName = $request->get('lastName');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->actor()->associate($doctors);

                $isUpdate = $users->save();

                return ['redirect' => route('doctors.index')];
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
        $doctorss = Doctor::destroy($id);
    }
}