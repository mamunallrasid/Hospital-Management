<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "roles";

    protected $primaryKey = 'role_id';


    public function getCreatedAtAttribute($value)
    {
        return date('d-M-y',strtotime($value));
    }
    public function getActiveRole()
    {
        return $this->where('status',1)->get();
    }



}
