<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "permissions";

    protected $primaryKey = 'permission_id';

    public function getCreatedAtAttribute($value)
    {
        return date('d-M-y',strtotime($value));
    }

}
