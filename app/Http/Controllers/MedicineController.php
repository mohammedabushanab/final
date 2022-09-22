<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Medicine;
use App\Models\Store;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMedicine($id)
    {
        $medicines = Medicine::where('doctor_id', $id)->orderBy('id', 'desc')->paginate(5);
        return response()->view('cms.medicine.index', compact('medicines','id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMedicine($id)
    {
        $categories = Category::all();
        $stores = Store::all();

        $medicines = Medicine::all();
        return response()->view('cms.medicine.create', compact('categories','stores' , 'medicines','id'));

    }
    public function index()
    {

        $medicines = Medicine::orderBy('id' , 'desc')->simplePaginate(5);
        return response()->view('cms.medicine.indexAll' , compact('medicines'));

    }

    public function create()
    {
        $categories = Category::all();
        $stores = Store::all();

        $medicines = Medicine::all();

        return response()->view('cms.medicine.create' , compact('categories','stores' , 'medicines'));
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
            $medicines = new Medicine();
            $medicines->name = $request->get('name');
            $medicines->code = $request->get('code');
            $medicines->ExpirationDate = $request->get('ExpirationDate');
            $medicines->description = $request->get('description');
            $medicines->doctor_id = $request->get('doctor_id');
            $medicines->category_id = $request->get('category_id');
            $medicines->store_id = $request->get('store_id');

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/medicine', $imageName);

                $medicines->image = $imageName;

                }
            $isSaved = $medicines->save();
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
        $categories = Category::all();
        $stores = Store::all();
        $doctors = Doctor::all();
        $medicines = Medicine::findOrFail($id);

        return response()->view('cms.medicine.edit' , compact('categories','stores' , 'doctors' , 'medicines'));

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
            $medicines = Medicine::findOrFail($id);
            $medicines->name = $request->get('name');
            $medicines->code = $request->get('code');
            $medicines->ExpirationDate = $request->get('ExpirationDate');
            $medicines->description = $request->get('description');
            $medicines->doctor_id = $request->get('doctor_id');
            $medicines->category_id = $request->get('category_id');
            $medicines->store_id = $request->get('store_id');

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/admin', $imageName);

                $medicines->image = $imageName;

                }

            $isUpdate = $medicines->save();
            return ['redirect' => route('medicines.index')];
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
        $medicines=Medicine::destroy($id);
    }
}