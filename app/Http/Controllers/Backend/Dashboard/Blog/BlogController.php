<?php

namespace App\Http\Controllers\Backend\Dashboard\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProductBrand;
use Illuminate\Support\Facades\DB;
use DataTables;
use Session;
class BlogController extends Controller
{
    public function create()
    {
        $category = Category::where('status','1')->get();
        return view('backend.dashboard.blog.create',compact('category'));
    }
    public function store(BlogRequest $request)
    {
        $data = new Blog;
        $data->user_id = Session::get('AdminId');
        $data->title = $request->title;
        $data->category_id = $request->category;
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->status = $request->status;
        $response = $data->save();
        if($response){
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,true,null,"Blog Added Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Technical issue, please try again..");
        }

        return $response;

    }

    public function view()
    {
        return view('backend.dashboard.blog.view');
    }

    public function display(Request $request)
    {
        if ($request->ajax()) {

            $sql = Blog::with(['user','category'])->select('*');
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
                if(getLogInUserPermission('admin.blog.status')){
                    $status = '<select class="form-control Status_Update" name="status" data-id="'.$row->id.'"  data-token="'.csrf_token().'" data-url="'.route('admin.blog.status').'">
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
                if(getLogInUserPermission('admin.blog.delete')){
                    $delete = '<a href="javascript:void(0)" data-id="'.$row->id.'" data-token="'.csrf_token().'" data-url="'.route('admin.blog.delete').'" class="btn btn-danger btn-sm Delete_Button"><i class="fa fa-trash"></i></a>
                ';
                }
                if(getLogInUserPermission('admin.blog.edit')){
                    $edit = '<a href="'.route('admin.blog.edit', ['id' => $row->id]).'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>';
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
        $data = Blog::find($request->id);
        if(!empty($data)){
            $data->delete();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Blog Detele Successfully");

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
        $data = Blog::find($request->id);
        if(!empty($data)){
            $data->status = $request->status;
            $data->save();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,false,false,null,"Blog Status Update Successfully");
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Not Update Role Status !");
        }

     return $response;

    }

    public function edit($id)
    {
        $data = Blog::with('user','category')->find($id);
        $category = Category::where('status','1')->get();
        if(!empty($data))
        {
            return view('backend.dashboard.blog.edit',compact('data','category'));
        }

        return view('backend.dashboard.blog.view');

    }

    public function update(BlogRequest $request)
    {
        $data = Blog::find($request->id);
        if(!empty($data))
        {
            $data->title = $request->title;
            $data->category_id = $request->category;
            $data->short_description = $request->short_description;
            $data->long_description = $request->long_description;
            $data->status = $request->status;
            $response = $data->save();
            if($response){
                $response =  getResponse(true,true,false,route('admin.blog.view'),"Blog Update Successfully");
            }
            else{
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
