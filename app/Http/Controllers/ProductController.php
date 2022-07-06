<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Brand;
use App\ProductDefinition;
use Illuminate\Support\Str;
use Illuminate\Support\Facade\Http;
use GuzzleHttp\Client;
class ProductController extends Controller
{


    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://gluoncloudtrading.eastus.cloudapp.azure.com/api/services/app/ProductDefinition/GetAllProductsExtensive',[
            'headers' =>[
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy54bWxzb2FwLm9yZy93cy8yMDA1LzA1L2lkZW50aXR5L2NsYWltcy9uYW1laWRlbnRpZmllciI6IjEzOTU0IiwiaHR0cDovL3NjaGVtYXMueG1sc29hcC5vcmcvd3MvMjAwNS8wNS9pZGVudGl0eS9jbGFpbXMvbmFtZSI6IldlYmFkbWluIiwiQXNwTmV0LklkZW50aXR5LlNlY3VyaXR5U3RhbXAiOiJSTFlVNEhDWlE2T0lPVUw0WUhKSU9IS1o2QzU2WkEyWCIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IldlYmFkbWluIiwiaHR0cDovL3d3dy5hc3BuZXRib2lsZXJwbGF0ZS5jb20vaWRlbnRpdHkvY2xhaW1zL3RlbmFudElkIjoiMTEwMzMiLCJzdWIiOiIxMzk1NCIsImp0aSI6IjhlZmE4YTJhLWZiYjMtNGZiZC1hMjFiLThkMDA1NjEyYjZkMyIsImlhdCI6MTY1NTk3MzE0NCwibmJmIjoxNjU1OTczMTQ0LCJleHAiOjE2NTYwNTk1NDQsImlzcyI6IlRyYWRpbmciLCJhdWQiOiJUcmFkaW5nIn0.o26vqmcPf7GXdQPFj2EUdl1MnconPzHz756LzBaWnns'
            ]
        ]);
        $products = json_decode($request->getBody()->getContents(), true);
        // echo '<pre>';
        // print_r($products);
        // exit;
         // Product Image
         $image = ProductDefinition::all();
        return view('backend.product.index',compact('products', 'image'));
    }

    public function editProduct(Request $request, $id)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://gluoncloudtrading.eastus.cloudapp.azure.com/api/services/app/ProductDefinition/GetAllProductsExtensive',[
            'headers' =>[
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy54bWxzb2FwLm9yZy93cy8yMDA1LzA1L2lkZW50aXR5L2NsYWltcy9uYW1laWRlbnRpZmllciI6IjEzOTU0IiwiaHR0cDovL3NjaGVtYXMueG1sc29hcC5vcmcvd3MvMjAwNS8wNS9pZGVudGl0eS9jbGFpbXMvbmFtZSI6IldlYmFkbWluIiwiQXNwTmV0LklkZW50aXR5LlNlY3VyaXR5U3RhbXAiOiJSTFlVNEhDWlE2T0lPVUw0WUhKSU9IS1o2QzU2WkEyWCIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IldlYmFkbWluIiwiaHR0cDovL3d3dy5hc3BuZXRib2lsZXJwbGF0ZS5jb20vaWRlbnRpdHkvY2xhaW1zL3RlbmFudElkIjoiMTEwMzMiLCJzdWIiOiIxMzk1NCIsImp0aSI6IjhlZmE4YTJhLWZiYjMtNGZiZC1hMjFiLThkMDA1NjEyYjZkMyIsImlhdCI6MTY1NTk3MzE0NCwibmJmIjoxNjU1OTczMTQ0LCJleHAiOjE2NTYwNTk1NDQsImlzcyI6IlRyYWRpbmciLCJhdWQiOiJUcmFkaW5nIn0.o26vqmcPf7GXdQPFj2EUdl1MnconPzHz756LzBaWnns'
            ]
        ]);
        $products = json_decode($request->getBody()->getContents(), true);

        // // Unique Category means Brnad
        // foreach($products['result'] as $key=>$item){
        //     $cat[] = $item['category'];
        // }
        // $collection = collect($cat);
        // $unique_brnad = $collection->unique()->values()->all();


        // // unique Type means Category
        // foreach($products['result'] as $key=>$item){
        //     $type[] = $item['type'];
        // }
        // $collection = collect($type);
        // $unique_type = $collection->unique()->values()->all();


        return view('backend.product.editProduct',compact('products'));
    }
    public function updateProductImages(Request $request)
    {
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_name' => 'required',
            'additional_information' => 'required',
            'discount_price' => 'required',
        ]);
        $imageExist = ProductDefinition::all()->first();
        if($request->product_name == $imageExist->product_name){
            $image_update = ProductDefinition::where('product_name', $request->product_name)->first();
            $image_update->product_name = $request->product_name;

            $imageName = time().'.'.$request->product_image->extension();
            $request->product_image->move(public_path('backend/product'), $imageName);

            $image_update->product_image = $imageName;
            $image_update->additional_information = $request->additional_information;
            $image_update->discount_price = $request->discount_price;
            $image_update->code = $request->code;
            $image_update->department = $request->department;
            $image_update->type = $request->type;
            $image_update->category = $request->category;
            $image_update->subCategory = $request->subCategory;
            $image_update->salePrice = $request->salePrice;
            $image_update->vendorDetail = $request->vendorDetail;
            $image_update->save();
            return redirect()->route('product.index')->with('success', 'Product Images Update Successfully!');
        }else{
            $images = new ProductDefinition();
            $images->product_name = $request->product_name;

            $imageName = time().'.'.$request->product_image->extension();
            $request->product_image->move(public_path('backend/product'), $imageName);

            $images->product_image = $imageName;
            $images->additional_information = $request->additional_information;
            $images->discount_price = $request->discount_price;
            $images->code = $request->code;
            $images->department = $request->department;
            $images->type = $request->type;
            $images->category = $request->category;
            $images->subCategory = $request->subCategory;
            $images->salePrice = $request->salePrice;
            $images->vendorDetail = $request->vendorDetail;
            $images->save();
            return redirect()->route('product.index')->with('success', 'Product Images Update Successfully!');
        }

        // $images->brnad_name = $request->brnad_name;
        // if($request->hasFile('brnad_image')) {
        //     $image = $request->file('brnad_image');
        //     $brandName = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/backend/product');
        //     $image->move($destinationPath, $brandName);
        //     $images->brnad_image = $brandName;
        // }

        // $images->category_name = $request->category_name;
        // if($request->hasFile('category_image')) {
        //     $image = $request->file('category_image');
        //     $categoryName = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/backend/product');
        //     $image->move($destinationPath, $categoryName);
        //     $images->category_image = $categoryName;
        // }


    }

    public function create()
    {
        $vendor = Vendor::all();
        $category=Category::where('is_parent',1)->get();
        // return $category;
        return view('backend.product.create')->with('categories',$category)->with('vendors',$vendor);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'required',
            'description'=>'required',
            'photo'=> 'required|image',
            'size'=>'nullable',
            'model_number'=>'required',
            'stock'=>'required|numeric',
            'cat_id'=>'required|exists:categories,id',
            'brand_id'=>'nullable|exists:brands,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            'is_featured'=>'sometimes|in:1',
            'status'=>'required|in:active,inactive',
            'condition'=>'required|in:default,new,hot',
            'price'=>'required|numeric',
            'discount'=>'nullable|numeric',
        ]);



        $data = $request->all();
        $slug = Str::slug($request->title);
        $count=Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['is_featured']=$request->input('is_featured',0);
        $size=$request->input('size');
        if($size){
            $data['size']=implode(',',$size);
        }
        else{
            $data['size']='';
        }

        // store image
        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/product');
            $image->move($destinationPath, $name);
            $data['photo'] = $name;
        }

        // return $size;
        // return $data;

        $status=Product::create($data);
        if($status){
            request()->session()->flash('success','Product Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');

    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $vendor = Vendor::get();
        $product = Product::findOrFail($id);
        $category = Category::where('is_parent',1)->get();
        $items = Product::where('id',$id)->get();
        // return $items;
        return view('backend.product.edit')->with('product',$product)
                    ->with('vendors',$vendor)
                    ->with('categories',$category)->with('items',$items);
    }

    public function update(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
            'size'=>'nullable',
            'stock'=>"required|numeric",
            'cat_id'=>'required|exists:categories,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            'is_featured'=>'sometimes|in:1',
            'brand_id'=>'nullable|exists:vendors,id',
            'status'=>'required|in:active,inactive',
            'condition'=>'required|in:default,new,hot',
            'price'=>'required|numeric',
            'discount'=>'nullable|numeric'
        ]);

        $data = $request->all();
        $data['is_featured'] = $request->input('is_featured',0);
        $size = $request->input('size');

        if($size){
            $data['size'] = implode(',',$size);
        }
        else{
            $data['size'] = '';
        }
        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/product');
            $image->move($destinationPath, $name);
            $data['photo'] = $name;
        } else {
            $data['photo'] = $request->photo;
        }
        // return $data;
        $status=$product->fill($data)->save();
        if($status){
            request()->session()->flash('success','Product Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $status=$product->delete();

        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('product.index');
    }
}
