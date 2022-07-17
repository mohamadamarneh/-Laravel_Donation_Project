<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_doner_needed extends Model
{
    use HasFactory;
 protected $fillable = [
    'b_d_n_name',
    'b_d_n_gender',
    'b_d_n_phone',
    'b_d_n_address',
    'b_d_n_email',
    'b_d_n_password',
    'b_d_n_age',
    'b_d_n_blood_type'
 ];

}
