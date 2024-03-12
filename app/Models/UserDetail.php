<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'name', 
        'dob',
        'gender',
        'phone',
        'second_phone',
        'country',
        'state',
        'district',
        'pincode',
        'full_address',
        'image',
        'status',
        'delete_status',
    ];
    
     public function user_class()
    {
        return $this->belongsTo(StudentClass::class,'class_id'); 
    }
    
}
