<?php

namespace App\Models;
use App\Models\blood_type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_doner extends Model
{
    use HasFactory;
    protected $fillable = [ 
    
    'b_d_name' ,
    'b_d_gender' ,
    'b_d_phone' ,
    'b_d_address' ,
    'b_d_email' ,
    'b_d_password' ,
    'b_d_reprt' ,
    'b_d_age' ,
    'status' ,
    'b_d_blood_type'  
    
    ] ; 
 
}
