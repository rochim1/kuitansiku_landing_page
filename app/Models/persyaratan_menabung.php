<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratan_menabung extends Model
{
    use HasFactory;

    protected $table = 'persyaratan_menabung';
    protected $primaryKey = 'id_persyaratan_menabung';
    protected $guarded = ['id_persyaratan_menabung'];
}
