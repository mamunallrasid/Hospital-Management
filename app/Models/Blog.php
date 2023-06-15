<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "blogs";
    protected $primaryKey = 'id';
    public function getCreatedAtAttribute($value)
    {
        return date('d-M-y',strtotime($value));
    }
    public function category()
    {
       return $this->belongsTo(Category::class,'category_id');
    }
    public function user()
    {
       return $this->belongsTo(User::class,'user_id');
    }
}
