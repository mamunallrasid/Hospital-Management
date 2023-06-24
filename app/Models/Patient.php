<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "patients";

    protected $primaryKey = 'id';
    public function getCreatedAtAttribute($value)
    {
        return date('d-M-y',strtotime($value));
    }

    public function log() {
        return $this->hasMany(LogModel::class,'patient_id','id');
    }
}
