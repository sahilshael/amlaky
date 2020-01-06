<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests, DB, Session, Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Hash;
use Redirect;
use App\Admin , App\User;
use Carbon\Carbon;
use DataTables;

class UserManagementController extends Controller
{
	
    public function Users(Request $request) {   
        
        return view('admin.admin.userManagement.users');
        
    }
    public function ajaxUsers(Request $request)   
    {   
        
        $user_data = User::select('users.*')->where('deleted_at',null);
        return DataTables::of($user_data)
                    ->addIndexColumn()
                    ->addColumn('checkbox',function ($user_data) {
                                                
                       return '<input type="checkbox" id="'.$user_data->id.'" value="'.$user_data->id.'"  class="child_all" name="someCheckbox[{{$user_data}}]" />';
                    })
                    ->addColumn('action',function ($user_data) {
                                                
                       // return '<a href="'.url("admin/edit-users/".$user_data->id).'" > <i class="fa fa-edit"></i> </a>'.' '.'<a href="'.url("/delete_user/".$user_data->id).'" ><i class="fa fa-trash"></i></a>';
                       return '<a href='.url("admin/edit-users/".$user_data->id).' > <i class="fa fa-edit"></i> </a>'.' '.'<a href="javascript:;" id="'.$user_data->id.'" class="remove-data" ><i class="fa fa-remove"></i></a>';
                    })
                    ->editColumn('created_at', function ($user_data) {
                        return $user_data->created_at ? with(new Carbon($user_data->created_at))->format('Y-m-d') : '';
                    })
                    ->escapeColumns([])
                    ->make(true);    
    }

    public function userDelete(Request $request,$id){
        $date = date('m/d/Y h:i:s a', time());
        $delete=DB::table('users')->where('id',$id)->update(['deleted_at'=>$date]);
        if($delete){
            session::flash('success','data delete successfully');
            return ['status'=>'true']; 
        }else{
            session::flash('error','data not deleted');
            return ['status'=>'false']; 
        }
    }

    public function selectUserDelete(Request $request){
        if($request->isMethod("post")){
            $payid = $request->someCheckbox;
            $count = implode(" ",$payid);
            $count = explode(",",$count);
            $delete=DB::table('users')->whereIn('id',$count)
                                   ->delete();
            if($delete){
                session::flash('success','data delete successfully');
                return ['status'=>'true']; 
            }else{
                session::flash('error','data not deleted');
                return ['status'=>'false']; 
            }
            // return redirect('/users');
        }
    }

    
    public function selectUserStatusActive(Request $request){
        if($request->isMethod("post")){
            $payid = $request->someCheckbox;
            $count = implode(" ",$payid);
            $count = explode(",",$count);
            $update=DB::table('users')->whereIn('id',$count)
                                   ->update(['status'=>'active']);
            if($update){
                session::flash('success','status changed to active');
                return ['status'=>'true'];
            }else{
                session::flash('error','status not change');
                return ['status'=>'false'];
            }
        // return redirect('/users');
        }
    }

    public function selectUserStatusInactive(Request $request){
        if($request->isMethod("post")){
            $payid = $request->someCheckbox;
            $count = implode(" ",$payid);
            $count = explode(",",$count);
            $update=DB::table('users')->whereIn('id',$count)
                                   ->update(['status'=>'inactive']);
            if($update){
                session::flash('success','status changed to inactive');
                return ['status'=>'true'];
            }else{
                session::flash('error','status not change');
                return ['status'=>'false'];
            }
        // return redirect('/users');
        }
    }

    public function editUsers(Request $request,$id)
    {
        # code...
        $user=DB::table('users')->where('id',$id)->first();
        if($request->isMethod('post')){
            $data=$request->except('_token');
            
            $update=DB::table('users')->where('id',$id)->update($data);
            if($update){
                session::flash('success','User edited successfully');
                return redirect('admin/users');
            }else{
                session::flash('error','User data not change');
                return redirect('admin/users');
            }
        }
        return view('admin.admin.userManagement.editUsers')->with('user',$user);
    }

    public function checkUserEditContact(Request $request,$id)
    {
        # code...
        $data=$request->all();
        $check=DB::table('users')->where('id','<>',$id)->where('contact',$data['contact'])->first();
        if($check){
            return 'false';
        }else{
            return 'true';
        }
    }
}
