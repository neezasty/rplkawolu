<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable =[
        'name','desc','stock','pict','price'
    ];

    use HasFactory;
}
