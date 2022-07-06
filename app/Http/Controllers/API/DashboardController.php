<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Validator;
use App\Models\Brand;
use App\User;
use App\Models\Vendor;
use App\Suggestproduct;
use Auth;
use Hash;

class DashboardController extends Controller
{


    public function brands()
    {
        $brands = Brand::all();
        return $this->sendResponse(true, $brands, ['Brands data is here']);
    }

    public function categories()
    {
        $brands = Category::all();
        return $this->sendResponse(true, $brands, ['Brands data is here']);
    }

    public function profileUpdate(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $result = $user->save();
        if ($result) {
            return $this->sendResponse(true, $result, ['User Profile Update Successfully!']);
        }
    }

    public function changePassword(Request $request)
    {
        if(Hash::check($request->old_password, Auth::user()->password)){
            if($request->new_password != $request->password_confirmation){
                return $this->sendError(["Password Not match"]);
            }else{
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->new_password);
                $result = $user->save();
                if($request){
                    return $this->sendResponse(true, $result, ['User Password Update Successfully!']);
                }
            }
        }else{
            return $this->sendError(["Old Password not match"]);
        }
    }
    public function getProfile()
    {
        $user = User::find(Auth::user()->id);
        return $this->sendResponse(true, $user, ['User Password Update Successfully!']);
    }
    public function suggestProduct(Request $request)
    {
        $suggestProduct = new Suggestproduct();
        $suggestProduct->user_id = Auth::user()->id;
        $suggestProduct->name = $request->name;
        $suggestProduct->size = $request->size;
        $suggestProduct->price = $request->price;
        $suggestProduct->save();
        return $this->sendResponse(true, $suggestProduct, ['Suggestion Product has been added successfully!']);
    }
    public function storeLocator()
    {

        $data = Vendor::all();
        return $this->sendResponse(true, $data, []);
    }
}
