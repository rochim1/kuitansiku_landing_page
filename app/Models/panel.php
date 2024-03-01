<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panel extends Model
{
    use HasFactory;

    protected $table = 'panel';
    protected $primaryKey = 'id_panel';
    protected $guarded = ['id_panel'];
}
