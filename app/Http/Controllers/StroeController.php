<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Supplier;
use Illuminate\Http\Request;

class StroeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStore($id)
    {
        $stores = Store::where('supplier_id', $id)->orderBy('id', 'desc')->paginate(5);
        return response()->view('cms.store.index', compact('stores','id'));

    }

    public function createStore($id)
    {
        // $categories = Category::all();
        $stores = Store::all();
        return response()->view('cms.store.create', compact(  'stores','id'));

    }
    public function index()
    {
        $stores = Store::orderBy('id' , 'desc')->simplePaginate(5);
        return response()->view('cms.store.indexAll' , compact('stores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::all();
        $suppliers=Supplier::all();
        return response()->view('cms.store.create' , compact('stores','suppliers'));

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
            $stores = new Store();
            $stores->name = $request->get('name');
            $stores->count = $request->get('count');
            $stores->supplier_id = $request->get('supplier_id');

            $isSaved = $stores->save();
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
        $suppliers = Supplier::all();
        $stores = Store::findOrFail($id);

        return response()->view('cms.store.edit' , compact('suppliers' , 'stores'));

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
            $stores = Store::findOrFail($id);
            $stores->name = $request->get('name');
            $stores->count = $request->get('count');
            $stores->supplier_id = $request->get('supplier_id');


            $isUpdate = $stores->save();
            return ['redirect' => route('stores.index')];
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
        $stores=Store::findOrFail($id);
    }
}