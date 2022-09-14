<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales=Sale::all();
        return response()->view('cms.sale.index' , compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sales=Sale::all();
       return response()->view('cms.sale.create' , compact('sales'));
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
            $sales= new Sale();
            $sales->price= $request->get('price');        
            $sales->date= $request->get('date'); 
            $isSaved=$sales->save();
            if($isSaved){
                return response()->json(['icon' => 'success' , 'title'=> 'Created is Successfully'] , 200);
            }       
        }
        else{
            return response()->json(['icon'=>'error' , 'title'=>$validator->getMessageBag()->first()],400);
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
        $sales =Sale::findOrFail($id);
        return response()->view('cms.sale.edit' , compact('sales'));
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
            $sales= Sale::findOrFail($id);
            $sales->price= $request->get('price');        
            $sales->date= $request->get('date'); 
            $isUpdate=$sales->save();
            return ['redirect' => route('sales.index')];
            if($isUpdate){
                return response()->json(['icon' => 'success' , 'title'=> 'Updated is Successfully'] , 200);
            }       
        }
        else{
            return response()->json(['icon'=>'error' , 'title'=>$validator->getMessageBag()->first()],400);
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
        $sales=Sale::destroy($id);
    }
}
