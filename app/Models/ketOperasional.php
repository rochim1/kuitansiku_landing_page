<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ketOperasional extends Model
{
    use HasFactory;

    protected $table = 'ket_operasional';
    protected $primaryKey = 'id_ket_operasional';
    protected $fillable = [
        'keterangan_operasional'
    ];
}
