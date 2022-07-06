<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Validator;
use App\Appointment;
use App\Personal;
use App\Education;
use App\Bank;
use App\Utilitybill;
use App\Drivinglicense;
use App\Livephoto;
use App\Biometric;
use Auth;

class AccountLevelController extends Controller
{
    use ApiResponser;

    public function appointment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $appointment = new Appointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->mobile = $request->mobile;
        $appointment->address = $request->address;
        $result = $appointment->save();
        if($result){
            return $this->sendResponse(true, $result, ['Appointment has been added successfully!']);
        }
    }
    public function appointmentUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $appointment = Appointment::find($id);
        $appointment->user_id = Auth::user()->id;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->mobile = $request->mobile;
        $appointment->address = $request->address;
        $result = $appointment->save();
        if($result){
            return $this->sendResponse(true, $result, ['Appointment has been updated successfully!']);
        }
    }

    public function personal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $personal = new Personal();
        $personal->user_id = Auth::user()->id;
        $personal->name = $request->name;
        $personal->email = $request->email;
        $personal->mobile = $request->mobile;
        $personal->address = $request->address;
        $result = $personal->save();
        if($result){
            return $this->sendResponse(true, $result, ['Personal information has been added successfully!']);
        }
    }

    public function personalUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $personal = Personal::find($id);
        $personal->user_id = Auth::user()->id;
        $personal->name = $request->name;
        $personal->email = $request->email;
        $personal->mobile = $request->mobile;
        $personal->address = $request->address;
        $result = $personal->save();
        if($result){
            return $this->sendResponse(true, $result, ['Personal information has been updated successfully!']);
        }
    }

    public function education(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'school' => 'required',
            'school_year' => 'required',
            'degree' => 'required',
            'degree_year' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $education = new Education();
        $education->user_id = Auth::user()->id;
        $education->school = $request->school;
        $education->school_year = $request->school_year;
        $education->degree = $request->degree;
        $education->degree_year = $request->degree_year;
        $result = $education->save();
        if($result){
            return $this->sendResponse(true, $result, ['Education has been added successfully!']);
        }
    }
    public function educationUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'school' => 'required',
            'school_year' => 'required',
            'degree' => 'required',
            'degree_year' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $education = Education::find($id);
        $education->user_id = Auth::user()->id;
        $education->school = $request->school;
        $education->school_year = $request->school_year;
        $education->degree = $request->degree;
        $education->degree_year = $request->degree_year;
        $result = $education->save();
        if($result){
            return $this->sendResponse(true, $result, ['Education has been updated successfully!']);
        }
    }

    public function bank(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bank_name' => 'required',
            'account_number' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $bank = new Bank();
        $bank->user_id = Auth::user()->id;
        $bank->bank_name = $request->bank_name;
        $bank->account_number = $request->account_number;
        $result = $bank->save();
        if($result){
            return $this->sendResponse(true, $result, ['Bank has been added successfully!']);
        }
    }
    public function bankUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'bank_name' => 'required',
            'account_number' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $bank = Bank::find($id);
        $bank->user_id = Auth::user()->id;
        $bank->bank_name = $request->bank_name;
        $bank->account_number = $request->account_number;
        $result = $bank->save();
        if($result){
            return $this->sendResponse(true, $result, ['Bank has been updated successfully!']);
        }
    }

    public function utilityBill(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bill' => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,txt,csv|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        if ($file = $request->file('bill')) {
            $name = $file->getClientOriginalName();
            $request->bill->move(public_path('files'), $name);

            $utilitybill = new Utilitybill();
            $utilitybill->user_id = Auth::user()->id;
            $utilitybill->bill = ('files/'.$name);
            $result = $utilitybill->save();

            if($result){
                return $this->sendResponse(true, $result, ['Utility Bill has been added successfully!']);
            }
        }
    }
    public function utilityBillUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'bill' => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,txt,csv|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        if ($file = $request->file('bill')) {
            $name = $file->getClientOriginalName();
            $request->bill->move(public_path('files'), $name);

            $utilitybill = Utilitybill::find($id);
            $utilitybill->user_id = Auth::user()->id;
            $utilitybill->bill = ('files/'.$name);
            $result = $utilitybill->save();

            if($result){
                return $this->sendResponse(true, $result, ['Utility Bill has been updated successfully!']);
            }
        }
    }

    public function drivingLicense(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'license' => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,txt,csv|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        if ($file = $request->file('license')) {
            $name = $file->getClientOriginalName();
            $request->license->move(public_path('files'), $name);

            $drivingLicense = new Drivinglicense();
            $drivingLicense->user_id = Auth::user()->id;
            $drivingLicense->license = ('files/'.$name);
            $result = $drivingLicense->save();

            if($result){
                return $this->sendResponse(true, $result, ['Driving License has been added successfully!']);
            }
        }
    }
    public function drivingLicenseUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'license' => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,txt,csv|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        if ($file = $request->file('license')) {
            $name = $file->getClientOriginalName();
            $request->license->move(public_path('files'), $name);

            $drivingLicense = Drivinglicense::find($id);
            $drivingLicense->user_id = Auth::user()->id;
            $drivingLicense->license = ('files/'.$name);
            $result = $drivingLicense->save();

            if($result){
                return $this->sendResponse(true, $result, ['Driving License has been update successfully!']);
            }
        }
    }

    public function livePhoto(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'photo' => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,txt,csv|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        if ($file = $request->file('photo')) {
            $name = $file->getClientOriginalName();
            $request->photo->move(public_path('files'), $name);

            $photo = new Livephoto();
            $photo->user_id = Auth::user()->id;
            $photo->photo = ('files/'.$name);
            $result = $photo->save();

            if($result){
                return $this->sendResponse(true, $result, ['Live Photo License has been added successfully!']);
            }
        }
    }
    public function livePhotoUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'photo' => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,txt,csv|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        if ($file = $request->file('photo')) {
            $name = $file->getClientOriginalName();
            $request->photo->move(public_path('files'), $name);

            $photo = Livephoto::find($id);
            $photo->user_id = Auth::user()->id;
            $photo->photo = ('files/'.$name);
            $result = $photo->save();

            if($result){
                return $this->sendResponse(true, $result, ['Live Photo License has been update successfully!']);
            }
        }
    }

    public function biometric(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'biometric' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }

        $biometric = new Biometric();
        $biometric->user_id = Auth::user()->id;
        $biometric->biometric = $request->biometric;
        $result = $biometric->save();

        if($result){
            return $this->sendResponse(true, $result, ['Biometric Done Successfully!']);
        }
    }

    public function accountLevel()
    {
        $appointment = Appointment::where('user_id' , Auth::user()->id)->first();
        $personal = Personal::where('user_id' , Auth::user()->id)->first();
        $education = Education::where('user_id' , Auth::user()->id)->first();
        $bank = Bank::where('user_id' , Auth::user()->id)->first();
        $utilitybill = Utilitybill::where('user_id' , Auth::user()->id)->first();
        $drivingLicense = Drivinglicense::where('user_id' , Auth::user()->id)->first();
        $livePhoto = Livephoto::where('user_id' , Auth::user()->id)->first();
        $biometric = Biometric::where('user_id' , Auth::user()->id)->first();

        return $this->sendResponse(true, [
            "appointment" => $appointment,
            "personal" => $personal,
            "education" => $education,
            "bank" => $bank,
            "utilitybill" => $utilitybill,
            "drivingLicense" => $drivingLicense,
            "livePhoto" => $livePhoto,
            "biometric" => $biometric,
        ], [$appointment && $personal && $education && $bank && $utilitybill && $drivingLicense && $livePhoto && $biometric ? 'Verified' : 'None Verified']);
    }
}
