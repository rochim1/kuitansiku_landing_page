<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deskontak extends Model
{
    use HasFactory;

    protected $table = 'deskontak';
    protected $primaryKey = 'id_deskontak';
    protected $guarded = ['id_deskontak'];
}
