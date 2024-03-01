<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katepem extends Model
{
    use HasFactory;

    protected $table = 'katepem';
    protected $primaryKey = 'id_katepem';
    protected $guarded = ['id_katepem'];

    public function pembiayaan()
    {
        return $this->hasMany(pembiayaan::class, 'id_katepem', 'id_katepem');
    }
}
