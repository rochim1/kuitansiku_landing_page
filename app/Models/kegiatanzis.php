<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatanzis extends Model
{
    use HasFactory;

    protected $table = 'kegiatanzis';
    protected $primaryKey = 'id_kegiatanzis';
    protected $guarded = ['id_kegiatanzis'];
}
