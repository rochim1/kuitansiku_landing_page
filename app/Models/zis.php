<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zis extends Model
{
    use HasFactory;

    protected $table = 'zis';
    protected $primaryKey = 'id_zis';
    protected $guarded = ['id_zis'];
}
