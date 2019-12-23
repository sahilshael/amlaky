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
                                                
                       return '<a href="'.url("/edit_user/".$user_data->id).'" > <i class="fa fa-edit"></i> </a>'.' '.'<a href="'.url("/delete_user/".$user_data->id).'" ><i class="fa fa-trash"></i></a>';
                    })
                    ->editColumn('created_at', function ($user_data) {
                        return $user_data->created_at ? with(new Carbon($user_data->created_at))->format('Y-m-d') : '';
                    })
                    ->escapeColumns([])
                    ->make(true);    
    }

    // public function editUser(Request $request,$user_id){

    //     $user = User::where('id',$user_id)->first();
    //     $user = json_decode(json_encode($user),true);
    //     if ($request->isMethod('post')) {

              
    //         session::flash('success', "User updated successfully.");
    //         return redirect('/users');
    //     } 
        
    //     return view('admin.admin.userManagement.editUsers');
    // }

    // public function checkUsername(Request $request) {  

    //     $data=$request->all();
    //     $checkmail=DB::table('users')->where('username',$data['username'])->first();
    //     if (!empty($checkmail)) {
    //         return 'false';
    //     }else {
    //         return 'true';      
    //     }
    // }

    // public function addUser(Request $request){  

    //     if ($request->isMethod('post')) {
    //         $data = $request->all(); 
    //         // $coded_password = Hash::make($data['password']);
    //         // $user_group = User::insertGetId([]);
                      
    //         // session::flash('success', "User added successfully.");
    //         // return redirect('/users');
    //     }
    //     return view('admin.admin.userManagement.addUser');
    // }

    // public function userMarkAsDelete(Request $request){
    //     if($request->isMethod("post")){
    //         $payid = $request->someCheckbox;
    //         $count = implode(" ",$payid);
    //         $count = explode(",",$count);
    //         $delete=DB::table('users')->whereIn('id',$count)
    //                                ->delete();
    //         if($delete){
    //             session::flash('success','data delete successfully');
    //             return redirect('/users');
    //         }else{
    //             session::flash('error','data not deleted');
    //             return redirect('/users');
    //         }
    //     return redirect('/users');
    //     }
    // }

    // public function StatusActive(Request $request){
    //     if($request->isMethod("post")){
    //         $payid = $request->someCheckbox;
    //         $count = implode(" ",$payid);
    //         $count = explode(",",$count);
    //         $update=DB::table('users')->whereIn('id',$count)
    //                                ->update(['status'=>'active']);
    //         if($update){
    //             session::flash('success','status changed to active');
    //             return redirect('/users');
    //         }else{
    //             session::flash('error','status not change');
    //             return redirect('/users');
    //         }
    //     return redirect('/users');
    //     }
    // }
    // public function StatusInactive(Request $request){
    //     if($request->isMethod("post")){
    //         $payid = $request->someCheckbox;
    //         $count = implode(" ",$payid);
    //         $count = explode(",",$count);
    //         $update=DB::table('users')->whereIn('id',$count)
    //                                ->update(['status'=>'inactive']);
    //         if($update){
    //             session::flash('success','status changed to inactive');
    //             return redirect('/users');
    //         }else{
    //             session::flash('error','status not change');
    //             return redirect('/users');
    //         }
    //     return redirect('/users');
    //     }
    // }
    
    // public function userExcelDownload(Request $request){
    //     $data=$request->all();
    //     return Excel::download(new UserExport($data), 'users-list-'.Carbon::now()->format('Y-m-d').'.xlsx');
    // }
}
