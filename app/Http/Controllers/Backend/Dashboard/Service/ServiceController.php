<?php

namespace App\Http\Controllers\Backend\Dashboard\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ServiceRequest;
use App\Models\Permission;
use App\Models\SetPermission;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Models\LogModel;
class ServiceController extends Controller
{
    public function create()
    {
        return view('backend.dashboard.service.create');
    }
    public function store(ServiceRequest $request)
    {
        $data = new Service;
        $data->servicename = $request->Service_Name;
        $data->amount = $request->Amount;
        $data->servicedetails = $request->Service_Detalis;
        $store = $data->save();
        if($store){
            $admin = getActiveAdminDetails();
            if($admin->role == null){
                $role =  'Administartor';
            }
            else{
                $role =  $admin->role->name;
            }
            $description = 'New Service Create';
            $log_title = 'New Service Created by &nbsp;<b>'.$admin->name.'('.$role.')</b>';
            $log_data = [
                'patient_id'=>$data->id,
                'user_id'=>$admin->id,
                'log_title'=>$log_title,
                'log_type'=>'Service',
                'description'=>$description,
                'ip_address'=> $request->ip()
            ];
            save_log($log_data);
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Service Added Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
        }

        return $response;

    }

    public function view()
    {
        return view('backend.dashboard.service.view');
    }

    public function display(Request $request)
    {
        if ($request->ajax()) {

            $sql =Service::select('*');
            $row = $request->row;
            $type = $request->type;
            $from_date = $request->from_date;
            $to_date = $request->to_date;

            $discharge_status = $request->status;
            if($type !="")
            {
              $sql->where('shop_type_id',$type);
            }
            if($discharge_status !="")
            {
               $sql->where('discharge_status',$discharge_status);
            }
            if($from_date !='' && $to_date =='')
            {
               $sql->whereDate('created_at','>=',$from_date);
            }
            if($to_date !='' && $from_date =='')
            {
               $sql->whereDate('created_at','<=',$to_date);
            }

            if($from_date !='' && $to_date !='')
            {
               $sql->whereBetween(DB::raw("(DATE_FORMAT(created_at,'%Y-%m-%d'))"),[$from_date,$to_date]);
            }

            // $sql->orderby('id','ASC');

            // if($row !="All")
            // {
            //   $sql->limit($row);
            // }
            return Datatables::of($sql)
            ->editColumn('discharge_status', function ($row) {
                return '<span class="badge bg-success">'.getPatientDischarge($row->discharge_status).'</span>';
            })
            ->addColumn('action', function ($row) {
                $delete = '';
                $edit = '';
                if(getLogInUserPermission('admin.service.delete')){
                    $delete = '<a href="javascript:void(0)" data-id="'.$row->id.'" data-token="'.csrf_token().'" data-url="'.route('admin.service.delete').'" class=" Delete_Button"><i class="fa fa-trash btn btn-danger"></i></a>
                ';
                }
                if(getLogInUserPermission('admin.service.edit')){
                    $edit = '<a href="'.route('admin.service.edit', ['id' => $row->id]).'" class=""><i class="fa fa-edit btn btn-warning"></i></a>';
                }
                return $edit.'&nbsp;&nbsp;'.$delete;
            })
            ->escapeColumns([])
            ->make(true);
        }
    }

    public function delete(Request $request)
    {
        # code...
        $data = Service::find($request->id);
        if(!empty($data)){
            $data->delete();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Service Detele Successfully");

        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Delete Service !");
        }

     return $response;

    }

    public function status(Request $request)
    {
        # code...
        $data = Role::find($request->id);
        if(!empty($data)){
            $data->status = $request->status;
            $data->save();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Role Status Update Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Update Role Status !");
        }

     return $response;

    }

    public function edit($id)
    {
        $service_details = Service::where('id',$id)->first();
        if(!empty($service_details))
        {
            return view('backend.dashboard.service.edit',compact('service_details'));
        }

        return view('backend.dashboard.service.view');

    }

    public function update(ServiceRequest $request)
    {
        $service =Service::find($request->id);
        if(!empty($service))
        {
            $description = '<b>Service Updated</b>';
            if($service->servicename != $request->Service_Name){
                $description .='Service Name changes from '.$service->servicename.' to '.$request->Service_Name.'<br>';
            }
            $service->servicename = $request->Service_Name;
            if($service->amount != $request->Amount){
                $description .='Amount changes from '.$service->amount.' to '.$request->Amount.'<br>';
            }
            $service->amount = $request->Amount;
            if($service->servicedetails != $request->Service_Detalis){
                $description .='Service Details changes from '.$service->servicedetails.' to '.$request->Service_Detalis.'<br>';
            }
            $service->servicedetails = $request->Service_Detalis;
            $store = $service->save();
            if($store){
                $admin = getActiveAdminDetails();
                if($admin->role == null){
                    $role =  'Administartor';
                }
                else{
                    $role =  $admin->role->name;
                }
                $log_title = ' Service Updated by &nbsp;<b>'.$admin->name.'('.$role.')</b>';
                $log_data = [
                    'patient_id'=>$request->id,
                    'user_id'=>$admin->id,
                    'log_title'=>$log_title,
                    'log_type'=>'Service',
                    'description'=>$description,
                    'ip_address'=> $request->ip()
                ];
                save_log($log_data);

                $response =  getResponse(true,true,false,route('admin.service.view'),"Service Update Successfully");

            }
            else{
                $response =  getResponse(false,false,false,null,"Technical isuue, please try again.. !");

            }
            return $response;
        }
    }
}

