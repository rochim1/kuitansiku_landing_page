<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keunggulan extends Model
{
    use HasFactory;

    protected $table = 'keunggulan';
    protected $primaryKey = 'id_keunggulan';
    protected $guarded = ['id_keunggulan'];
}
