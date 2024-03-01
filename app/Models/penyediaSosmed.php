<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyediaSosmed extends Model
{
    protected $table = 'penyedia_sosmed';
    protected $primaryKey = 'id_penyedia_sosmed';
    protected $fillable = ['nama_penyedia_sosmed'];
    use HasFactory;
}
