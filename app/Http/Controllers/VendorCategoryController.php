<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VenderCategory;

class VendorCategoryController extends Controller
{
    public function index()
    {
        $vendorcatg = VenderCategory::All();
        return view('backend.vendor_catg.index')->with('vendorscatgs',$vendorcatg);
    }

    public function create()
    {
        return view('backend.vendor_catg.create');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
        ]);
        $data= $request->all();


        // $name=$request->title;
        // $count=Vendor::where('name',$name)->count();
        // if($count<0){


            //endimage
            $status = VenderCategory::create($data);
            if($status){

                request()->session()->flash('success','Category successfully added');
            }
            else{

                request()->session()->flash('error','Error occurred, Please try again!');
            }
            return redirect()->route('vendor_catg_create');
        // }





    }

    public function edit($id)
    {
        $vendorcatg=VenderCategory::find($id);
        return view('backend.vendor_catg.edit')->with('vendorscatg', $vendorcatg);
    }

    public function update(Request $request, $id)
    {
        $vendercatg=VenderCategory::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
            'title'=>'string|required',
        ]);

        $data=$request->all();
        // return $data;
            $status=$vendercatg->fill($data)->save();
        if($status){
            request()->session()->flash('success','Vendor Category Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('vendor_page');
    }


    public function destroy($id)
    {
        $vendercatg=VenderCategory::findOrFail($id);

        $status=$vendercatg->delete();

        if($status){
            request()->session()->flash('success','Vendor Category successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting post ');
        }
        return redirect()->route('vendor_catg_page');
    }
}
