<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Instalment;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class InstalmentController extends Controller
{

    public function index()
    {
        $instalments = Instalment::all();
        return view('backend.instalment.index',compact('instalments'));
    }

    public function create()
    {
        $products = Product::all();
        return view('backend.instalment.create', compact('products'));
    }

    public function store(Request $request)
    {
        for($i =0; $i<count($request->data['instalment_duration']); $i++){
            $instalment = Instalment::create([
                'product_id' => $request->product_id,
                'instalment_duration' => $request->data['instalment_duration'][$i],
                'advanced_payment' => $request->data['advanced_payment'][$i],
                'instalment_price' => $request->data['instalment_price'][$i],
            ]);
        }
        request()->session()->flash('success','Instalment data successfully added');
        return redirect()->route('product-instalment.index');
    }

    public function show(Instalment $instalment)
    {

    }

    public function edit($id)
    {
        $product = Product::all();
        $instalment = Instalment::find($id);
        return view('backend.instalment.edit')->with('instalment',$instalment)
                                              ->with('instalments',$product);
    }

    public function update(Request $request,  $id)
    {
        $instalment = Instalment::find($id);
        $status = Instalment::where('id', $id)
        ->update(
            [
                'product_id' => $request->product_id,
                'instalment_duration' => $request->instalment_duration,
                'advanced_payment' => $request->advanced_payment,
                'instalment_price' => $request->instalment_price
            ]);


        if($status){
            request()->session()->flash('success','data  successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('product-instalment.index');
    }

    public function destroy(Instalment $instalment)
    {
    }
}
