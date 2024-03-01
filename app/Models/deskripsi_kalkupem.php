<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deskripsi_kalkupem extends Model
{
    use HasFactory;

    
    protected $table = 'deskripsi_kalkupem';
    protected $primaryKey = 'id_deskripsi_kalkupem';
    protected $guarded = ['id_deskripsi_kalkupem'];
}
