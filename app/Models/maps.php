<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maps extends Model
{
    use HasFactory;

    protected $table = 'maps';
    protected $primaryKey = 'id_maps';
    protected $fillable = ['link_maps'];
}
