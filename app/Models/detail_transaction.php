<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaction extends Model
{
    protected $table = "detail_transaction";
    protected $primaryKey = "id";
    protected $fillable =[
        'id_product','qty','id_trans'
    ];

    use HasFactory;
}
