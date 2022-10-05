<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table = "teacher";
    protected $primaryKey = "id";
    protected $fillable =[
        'name','gender','address', "nohp"
    ];

    use HasFactory;
}
