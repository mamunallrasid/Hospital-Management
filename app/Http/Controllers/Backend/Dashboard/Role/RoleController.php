<?php

namespace App\Http\Controllers\Backend\Dashboard\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RoleRequest;
use App\Models\Permission;
use App\Models\SetPermission;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use DataTables;
class RoleController extends Controller
{
    public function create()
    {
        $activePermission = Permission::where('status',1)->get();
        return view('backend.dashboard.role.create',compact('activePermission'));
    }
    public function store(RoleRequest $request)
    {
        $data = new Role;
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->all = $request->permission_type;
        $data->status = $request->status;
        if($request->permission_type=='1')
        {
            $response = $data->save();
            if($response){
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(true,false,false,null,"Role Added Successfully");
            }
            else{
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
            }
        }
        else
        {
            $response = $data->save();
            if($response){
                $permission = $request->permission_id;
                $countPermission = count($permission);
                $set_permision = [];
                for($i=0;$i<$countPermission;$i++){

                    $set_permision[] = [
                        'role_id'=>$data->role_id,
                        'permission_id'=>$permission[$i]
                    ];
                }

                $response = SetPermission::insert($set_permision);
                if($response){
                    // getResponse(status,redirect,reload,url,message)
                    $response =  getResponse(true,false,false,null,"Role Added Successfully");
                }
                else{
                    // getResponse(status,redirect,reload,url,message)
                    $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
                }

            }
            else{
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
            }
        }


        return $response;

    }

    public function view()
    {
        return view('backend.dashboard.role.view');
    }

    public function display(Request $request)
    {
        if ($request->ajax()) {

            $sql = Role::select('*');
            $row = $request->row;
            $type = $request->type;
            $from_date = $request->from_date;
            $to_date = $request->to_date;

            $status = $request->status;
            if($type !="")
            {
              $sql->where('shop_type_id',$type);
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

            // $sql->orderby('id','ASC');

            // if($row !="All")
            // {
            //   $sql->limit($row);
            // }
            return Datatables::of($sql)
            ->editColumn('slug', function ($row) {
                return '<span class="badge bg-success">'.$row->slug.'</span>';
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
                $status = '';
                if(getLogInUserPermission('admin.role.status')){
                    $status = '<select class="form-control Status_Update" name="status" data-id="'.$row->role_id.'"  data-token="'.csrf_token().'" data-url="'.route('admin.role.status').'">
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
                if(getLogInUserPermission('admin.role.delete')){
                    $delete = '<a href="javascript:void(0)" data-id="'.$row->role_id.'" data-token="'.csrf_token().'" data-url="'.route('admin.role.delete').'" class="btn btn-danger btn-sm Delete_Button"><i class="fa fa-trash"></i></a>
                ';
                }
                if(getLogInUserPermission('admin.role.edit')){
                    $edit = '<a href="'.route('admin.role.edit', ['id' => $row->role_id]).'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>';
                }
                return $delete.'&nbsp;&nbsp;'.$edit;
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
        $data = Role::find($id);
        $activePermission = Permission::where('status',1)->get();
        $userPermission = SetPermission::where('role_id',$id)->pluck('permission_id')->ToArray();

        if(!empty($data))
        {
            return view('backend.dashboard.role.edit',compact('data','activePermission','userPermission'));
        }

        return view('backend.dashboard.role.view');

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
