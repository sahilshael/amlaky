<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,Redirect;
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
            $email = $user->email;
            $user->contact = $data['contact'];
            $user->company = $data['company'];
            $user->decoded_password = $data['password'];
            $user->password = Hash::make($data['password']);
            $user->properties_managed = $data['properties_managed'];
            // $user->otp = rand(1000 , 9999 );
            $user->otp = 1234;

            $message = [
                'name'    =>     $user->first_name,
                'otp'      =>    $user->otp,
            ];

            Mail::send('frontend.email.OTPVerify', $message, function($message) use($email)
            {
                $message->to($email)->subject('Verify OTP'); 
            });
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

    public function landlordEditProfile(Request $request)
    {
        $user = Auth::user();
        
        if($request->isMethod('post')){
            $data=$request->all();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $rand = uniqid();
                $extension = $image->getClientOriginalExtension();
                $new_name = $rand.'.'.$extension;
                $destination = profile_img;
                if ($extension == 'jpg'||$extension == 'jpeg'||$extension == 'png'||$extension == 'gif') {
                    $image->move($destination, $new_name);
                    $fileName  = $new_name;
                }
            }
            $update=DB::table('users')->where('id',$user->id)->update([
                                                            'first_name'=>$data['first_name'],
                                                            'last_name'=>$data['last_name'],
                                                            'contact'=>$data['contact'],
                                                            'profile_image'=>$fileName,]);
            if ($update) {
                session::flash('success', "Data updated successfully.");
                return Redirect::back();
            }else {
                session::flash('error', "Data not updated.");
                return Redirect::back();    
            }
        }
        if($user){
            return view('frontend/propertyManagement/landlordEditProfile', ['user'=>$user]);
        }
    }

    public function landlordResetPassword(Request $request)
    {
        $user = Auth::user();
        if($request->isMethod('post')){
            $data=$request->all();
            // dd($data);

            $change_pass    =   bcrypt($data['new_password']);
            $update_pass    =   DB::table('users')->where('id',$user->id)->update([

                                        'password'      =>  $change_pass,
                                        'decoded_password'  =>  $data['new_password'],

                                ]);
            if($update_pass){
                return $arrayName = array('status' => 'true');
            }else{
                return $arrayName = array('status' => 'false');
            }
        }
        if($user){
            return view('frontend/propertyManagement/landlordChangePassword', ['user'=>$user]);
        }
    }

    public function landlordCurrentPassword(Request $request){

        $data               = $request->input();
        $id                 = Auth::user()->id;
        $password           = $data['password'];
        $users              = DB::table('users')->where('id',$id)->first();
        $users              = json_decode(json_encode($users),true);

        if($users && Hash::check($password, $users['password'])) {            
            return "true";
        }else{
            return "false";
        }
    }

    public function forgotPassword(Request $req)
    {
        if($req->isMethod('post'))
        {
            $data        =  $req->all();
            $email       =  $data['email'];
            $check       =  DB::table('users')->where('email',$email)->first();
            if($check){
                $email          =  $check->email;     
                $encoded_id     = base64_encode($check->id);
                $random_number  = rand();
                $message = [
                            'name'           =>     $check->first_name,
                            'id'            =>     $encoded_id,
                            'random_number' =>     $random_number
                            ];
                Mail::send('frontend.email.ForgotPassword', $message, function($message) use($email)
                {
                    $message->to($email)->subject('Forgot Password'); 
                });
                $update  =   DB::table('users')->where('id',$check->id)->update(['reset_password'=>$random_number]);
                Session::flash('success','Reset Password Link Send To Your Registered Email Address');
                return Redirect('/signup-cards');
            }else{
                Session::flash('error','this email id doesnot exist');
                return Redirect()->back();
            }
        }
        return view('frontend.forgotPassword');
    }

    public function resetPassword(Request $req,$id,$random_number)
    {

        $id = base64_decode($id);
        if($req->isMethod('post'))
        {
            $data                        = $req->all();
            $newdata['password']         =  Hash::make($data['password']); 
            $newdata['decoded_password'] = $data['password'];
            $newdata['reset_password']   = '0';
            if(DB::table('users')->where('id',$id)->update($newdata))
            {
                Session::flash('success','Password Changed Successfully');
                return view('frontend.resetThanku');
            }
           else
            {
                Session::flash('error','Password not changed');
                return view('frontend.resetError');
            }
        }
        $alreadydata = User::where('id',$id)->first();
        if($alreadydata->reset_password==$random_number)
        {
            return view('frontend.resetPassword')->with(['id'=>$id,'random_number'=>$random_number]);
        }else{
            Session::flash('error', 'Your Link has been expired please send again !');
            return view('frontend.linkExpire');
        } 
    }

}
