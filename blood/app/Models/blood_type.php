<?php

namespace App\Models;
use App\Models\blood_doner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_type extends Model
{
    use HasFactory;
    public function blood_doner()
    {
        return $this->belongsto(blood_doner::class);
    }
}
