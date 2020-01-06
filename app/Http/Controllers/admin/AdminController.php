<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request,Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use App\Admin;
use App\City;
use Session;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\User;
use \Carbon\Carbon;
use DataTables;

class AdminController extends Controller
{

    public function Login(Request $req)
    {
    	if(Auth::guard('admins')->check())
	    {
	    	return Redirect('admin/dashboard');
	    }
	    if($req->isMethod('post'))
	    {	
	    	$data=$req->all();
	        $arr=array('email'=>$data['email'],'password'=>$data['password']);
	        if(Auth::guard('admins')->attempt($arr))
	        {
	        	Session::flash('success','login successfully');
	          	return Redirect('admin/dashboard');
	        }else{
	          	Session::flash('error','invalid credentials');
	          	return Redirect('/admin');
	        }
	        return Redirect('admin/dashboard');
	    }
	    return view('admin.admin.login');
    }

    public function Dashboard()
    {
        
        return view('admin.admin.dashboard');
    }

    public function Logout(Request $request)
    {
	    Auth::guard('admins')->logout();
	    Session::flash('success', 'You have been successfully logged out!');
	    return Redirect('/admin');
    }

    public function forgotPassword(Request $req)
	{
        if($req->isMethod('post'))
  		{
    		$data        =  $req->all();
    		$email       =  $data['email'];
    		$check       =  DB::table('admins')->where('email',$email)->first();
            if($check)
    		{
      		$email          =  $check->email;     
      		$encoded_id     = base64_encode($check->id);
       		$random_number  = rand();
			$message = [
                  		'name'           =>     $check->first_name,
                   		'id'            =>     $encoded_id,
                   		'random_number' =>     $random_number
                  		];
			Mail::send('admin.Email.adminForgotPassword', $message, function($message) use($email)
          	{
            	$message->to($email)->subject('Forgot Password'); 
          	});
      		$update  =   DB::table('admins')->where('id',$check->id)->update(['reset_password'=>$random_number]);
			Session::flash('success','Your Forgot Password Link Send To Your Registered Email Address');
       		return Redirect('/admin');
    		}else{
      			Session::flash('error','this email id doesnot exist');
      			return Redirect()->back();
			}
  		}
 		return view('admin.admin.forgotPassword');
	}

	public function adminresetPassword(Request $req,$id,$random_number)
	{

		$id = base64_decode($id);
		if($req->isMethod('post'))
		{
		    $data                        = $req->all();
		    $newdata['password']         =  Hash::make($data['password']); 
		    $newdata['decoded_password'] = $data['password'];
		    $newdata['reset_password']   = '0';
		    if(DB::table('admins')->where('id',$id)->update($newdata))
		    {
		      	Session::flash('success','Password Changed Successfully');
		      	return view('admin.admin.resetThanku');
		    }
		   else
		   	{
		      	Session::flash('error','Password could not be change');
                // return view('admin.admin.resetError');
		      	return redirect()->back();
		   	}
		}
		$alreadydata = DB::table('admins')->where('id',$id)->first();
		if($alreadydata->reset_password==$random_number)
		{
			return view('admin.admin.resetPassword')->with(['id'=>$id,'random_number'=>$random_number]);
		}else{
		    Session::flash('flash_message_incorrect', 'Your Link has been expired please send again !');
		    return view('admin.admin.linkExpire');
		} 
	}


