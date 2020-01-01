<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests, DB, Session, Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Hash;
use Redirect;
use App\Admin , App\User, App\PropertyTypes;
use Carbon\Carbon;
use DataTables;

class PropertyController extends Controller
{
    //
    public function propertyTypes(Request $request) {   
        
        return view('admin.propertyManagement.propertyTypes');
        
    }
    public function ajaxPropertyTypes(Request $request)  
    {   
        
        $types_data = PropertyTypes::select('property_types.*');
        return DataTables::of($types_data)
                    ->addIndexColumn()
                    ->addColumn('checkbox',function ($types_data) {
                                                
                       return '<input type="checkbox" id="'.$types_data->id.'" value="'.$types_data->id.'"  class="child_all" name="someCheckbox[{{$types_data}}]" />';
                    })
                    ->addColumn('action',function ($types_data) {
                                                
                       // return '<a href="'.url("admin/edit-property-type/".$types_data->id).'" > <i class="fa fa-edit"></i> </a>'.' '.'<a href="'.url("/delete_user/".$types_data->id).'" ><i class="fa fa-trash"></i></a>';
                       return '<a href="'.url("admin/property-sub-type/".$types_data->id).'" > <i class="fa fa-list"></i> </a>'.' '.'<a href="'.url("admin/edit-property-type/".$types_data->id).'" > <i class="fa fa-edit"></i> </a>';
                    })
                    ->editColumn('created_at', function ($types_data) {
                        return $types_data->created_at ? with(new Carbon($types_data->created_at))->format('Y-m-d') : '';
                    })
                    ->escapeColumns([])
                    ->make(true);    
    }


    /*public function propertyTypesDelete(Request $request){
        if($request->isMethod("post")){
            $payid = $request->someCheckbox;
            $count = implode(" ",$payid);
            $count = explode(",",$count);
            $delete=DB::table('property_types')->whereIn('id',$count)
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
    }*/

    
    public function propertyTypesActive(Request $request){
        if($request->isMethod("post")){
            $payid = $request->someCheckbox;
            $count = implode(" ",$payid);
            $count = explode(",",$count);
            $update=DB::table('property_types')->whereIn('id',$count)
                                   ->update(['status'=>'active']);
            if($update){
                session::flash('success','status changed to active');
                return ['status'=>'true'];
            }else{
                session::flash('error','status not change');
                return ['status'=>'false'];
            }
        // return redirect('/property_types');
        }
    }

    public function propertyTypesInactive(Request $request){
        if($request->isMethod("post")){
            $payid = $request->someCheckbox;
            $count = implode(" ",$payid);
            $count = explode(",",$count);
            $update=DB::table('property_types')->whereIn('id',$count)
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

    public function addPropertyType(Request $request){
        if($request->isMethod("post")){
            $data = $request->all();
            // dd($data);
            $insert=DB::table('property_types')->insert(['property_type'=>$data['property_type']]);
            if($insert){
                session::flash('success','Property type added successfully');
                return redirect('admin/property-types');
            }else{
                session::flash('error','Something went wrong');
                return redirect('admin/property-types');
            }
        }

        return view('admin.propertyManagement.addPropertyTypes');
    }

    public function editPropertyType(Request $request,$id){

        $details=DB::table('property_types')->where('id',$id)->first();

        if($request->isMethod("post")){
            $data = $request->all();
            // dd($data);
            $update=DB::table('property_types')->where('id',$id)->update(['property_type'=>$data['property_type']]);
            if($update){
                session::flash('success','Property type added successfully');
                return redirect('admin/property-types');
            }else{
                session::flash('error','Something went wrong');
                return redirect('admin/property-types');
            }
        }

        return view('admin.propertyManagement.editPropertyTypes')->with('details',$details);
    }

    public function checkPropertyType(Request $request){
        $data=$request->all();
        $check=DB::table('property_types')->where('property_type',$data['property_type'])->first();
        if($check){
            return 'false';
        }else{
            return 'true';
        }
    }

    public function checkEditPropertyType(Request $request,$id){
        $data=$request->all();
        // dd($id);
        $check=DB::table('property_types')->where('id','<>',$id)->where('property_type',$data['property_type'])->first();
        if($check){
            return 'false';
        }else{
            return 'true';
        }
    }
    //====================================Sub Type

    public function propertySubTypes(Request $request,$id) {   
        // dd($id);
        return view('admin.propertyManagement.propertySubTypes')->with('id',$id);
        
    }
    public function ajaxPropertySubTypes(Request $request,$id)  
    {   
        $types_data = DB::table('property_sub_types')
                            ->where('property_type_id', $id)
                            ->select('property_sub_types.*','property_types.property_type')
                            ->join('property_types','property_sub_types.property_type_id','property_types.id');
        // dd($types_data);
        return DataTables::of($types_data)
                    ->addIndexColumn()
                    // ->addColumn('checkbox',function ($types_data) {
                                                
                    //    return '<input type="checkbox" id="'.$types_data->id.'" value="'.$types_data->id.'"  class="child_all" name="someCheckbox[{{$types_data}}]" />';
                    // })
                    ->addColumn('action',function ($types_data) {
                                                
                       // return '<a href="'.url("admin/edit-property-type/".$types_data->id).'" > <i class="fa fa-edit"></i> </a>'.' '.'<a href="'.url("/delete_user/".$types_data->id).'" ><i class="fa fa-trash"></i></a>';
                       return '<a href="'.url("admin/edit-property-sub-type/".$types_data->id).'" > <i class="fa fa-edit"></i> </a>';
                    })
                    ->editColumn('created_at', function ($types_data) {
                        return $types_data->created_at ? with(new Carbon($types_data->created_at))->format('Y-m-d') : '';
                    })
                    ->escapeColumns([])
                    ->make(true);    
    }

    public function addPropertySubType(Request $request,$id){

        if($request->isMethod("post")){
            $data = $request->all();
            // dd($data);
            $insert=DB::table('property_sub_types')->insert(['property_type_id'=>$id,
                                                            'property_subtype'=>$data['property_subtype']]);
            if($insert){
                session::flash('success','Property type added successfully');
                return redirect('admin/property-sub-type/'.$id);
            }else{
                session::flash('error','Something went wrong');
                return redirect('admin/property-sub-type/'.$id);
            }
        }

        return view('admin.propertyManagement.addPropertySubTypes');
    }

    public function editPropertySubType(Request $request,$id){

        $details=DB::table('property_sub_types')->where('id',$id)->first();


        if($request->isMethod("post")){
            $data = $request->all();
            // dd($data);
            $update=DB::table('property_sub_types')->where('id',$id)->update(['property_subtype'=>$data['property_subtype']]);
            if($update){
                session::flash('success','Property type added successfully');
                return redirect('admin/property-sub-type/'.$id);
            }else{
                session::flash('error','Something went wrong');
                return redirect('admin/property-sub-type/'.$id);
            }
        }

        return view('admin.propertyManagement.editPropertySubTypes')->with('details',$details);
    }

    public function checkPropertySubType(Request $request){
        $data=$request->all();
        $check=DB::table('property_sub_types')->where('property_subtype',$data['property_subtype'])->first();
        if($check){
            return 'false';
        }else{
            return 'true';
        }
    }

    public function checkEditPropertySubType(Request $request,$id){
        $data=$request->all();
        // dd($id);
        $check=DB::table('property_sub_types')->where('id','<>',$id)->where('property_subtype',$data['property_subtype'])->first();
        if($check){
            return 'false';
        }else{
            return 'true';
        }
    }

}
