<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kalkupem extends Model
{
    use HasFactory;

    protected $table = 'kalkupem';
    protected $primaryKey = 'id_kalkupem';
    protected $guarded = ['id_kalkupem'];
}
