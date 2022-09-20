<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Admin;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAbout($id)
    {
        $abouts = About::where('admin_id', $id)->orderBy('id', 'desc')->paginate(5);
        return response()->view('cms.aboutus.index', compact('abouts','id'));


    }

    public function createAbout($id)
    {
        $abouts = About::all();
        return response()->view('cms.aboutus.create', compact('abouts','id'));

    }
    public function index()
    {
        $abouts = About::orderBy('id' , 'desc')->simplePaginate(5);
        return response()->view('cms.aboutus.indexAll' , compact('abouts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts=About::all();
        $admins = Admin::all();

        return response()->view('cms.aboutus.create' , compact('abouts','admins'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(),[

        ]);

        if(! $validator->fails()){
            $abouts = new About();
            $abouts->title = $request->get('title');
            $abouts->description = $request->get('description');
            $abouts->admin_id = $request->get('admin_id');
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/about', $imageName);

                $abouts->image = $imageName;

                }
            $isSaved = $abouts->save();
            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'Created is Successfully'] , 200);
            }


        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()],400);
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
        // $admins = Admin::all();
        $abouts = About::findOrFail($id);
        $admins = Admin::all();

        return response()->view('cms.aboutus.edit' , compact('abouts','admins'));


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
        $validator = validator($request->all(),[

        ]);

        if(! $validator->fails()){
            $abouts = About::findOrFail($id);
            $abouts->title = $request->get('title');
            $abouts->description = $request->get('description');
            $abouts->admin_id = $request->get('admin_id');

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/about', $imageName);

                $abouts->image = $imageName;

                }
            $isUpdate = $abouts->save();
            return ['redirect' => route('abouts.index')];
            if($isUpdate){
                return response()->json(['icon' => 'success' , 'title' => 'Updated is Successfully'] , 200);
            }


        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()],400);
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
        $abouts=About::destroy($id);
    }
}