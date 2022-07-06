<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\ResetPassword;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use DB;
use Carbon\Carbon;
use Mail;

use Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    use ApiResponser;
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'mobile' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
        }
        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'mobile' => $request->mobile,
        ]);


        if($user) {
            return $this->sendResponse(true, $user, ['You have been successfully registered!']);
        } else {
            return $this->sendError(['User not registered']);
        }

    }

    public function login(Request $request)
    {
        $attr = array(
            'email' => $request->email,
            'password' => $request->password,
        );

        if (!Auth::attempt($attr)) {
            return $this->sendError(['Credentials not match']);
        } else {
            $message['token'] = auth()->user()->createToken('API Token')->plainTextToken;
            return $this->sendResponse(true,$message, ['user successfully login']);
        }

    }

    public function logout()
    {
        $user = auth()->user()->tokens()->delete();
        return $this->sendResponse(true, $user, ['user logout successfully']);
        //logout api
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $data = User::where('email', $request->email)->first();
        if(!$data){
            return $this->sendError(["Given Email doesn't exist"]);
        }else{
            $random = random_int(100000, 999999);

            $token = new ResetPassword();
            $token->email = $request->email;
            $token->token = $random;
            $token->save();

            $data = array('code'=>$random, 'email'=>$request->email);

            $details = [
                'title' => 'Mail from SaholatKar',
                'body' => $random
            ];

            \Mail::to($request->email)->send(new \App\Mail\ForgetPaswordMail($details));

            return $this->sendResponse(true, $data, ['Reset Password mail send successfully!']);
        }
    }
    public function checkCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required,email',
            'code' => 'required|min:6',
        ]);
        $token = ResetPassword::where('email', $request->email)->where('token', $request->code)->latest()->first();

        if(!$token){
            return $this->sendError(["Given Code doesn't exist"]);
        }else{
            return $this->sendResponse(true, "", ["Given Code is Correct!"]);
        }
    }
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user){
            return $this->sendError(["Email Doesn't Exist"]);
        }else if($request->password != $request->password_confirmation){
            return $this->sendError(["Password Not match"]);
        }else{
            $user->password = Hash::make($request->password);
            $pass = $user->save();
            if($pass){
                return $this->sendResponse(true, "", ["Password Update Successfully!"]);
            }else{
                return $this->sendError(["Something went wrong"]);
            }
        }

    }

}
