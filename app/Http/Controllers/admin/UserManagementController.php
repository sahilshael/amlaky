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
        
        $user_data = User::select('users.*');
        return DataTables::of($user_data)
                    ->addIndexColumn()
                    ->addColumn('checkbox',function ($user_data) {
                                                
                       return '<input type="checkbox" id="'.$user_data->id.'" value="'.$user_data->id.'"  class="child_all" name="someCheckbox[{{$user_data}}]" />';
                    })
                    ->addColumn('action',function ($user_data) {
                                                
                       // return '<a href="'.url("/edit_user/".$user_data->id).'" > <i class="fa fa-edit"></i> </a>'.' '.'<a href="'.url("/delete_user/".$user_data->id).'" ><i class="fa fa-trash"></i></a>';
                       return '<a href="javascript:;" > <i class="fa fa-edit"></i> </a>'.' '.'<a href="javascript:;" ><i class="fa fa-remove"></i></a>';
                    })
                    ->editColumn('created_at', function ($user_data) {
                        return $user_data->created_at ? with(new Carbon($user_data->created_at))->format('Y-m-d') : '';
                    })
                    ->escapeColumns([])
                    ->make(true);    
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
}
