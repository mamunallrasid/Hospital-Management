<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class SetPermission extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "set_permissions";

    protected $primaryKey = 'id';

    public function AllPermission($role_id)
    {
        $data =  $this->where('role_id',$role_id)->get();
        $all_permission['id'] =[];
        $all_permission['permission_id'] =[];
        if($data->count() >0)
        {
            foreach($data as $permission){
                $all_permission['id'][] = $permission->id;
                $all_permission['permission_id'][] = $permission->permission_id;

            }
        }
        return $all_permission;
    }

    public function role()
    {
        return $this->hasOne(Role::class,'role_id','role_id');
    }
    public function permission()
    {
        return $this->hasOne(Permission::class,'permission_id','permission_id');
    }
}
