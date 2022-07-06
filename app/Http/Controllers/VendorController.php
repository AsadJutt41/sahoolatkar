<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\VenderCategory;
class VendorController extends Controller
{
    public function index()
    {
        $vendor = Vendor::paginate(3);
        $vendorcatg = VenderCategory::All();

        return view('backend.vendors.index')->with('vendors',$vendor)->with('vendorscatg', $vendorcatg);
    }

    public function create()
    {
        $vendorcatg = VenderCategory::All();
        return view('backend.vendors.create')->with('vendorscatg', $vendorcatg);
    }

    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'name'=>'string|required',
            'photo'=>'required',
            'cat_id'=>'required',
            'location'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
        ]);
        $data = $request->all();


        // $name=$request->title;
        // $count=Vendor::where('name',$name)->count();
        // if($count<0){
            if($request->hasFile('photo')) {
                $image = $request->file('photo');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('backend/vendor');
                $image->move($destinationPath, $name);
                $data['photo'] = $name;
                // dd($painter);
            }


            //endimage
            $status = Vendor::create($data);
            if($status){

                request()->session()->flash('success','Vendor successfully added');
            }
            else{

                request()->session()->flash('error','Error occurred, Please try again!');
            }
            return redirect()->route('vendor_create');
        // }
    }

    public function edit($id)
    {
        $vender=Vendor::find($id);
        $vendorcatg = VenderCategory::All();
        return view('backend.vendors.edit')->with('vendor',$vender)->with('vendorscatg', $vendorcatg);
    }

    public function update(Request $request, $id)
    {
        $vender=vendor::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
            'name'=>'string|required',
            'cat_id'=>'required',
        ]);

        $data=$request->all();

        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('backend/vendor');
            $image->move($destinationPath, $name);
            $data['photo'] = $name;
        }
        // return $data;

        $status=$vender->fill($data)->save();
        if($status){
            request()->session()->flash('success','Vendor Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('vendor_page');
    }


    public function destroy($id)
    {
        $vender=Vendor::find($id);

        $status=$vender->delete();

        if($status){
            request()->session()->flash('success','Vendor successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting post ');
        }
        return redirect()->route('vendor_page');
    }



}
