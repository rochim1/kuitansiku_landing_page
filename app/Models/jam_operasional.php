<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jam_operasional extends Model
{
    use HasFactory;

    protected $table = 'jam_operasional';
    protected $primaryKey = 'id_jam_operasional';
    protected $guarded = ['id_jam_operasional'];
}
