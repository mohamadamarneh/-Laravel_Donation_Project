<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_doner extends Model
{
    use HasFactory;
    protected $fillable=[
        'status',
        'request_date',
        'b_d_n_id',
        'b_d_id'

    ];
}
