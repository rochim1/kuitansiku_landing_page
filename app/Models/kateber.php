<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kateber extends Model
{
    use HasFactory;

    protected $table = 'kateber';
    protected $primaryKey = 'id_kateber';
    protected $guarded = ['id_kateber'];
    protected $fillable = ['id_kateber','nama_kateber'];
}