	public function Profile(Request $request){
        if($request->isMethod('post')){

            $data       = $request->all();
            $user_id    = Auth::guard('admins')->user()->id;

            // ***********Profile Data Update Starts ***************//
            if(!empty($data['username']) && !empty($data['phone_no']) && !empty($data['first_name']) && !empty($data['last_name'])){

                $update     =   Admin::where('id',$user_id)->update([

                                    'username'      =>  $data['username'],
                                    'first_name'      =>  $data['first_name'],
                                    'last_name'      =>  $data['last_name'],
                                    'phone_no'  =>  $data['phone_no'],

                                ]);
                if($update){

                    $request->session()->flash('alert-success','Profile Updated Successfully.');
                    return redirect::back();
                }
            }
			// ***********Profile Data Update Ends ***************//
			// ***********Profile image upload start ***************//

            if(!empty($data['image'])){

                $file       =   $data['image']; 
                if(isset($file)){
                	$extension      =   pathinfo($_FILES['image']['name']);
                    $extension      =   $extension['extension'];
                    $destination    =   "public/admin/profile_img/";
                    if($extension  == "jpg" || $extension == "jpeg" || $extension == "png"){

                        $filename   =   rand(11111,99999).'.'.$extension;
                        $file->move($destination, $filename);

                        $update_img =   Admin::where('id',$user_id)->update([

                                            'image'    => $filename,
                                        ]);
                    }
                }
                if($update_img){

                    $request->session()->flash('alert-success','Profile Picture Updated Successfully.');
                    return redirect::back();
                }
            }

            // ***********Profile image upload Ends ***************//

            // ***********Password update start ***************//

            if(!empty($data['password']) && !empty($data['new_password']) && !empty($data['retype_password'])){

                $change_pass    =   bcrypt($data['new_password']);
                $update_pass    =   Admin::where('id',$user_id)->update([

                                            'password'      =>  $change_pass,
                                            'decoded_password'  =>  $data['new_password'],

                                    ]);
                if($update_pass){

                    $request->session()->flash('alert-success','Password has been changed successfully.');
                    return redirect::back();
                }
            }
			// ***********Password update Ends  ***************//
		}else{
            return view('admin.admin.profile');
		}
	}

    public function checkCurrentPassword(Request $request){

        $data               = $request->input();
        $id                 = Auth::guard('admins')->user()->id;
        $password           = $data['password'];
        $admin              = Admin::where('id',$id)->first();
        $admin              = json_decode(json_encode($admin),true);

        if($admin && Hash::check($password, $admin['password'])) {            
            return "true";
        }else{
            return "false";
        }
    }

    public function cities(Request $request){

        // return view('admin.profile')
    }


    //========================================================CITY====================================================


    public function City(Request $request) {   
        
        return view('admin.admin.cityManagement.city');
        
    }
    public function ajaxCity(Request $request)  
    {   
        $city_data = City::select('cities.*');
        return DataTables::of($city_data)
                    ->addIndexColumn()
                    ->addColumn('checkbox',function ($city_data) {
                                                
                       return '<input type="checkbox" id="'.$city_data->id.'" value="'.$city_data->id.'"  class="child_all" name="someCheckbox[{{$types_data}}]" />';
                    })
                    ->addColumn('action',function ($city_data) {
                                                
                       // return '<a href="'.url("admin/edit-property-type/".$types_data->id).'" > <i class="fa fa-edit"></i> </a>'.' '.'<a href="'.url("/delete_user/".$types_data->id).'" ><i class="fa fa-trash"></i></a>';
                       return '<a href="'.url("admin/edit-city/".$city_data->id).'" > <i class="fa fa-edit"></i> </a>';
                    })
                    ->editColumn('created_at', function ($city_data) {
                        return $city_data->created_at ? with(new Carbon($city_data->created_at))->format('Y-m-d') : '';
                    })
                    ->escapeColumns([])
                    ->make(true);    
    }

    public function addCity(Request $request){
        if($request->isMethod("post")){
            $data = $request->all();
            // dd($data);
            $insert=City::create(['city_name'=>$data['city_name']]);
            if($insert){
                session::flash('success','City added successfully');
                return redirect('admin/city');
            }else{
                session::flash('error','Something went wrong');
                return redirect('admin/city');
            }
        }

        return view('admin.admin.cityManagement.addCity');
    }

    public function editCity(Request $request,$id){

        $details=DB::table('cities')->where('id',$id)->first();

        if($request->isMethod("post")){
            $data = $request->all();
            // dd($data);
            $update=City::where('id',$id)->update(['city_name'=>$data['city_name']]);
            if($update){
                session::flash('success','City edited successfully');
                return redirect('admin/city');
            }else{
                session::flash('error','Something went wrong');
                return redirect('admin/city');
            }
        }

        return view('admin.admin.cityManagement.editCity')->with('details',$details);
    }

    public function checkCity(Request $request){
        $data=$request->all();
        $check=DB::table('cities')->where('city_name',$data['city_name'])->first();
        if($check){
            return 'false';
        }else{
            return 'true';
        }
    }

    public function checkEditCity(Request $request,$id){
        $data=$request->all();
        // dd($id);
        $check=DB::table('cities')->where('id','<>',$id)->where('city_name',$data['city_name'])->first();
        if($check){
            return 'false';
        }else{
            return 'true';
        }
    }
}
