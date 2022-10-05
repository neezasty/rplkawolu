<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
   // use HasFactory; ini hanya digunakan untuk data dummy jika tidak digunakan bisa dihapus

   protected $table = "student";
   protected $primaryKey = "id";
   protected $fillable =
   ['nis','name','address','gender','id_class'];

}
