<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests, DB, Session, Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\User;

class UserController extends Controller
{
    //
    public function signup(Request $request)
    {
    	if($request->isMethod('post')){
            $data = $request->all();
            $user = new User();
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->email = $data['email'];
            $user->contact = $data['contact'];
            $user->company = $data['company'];
            $user->decoded_password = $data['password'];
            $user->password = Hash::make($data['password']);
            $user->properties_managed = $data['properties_managed'];
            // $user->otp = rand(1000 , 9999 );
            $user->otp = 1234;

            if($user->save()){
                $userId = $user->id;
                return $arrayName = array('status' => 'true','userId'=>$userId);
            }
    	}
    	$type = $request->get('type');
    	return view('frontend/signup', ['type'=>$type]);
    }

    public function verifyOtp(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $db_otp = User::where('id', $data['user_id'])->value('otp');
            if($db_otp == $data['otp']){
                $update = User::where('id',$data['user_id'])->update(['otp_verified'=>'yes']);
                if($update){
                    return $arrayName = array('status' => 'true');
                }else{
                    return $arrayName = array('status' => 'false', 'message' => 'otp not verified');
                }
            }else{
                return $arrayName = array('status' => 'false', 'message' => 'Invalid Otp');
            }
        }
    }


    public function checkEmail(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $checkmail = User::where('email', $data['email'])->first();
            // dd($checkmail);
            if ($checkmail != '' && $checkmail != null) {
                return 'false';
            }else {
                return 'true';      
            }
        }
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $user = User::where('email', $data['email'])->first();
            if(User::where('email',$data['email'])->first()){   
                if($user->status == 'active'){   
                    if($user->otp_verified == 'yes'){   
                        if(Auth::guard('web')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                            Session::flash('success','Logged in successfully');
                            return redirect('/landlord-dashboard');
                        }else{                                 
                            Session::flash('error','Your password is incorrect');
                            return redirect()->back();                
                        }                         
                    }else{
                        Session::flash('error','Otp not verified');
                        return redirect()->back();
                    }
                }else{
                    Session::flash('error','Your Account is deactivated');
                    return redirect()->back();
                }
            }else{
                Session::flash('error','Please enter correct email address');
                return redirect()->back();
            }

        }
    }

    public function landlordDashboard(Request $request)
    {
    	$user = Auth::user();
        return view('frontend/propertyManagement/landlordDashboard', ['user'=>$user]);
    }

    public function logout(Request $request)
    {
    	Auth::logout();
    	Session::flash('success','Logged out successfully');
  		return redirect('/');
    }

    public function landlordProfile(Request $request)
    {
    	$user = Auth::user();
    	if($user){
	  		return view('frontend/propertyManagement/landlordProfile', ['user'=>$user]);
    	}
    }

}
