<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kotak_saran extends Model
{
    use HasFactory;

    protected $table = 'kotak_saran';
    protected $primaryKey = 'id_kotak_saran';
    protected $guarded = ['id_kotak_saran'];
}
