<?php

namespace App\Http\Controllers\Backend\Dashboard\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PatientRequest;
use App\Models\Permission;
use App\Models\SetPermission;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Models\LogModel;
class PatientController extends Controller
{
    public function create()
    {
        return view('backend.dashboard.patient.create');
    }
    public function store(PatientRequest $request)
    {
        $data = new Patient;
        $data->form_type = $request->form_type;
        $data->reg_no = $request->reg_no;
        $data->bed_no = $request->bed_no;
        $data->patient_name = $request->patient_name;
        $data->age = $request->age;
        $data->gender = $request->gender;
        $data->admission_date = $request->admission_date;
        $data->admission_time = $request->admission_time;
        $data->aadhaar_no = $request->aadhaar_no;
        $data->guardian_name = $request->guardian_name;
        $data->address = $request->address;
        $data->under_doctor = $request->under_doctor;
        $data->refer_doctor_1 = $request->refer_doctor_1;
        $data->refer_doctor_2 = $request->refer_doctor_2;
        $data->phone_no = $request->phone_no;
        $data->alternative_phone_no = $request->alternative_phone_no;
        $data->refer_by = $request->refer_by;
        $data->mode = $request->mode;
        $data->urn_no = $request->urn_no;
        $data->insurance_name = $request->insurance_name;
        $data->anesthesis = $request->anesthesis;
        $data->child_doctor = $request->child_doctor;
        $data->assistance_1 = $request->assistance_1;
        $data->assistance_2 = $request->assistance_2;
        $data->status = $request->status;
        $data->discharge_status = $request->discharge_status;
        $store = $data->save();
        if($store){
            $admin = getActiveAdminDetails();
            if($admin->role == null){
                $role =  'Administartor';
            }
            else{
                $role =  $admin->role->name;
            }
            $description = 'New Patient Create';
            $log_title = 'New Patient Created by &nbsp;<b>'.$admin->name.'('.$role.')</b>';
            $log_data = [
                'patient_id'=>$data->id,
                'user_id'=>$admin->id,
                'log_title'=>$log_title,
                'log_type'=>'Patient Add',
                'description'=>$description,
                'ip_address'=> $request->ip()
            ];
            save_log($log_data);
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Patient Added Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
        }

        return $response;

    }

    public function view()
    {
        return view('backend.dashboard.patient.view');
    }

    public function display(Request $request)
    {
        if ($request->ajax()) {

            $sql = Patient::select('*');
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
                if(getLogInUserPermission('admin.patient.delete')){
                    $delete = '<a href="javascript:void(0)" data-id="'.$row->id.'" data-token="'.csrf_token().'" data-url="'.route('admin.patient.delete').'" class=" Delete_Button"><i class="fa fa-trash btn btn-danger"></i></a>
                ';
                }
                if(getLogInUserPermission('admin.patient.edit')){
                    $edit = '<a href="'.route('admin.patient.edit', ['id' => $row->id]).'" class=""><i class="fa fa-edit btn btn-warning"></i></a>';
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
        $data = Role::find($request->id);
        if(!empty($data)){
            $data->delete();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Role Detele Successfully");

        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Delete Role !");
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
        $patient_details = Patient::with(['log'])->where('id',$id)->first();
        if(!empty($patient_details))
        {
            return view('backend.dashboard.patient.edit',compact('patient_details'));
        }

        return view('backend.dashboard.patient.view');

    }

    public function update(RoleRequest $request)
    {
        $role = Role::find($request->id);
        if(!empty($role))
        {
            $role->name = $request->name;
            $role->slug = $request->slug;
            $role->status = $request->status;
            $role->all = $request->permission_type;
            if($request->permission_type=='1'){
                $response = $role->save();
                if($response){
                    $response =  getResponse(true,false,false,null,"Role Update Successfully");

                }
                else{
                    $response =  getResponse(false,false,false,null,"Technical isuue, please try again.. !");

                }
            }
            else{

                $setpermission = new SetPermission;
                $permission = $request->permission_id;
                $countPermission = count($permission);
                $UpdatePermission = $setpermission->AllPermission($request->id);

                // insert permission
                    for($i=0;$i<$countPermission;$i++){
                        if(!in_array($permission[$i],$UpdatePermission['permission_id']))
                        {
                            $set_permission[] = [
                                'role_id'=>$request->id,
                                'permission_id'=>$permission[$i]
                            ];
                        }
                    }
                    // delete old permission
                    $delete_permission = [];
                    $countPermission = count($UpdatePermission['permission_id']);
                    for($i=0;$i< $countPermission;$i++){
                        if(!in_array($UpdatePermission['permission_id'][$i],$permission))
                        {
                            $delete_permission[] =$UpdatePermission['id'][$i];
                        }
                    }

                    if(!empty($delete_permission))
                    {
                        $response = $setpermission->whereIn('id',$delete_permission)->delete();
                    }
                    if(!empty($set_permission))
                    {
                        $response = $setpermission->insert($set_permission);
                    }

                    $response = $role->save();
                    if($response){
                        $response =  getResponse(true,false,false,null,"Role Update Successfully");

                    }
                    else{
                        $response =  getResponse(false,false,false,null,"Technical isuue, please try again.. !");

                    }

            }



        }
        else
        {
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Invalid Role !");
        }

        return $response;

    }
}
