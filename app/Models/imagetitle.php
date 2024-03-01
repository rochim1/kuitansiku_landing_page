<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagetitle extends Model
{
    use HasFactory;

    protected $table = 'imagetitle';
    protected $primaryKey = 'id_imagetitle';
    protected $guarded = ['id_imagetitle'];
}
