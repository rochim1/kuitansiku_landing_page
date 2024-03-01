<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentang_kami extends Model
{
    use HasFactory;

    protected $table = 'tentang_kami';
    protected $primaryKey = 'id_tentang_kami';
    protected $guarded = ['id_tentang_kami'];   
}
