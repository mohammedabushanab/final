<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::withCount('permissions')->orderBy('id', 'asc')->paginate(5);
        return response()->view('cms.spatie.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.spatie.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), []);

        if (!$validator->fails()) {
            $roles = new Role();
            $roles->guard_name = $request->get('guard_name');
            $roles->name = $request->get('name');

            $isSaved = $roles->save();
            if ($isSaved) {
                return response()->json(['icon' => 'success', 'title' => 'Created is successfully'], 200);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator]);
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
        $roles = Role::findOrFail($id);
        return response()->view('cms.spatie.role.show', compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::findOrFail($id);
        return response()->view('cms.spatie.role.edit', compact($roles));
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
        $validator = validator($request->all(), []);

        if (!$validator->fails()) {
            $roles = Role::findOrFail($id);
            $roles->guard_name = $request->get('guard_name');
            $roles->name = $request->get('name');

            $isUpdate = $roles->save();
            return ['redirect' => route('roles.index')];
            if ($isUpdate) {
                return response()->json(['icon' => 'success', 'title' => 'Update is successfully'], 200);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator]);
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
        $roles = Role::destroy($id);
    }
}
