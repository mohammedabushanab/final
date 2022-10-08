<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Country;
use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::with('user')->withCount('abouts')->orderBy('id', 'desc')->simplePaginate(7);
        // $this->authorize('viewAny' , Admin::class);

        return response()->view('cms.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        $roles = Role::where('guard_name', 'admin')->get();
        // $this->authorize('create', Admin::class);

        return response()->view('cms.admin.create ', compact('admins', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'firstName' => 'required|string|min:3|max:20',
        ], []);
        if (!$validator->fails()) {
            $admins = new Admin();
            $admins->email = $request->get('email');
            $admins->password = Hash::make($request->get('password'));

            $isSaved = $admins->save();

            if ($isSaved) {
                $users = new User();

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/admin', $imageName);

                    $users->image = $imageName;
                }
                $roles = Role::findOrFail($request->get('role_id'));
                $admins->assignRole($roles->name);
                $users->firstName = $request->get('firstName');
                $users->lastName = $request->get('lastName');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                // $users->country_id = $request->get('country_id');
                $users->actor()->associate($admins);
                // $roles = Role::findOrFail($request->get('role_id'));
                // $admins->assignRole($roles->name);
                $isSaved = $users->save();
                return response()->json(['icon' => 'success', 'title' => 'Created is Seccessfully'], 200);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
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
        $admins = Admin::findOrFail($id);
        return response()->view('cms.admin.show', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $countries = Country::all();
        $admins = Admin::findOrFail($id);
        // $this->authorize('update' , Admin::class);

        return response()->view('cms.admin.edit', compact('admins'));
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
        $validator = Validator($request->all(), []);

        if (!$validator->fails()) {
            $admins = Admin::findOrFail($id);
            $admins->email = $request->get('email');
            $admins->password = $request->get('password');

            $isUpdate = $admins->save();
            if ($isUpdate) {
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

                return ['redirect' => route('admins.index')];

                return response()->json(['icon' => 'success', 'title' => 'Updated is Successfully'], 200);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
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
        // $this->authorize('delete' , Admin::class);


        // if ($admin->id == Auth::id()){
        //     return redirect()->route('admins.index')
        //     ->withErrors(trans('cannot delete yourself'));
        // }
        // else {
        //     $admin->user()->delete();
        //     $isDeleted = $admin->delete();
        //     $this->authorize('delete' , Admin::class);

        //         return response()->json(['icon' => 'success', 'title' => 'admin deleted successfully'], $isDeleted ? 200 : 400);
        //     }
        $admins = Admin::destroy($id);
    }
    public function indexDelete()
    {
        $admins = Admin::onlyTrashed()->get();
        return response()->view('cms.admin.soft_delete', compact('admins'));
    }
    public function restore($id)
    {
        $admins = Admin::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('admins.index');
    }
    public function forceDelete($id)
    {
        $admins = Admin::onlyTrashed()->findOrFail($id)->forceDelete();

        // return response()->view('dashboard.admin.soft_delete',compact('admins'));
    }
}
