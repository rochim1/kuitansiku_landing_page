<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jumbotron extends Model
{
    use HasFactory;

    protected $table = 'jumbotron';
    protected $primaryKey = 'id_jumbotron';
    protected $guarded = ['id_jumbotron'];
}
