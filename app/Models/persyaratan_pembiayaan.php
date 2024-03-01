<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratan_pembiayaan extends Model
{
    use HasFactory;

    protected $table = 'persyaratan_pembiayaan';
    protected $primaryKey = 'id_persyaratan_pembiayaan';
    protected $guarded = ['id_persyaratan_pembiayaan'];
}
