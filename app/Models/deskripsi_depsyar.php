<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deskripsi_depsyar extends Model
{
    use HasFactory;
    protected $table = 'deskripsi_depsyar';
    protected $primaryKey = 'id_deskripsi_depsyar';
    protected $fillable = ['deskripsi_depsyar'];
}
