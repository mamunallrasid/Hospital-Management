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
        $patient_details = Patient::with(['log'=>function($query){
            $query->orderBy('id','desc');
        }])->where('id',$id)->first();
        if(!empty($patient_details))
        {
            return view('backend.dashboard.patient.edit',compact('patient_details'));
        }

        return view('backend.dashboard.patient.view');

    }

    public function update(PatientRequest $request)
    {
        $data = Patient::find($request->patient_id);
        if(!empty($data))
        {
            $description = '<b>Patient Updated</b> <br>';
            if($data->form_type != $request->form_type)
            {
                $description .= 'Form Type change from '.$data->form_type.' to '.$request->form_type.'</br>';
            }
            $data->form_type = $request->form_type;
            if($data->bed_no != $request->bed_no)
            {
                $description .= 'Bed Type change from '.$data->bed_no.' to '.$request->bed_no.'</br>';
            }
            $data->bed_no = $request->bed_no;
            if($data->patient_name != $request->patient_name)
            {
                $description .= 'Patient Name change from '.$data->patient_name.' to '.$request->patient_name.'</br>';
            }
            $data->patient_name = $request->patient_name;
            if($data->age != $request->age)
            {
                $description .= 'Age change from '.$data->age.' to '.$request->age.'</br>';
            }
            $data->age = $request->age;
            if($data->gender != $request->gender)
            {
                $description .= 'Gender change from '.$data->gender.' to '.$request->gender.'</br>';
            }
            $data->gender = $request->gender;
            $data->age = $request->age;
            if($data->admission_date != $request->admission_date)
            {
                $description .= 'Admission date change from '.$data->admission_date.' to '.$request->admission_date.'</br>';
            }
            $data->admission_date = $request->admission_date;
            if($data->admission_time != $request->admission_time)
            {
                $description .= 'Admission time change from '.$data->admission_time.' to '.$request->admission_time.'</br>';
            }
            $data->admission_time = $request->admission_time;
            if($data->aadhaar_no != $request->aadhaar_no)
            {
                $description .= 'Aadhaar no change from '.$data->aadhaar_no.' to '.$request->aadhaar_no.'</br>';
            }
            $data->aadhaar_no = $request->aadhaar_no;
            if($data->guardian_name != $request->guardian_name)
            {
                $description .= 'Guardian name change from '.$data->guardian_name.' to '.$request->guardian_name.'</br>';
            }
            $data->guardian_name = $request->guardian_name;
            if($data->address != $request->address)
            {
                $description .= 'Address change from '.$data->address.' to '.$request->address.'</br>';
            }
            $data->address = $request->address;
            if($data->under_doctor != $request->under_doctor)
            {
                $description .= 'Under Doctor change from '.$data->under_doctor.' to '.$request->under_doctor.'</br>';
            }
            $data->under_doctor = $request->under_doctor;
            if($data->refer_doctor_1 != $request->refer_doctor_1)
            {
                $description .= 'Refer Doctor 1 change from '.$data->refer_doctor_1.' to '.$request->refer_doctor_1.'</br>';
            }
            $data->refer_doctor_1 = $request->refer_doctor_1;
            if($data->refer_doctor_2 != $request->refer_doctor_2)
            {
                $description .= 'Refer Doctor 2 change from '.$data->refer_doctor_2.' to '.$request->refer_doctor_2.'</br>';
            }
            $data->refer_doctor_2 = $request->refer_doctor_2;
            if($data->phone_no != $request->phone_no)
            {
                $description .= 'Phone no change from '.$data->phone_no.' to '.$request->phone_no.'</br>';
            }
            $data->phone_no = $request->phone_no;
            if($data->alternative_phone_no != $request->alternative_phone_no)
            {
                $description .= 'Alternative Phone no change from '.$data->alternative_phone_no.' to '.$request->alternative_phone_no.'</br>';
            }
            $data->alternative_phone_no = $request->alternative_phone_no;
            if($data->refer_by != $request->refer_by)
            {
                $description .= 'Refer By change from '.$data->refer_by.' to '.$request->refer_by.'</br>';
            }
            $data->refer_by = $request->refer_by;
            if($data->mode != $request->mode)
            {
                $description .= 'Payment mode change from '.$data->mode.' to '.$request->mode.'</br>';
            }
            $data->mode = $request->mode;
            if($data->urn_no != $request->urn_no)
            {
                $description .= 'URN no change from '.$data->urn_no.' to '.$request->urn_no.'</br>';
            }
            $data->urn_no = $request->urn_no;
            if($data->insurance_name != $request->insurance_name)
            {
                $description .= 'Insurance no change from '.$data->insurance_name.' to '.$request->insurance_name.'</br>';
            }
            $data->insurance_name = $request->insurance_name;
            if($data->anesthesis != $request->anesthesis)
            {
                $description .= 'Anesthesis change from '.$data->anesthesis.' to '.$request->anesthesis.'</br>';
            }
            $data->anesthesis = $request->anesthesis;
            if($data->child_doctor != $request->child_doctor)
            {
                $description .= 'Anesthesis change from '.$data->child_doctor.' to '.$request->child_doctor.'</br>';
            }
            $data->child_doctor = $request->child_doctor;
            if($data->assistance_1 != $request->assistance_1)
            {
                $description .= 'Assistance 1 change from '.$data->assistance_1.' to '.$request->assistance_1.'</br>';
            }
            $data->assistance_1 = $request->assistance_1;
            if($data->assistance_2 != $request->assistance_2)
            {
                $description .= 'Assistance 2 change from '.$data->assistance_2.' to '.$request->assistance_2.'</br>';
            }
            $data->assistance_2 = $request->assistance_2;
            if($data->status != $request->status)
            {
                $description .= 'Patient Status change from '.getStatus($data->status).' to '.getStatus($request->status).'</br>';
            }
            $data->status = $request->status;
            if($data->discharge_status != $request->discharge_status)
            {
                $description .= 'Discharge Status change from '.getPatientDischarge($data->discharge_status).' to '.getPatientDischarge($request->discharge_status).'</br>';
            }
            $data->discharge_status = $request->discharge_status;

            $update = $data->save();
            if($update){
                $admin = getActiveAdminDetails();
                if($admin->role == null){
                    $role =  'Administartor';
                }
                else{
                    $role =  $admin->role->name;
                }
                $log_title = 'Patient Updated by &nbsp;<b>'.$admin->name.'('.$role.')</b>';
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
                $response =  getResponse(true,false,true,null,"Patient Update Successfully");

            }
            else{
                // getResponse(status,redirect,reload,url,message)

                $response =  getResponse(false,false,false,null,"Technical isuue, please try again.. !");

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
