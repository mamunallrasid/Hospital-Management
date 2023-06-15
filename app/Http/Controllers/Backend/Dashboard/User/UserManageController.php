<?php

namespace App\Http\Controllers\Backend\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserRequest;
use App\Models\Permission;
use App\Models\SetPermission;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use DataTables;
class UserManageController extends Controller
{
    public function create()
    {
        $activeRole = Role::where('status',1)->get();
        return view('backend.dashboard.user.create',compact('activeRole'));
    }
    public function store(UserRequest $request)
    {
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = encryptPassword($request->password);
        $data->status = $request->status;
        $data->role_id = $request->role_type;
        $data->remember_token = md5(rand());
        $response = $data->save();
        if($response){
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"User Added Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
        }

        return $response;

    }

    public function view()
    {
        $activeRole = Role::where('status',1)->get();
        return view('backend.dashboard.user.view',compact('activeRole'));
    }

    public function display(Request $request)
    {
        if ($request->ajax()) {

            $sql = User::with(['role'])->select('*');
            $row = $request->row;
            $type = $request->type;
            $from_date = $request->from_date;
            $to_date = $request->to_date;

            $status = $request->status;
            if($type !="")
            {
              $sql->where('role_id',$type);
            }
            if($status !="")
            {
               $sql->where('status',$status);
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

            // dd($sql->get());
            // $sql->orderby('id','ASC');

            // if($row !="All")
            // {
            //   $sql->limit($row);
            // }
            return Datatables::of($sql)
            ->editColumn('role_type', function ($row) {
                if($row->role == null){
                    return '<span class="badge bg-success">Administrator</span>';
                }
                else{
                    return '<span class="badge bg-success">'.$row->role->name.'</span>';
                }
            })
            ->addColumn('status', function ($row) {
                $active="";
                $deactive="";
                $blank="";
                if($row->status==1){
                    $active ="selected";
                }
                if($row->status==0){
                    $deactive ="selected";
                }
                if($row->status==null || $row->status ==""){
                    $blank ="selected";
                }
                $status ='';
                if(getLogInUserPermission('admin.user.status')){

                    $status = '<select class="form-control Status_Update" name="status" data-id="'.$row->id.'"  data-token="'.csrf_token().'" data-url="'.route('admin.user.status').'">
                                <option value="" '.$blank.'>Select</option>
                                <option value="1" '.$active.'>Active</option>
                                <option value="0" '.$deactive.'>Deactive</option>
                            </select>
                        ';
                }

                return $status;
            })
            ->addColumn('action', function ($row) {
                $delete = '';
                $edit = '';
                $user_permission = '';
                if(getLogInUserPermission('admin.user.delete')){

                    $delete = '<a href="javascript:void(0)" data-id="'.$row->id.'" data-token="'.csrf_token().'" data-url="'.route('admin.user.delete').'" class="btn btn-danger btn-sm Delete_Button" title="User Delete"><i class="fa fa-trash"></i></a>
                ';
                }
                if(getLogInUserPermission('admin.user.edit')){

                    $edit = '<a href="'.route('admin.user.edit', ['id' => $row->id]).'" class="btn btn-warning btn-sm" title="User Update"><i class="fa fa-edit"></i></a>';
                }
                if(getLogInUserPermission('admin.user.permission')){
                     $user_permission = '<a href="'.route('admin.user.permission', ['id' => $row->id]).'" class="btn btn-info btn-sm" title="User Permission"><i class="fa fa-unlock"></i></a>';
                }
                return $delete.'&nbsp;&nbsp;'.$edit.'&nbsp;&nbsp'.$user_permission;
            })
            ->escapeColumns([])
            ->make(true);
            }
    }

    public function delete(Request $request)
    {
        # code...
        $data = User::find($request->id);
        if(!empty($data)){
            $data->delete();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"User Detele Successfully");

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
        $data = User::find($request->id);
        if(!empty($data)){
            $data->status = $request->status;
            $data->save();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"User Status Update Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Update Role Status !");
        }

     return $response;

    }

    public function edit($id)
    {
        $data = User::find($id);
        $activeRole = Role::where('status',1)->get();
        if(!empty($data))
        {
            return view('backend.dashboard.user.edit',compact('data','activeRole'));
        }

        return view('backend.dashboard.user.view');
    }

    public function update(UserRequest $request)
    {
        $data = User::find($request->id);
        if(!empty($data))
        {
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = encryptPassword($request->password);
            $data->status = $request->status;
            $data->role_id = $request->role_type;
            $data->remember_token = md5(rand());
            $response = $data->save();
            if($response){
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(true,true,false,route('admin.user.view'),"User Update Successfully");
            }
            else{
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
            }
        }
        else
        {
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Invalid Role !");
        }

        return $response;

    }

    public function userPermission($id)
    {
        $data = User::with(['role','setPermission'])->find($id);
        if(!empty($data))
        {
            $SetPermission = [];
            if($data->setPermission->count()>0){
                foreach($data->setPermission as $permission_id){
                    $SetPermission[]= $permission_id->permission_id;
                }
            }
            $role_id  = $data->role_id;
            $activePermission = Permission::where('status',1)->get();
            return view('backend.dashboard.user.permission',compact('data','activePermission','SetPermission'));
        }

        return redirect()->route('admin.user.view');
    }

}
