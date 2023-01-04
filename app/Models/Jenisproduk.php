<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisproduk extends Model
{
    protected $table = 'jenisproduk';
    protected $fillable = ['id','kategori','nama','keterangan'];
}
