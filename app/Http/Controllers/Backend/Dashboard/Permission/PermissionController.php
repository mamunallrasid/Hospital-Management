<?php

namespace App\Http\Controllers\Backend\Dashboard\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
class PermissionController extends Controller
{
    public function create()
    {
        return view('backend.dashboard.permission.create');
    }
    public function store(PermissionRequest $request)
    {
        $data = new Permission;
        $data->name = $request->name;
        $data->menu = $request->menu;
        $data->slug = $request->slug;
        $data->status = $request->status;
        $response = $data->save();
        if($response){
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Permission Added Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
        }

        return $response;

    }

    public function view()
    {
        return view('backend.dashboard.permission.view');
    }

    public function display(Request $request)
    {
        if ($request->ajax()) {

            $sql = Permission::select('*');
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
                if(getLogInUserPermission('admin.permission.status')){

                    $status = '<select class="form-control Status_Update" name="status" data-id="'.$row->permission_id.'"  data-token="'.csrf_token().'" data-url="'.route('admin.permission.status').'">
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
                $edit ='';
                if(getLogInUserPermission('admin.permission.delete')){

                    $delete = '<a href="javascript:void(0)" data-id="'.$row->permission_id.'" data-token="'.csrf_token().'" data-url="'.route('admin.permission.delete').'" class="Delete_Button"><i class="fa fa-trash btn btn-danger"></i></a>
                ';
                }
                if(getLogInUserPermission('admin.permission.edit')){

                    $edit = '<a href="'.route('admin.permission.edit', ['id' => $row->permission_id]).'" class=""><i class="fa fa-edit btn btn-warning"></i></a>';
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
        $data = Permission::find($request->id);
        if(!empty($data)){
            $data->delete();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Permission Detele Successfully");

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
        $data = Permission::find($request->id);
        if(!empty($data)){
            $data->status = $request->status;
            $data->save();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Permission Status Update Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Update Permission Status !");
        }

     return $response;

    }

    public function edit($id)
    {
        $data = Permission::find($id);
        if(!empty($data))
        {
            return view('backend.dashboard.permission.edit',compact('data'));
        }

        return view('backend.dashboard.permission.view');

    }

    public function update(PermissionRequest $request)
    {
        $data = Permission::find($request->id);
        if(!empty($data))
        {
            $data->name = $request->name;
            $data->menu = $request->menu;
            $data->slug = $request->slug;
            $data->status = $request->status;
            $response = $data->save();
            if($response){
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(true,true,false,route('admin.permission.view'),"Permission Update Successfully");
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
}
